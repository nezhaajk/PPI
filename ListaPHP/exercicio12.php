<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cálculo de Números</title>
</head>
<body>
    <h2>Informe os números (separados por vírgula)</h2>

    <form method="post" action="">
        <input type="text" name="numeros" placeholder="Ex: 10,5,23,7,15" size="40" required>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $entrada = $_POST["numeros"];

        $numeros = array_map('trim', explode(',', $entrada));

        $numeros = array_map('floatval', $numeros);

        if (count($numeros) > 0 && !in_array(false, $numeros, true)) {
            $soma = array_sum($numeros);
            $maior = max($numeros);
            $menor = min($numeros);

            echo "<h3>Resultados:</h3>";
            echo "Soma: $soma <br>";
            echo "Maior número: $maior <br>";
            echo "Menor número: $menor <br>";
        } else {
            echo "<p style='color:red;'>Por favor, insira apenas números válidos separados por vírgulas.</p>";
        }
    }
    ?>
</body>
</html>
