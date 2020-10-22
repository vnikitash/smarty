<?php

class Player
{
    private $firstName;
    private $lastName;
    private $cards = [];

    public function __construct(string $firstName, string $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function setFirstName(string $name): self
    {
        $this->firstName = ucfirst(strtolower($name));

        return $this;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = ucfirst(strtolower($lastName));

        return $this;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function setCard(Card $card): self
    {
        $this->cards[] = $card;

        return $this;
    }

    public function getInfo(): void
    {
        $str = "Hi, my name is {$this->firstName} {$this->lastName}<br>My cards:<br>";

        /**
         * @var int $index
         * @var Card $card
         */
        foreach ($this->cards as $index => $card) {
            $str .= ($index + 1) . ') ' . $card->getFullTitle() . '<br>';
        }

        $str .= "My Score: " . $this->getScore() . '<br><br>';

        echo $str;
    }

    public function getScore(): int
    {
        $score = 0;

        $suites = [
            '♦' => 0,
            '♣' => 0,
            '♥' => 0,
            '♠' => 0,
        ];



        /**
         * @var Card $card
         */
        foreach ($this->cards as $card)
        {
            $score += $card->getScore();
            $suites[$card->getSuite()]++;
        }

        //N♦^2 + N♣^2 + N♥^2 + N♠^2 =
        foreach ($suites as $count) {
            $score += pow($count, 2);
        }

        return $score;
    }

    //How the score forms: 6 = 6, J = 11, Q = 12, K = 13, A = 14.
    // Suits Rule: 0^2 + 0^2 + 2^2 + 4 ^ 2 =
    // Score 6 + 7 + 8 + 9 + 10 + 11 + 0^2 + 0^2 + 2 ^ 2 + 4 ^ 2 = 51 + 0^2 + 0^2 + 2^2 + 4^2 = 51 + 2^2 + 4^2 = 51 + 4 + 16 = 55 + 16 = 71 Points!
}