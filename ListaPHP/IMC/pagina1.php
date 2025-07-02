<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Coletar Nome e E-mail</title>
</head>
<body>
  <h1>Informações Iniciais</h1>
  <form action="pagina2.php" method="get">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome" required><br><br>

    <label for="email">E-mail:</label>
    <input type="email" name="email" id="email" required><br><br>

    <button type="submit">Avançar</button>
  </form>
</body>
</html>