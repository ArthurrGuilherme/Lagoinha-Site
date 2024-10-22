<?php 
    include './shared/shared.php';
?>
<!DOCTYPE html>
<html lang="Pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Doaçao da igreja">
    <title>Carisma | Lagoinha Campinas</title>
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
        <section id="Titulo" class="container-md d-flex justify-content-center align-items-center p-5">
            <article>
                <div>
                    <span >
                        <h3 class="text-center"><strong>Seminário Teológico Carisma Campinas</strong></h3>
                        <span>
                            <p>O Seminário Teológico Carisma é uma instituição que dá vazão para o aprendizado das Escrituras e o mover espiritual.</p>
                            <p>O objetivo é treinar pessoas para serem ministras do evangelho, é treinar homens e mulheres para serem respostas de</p>
                            <p>Estamos aqui como sal da terra e luz do mundo. Estamos aqui para glorificar Cristo em nossa vida a salvação. Deus para</p>
                            <p>a essa geração, levando a Palavra e o Espírito Santo às nações.</p>
                        </span>
                    </span>
                </div>
            </article>
        </section>
        <section class="container-md">
            <article>
                <div style="gap: 1rem;" class="d-flex justify-content-evenly align-items-center">
                    <span class="w-50" id="Videoimg">
                        <img class="w-100 rounded" src="./img/carisma.jpg" alt="Img">
                    </span>
                    <span id="Texto" style="margin: 0px !important;">
                        <h4><strong>O Seminário da Palavra e do Espírito</strong></h4>
                        <p>Com cursos oferecidos na modalidade presencial, já</p>
                        <p>capacitou milhares de pessoas em todo o mundo. Em </p>
                        <p>Campinas as aulas são presenciais  no período noturno</p>
                        <p>(segunda-feira e terça-feira).</p>
                        <br>
                        <p>Outras modalidades do Carisma são os cursos de extensão como</p>
                        <p>a Escola de Mestres destinados a pessoas que já são formadas</p>
                        <p>e desejam se capacitar ainda mais com foco no ministério de</p>
                        <p> ensino, e cursos de especialização ministerial e desenvolvimento</p>
                        <p>pessoal</p>
                    </span>
                </div>
                <br>
                <span  class="d-flex justify-content-center">
                    <a style="background: linear-gradient(45deg, #e91b1b, black);color: #fff;padding: .5rem 1.5rem;border-radius: 5px;" href="https://docs.google.com/forms/d/e/1FAIpQLSctUM71SZw2gwDNIdRlNgUdjCGiSwCJ13lmLtaPzoLet1Qaig/viewform" target="_blank" rel="noopener noreferrer">FAÇA SUA PRÉ-INSCRIÇÃO AQUI!</a>
                </span>
            </article>
        </section>
        <br>
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