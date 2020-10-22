<?php

class Deck
{
    private $cards = [];

    private function __construct()
    {
    }

    public static function generateDeck(bool $shuffle = false)
    {
        $deck = new self();

        for ($i = 2; $i < 15; $i++) {
            for ($j = 0; $j < 4; $j++) {
                $deck->cards[] = new Card($i, $j);
            }
        }

        if ($shuffle) {
            $deck->shuffleDeck();
        }

        return $deck;
    }

    public function shuffleDeck()
    {
        shuffle($this->cards);
    }

    public function getCard(): ?Card
    {
        return array_shift($this->cards);
    }
}