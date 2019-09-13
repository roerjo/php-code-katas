<?php

namespace App;

use DivisionByZeroError;

class PrimeFactors
{
    public function calculate(int $number)
    {
        $prime_factors = [];

        for ($divisor = 2; $divisor <= $number; $divisor++) {
            while ($number % $divisor === 0) {
                $prime_factors[] = $divisor;

                $number /= $divisor;
            }
        }

        return $prime_factors;
    }
}
