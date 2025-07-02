<?php
$host = "localhost";
$usuario = "root";
$senha = "admin";
$banco = "meubanco"; 

$conn = new mysqli($host, $usuario, $senha, $banco);

if ($conn->connect_error) {
  die("Falha na conexão: " . $conn->connect_error);
}
?>