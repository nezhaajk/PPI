<?php
session_start();

// Verifica se o usuário já está logado
if (isset($_SESSION["logado"]) && $_SESSION["logado"] === true) {
  header("Location: painel.php");
  exit;
}

// Verificação de login
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $usuario = $_POST["usuario"];
  $senha = $_POST["senha"];

  // Valores fixos
  $usuarioCorreto = "gabriel";
  $senhaCorreta = "1234";

  if ($usuario === $usuarioCorreto && $senha === $senhaCorreta) {
    $_SESSION["logado"] = true;
    $_SESSION["usuario"] = $usuario;
    header("Location: painel.php");
    exit;
  } else {
    $erro = "Usuário ou senha incorretos.";
  }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
</head>
<body>
  <h1>Login</h1>

  <?php if (!empty($erro)) echo "<p style='color:red;'>$erro</p>"; ?>

  <form method="post">
    <label for="usuario">Usuário:</label>
    <input type="text" name="usuario" required><br><br>

    <label for="senha">Senha:</label>
    <input type="password" name="senha" required><br><br>

    <button type="submit">Entrar</button>
  </form>
</body>
</html>