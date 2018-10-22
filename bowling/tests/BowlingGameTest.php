<?php

use App\BowlingGame;
use PHPUnit\Framework\TestCase;

class BowlingGameTest extends TestCase
{
    public function testItScoresGutterGameAsZero()
    {
        $player = new BowlingGame();

        for ($i = 0; $i < 20; $i++) {
            $player->roll(0);
        }

        $this->assertEquals(0, $player->getScore());
    }

    public function testItScoresSumOfKnockedDownPinsForGame()
    {
        $player = new BowlingGame();

        for ($i = 0; $i < 20; $i++) {
            $player->roll(1);
        }

        $this->assertEquals(20, $player->getScore());
    }

    public function testItScoresOneRollBonusForSpare()
    {
        $player = new BowlingGame();

        // roll spare
        $player->roll(5);
        $player->roll(5);

        // next frame
        $player->roll(2);
        $player->roll(2);

        $this->assertEquals(16, $player->getScore());
    }

    public function testItScoresTwoRollBonusForStrike()
    {
        $player = new BowlingGame();

        // roll strike
        $player->roll(10);

        // next frame
        $player->roll(2);
        $player->roll(2);

        $this->assertEquals(18, $player->getScore());
    }

    public function testItScoresPerfectGame()
    {
        $player = new BowlingGame();

        for ($i = 0; $i < 12; $i++) {
            $player->roll(10);
        }

        $this->assertEquals(300, $player->getScore());
    }
}

