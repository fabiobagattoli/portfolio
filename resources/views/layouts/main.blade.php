<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-131803202-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-131803202-1');
    </script>
    <!--[if IE 8]><html class="ie8" lang="pt-br"><![endif]-->
    <!--[if IE 9]><html class="ie9" lang="pt-br"><![endif]-->
    <!--[if !IE]><!-->
    <html lang="pt-br">
    <link rel="icon" href="{{ url('assets/images/star.png') }}">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-slider.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style-blue.css">
    <title>Fábio Bagattoli @yield('title')</title>
    </head>
<body>


    <div id="header-holder">
        <div class="bg-animation"></div>
        <nav id="nav" class="navbar navbar-default navbar-full">
            <div class="container-fluid">
                <div class="container container-nav">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="navbar-header">
                                <button aria-expanded="false" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="logo-holder" href="{{ url('/') }}">
                                    <div class="logo">Fábio Bagattoli</div>
                                </a>
                            </div>
                            <div style="height: 1px;" role="main" aria-expanded="false" class="navbar-collapse collapse" id="bs">
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li class="dropdown mega">
                                        <a href="#">Meus projetos <i class="fa fa-caret-down"></i></a>
                                        <ul class="dropdown-menu dropdown-mega">
                                            <li>
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <a class="mega-link" href="{{ url('projetos-ativos') }}">
                                                                <div class="mega-box m-color1">
                                                                    <div class="mega-title">
                                                                        Projetos ativos
                                                                    </div>
                                                                    <div class="mega-details">
                                                                        Projetos sendo utilizado por clientes.
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                       
                                                        <div class="col-md-5">
                                                            <a class="mega-link" href="{{ url('projetos-de-estudo') }}">
                                                                <div class="mega-box m-color3">
                                                                    <div class="mega-title">
                                                                    Projetos que uso para aprendizagem
                                                                    </div>
                                                                    <div class="mega-details">
                                                                    Projetos de cursos online e projetos de testes.
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>


                                    <li><a href="{{ url('sobre-mim') }}">Sobre mim</a></li>
                                    <li class="support-button-holder support-dropdown">
                                        <a class="support-button" href="#">Contato</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="https://api.whatsapp.com/send?1=pt_BR&phone=5547997882371" target="_blank"><i class="fa fa-phone"></i>WhatsApp (47) 99788-2371</a></li>
                                            <li><a href="mailto:fabio@bagattoli.com.br"><i class="fa fa-comments" target="_blank"></i>Fabio@bagattoli.com.br</a></li>
                                            <li><a href="{{ url('contato') }}"><i class="fa fa-ticket"></i>Página de contato</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        @yield('content')
    <div id="footer" class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-sm-4 col-md-3">
                    <div class="address-holder">
                        <div class="phone"><i class="fa fa-phone"></i>(47) 99788-2371</div>
                        <div class="email"><i class="fa fa-envelope"></i>fabio@bagattoli.com.br</div>
                        <div class="address">
                            <i class="fa fa-map-marker"></i>
                            <div>Rodeio-SC, Brasil</div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-2 col-md-2">
                    <div class="footer-menu-holder">
                        <h4>Páginas</h4>
                        <ul class="footer-menu">
                            <li><a href="{{ url('sobre-mim') }}">Sobre mim</a></li>
                            <li><a href="{{ url('projetos-ativos') }}">Projetos ativos</a></li>
                            <li><a href="{{ url('projetos-de-estudo') }}">Projetos de estudo</a></li>
                            <li><a href="{{ url('contato') }}">Contato</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-2 col-md-3">
                    <div class="footer-menu-holder">
                        <h4>Sites úteis</h4>
                        <ul class="footer-menu">
                            <li><a href="https://github.com/" target="_blank">GitHub</a></li>
                            <li><a href="https://git-scm.com/" target="_blank">Git</a></li>
                            <li><a href="https://www.docker.com/" target="_blank">Docker</a></li>
                            <li><a href="https://laravel.com/" target="_blank">Laravel</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-1 col-md-1">
                    <div class="social-menu-holder">
                        <ul class="social-menu">
                            <li><a href="https://www.facebook.com/bagattoli.fabio" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/fabio-bagattoli/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                        
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap-slider.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>