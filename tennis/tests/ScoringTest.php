<?php

use App\Game;
use App\Player;
use PHPUnit\Framework\TestCase;

class ScoringTest extends TestCase
{
    private $player1;
    private $player2;
    private $game;

    function setUp()
    {
        parent::setUp();

        $this->player1 = new Player('John');
        $this->player2 = new Player('Jack');
        $this->game = new Game;
    }

    function testItScores00()
    {
        $this->player1->setPoints(0);
        $this->player2->setPoints(0);

        $score = $this->game->getScore($this->player1, $this->player2);

        $this->assertEquals('Love-All', $score);
    }

    function testItScores10()
    {
        $this->player1->setPoints(1);
        $this->player2->setPoints(0);

        $score = $this->game->getScore($this->player1, $this->player2);

        $this->assertEquals('15-Love', $score);
    }

    function testItScores20()
    {
        $this->player1->setPoints(2);
        $this->player2->setPoints(0);

        $score = $this->game->getScore($this->player1, $this->player2);

        $this->assertEquals('30-Love', $score);
    }

    function testItScores30()
    {
        $this->player1->setPoints(3);
        $this->player2->setPoints(0);

        $score = $this->game->getScore($this->player1, $this->player2);

        $this->assertEquals('40-Love', $score);
    }

    function testItScores40()
    {
        $this->player1->setPoints(4);
        $this->player2->setPoints(0);

        $score = $this->game->getScore($this->player1, $this->player2);

        $this->assertEquals($this->player1->getName().' is the winner!', $score);
    }

    function testItScores01()
    {
        $this->player1->setPoints(0);
        $this->player2->setPoints(1);

        $score = $this->game->getScore($this->player1, $this->player2);

        $this->assertEquals('Love-15', $score);
    }

    function testItScores02()
    {
        $this->player1->setPoints(0);
        $this->player2->setPoints(2);

        $score = $this->game->getScore($this->player1, $this->player2);

        $this->assertEquals('Love-30', $score);
    }

    function testItScores03()
    {
        $this->player1->setPoints(0);
        $this->player2->setPoints(3);

        $score = $this->game->getScore($this->player1, $this->player2);

        $this->assertEquals('Love-40', $score);
    }

    function testItScores04()
    {
        $this->player1->setPoints(0);
        $this->player2->setPoints(4);

        $score = $this->game->getScore($this->player1, $this->player2);

        $this->assertEquals($this->player2->getName().' is the winner!', $score);
    }
}
