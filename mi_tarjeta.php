<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Tarjeta Personal</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <header class="header-php">
            <h1><a href="index.php">Mi Tarjeta Personal</a></h1>
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
                    <h2>Ingresa tus Datos</h2>
                    <form action="mi_tarjeta.php" method="post">
                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input type="text" id="nombre" name="nombre" value="<?php echo isset($_POST['nombre']) ? htmlspecialchars($_POST['nombre']) : ''; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="apellido">Apellido:</label>
                            <input type="text" id="apellido" name="apellido" value="<?php echo isset($_POST['apellido']) ? htmlspecialchars($_POST['apellido']) : ''; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="edad">Edad:</label>
                            <input type="number" id="edad" name="edad" min="1" max="120" value="<?php echo isset($_POST['edad']) ? htmlspecialchars($_POST['edad']) : ''; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="carrera">Carrera:</label>
                            <input type="text" id="carrera" name="carrera" value="<?php echo isset($_POST['carrera']) ? htmlspecialchars($_POST['carrera']) : ''; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="universidad">Universidad:</label>
                            <input type="text" id="universidad" name="universidad" value="<?php echo isset($_POST['universidad']) ? htmlspecialchars($_POST['universidad']) : ''; ?>" required>
                        </div>
                        <div class="form-group">
                            <button type="submit">Verificar Edad</button>
                        </div>
                    </form>
                </div>

                <div class="form-column">
                    <div class="result-box">
                        <?php
                        // Verificar si se ha enviado el formulario
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            // Obtener la edad del formulario
                            $edad_ingresada = isset($_POST['edad']) ? intval($_POST['edad']) : 0;

                            // Estructura condicional para la edad
                            if ($edad_ingresada >= 18) {
                                echo "ERES MAYOR DE EDAD";
                            } else {
                                echo "ERES MENOR DE EDAD";
                            }
                        } else {
                            echo "Ingresa tu edad para verificar";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>