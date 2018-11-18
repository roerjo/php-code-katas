<?php

namespace App;

class Game
{
    /**
     * Score lookup table
     *
     * @var array
     */
    private $lookup = [
        0 => 'Love',
        1 => '15',
        2 => '30',
        3 => '40',
    ];

    /**
     * Retrieve the score
     *
     * @param Player $player1
     * @param Player $player2
     *
     * @return string
     */
    public function getScore(Player $player1, Player $player2) : string
    {
        $score1 = $player1->getPoints();
        $score2 = $player2->getPoints();

        if ($this->hasWinner($score1, $score2)) {
            return $this->winner($player1, $player2);
        }

        if ($this->hasAdvantage($score1, $score2)) {
            return $this->advantagePlayer($player1, $player2);
        }

        if ($this->isTied($score1, $score2)) {
            if ($score1 >= 4) {
                return 'Deuce';
            }

            return $this->lookup[$score1].'-All';
        }

        return $this->lookup[$score1].'-'.$this->lookup[$score2];
    }

    /**
     * Determine if there is a winner
     *
     * @param int $score1
     * @param int $score2
     *
     * @return bool
     */
    private function hasWinner(int $score1, int $score2) : bool
    {
        $hasFourOrMore = max($score1, $score2) >= 4;
        $winningByTwo = abs($score1 - $score2) >= 2;

        return $hasFourOrMore && $winningByTwo;
    }

    /**
     * Build the winner string
     *
     * @param Player $player1
     * @param Player $player2
     *
     * @return string
     */
    private function winner(Player $player1, Player $player2) : string
    {
        if ($player1->getPoints() > $player2->getPoints()) {
            return $player1->getName().' is the winner!';
        } else {
            return $player2->getName().' is the winner!';
        }
    }

    /**
     * Determine if a player has advantage
     *
     * @param int $score1
     * @param int $score2
     *
     * @return bool
     */
    private function hasAdvantage(int $score1, int $score2) : bool
    {
        $hasFourOrMore = max($score1, $score2) >= 4;
        $winningByOne = abs($score1 - $score2) === 1;

        return $hasFourOrMore && $winningByOne;
    }

    /**
     * Build advantage player string
     *
     * @param Player $player1
     * @param Player $player2
     *
     * @return string
     */
    private function advantagePlayer(Player $player1, Player $player2) : string
    {
        if ($player1->getPoints() > $player2->getPoints()) {
            return $player1->getName().' has advantage';
        } else {
            return $player2->getName().' has advantage';
        }
    }

    /**
     * Determine if the scored is tied
     *
     * @param int $score1
     * @param int $score2
     *
     * @return bool
     */
    private function isTied(int $score1, int $score2) : bool
    {
        return $score1 === $score2;
    }
}
