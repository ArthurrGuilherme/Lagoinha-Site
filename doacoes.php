<?php 
    include './shared/shared.php';
?>
<!DOCTYPE html>
<html lang="Pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Doaçao da igreja">
    <title>Início | Lagoinha Campinas</title>
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
                    <span class="text-center">
                        <h3><strong>2 Coríntios 9. 7,10-12</strong></h3>
                        <span>
                            <p>“Cada um contribua segundo tiver proposto no coração, não com tristeza ou por necessidade; porque Deus ama ao que dá com</p>
                            <p>alegria. Ora, aquele que dá semente ao que semeia e pão para alimento também suprirá e aumentará a vossa sementeira e</p>
                            <p>multiplicará os frutos da vossa justiça, enriquecendo-vos, em tudo, para toda generosidade, a qual faz que, por nosso intermédio,</p>
                            <p>sejam tributadas graças a Deus. Porque o serviço dessa assistência não só supre a necessidade dos santos, mas também redunda</p>
                            <p>em muitas graças a Deus…”</p>
                        </span>
                    </span>
                </div>
            </article>
        </section>
        <section class="container-md">
            <article id="Banco" class="d-flex justify-content-evenly ">
                <div style="gap: .8rem;" class="d-flex justify-content-center align-items-center">
                    <span class="w-25 d-flex justify-content-center">
                        <img class="w-75 rounded" src="./img/Pix.webp" alt="Pix">
                    </span>
                    <span>
                        <h4>Pix</h4>
                        <span>
                            <p>Chave CNPJ:</p>
                            <p>37.655.151/0001-98</p>
                            <p>Chave E-mail:</p>
                            <p>financeirolagoinhacampinas@gmail.com</p>
                        </span>
                    </span>
                </div>
                <div style="gap: .8rem;" class="d-flex justify-content-center align-items-center">
                    <span class="w-25 d-flex justify-content-center">
                        <img class="w-100 rounded" src="./img/Itau.webp" alt="Pix">
                    </span>
                    <span>
                        <h4>Banco Itaú</h4>
                        <span>
                            <p>Agência 2711</p>
                            <p>C/C 25674-9</p>
                        </span>
                    </span>
                </div>
            </article>
            <br>
            <article id="Banco" class="d-flex justify-content-evenly">
                <div style="gap: 0.8rem;" class="d-flex justify-content-center align-items-center">
                    <span class="w-25 d-flex justify-content-center">
                        <img class="w-100 rounded" src="./img/Santander.webp" alt="Pix">
                    </span>
                    <span>
                        <h4>Banco Santander</h4>
                        <span>
                            <p>Agência 1583</p>
                            <p>C/C 13001332-4</p>
                        </span>
                    </span>
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <span class="w-50 d-flex justify-content-center">
                        <img class="w-75 rounded" src="./img/picpay-qrcode.webp" alt="Pix">
                    </span>
                    <span>
                        <h4>PicPay</h4>
                    </span>
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
        <script src="./js/scrollrevelll.js"></script>
        <script src="./js/maps.js"></script>
        <!--Js import-->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <!--Js import-->
    <!--Js-->
</html>