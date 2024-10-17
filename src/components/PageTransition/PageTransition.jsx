import React, { useState, useEffect } from 'react';
import './PageTransition.css';

const PageTransition = ({ children }) => {
  const [isAnimating, setIsAnimating] = useState(true);

  useEffect(() => {
    const timer = setTimeout(() => {
      setIsAnimating(false);
    }, 2000); // Reduced duration to 2 seconds for a snappier feel

    return () => clearTimeout(timer);
  }, []);

  if (!isAnimating) return children;

  return (
    <div className="page-transition">
      <div className="transition-overlay">
        <div className="transition-line"></div>
        <div className="transition-line"></div>
        <div className="transition-line"></div>
      </div>
      <h1 className="transition-text">Chirag..</h1>
    </div>
  );
};

export default PageTransition;