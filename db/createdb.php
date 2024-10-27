<?php
include '../shared/shared.php';
include 'database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $titulo = $_POST['titulo'];
    $mensagem = $_POST['mensagem'];

    $stmt = $pdo->prepare("INSERT INTO mensagens (nome, titulo, mensagem) VALUES (?, ?, ?)");
    $stmt->execute([$nome, $titulo, $mensagem]);

    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Adicionar Uma Oração</title>
    <!--Css-->
        <link rel="stylesheet" href="../css/reset.css">
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="../css/shared.css">
        <!--Css import-->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
            <script src="https://unpkg.com/scrollreveal"></script>
        <!--Css import-->
    <!--Css-->
</head>
<body>
    <!--Header-->
        <?php echo $headerLogiin; ?>
    <!--Header-->
    <!--Scrolltop-->
        <?php echo $arrow; ?>
    <!--Scrolltop-->
    <main>
        <div class="container-md p-5">
            <h1 class="text-center mb-4">Adicionar uma Oração</h1>
            <form method="POST" action="">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input class="form-control" type="text" name="nome" id="nome" required>
                </div>
                <div class="form-group">
                    <label for="titulo">Título:</label>
                    <select class="form-control" name="titulo" id="titulo" required>
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
                </div>
                <div class="form-group">
                    <label for="mensagem">Mensagem:</label>
                    <textarea class="form-control" name="mensagem" id="mensagem" rows="4" required></textarea>
                </div>
                <div class="d-flex justify-content-center">
                    <button class="btn btn-success" type="submit">Salvar</button>
                </div>
            </form>
        </div>
    </main>
    <!--Footer-->
        <?php echo $footerLogiin; ?>
    <!--Footer-->
</body>
    <!--Js-->
        <script src="./js/scrollrevelll.js"></script>
        <script src="./js/maps.js"></script>
        <!--Js import-->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <!--Js import-->
    <!--Js-->
</html>
