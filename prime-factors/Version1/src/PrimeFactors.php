<?php

namespace App;

class PrimeFactors
{
    /**
     * Calculate the prime factors of the passed value
     *
     * @param int $value
     * @return array
     */
    public function generate(int $value) : array
    {
        $factors = [];

        for ($check = 2; $check <= $value;) {
            if ($value % $check === 0) {
                $factors[] = $check;
                $value /= $check;

            } else {
                $check++;
            }
        }

        if ($value !== 1) {
            $factors[] = $value;
        }

        sort($factors);

        return $factors;
    }
}