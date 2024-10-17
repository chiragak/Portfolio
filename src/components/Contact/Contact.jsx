import React, { useState, useRef } from 'react';
import emailjs from 'emailjs-com';
import './Contact.css';

const Contact = ({ onClose }) => {
  const [name, setName] = useState('');
  const [email, setEmail] = useState('');
  const [message, setMessage] = useState('');
  const [status, setStatus] = useState('');
  const form = useRef();

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
      }, (error) => {
        console.log(error.text);
        setStatus('Failed to send message. Please try again.');
      });
  };

  return (
    <div className="contact-overlay">
      <div className="contact-container">
        <button className="close-btn" onClick={onClose}>&times;</button>
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
  );
};

export default Contact;

