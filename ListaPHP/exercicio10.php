<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Intervalo Numérico</title>
  <style>
    .numero {
      display: inline-block;
      margin: 4px;
      padding: 8px 12px;
      border: 1px solid #444;
      background-color: #f0f0f0;
      border-radius: 6px;
      font-family: monospace;
    }
  </style>
</head>
<body>
  <h1>Exibir Números em Intervalo</h1>

  <form method="post">
    <label for="inicio">Número inicial:</label>
    <input type="number" name="inicio" id="inicio" required><br><br>

    <label for="fim">Número final:</label>
    <input type="number" name="fim" id="fim" required><br><br>

    <button type="submit">Exibir</button>
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inicio = intval($_POST["inicio"]);
    $fim = intval($_POST["fim"]);

    if ($inicio <= $fim) {
      echo "<h2>Intervalo de $inicio a $fim:</h2>";
      for ($i = $inicio; $i <= $fim; $i++) {
        echo "<span class='numero'>$i</span>";
      }
    } else {
      echo "<p style='color:red;'>O número inicial deve ser menor ou igual ao número final.</p>";
    }
  }
  ?>
</body>
</html>