<?php

namespace Wasi\Api\Io;

class Schema {

  private $model;

  public function __construct(DataInterface $model) {
    $this->model = $model;
  }

  public function getModel() {
    return $this->model;
  }

}
