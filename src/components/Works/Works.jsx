import React from 'react';
import { motion } from 'framer-motion';
import './Works.css';
import narasimha from "../../assets/images/narasimha.svg";
import eventifyconnect from "../../assets/images/eventifyconnect.png";

const fadeInUpVariants = {
  hidden: { opacity: 0, y: 20 },
  visible: { opacity: 1, y: 0, transition: { duration: 0.6 } }
};

const staggerVariants = {
  hidden: { opacity: 0 },
  visible: {
    opacity: 1,
    transition: {
      staggerChildren: 0.2
    }
  }
};

function Works() {
  return (
    <motion.div 
      className="works-container"
      initial="hidden"
      animate="visible"
      variants={staggerVariants}
    >
      <motion.div className="project" variants={fadeInUpVariants}>
        <div className="project-content">
          <h2 className="project-title">Narasimha Enterprises Hospitality</h2>
          <p className="project-subtitle">A comprehensive hospitality management website</p>
          <motion.div 
            className="image-wrapper"
            whileHover={{ scale: 1.02 }}
            transition={{ type: "spring", stiffness: 300 }}
          >
            <img src={narasimha} alt="Narasimha Enterprises Hospitality" className="project-image" />
          </motion.div>
          <div className="description">
            <p className="description-text">
              Developed a comprehensive website for Narasimha Enterprises Hospitality, highlighting their services, team, and clients. The site features dedicated sections for About Us, Services, Our Team, Our Clients, and Contact Information.
            </p>
            <motion.a 
              href="https://narasimhaenterpriseshospitality.in/" 
              target="_blank" 
              rel="noopener noreferrer"
              className="view-project-btn"
              whileHover={{ scale: 1.05 }}
              whileTap={{ scale: 0.95 }}
            >
              View Project
            </motion.a>
          </div>
        </div>
      </motion.div>

      <motion.div className="project" variants={fadeInUpVariants}>
        <div className="project-content">
          <h2 className="project-title">EventifyConnect</h2>
          <p className="project-subtitle">A event/venue booking platform</p>
          <motion.div 
            className="image-wrapper"
            whileHover={{ scale: 1.02 }}
            transition={{ type: "spring", stiffness: 300 }}
          >
            <img src={eventifyconnect} alt="Eventify Connect" className="project-image" />
          </motion.div>
          <div className="description">
            <p className="description-text">
              Created an event management platform for EventifyConnect, providing tools for event planning, management, and execution. The platform includes features such as venue selection, guest management, and booking services.
            </p>
            <motion.a 
              href="https://eventifyconnect.com/" 
              target="_blank" 
              rel="noopener noreferrer"
              className="view-project-btn"
              whileHover={{ scale: 1.05 }}
              whileTap={{ scale: 0.95 }}
            >
              View Project
            </motion.a>
          </div>
        </div>
      </motion.div>
    </motion.div>
  );
}

export default Works;