<?php include "conexao.php"; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Cadastro de Usuários</title>
</head>
<body>
  <h1>Formulário de Cadastro</h1>

  <form method="post">
    <label>Nome:</label>
    <input type="text" name="nome" required><br><br>

    <label>E-mail:</label>
    <input type="email" name="email" required><br><br>

    <label>Telefone:</label>
    <input type="text" name="telefone" required><br><br>

    <button type="submit">Enviar</button>
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $conn->real_escape_string($_POST["nome"]);
    $email = $conn->real_escape_string($_POST["email"]);
    $telefone = $conn->real_escape_string($_POST["telefone"]);

    $sql = "INSERT INTO usuarios (nome, email, telefone) VALUES ('$nome', '$email', '$telefone')";

    if ($conn->query($sql) === TRUE) {
      echo "<p>Cadastro realizado com sucesso.</p>";
    } else {
      echo "<p style='color:red;'>Erro: " . $conn->error . "</p>";
    }

    $conn->close();
  }
  ?>
</body>
</html>