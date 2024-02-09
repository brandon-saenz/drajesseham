<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="style.css?<?php echo filemtime('style.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="design.css?<?php echo filemtime('design.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="materialize.css?<?php echo filemtime('materialize.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="media.css?<?php echo filemtime('media.css'); ?>" rel="stylesheet" type="text/css" />
    <title>Dra. Jesse Ham</title>


    <script
		src="https://code.jquery.com/jquery-3.6.1.js"
		integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
		crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js">Vue.config.silent = true</script>
</head>
<body>
    <div id="page">
        <nav style="z-index: 0;">
            <div class="nav-wrapper nav-ham">
                <a href="" data-target="slide-out" class="sidenav-trigger" style="display: block;"><i class="material-icons">menu</i></a>
                <a href="#" class="brand-logo right"><img src="assets/logo.png"></a>
            </div>
        </nav>

        <div class="section-1" style="">
            <img src="assets/elem_2.png" class="left elem_2">
            <div class="right elem_3">
                <img src="assets/elem_3.png" class="">
            </div>
            <div class="section-1-contacto">
                <h4>CONTACTO</h4>
                <p>www.drajesseham.com</p>
                <p>drajesseham@gmail.com</p>
                <p>Facebook Dra Jesse Ham</p>
                <p>Instagram</p>
            </div>
        </div>
        <div class="section-2">
            <h5 class="title-section right">PROCEDIMIENTOS</h5>
            <br>
            <div class="procedimientos">
                <div>
                    <div>
                        <div class="div-center">
                            <img src="assets/face.svg">
                        </div>
                        <p>ROSTRO</p>
                    </div>
                    <div>
                        <div class="div-center">
                            <img src="assets/body_fem.svg">
                        </div>
                        <p>CUERPO</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-3">
            <img src="assets/elem_4.png" class="section-3-design">
            <div class="section-3-text">
                <h5>
                    <i class="material-icons">business</i>
                    <span>CONSULTORIO 1606</span>
                </h5>
                <h1>NEW CITY</h1>
                <h1>MEDICAL</h1>
                <h1>PLAZA</h1>
                <button class="btn btn_agenda_tu_cita">AGENTA TU<br>CONSULTA AHORA</button>
                <h2>+52 664 818 6270</h2>
                <h3>www.drajesseham.com</h3>
            </div>
        </div>

        <br><br><br><br><br><br><br><br>

        <ul id="slide-out" class="sidenav">
            <li><a href="#">CURRICULUM</a></li>
            <li><a href="#">GALERÍA</a></li>
            <li><a href="#">INSTALACIONES</a></li>
            <li><a href="#">CONTACTO</a></li>
        </ul>
    </div>
    <script src="materialize.js?<?php echo filemtime('materialize.js'); ?>"></script>
    <script src="app.js?<?php echo filemtime('app.js'); ?>"></script>
</body>
</html>