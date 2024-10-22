<?php
include 'db.php'; // Inclui o arquivo de conexão com o banco de dados

// Verifica se o método da requisição é POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recebe os dados do formulário via POST
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $desejo = $_POST['desejo'];
    $tipo_gc = $_POST['tipo_gc'];
    $regiao = $_POST['regiao'];
    $comentario = $_POST['comentario'];

    // Prepara o comando SQL para inserir os dados no banco
    $sql = "INSERT INTO gc_participantes (nome, telefone, desejo, tipo_gc, regiao, comentario) 
            VALUES ('$nome', '$telefone', '$desejo', '$tipo_gc', '$regiao', '$comentario')";

    // Verifica se a inserção foi bem-sucedida
    if ($conn->query($sql) === TRUE) {
        echo "Dados inseridos com sucesso!";
    } else {
        // Em caso de erro, exibe a mensagem de erro
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    // Fecha a conexão com o banco de dados
    $conn->close();
}
?>
