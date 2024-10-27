<?php
include 'database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $titulo = $_POST['titulo'];
    $mensagem = $_POST['mensagem'];

    $stmt = $pdo->prepare("INSERT INTO mensagens (nome, titulo, mensagem) VALUES (?, ?, ?)");
    $stmt->execute([$nome, $titulo, $mensagem]);

    header("Location: ../oracao.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Adicionar Nova Mensagem</title>
</head>
<body>
    <h1>Adicionar Nova Mensagem</h1>
    <form method="POST" action="">
        <label>Nome:</label>
        <input type="text" name="nome" required>
        <br>
        <label>Título:</label>
        <select name="titulo" required>
            <option value="Pessoal">Pessoal</option>
            <option value="Crescimento">Crescimento</option>
            <option value="Estudos">Estudos</option>
            <option value="Familia">Familia</option>
            <option value="Matrimonial">Matrimonial</option>
            <option value="Conversões">Conversões</option>
            <option value="Missões">Missões</option>
            <option value="Viagens">Viagens</option>
            <option value="Finanças">Finanças</option>
            <option value="Trabalho">Trabalho</option>
            <option value="Saúde">Saúde</option>
            <option value="Igreja">Igreja</option>
            <option value="Ações de Graças">Ações de Graças</option>
            <option value="Nações">Nações</option>
        </select>
        <br>
        <label>Mensagem:</label>
        <textarea name="mensagem" required></textarea>
        <br>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>
