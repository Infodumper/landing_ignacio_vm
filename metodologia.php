<?php
/**
 * @Infodumper Portfolio - Metodología (4 Capas)
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metodología | @infodumper - Ingeniería Humana</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Pro:ital,wght@0,400;0,600;0,700;1,400&family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="styles/human.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
        <section style="text-align: center; padding-bottom: 2rem;">
            <span class="overline">— MI METODOLOGÍA</span>
            <h1>Arquitectura de <span class="serif" style="font-style: italic;">4 Capas</span> para tu tranquilidad</h1>
            <p class="hero-subtitle" style="margin: 0 auto 3rem;">
                Garantizamos que tu negocio crezca ordenado mediante una separación clara de responsabilidades.
            </p>
        </section>

        <!-- Capa 1: Directiva -->
        <section class="level-section">
            <span class="overline">CAPA 01</span>
            <h2 class="level-title">Visión Directiva</h2>
            <div style="background: white; padding: 3rem; border-radius: var(--radius-lg); border: 1px solid var(--card-border); margin-bottom: 2rem;">
                <p style="font-size: 1.1rem; color: var(--text-secondary); max-width: 45rem;">
                    Antes de tocar una sola línea de código, escuchamos. Entendemos dónde duele el negocio y dónde queremos llegar. No implementamos herramientas, diseñamos el futuro.
                </p>
                <div class="card-grid" style="margin-top: 2rem;">
                    <div class="eleven-card" style="padding: 1.5rem;">
                        <span class="status-badge" style="margin-bottom: 1rem;">DIAGNÓSTICO: CRECIMIENTO DESBORDADO</span>
                        <p style="font-size: 0.9rem; font-style: italic;">"El negocio crece pero yo siento que tengo menos tiempo que antes."</p>
                        <p style="font-size: 0.9rem; color: var(--ocre); font-weight: 600; margin-top: 0.5rem;">Respuesta: Definición de KPIs y hoja de ruta estratégica.</p>
                    </div>
                    <div class="eleven-card" style="padding: 1.5rem;">
                        <span class="status-badge" style="margin-bottom: 1rem;">DIAGNÓSTICO: SISTEMAS RÍGIDOS</span>
                        <p style="font-size: 0.9rem; font-style: italic;">"Siento que el sistema que uso me frena en lugar de ayudarme."</p>
                        <p style="font-size: 0.9rem; color: var(--ocre); font-weight: 600; margin-top: 0.5rem;">Respuesta: Auditoría técnica y plan de modernización suave.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Capa 2: Orquestación -->
        <section class="level-section">
            <span class="overline">CAPA 02</span>
            <h2 class="level-title">Orquestación de Datos</h2>
            <div style="background: white; padding: 3rem; border-radius: var(--radius-lg); border: 1px solid var(--card-border); margin-bottom: 2rem;">
                <p style="font-size: 1.1rem; color: var(--text-secondary); max-width: 45rem;">
                    Conectamos todas las piezas. Excel, CRM, ERP y bases de datos empiezan a hablar el mismo idioma para que la información fluya sin errores humanos.
                </p>
                <div class="card-grid" style="margin-top: 2rem;">
                    <div class="eleven-card" style="padding: 1.5rem;">
                        <span class="status-badge" style="margin-bottom: 1rem;">SOLUCIÓN: SYNC AUTOMÁTICO</span>
                        <p style="font-size: 0.9rem; font-style: italic;">"Me paso horas pasando datos de una planilla a otra."</p>
                        <p style="font-size: 0.9rem; color: var(--grafito); font-weight: 600; margin-top: 0.5rem;">Acción: Implementación de integraciones automáticas entre plataformas.</p>
                    </div>
                    <div class="eleven-card" style="padding: 1.5rem;">
                        <span class="status-badge" style="margin-bottom: 1rem;">SOLUCIÓN: CEREBRO CENTRAL</span>
                        <p style="font-size: 0.9rem; font-style: italic;">"Nunca sé cuál es el stock real al final del día."</p>
                        <p style="font-size: 0.9rem; color: var(--grafito); font-weight: 600; margin-top: 0.5rem;">Acción: Unificación de la fuente de verdad del negocio.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Capa 3: Ejecución -->
        <section class="level-section">
            <span class="overline">CAPA 03</span>
            <h2 class="level-title">Ejecución & Automatización</h2>
            <div style="background: white; padding: 3rem; border-radius: var(--radius-lg); border: 1px solid var(--card-border); margin-bottom: 2rem;">
                <p style="font-size: 1.1rem; color: var(--text-secondary); max-width: 45rem;">
                    Donde la IA toma el relevo. Automatizamos lo repetitivo para que tú y tu equipo podáis enfocaros en lo que realmente genera valor.
                </p>
                <div class="card-grid" style="margin-top: 2rem;">
                    <div class="eleven-card" style="padding: 1.5rem;">
                        <span class="status-badge" style="margin-bottom: 1rem;">ACCIÓN: AGENTE DE ATENCIÓN</span>
                        <p style="font-size: 0.9rem; font-style: italic;">"Respondemos las mismas preguntas todo el tiempo."</p>
                        <p style="font-size: 0.9rem; color: var(--ocre); font-weight: 600; margin-top: 0.5rem;">Resultado: Asistentes virtuales que conocen tu negocio a fondo.</p>
                    </div>
                    <div class="eleven-card" style="padding: 1.5rem;">
                        <span class="status-badge" style="margin-bottom: 1rem;">ACCIÓN: REPORTES INTELIGENTES</span>
                        <p style="font-size: 0.9rem; font-style: italic;">"Necesito que el balance se haga solo."</p>
                        <p style="font-size: 0.9rem; color: var(--ocre); font-weight: 600; margin-top: 0.5rem;">Resultado: Generación automática de informes de rentabilidad.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Capa 4: Observabilidad -->
        <section class="level-section">
            <span class="overline">CAPA 04</span>
            <h2 class="level-title">Observabilidad Continua</h2>
            <div style="background: white; padding: 3rem; border-radius: var(--radius-lg); border: 1px solid var(--card-border); margin-bottom: 2rem;">
                <p style="font-size: 1.1rem; color: var(--text-secondary); max-width: 45rem;">
                    No entregamos y nos vamos. Monitoreamos que todo funcione al 100% y detectamos fallos antes de que el usuario los note.
                </p>
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
