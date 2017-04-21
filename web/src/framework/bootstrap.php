<?php

$nameSpace = 'Wasi/Web/';

spl_autoload_register(function ($class) use($nameSpace) {
  $classPath = str_replace('\\', '/', $class);
  $classPath = str_replace($nameSpace, '', $classPath);

  $path = explode('/', $classPath);
  $className = array_pop($path);

  $path = strtolower(implode('/', $path));

  if(empty($path)) {
    include dirname (__DIR__) . '/' . $className . '.php';
  } else {
    include dirname (__DIR__) . '/' . $path . '/' . $className . '.php';
  }

});
