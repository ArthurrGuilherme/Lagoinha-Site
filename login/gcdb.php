<?php

include '../db/db.php'; 


if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];

    
    $sql = "DELETE FROM gc_participantes WHERE id = $delete_id";

    
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Registro excluído com sucesso!');</script>";
    } else {
        echo "Erro ao excluir o registro: " . $conn->error;
    }
}


$sql = "SELECT * FROM gc_participantes";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes dos Participantes | Lagoinha Campinas</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 15px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        button {
            background-color: red;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }
    </style>
    <script>
        // Função para excluir o registro
        function excluirRegistro(id) {
            if (confirm('Tem certeza que deseja excluir este registro?')) {
                // Redireciona para a mesma página com o ID do registro para excluir
                window.location.href = '?delete_id=' + id;
            }
        }
    </script>
</head>
<body>

    <h2>Lista de Participantes do GC</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Telefone (WhatsApp)</th>
            <th>O que você deseja?</th>
            <th>Tipo de GC</th>
            <th>Região</th>
            <th>Ações</th> <!-- Coluna para as ações (excluir) -->
        </tr>

        <?php
        // Verifica se há resultados e exibe os dados
        if ($result->num_rows > 0) {
            // Itera sobre os registros e exibe cada linha em uma tabela
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row['id'] . "</td>
                        <td>" . $row['nome'] . "</td>
                        <td>" . $row['telefone'] . "</td>
                        <td>" . $row['desejo'] . "</td>
                        <td>" . $row['tipo_gc'] . "</td>
                        <td>" . $row['regiao'] . "</td>
                        <td>
                            <button onclick='excluirRegistro(" . $row['id'] . ")'>Excluir</button>
                        </td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='8'>Nenhum participante encontrado.</td></tr>";
        }

        // Fecha a conexão com o banco de dados
        $conn->close();
        ?>

    </table>

</body>
</html>
