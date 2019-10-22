<?php

/**
 * Актуализировать комментарий перед окончанием проекта
 */

namespace BrainGames\Progression;

use function BrainGames\Engine\run as runGame;

const DESCRIPTION = 'What number is missing in the progression?';

/**
 * Актуализировать комментарий перед окончанием проекта
 */
function run()
{
    $getGameDataFunction = function () {
        $firstMember = rand(1, 100);
        $difference = rand(1, 10);
        $progression[] = $firstMember;

        $lengthOfProgression = 10;

        for ($i = 1; $i < $lengthOfProgression; $i++) {
            $progression[] = $progression[$i - 1] + $difference;
        }

        $randomKey = array_rand($progression);
        $result[1] = $progression[$randomKey];
        $progression[$randomKey] = '..';
        $result[0] = implode(' ', $progression);

        return $result;
    };

    runGame(DESCRIPTION, $getGameDataFunction);
}
