<?php
$layoutNotFound = [];

// DEFINE LAYOUT DO CABEÇALHO
$layoutNotFound['cabecalho'] = include setDirectorySeparator(ROOT . '/php/estrutura/cabecalho.php');

// DEFINE O LAYOUT DO MENU
$layoutNotFound['menu'] = getLayout([], 'html/menu.html');

// DEFINE O LAYOUT DO CONTEUDO
$layoutNotFound['conteudo'] = getLayout([], 'html/conteudos/404.html');

// DEFINE O LAYOUT DO RODAPÉ
$layoutNotFound['rodape'] = include setDirectorySeparator(ROOT . '/php/estrutura/rodape.php');

echo getLayout($layoutNotFound, 'html/index.html');