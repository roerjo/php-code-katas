<?php

namespace App;

class FizzBuzz
{
    /**
     * Generate the parsed string
     *
     * @param int $start
     * @param int $end
     *
     * @return string
     */
    public function generate(int $start, int $end) : string
    {
        $sequence = '';

        for ($num = $start; $num <= $end; $num++) {
            $sequence .= $this->resolveNumber($num);
        }

        return rtrim($sequence, ',');
    }

    /**
     * Convert the number, if needed
     *
     * @param int $num
     *
     * @return string
     */
    private function resolveNumber(int $num) : string
    {
        if ($num % 15 === 0) {
            return 'FizzBuzz';
        } elseif ($num % 3 === 0) {
            return 'Fizz,';
        } elseif ($num % 5 === 0) {
            return 'Buzz,';
        }

        return $num.',';
    }
}

