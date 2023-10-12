<?php

function compare(int $numOne, int $numTwo)
{
    // From Php 7 : https://www.php.net/manual/en/migration70.new-features.php#migration70.new-features.spaceship-op
    return $numOne <=> $numTwo;
}

function giveClue(int $diff)
{
    switch($diff) {
        case -1:
            echo "The given number is too height.\n";
            return true;
            break;
        case 0:
            echo "Success ! You find the right number.\n";
            return false;
            break;
        case 1:
            echo "The given number is too low.\n";
            return true;
            break;
        default:
            throw new Exception("Incorrect value of diff given");
            break;
    }
}

function getGivenNumber()
{
    return readline("Please give a number: ");
}

function replay()
{
    switch(readline("Do you want to replay ? (y/n) ")) {
        case "yes":
            return true;
            break;
        case "y":
            return true;
            break;
        default:
            return false;
            break;
    }
}

function play()
{
    $random = rand(0, 10000);
    do {
        $given = getGivenNumber();
    } while(giveClue(compare($random, $given)));
}

do {
    play();
} while(replay());
























