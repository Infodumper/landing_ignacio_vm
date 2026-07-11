class SiteHeader extends HTMLElement {
    constructor() {
        super();
    }

    connectedCallback() {
        const basePath = this.getAttribute('base-path') || './';

        this.innerHTML = `
        <nav class="glass-nav">
            <div class="nav-container">
                <a href="${basePath}index.html" class="brand">
                    <img src="${basePath}styles/images/Logo.png" alt="Logo" class="logo-img" width="38" height="38"
                        onerror="this.src='https://placehold.co/38x38/1a1a1e/fff?text=IV'">
                    Ignacio Vizoso
                </a>
                
                <button class="menu-toggle" aria-label="Abrir menú" onclick="this.nextElementSibling.classList.toggle('active');">
                    <i class="fas fa-bars"></i>
                </button>
                
                <div class="nav-links">
                    <a href="${basePath}soluciones/index.html">Soluciones</a>
                    <a href="${basePath}casos/index.html">Casos</a>
                    <a href="${basePath}blog/index.html">Blog</a>
                    <a href="${basePath}sobre-mi.html">Sobre mí</a>
                </div>
            </div>
        </nav>
        `;
    }
}

class SiteFooter extends HTMLElement {
    constructor() {
        super();
    }

    connectedCallback() {
        const basePath = this.getAttribute('base-path') || './';
        this.innerHTML = `
        <footer class="minimal-footer">
            <div class="footer-container content-wrapper">
                <div class="footer-info">
                    <p class="footer-brand">&copy; 2026 Ignacio Vizoso</p>
                    <p class="footer-tagline">Datos, Sistemas y Soluciones IA</p>
                </div>
                <nav class="social-links" aria-label="Redes sociales">
                    <a href="https://www.linkedin.com/in/ignacio-vizoso/" target="_blank" rel="noopener noreferrer"
                        title="LinkedIn"><i class="fab fa-linkedin" aria-hidden="true"></i></a>
                    <a href="https://github.com/Infodumper" target="_blank" rel="noopener noreferrer" title="GitHub"><i
                            class="fab fa-github" aria-hidden="true"></i></a>
                </nav>
            </div>
        </footer>
        <a href="https://wa.me/" class="whatsapp-float" target="_blank" rel="noopener noreferrer" aria-label="Contactar por WhatsApp">
            <i class="fab fa-whatsapp"></i>
        </a>
        `;
    }
}

customElements.define('site-header', SiteHeader);
customElements.define('site-footer', SiteFooter);
