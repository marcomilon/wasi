<?php

$nameSpace = 'Wasi/Api/';

 spl_autoload_register(function ($class) use($nameSpace) {
   $classPath = str_replace('\\', '/', $class);
   $classPath = str_replace($nameSpace, '/', $classPath);
   include __DIR__ . '/src/' . $classPath . '.php';
 });
