<?php
    require 'configs/header.php';
    $urlAtual = $_SERVER['REQUEST_URI'];
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Meta -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <meta name="description" content="Compre sua viagem dos sonhos com os melhores preços do mercado">
        <meta property="og:description" content="Compre sua viagem dos sonhos com os melhores preços do mercado"/>

        <meta property="og:type" content="website"/>
        <meta property="og:title" content="Caravan | Realize a viagem do seu sonho"/>
        <meta property="og:url" content="https://caravan-guilhermeassuncao.herokuapp.com"/>
        <meta property="og:image" content="https://caravan-guilhermeassuncao.herokuapp.com/public/img/og-image.png"/>
        <!-- Fim Meta -->

        <!-- CSS -->
        <link rel="stylesheet" href="./public/css/bootstrap.css" />
        <link rel="stylesheet" href="./public/css/style.css" />
        <!-- Fim CSS -->

        <!-- Title -->
        <title>Caravan | Realize a viagem do seu sonho</title>
        <!-- Fim Title -->
    </head>
    <body>

        <!-- Modal -->
        <div class="modal fade show" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="modalLoginTitulo">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header d-flex justify-content-center">
                        <img class="mt-5" src="./public/img/caravan.svg" alt="Caravan" />
                    </div>
                    <div class="modal-body">
                        <form class="px-5 pb-5 pt-3">
                            <h3 class="text-primary font-weight-bold">Fazer Login</h3>
                            <div class="form-group">
                                <label for="loginEmail">Email</label>
                                <input type="email" class="form-control" id="loginEmail" />
                            </div>
                            <div class="form-group">
                                <label for="loginSenha">Senha</label>
                                <input type="password" class="form-control" id="loginSenha" />
                            </div>
                            <button type="submit" class="btn btn-primary mt-5 btn-block">Entrar na Conta</button>
                            <small class="form-text text-muted text-center mb-4">Esqueceu a senha? <a href="#">Clique aqui</a></small>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fim Modal -->

        <!-- Navbar -->
        <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top py-3 px-5 shadow-sm">
            <a href="/" class="navbar-brand">
                <img src="./public/img/caravan.svg" alt="Caravan" />
            </a>

            <button
                id="navbar-toggler"
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Abrir Navegação"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a
                            class="nav-link dropdown-toggle font-weight-bold text-dark <?php if ($urlAtual == '/locais') echo " active";?>"
                            href="#"
                            id="navbarDropdown"
                            role="button"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                            >Locais</a
                        >
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/locais">California</a>
                            <a class="dropdown-item" href="/locais">Paris</a>
                            <a class="dropdown-item" href="/locais">Dublin</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold text-dark ml-md-3 <?php if ($urlAtual == '/planos') echo " active";?>" href="/planos">Planos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold text-dark ml-md-3 <?php if ($urlAtual == '/contato') echo " active";?>" href="/contato">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a
                            class="nav-link font-weight-bold text-dark ml-md-3"
                            href="#"
                            data-toggle="modal"
                            data-target="#modalLogin"
                            >Login</a
                        >
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-primary ml-md-3 my-2 my-md-0 font-weight-bold" href="/inscricao"
                            >Inscreva-se</a
                        >
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Fim Navbar -->

        <!-- Conteudo -->
        <?php  
            require 'configs/section.php';
        ?>
        <!-- Fim Conteudo -->

        <!-- Footer -->
        <footer class="bg-dark text-white">
            <div class="container py-4">
                <div class="row mt-4">
                    <div class="col-sm-6 col-md-3 col-lg-3 mb-3 mb-md-3">
                        <h4 class="h6 font-weight-bold">PÁGINAS</h4>
                        <ul class="list-unstyled mt-3">
                            <li class="mb-1"><a class="text-secondary" href="/planos">Planos</a></li>
                            <li class="mb-1"><a class="text-secondary" href="/contato">Contato</a></li>
                            <li class="mb-1"><a class="text-secondary" href="/inscricao">Inscreva-se</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-2 col-lg-3 mb-3 mb-md-3">
                        <h4 class="h6 font-weight-bold">LOCAIS</h4>
                        <ul class="list-unstyled mt-3">
                            <li class="mb-1"><a class="text-secondary" href="/locais">California</a></li>
                            <li class="mb-1"><a class="text-secondary" href="/locais">Paris</a></li>
                            <li class="mb-1"><a class="text-secondary" href="/locais">Dublin</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 mb-3 mb-md-3">
                        <h4 class="h6 font-weight-bold">DADOS DE CONTATO</h4>
                        <ul class="list-unstyled text-secondary mt-3">
                            <li class="mb-1">caravan@caravan.com.br</li>
                            <li class="mb-1">21 99999-9999</li>
                            <li class="mb-1">De Seg. à Sex. das 8h às 18h</li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3 mb-3 mb-md-3">
                        <h4 class="h6 font-weight-bold">REDES SOCIAIS</h4>
                        <ul class="list-unstyled mt-3">
                            <li class="mb-1">
                                <a
                                    class="btn btn-outline-secondary btn-sm btn-block mb-2"
                                    href="#"
                                    style="max-width: 140px"
                                    >Facebook</a
                                >
                            </li class="mb-1">
                            <li class="mb-1">
                                <a
                                    class="btn btn-outline-secondary btn-sm btn-block mb-2"
                                    href="#"
                                    style="max-width: 140px"
                                    >Twitter</a
                                >
                            </li>
                            <li class="mb-1">
                                <a
                                    class="btn btn-outline-secondary btn-sm btn-block mb-2"
                                    href="#"
                                    style="max-width: 140px"
                                    >Youtube</a
                                >
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="bg-primary text-center py-3">
                <p class="mb-0">Caravan © 2017. Alguns direitos reservados.</p>
            </div>
        </footer>
        <!-- Fim Footer -->

        <!-- Script -->
        <script src="./public/js/jquery-3.6.0.min.js"></script>
        <script src="./public/js/popper.min.js"></script>
        <script src="./public/js/bootstrap.js"></script>
        <script src="./public/js/app.js"></script>
        <!-- Fim Script -->
    </body>
</html>
