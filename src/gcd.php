<?php

/**
 * Актуализировать комментарий перед окончанием проекта
 */

namespace BrainGames\Gcd;

use function BrainGames\Engine\run as runGame;

const DESCRIPTION = 'Find the greatest common divisor of given numbers.';

/**
 * Актуализировать комментарий перед окончанием проекта
 */
function run()
{
    $getGameDataFunction = function () {
        $numbers[] = rand(1, 100);
        $numbers[] = rand(1, 100);

        $result[] = "{$numbers[0]} {$numbers[1]}";

        if ($numbers[0] > $numbers[1]) {
            $maxNumber = $numbers[0];
            $minNumber = $numbers[1];
        } else {
            $maxNumber = $numbers[1];
            $minNumber = $numbers[0];
        }

        for ($i = $minNumber; $i > 0; $i--) {
            if ($maxNumber % $i === 0 && $minNumber % $i === 0) {
                $result[] = $i;
                break;
            }
        }

        return $result;
    };

    runGame(DESCRIPTION, $getGameDataFunction);
}
