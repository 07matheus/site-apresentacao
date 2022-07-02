<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . 'includes.php';

if(!isset($_GET['url']))$_GET['url'] = '/';

// DEFINE VARIÁVEIS GERAIS DE LAYOUT
$configLayout = [
  'pagina' => '',
  'css'    => ''
];

// VERIFICA PARA ONDE DEVERÁ SER REDIRECIONADO
$template = '';
switch($_GET['url']) {
  case '/':
    $configLayout['dir'] = 'home';
    $template            = setDirectorySeparator(__DIR__ . '/php/home.php');
  break;

  case 'galeria':
    $configLayout['pagina'] = '- Galeria';
    $configLayout['dir']    = 'galeria';
    $template               = setDirectorySeparator(__DIR__ . '/php/galeria.php');
  break;

  case 'jogo':
    $configLayout['pagina'] = '- RunVid 19';
    $configLayout['dir']    = 'jogo';
    $template               = setDirectorySeparator(__DIR__ . '/php/jogo.php');
  break;

  case 'contato':
    $configLayout['pagina'] = '- Fale conosco';
    $configLayout['dir']    = 'contato';
    $template               = setDirectorySeparator(__DIR__ . '/php/contato.php');
  break;

  default:
    header("HTTP/1.0 404 Not Found");
    $configLayout['pagina'] = '- Não encontrado';
    $configLayout['dir']    = '404';
    $template               = setDirectorySeparator(__DIR__ . '/php/404.php');
  break;
}

require_once $template;