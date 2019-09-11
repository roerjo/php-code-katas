<?php

use App\PrimeFactors;
use PHPUnit\Framework\TestCase;

class PrimeFactorsTest extends TestCase
{
    public function testItReturnsEmptyFor1()
    {
        $factors = (new PrimeFactors)->generate(1);

        $this->assertEquals([], $factors);
    }

    public function testItReturns2For2()
    {
        $factors = (new PrimeFactors)->generate(2);

        $this->assertEquals([2], $factors);
    }

    public function testItReturns3For3()
    {
        $factors = (new PrimeFactors)->generate(3);

        $this->assertEquals([3], $factors);
    }

    public function testItReturns22For4()
    {
        $factors = (new PrimeFactors)->generate(4);

        $this->assertEquals([2, 2], $factors);
    }

    public function testItReturns222For8()
    {
        $factors = (new PrimeFactors)->generate(8);

        $this->assertEquals([2, 2, 2], $factors);
    }

    public function testItReturns55For25()
    {
        $factors = (new PrimeFactors)->generate(25);

        $this->assertEquals([5, 5], $factors);
    }

    public function testItReturns2255For100()
    {
        $factors = (new PrimeFactors)->generate(100);

        $this->assertEquals([2, 2, 5, 5], $factors);
    }
}