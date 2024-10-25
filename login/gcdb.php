<?php
include '../db/db.php'; 

    if (isset($_GET['delete_id'])) {
        $delete_id = intval($_GET['delete_id']);
        $sql = "DELETE FROM gc_participantes WHERE id = $delete_id";
        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Registro excluído com sucesso!');</script>";
        } else {
            echo "Erro ao excluir o registro: " . $conn->error;
        }
    }

    $result = $conn->query($sql);
    if (!$result) {
        die("Erro na consulta SQL: " . $conn->error);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes dos Participantes</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card {
            margin-bottom: 20px; /* Espaçamento entre os cartões */
        }
    </style>
</head>
<body>

    <div class="container mt-5">
        <h2>Lista de Participantes do GC</h2>

        <div class="row">
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



</body>
    <script>
        // Função para excluir o registro
        function excluirRegistro(id) {
            if (confirm('Tem certeza que deseja excluir este registro?')) {
                window.location.href = '?delete_id=' + id;
            }
        }
    </script>
</html>


