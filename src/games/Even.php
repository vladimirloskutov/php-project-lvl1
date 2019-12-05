<?php

namespace BrainGames\games\Even;

use function BrainGames\Engine\run as runGame;

const EVEN_GAME_DESCRIPTION = "Answer 'yes' if the number is even, otherwise answer 'no'.";

function isEven($number)
{
    return $number % 2 === 0;
}

function run()
{
    $getGameData = function () {
        $result[] = rand(1, 100);
        $result[] = isEven($result[0]) ? 'yes' : 'no';

        return $result;
    };

    runGame(EVEN_GAME_DESCRIPTION, $getGameData);
}
