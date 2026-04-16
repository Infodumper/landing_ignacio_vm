# Coding Conventions (KAIZUNA High-Fidelity)

Estándares de desarrollo para asegurar la coherencia en el Porfolio Profesional de KAIZUNA.AI.

## Estilo de Código (PHP & JS)
- **Nomenclatura**: Usar `snake_case` para variables PHP y `camelCase` para JS.
- **Idioma**: El contenido del Porfolio es en **Español**. Los comentarios técnicos y nombres de ID/Clases deben ser profesionales y funcionales.
- **Arquitectura**: Seguir rigurosamente el modelo de **4 Capas** (Directiva, Orquestación, Ejecución, Observabilidad).

## Diseño (ADN KAIZUNA v2.0 - Telemetry.ai)
- **Estética**: Agresiva, Técnica, Hiper-Premium.
- **Modo Oscuro Absoluto (Fondo #0a0a0a)**: Es el modo por defecto. 
- **Modo Claro (Fondo #fafafa)**: Adaptativo mediante variables CSS.
- **Centralización**: Todo el estilo visual debe vivir en `styles/professional.css`, evitando estilos inline a menos que sean dinámicos por tarjeta.

## Estándares Técnicos
- **Iconografía**: Prohibido el uso de Emojis o Icon Fonts pesadas. Usar **SVGs Inline** con colores de acento.
- **Botones**: Diseño "Boxy" (6px radius), all-caps, letter-spacing técnico.
- **Componentes**: Diseñados como "Chapitas" modulares (`eleven-card`) con efectos de resplandor e interactividad.
- **Performance**: Carga ultra-rápida, sin dependencias externas innecesarias.
