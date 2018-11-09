<?php

namespace App;

class Game
{
    private $lookup = [
        0 => 'Love',
        1 => '15',
        2 => '30',
        3 => '40',
    ];

    public function getScore(Player $player1, Player $player2) : string
    {
        $score1 = $player1->getPoints();
        $score2 = $player2->getPoints();

        if ($this->hasWinner($score1, $score2)) {
            return $this->winner($player1, $player2);
        }

        if ($this->isTied($score1, $score2)) {
            return $this->lookup[$score1].'-All';
        }

        return $this->lookup[$score1].'-'.$this->lookup[$score2];
    }

    private function hasWinner(int $score1, int $score2) : bool
    {
        $hasFourOrMore = max($score1, $score2) >= 4;
        $winningByTwo = abs($score1 - $score2) >= 2;

        return $hasFourOrMore && $winningByTwo;
    }

    private function winner($player1, $player2)
    {
        if ($player1->getPoints() > $player2->getPoints()) {
            return $player1->getName().' is the winner!';
        } else {
            return $player2->getName().' is the winner!';
        }
    }

    private function isTied(int $score1, int $score2) : bool
    {
        return $score1 === $score2;
    }
}
