<?php
$layoutJogo = [];

// DEFINE LAYOUT DO CABEÇALHO
$layoutJogo['cabecalho'] = include setDirectorySeparator(ROOT . '/php/estrutura/cabecalho.php');

// DEFINE O LAYOUT DO MENU
$layoutJogo['menu'] = getLayout([], 'html/menu.html');

// DEFINE O LAYOUT DA GALERIA
$layoutJogo['conteudo'] = getLayout([], 'html/conteudos/jogo.html');

// DEFINE O LAYOUT DO RODAPÉ
$layoutJogo['rodape'] = include setDirectorySeparator(ROOT . '/php/estrutura/rodape.php');

echo getLayout($layoutJogo, 'html/index.html');