<?php
include '../db/db.php'; 
include '../shared/shared.php';


    if (isset($_GET['delete_id'])) {
        $delete_id = intval($_GET['delete_id']);
        $sql = "DELETE FROM gc_participantes WHERE id = $delete_id";
        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Registro excluído com sucesso!');</script>";
        } else {
            echo "Erro ao excluir o registro: " . $conn->error;
        }
    }


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes dos Participantes | Lagoinha Campinas</title>
    <!--Css-->
        <link rel="stylesheet" href="../css/reset.css">
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="../css/shared.css">
        <!--Css import-->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
        <!--Css import-->
    <!--Css-->
</head>
<body>
    <!--Header-->
        <?php echo $headerLogiin ?>
    <!--Header-->
    <main>
        <section class="container-md">
            <article>
                <div>
                    <span class="p-5 text-center">
                        <h1>Lista de Participantes do GC</h1>
                    </span>
                    <div id="CardsGc" class="row">
                        <?php
                            include '../db/db.php'; 
                                $sql = "SELECT * FROM gc_participantes ORDER BY data_criacao DESC";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                        echo '<div class="col-md-4">';
                                        echo '<div class="card" style="width: 18rem;">';
                                        echo '<div class="card-body">';
                                        echo '<h5 class="card-title">' . htmlspecialchars($row['nome']) . '</h5>';
                                        echo '<h6 class="card-subtitle mb-2 text-muted">' . htmlspecialchars($row['telefone']) . '</h6>';
                                        echo '<p class="card-text">' . htmlspecialchars($row['comentario']) . '</p>';
                                        echo '<p class="card-text">O que você deseja: ' . htmlspecialchars($row['desejo']) . ' Tipo de GC: ' . htmlspecialchars($row['tipo_gc']) . '</p>';
                                        echo '<br>';
                                        echo '<button class="btn btn-danger" onclick="excluirRegistro(' . $row['id'] . ')">Excluir</button>';
                                        echo '</div>';
                                        echo '</div>';
                                        echo '</div>';
                                    }
                                } else {
                                    echo '<div class="col-12"><p>Nenhum participante encontrado.</p></div>';
                                }
                            $conn->close();
                        ?>
                    </div>
                </div>
            </article>
        </section>
        <br>
    </main>
    <!--Footer-->
        <?php echo $footerLogiin ?>
    <!--Footer-->
</body>
    <script>
        // Função para excluir o registro
        function excluirRegistro(id) {
            if (confirm('Tem certeza que deseja excluir este registro?')) {
                window.location.href = '?delete_id=' + id;
            }
        }
    </script>
    <!--JS-->
        <!--Js import-->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <!--Js import-->
    <!--Js-->
</html>


