<?php

namespace Wasi\Framework;

class Controller {

  public $nombre;

  private function getParameters() {
    include dirname(__FILE__) . '/../config/web.php';
  }

  protected function render($view, $params = []) {

    $classPath = get_class($this);
    $explodeClassPath = explode('\\', $classPath);
    $className = str_replace('controller', '', strtolower(end($explodeClassPath)));

    ob_start();
    extract ($params);
    include dirname(__DIR__) . '/../web/src/layout/header.php';
    include dirname(__DIR__) . '/../web/src/views/'. $className .'/'. $view.'.php';
    include dirname(__DIR__) . '/../web/src/layout/footer.php';
    $out = ob_get_clean();

    echo $out;
    exit();
  }

}
