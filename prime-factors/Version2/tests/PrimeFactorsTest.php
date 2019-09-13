<?php

namespace Tests;

use App\PrimeFactors;
use PHPUnit\Framework\TestCase;

class PrimeFactorsTest extends TestCase
{
    /** @test */
    function it_returns_empty_array_for_1()
    {
        $result = (new PrimeFactors)->calculate(1);

        $this->assertEquals([], $result);
    }

    /** @test */
    function it_returns_2_for_2()
    {
        $result = (new PrimeFactors)->calculate(2);

        $this->assertEquals([2], $result);
    }

    /** @test */
    function it_returns_3_for_3()
    {
        $result = (new PrimeFactors)->calculate(3);

        $this->assertEquals([3], $result);
    }

    /** @test */
    function it_returns_2_2_for_4()
    {
        $result = (new PrimeFactors)->calculate(4);

        $this->assertEquals([2,2], $result);
    }

    /** @test */
    function it_returns_2_5_for_10()
    {
        $result = (new PrimeFactors)->calculate(10);

        $this->assertEquals([2,5], $result);
    }

    /** @test */
    function it_returns_2_5_5_for_50()
    {
        $result = (new PrimeFactors)->calculate(50);

        $this->assertEquals([2,5,5], $result);
    }
}
