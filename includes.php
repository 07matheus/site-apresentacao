<?php
$configs = require_once __DIR__ . '/config.php';

define('CAMINHO', $configs['CAMINHO']);
define('ROOT', __DIR__);

function getLayout($dados = [], $pathArquivo) {
  $variaveisLayout = get_defined_constants(true)['user'];

  $variaveisLayout = array_merge($variaveisLayout, $dados);

  $layout = file_get_contents(ROOT .'/'. $pathArquivo);

  foreach($variaveisLayout as $chave => $valor) {
    $layout = str_replace("{{".$chave."}}", $valor, $layout);
  }

  return $layout;
}