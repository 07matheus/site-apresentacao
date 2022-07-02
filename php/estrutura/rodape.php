<?php
$dadosRodape = $configLayout;

$dadosRodape['configJs'] = '
<script>
  const CAMINHO = "'.CAMINHO.'";
</script>';

// DEFINE OS SCRIPTS GERAIS
$relativePathScriptsGerais = '/js/gerais/';
$pathScriptsGerais         = ROOT . $relativePathScriptsGerais;
$tmp                       = [];
if(file_exists($pathScriptsGerais)) {
  foreach(new DirectoryIterator($pathScriptsGerais) as $script) {
    if($script->isDot()) continue;
  
    $url   = CAMINHO . $relativePathScriptsGerais . $script->getFilename();
    $tmp[] = '<script src = "'. $url .'"></script>';
  }
  asort($tmp);
}
$dadosRodape['scripts'] = implode('', $tmp);

// DEFINE OS SCRIPTS ESPECÍFIOS DA PÁGINA
$relativePathScriptEspecificos = '/js/'.$dadosRodape['dir'].'/';
$pathScriptEspecificos         = ROOT . $relativePathScriptEspecificos;
$dadosRodape['scripts']        = '';
$tmp                           = [];
if(file_exists($pathScriptEspecificos)) {
  foreach(new DirectoryIterator($pathScriptEspecificos) as $script) {
    if($script->isDot()) continue;
  
    $url   = CAMINHO . $relativePathScriptEspecificos . $script->getFilename();
    $tmp[] = '<script src = "'. $url .'"></script>';
  }
  asort($tmp);
}
$dadosRodape['scripts'] .= implode('', $tmp);

return getLayout($dadosRodape, 'html/rodape.html');