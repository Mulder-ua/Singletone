<?php
require_once("Singletone.php");

PlayingCard::getInstance()->newGame();

for ($i = 0; $i < 51; $i++) {
    echo PlayingCard::getInstance()->getRandomCard(), "<br>";
}

echo "<BR>";

PlayingCard::getInstance()->newGame();

for ($i = 0; $i < 51; $i++) {
    echo PlayingCard::getInstance()->getRandomCard(), "<br>";
}
