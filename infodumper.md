# Perfil Técnico y Tecnológico - Infodumper

Este documento recopila el perfil técnico, herramientas, metodologías y workflows para la construcción de una web de Marca Personal. Está basado en la experiencia y el enfoque de desarrollo evidenciado en proyectos de sistemas B2B orientados a IA (como Kaizuna Business).

## 1. Identidad Profesional y Rol
* **Rol Principal:** Software Architect / Full-Stack Engineer especializado en Sistemas B2B y Agentes Cognitivos (IA).
* **Enfoque Core:** Desarrollo de soluciones empresariales robustas (CRM, ERP, BI) integradas con flujos de trabajo de Inteligencia Artificial.
* **Filosofía de Desarrollo:** Pragmatismo, modularidad, alto rendimiento, y eliminación de dependencias innecesarias (preferencia por Vanilla JS y backend nativo sobre frameworks pesados si no aportan valor directo).

## 2. Stack Tecnológico Core (El "Go-To" Stack)
* **Backend:** PHP 8+
  * Construcción de APIs REST modulares.
  * Gestión segura y eficiente de datos mediante PDO.
* **Base de Datos:** MySQL / MariaDB
  * Diseño relacional robusto.
  * Delega cálculos complejos y masivos directamente al motor SQL (volumen, ganancias, estadísticas avanzadas) para optimizar el rendimiento.
* **Frontend:** Vanilla JavaScript (ES6+), HTML5, CSS3
  * Arquitectura SPA (Single Page Application) modular.
  * Renderizado dinámico de interfaces sin necesidad de React/Vue/Angular cuando no es estrictamente necesario.
  * Librerías específicas como Chart.js para visualización de datos (BI).
* **UI/UX & Diseño:**
  * Estándares visuales premium: paletas de colores sofisticadas (ej. azul, cian, oro), tipografías modernas (`Outfit`, `Crimson Pro`).
  * Uso intensivo de componentes CSS modernos: `glass-panel` (glassmorphism), modales `position: fixed`, interfaces interactivas y asíncronas.

## 3. Arquitectura y Metodologías
* **Vertical Slicing:** Organización del código por dominio o módulo (ej. `/operativa/`, `/crm/`, `/analisis/`) en lugar de por capa técnica (controladores, modelos, vistas). Cada módulo contiene su propio frontend y sus endpoints (`/api/`).
* **Sistemas B2B Modulares:** Separación clara entre entornos públicos/operativos y entornos administrativos/gerenciales.
* **Ingeniería de Agentes (Agentic AI):** Diseño y despliegue de Agentes Cognitivos con roles específicos:
  * Agentes Comerciales (Lead Scorers, Upsell Finders).
  * Agentes de Procesos (Bottleneck Analyzers).
  * Agentes Técnicos (Backlog Estimators, Endpoint Monitors).

## 4. Workflows y Patrones de Trabajo
* **Seguridad y Acceso a Datos:** Todo el acceso a la base de datos se realiza de forma estricta a través de endpoints API (nunca SQL directo desde el cliente).
* **Performance y Optimización:**
  * Cálculos resueltos en BD antes de su envío al cliente.
  * Control manual del cache (`?v=N`) en la carga de scripts.
  * Migración de stacks pesados (ej. Legacy Python/pandas) hacia un stack web unificado (PHP/MySQL) para simplificar despliegues y reducir la sobrecarga.
* **Reglas de Negocio Estrictas:**
  * Auditoría e inmutabilidad en ciertos datos transaccionales (ej. precios históricos vs precios actuales).
  * Motores preventivos (ej. motor de stock basado en *lead times*, diagnósticos de inactividad de clientes).

## 5. Casos de Uso y Logros Clave (Para destacar en la web)
* **Sistemas de Fidelización (CRM):** Creación de motores que calculan preferencias basadas en historial de compras y generan alertas dinámicas sin intervención humana.
* **Dashboards de Business Intelligence (BI):** Implementación de KPIs SQL avanzados y agendas comerciales integradas.
* **Telemetría e IA B2B:** Consolas cognitivas donde la IA interactúa con los datos de las empresas (Fichas 360°) para automatizar la redacción de propuestas, detectar cuellos de botella y auditar infraestructuras.

## 6. Tono de la Marca Personal
* **Autoridad Técnica:** Demuestra profundo conocimiento de cómo los sistemas empresariales se benefician de una arquitectura sólida.
* **Innovación Práctica:** No usa IA por usarla (hype), sino enfocada en resolver problemas reales B2B (lead scoring, optimización de stock, auditorías de procesos).
* **Diseño Premium:** El aspecto visual de su trabajo debe reflejar calidad y profesionalismo ("WOW effect"), alejándose de los MVP básicos o genéricos.
