# Directiva: Arquitectura de 4 Capas (KAIZUNA / TELEMETRY)

> **Skills Asociados:** `architecture_consultant`, `web_professional`

## Propósito y Visión Técnica

Esta directiva define la arquitectura modular del portfolio, orientada a la **Conversión Técnica**. No es un sitio de desarrollador convencional, es una plataforma de **Consultoría de Ingeniería de Alto Nivel**.

## 1. Capa Directiva (Objetivo y Alcance)

- **Fase Actual**: Porfolio de Alta Fidelidad (2.0). 
- **Marca**: @Infodumper / KAIZUNA.COM.AR
- **Diferencial**: Arquitectura de Sistemas Escalables y Orquestación de IA.
- **Página de Inicio**: Producir impacto inmediato y agendar demo/conversación.

## 2. Capa de Orquestación (Flujo y Navegación)

- **index.php**: Punto de entrada de alta conversión. Secciones de Hero (Impacto), Servicios (Soluciones) y Tech Stack (Expertise).
- **metodologia.php**: Página dedicada a profundizar en el modelo de las 4 Capas y casos de éxito detallados.
- **Sticky Header**: Navegación rápida y persistente con cambio de tema (Sol/Luna).
- **Responsive Context**: Contenido adaptado a PC (>1280px) y móviles (<900px).

## 3. Capa de Ejecución (Implementación)

- **Lenguaje**: PHP (Server-side rendering para velocidad y control).
- **CSS**: Vanilla CSS con variables nativas en `styles/professional.css`. Prohibido el uso de librerías externas para evitar "bloat" visual.
- **Assets**: 
    - Imágenes premium y renders 3D (hero visual).
    - Iconos SVG inline para máxima definición y performance.
- **Directorio .agent**: Almacena las habilidades y memoria contextual para la IA en el desarrollo incremental.

## 4. Capa de Observabilidad (Feedback y Calidad)

- **Formulario de Contacto**: Validación de inputs y feedback inmediato tras envío.
- **Hover Visuals**: Efectos de resplandor (glow) y bordes cromáticos para indicar foco.
- **Accesibilidad**: Mantener contrastes altos (Modo Negro Absoluto).
- **Tema**: Persistencia del tema (Dark/Light) en `localStorage`.
