<?php 
    include './shared/shared.php';
?>
<!DOCTYPE html>
<html lang="Pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Descrição da pagina-->
        <meta name="description" content="pagina Principal">
    <!--Descrição da pagina-->
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
        <section class="SectionPrimario">
            <article class="sessaoPrimaria">
                <div>
                    <span>
                        <h4 class="text-uppercase text-center text-light"><strong>Grande para servir, pequeno para se importar!</strong></h4>
                    </span>
                </div>
            </article>
        </section>
        <section class="p-5" style="background: #22222226;">
            <article class="container-md">
                <div>
                    <span class="d-flex justify-content-center flex-column align-items-center">
                        <h4 class="text-uppercase fs-4"><strong>Com você em qualquer lugar</strong></h4>
                        <span class="text-center">
                            <p>Confira nossa agenda presencial e também acompanhe as transmissões ao vivo de onde estiver</p>
                            <p> usando a internet. Veja a programação a seguir:</p>
                        </span>
                    </span>
                    <br>
                    <span class="d-flex justify-content-evenly">
                        <div id="Card01" class="card text-dark bg-light mb-3 w-50 text-center" style="max-width: 18rem;">
                            <div class="card-header bg-dark text-white text-center"><strong>DOMINGO</strong></div>
                            <div class="card-body">
                                <p class="card-text"><strong>Culto de Celebração:</strong> <br> 10:00 - 12:00</p>
                                <br>
                                <p class="card-text"><strong>Culto de Celebração:</strong> <br> 19:00 - 21:00</p>
                            </div>
                        </div>
                        <div id="Card02" class="card text-dark bg-light mb-3 w-50 text-center" style="max-width: 18rem;">
                            <div class="card-header bg-dark text-white"><strong>QUARTA-FEIRA</strong></div>
                            <div class="card-body">
                                <p class="card-text"><strong>Culto Fé:</strong> <br> 19:30 - 21:30</p>
                                <br>
                            </div>
                        </div>
                        <div id="Card03" class="card text-dark bg-light mb-3 w-50 text-center" style="max-width: 18rem;">
                            <div class="card-header bg-dark text-white text-center"><strong>Sábado</strong></div>
                            <div class="card-body">
                                <p class="card-text"><strong>Rocket Teens:</strong> <br> 17:00</p>
                                <br>
                                <p class="card-text"><strong>Legacy Jovens:</strong> <br> 19:30 - 21:00</p>
                            </div>
                        </div>
                    </span>
                    <span id="Btn" class="d-flex justify-content-center">
                        <a target="_blank" href="https://www.youtube.com/lagoinhacampinas" type="button" class="btn btn-dark text-uppercase px-4 py-2">Ver transmissões ao vivo</a>
                    </span>
                </div>
            </article>
        </section>
        <section class="p-5 container-md">
            <article>
                <div style="gap: 1rem;" class="d-flex justify-content-evenly align-items-center">
                    <span id="Videoimg">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/dQZhhFWpHog?si=jdWwZ8FHbbQW41B4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </span>
                    <span id="Texto" style="margin: 0px !important;">
                        <h4><strong>Lagoinha Campinas, uma</strong></h4>
                        <h4><strong>Igreja com a cidade!</strong></h4>
                        <p>Jesus morreu pelas pessoas, e a nossa missão como igreja,</p>
                        <p>é viver por elas. Permanecemos no mundo como</p>
                        <p>semeadores para espalhar a boa semente; como</p>
                        <p>lavradores para arar o terreno árido; como arautos</p>
                        <p>anunciando a salvação. Estamos aqui como sal da terra</p>
                        <p>e luz do mundo. Estamos aqui para glorificar Cristo</p>
                        <p>em nossa vida diária. Estamos aqui para todos que em</p>
                        <p> algum momento da vida, ou até mesmo nos dias atuais,</p>
                        <p> não gostam mais de igreja. </p>
                    </span>
                </div>
                <br>
                <span id="Btn" class="d-flex justify-content-center">
                    <a target="_blank" href="mailto:igrejalagoinhacampinas@gmail.com" type="button" class="btn btn-dark text-uppercase px-4 py-2">Entre em contato</a>
                    
                </span>
            </article>
        </section>
        <section class="p-5" style="background: #22222226;">
            <article class="container-md">
                <div class="d-flex justify-content-evenly  align-items-center">
                    <span id="Texto" class="w-50">
                        <h4><strong>Nosso check-in dos Kids mudou!</strong></h4>
                        <span>
                            <p>Agora para participar de um de nossos cultos kids é necessário que</p>
                            <p>você realize o check-in através do app My Kids! Faça o download do app abaixo.</p>
                        </span>
                        <br>
                        <span>
                            <a href="https://apps.apple.com/br/app/my-kids-familia/id1294433814" target="_blank" rel="noopener noreferrer">
                                <img class="w-25" src="./img/Apple-download.webp" alt="Apple">
                            </a>
                            <a href="https://play.google.com/store/apps/details?id=br.com.gileade.kidsfamilia" target="_blank" rel="noopener noreferrer">
                                <img class="w-25" src="./img/android-download.webp" alt="Android">
                            </a>
                        </span>
                    </span>
                    <span id="Videoimg">
                        <svg data-v-1783f410="" xmlns="http://www.w3.org/2000/svg" width="120%" height="120%" viewBox="0 0 291 220" aria-labelledby="HomeCta-element" role="presentation"><title id="HomeCta-element">HomeCta</title><g fill="currentColor"><g><defs><path d="M8.376 170.533c17.603 25.456 113.016 84.547 237.2 8.306C301.453 144.533 280.09-5.186 223.005.14c-57.085 5.324-43.108 18.191-74.702 8.054C90.191-10.453 24.789 19.15 14.821 73.86c-9.968 54.711-24.048 71.217-6.445 96.673z" id="zi82tlzbaa"></path></defs><g fill="none" fill-rule="evenodd"><path d="M14.858 174.083c17.603 25.455 113.017 84.547 237.2 8.306 55.879-34.307 49.965-117.984-7.12-112.66-57.085 5.324-83.39-14.442-114.984-24.579-58.113-18.646-84.601 6.632-108.65 32.26-24.049 25.628-24.049 71.217-6.446 96.673z" fill="#D4D4D4"></path><path d="M12.49 170.533c17.604 25.456 113.017 84.547 237.2 8.306 55.88-34.306 49.965-117.984-7.12-112.66-57.085 5.324-83.39-14.441-114.984-24.578-58.113-18.646-84.601 6.631-108.65 32.26-24.049 25.627-24.049 71.216-6.446 96.672z" fill="#F7F7F7"></path><g transform="translate(4.115)"><mask id="7me9k29z8b" fill="#fff"><use xlink:href="#zi82tlzbaa"></use></mask><g mask="url(#7me9k29z8b)"><path d="M44.265 114.955s-15.59 32.306-14.704 51.104c.886 18.798 14.41 50.645 14.41 50.645h17.131l2.133-41.097 2.593 41.097h18.019s10.698-41.694 9.516-56.613c-1.18-14.92-13.652-44.54-13.652-44.54l-35.446-.596" fill="#262129"></path><path d="M92.803 156.364c-2.17 3.906-5.61 7.237-9.032 9.774-5.93 4.395-12.974 7.62-19.914 10.275l2.517 40.29h17.662s10.488-41.319 9.33-56.104a43.868 43.868 0 0 0-.563-4.235M82.8 120.815c-1.863-3.247-3.23-5.277-3.23-5.277l-34.786-.583s-2.047 2.758-4.604 7.15c20.104 6.9 35.516 2.02 42.62-1.29" fill="#09070F"></path><path d="M43.731 65.672s18.578-2.879 31.071.775c0 0 4.454-19.151-6.518-24.244-10.973-5.092-21.62 2.325-21.62 2.325l-2.933 21.144" fill="#442320"></path><path d="M54.846 60.623s2.205 16.228-2.204 17.106c-4.409.877-12.124-3.51-16.533 3.947-4.409 7.456 14.108 12.94 26.232 11.843 12.312-1.114 27.313-3.148 23.367-13.159-4.409-11.184-19.972 5.488-19.178-10.307.44-8.772.661-14.255.661-14.255l-12.345 4.825" fill="#EB8F75"></path><path d="M55.83 73.513c2.061.117 4.136-.082 6.104-.634 1.99-.557 3.413-1.363 4.852-2.875.415-8.748.623-14.206.623-14.206L55.57 60.683s.989 7.688.26 12.83" fill="#E77F64"></path><path d="M58.762 33.36s-15.078 1.263-12.327 18.781c2.913 18.557 20.934 23.506 26.672 5.142 5.38-17.215-5.827-24.593-14.345-23.922" fill="#EB8F75"></path><path d="M46.266 28.9s12.601-5.696 13.94 5.136c1.064 8.621-6.58 8.935-10.817 11.95-4.237 3.015 1.003 10.05 1.003 10.05s-3.234-.558-3.903-3.685c0 0-2.23 11.28 7.695 15.858 0 0-4.238.893-7.471-3.127 0 0 1.784 3.574 6.69 3.909 0 0-4.683 2.568-9.032-1.675l1.895 2.68s-6.578-.335-8.474-7.371c0 0 .111 3.127-2.788 3.797 0 0 1.895-2.68-.223-4.467-2.119-1.787-5.687-9.045.892-13.624 6.58-4.579 2.342-14.406 10.593-19.431" fill="#6E3A35"></path><path d="M72.62 28.648s-12.498-5.146-13.445 5.486c-.754 8.46 6.723 8.512 10.963 11.317 4.239 2.806-.647 9.857-.647 9.857s3.14-.654 3.69-3.732c0 0 2.554 10.949-6.989 15.754 0 0 4.17.732 7.194-3.305 0 0-1.623 3.553-6.405 4.044 0 0 4.66 2.353 8.767-1.939l-1.762 2.683s6.415-.547 8.033-7.486c0 0-.005 3.06 2.85 3.617 0 0-1.942-2.556.069-4.372 2.01-1.817 5.254-9.03-1.325-13.286-6.578-4.255-2.766-14.002-10.993-18.638" fill="#6E3A35"></path><path d="M43.731 31.237s2.035-2.648 6.54-4.304c2.001-.736 4.925-.001 7.94-.027 1.832-.016 3.39-.754 5.656-.68 2.943.095 5.255 1.306 8.278 2.553l-11.649 6.906-16.765-4.448" fill="#6E3A35"></path><path d="m59.122 48.7-1.75-.843c-1.035-.47-2.4-1.102-3.781-1.358-.343-.076-.686-.095-1.02-.118-.33.005-.66.005-.967.068a4.583 4.583 0 0 0-.88.238c-.273.11-.533.23-.763.367-.123.06-.22.142-.326.209-.103.07-.212.127-.295.2-.169.144-.346.254-.465.367-.247.218-.408.341-.408.341s.054-.177.181-.485c.06-.156.165-.33.285-.535.128-.198.285-.424.498-.641.207-.225.464-.45.774-.652a4.347 4.347 0 0 1 1.079-.495c.4-.133.837-.188 1.277-.212a6.23 6.23 0 0 1 1.309.107c.427.08.836.2 1.221.345a8.978 8.978 0 0 1 2.745 1.665c.444.383.765.745.976 1.005.212.261.31.427.31.427M61.49 48.7s.185-.727.796-1.667c.3-.474.706-.998 1.237-1.49a6.152 6.152 0 0 1 1.96-1.26 4.555 4.555 0 0 1 1.218-.292c.417-.054.838-.01 1.229.057.389.089.748.218 1.058.382.15.09.305.162.433.26.128.096.25.19.368.28.215.199.414.373.554.56.148.178.274.332.357.474.176.277.26.44.26.44s-.17-.094-.44-.267c-.13-.093-.31-.176-.495-.29-.183-.117-.417-.205-.642-.33-.242-.096-.497-.199-.77-.275a4.747 4.747 0 0 0-.853-.156 4.214 4.214 0 0 0-1.804.299c-.302.108-.591.264-.88.418-.281.169-.561.338-.822.528-.263.184-.512.377-.747.564-.232.191-.46.37-.66.547-.403.352-.742.656-.98.874l-.377.344M50.835 51.43l.264.287c.166.18.403.433.692.712.147.138.307.28.475.425.17.142.358.271.547.4.095.063.197.109.296.166l.306.127c.208.058.414.106.62.093l.153-.01c.015 0 .076-.006.052-.001l.096-.024c.117-.036.28-.052.358-.095.182-.068.395-.15.57-.277a2.04 2.04 0 0 0 .256-.196c.086-.064.16-.141.232-.22.143-.154.267-.323.378-.486.213-.334.359-.657.454-.889.096-.232.14-.376.14-.376s.03.148.03.416a3.618 3.618 0 0 1-.18 1.104 3.052 3.052 0 0 1-.32.693c-.14.232-.32.467-.548.654a2.615 2.615 0 0 1-.778.482c-.159.075-.26.086-.394.128l-.096.026c-.088.02-.092.013-.143.02l-.239.022c-.16.017-.316-.025-.473-.039-.155-.028-.3-.09-.446-.136a3.31 3.31 0 0 1-.747-.47 4.568 4.568 0 0 1-.975-1.171c-.457-.766-.58-1.365-.58-1.365M68.593 51.43s-.123.6-.58 1.365c-.228.382-.54.806-.975 1.17a3.32 3.32 0 0 1-.747.471c-.147.046-.291.108-.446.136-.157.014-.313.056-.473.04l-.24-.022c-.05-.008-.054 0-.142-.021l-.096-.026c-.135-.042-.235-.053-.394-.128a2.616 2.616 0 0 1-.778-.482 2.558 2.558 0 0 1-.55-.654 3.493 3.493 0 0 1-.499-1.796c0-.269.03-.417.03-.417s.045.144.14.376c.096.232.242.555.455.889.11.163.234.332.378.487.072.078.146.155.231.219.081.071.165.138.257.196.175.128.387.209.57.277.078.043.241.059.358.095l.096.024c-.025-.005.037 0 .052 0l.153.011c.206.013.412-.035.62-.093l.306-.127c.099-.057.201-.103.296-.166.189-.129.376-.258.547-.4.168-.145.328-.287.475-.425.29-.279.526-.532.693-.712l.263-.287" fill="#262129"></path><path d="m60.87 51.066.365 1.623c.068.265.123.529.195.787.031.132.077.257.109.387.033.128.069.256.113.38.078.252.174.492.264.733l.157.346c.047.119.115.22.175.327.058.109.119.215.195.303.074.09.13.206.218.274.085.073.154.172.243.238l.274.191.68.473-.69.26c-.23.087-.466.158-.7.234-.232.078-.47.146-.708.211a12.79 12.79 0 0 1-1.454.332c.406-.303.828-.566 1.256-.814.213-.125.428-.248.647-.361.217-.115.433-.235.655-.34l-.01.734-.43-.23c-.138-.085-.254-.196-.377-.3-.13-.102-.209-.235-.314-.353a2.371 2.371 0 0 1-.259-.384c-.078-.131-.158-.263-.212-.402-.057-.138-.125-.273-.173-.413a6.1 6.1 0 0 1-.232-.845 6.477 6.477 0 0 1-.133-.852 8.109 8.109 0 0 1-.04-.853c0-.567.053-1.134.186-1.686M55.57 59.348s.093.11.26.285c.167.176.404.419.7.677.143.135.313.256.48.397.175.128.361.259.554.383a5 5 0 0 0 .615.333c.208.116.432.185.652.27.22.088.453.118.674.19.229.037.454.074.672.108.222 0 .438.017.646.03.206.007.403-.019.588-.017.184-.008.358-.002.507-.029.151-.022.286-.03.398-.04.224-.016.358-.017.358-.017s-.11.083-.308.213c-.1.064-.222.144-.367.225a2.28 2.28 0 0 1-.5.229c-.188.065-.39.16-.616.201-.224.04-.464.086-.715.111-.25-.008-.514.002-.779-.026-.262-.056-.534-.093-.794-.19-.259-.103-.521-.193-.757-.348-.246-.127-.462-.308-.673-.476-.21-.166-.389-.369-.557-.554a4.695 4.695 0 0 1-.426-.577 4.754 4.754 0 0 1-.49-.974c-.093-.251-.122-.404-.122-.404" fill="#CC6F4F"></path><path d="M50.348 77.412s.59 7.336 10.919 7.336c10.328 0 9.148-7.923 9.148-7.923s12.984-6.162 17.116 2.641c4.131 8.804-3.837 38.441-3.837 38.441s-21.247 7.043-41.609-.586c0 0-10.033-29.051-7.377-34.627 2.656-5.575 5.312-7.923 15.64-5.282" fill="#568CA9"></path><path d="M57.035 98.868c-8.716-1.489-15.88-6.026-22.775-11.125 1.193 10.494 7.592 29.505 7.592 29.505 20.251 7.785 41.383.599 41.383.599s2.926-11.168 4.3-21.946c-9.937 3.074-20.293 4.711-30.5 2.967" fill="#4A778C"></path><path d="M28.231 101.94s-7.744 30.37 0 36.091c7.745 5.722 11.949-32.35 11.949-32.35l-11.949-3.74M93.564 100.757s7.745 30.37 0 36.091c-7.744 5.722-11.948-32.35-11.948-32.35l11.948-3.74" fill="#E77F64"></path><path d="M42.274 106.673s-9.296-1.324-17.485-5.296c0 0 8.853-22.07 11.73-23.614 2.878-1.545 13.132.073 13.132.073l-7.377 28.837M79.522 104.307s9.295-1.324 17.484-5.297c0 0-8.852-22.069-11.73-23.614-2.877-1.544-13.131.074-13.131.074l7.377 28.837" fill="#568CA9"></path><path d="M69.218 117.473c-.036.604-.569 1.064-1.19 1.03l-13.765-.783c-.621-.036-1.095-.554-1.059-1.158l1.741-28.97c.036-.605.569-1.066 1.19-1.03l13.766.782c.62.036 1.094.554 1.058 1.158l-1.741 28.97" fill="#09070F"></path><path d="M24.79 128.544s21.415-26.458 24.064-28.222c2.65-1.763 29.363 0 11.038 1.103 0 0 19.429 1.764.221 1.984 0 0 17.662 2.426-2.207 1.984 0 0 14.57 2.867-3.312 1.544 0 0-13.916 32.526-20.752 32.851-9.273.441-9.052-11.244-9.052-11.244" fill="#EB8F75"></path><path d="M97.006 127.36S75.59 100.904 72.942 99.14c-2.65-1.765-29.363 0-11.04 1.102 0 0-19.427 1.764-.22 1.984 0 0-17.661 2.426 2.208 1.984 0 0-14.571 2.867 3.312 1.544 0 0 13.916 32.526 20.752 32.851 9.273.44 9.052-11.244 9.052-11.244" fill="#EB8F75"></path></g><g mask="url(#7me9k29z8b)"><path d="M155.75 21.15c9.384 6.742 4.826 25.951 7.954 35.582 3.129 9.631 3.129 17.817-11.31 19.984-14.437 2.167-16.362-17.576-16.362-17.576l-3.369-41.654s13.702-3.077 23.086 3.664z" fill="#A6643C"></path><path d="M164.426 90.2s-2.646 27.206-6.256 31.3c-3.61 4.093-9.866 5.056-9.866 5.056l1.685-38.764 14.437 2.408" fill="#F79F95"></path><path d="M176.939 107.294s4.09 3.853-.963 10.353c-5.053 6.501-24.784 22.151-31.04 19.262-6.257-2.89 2.646-14.687 2.646-14.687l29.357-14.928" fill="#F4B1AA"></path><path d="m142.886 72.678 1.463-1.952s17.8-2.196 19.508 3.416c1.707 5.612 3.658 21.228 3.658 21.228l-14.875 3.416-9.754-26.108" fill="#262129"></path><path d="M156.913 85.23c3.003-1.56 5.732-3.38 8.207-5.556 1.28 6.78 2.395 15.696 2.395 15.696l-14.875 3.416-3.746-10.025c2.73-1.04 5.418-2.18 8.019-3.53" fill="#09070F"></path><path d="M149.47 119.77s9.266 16.591 14.143 46.359c3.729 22.76 6.059 50.575 6.059 50.575H97.006s3.206-65.215 22.227-99.862l30.237 2.927" fill="#568CA9"></path><path d="M128.521 184.233c10.197 7.826 21.321 14.188 33.788 17.607a88.334 88.334 0 0 0 6.08 1.43c.829 8.013 1.283 13.434 1.283 13.434H97.006s1.601-32.537 9.243-63.857c4.823 12.16 11.787 23.34 22.272 31.386M121.767 127.098c-2.504.305-5.016.576-7.53.83 1.518-4.043 3.179-7.777 4.996-11.086l30.237 2.927s.478.86 1.27 2.52c-9.677 1.371-19.267 3.627-28.973 4.81" fill="#497488"></path><path d="M130.338 44.533s0 30.177-1.926 30.819c-1.925.642 14.759.642 14.759.642l2.246-21.83-15.08-9.63" fill="#F79F95"></path><path d="m144.105 65.846-16.582-3.416-.731 6.832s-12.436-4.148-15.607 2.928c-3.17 7.076 4.877 47.335 4.877 47.335l35.602.732s9.267-19.52 6.34-34.159l-2.926-14.64-10.73-.732-.243-4.88" fill="#262129"></path><path d="M128.597 96.486c8.66 4.942 17.756 9.304 27.152 12.8-1.91 6.39-4.085 10.971-4.085 10.971l-35.602-.732s-4.455-22.295-5.429-36.619c5.033 5.589 11.755 10.036 17.964 13.58" fill="#09070F"></path><path d="M106.275 83.699s-5.776 44.944-.32 46.87c5.453 1.926 37.216-23.114 37.216-23.114s12.833 3.21 9.625-.643c0 0 2.887-.962.641-1.925 0 0 2.567-1.285.963-1.927-1.604-.642 25.988 3.531-10.267-4.173l-25.987 11.557 1.283-15.73-13.154-10.915" fill="#F4B1AA"></path><path d="M104.304 103.148c.789-10.252 1.97-19.45 1.97-19.45l13.155 10.916-.604 7.403c-4.579 1.579-9.64 1.673-14.521 1.13" fill="#F79F95"></path><path d="M122.317 99.43s-11.375.82-19.178-3.084c0 0 2.194-24.644 11.46-27.328 9.267-2.684 13.813 10.828 7.718 30.411M155.237 114.077a1.184 1.184 0 0 0 .517 1.592l12.906 6.584a1.182 1.182 0 0 0 1.59-.517L184.485 93.8a1.184 1.184 0 0 0-.516-1.592l-12.906-6.584a1.182 1.182 0 0 0-1.59.517l-14.235 27.935" fill="#262129"></path><path d="M178.382 109.22s-15.88-19.502-3.127-.963c0 0-18.288-16.132-3.129 1.445 0 0-17.806-10.112.24 3.13 0 0-19.73-9.39.241 3.13l-2.887 6.741s11.069-7.704 8.662-13.483" fill="#F4B1AA"></path><path stroke="#568CA9" stroke-width="2.279" d="m154.997 44.34 6.181.663"></path><path d="M138.68 25.913s19.49-4.743 19.49 17.095-18.769 30.843-27.432 7.655c-8.662-23.189 7.941-24.75 7.941-24.75" fill="#F4B1AA"></path><path d="m144.85 19.142.286-.01c5.18-.114 8.709 1.607 10.584 5.163 2.747 7.15-.816 9.109-10.688 5.876-.799 4.401-2.792 9.872-7.556 14.282-9.625 8.908 3.369 33.708-9.144 35.153-12.512 1.444-4.331-13.002-14.678-10.354 0 0-1.925-10.112 2.647-12.52 4.572-2.407 2.625-33.831 15.63-39.32 9.434-3.98 12.024-1.26 12.919 1.73z" fill="#A6643C"></path><path d="M139.434 53.466s8.433 2.225 12.08 3.014c0 0-5.909 3.908-12.08-3.014" fill="#FFFFFE"></path><path d="M151.865 43.64s-.046.14-.096.39-.104.612-.098 1.055c.004.442.056.972.282 1.526.059.137.135.274.212.413.1.128.18.274.316.383.127.117.257.232.42.309.153.097.321.148.493.192l.128.032.016.003.053.006h.033l.053.003.212.006c.144.002.39-.045.558-.097.336-.128.618-.35.806-.593.206-.238.325-.5.43-.743.097-.245.16-.482.205-.7.09-.438.098-.805.094-1.06-.006-.255-.028-.4-.028-.4l-.132.374c-.086.235-.21.566-.38.941a9.106 9.106 0 0 1-.306.575c-.123.187-.26.376-.417.53-.15.169-.345.251-.525.328-.045.017-.083.011-.124.023-.045.004-.06.031-.145.019l-.212-.014-.054-.003-.026-.002h-.01c.09.008.024.001.043.003l-.01-.003-.076-.024c-.105-.024-.21-.046-.3-.105-.098-.036-.179-.109-.262-.177-.086-.062-.147-.164-.229-.239-.064-.095-.131-.189-.189-.29a4.835 4.835 0 0 1-.28-.641 9.572 9.572 0 0 1-.185-.631c-.098-.402-.162-.751-.205-.997l-.065-.391M139.557 42.573s-.049.147-.1.412c-.05.265-.106.648-.095 1.117.01.468.072 1.03.322 1.612.138.284.305.589.578.83.135.121.276.238.448.317.16.1.337.152.517.198l.134.033.017.005.008.002.055.005.028.001.056.002.224.008c.062.01.177-.008.28-.025.102-.018.207-.036.304-.062a2 2 0 0 0 .87-.607c.226-.245.357-.524.471-.78.052-.13.096-.256.137-.379l.088-.36c.097-.463.106-.852.102-1.12-.006-.271-.03-.424-.03-.424s-.05.147-.14.395c-.09.248-.223.598-.406.992a7.855 7.855 0 0 1-.328.601 3.014 3.014 0 0 1-.448.547c-.161.178-.372.25-.564.333-.046.007-.088.01-.131.02-.044.007-.076.028-.163.015l-.224-.015-.056-.004-.028-.002h-.004c.092.01.024.002.044.003l-.005-.001-.01-.003-.083-.026c-.112-.025-.226-.049-.32-.11a.993.993 0 0 1-.284-.185c-.096-.061-.16-.17-.248-.248a4.64 4.64 0 0 1-.207-.3 5.223 5.223 0 0 1-.307-.67 9.95 9.95 0 0 1-.204-.663c-.109-.423-.18-.791-.226-1.05l-.072-.414" fill="#262129"></path><path d="M148.863 45.197c-.105.266-.2.542-.254.827-.028.142-.062.285-.076.43-.012.145-.036.291-.035.437-.002.146-.01.294-.006.441l.038.44c.014.146.047.29.07.435.023.147.053.292.1.431l.126.424.168.408c.1.279.265.522.397.783.071.129.162.243.241.364-.25.177-.125.06-.37.244-.246.186-.498.36-.737.556-.485.38-.959.779-1.405 1.222a15.719 15.719 0 0 0 1.724-.704c.282-.126.551-.272.828-.407.275-.137.54-.29.81-.435l.38-.204-.25-.435c-.066-.114-.13-.229-.199-.34-.065-.112-.142-.218-.198-.335-.112-.233-.251-.455-.344-.695a6.727 6.727 0 0 1-.282-.717 3.473 3.473 0 0 1-.119-.367c-.032-.123-.076-.246-.101-.372-.05-.253-.105-.506-.139-.765-.025-.129-.024-.259-.038-.39-.017-.13-.019-.262-.024-.395a8.68 8.68 0 0 1 .014-.803c.023-.27.049-.545.104-.822-.174.224-.308.48-.423.744z" fill="#B66E6A"></path><path d="M150.383 43.73c-.55 4.173 1.068 7.83 3.616 8.167 2.548.337 5.061-2.773 5.613-6.947.55-4.174-1.068-7.83-3.616-8.168-2.548-.337-5.06 2.773-5.613 6.947zM136.164 42.696c-.567 4.292 1.483 8.104 4.58 8.514 3.096.409 6.067-2.738 6.634-7.03.567-4.293-1.484-8.105-4.58-8.514-3.097-.41-6.067 2.738-6.634 7.03z" stroke="#568CA9" stroke-width="1.5"></path><path d="M150.28 45.15s-.788-2.453-2.367-.294m-11.839-1.33-3.551-.302" stroke="#568CA9" stroke-width="1.5"></path></g><g mask="url(#7me9k29z8b)"><path d="M233.68 51.656s-3.03 14.002 2.455 18.402c5.486 4.4 20.297-1.1 15.634 17.048-4.663 18.149-36.204 36.572-43.061 27.498-6.857-9.074-18.925-41.796-6.583-43.446 12.342-1.65 16.182 5.774 15.36-7.974-.823-13.75 16.195-11.528 16.195-11.528" fill="#95514D"></path><path d="M233.11 64.291c-1.314 1.669-2.927 3.109-4.422 4.096-3.884 2.569-8.441 3.04-12.987 3.128 1.267-1.452 1.76-4.037 1.476-8.69-.83-13.61 16.33-11.411 16.33-11.411s-1.59 7.221-.396 12.877" fill="#6E3A35"></path><path d="M209.854 23.078s24.978-11.836 26.978 5.58c1.888 16.448-7.725 40.807-21.08 39.212-6.626-.791-12.07-2.693-10.446-18.189 1.533-14.623 1.183-20.443 4.548-26.603" fill="#95514D"></path><path d="M225.453 28.845s-.683 5.788 3.683 7.166c0 0-2.406 19.83-2.728 21.912-.395 2.555-3.828 4.455-3.828-3.675 0-6.477-5.586-4.042-8.178-4.318-2.592-.275-5.73-1.516-6.14 3.721-.409 5.237-3 2.205-2.319-4.41 0 0-4.638 15.297 2.183 18.191 6.821 2.894 21.581 8.285 23.355-11.836 1.773-20.12 4.75-16.001 5.977-13.659 1.228 2.343.819 10.06-3.82 10.336 0 0 13.507-11.852 9.96-21.636-3.548-9.785-9.278-6.89-9.278-6.89s-1.227-6.616-6.548-8.132c-5.32-1.516-6.822 5.926-14.052.276-7.23-5.65-12.142 6.89-15.69.965 0 0-1.09 5.925 5.185 4.823 0 0-2.865 2.894-5.32-.965 0 0 .954 10.474 11.323 8.682 10.368-1.791 7.367 5.375 16.235-.55" fill="#262129"></path><path d="M232.433 46.547s.283-8.276 4.123-6.488c3.84 1.787 2.185 13.913-4.26 12.4l.137-5.912" fill="#95514D"></path><path d="M221.154 52.745s-8.053.513-11.504.577c0 0 4.666 4.613 11.504-.577" fill="#FFFFFE"></path><path d="M233.552 51.143c.352-.156.69-.348 1-.592.156-.121.302-.26.433-.421.128-.161.247-.353.29-.592a.885.885 0 0 0-.01-.37.991.991 0 0 0-.148-.337c-.136-.2-.31-.343-.488-.464-.36-.23-.742-.367-1.12-.49l.243.335a31.24 31.24 0 0 1 .47-3.154c.108-.517.245-1.023.407-1.508.167-.474.394-.95.69-1.218.147-.132.288-.192.456-.18l.016-.002h.006l-.024-.005.013.003.05.01.099.019c.062.014.08.03.124.04.086.038.172.09.252.154.326.262.529.746.66 1.236.136.498.197 1.028.242 1.56.037.534.056 1.075.046 1.62.135-.529.226-1.07.27-1.618a7.327 7.327 0 0 0-.035-1.67 3.75 3.75 0 0 0-.219-.844 2.264 2.264 0 0 0-.506-.793 1.622 1.622 0 0 0-.42-.294c-.082-.034-.188-.078-.256-.095l-.099-.025-.048-.013-.013-.003-.034-.005-.009-.001-.034-.003c-.373-.059-.775.093-1.034.313-.27.218-.444.482-.595.74a6.077 6.077 0 0 0-.36.797c-.199.535-.331 1.08-.435 1.624-.105.544-.187 1.09-.236 1.636-.05.549-.097 1.09-.1 1.647v.28l.245.054c.355.08.706.18 1.007.332.149.077.284.167.379.273a.54.54 0 0 1 .105.171.45.45 0 0 1 .031.198c-.005.293-.231.619-.472.89a6.162 6.162 0 0 1-.839.765M214.7 49.798a34.951 34.951 0 0 0-2.187-.415c-.73-.12-1.461-.22-2.193-.318l.296.47c.343-.852.662-1.705.948-2.574a41.13 41.13 0 0 0 .785-2.627c.117-.442.22-.89.317-1.337.098-.447.196-.894.256-1.352.064-.455.154-.903.18-1.365.033-.46.053-.919.063-1.374-.132.442-.254.88-.363 1.32-.049.22-.125.435-.19.652l-.195.651-.189.651-.208.647c-.143.43-.255.866-.402 1.295-.146.428-.274.861-.41 1.293-.138.43-.286.858-.415 1.292l-.83 2.584-.146.453.442.018c.738.03 1.476.058 2.216.066.74.008 1.48.009 2.224-.03" fill="#6E3A35"></path><path d="m211.624 41.581-.128.344a13.66 13.66 0 0 1-.364.87 8.852 8.852 0 0 1-.281.541 4.588 4.588 0 0 1-.368.533c-.07.081-.149.155-.224.23-.088.053-.16.135-.25.176-.088.047-.174.1-.27.114-.091.038-.191.04-.29.042l-.075.008-.009.001.04.004h-.003l-.006-.001-.025-.003-.048-.006-.195-.026c-.08-.003-.09-.03-.13-.043-.034-.018-.07-.02-.107-.043-.15-.102-.312-.212-.418-.393a2.918 2.918 0 0 1-.284-.557 8.27 8.27 0 0 1-.174-.577 11.57 11.57 0 0 1-.178-.924l-.053-.363s-.047.127-.098.358c-.048.231-.106.567-.103.98.002.207.016.434.06.674.052.24.114.5.258.752l.11.191c.044.062.097.12.147.18.09.13.236.218.37.314.143.077.357.164.488.189l.194.032.049.008.024.003.006.001.049.005h.015l.122-.006c.164-.01.326-.026.481-.087.162-.04.3-.122.437-.205.143-.076.242-.194.356-.293.094-.112.188-.223.266-.337.304-.463.445-.936.528-1.337.084-.402.1-.742.1-.978-.001-.237-.019-.371-.019-.371M222.988 42.816s-.049.135-.139.363c-.088.228-.218.55-.392.915-.09.182-.192.373-.305.567a4.779 4.779 0 0 1-.398.554c-.078.08-.158.162-.241.236-.094.054-.172.143-.27.18a.996.996 0 0 1-.29.115c-.098.04-.204.042-.31.046l-.08.007-.01.001h-.005c.018.003-.045-.003.04.005h-.002l-.026-.004-.052-.007-.206-.027c-.082-.005-.106-.03-.144-.044-.037-.016-.076-.026-.117-.04-.16-.106-.338-.211-.452-.401a2.803 2.803 0 0 1-.31-.578 7.47 7.47 0 0 1-.19-.606 11.827 11.827 0 0 1-.19-.975c-.04-.241-.057-.384-.057-.384s-.05.135-.104.379a4.67 4.67 0 0 0-.107 1.038l.015.343c.015.12.033.243.057.37.058.253.127.53.288.794.138.272.385.524.68.71.084.04.176.076.266.111.09.035.192.072.25.073l.205.032.051.008.026.004.05.004h.008l.016-.001.129-.007c.17-.009.34-.023.505-.085.17-.039.319-.123.463-.21.289-.172.496-.418.672-.652.167-.24.286-.49.379-.728a4.896 4.896 0 0 0 .315-1.714c0-.25-.018-.392-.018-.392M216.308 38.352l.415-.32c.264-.194.63-.468 1.08-.739a7.203 7.203 0 0 1 1.525-.731c.278-.097.567-.15.856-.196.29-.036.585-.039.88-.018.296.03.593.079.887.166.147.038.294.084.439.14.147.046.288.108.43.17.144.054.281.121.418.19.136.067.274.127.402.202.261.14.512.276.74.417.236.13.447.265.64.38l.503.307c.281.173.46.262.46.262s-.069-.182-.22-.485c-.075-.152-.166-.338-.298-.53-.127-.2-.266-.429-.455-.652a11.758 11.758 0 0 0-.292-.351l-.348-.351c-.117-.125-.26-.228-.399-.346a3.641 3.641 0 0 0-.452-.328 3.624 3.624 0 0 0-.508-.297l-.27-.138-.29-.11c-.388-.157-.818-.239-1.25-.29a4.64 4.64 0 0 0-1.301.09c-.418.096-.817.24-1.164.435-.7.381-1.22.89-1.578 1.366a5.13 5.13 0 0 0-.696 1.242c-.122.319-.154.515-.154.515M212.7 38.736s.03-.557-.24-1.293a4.48 4.48 0 0 0-.65-1.181c-.159-.2-.334-.402-.555-.582a3.122 3.122 0 0 0-.754-.483 2.466 2.466 0 0 0-.963-.224 2.13 2.13 0 0 0-.97.192c-.14.07-.278.134-.388.226-.118.084-.222.17-.308.266-.187.181-.31.379-.415.558-.201.365-.285.69-.322.922-.039.231-.04.368-.04.368s.126-.065.313-.187c.189-.118.452-.286.74-.445.07-.045.147-.075.223-.112a1.27 1.27 0 0 1 .227-.097 1.08 1.08 0 0 1 .224-.072c.074-.023.144-.03.213-.04.139-.013.26-.01.389.018.125.025.262.06.408.135.296.122.625.351.944.582.318.24.63.489.91.706a17.07 17.07 0 0 0 1.013.743" fill="#262129"></path><path fill="#497488" d="m189.234 145.676-10.697 69.845h18.925l16.457-58.296-24.685-11.549"></path><path fill="#568CA9" d="m232.021 150.901 3.427 64.62h-19.783l-5.312-30.248-26.046-7.286 5.201-34.51 42.513 7.424"></path><path d="M211.277 162.079c-7.86-.542-17.167-1.463-23.844-6.221l2.075-12.381 42.513 7.424.298 9.863c-6.899 1.301-13.924 1.806-21.042 1.315" fill="#497488"></path><path d="M237.781 70.883s-5.76 6.324-14.537 6.6c-8.777.274-9.874-5.775-9.874-5.775s-14.262-6.05-18.102 2.75c-3.84 8.799-8.777 75.893-8.777 75.893s11.52 14.574 47.724 3.575c0 0 23.588-75.619 17.828-78.644-5.76-3.024-14.262-4.4-14.262-4.4" fill="#939393"></path><path d="M219.182 110.794c9.634-5.93 18.356-12.8 26.198-20.966 2.486-2.59 4.919-5.237 7.365-7.87-2.034 19.087-18.53 71.968-18.53 71.968-36.204 10.999-47.724-3.575-47.724-3.575s.88-11.958 2.186-26.439c10.656-2.863 20.902-7.209 30.505-13.118" fill="#A3A3A3"></path><path d="M251.495 81.332s0 44.271-2.194 52.245c-2.195 7.975-14.263 31.073-14.263 31.073l-1.92 8.25-4.826.024-1.756-16.523 3.29-1.1 6.31-27.223 1.37-44.546 13.989-2.2" fill="#95514D"></path><path d="M241.675 114.226c-1.723.262-3.43.374-5.124.361l.956-31.055 13.988-2.2s0 15.797-.468 30.219c-3.036 1.201-6.148 2.187-9.352 2.675M233.03 172.9l-4.738.024-1.756-16.523.265-.09c1.372 5.749 3.888 11.151 6.228 16.588" fill="#6E3A35"></path><path d="M237.781 70.883s15.085 1.65 16.182 6.874c1.097 5.225.274 30.798.274 30.798s-9.325 4.95-20.022 3.3l3.566-40.972M208.433 70.608s-10.97-5.775-16.182 4.674c-5.211 10.45-5.76 26.123-5.76 26.123l11.52 2.75 10.422-33.547" fill="#939393"></path><path d="m201.74 92.151-3.729 12.004-11.52-2.75s.374-10.6 3.404-20.176c3.91 3.68 7.876 7.304 11.845 10.922" fill="#939393"></path><path d="M196.012 110.734c.125.559.678.91 1.235.785l12.365-2.77c.557-.125.908-.68.783-1.238l-5.978-26.817a1.034 1.034 0 0 0-1.235-.785l-12.365 2.77c-.558.125-.908.68-.784 1.238l5.98 26.817" fill="#09070F"></path><path d="M191.428 94.53s30.72-5.224 8.228 1.1c0 0 23.04-3.849.823 2.475 0 0 20.57-2.75 0 3.025 0 0 16.731-.825-2.468 3.025 0 0 .274 32.997-11.52 34.922-11.794 1.925-3.84-29.422 4.937-44.546" fill="#95514D"></path></g></g></g></g></g></svg>
                    </span>
                </div>
            </article>
        </section>
    </main>
    <!--Footer-->
        <?php echo $footer; ?>
    <!--Footer-->
</body>
    <!--Js-->
        <script src="./js/scrollrevel.js"></script>
        <script src="./js/maps.js"></script>
        <!--Js import-->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <!--Js import-->
    <!--Js-->
</html>