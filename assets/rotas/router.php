<?php
function route($route)
{
    switch ($route) {
        case 'home':
            include_once 'components\tela_inicial\tela-inicio.php';
            break;
        case 'moradias':
            include_once 'pages\imovel-detalhes\index.php';
            break;
        case 'login':
            include_once 'pages\login\login.php';
            break;
        case 'cadastro':
            include_once 'pages\cadastro\cadastro.php';
            break;


        default:
            include_once './index.php';
    }
}

