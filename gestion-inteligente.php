<?php
/**
 * @Infodumper Portfolio - Sistemas de Gestión Inteligente
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistemas de Gestión | @infodumper</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Pro:ital,wght@0,400;0,600;0,700;1,400&family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="styles/human.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .case-study {
            background: rgba(184, 134, 11, 0.05);
            padding: 4rem;
            border-radius: var(--radius-lg);
            border: 1px solid rgba(184, 134, 11, 0.1);
            margin-top: 4rem;
        }
    </style>
</head>
<body>
    <nav class="glass-nav">
        <div class="nav-container">
            <a href="index.php" class="brand">
                <img src="styles/images/Logo_sin_fondo.png" alt="Logo" class="logo-img">
                @infodumper
            </a>
            <div class="nav-actions">
                <a href="index.php" class="btn btn-outline" style="padding: 0.5rem 1.2rem; font-size: 0.8rem;">VOLVER</a>
            </div>
        </div>
    </nav>

    <main class="content-wrapper">
        <section class="hero-section">
            <div class="hero-content">
                <span class="overline">SISTEMAS DE GESTIÓN</span>
                <h1>Orden que <span class="serif" style="font-style: italic; color: var(--ocre);">potencia</span> el crecimiento.</h1>
                <p class="hero-subtitle">
                    Diseñamos ecosistemas donde la tecnología no es una carga, sino un aliado silencioso que optimiza tu operación diaria.
                </p>
                <div style="display: flex; gap: 1rem;">
                    <a href="#soluciones" class="btn btn-primary">VER SOLUCIONES</a>
                    <a href="index.php#contacto" class="btn btn-outline">RESERVAR DEMO</a>
                </div>
            </div>
            <div class="hero-visual">
                <div style="background: white; padding: 3rem; border-radius: var(--radius-lg); border: 1px solid var(--card-border); text-align: center;">
                    <span style="font-size: 4rem; display: block; margin-bottom: 1rem;">⚙️</span>
                    <p style="font-weight: 700; color: var(--grafito);">Cerebro Operativo</p>
                </div>
            </div>
        </section>

        <section id="soluciones">
            <span class="overline">VALOR DIFERENCIAL</span>
            <h2>Tecnología con propósito.</h2>
            
            <div class="card-grid">
                <div class="eleven-card">
                    <span class="status-badge" style="margin-bottom: 1.5rem;">CORE: CRM PERSONALIZADO</span>
                    <p style="font-size: 1.1rem; color: var(--text-primary); font-weight: 500;">CRM que se adapta a ti</p>
                    <p style="margin-top: 1rem; font-size: 0.9rem; color: var(--text-secondary); flex-grow: 1;">
                        No más sistemas genéricos. Construimos herramientas que siguen tus procesos, facilitando la carga de datos y la visualización de oportunidades.
                    </p>
                    <div style="margin-top: 2rem; border-top: 1px solid var(--card-border); padding-top: 1rem;">
                        <p style="font-size: 0.8rem; font-weight: 700; color: var(--ocre);">+40% EFICIENCIA OPERATIVA</p>
                    </div>
                </div>

                <div class="eleven-card">
                    <span class="status-badge" style="margin-bottom: 1.5rem;">SYNC: FLUJO SIN ERRORES</span>
                    <p style="font-size: 1.1rem; color: var(--text-primary); font-weight: 500;">Sincronización Inteligente</p>
                    <p style="margin-top: 1rem; font-size: 0.9rem; color: var(--text-secondary); flex-grow: 1;">
                        Tus bases de datos, planillas y ventas integradas en una sola fuente de verdad. Eliminamos el error humano de raíz.
                    </p>
                    <div style="margin-top: 2rem; border-top: 1px solid var(--card-border); padding-top: 1rem;">
                        <p style="font-size: 0.8rem; font-weight: 700; color: var(--ocre);">100% INTEGRIDAD DE DATOS</p>
                    </div>
                </div>

                <div class="eleven-card">
                    <span class="status-badge" style="margin-bottom: 1.5rem;">UX: SIMPLICIDAD HUMANA</span>
                    <p style="font-size: 1.1rem; color: var(--text-primary); font-weight: 500;">Interfaces Claras</p>
                    <p style="margin-top: 1rem; font-size: 0.9rem; color: var(--text-secondary); flex-grow: 1;">
                        Diseñamos para personas. Interfaces limpias, intuitivas y rápidas que reducen la fatiga mental y aumentan la productividad.
                    </p>
                    <div style="margin-top: 2rem; border-top: 1px solid var(--card-border); padding-top: 1rem;">
                        <p style="font-size: 0.8rem; font-weight: 700; color: var(--ocre);">DISEÑO ALTA FIDELIDAD</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Success Case -->
        <section class="case-study">
            <div class="split-section">
                <div>
                    <span class="overline">CASO DE ÉXITO</span>
                    <h2 class="level-title">Gerencia Estévez | CliP26</h2>
                    <p style="font-size: 1.1rem; color: var(--text-secondary); margin-bottom: 2rem;">
                        Transformamos la gestión de clientes en una experiencia fluida y profesional. CliP26 centraliza la autenticación y el control con una interfaz robusta pero extremadamente sencilla de usar.
                    </p>
                    <a href="index.php#contacto" class="btn btn-primary">REPLICAR ESTE ÉXITO</a>
                </div>
                <div class="hero-visual">
                    <img src="styles/images/clip26_adapted.png" alt="CliP26 Interface" style="border-radius: 1rem; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                </div>
            </div>
        </section>
    </main>

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
</body>
</html>
