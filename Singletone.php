<?php

class PlayingCard
{
    protected  $deck;

    protected function __construct() {

    }

    protected function __copy() {

    }

    private function __wakeup()
    {

    }

    public static function getInstance()
    {
        static $instance = null;
        if (null === $instance) {
            $instance = new static();
        }
        return $instance;
    }

    public function newGame() {
        $colors = array("clubs", "diamonds", "hearts", "spades");
        $symbols = array("2", "3", "4", "5", "6", "7", "8", "9", "10", "Jack", "King", "Queen", "Ace");

        foreach ( $colors as $color ) {
            foreach ( $symbols as $symbol ) {
                $this->deck[] = $symbol . " of " . $color;
            }
        }
        shuffle($this->deck);
    }

    public function getRandomCard(){
        return  array_shift($this->deck);
    }
}