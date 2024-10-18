<?php 
    include './shared/shared.php';
?>
<!DOCTYPE html>
<html lang="Pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ministério | Lagoinha Campinas</title>
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
                        <h3 class="text-center"><strong>Ministérios</strong></h3>
                    </span>
                </div>
            </article>
        </section>
        <section class="Ministerio01">
            <article class="container-md d-flex justify-content-evenly align-items-center">
                <div id="Solidaria" class="card mb-3" style="max-width: 540px; cursor: pointer;">
                    <div class="row g-0">
                    <div class="col-md-4">
                        <img src="./img/crie.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                        <h5 class="card-title">Lagoinha Solidária</h5>
                        <p class="card-text"><small class="text-muted">Coordenação: Raimundo Alcantara e Eluar Alcantara</small></p>
                        <p class="card-text"><small class="text-muted">19 98728-3177</small></p>
                        </div>
                    </div>
                    </div>
                </div>
                <div id="GC" class="card mb-3" style="max-width: 540px; cursor: pointer;">
                    <div class="row g-0">
                    <div class="col-md-4">
                        <img src="./img/gc.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                        <h5 class="card-title">GC - Grupo de Crescimento</h5>
                        <p class="card-text"><small class="text-muted">Coordenação: Guilherme Almeida e Beatriz Almeida</small></p>
                        <p class="card-text"><small class="text-muted">19 99221-8976</small></p>
                        </div>
                    </div>
                    </div>
                </div>
            </article>
        </section>
        <section class="Ministerio02">
            <article class="container-md d-flex justify-content-evenly align-items-center">
                <div id="casais" class="card mb-3" style="max-width: 540px; cursor: pointer;">
                    <div class="row g-0">
                    <div class="col-md-4">
                        <img src="./img/crie.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                        <h5 class="card-title">Casais</h5>
                        <p class="card-text"><small class="text-muted">Coordenação: Alexandre Senju e Liliani Senju</small></p>
                        <p class="card-text"><small class="text-muted">19 99227-4619</small></p>
                        </div>
                    </div>
                </div>
                </div>
                <div id="Elas" class="card mb-3" style="max-width: 540px; cursor: pointer;">
                    <div class="row g-0">
                    <div class="col-md-4">
                        <img src="./img/elas.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                        <h5 class="card-title">Elas</h5>
                        <p class="card-text"><small class="text-muted">Coordenação: Hellen Geraldi</small></p>
                        <p class="card-text"><small class="text-muted">19 98138-5445</small></p>
                        </div>
                    </div>
                    </div>
                </div>
            </article>
        </section>
        <section class="Ministerio03">
            <article class="container-md d-flex justify-content-evenly align-items-center">
                <div id="maximus" class="card mb-3" style="max-width: 540px; cursor: pointer;">
                    <div class="row g-0">
                    <div class="col-md-4">
                        <img src="./img/maximus.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                        <h5 class="card-title">Maximus</h5>
                        <p class="card-text"><small class="text-muted">Coordenação: Cristiano Bredda</small></p>
                        <p class="card-text"><small class="text-muted">19 98820-0057</small></p>
                        </div>
                    </div>
                </div>
                </div>
                <div id="Intercessão" class="card mb-3" style="max-width: 540px; cursor: pointer;">
                    <div class="row g-0">
                    <div class="col-md-4">
                        <img src="./img/crie.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                        <h5 class="card-title">Intercessão</h5>
                        <p class="card-text"><small class="text-muted">Coordenação: Volney Lima e Luana Lima</small></p>
                        <p class="card-text"><small class="text-muted">11 95488-4859</small></p>
                        </div>
                    </div>
                    </div>
                </div>
            </article>
        </section>
        <section class="Ministerio04">
            <article class="container-md d-flex justify-content-evenly align-items-center">
                <div id="Kids" class="card mb-3" style="max-width: 540px; cursor: pointer;">
                    <div class="row g-0">
                    <div class="col-md-4">
                        <img src="./img/kids.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                        <h5 class="card-title">Kids</h5>
                        <p class="card-text"><small class="text-muted">Coordenação: Leila Bredda</small></p>
                        <p class="card-text"><small class="text-muted">19 98820-0056</small></p>
                        </div>
                    </div>
                </div>
                </div>
                <div id="Consolidacao" class="card mb-3" style="max-width: 540px; cursor: pointer;">
                    <div class="row g-0">
                    <div class="col-md-4">
                        <img src="./img/crie.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                        <h5 class="card-title">Consolidação</h5>
                        <p class="card-text"><small class="text-muted">Coordenação: Volney Lima e Luana Lima</small></p>
                        <p class="card-text"><small class="text-muted">11 95488-4859</small></p>
                        </div>
                    </div>
                    </div>
                </div>
            </article>
        </section>
        <section class="Ministerio05">
            <article class="container-md d-flex justify-content-evenly align-items-center">
                <div id="Louvores" class="card mb-3" style="max-width: 540px; cursor: pointer;">
                    <div class="row g-0">
                    <div class="col-md-4">
                        <img src="./img/crie.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                        <h5 class="card-title">Louvor e Artes</h5>
                        <p class="card-text"><small class="text-muted">Coordenação: Hellen Geraldi</small></p>
                        <p class="card-text"><small class="text-muted">19 98138-5445</small></p>
                        </div>
                    </div>
                </div>
                </div>
                <div id="Link" class="card mb-3" style="max-width: 540px; cursor: pointer;">
                    <div class="row g-0">
                    <div class="col-md-4">
                        <img src="./img/link.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                        <h5 class="card-title">Link</h5>
                        <p class="card-text"><small class="text-muted">Coordenação: Leila Bredda</small></p>
                        <p class="card-text"><small class="text-muted">19 98820-0056</small></p>
                        </div>
                    </div>
                    </div>
                </div>
            </article>
        </section>
        <section class="Ministerio06">
            <article class="container-md d-flex justify-content-evenly align-items-center">
                <div id="Creative" class="card mb-3" style="max-width: 540px; cursor: pointer;">
                    <div class="row g-0">
                    <div class="col-md-4">
                        <img src="./img/crie.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                        <h5 class="card-title">Creative</h5>
                        </div>
                    </div>
                </div>
                </div>
                <div id="Rocket" class="card mb-3" style="max-width: 540px; cursor: pointer;">
                    <div class="row g-0">
                    <div class="col-md-4">
                        <img src="./img/rockt.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                        <h5 class="card-title">Rocket</h5>
                        <p class="card-text"><small class="text-muted">Coordenação: Julio Bento e Gislaine Bento</small></p>
                        <p class="card-text"><small class="text-muted">19 99143-8584</small></p>
                        </div>
                    </div>
                    </div>
                </div>
            </article>
        </section>
        <section class="Ministerio07">
            <article class="container-md d-flex justify-content-evenly align-items-center">
                <div id="legacy" class="card mb-3" style="max-width: 540px; cursor: pointer;">
                    <div class="row g-0">
                    <div class="col-md-4">
                        <img src="./img/legac.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                        <h5 class="card-title">Legacy Jovens</h5>
                        <p class="card-text"><small class="text-muted">Coordenação: Ivan Rohrer e Paula Rohrer</small></p>
                        <p class="card-text"><small class="text-muted">11 99260-5327</small></p>
                        </div>
                    </div>
                </div>
                </div>
                <div id="Plug" class="card mb-3" style="max-width: 540px; cursor: pointer;">
                    <div class="row g-0">
                    <div class="col-md-4">
                        <img src="./img/crie.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                        <h5 class="card-title">Plug</h5>
                        </div>
                    </div>
                    </div>
                </div>
            </article>
        </section>
        <section class="Ministerio08">
            <article class="container-md d-flex justify-content-evenly align-items-center">
                <div id="carisma" class="card mb-3" style="max-width: 540px; cursor: pointer;">
                    <div class="row g-0">
                    <div class="col-md-4">
                        <img src="./img/carisma.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                        <h5 class="card-title">Carisma</h5>
                        <p class="card-text"><small class="text-muted">Coordenação: Cristiano Bredda</small></p>
                        <p class="card-text"><small class="text-muted">campinas@carisma.org.br</small></p>
                        <p class="card-text"><small class="text-muted">(19) 99112-7192</small></p>
                        </div>
                    </div>
                </div>
                </div>
                <div id="Diaconia" class="card mb-3" style="max-width: 540px; cursor: pointer;">
                    <div class="row g-0">
                    <div class="col-md-4">
                        <img src="./img/crie.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                        <h5 class="card-title">Diaconia</h5>
                        <p class="card-text"><small class="text-muted">(19) 9 9823-4742</small></p>
                        </div>
                    </div>
                    </div>
                </div>
            </article>
        </section>
    </main>
    <!--Footer-->
        <?php echo $footer; ?>
    <!--Footer-->
</body>
    <script src="./js/sweetalert.js"></script>
    <!--Js-->
        <script src="./js/scrollrevelll.js"></script>
        <script src="./js/maps.js"></script>
        <!--Js import-->
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <!--Js import-->
    <!--Js-->
</html>