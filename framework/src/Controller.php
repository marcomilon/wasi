<?php

namespace Wasi\Framework;

class Controller {

  private function getParameters() {
    include dirname(__FILE__) . '/../config/web.php';
  }

  protected function render($view, $params) {

    $classPath = get_class($this);
    $explodeClassPath = explode('\\', $classPath);
    $className = str_replace('controller', '', strtolower(end($explodeClassPath)));

    ob_start();
    include dirname(__DIR__) . '/../web/src/layout/header.php';
    extract ($params);
    include dirname(__DIR__) . '/../web/src/views/'. $className .'/'. $view.'.php';
    include dirname(__DIR__) . '/../web/src/layout/footer.php';
    $out = ob_get_clean();

    echo $out;
    exit();
  }

}
