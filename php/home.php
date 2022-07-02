<?php
$layoutHome = [];

// DEFINE LAYOUT DO CABEÇALHO
$layoutHome['cabecalho'] = include setDirectorySeparator(ROOT . '/php/estrutura/cabecalho.php');

// DEFINE O LAYOUT DO MENU
$layoutHome['menu'] = getLayout([], 'html/menu.html');

// DEFINE O LAYOUT DO CONTEUDO
$layoutHome['conteudo'] = getLayout([], 'html/conteudos/home.html');

// DEFINE O LAYOUT DO RODAPÉ
$layoutHome['rodape'] = include setDirectorySeparator(ROOT . '/php/estrutura/rodape.php');

echo getLayout($layoutHome, 'html/index.html');