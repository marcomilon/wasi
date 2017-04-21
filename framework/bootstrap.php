<?php

$nameSpace = 'Wasi/';

spl_autoload_register(function ($class) use($nameSpace) {

  $classPath = str_replace('\\', '/', $class);
  $classPath = str_replace($nameSpace, '', $classPath);

  if (strpos($classPath, 'Framework/') !== false) {
    $classPath = str_replace('Framework/', 'Framework/Src/', $classPath);
  } else {
    $classPath = str_replace('Web/', 'Web/Src/', $classPath);
  }

  $path = explode('/', $classPath);

  $className = array_pop($path);

  $path = strtolower(implode('/', $path));

  if(empty($path)) {
    include dirname(__DIR__) . '/' . $className . '.php';
  } else {
    include dirname(__DIR__) . '/' . $path . '/' . $className . '.php';
  }

});
