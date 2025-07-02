<?php
$nome = $_GET["nome"];
$email = $_GET["email"];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Coletar Peso e Altura</title>
</head>
<body>
  <h1>Dados Corporais</h1>
  <form action="pagina3.php" method="post">
    <input type="hidden" name="nome" value="<?php echo htmlspecialchars($nome); ?>">
    <input type="hidden" name="email" value="<?php echo htmlspecialchars($email); ?>">

    <label for="peso">Peso (kg):</label>
    <input type="number" step="0.01" name="peso" id="peso" required><br><br>

    <label for="altura">Altura (m):</label>
    <input type="number" step="0.01" name="altura" id="altura" required><br><br>

    <button type="submit">Calcular IMC</button>
  </form>
</body>
</html>