<?php declare(strict_types=1);

define('ROOT_DIR', dirname(__DIR__));
require ROOT_DIR . '/vendor/autoload.php';

\Tracy\Debugger::enable();

echo 'Привет из загрузочного файла :)';