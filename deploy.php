<?php

if(!file_exists('LogDeploy')) file_put_contents('LogDeploy', json_encode([]));

$logAtual = [
  'horario' => date('Y-m-d H:i:s'),
  'header'  => getallheaders(),
  'body' => $_REQUEST
];

file_put_contents('LogDeploy', json_encode($logAtual));