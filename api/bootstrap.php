<?php

$nameSpace = 'Wasi/Api/';

spl_autoload_register(function ($class) use($nameSpace) {
  $classPath = str_replace('\\', '/', $class);
  $classPath = str_replace($nameSpace, '', $classPath);

  $path = explode('/', $classPath);
  $className = array_pop($path);

  $path = strtolower(implode('/', $path));

  if(empty($path)) {
    include __DIR__ . '/src/' . $className . '.php';
  } else {
    include __DIR__ . '/src/' . $path . '/' . $className . '.php';
  }
  
});
