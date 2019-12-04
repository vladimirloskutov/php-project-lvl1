<?php

namespace BrainGames\games\Progression;

use function BrainGames\Engine\run as runGame;

const DESCRIPTION = "What number is missing in the progression?";
const LENGTH_OF_PROGRESSION = 10;

function getProgression($start, $step, $length)
{
    $result = [];
    for ($i = 0; $i < $length; $i++) {
        $result[] = $start + $step * $i;
    }
    return $result;
}

function run()
{
    $getGameData = function () {
        $startOfProgression = rand(1, 100);
        $stepOfProgression = rand(1, 10);

        $progression = getProgression($startOfProgression, $stepOfProgression, LENGTH_OF_PROGRESSION);

        $secretElement = array_rand($progression);
        $answer = $progression[$secretElement];
        $progression[$secretElement] = '..';
        $question = implode(' ', $progression);

        return [$question, $answer];
    };

    runGame(DESCRIPTION, $getGameData);
}
