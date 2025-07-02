<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Verificador de Par ou Ímpar</title>
</head>
<body>
  <h1>🔢 Verifique se um número é Par ou Ímpar</h1>

  <form method="post">
    <label for="numero">Informe um número:</label>
    <input type="number" name="numero" id="numero" required>
    <button type="submit">Verificar</button>
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];

    if (is_numeric($numero)) {
      $resultado = ($numero % 2 == 0) ? "Par" : "Ímpar";
      echo "<h2> O número <strong>$numero</strong> é <strong>$resultado</strong>.</h2>";
    } else {
      echo "<p style='color:red;'> Insira um número válido!</p>";
    }
  }
  ?>
</body>
</html>