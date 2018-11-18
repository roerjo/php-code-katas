<?php

use App\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    private $parser;

    function setUp()
    {
        $this->parser = new FizzBuzz;
    }

    function testItReturnsCorrectUnder10()
    {
        $sequence = $this->parser->generate(1, 10);

        $expected = '1,2,Fizz,4,Buzz,Fizz,7,8,Fizz,Buzz';

        $this->assertEquals($expected, $sequence);
    }

    function testItReturnsCorrect10And15()
    {
        $sequence = $this->parser->generate(10, 15);

        $expected = 'Buzz,11,Fizz,13,14,FizzBuzz';

        $this->assertEquals($expected, $sequence);
    }
}

