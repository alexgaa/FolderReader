<?php

declare(strict_types=1);

use App\DirectoryIteratorHelper;
use App\FolderReader;

include_once __DIR__.'/vendor/autoload.php';

$test = new FolderReader(new DirectoryIteratorHelper());

$listFile = $test->readFile(dirname(__FILE__));

foreach ($listFile as $fileName )
{
    echo $fileName . PHP_EOL;
}

