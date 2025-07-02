<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Sorteador</title>
</head>
<body>
  <h1>Sorteie um Número!</h1>

  <form method="post">
    <label for="min">Valor mínimo:</label>
    <input type="number" name="min" id="min" required><br><br>

    <label for="max">Valor máximo:</label>
    <input type="number" name="max" id="max" required><br><br>

    <button type="submit">Sortear</button>
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $min = $_POST["min"];
    $max = $_POST["max"];

    if ($min <= $max) {
      $sorteado = rand($min, $max);
      echo "<h2>🎉 Número sorteado: <strong>$sorteado</strong></h2>";
    } else {
      echo "<p style='color:red;'> O valor mínimo deve ser menor ou igual ao máximo!</p>";
    }
  }
  ?>
</body>
</html>