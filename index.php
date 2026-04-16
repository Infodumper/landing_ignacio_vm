<?php
/**
 * @Infodumper Portfolio - Human Tech Vision
 * Estilo: Kaizuna Modern (Peaceful, Human, Professional)
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@infodumper | Claridad & Ingeniería Humana</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Pro:ital,wght@0,400;0,600;0,700;1,400&family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="styles/human.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Ajustes específicos para index */
        .hero-img-container {
            position: relative;
            border-radius: var(--radius-lg);
            overflow: hidden;
            box-shadow: 0 40px 100px rgba(47, 93, 140, 0.1);
        }
        .hero-img-container::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(244, 239, 234, 0.2), transparent);
        }
    </style>
</head>
<body>
    <nav class="glass-nav">
        <div class="nav-container">
            <a href="#" class="brand">
                <img src="styles/images/Logo_sin_fondo.png" alt="Logo" class="logo-img">
                @infodumper
            </a>
            <div class="nav-links">
                <a href="#proposito">PROPÓSITO</a>
                <a href="#servicios">SERVICIOS</a>
                <a href="#tecnologia">TECNOLOGÍA</a>
                <a href="#sobre-mi">SOBRE MÍ</a>
            </div>
            <div class="nav-actions">
                <a href="#contacto" class="btn btn-primary" style="padding: 0.6rem 1.2rem; font-size: 0.8rem;">CONTACTO</a>
            </div>
        </div>
    </nav>

    <main class="content-wrapper">
        <!-- Hero Section -->
        <section class="hero-section">
            <div class="hero-content">
                <span class="overline">— HUMAN-CENTERED DATA SCIENCE</span>
                <h1>Más claridad, mejores decisiones. Un enfoque <span class="serif" style="font-style: italic; color: var(--ocre);">humano</span> para tus datos.</h1>
                <p class="hero-subtitle">
                    Ayudo a PYMEs a transformar sus datos en tranquilidad. Orden, eficiencia y tecnología al servicio de tu negocio, apoyado con las últimas tecnologías en IA.
                </p>
                <div style="display: flex; gap: 1rem;">
                    <a href="#contacto" class="btn btn-primary">EMPEZAR UNA CONVERSACIÓN</a>
                    <a href="metodologia.php" class="btn btn-outline">VER MI MÉTODO</a>
                </div>
            </div>
            <div class="hero-visual">
                <div class="hero-img-container">
                    <img src="styles/images/hero_peaceful.png" alt="Workspace tranquilo y profesional de @infodumper">
                </div>
            </div>
        </section>

        <!-- Our "Why" / Purpose -->
        <section id="proposito" style="text-align: center; max-width: 50rem; margin: 0 auto; padding-top: 2rem;">
            <span class="overline">MI PROPÓSITO</span>
            <h2>Tecnología que se siente <br><span class="serif" style="font-style: italic;">más cerca</span> de las personas.</h2>
            <p style="font-size: 1.15rem; color: var(--text-secondary); margin-top: 1.5rem;">
                Creo que los datos no son solo números, son historias de negocios que buscan crecer de manera sostenible. Mi labor es traducir esa complejidad algorítmica en decisiones rentables y paz mental para ti.
            </p>
        </section>

        <!-- Services Section -->
        <section id="servicios">
            <div style="margin-bottom: 4rem;">
                <span class="overline">CÓMO PUEDO AYUDARTE</span>
                <h2>Soluciones para un negocio <br>más <span class="serif" style="font-style: italic;">llevadero</span>.</h2>
            </div>

            <div class="card-grid">
                <!-- Service 1: Orden -->
                <div class="eleven-card">
                    <div class="service-icon" style="background: rgba(184, 134, 11, 0.1); color: var(--ocre);">
                        🗂️
                    </div>
                    <h3>Orden en tus procesos</h3>
                    <p style="font-size: 0.95rem; color: var(--text-secondary); flex-grow: 1;">
                        Implementación de sistemas de gestión (CRM, ERP) que realmente se adapten a tu día a día, con capas de IA que anticipan necesidades de inventario y ventas.
                    </p>
                    <a href="gestion-inteligente.php" style="color: var(--ocre); font-weight: 700; text-decoration: none; margin-top: 2rem; font-size: 0.85rem;">LEER MÁS →</a>
                </div>

                <!-- Service 2: Claridad -->
                <div class="eleven-card">
                    <div class="service-icon" style="background: rgba(58, 58, 58, 0.05); color: var(--grafito);">
                        📊
                    </div>
                    <h3>Claridad a través de datos</h3>
                    <p style="font-size: 0.95rem; color: var(--text-secondary); flex-grow: 1;">
                        Dashboards de visualización que muestran lo que realmente importa. Menos ruido visual, más información accionable para decidir con seguridad.
                    </p>
                    <a href="#" style="color: var(--grafito); font-weight: 700; text-decoration: none; margin-top: 2rem; font-size: 0.85rem;">VER EJEMPLOS →</a>
                </div>

                <!-- Service 3: Tiempo -->
                <div class="eleven-card">
                    <div class="service-icon" style="background: rgba(184, 134, 11, 0.1); color: var(--ocre);">
                        ⚙️
                    </div>
                    <h3>Liberar tiempo con IA</h3>
                    <p style="font-size: 0.95rem; color: var(--text-secondary); flex-grow: 1;">
                        Automatización inteligente de tareas repetitivas y atención al cliente mediante LLMs personalizados. Menos carga operativa, más foco estratégico.
                    </p>
                    <a href="#" style="color: var(--ocre); font-weight: 700; text-decoration: none; margin-top: 2rem; font-size: 0.85rem;">SOLICITAR DEMO →</a>
                </div>
            </div>
        </section>

        <!-- Tech Stack -->
        <section class="tech-stack" id="tecnologia">
            <span class="overline">HERRAMIENTAS & INFRAESTRUCTURA</span>
            <div class="stack-grid">
                <div class="stack-item">Python</div>
                <div class="stack-item">SQL / Databases</div>
                <div class="stack-item">AI Agents</div>
                <div class="stack-item">PHP Architecture</div>
                <div class="stack-item">Skills Orchestration</div>
                <div class="stack-item">Spec Driven Development</div>
                <div class="stack-item">Scalability Systems</div>
            </div>
        </section>

        <!-- Profile Section -->
        <section id="sobre-mi" class="split-section">
            <div class="split-visual">
                <img src="styles/images/profile_portrait.png" alt="Ignacio Vizoso - Técnico Superior">
                <span class="status-badge">TECNICO SUPERIOR</span>
            </div>
            <div>
                <span class="overline">PERFIL PROFESIONAL</span>
                <h2>Más de 3 años traduciendo datos en <span class="serif" style="font-style: italic;">resultados</span>.</h2>
                <p style="font-size: 1.1rem; color: var(--text-secondary); margin-top: 1.5rem;">
                    Como Técnico Superior en Ciencias de Datos e IA, mi enfoque no es solo la tecnología, sino el impacto directo en tu negocio. Entiendo el peso de llevar una PYME adelante, apoyándome en flujos de IA avanzados para que la tecnología sea tu aliada.
                </p>
                <div class="stat-container">
                    <div class="stat-item">
                        <h3>50+</h3>
                        <p>PROYECTOS COMPLETADOS</p>
                    </div>
                    <div class="stat-item">
                        <h3>3+</h3>
                        <p>AÑOS DE EXPERIENCIA</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contacto" style="margin-top: 4rem;">
            <div style="text-align: center; margin-bottom: 3rem;">
                <span class="overline">HABLEMOS</span>
                <h2>¿Empezamos a darle <span class="serif" style="font-style: italic;">forma</span> a tu proyecto?</h2>
                <p style="color: var(--text-secondary);">Una charla sin presiones para ver cómo podemos ayudarte.</p>
            </div>

            <div class="form-container">
                <form action="#">
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem;">
                        <input type="text" placeholder="Tu nombre" required>
                        <input type="email" placeholder="Tu correo electrónico" required>
                    </div>
                    <textarea placeholder="Cuéntame un poco sobre tu situación actual o el proyecto que tienes en mente..." rows="5"></textarea>
                    <button type="submit" class="btn btn-primary" style="width: 100%;">ENVIAR CONSULTA TÉCNICA</button>
                    <p style="font-size: 0.8rem; text-align: center; margin-top: 1.5rem; opacity: 0.5;">
                        También puedes contactarme directamente vía WhatsApp.
                    </p>
                </form>
            </div>
        </section>

        <footer class="minimal-footer">
            <div class="footer-container content-wrapper">
                <div class="footer-info">
                    <p style="font-size: 0.95rem; font-weight: 700; color: var(--grafito); margin-bottom: 0.3rem;">© 2026 @infodumper</p>
                    <p style="font-size: 0.85rem; opacity: 0.6;">Sistemas eficientes para negocios reales</p>
                </div>
                <div class="social-links">
                    <a href="https://www.linkedin.com/in/ignacio-vizoso/" target="_blank" title="LinkedIn"><i class="fab fa-linkedin"></i></a>
                    <a href="https://github.com/Infodumper" target="_blank" title="GitHub"><i class="fab fa-github"></i></a>
                    <a href="#" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
        </footer>
    </main>

    <script>
        // Smooth scroll refinement
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Sticky nav shadow
        window.addEventListener('scroll', () => {
            const nav = document.querySelector('.glass-nav');
            if (window.scrollY > 50) {
                nav.style.boxShadow = '0 10px 30px rgba(0,0,0,0.03)';
            } else {
                nav.style.boxShadow = 'none';
            }
        });
    </script>
</body>
</html>
