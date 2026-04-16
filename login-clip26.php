<?php
/**
 * CliP26 - Costa Atlántica | Gerencia Estévez
 * Rediseño High-Fidelity (KAIZUNA Edition)
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CliP26 | COSTA ATLÁNTICA - Gestión</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&family=Outfit:wght@500;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg-deep: #050505;
            --bg-card: rgba(15, 15, 15, 0.8);
            --accent: #10b981; /* Emerald */
            --text-main: #ffffff;
            --text-dim: #888888;
            --border: rgba(16, 185, 129, 0.15);
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            background-color: var(--bg-deep);
            color: var(--text-main);
            font-family: 'Inter', sans-serif;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            background-image: radial-gradient(circle at center, rgba(16, 185, 129, 0.05) 0%, transparent 70%);
        }

        .login-container {
            width: 100%;
            max-width: 400px;
            padding: 2rem;
            animation: fadeIn 0.8s ease-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .brand-header {
            text-align: center;
            margin-bottom: 3rem;
        }

        .wave-logo {
            width: 60px;
            height: auto;
            margin-bottom: 1.5rem;
            filter: drop-shadow(0 0 10px var(--accent));
        }

        .brand-name {
            font-family: 'Outfit', sans-serif;
            font-size: 1.8rem;
            letter-spacing: -0.02em;
            font-weight: 700;
        }

        .brand-name span {
            display: block;
            font-size: 0.7rem;
            color: var(--accent);
            text-transform: uppercase;
            letter-spacing: 0.3em;
            margin-top: 0.5rem;
            font-weight: 500;
        }

        .login-card {
            background: var(--bg-card);
            border: 1px solid var(--border);
            border-radius: 1.5rem;
            padding: 3rem 2.5rem;
            backdrop-filter: blur(20px);
            box-shadow: 0 40px 100px rgba(0,0,0,0.5);
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        label {
            display: block;
            font-size: 0.7rem;
            font-weight: 600;
            color: var(--accent);
            text-transform: uppercase;
            letter-spacing: 0.1em;
            margin-bottom: 0.8rem;
        }

        input {
            width: 100%;
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.08);
            padding: 1rem 1.2rem;
            border-radius: 0.8rem;
            color: white;
            font-size: 1rem;
            transition: all 0.3s;
        }

        input:focus {
            outline: none;
            border-color: var(--accent);
            background: rgba(16, 185, 129, 0.05);
            box-shadow: 0 0 20px rgba(16, 185, 129, 0.1);
        }

        .btn-submit {
            width: 100%;
            background: var(--accent);
            color: black;
            border: none;
            padding: 1.1rem;
            border-radius: 0.8rem;
            font-weight: 700;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            cursor: pointer;
            margin-top: 1rem;
            transition: all 0.3s;
        }

        .btn-submit:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(16, 185, 129, 0.3);
            filter: brightness(1.1);
        }

        .footer-tag {
            text-align: center;
            margin-top: 3rem;
            font-size: 0.65rem;
            color: var(--text-dim);
            letter-spacing: 0.2em;
            text-transform: uppercase;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <header class="brand-header">
            <svg class="wave-logo" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2 12C2 12 5 7 12 7C19 7 22 12 22 12C22 12 19 17 12 17C5 17 2 12 2 12Z" stroke="currentColor" stroke-width="2"/>
                <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/>
            </svg>
            <h1 class="brand-name">CliP26<span>COSTA ATLÁNTICA</span></h1>
        </header>

        <div class="login-card">
            <form action="#">
                <div class="form-group">
                    <label>Usuario / Email</label>
                    <input type="email" placeholder="usuario@gestiones.com">
                </div>
                <div class="form-group">
                    <label>Contraseña</label>
                    <input type="password" placeholder="••••••••">
                </div>
                <button type="submit" class="btn-submit">ENTRAR AL SISTEMA</button>
            </form>
        </div>

        <p class="footer-tag">© 2026 Gerencia Estévez | ORQUESTACIÓN ADN-PI</p>
    </div>

</body>
</html>
