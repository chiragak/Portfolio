import React, { useEffect, useRef, useState } from 'react';
import emailjs from 'emailjs-com';
import './Home.css';
import profile from "../../assets/images/myprofile.png";

const Home = () => {
  const imageRef = useRef(null);
  const fullstackRef = useRef(null);
  const webdeveloperRef = useRef(null);
  const [isDesktop, setIsDesktop] = useState(window.innerWidth >= 1024);
  const [showContact, setShowContact] = useState(false);
  const [name, setName] = useState('');
  const [email, setEmail] = useState('');
  const [message, setMessage] = useState('');
  const [status, setStatus] = useState('');
  const form = useRef();

  useEffect(() => {
    const handleResize = () => {
      setIsDesktop(window.innerWidth >= 1024);
    };

    const handleMouseMove = (e) => {
      if (isDesktop && imageRef.current) {
        const { clientX, clientY } = e;
        const { innerWidth, innerHeight } = window;
        
        const xOffset = (clientX - innerWidth / 2) / 25;
        const yOffset = (clientY - innerHeight / 2) / 25;

        imageRef.current.style.transform = `translate(${xOffset}px, ${yOffset}px)`;
      }
    };

    window.addEventListener('resize', handleResize);
    if (isDesktop) {
      window.addEventListener('mousemove', handleMouseMove);
    }

    // Trigger animations
    if (fullstackRef.current) {
      fullstackRef.current.classList.add('animate-fullstack');
    }
    if (webdeveloperRef.current) {
      webdeveloperRef.current.classList.add('animate-webdeveloper');
    }

    return () => {
      window.removeEventListener('resize', handleResize);
      if (isDesktop) {
        window.removeEventListener('mousemove', handleMouseMove);
      }
    };
  }, [isDesktop]);

  const sendEmail = (e) => {
    e.preventDefault();
    setStatus('Sending...');

    emailjs.sendForm('service_u5ikspm', 'template_yaudoa8', form.current, 'A_1lc9ivZuBi_1aSU')
      .then((result) => {
        console.log(result.text);
        setStatus('Message sent successfully!');
        setName('');
        setEmail('');
        setMessage('');
        setTimeout(() => {
          setShowContact(false);
          setStatus('');
        }, 3000);
      }, (error) => {
        console.log(error.text);
        setStatus('Failed to send message. Please try again.');
      });
  };

  return (
    <main className="home-container">
      <h1 className="intro-text">I'm Chirag and a freelancer who enjoys working on projects</h1>
      <div className="title-container">
        <h2 className="fullstack" ref={fullstackRef}>Fullstack</h2>
        <h3 className="webdeveloper" ref={webdeveloperRef}>Webdeveloper</h3>
      </div>
      <div className="content-wrapper">
        <div className="image-wrapper">
          <img 
            ref={imageRef}
            src={profile} 
            alt="Fullstack Web Developer" 
            className={`developer-image ${isDesktop ? 'desktop' : ''}`} 
          />
        </div>
        <div className="button-container">
          <a href="./Chirag_Resume.pdf" download className="btn download-btn">Download Resume</a>
          <button onClick={() => setShowContact(true)} className="btn hire-btn">Hire Me</button>
        </div>
      </div>

      {showContact && (
        <div className="contact-overlay">
          <div className="contact-container">
            <button className="close-btn" onClick={() => setShowContact(false)}>&times;</button>
            <div className="contact-content">
              <h1 className="contact-title">Get in Touch</h1>
              <p className="contact-subtitle">I'd love to hear from you! Drop me a message and I'll get back to you as soon as possible.</p>
              <form ref={form} onSubmit={sendEmail} className="contact-form">
                <div className="form-group">
                  <label htmlFor="name">Name</label>
                  <input
                    type="text"
                    id="name"
                    name="name"
                    value={name}
                    onChange={(e) => setName(e.target.value)}
                    required
                  />
                </div>
                <div className="form-group">
                  <label htmlFor="email">Email</label>
                  <input
                    type="email"
                    id="email"
                    name="email"
                    value={email}
                    onChange={(e) => setEmail(e.target.value)}
                    required
                  />
                </div>
                <div className="form-group">
                  <label htmlFor="message">Message</label>
                  <textarea
                    id="message"
                    name="message"
                    value={message}
                    onChange={(e) => setMessage(e.target.value)}
                    required
                  ></textarea>
                </div>
                <button type="submit" className="submit-btn">Send Message</button>
              </form>
              {status && <p className="status-message">{status}</p>}
            </div>
          </div>
        </div>
      )}
    </main>
  );
};

export default Home;

