import React, { useState, useEffect } from 'react';
import './Header.css';
import Contact from '@components/Contact/Contact';

const Header = () => {
  const [isMenuOpen, setIsMenuOpen] = useState(false);
  const [isLoaded, setIsLoaded] = useState(false);
  const [isContactVisible, setIsContactVisible] = useState(false);

  useEffect(() => {
    setIsLoaded(true);
  }, []);

  const toggleMenu = () => {
    setIsMenuOpen(!isMenuOpen);
  };

  const handleContactClick = () => {
    setIsContactVisible(true);
  };

  return (
    <header className="header">
      <nav>
        <h1 className={`logo ${isLoaded ? 'loaded' : ''}`}>
          <a href="/" title="Chirag's Portfolio">Chirag..</a>
        </h1>
        <div className={`menu-icon ${isMenuOpen ? 'open' : ''}`} onClick={toggleMenu}>
          <span></span>
          <span></span>
          <span></span>
        </div>
        <ul className={`nav-links ${isMenuOpen ? 'open' : ''} ${isLoaded ? 'loaded' : ''}`}>
          <li><a href="/" title="Home">Home</a></li>
          <li><a href="/about" title="About Chirag">About</a></li>
          <li><a href="/works" title="Chirag's Works">Works</a></li>
          <li>
            <button onClick={handleContactClick} title="Contact Chirag" className="contact-btn">
              Contact Me
            </button>
          </li>
        </ul>
      </nav>
      {isContactVisible && (
        <Contact onClose={() => setIsContactVisible(false)} />
      )}
    </header>
  );
};

export default Header;