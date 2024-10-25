<?php $header = '
    <header>
        <nav class="navbar navbar-expand-lg ">
            <div class="container-md">
                <a id="Logo" class="navbar-brand" href="./index.php">
                    <img class="w-25" src="./img/logo.webp" alt="" srcset="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active text-light" aria-current="page" href="./igreja.php">Igreja</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="./doacoes.php">Doação</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="./oracao.php">Orações</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Sobre nós
                            </a>
                            <ul class="dropdown-menu">
                            <li><a target="_blank" class="dropdown-item" href="https://www.youtube.com/lagoinhacampinas">Ao vivo</a></li>
                            <li><a class="dropdown-item" href="./carisma.php">Carisma</a></li>
                            <li><a class="dropdown-item" href="./gcs.php">GC</a></li>
                            <li><a class="dropdown-item" href="./ministerios.php">Ministérios</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
'
?>
<?php $headerLogiin = '
    <header>
        <nav class="navbar navbar-expand-lg ">
            <div class="container-md">
                <a id="Logo" class="navbar-brand" href="../index.php">
                    <img class="w-25" src="../img/logo.webp" alt="" srcset="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active text-light" aria-current="page" href="../igreja.php">Igreja</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="../doacoes.php">Doação</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="../oracao.php">Orações</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Sobre nós
                            </a>
                            <ul class="dropdown-menu">
                            <li><a target="_blank" class="dropdown-item" href="https://www.youtube.com/lagoinhacampinas">Ao vivo</a></li>
                            <li><a class="dropdown-item" href="../carisma.php">Carisma</a></li>
                            <li><a class="dropdown-item" href="../gcs.php">GC</a></li>
                            <li><a class="dropdown-item" href="../ministerios.php">Ministérios</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
'
?>
<?php $footer = '
    <footer>
    <section class="container-md p-3">
        <article>
            <div class="d-flex justify-content-evenly text-light align-items-center">
                <span class="d-flex flex-column w-25">
                    <img class="w-100" src="./img/logo.webp" alt="Logo Principal">
                </span>
                <span>
                    <p><strong>Endereço</strong></p>
                    <p>R. Jacy Teixeira de Camargo, 360</p>
                    <p>Jardim do Lago, Campinas - SP</p>
                    <p>13050-008, Brasil</p>
                </span>
                <span style="gap: .5rem;" class="d-flex flex-column">
                    <p><strong>Siga-nos:</strong></p>
                    <span style="gap: .5rem;" class="d-flex justify-content-evenly">
                        <a target="_blank" class="bg-light rounded-circle d-flex justify-content-center align-items-center p-2" href="https://www.facebook.com/lagoinhacampinas">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="25" viewBox="0 0 96.124 96.123" aria-labelledby="Facebook-element" role="presentation"><title id="Facebook-element">Facebook</title><g fill="var(--primary)"><path d="M72.089,0.02L59.624,0C45.62,0,36.57,9.285,36.57,23.656v10.907H24.037c-1.083,0-1.96,0.878-1.96,1.961v15.803 c0,1.083,0.878,1.96,1.96,1.96h12.533v39.876c0,1.083,0.877,1.96,1.96,1.96h16.352c1.083,0,1.96-0.878,1.96-1.96V54.287h14.654 c1.083,0,1.96-0.877,1.96-1.96l0.006-15.803c0-0.52-0.207-1.018-0.574-1.386c-0.367-0.368-0.867-0.575-1.387-0.575H56.842v-9.246 c0-4.444,1.059-6.7,6.848-6.7l8.397-0.003c1.082,0,1.959-0.878,1.959-1.96V1.98C74.046,0.899,73.17,0.022,72.089,0.02z"></path></g></svg>
                        </a>
                        <a target="_blank" class="bg-light rounded-circle d-flex justify-content-center align-items-center p-2" href="https://www.instagram.com/lagoinhacampinas/">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" aria-labelledby="Instagram-element" role="presentation"><title id="Instagram-element">Instagram</title><g fill="var(--primary)"><path d="M8 3C5.243 3 3 5.243 3 8v8c0 2.757 2.243 5 5 5h8c2.757 0 5-2.243 5-5V8c0-2.757-2.243-5-5-5H8zm0 2h8c1.654 0 3 1.346 3 3v8c0 1.654-1.346 3-3 3H8c-1.654 0-3-1.346-3-3V8c0-1.654 1.346-3 3-3zm9 1a1 1 0 0 0-1 1 1 1 0 0 0 1 1 1 1 0 0 0 1-1 1 1 0 0 0-1-1zm-5 1c-2.757 0-5 2.243-5 5s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5zm0 2c1.654 0 3 1.346 3 3s-1.346 3-3 3-3-1.346-3-3 1.346-3 3-3z"></path></g></svg>
                        </a>
                    </span>
                </span>
            </div>
            <hr class="text-light">
            <div class="text-light">
                <p>© 2024 - All Rights Reserved Desenvolvido por <a href="https://www.linkedin.com/in/arthur-ribeiro-8b3944235/" target="_blank" rel="noopener noreferrer">Arthur Ribeiro</a></p>
            </div>
        </article>
    </section>
    </footer>
'
?>
<?php $footerLogiin = '
    <footer>
    <section class="container-md p-3">
        <article>
            <div class="d-flex justify-content-evenly text-light align-items-center">
                <span class="d-flex flex-column w-25">
                    <img class="w-100" src="../img/logo.webp" alt="Logo Principal">
                </span>
                <span>
                    <p><strong>Endereço</strong></p>
                    <p>R. Jacy Teixeira de Camargo, 360</p>
                    <p>Jardim do Lago, Campinas - SP</p>
                    <p>13050-008, Brasil</p>
                </span>
                <span style="gap: .5rem;" class="d-flex flex-column">
                    <p><strong>Siga-nos:</strong></p>
                    <span style="gap: .5rem;" class="d-flex justify-content-evenly">
                        <a target="_blank" class="bg-light rounded-circle d-flex justify-content-center align-items-center p-2" href="https://www.facebook.com/lagoinhacampinas">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="25" viewBox="0 0 96.124 96.123" aria-labelledby="Facebook-element" role="presentation"><title id="Facebook-element">Facebook</title><g fill="var(--primary)"><path d="M72.089,0.02L59.624,0C45.62,0,36.57,9.285,36.57,23.656v10.907H24.037c-1.083,0-1.96,0.878-1.96,1.961v15.803 c0,1.083,0.878,1.96,1.96,1.96h12.533v39.876c0,1.083,0.877,1.96,1.96,1.96h16.352c1.083,0,1.96-0.878,1.96-1.96V54.287h14.654 c1.083,0,1.96-0.877,1.96-1.96l0.006-15.803c0-0.52-0.207-1.018-0.574-1.386c-0.367-0.368-0.867-0.575-1.387-0.575H56.842v-9.246 c0-4.444,1.059-6.7,6.848-6.7l8.397-0.003c1.082,0,1.959-0.878,1.959-1.96V1.98C74.046,0.899,73.17,0.022,72.089,0.02z"></path></g></svg>
                        </a>
                        <a target="_blank" class="bg-light rounded-circle d-flex justify-content-center align-items-center p-2" href="https://www.instagram.com/lagoinhacampinas/">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" aria-labelledby="Instagram-element" role="presentation"><title id="Instagram-element">Instagram</title><g fill="var(--primary)"><path d="M8 3C5.243 3 3 5.243 3 8v8c0 2.757 2.243 5 5 5h8c2.757 0 5-2.243 5-5V8c0-2.757-2.243-5-5-5H8zm0 2h8c1.654 0 3 1.346 3 3v8c0 1.654-1.346 3-3 3H8c-1.654 0-3-1.346-3-3V8c0-1.654 1.346-3 3-3zm9 1a1 1 0 0 0-1 1 1 1 0 0 0 1 1 1 1 0 0 0 1-1 1 1 0 0 0-1-1zm-5 1c-2.757 0-5 2.243-5 5s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5zm0 2c1.654 0 3 1.346 3 3s-1.346 3-3 3-3-1.346-3-3 1.346-3 3-3z"></path></g></svg>
                        </a>
                    </span>
                </span>
            </div>
            <hr class="text-light">
            <div class="text-light">
                <p>© 2024 - All Rights Reserved Desenvolvido por <a href="https://www.linkedin.com/in/arthur-ribeiro-8b3944235/" target="_blank" rel="noopener noreferrer">Arthur Ribeiro</a></p>
            </div>
        </article>
    </section>
    </footer>
'
?>
<?php $arrow = '
    <section class="Arrow">
        <article>
            <div>
                <span style="bottom: 1rem; right: 1rem; cursor: pointer;" class="d-flex p-1 position-fixed bg-light rounded-circle">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="m6.293 11.293 1.414 1.414L12 8.414l4.293 4.293 1.414-1.414L12 5.586z"></path><path d="m6.293 16.293 1.414 1.414L12 13.414l4.293 4.293 1.414-1.414L12 10.586z"></path></svg>
                </span>
            </div>
        </article>
    </section>
'
?>