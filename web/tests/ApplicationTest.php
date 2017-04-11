<?php

use PHPUnit\Framework\TestCase;

final class ApplicationTest extends TestCase
{
  public function testCanBeCreatedFromValidEmailAddress()
  {
    $this->assertInstanceOf(
      Application::class,
      Email::fromString('user@example.com')
    );
  }
}
