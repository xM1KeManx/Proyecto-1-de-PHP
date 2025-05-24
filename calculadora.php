<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <header class="header-php">
            <h1><a href="index.php">Calculadora PHP</a></h1>
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
                    <h2>Realiza una Operación</h2>
                    <form action="calculadora.php" method="post">
                        <div class="form-group">
                            <label for="numero1">Número 1:</label>
                            <input type="number" id="numero1" name="numero1" step="any" value="<?php echo isset($_POST['numero1']) ? htmlspecialchars($_POST['numero1']) : ''; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="numero2">Número 2:</label>
                            <input type="number" id="numero2" name="numero2" step="any" value="<?php echo isset($_POST['numero2']) ? htmlspecialchars($_POST['numero2']) : ''; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="operacion">Operación:</label>
                            <select id="operacion" name="operacion" required>
                                <option value="sumar" <?php echo (isset($_POST['operacion']) && $_POST['operacion'] == 'sumar') ? 'selected' : ''; ?>>Sumar</option>
                                <option value="restar" <?php echo (isset($_POST['operacion']) && $_POST['operacion'] == 'restar') ? 'selected' : ''; ?>>Restar</option>
                                <option value="multiplicar" <?php echo (isset($_POST['operacion']) && $_POST['operacion'] == 'multiplicar') ? 'selected' : ''; ?>>Multiplicar</option>
                                <option value="dividir" <?php echo (isset($_POST['operacion']) && $_POST['operacion'] == 'dividir') ? 'selected' : ''; ?>>Dividir</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit">Calcular</button>
                        </div>
                    </form>
                </div>

                <div class="form-column">
                    <div class="result-box">
                        <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $num1 = isset($_POST['numero1']) ? floatval($_POST['numero1']) : 0;
                            $num2 = isset($_POST['numero2']) ? floatval($_POST['numero2']) : 0;
                            $operacion = isset($_POST['operacion']) ? $_POST['operacion'] : '';
                            $resultado = null;
                            $error = "";

                            switch ($operacion) {
                                case 'sumar':
                                    $resultado = $num1 + $num2;
                                    break;
                                case 'restar':
                                    $resultado = $num1 - $num2;
                                    break;
                                case 'multiplicar':
                                    $resultado = $num1 * $num2;
                                    break;
                                case 'dividir':
                                    if ($num2 != 0) {
                                        $resultado = $num1 / $num2;
                                    } else {
                                        $error = "¡No se puede dividir entre cero!";
                                    }
                                    break;
                                default:
                                    $error = "Operación no válida.";
                                    break;
                            }

                            if ($error) {
                                echo '<div class="error-message">' . htmlspecialchars($error) . '</div>';
                            } elseif ($resultado !== null) {
                                echo "Resultado: " . htmlspecialchars($resultado);
                            } else {
                                echo "Introduce números y una operación.";
                            }
                        } else {
                            echo "Calcula tu operación.";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>