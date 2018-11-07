<?php

namespace App;

use InvalidArgumentException;

class StringCalculator
{
    /**
     * Add a string of numbers
     *
     * @param string $numbers
     * @return int
     */
    public function add($numbers = '')
    {
        $numbers = explode(',', $numbers);

        return array_reduce($numbers, function ($tot, $num) {
            if (empty($num)) {
                $num = 0;
            } elseif (ctype_alpha($num)) {
                throw new InvalidArgumentException;
            }

            return $tot += $num;
        });
    }
}
