<?php

namespace Wasi\Api\Io;

interface DataInterface {
  public function items();
  public function create($hash, $data);
  public function read($hash);
  public function delete($hash);
}
