<?php
$servername = "localhost";
$username = "root"; // seu usuário do MySQL
$password = ""; // sua senha do MySQL
$dbname = "lagoinha"; // o nome do seu banco de dados

// Criando conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Checando conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>
