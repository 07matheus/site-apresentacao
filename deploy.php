<?php


$log = [
  date('Y-m-d Y:m:i') => $_POST
];

file_put_contents('LogDeploy', json_encode($log));