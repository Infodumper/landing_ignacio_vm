import { useState } from 'react'
import './App.css'

function App() {
  return (
    <div className="app-container bg-gradient-noise">
      <nav className="navbar glass-panel">
        <div className="logo">AGENTS<span>_</span></div>
        <div className="nav-links">
          <a href="#about">Quien Soy</a>
          <a href="#projects">Proyectos</a>
          <a href="#contact" className="btn-accent">Hablemos</a>
        </div>
      </nav>

      <main>
        <section className="hero">
          <div className="hero-content">
            <p className="overline">Hola, soy</p>
            <h1 className="hero-title">Tu Nuevo Aliado <br/><span>Digital.</span></h1>
            <p className="hero-subtitle">
              Construyo experiencias que desafían la gravedad. 
              Diseño, desarrollo y optimizo soluciones de impacto para tu marca personal.
            </p>
            <div className="hero-actions">
              <button className="primary-btn">Explorar Proyectos</button>
              <button className="secondary-btn">Escríbeme</button>
            </div>
          </div>
          <div className="hero-visual">
            <div className="blob sky"></div>
            <div className="blob teal"></div>
          </div>
        </section>
      </main>

      <footer className="footer glass-panel">
        <p>© 2026 Web Personal Promoción. Built with AGENTS skills.</p>
      </footer>
    </div>
  )
}

export default App
