<?php

/**
 * Актуализировать комментарий перед окончанием проекта
 */

namespace BrainGames\games\Even;

use function BrainGames\Engine\run as runGame;

define("DESCRIPTION", "Answer 'yes' if the number is even, otherwise answer 'no'.");

/**
 * Актуализировать комментарий перед окончанием проекта
 */
function run()
{
    $getGameDataFunction = function () {
        $result[] = rand(1, 100);
        $result[] = ($result[0] % 2 === 0 ? 'yes' : 'no');

        return $result;
    };

    runGame(DESCRIPTION, $getGameDataFunction);
}
