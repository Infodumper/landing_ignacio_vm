import React from 'react'

const projects = [
  {
    badge: "Orquestación de Ventas",
    title: "Sistema Perla Negra",
    description: "Arquitectura de 4 capas diseñada para el control absoluto de flujos de venta masivos y comunicaciones automatizadas.",
    techs: ["PHP 8.2", "Python 3.12", "MySQL Optimized", "WhatsApp API"],
    linkText: "Ver Especificaciones →"
  },
  {
    badge: "Data Intelligence",
    title: "Data Mapping Engine",
    description: "Algoritmo avanzado para consolidación de perfiles en bases de datos heterogéneas. Resolución de discrepancias mediante Fuzzy Matching.",
    techs: ["Python", "Pandas", "Fuzzy Logic AI", "Big Data Orchest."],
    linkText: "Leer Reporte Técnico →"
  }
]

function Projects() {
  return (
    <div className="projects-list">
      {projects.map((project, index) => (
        <div key={index} className="project-card">
          <span className="badge">{project.badge}</span>
          <h3>{project.title}</h3>
          <p>{project.description}</p>
          
          <div className="tech-list">
            {project.techs.map((tech, i) => (
              <span key={i} className="tech-tag">{tech}</span>
            ))}
          </div>

          <div style={{ marginTop: '2.5rem' }}>
            <a href="#" style={{ color: 'var(--accent)', textDecoration: 'none', fontSize: '0.9rem', fontWeight: '700', letterSpacing: '0.5px' }}>
              {project.linkText}
            </a>
          </div>
        </div>
      ))}
    </div>
  )
}

export default Projects
