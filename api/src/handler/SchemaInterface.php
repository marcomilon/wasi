<?php

namespace Wasi\Api\Handler;

interface SchemaInterface {
  public function items();
  public function create($hash, $data);
  public function read($hash);
}
