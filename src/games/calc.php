<?php

/**
 * Актуализировать комментарий перед окончанием проекта
 */

namespace BrainGames\games\Calc;

use function BrainGames\Engine\run as runGame;

define("DESCRIPTION", "What is the result of the expression?");

/**
 * Актуализировать комментарий перед окончанием проекта
 */
function run()
{
    $getGameDataFunction = function () {
        $numbers[] = rand(1, 100);
        $numbers[] = rand(1, 100);
        $operators = ['+', '-', '*'];
        $operation = array_rand($operators, 1);

        switch ($operators[$operation]) {
            case '+':
                $result[] = "{$numbers[0]} {$operators[$operation]} {$numbers[1]}";
                $result[] = $numbers[0] + $numbers[1];
                break;
            case '-':
                $result[] = "{$numbers[0]} {$operators[$operation]} {$numbers[1]}";
                $result[] = $numbers[0] - $numbers[1];
                break;
            case '*':
                $result[] = "{$numbers[0]} {$operators[$operation]} {$numbers[1]}";
                $result[] = $numbers[0] * $numbers[1];
                break;
        }

        return $result;
    };

    runGame(DESCRIPTION, $getGameDataFunction);
}
