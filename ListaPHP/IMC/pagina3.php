<?php
$nome = $_POST["nome"];
$email = $_POST["email"];
$peso = floatval($_POST["peso"]);
$altura = floatval($_POST["altura"]);

$imc = $peso / ($altura * $altura);
$imcFormatado = number_format($imc, 2, ",", ".");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Resultado IMC</title>
</head>
<body>
  <h1>Resultado</h1>
  <ul>
    <li><strong>Nome:</strong> <?php echo htmlspecialchars($nome); ?></li>
    <li><strong>E-mail:</strong> <?php echo htmlspecialchars($email); ?></li>
    <li><strong>Peso:</strong> <?php echo $peso; ?> kg</li>
    <li><strong>Altura:</strong> <?php echo $altura; ?> m</li>
    <li><strong>IMC:</strong> <?php echo $imcFormatado; ?></li>
  </ul>
</body>
</html>