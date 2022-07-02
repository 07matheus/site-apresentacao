<?php
$dadosCabecalho = $configLayout;

$dadosCabecalho['configCss'] = '
<style>
  :root {
    --CAMINHO: '.CAMINHO.';
    --backgroundSite: url('.CAMINHO.'/img/background-site.jpg);
  }
</style>
';

// DEFINE OS ESTILOS GERAIS
$relativePathEstilosGerais = '/css/gerais/';
$pathEstilosGerais         = ROOT . $relativePathEstilosGerais;
$tmp                       = [];
if(file_exists($pathEstilosGerais)) {
  foreach(new DirectoryIterator($pathEstilosGerais) as $estilo) {
    if($estilo->isDot()) continue;
    
    $url   = CAMINHO . $relativePathEstilosGerais . $estilo->getFilename();
    $tmp[] = '<link rel="stylesheet" href="'.$url.'">';
  }
}
$dadosCabecalho['estilos'] = implode('', $tmp);

// DEFINE OS ESTILOS ESPECÍFIOS DA PÁGINA
$relativePathEstilosEspecificos = '/css/'.$dadosCabecalho['dir'].'/';
$pathEstilosEspecificos         = ROOT . $relativePathEstilosEspecificos;
$tmp                            = [];
if(file_exists($pathEstilosEspecificos)) {
  foreach(new DirectoryIterator($pathEstilosEspecificos) as $estilo) {
    if($estilo->isDot()) continue;
  
    $url   = CAMINHO . $relativePathEstilosEspecificos . $estilo->getFilename();
    $tmp[] = '<link rel = "stylesheet" href="'.$url.'">';
  }
}
$dadosCabecalho['estilos'] .= implode('', $tmp);

return getLayout($dadosCabecalho, 'html/cabecalho.html');