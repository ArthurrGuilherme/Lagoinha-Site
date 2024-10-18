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
        <section id="Titulo" class="container-md d-flex justify-content-center align-items-center p-5">
            <article>
                <div>
                    <span >
                        <h3 class="text-center"><strong>Historia</strong></h3>
                        <span>
                            <p>Jesus morreu pelas pessoas, e a nossa missão como igreja, é viver por elas. Permanecemos no mundo como </p>
                            <p>semeadores para espalhar a boa semente; como lavradores para arar o terreno árido; como arautos anunciando </p>
                            <p>a salvação. Estamos aqui como sal da terra e luz do mundo. Estamos aqui para glorificar Cristo em nossa vida </p>
                            <p>diária. Estamos aqui para todos que em algum momento da vida, ou até mesmo nos dias atuais, não gostam </p>
                            <p>mais de igreja.</p>
                        </span>
                    </span>
                </div>
            </article>
        </section>
        <section class="container-md">
            <article>
                <div style="gap: 1rem;" class="d-flex justify-content-evenly align-items-center">
                    <span class="w-50" id="Videoimg">
                        <img class="w-100 rounded" src="./img/img_banner2.webp" alt="Img">
                    </span>
                    <span id="Texto" style="margin: 0px !important;">
                        <h4><strong>Como vivemos? </strong></h4>
                        <br>
                        <p>O evangelho é cristocêntrico. É uma igreja presente</p>
                        <p> no chão da vida, lidando com o ser humano do jeito</p>
                        <p>que ele é; para que juntos possamos ser o sonho que</p>
                        <p> Deus quer</p>
                        <br>
                        <p>Alguns têm a ideia de que a única forma pela qual podem</p>
                        <p>viver para Deus é tornando-se um ministro, missionário ou </p>
                        <p>obreiro. Não é função, é fervor; não é posição, é a graça</p>
                        <p>que nos possibilitará glorificar a Deus. Não é sobre a história</p>
                        <p>de quem você era, mas sobre quem Deus</p>
                    </span>
                </div>
            </article>
        </section>
        <section class="container-md p-5">
            <article>
                <div style="gap: 1rem;" class="d-flex justify-content-evenly align-items-center">
                    <span id="Texto" style="margin: 0px !important;">
                        <h4><strong>Como nos movemos?</strong></h4>
                        <p>Uma igreja aberta a todos, mas não aberta a tudo.</p>
                        <p>O evangelho maltrapilho é baseado em um número de</p>
                        <p>pessoas que criam suas próprias doutrinas; um condomínio</p>
                        <p>fechado, baseado em traumas, autoritarismo e empoderamento.</p>
                        <p>A Igreja que apresentamos nessas palavras não é a melhor</p>
                        <p>para você frequentar, mas é o lugar certo para você ser</p>
                        <p>quem Deus quer que você seja. Pessoas com pessoas, </p>
                        <p>buscando não se ausentar de seus erros, mas, amando</p>
                        <p>uns aos outros para ajudá-los e consertá-los.</p>
                    </span>
                    <span class="w-50" id="Videoimg">
                        <img class="w-100 rounded" src="./img/img_banner3.webp" alt="Img">
                    </span>
                </div>
            </article>
        </section>
        <section class="container-md">
            <article>
                <div style="gap: 1rem;" class="d-flex justify-content-evenly align-items-center">
                    <span class="w-50" id="Videoimg">
                        <img class="w-100 rounded" src="./img/img_banner4.webp" alt="Img">
                    </span>
                    <span id="Texto" style="margin: 0px !important;">
                        <h4><strong>Como existimos?</strong></h4>
                        <br>
                        <p>Deus certamente não faz uma experiência com a nossa fé,</p>
                        <p>muito menos com o nosso mero amor para provar a sua qualidade.</p>
                        <p>Ele já os conhecia muito bem. E é através do seu amor que</p>
                        <p>podemos existir.</p>
                        <br>
                        <p>Ele não existe por nós, nós é quem existimos por ele. Cristo </p>
                        <p>é tudo em todos. Nunca encontraremos alegria olhando para</p>
                        <p>nossas orações, nossas ações ou nossos sentimentos; é o que</p>
                        <p>Jesus é, não o que nós somos.</p>
                    </span>
                </div>
            </article>
        </section>
    </main>
    <br>
    <!--Footer-->
        <?php echo $footer; ?>
    <!--Footer-->
</body>
    <!--Js-->
        <script src="./js/scrollrevell.js"></script>
        <script src="./js/maps.js"></script>
        <!--Js import-->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <!--Js import-->
    <!--Js-->
</html>