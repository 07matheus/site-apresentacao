<?php
$configs = require_once __DIR__ . DIRECTORY_SEPARATOR . 'config.php';

define('CAMINHO', $configs['CAMINHO']);
define('ROOT', __DIR__);
define('EMAIL', $configs['email']);

/**
 * Função responsável por formatar o caminho de arquivo, para o formato conhecido do sistema operacional utilizado
 * @param  string      $fullPath     Caminho completo do arquivo
 * @return string
 */
function setDirectorySeparator($fullPath) {
  return str_replace('/', DIRECTORY_SEPARATOR, $fullPath);
}

/**
 * Função responsável por processar um arquivo de layout
 * @param  array      $dados            Valores que serão adicionados no layout
 * @param  string     $pathArquivo      Caminho relativo do arquivo de layout
 * @return html
 */
function getLayout($dados = [], $pathArquivo) {
  $variaveisLayout = get_defined_constants(true)['user'];

  $variaveisLayout = array_merge($variaveisLayout, $dados);

  $layout          = file_get_contents(setDirectorySeparator(ROOT .'/'. $pathArquivo));

  foreach($variaveisLayout as $chave => $valor) {
    $layout = str_replace("{{".$chave."}}", $valor, $layout);
  }

  return $layout;
}

/**
 * Função responsável por realizar o envio de um e-mail
 * OBS: ELA SÓ FUNCIONARÁ, CASO O PROJETO ESTEJA EM UM SERVIDOR ONLINE, COM ENVIO DE E-MAILS JÁ CONFIGURADO
 * @param string      $usuario          Nome do usuário que preencheu o forms
 * @param string      $emailUsuario     E-mail do usuário que preencheu o forms
 * @param string      $mensagem         Mensagem de texto que o usuário digitou
 * @return void
 */
function sendEmail($usuario, $emailUsuario, $mensagem) {
  $titulo    = 'Obrigado pelo contato, '.$usuario.'!';
  $cabecalho = 'From:' . $emailUsuario;
  mail(EMAIL, $titulo, $mensagem, $cabecalho);
}