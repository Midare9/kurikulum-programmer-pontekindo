<?php
$angka = mt_rand(1,9);
$life = 3;
echo "===========================\n";
echo "=====Guess The Number!=====\n";
echo "===========================\n";
echo "Input any number in range from 1 to 9\n";
echo "Chance given 3\n";
while($life == true) {
    echo "Make a Guess: ";
    $tebak = trim(fgets(STDIN));
    $life--;
    if ($tebak < $angka) {
        echo "Try Higher\n";
    }
    elseif ($tebak > $angka) {
        echo "Try Lower\n";
    }
    elseif ($tebak == $angka) {
        echo "========================\n";
        echo "=====You Nailed It!=====\n";
        echo "========================\n";
        tryagainwin:
        echo "Try Again? (Y/N): ";
        $ulang = strtoupper(trim(fgets(STDIN)));
        if ($ulang == "Y") {
            $life = 3;
            $angka = mt_rand(1,9);
        }
        elseif ($ulang == "N") {
            exit;
        }
        else {
            echo "Invalid input";
            goto tryagainwin;
        }

    }
    else {
        echo "It's only in range from 1 to 9\n";
    }
    if ($life == 0){
        echo "===================\n";
        echo "=====Game Over=====\n";
        echo "===================\n";
        echo "The Right Answer Is $angka\n";
        tryagain:
        echo "Try Again? (Y/N): ";
        $ulang = strtoupper(trim(fgets(STDIN)));
        if ($ulang == "Y") {
            $life = 3;
            $angka = mt_rand(1,9);
        }
        elseif ($ulang == "N") {
            $life = false;
        }
        else {
            echo "Invalid input";
            goto tryagain;
        }
    }
}
