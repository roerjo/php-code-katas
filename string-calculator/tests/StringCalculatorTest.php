<?php

use App\StringCalculator;
use PHPUnit\Framework\TestCase;

class StringCalculatorTest extends TestCase
{
    public $calculator;

    function setUp()
    {
        parent::setUp();

        $this->calculator = new StringCalculator;
    }

    function testItAddsNoNumbers()
    {
        $result = $this->calculator->add();

        $this->assertEquals(0, $result);
    }

    function testItAddsOneNumber()
    {
        $result = $this->calculator->add('3');

        $this->assertEquals(3, $result);
    }

    function testItAddsTwoNumbers()
    {
        $result = $this->calculator->add('2,3');

        $this->assertEquals(5, $result);
    }

    function testItAddsNegativeNumbers()
    {
        $result = $this->calculator->add('-2,-2');

        $this->assertEquals(-4, $result);
    }
}

