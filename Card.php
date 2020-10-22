<?php

class Card
{
    public const SUITES = ['♦', '♣', '♥', '♠'];

    private $suite;
    private $score;
    private $title;

    public function __construct(int $score, int $suite)
    {
        $this->score = $score;
        $this->suite = self::SUITES[$suite];

        if ($score < 11) {
            $this->title = $score;
        } else {
            switch ($score) {
                case 11:
                    $this->title = 'J';
                    break;
                case 12:
                    $this->title = 'Q';
                    break;
                case 13:
                    $this->title = 'K';
                    break;
                default:
                    $this->title = 'A';
            }
        }
    }

    public function getFullTitle(): string
    {
        return $this->title . $this->suite;
    }

    public function getSuite(): string
    {
        return $this->suite;
    }

    public function getScore(): int
    {
        return $this->score;
    }
}