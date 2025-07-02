<?php

$host = "localhost";     
$usuario = "root";       
$senha = "admin";             
$banco = "meubanco";    

$conn = new mysqli($host, $usuario, $senha, $banco);

// Verifica conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Consulta SQL
$sql = "SELECT id, nome, email, telefone FROM usuarios";
$resultado = $conn->query($sql);

// Exibe os dados em uma tabela HTML
echo "<h2>Lista de Usuários</h2>";

if ($resultado->num_rows > 0) {
    echo "<table border='1' cellpadding='10'>";
    echo "<tr><th>Nome</th><th>E-mail</th><th>Telefone</th></tr>";

    while ($linha = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($linha["nome"]) . "</td>";
        echo "<td>" . htmlspecialchars($linha["email"]) . "</td>";
        echo "<td>" . htmlspecialchars($linha["telefone"]) . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "<p>Nenhum registro encontrado na tabela.</p>";
}

// Fecha conexão
$conn->close();
?>