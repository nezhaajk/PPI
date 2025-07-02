<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Classificação de Triângulo</title>
</head>
<body>
  <h1>Verificador de Triângulo</h1>

  <form method="post">
    <label for="a">Lado A:</label>
    <input type="number" step="0.01" name="a" required><br><br>

    <label for="b">Lado B:</label>
    <input type="number" step="0.01" name="b" required><br><br>

    <label for="c">Lado C:</label>
    <input type="number" step="0.01" name="c" required><br><br>

    <button type="submit">Classificar</button>
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $a = floatval($_POST["a"]);
    $b = floatval($_POST["b"]);
    $c = floatval($_POST["c"]);

    // Verifica se os lados formam um triângulo válido
    if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
      // Classificação dos lados
      if ($a == $b && $b == $c) {
        $tipo = "Equilátero";
      } elseif ($a == $b || $a == $c || $b == $c) {
        $tipo = "Isósceles";
      } else {
        $tipo = "Escaleno";
      }

      echo "<p>Os lados informados formam um triângulo do tipo <strong>$tipo</strong>.</p>";
    } else {
      echo "<p style='color: red;'>Os lados informados <strong>não formam</strong> um triângulo válido.</p>";
    }
  }
  ?>
</body>
</html>