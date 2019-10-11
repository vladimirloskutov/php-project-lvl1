<?php

/**
 * Актуализировать комментарий перед окончанием проекта
 */

namespace BrainGames\Even;

use function \cli\line;
use function \cli\prompt;

/**
 * Актуализировать комментарий перед окончанием проекта
 */
function run()
{
    line('Welcome to the Brain Game!');
    line('Answer "yes" if the number is even, otherwise answer "no".');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);


}
