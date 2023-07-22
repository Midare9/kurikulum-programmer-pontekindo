<?php
echo "====================\n";
echo "=====JANKENPON!=====\n";
echo "====================\n";

$life = 3;
$win = 0;
$lose = 0;
$draw = 0;

while(true) {
    echo "No need to explain, pick your move!\n";
    makemove:
    echo <<<here
    (1) => Rock
    (2) => Paper
    (3) => Scissors
    here;
    echo "\n";
    echo "Your choice: ";
    $playerchoice = trim(fgets(STDIN));

    if($playerchoice != 1 && $playerchoice != 2 && $playerchoice != 3) {
        echo "===Invalid choices!===";
        goto makemove;
    }

    $move = [
        "1" => "Rock",
        "2" => "Paper",
        "3" => "Scissors"
    ];
    
    $playermove = $move[$playerchoice];
    $botchoice = shuffle($move);
    $botmove = $botchoice[0];
    echo "Your move: $playermove\n";
    echo "Bot move: $botmove\n";
}