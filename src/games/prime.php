<?php

/**
 * Актуализировать комментарий перед окончанием проекта
 */

namespace BrainGames\Prime;

use function BrainGames\Engine\run as runGame;

define("DESCRIPTION", 'Answer "yes" if given number is prime. Otherwise answer "no".');

/**
 * Актуализировать комментарий перед окончанием проекта
 */
function run()
{
    $getGameDataFunction = function () {
        $result[] = rand(1, 100);

        if ($result[0] === 1) {
            $result[] = 'no';
        }

        if ($result[0] === 2) {
            $result[] = 'yes';
        }

        for ($i = $result[0] - 1; $i > 2; $i--) {
            if ($result[0] % $i === 0) {
                $result[] = 'no';
                return $result;
            }
        }

        $result[] = 'yes';
        return $result;
    };

    runGame(DESCRIPTION, $getGameDataFunction);
}
