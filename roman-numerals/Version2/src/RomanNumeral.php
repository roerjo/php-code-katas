<?php

namespace App;

class RomanNumeral
{
    /**
     * Major Roman numeral symbols
     *
     * @var array
     */
    private $symbols = [
        'M'     => 1000,
        'CM'    => 900,
        'D'     => 500,
        'CD'    => 400,
        'C'     => 100,
        'XC'    => 90,
        'L'     => 50,
        'XL'    => 40,
        'X'     => 10,
        'IX'    => 9,
        'V'     => 5,
        'IV'    => 4,
        'I'     => 1,
    ];

    /**
     * Convert an integer into a Roman numeral
     *
     * @param int $input
     * @return string $result
     */
    public function convert(int $input): string
    {
        $result = '';

        foreach ($this->symbols as $symbol => $value) {
            // If the symbol value can be divided at least once into the input
            if (($quotient = $input / $value) >= 1) {
                // Append to the result
                $result .= str_repeat($symbol, $quotient);
                // Set the new number and move on to the next symbol
                $input %= $value;
            }
        }

        return $result;
    }
}
