<?php
$layoutGaleria = [];

// DEFINE LAYOUT DO CABEÇALHO
$layoutGaleria['cabecalho'] = include setDirectorySeparator(ROOT . '/php/estrutura/cabecalho.php');

// DEFINE O LAYOUT DO MENU
$layoutGaleria['menu'] = getLayout([], 'html/menu.html');

// DEFINE O LAYOUT DA GALERIA
$layoutGaleria['conteudo'] = getLayout([], 'html/conteudos/galeria.html');

// DEFINE O LAYOUT DO RODAPÉ
$layoutGaleria['rodape'] = include setDirectorySeparator(ROOT . '/php/estrutura/rodape.php');

echo getLayout($layoutGaleria, 'html/index.html');