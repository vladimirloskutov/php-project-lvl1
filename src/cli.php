<?php

/**
 * Актуализировать комментарий перед окончанием проекта
 */

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

/**
 * Актуализировать комментарий перед окончанием проекта
 */
function run()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
}
