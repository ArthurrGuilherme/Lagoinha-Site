<?php 
    include './shared/shared.php';
    include './db/database.php';

$stmt = $pdo->query("SELECT * FROM mensagens ORDER BY id DESC");
$mensagens = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="Pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Igreja">
    <title>Orações | Lagoinha Campinas</title>
    <!--Css-->
        <link rel="stylesheet" href="./css/reset.css">
        <link rel="stylesheet" href="./css/main.css">
        <link rel="stylesheet" href="./css/shared.css">
        <!--Css import-->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
            <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        <!--Css import-->
    <!--Css-->
</head>
<body>
    <!--Header-->
        <?php echo $header; ?>
    <!--Header-->
    <!--Scrolltop-->
        <?php echo $arrow; ?>
    <!--Scrolltop-->
    <main>
    <div class="container mt-5">
        <h1>Mural de orações</h1>
        <a href="./db/createdb.php" class="btn btn-primary mb-3">Adicionar Nova Mensagem</a>
        <div class="row">
            <?php foreach ($mensagens as $mensagem): ?>
                <div class="col-md-4">
                    <div class="card mb-4" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title"><?= htmlspecialchars($mensagem['nome']) ?></h5>
                            <h6 class="card-subtitle mb-2 text-muted"><?= htmlspecialchars($mensagem['titulo']) ?></h6>
                            <p class="card-text" 
                               id="message-<?= $mensagem['id'] ?>" 
                               style="overflow: hidden; max-height: 4.5em; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">
                                <?= htmlspecialchars($mensagem['mensagem']) ?>
                            </p>
                            <a href="javascript:void(0);" class="card-link read-more" data-message="<?= htmlspecialchars($mensagem['mensagem']) ?>">Ler mais</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    </main>
    <br>
    <!--Footer-->
        <?php echo $footer; ?>
    <!--Footer-->
</body>
<script>
        document.addEventListener('DOMContentLoaded', function() {
            const readMoreLinks = document.querySelectorAll('.read-more');
            readMoreLinks.forEach(link => {
                link.addEventListener('click', function() {
                    const message = this.getAttribute('data-message');
                    swal({
                        title: "Mensagem Completa",
                        text: message,
                        icon: "info",
                        button: "Fechar",
                    });
                });
            });
        });
    </script>
    <!--Js-->
        <script src="./js/maps.js"></script>
        <!--Js import-->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <!--Js import-->
    <!--Js-->
</html>        