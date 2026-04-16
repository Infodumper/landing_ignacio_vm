import React from 'react'
import Projects from './components/Projects'

/**
 * @Infodumper Portfolio - Main Orchestrator
 * Arquitectura de 4 Capas (Software Factory Standard)
 */
function App() {

  // Capa 4: Observabilidad (Health Check)
  React.useEffect(() => {
    console.log("Portfolio Orchestrator Mounted | ADN Chapitas v1.0");
  }, []);

  return (
    <div className="portfolio-orchestrator">
      
      {/* Capa 2: Orquestación (Identidad & Navegación) */}
      <nav>
        <a href="#" className="brand">@Infodumper<span>.</span></a>
        <div className="nav-links">
          <a href="#proyectos">Sistemas</a>
          <a href="#about">Estrategia</a>
          <a href="#contacto">Contacto</a>
        </div>
      </nav>

      <div className="container">
        
        {/* Capa 1: Directiva (Hero / Visión) */}
        <section className="hero">
          <p className="overline">High Performance Architecture</p>
          <h1>Sistemas que <br/><span>Escalan.</span></h1>
          <p className="hero-subtitle">
            Especialista en desarrollo de infraestructuras críticas, 
            automatización de procesos y orquestación masiva de datos mediante el modelo de 4 capas.
          </p>
          <div className="hero-actions">
            <a href="#proyectos" className="btn-primary">Ver Portafolio</a>
          </div>
        </section>

        {/* Capa 3: Ejecución (Módulos de Negocio / Proyectos) */}
        <section id="proyectos">
          <h2 style={{ fontSize: '1.5rem', marginBottom: '3rem', color: 'var(--accent)', textTransform: 'uppercase', letterSpacing: '4px' }}>
            Proyectos Destacados
          </h2>
          <Projects />
        </section>

        {/* Capa 4: Observabilidad (Feedback & Footer) */}
        <footer>
          <div style={{ marginBottom: '2rem', opacity: 0.5 }}>
            <p>System Status: Online</p>
          </div>
          <p>© 2026 @Infodumper | Orquestación & Ingeniería</p>
          <p style={{ marginTop: '1rem', fontSize: '0.7rem', opacity: 0.6 }}>
            Code by Antigravity | Standard PSF-26
          </p>
        </footer>
      </div>
    </div>
  )
}

export default App
