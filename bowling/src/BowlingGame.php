<?php

namespace App;

class BowlingGame
{
    private $rolls = [];

    public function roll($pinsHit)
    {
        $this->rolls[] = $pinsHit;
    }

    private function rolledSpare($frame)
    {
        if (is_array($frame) &&
            count($frame) === 2 &&
            array_sum($frame) === 10
        ) {
            return true;
        }

        return false;
    }

    private function rolledStrike($frame)
    {
        if (is_array($frame) &&
            count($frame) === 1 &&
            array_sum($frame) === 10
        ) {
            return true;
        }

        return false;
    }

    public function getScore()
    {
        $score = 0;
        $roll = 0;

        for ($frame = 1; $frame <= 10; $frame++) {
            if (isset($this->rolls[$roll])) {
                if ($this->rolls[$roll] === 10) {
                    $score += 10 + $this->rolls[$roll+1] + $this->rolls[$roll+2];
                    $roll += 1;
                } elseif ($this->rolls[$roll] + $this->rolls[$roll+1] === 10) {
                    $score += 10 + $this->rolls[$roll+2];
                    $roll += 2;
                } else {
                    $score += $this->rolls[$roll] + $this->rolls[$roll+1];
                    $roll += 2;
                }
            } else {
                break;
            }

        }

        return $score;
    }
}
