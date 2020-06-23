<?php

include '../srcs/sample.php';
use \PHPUnit\Framework\TestCase;

class MyTest extends TestCase {

    public function test000(){
        $this->assertEquals(3, add(1, 2));
    }
}