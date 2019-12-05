<?php

namespace BrainGames\games\Progression;

use function BrainGames\Engine\run as runGame;

const PROGRESSION_GAME_DESCRIPTION = "What number is missing in the progression?";
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

        $secretElementIndex = rand(0, sizeof($progression) - 1);
        $answer = $progression[$secretElementIndex];
        $progression[$secretElementIndex] = '..';
        $question = implode(' ', $progression);

        return [$question, $answer];
    };

    runGame(PROGRESSION_GAME_DESCRIPTION, $getGameData);
}
