<?php

use App\RomanNumeralConverter;
use PHPUnit\Framework\TestCase;

class RomanNumeralConverterTest extends TestCase
{
    public function convertsRomanNumeralDataProvider()
    {
        return [
            [1, 'I'],
            [2, 'II'],
            [3, 'III'],
            [4, 'IV'],
            [5, 'V'],
            [9, 'IX'],
            [10, 'X'],
            [44, 'XLIV'],
            [45, 'XLV'],
            [99, 'XCIX'],
            [450, 'CDL'],
        ];
    }

    /**
     * Ensure converter works
     *
     * @dataProvider convertsRomanNumeralDataProvider
     * @param string $number
     * @param int $expected
     * @return void
     */
    public function testItConvertsRomanNumeral($number, $expected)
    {
        $converter = new RomanNumeralConverter();

        $result = $converter->convert($number);

        $this->assertEquals($expected, $result);
    }
}
