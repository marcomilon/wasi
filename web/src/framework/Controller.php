<?php

namespace Wasi\Web\Framework;

use Wasi\Web\Framework\Application;

class Controller {

  private function getParameters() {
    include dirname(__FILE__) . '/../config/web.php';
  }

  private function renderHeader() {
    include dirname(__DIR__) . '/layout/header.php';
  }

  private function renderFooter() {
    include dirname(__DIR__) . '/layout/footer.php';
  }

  protected function render($view, $params) {

    ob_start();
    include dirname(__DIR__) . '/layout/header.php';
    include dirname(__DIR__) . '/layout/footer.php';
    $out = ob_get_clean();

    echo $out;
    exit();
  }

}
