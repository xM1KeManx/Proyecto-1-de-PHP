<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acerca de mí</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <header class="header-php">
            <h1><a href="index.php">Acerca de mí</a></h1>
        </header>

        <nav class="main-nav">
            <ul>
                <li><a href="mi_tarjeta.php">Registro de Tarjeta</a></li>
                <li><a href="calculadora.php">Calculadora</a></li>
                <li><a href="adivina.php">Adivina el Numero</a></li>
                <li><a href="acerca_de.php">Acerca de mi</a></li>
            </ul>
        </nav>

        <main class="content-area">
            <div class="about-me-section">
                <div class="profile-card">
                    <img src="miche.jpg" alt="Tu Foto 2x2" class="profile-picture">
                    <h2>Michael Sosa</h2>
                    <p>¡Hola! Soy Michael Sosa Matricula 2023-2024.</p>

                    <div class="social-links">
                        <p>Contáctame:</p>
                        <a href="https://t.me/x_mikeman_x" target="_blank" class="social-btn telegram-btn">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/8/82/Telegram_logo.svg" alt="Telegram Icon" class="social-btn-icon">
                            <span>Chatear por Telegram</span>
                        </a>
                        <a href="https://wa.me/8298483111" target="_blank" class="social-btn whatsapp-btn">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp Icon" class="social-btn-icon">
                            <span>Chatear por WhatsApp</span>
                        </a>
                    </div>
                </div>

                <div class="video-section">
                    <h3>Video Recomendado</h3>
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <p class="video-description">Este es un video que recomiendo sobre motivación y superar desafíos.</p>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
