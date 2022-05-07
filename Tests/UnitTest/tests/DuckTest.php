<?php
use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../Duck.php';

class DuckTest extends \PHPUnit\Framework\TestCase
{
    public function test_say()
    {
        $krya = new Duck();
        $this->assertSame( 'krya-krya', $krya->say() );
    }
}