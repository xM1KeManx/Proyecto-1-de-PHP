<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivina mi Número</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <header class="header-php">
            <h1><a href="index.php">Adivina mi Número</a></h1>
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
            <div class="form-section">
                <div class="form-column">
                    <h2>¡Adivina el Número!</h2>
                    <p>Intenta adivinar un número entre 1 y 5.</p>
                    <form action="adivina.php" method="post">
                        <div class="form-group">
                            <label for="numero_usuario">Tu número:</label>
                            <input type="number" id="numero_usuario" name="numero_usuario" min="1" max="5" value="<?php echo isset($_POST['numero_usuario']) ? htmlspecialchars($_POST['numero_usuario']) : ''; ?>" required>
                        </div>
                        <div class="form-group">
                            <button type="submit">Adivinar</button>
                        </div>
                    </form>
                    <form action="adivina.php" method="get">
                        <button type="submit" class="reset-button">Reiniciar Juego</button>
                    </form>
                </div>

                <div class="form-column">
                    <div class="result-box">
                        <?php
                        // Generar un número aleatorio (solo una vez por carga de página o al reiniciar)
                        // Usamos una sesión para mantener el número aleatorio si ya se generó
                        session_start(); // Iniciar sesión

                        if (!isset($_SESSION['numero_secreto']) || $_SERVER["REQUEST_METHOD"] == "GET") {
                            $_SESSION['numero_secreto'] = rand(1, 5);
                        }

                        $mensaje_resultado = "¡Adivina el número!";

                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $numero_usuario = isset($_POST['numero_usuario']) ? intval($_POST['numero_usuario']) : 0;
                            $numero_secreto = $_SESSION['numero_secreto'];

                            if ($numero_usuario == $numero_secreto) {
                                $mensaje_resultado = "¡Wow, adivinaste!";
                                // Para que el juego termine y genere un nuevo número si se adivina
                                unset($_SESSION['numero_secreto']);
                            } else {
                                $mensaje_resultado = "¡Sigue intentando!<br>El número correcto era: " . htmlspecialchars($numero_secreto);
                            }
                        }
                        echo $mensaje_resultado;
                        ?>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>