<?php 
    include './shared/shared.php';
?>
<!DOCTYPE html>
<html lang="Pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Igreja">
    <title>Sobre nós | Lagoinha Campinas</title>
    <!--Css-->
        <link rel="stylesheet" href="./css/reset.css">
        <link rel="stylesheet" href="./css/main.css">
        <link rel="stylesheet" href="./css/shared.css">
        <!--Css import-->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
            <script src="https://unpkg.com/scrollreveal"></script>
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
        <section id="Titulo" class="container-md d-flex justify-content-center align-items-center p-4">
            <article>
                <div>
                    <span>
                        <h3 class="text-center"><strong>GC's</strong></h3>
                        <span>
                            <p>GC ou Grupo de Crescimento, é a forma pela qual nos organizamos e nos reunimos como igreja, seguindo a prática</p>
                            <p>apostólica de edificação mútua e comunhão nos lares.</p>
                        </span>
                    </span>
                </div>
            </article>
        </section>
        <section class="container-md">
            <article>
                <div style="gap: 1rem;" class="d-flex justify-content-center align-items-center">
                    <span class="w-25" id="Videoimg">
                        <img class="w-100 rounded" src="./img/gcs.jpg" alt="Img">
                    </span>
                    <br>
                    <span id="Texto" style="margin: 0px !important;">
                        <p>A Igreja Batista da Lagoinha tem uma visão clara sobre</p>
                        <p>os Grupos de Crescimento (GC) pois entende que o trabalho</p>
                        <p>de GC é  a base da Igreja, é a visão da igreja para o</p>
                        <p>discipulado. A preocupação não é números,, resultados, mas</p>
                        <p>sim o cuidado de cada membro e a evangelização daqueles que não</p>
                        <p>conhecem a Jesus. Fazendo com que cada membro seja um instrumento</p>
                        <p>de Deus de evangelização e acompanhamento.</p>
                    </span>
                </div>
            </article>
        </section>
        <section>
            <article>
                <div>
                    <span>
                        <h2>Formulário de Cadastro GC</h2>
                    </span>
                    <form action="./db/create.php" method="post">
                        <label for="nome">Nome:</label>
                        <input type="text" id="nome" name="nome" required><br><br>

                        <label for="telefone">Telefone (WhatsApp):</label>
                        <input type="text" id="telefone" name="telefone" required><br><br>

                        <label for="desejo">O que você deseja?</label>
                        <select id="desejo" name="desejo" required>
                            <option value="Participar de um GC">Participar de um GC</option>
                            <option value="Liderar um GC">Liderar um GC</option>
                            <option value="Receber um GC em casa (ser anfitrião)">Receber um GC em casa (ser anfitrião)</option>
                        </select><br><br>

                        <label for="tipo_gc">Qual tipo de GC te atende?</label>
                        <select id="tipo_gc" name="tipo_gc" required>
                            <option value="Misto">Misto (homens e mulheres)</option>
                            <option value="Misto + Kids">Misto + Kids (crianças)</option>
                            <option value="Kids">Kids (de 02 a 09 anos)</option>
                            <option value="Link">Link (de 10 a 12 anos)</option>
                            <option value="Rocket">Rocket (de 13 a 17 anos)</option>
                            <option value="Legacy">Legacy (a partir de 18 anos)</option>
                            <option value="Shine">Shine (mulheres)</option>
                            <option value="Maximus">Maximus (homens)</option>
                            <option value="On-line">On-line</option>
                        </select><br><br>

                        <label for="regiao">Qual bairro/região de preferência para frequentar um GC?</label>
                        <input type="text" id="regiao" name="regiao"><br><br>

                        <label for="comentario">Deixe aqui seu comentário, dúvida, sugestão, agradecimento...</label><br>
                        <textarea id="comentario" name="comentario" rows="4" cols="50"></textarea><br><br>

                        <input type="submit" value="Enviar">
                    </form>
                </div>
            </article>
        </section>
    </main>
    <!--Footer-->
        <?php echo $footer; ?>
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