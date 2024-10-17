import React from 'react';
import { BrowserRouter as Router, Routes, Route } from 'react-router-dom';
import HomePage from "./pages/HomePage/HomePage";
import AboutPage from "./pages/AboutPage/AboutPage";
import WorkPage from "./pages/WorkPage/WorkPage";
import PageTransition from './components/PageTransition/PageTransition'; // Import the PageTransition component

function App() {
  return (
    <div className="App">
      <Router>
        <PageTransition>
          <Routes>
            <Route path="/" element={<HomePage />} />
            <Route path="/about" element={<AboutPage />} />
            <Route path="/works" element={<WorkPage />} />
          </Routes>
        </PageTransition>
      </Router>
    </div>
  );
}

export default App;