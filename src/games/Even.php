<?php

namespace BrainGames\games\Even;

use function BrainGames\Engine\run as runGame;

function isEven($number)
{
    return $number % 2 === 0;
}

function run()
{
    $getGameDataFunction = function () {
        $result[] = rand(1, 100);
        $result[] = isEven($result[0]) ? 'yes' : 'no';

        return $result;
    };

    runGame("Answer 'yes' if the number is even, otherwise answer 'no'.", $getGameDataFunction);
}
