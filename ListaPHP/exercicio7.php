<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Tabuada</title>
</head>
<body>
  <h1>Tabuada</h1>

  <form method="post">
    <label for="numero">Digite um número:</label>
    <input type="number" name="numero" id="numero" required>
    <button type="submit">Gerar Tabuada</button>
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];

    if (is_numeric($numero)) {
      echo "<h2>Tabuada do número <strong>$numero</strong>:</h2>";
      echo "<ul>";

      for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo "<li>$numero × $i = $resultado</li>";
      }

      echo "</ul>";
    } else {
      echo "<p style='color:red;'> Insira um número válido.</p>";
    }
  }
  ?>
</body>
</html>