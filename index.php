<?php
require_once "graficos.php"
?>
<html>
<head>
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.css">
    <script src="lib/bootstrap/js/bootstrap.js"></script>
    <title>Gabriel Vargas</title>
    <link rel="stylesheet" href="lib/css/estilo.css">
    <link rel="stylesheet" href="lib/font-awesome/css/fontawesome.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css"
          integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width">
</head>


<body>
<div class="container-fluid" id="interface">
    <div class="row">
        <div class="text-center col-md-12 imagem-pc"><i
                    class="fab fa-app-store "></i></div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center home-contatent">
            <h1 class="title-init"> Hi,I'm Gabriel Vargas.</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center home-contatent" style="margin-bottom: 10px; margin-top: -20px">
            <p>
            <h1 class="title-init"> I'm a programmer</h1></p>
        </div>
    </div>
    <div class="row"><img class="col-md-12 imagem-v" src="img/imagem-v.png"></div>
</div>

<!--
*
*
*
*
*
--->

<!--SEGUNDA TELA-->
<div class="col-md-12 conteudo" style="margin-top: -1px">
    <div class="container">
        <div class="col-md-12" style="padding-bottom: 75px "></div>
        <div class="col-md-12"><h1
                    class="text-center font-weight-bold col-xl-4 offset-xl-4 col-lg-4 offset-lg-4 col-md-4 offset-md-4 col-sm-6 offset-sm-3 col-6 offset-3">
                About</h1></div>
    </div>


    <!--  DIV CONTEUDO SOBRE E PRINCIPAIS HABILIDADES-->
    <div class="container-fluid" style="margin-bottom: 100px">
        <div class="row ">


            <!-- DIV SOBRE-->
            <div class="col-xl-5 col-lg-5 col-md-12">
                <!--    My Picture -->
                <div class="about"><img src="img/foto.png"
                                        class="offset-4 offset-md-1 col-xl-10 col-lg-9 col-md-8 offset-md-2  col-sm-4 col-4 offset-sm-4 "
                                        style="margin-bottom: 10px">
                </div>


                <!-- TITULO SOBRE-->
                <h2 class=" text-center offset-xl-1 col-xl-10 offset-lg-2 col-lg-8 offset-md-3 col-md-6 offset-sm-2 col-sm-8
        offset-2 col-8" style="margin-bottom: 10px">
                    Who I am?</h2>


                <!--  TEXTO SOBRE-->
                <div id="sobre-text" style="display: inline-block" class="text-justify col-md-12"><p>Full-Stack
                        Developer, I seek to be updated
                        on technologies and systems development practices. </p>
                    <p>Graduated in Technician in Electronics, pursuing a degree in Computer Science and Digital Games.
                    </p>
                </div>
            </div>


            <!-- DIV GRÁFICOS-->
            <div class="conteudo-graficos col-lg-7">


                <!-- TITULO GRAFICOS-->
                <div class="row">
                    <div class=" col-md-8 offset-md-2 col-10 offset-1 text-center principal-skills"><h2>Principal
                            Skills</h2></div>


                    <!--  FUNÇÃO GRAFICOS:

                 DEFAULT====$tamanho = 'col-xl-12', $cor = 'info', $titulo = ' ', $progresso = '50', $altura = '20'
                 <div class='row'>
                <div class='title-graphic'>" . $titulo . "
                </div>
                <div class='progress  " . $tamanho . "' style='height: " . $altura . "px; padding:0px !important; border: 1px solid white;'>
                <div class='progress-bar bg-" . $cor . "' role='progressbar' style='width: " . $progresso . "%' aria-valuenow='" . $progresso . "'
                aria-valuemin='0' aria-valuemax='100'>".$progresso."%</div>
                </div>
                </div>

                    -->
                    <!--  GRAFICOS-->

                    <div class="graficos col-xl-11 offset-xl-1">
                        <?= graficos('col-xl-12', 'info', 'HTML', '100', '30') ?>
                        <?= graficos('col-xl-12', 'info', 'PHP', '92', '30') ?>
                        <?= graficos('col-xl-12', 'info', 'CSS', '90', '30') ?>
                        <?= graficos('col-xl-12', 'info', 'JavaScript', '60', '30') ?>
                        <?= graficos('col-xl-12', 'info', 'Python', '80', '30') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--    TERCEIRA TELA-->
    <div class="container-fluid" style="margin-top: 50px; padding: 10px" >
        <div class="row">

<!--            OUTRAS HABILIDADES-->
            <div class="outras-habilidedes col-lg-5">
                <div class="row">
                    <div class="text-center col-xl-8 offset-xl-2 col-8 offset-2"><h2>Other Skills</h2></div>
                </div>
                <?= graficos('col-xl-12', 'info', 'C', '60', '30') ?>
                <?= graficos('col-xl-12', 'info', 'C++', '60', '30') ?>
                <?= graficos('col-xl-12', 'info', 'C#', '30', '30') ?>
                <?= graficos('col-xl-12', 'info', 'Java', '5', '30') ?>
                <?= graficos('col-xl-12', 'info', 'MySQL', '50', '30') ?>
                <?= graficos('col-xl-12', 'info', 'SQLite', '50', '30') ?>
                <?= graficos('col-xl-12', 'info', 'Android', '10', '30') ?>
                <?= graficos('col-xl-12', 'info', 'JQuery', '40', '30') ?>
            </div>
<!--            FERRAMENTAS-->
            <div class="ferramentas col-lg-7">
                <div class="row">
                    <div class="text-center col-xl-4 offset-xl-4 col-6 offset-3 ferramentas"><h2>Tools</h2></div>
                </div>
                <div class="col-xl-12">
                    <?= graficos('col-xl-12', 'info', 'GitHub', '70', '30') ?>
                    <?= graficos('col-xl-12', 'info', 'AWS S3', '30', '30') ?>
                    <?= graficos('col-xl-12', 'info', 'Unity', '40', '30') ?>
                    <?= graficos('col-xl-12', 'info', 'Boodstrap', '60', '30') ?>
                    <?= graficos('col-xl-12', 'info', 'DataTables', '50', '30') ?>
                    <?= graficos('col-xl-12', 'info', 'Premiere', '90', '30') ?>
                    <?= graficos('col-xl-12', 'info', 'Photoshop', '75', '30') ?>
                </div>

            </div>
        </div>
    </div>

<!--    TELA DE PROJETOS-->
    <div class="container-fluid project">
        <div class="row">
            <div class="text-center offset-3 col-6 col-lg-4 offset-lg-4"><h2>Projects</h2></div>
        </div>
    </div>


</div><!-- DIV CONTEUDO-->
</body>
</html>