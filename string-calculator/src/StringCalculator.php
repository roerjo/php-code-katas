<?php

namespace App;

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

        return array_sum($numbers);
    }
}
