<?php
$layoutContato = [];

if(!empty($_POST)) {
  $nome     = $_POST['nome'];
  $email    = $_POST['email'];
  $mensagem = $_POST['mensagem'];

  sendEmail($nome, $email, $mensagem);
  
  // EVITA DE ENVIAR OS MESMOS DADOS AO RECARREGAR A PÁGINA
  $_POST = [];
}

// DEFINE LAYOUT DO CABEÇALHO
$layoutContato['cabecalho'] = include setDirectorySeparator(ROOT . '/php/estrutura/cabecalho.php');

// DEFINE O LAYOUT DO MENU
$layoutContato['menu'] = getLayout([], 'html/menu.html');

// DEFINE O LAYOUT DA GALERIA
$layoutContato['conteudo'] = getLayout([], 'html/conteudos/contato.html');

// DEFINE O LAYOUT DO RODAPÉ
$layoutContato['rodape'] = include setDirectorySeparator(ROOT . '/php/estrutura/rodape.php');

echo getLayout($layoutContato, 'html/index.html');