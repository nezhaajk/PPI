<?php
session_start();

if (!isset($_SESSION["logado"]) || $_SESSION["logado"] !== true) {
  header("Location: login.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Painel</title>
</head>
<body>
  <h1>Bem-vindo, <?php echo htmlspecialchars($_SESSION["usuario"]); ?>!</h1>
  <p>Você está logado.</p>
  <a href="logout.php"><button>Sair</button></a>
</body>
</html>