<?php

function graficos($tamanho = 'col-xl-12', $cor = 'info', $titulo = ' ', $progresso = '50', $altura = '20')
{
    $html = " <div class='row'>
                <div class='title-graphic'>" . $titulo . "
                </div>
            <div class='progress  " . $tamanho . "' style='height: " . $altura . "px; padding:0px !important; border: 1px solid white;'>
                <div class='progress-bar bg-" . $cor . "' role='progressbar' style='width: " . $progresso . "%' aria-valuenow='" . $progresso . "'
                     aria-valuemin='0' aria-valuemax='100'>" . $progresso . "%</div>
            </div>
            </div>";
    echo $html;
}