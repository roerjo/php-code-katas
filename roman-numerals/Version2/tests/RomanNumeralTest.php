<?php

namespace Tests;

use App\RomanNumeral;
use PHPUnit\Framework\TestCase;

class RomanNumeralTest extends TestCase
{
    /** @test */
    function it_returns_I_for_1()
    {
        $result = (new RomanNumeral)->convert(1);

        $this->assertEquals('I', $result);
    }

    /** @test */
    function it_returns_II_for_2()
    {
        $result = (new RomanNumeral)->convert(2);

        $this->assertEquals('II', $result);
    }

    /** @test */
    function it_returns_IV_for_4()
    {
        $result = (new RomanNumeral)->convert(4);

        $this->assertEquals('IV', $result);
    }

    /** @test */
    function it_returns_V_for_5()
    {
        $result = (new RomanNumeral)->convert(5);

        $this->assertEquals('V', $result);
    }

    /** @test */
    function it_returns_VII_for_7()
    {
        $result = (new RomanNumeral)->convert(7);

        $this->assertEquals('VII', $result);
    }

    /** @test */
    function it_returns_XVI_for_16()
    {
        $result = (new RomanNumeral)->convert(16);

        $this->assertEquals('XVI', $result);
    }

    /** @test */
    function it_returns_LXXIX_for_79()
    {
        $result = (new RomanNumeral)->convert(79);

        $this->assertEquals('LXXIX', $result);
    }

    /** @test */
    function it_returns_CDXCIX_for_499()
    {
        $result = (new RomanNumeral)->convert(499);

        $this->assertEquals('CDXCIX', $result);
    }
}
