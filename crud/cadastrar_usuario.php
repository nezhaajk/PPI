<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Usuario</title>
</head>
<body>

    <form action="rota.php?rota=cadastrar_usuario" method="post">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" >
        
        <label for="senha">Senha</label>
        <input type="senha" id="senha" name="senha" >

        <input type="submit" value="cadastrar">
    </form>
    
</body>
</html>