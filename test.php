<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "Player.php";
require_once "Deck.php";
require_once "Card.php";



$players = [
    new Player('Viktor','Nikitash'),
    new Player('Ighor','Khlyupin'),
    new Player('Alexander','Yuaschuk'),
    new Player('Anastasia','Zhuravel'),
    new Player('Viktoriia','Samoilenko')
];

$deck = Deck::generateDeck(true);

for ($i = 0; $i < 8; $i++) {
    /**
     * @var Player $player
     */
    foreach ($players as $player) {
        $player->setCard($deck->getCard());
    }
}




usort($players, function (Player $player1, Player $player2) {
    return -($player1->getScore() <=> $player2->getScore());
});



/**
 * @var Player $player
 */
foreach ($players as $index => $player) {
    echo "#" . ($index + 1) . ' Place!<br>';
    $player->getInfo();
}





die();