import React, { useEffect, useRef } from 'react';
import './About.css';
import profileImage from '../../assets/images/myprofile.png';
import awsDeveloperLogo from '../../assets/images/awsdeveloper.png';
import awsCloudPractitionerLogo from '../../assets/images/awspractioner.png';
import IconCloud from "@/components/magicui/icon-cloud";

const slugs = [
  "figma", "html5", "css3", "javascript", "react", "django", "java", "amazonaws",
  "visualstudiocode", "git", "vercel", "express", "androidstudio", "redux",
  "python", "mysql", "mongodb", "firebase", "sass"
];

const About = () => {
  const profileImageRef = useRef(null);
  const aboutTextRef = useRef(null);
  const certificationRefs = useRef([]);
  const skillsRef = useRef(null);

  useEffect(() => {
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add('animate-in');
          }
        });
      },
      { threshold: 0.1 }
    );

    if (profileImageRef.current) observer.observe(profileImageRef.current);
    if (aboutTextRef.current) observer.observe(aboutTextRef.current);
    certificationRefs.current.forEach((ref) => {
      if (ref) observer.observe(ref);
    });
    if (skillsRef.current) observer.observe(skillsRef.current);

    return () => observer.disconnect();
  }, []);

  return (
    <div className="about-container">
      <section className="about-section">
        <h2 className="section-title animate-title">About Me</h2>
        <div className="about-content">
          <img ref={profileImageRef} src={profileImage} alt="Chirag" className="profile-image" />
          <div ref={aboutTextRef} className="about-text">
            <p>Hey there! I'm Chirag, a dedicated full-stack web developer with a passion for cloud technologies. Graduating from Sahyadri College with a degree in Information Science and Engineering, I'm equipped with the skills and knowledge to tackle the digital world's challenges.</p>
            <ul>
              <li>Mastering AWS certifications to stay ahead in cloud computing</li>
              <li>Debugging code swiftly and efficiently</li>
              <li>Pushing boundaries through intense problem-solving sessions</li>
              <li>Writing JavaScript and perfecting Java</li>
            </ul>
          </div>
        </div>
      </section>

      <section className="certification-section">
        <h2 className="section-title animate-title">Certifications</h2>
        <div className="certifications">
          {[awsDeveloperLogo, awsCloudPractitionerLogo].map((logo, index) => (
            <div key={index} ref={(el) => (certificationRefs.current[index] = el)} className="certification">
              <img src={logo} alt={`AWS Certification ${index + 1}`} />
              <h3>{index === 0 ? "AWS Certified Developer – Associate" : "AWS Certified Cloud Practitioner"}</h3>
              <p>{index === 0 ? "Proficiency in developing, deploying, and debugging cloud-based applications using AWS." : "Comprehensive understanding of AWS Cloud concepts, services, security, architecture, pricing, and support."}</p>
            </div>
          ))}
        </div>
      </section>

      <section className="skills-section">
        <h2 className="section-title animate-title">Skills</h2>
        <div ref={skillsRef} className="skills-content">
          <div className="icon-cloud-container">
            <IconCloud iconSlugs={slugs} />
          </div>
          <div className="skills-list">
            <p>Front-End Development: HTML, CSS, JavaScript, React</p>
            <p>Back-End Development: Django, Express.js, Java</p>
            <p>Cloud Computing: AWS services</p>
            <p>Development Tools: Git, VS Code, Android Studio, Vercel</p>
            <p>Design: Figma</p>
          </div>
        </div>
      </section>
    </div>
  );
};

export default About;

