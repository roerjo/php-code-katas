<?php

namespace App;

class Player
{
    /**
     * Name of the player
     *
     * @var string
     */
    private $name;

    /**
     * Number of points the player has in the current game
     *
     * @var int
     */
    private $points = 0;

    /**
     * __construct
     *
     * @param string $name
     * @return void
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * Retrieve the player's name
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * Set the number of points the player has earned
     *
     * @param int $points
     * @return void
     */
    public function setPoints(int $points)
    {
        $this->points = $points;
    }

    /**
     * Retrieve the number of points the player has earned
     *
     * @return int
     */
    public function getPoints() : int
    {
        return $this->points;
    }
}
