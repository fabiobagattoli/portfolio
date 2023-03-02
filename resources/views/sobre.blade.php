<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
    <title>Sobre mim</title>
    <link rel="icon" href="{{ url('assets/images/star.png') }}">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-slider.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style-blue.css">
</head>
<script language="JavaScript">

    window.onload = function () {
        document.addEventListener("contextmenu", function (e) {
            e.preventDefault();
        }, false);
        document.addEventListener("keydown", function (e) {
            //document.onkeydown = function(e) {
            // "I" key
            if (e.ctrlKey && e.shiftKey && e.keyCode == 73) {
                disabledEvent(e);
            }
            // "J" key
            if (e.ctrlKey && e.shiftKey && e.keyCode == 74) {
                disabledEvent(e);
            }
            // "S" key + macOS
            if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
                disabledEvent(e);
            }
            // "U" key
            if (e.ctrlKey && e.keyCode == 85) {
                disabledEvent(e);
            }
            // "F12" key
            if (event.keyCode == 123) {
                disabledEvent(e);
            }
        }, false);
        function disabledEvent(e) {
            if (e.stopPropagation) {
                e.stopPropagation();
            } else if (window.event) {
                window.event.cancelBubble = true;
            }
            e.preventDefault();
            return false;
        }
    }
    //edit: removed ";" from last "}" because of javascript error
</script>
<body class="fullpage">
<div id="form-section" class="container-fluid signin">
    <div class="row">
        <div class="info-slider-holder">
            <div class="bg-animation"></div>
            <div class="info-holder">
                <h6>Desenvolvedor web</h6>
                <div class="bold-title">Fábio Bagattoli<br></div>
                <div class="mini-testimonials-slider">
                    <div>
                        <div class="details-holder">
                            <h4>Meus projetos ativos</h4>
                            <h5>Desde web-sites a sistemas de gestão.</h5>
                            <p>Meiweb.com.br - Software para empresas MEI</p>
                            <p>Página de Classificados</p>
                            <p>Bagattoli.com.br - Site para indústria têxtil</p>
                        </div>
                    </div>
                    
                    </div>
                </div>
            </div>
        </div>
        <div class="form-holder">
            <div class="menu-holder">
                <ul class="main-links">
                    <li><a class="sign-button" href="{{ url('/') }}">Voltar a Home</a></li>
                </ul>
            </div>
            <div class="col-sm-12 col-md-12">
                <div id="features-holder">
                    <div class="feature-box feature-d1 show-details">
                        <div class="feature-title-holder">
                            <span class="feature-icon"><i class="htfy htfy-like"></i></span>
                            <span class="feature-title">Sobre mim</span>
                        </div>
                        <div class="feature-details">
                            <p>No ano de 2008 iniciei minha carreira como técnico em informática. E em 2009 apreendi HTML e CSS por conta 
                                própria, assistindo aulas online e já aplicando em projetos pessoais para testes.
                            </p>
                            <p>Em 2010 fiz meu primeiro curso de Web-Design em uma escola de cursos profissionalizantes, e no ano seguinte 
                                comecei a fazer Sites para pequenas empresas nos horários vagos.
                            </p>
                            <p>Em 2012 iniciei a primeira versão do sistema web que tenho hoje, mas sempre desenvolvendo nos horários vagos e fins de semanas.
                                Finalizei o software projeto em 2013 e já implantei em algumas empresas. Após 1 ano com meu software pronto eu fiz 
                                um Curso de PHP e Mysql em uma escola de cursos profissionalizantes.
                            </p>

                            <p>
                                Desde 2010 trabalhei em Assistências de informática e em alguns períodos como autônomo, mas sempre praticando 
                                com meus projetos web.
                                
                            </p>
                        </div>
                    </div>

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
