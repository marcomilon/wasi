<?php

namespace Wasi\Api\Handler;

interface DataInterface {
  public function items();
  public function create($hash, $data);
  public function read($hash);
}
