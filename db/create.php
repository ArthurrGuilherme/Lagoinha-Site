<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $desejo = $_POST['desejo'];
    $tipo_gc = $_POST['tipo_gc'];
    $regiao = $_POST['regiao'];
    $comentario = $_POST['comentario'];

    $sql = "INSERT INTO gc_participantes (nome, telefone, desejo, tipo_gc, regiao, comentario)
            VALUES ('$nome', '$telefone', '$desejo', '$tipo_gc', '$regiao', '$comentario')";

    if ($conn->query($sql) === TRUE) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
