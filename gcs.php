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
        <link rel="stylesheet" href="./css/forms.css">
        <!--Css import-->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
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
        <br><br>
        <section id="Titulo" class="container-md d-flex justify-content-center align-items-center">
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
        <section id="Formulario" class="container-md d-flex justify-content-end align-items-end">
            <article>
                <div class="p-4" style="box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);">
                    <span>
                        <h4>Formulário de Cadastro GC</h4>
                    </span>
                    <form id="gcForm" onsubmit="enviarFormulario(event)">
                        <label for="nome">Nome:</label>
                        <br>
                        <input class="text-center" type="text" id="nome" name="nome" required>
                        <br><br>
                        <label for="telefone">Telefone (WhatsApp):</label>
                        <br>
                        <input class="text-center" type="text" id="telefone" name="telefone" required>
                        <br><br>
                        <label for="desejo">O que você deseja?</label>
                        <br>
                        <select class="text-center" id="desejo" name="desejo" required>
                            <option value="Participar de um GC">Participar de um GC</option>
                            <option value="Liderar um GC">Liderar um GC</option>
                            <option value="Receber um GC em casa (ser anfitrião)">Receber um GC em casa (ser anfitrião)</option>
                        </select>
                        <br><br>
                        <label for="tipo_gc">Qual tipo de GC te atende?</label>
                        <br>
                        <select id="tipo_gc" name="tipo_gc" required>
                            <option value="Misto (homens e mulheres)">Misto (homens e mulheres)</option>
                            <option value="Misto + Kids (crianças)">Misto + Kids (crianças)</option>
                            <option value="Kids (de 02 a 09 anos)">Kids (de 02 a 09 anos)</option>
                            <option value="Link (de 10 a 12 anos)">Link (de 10 a 12 anos)</option>
                            <option value="Rocket (de 13 a 17 anos)">Rocket (de 13 a 17 anos)</option>
                            <option value="Legacy (a partir de 18 anos)">Legacy (a partir de 18 anos)</option>
                            <option value="Shine (mulheres)">Shine (mulheres)</option>
                            <option value="Maximus (homens)">Maximus (homens)</option>
                            <option value="On-line">On-line</option>
                        </select>
                        <br><br>
                        <label  for="regiao">Qual bairro/região de preferência para <br> frequentar um GC?</label>
                        <br>
                        <input class="text-center" require type="text" id="regiao" name="regiao">
                        <br><br>
                        <span class="container-md d-flex justify-content-center align-items-center">
                            <button class="text-center btn btn-success" type="submit">Enviar</button>
                        </span>
                    </form>   
                </div>
            </article>
        </section>
        <br>
    </main>
    <!--Footer-->
        <?php echo $footer; ?>
    <!--Footer-->
</body>
    <!--Js-->
        <script src="./js/sweetalertt.js"></script>
        <!--Js import-->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <!--Js import-->
    <!--Js-->
</html>