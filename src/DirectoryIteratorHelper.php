<?php

declare(strict_types=1);

namespace App;

use DirectoryIterator;

class DirectoryIteratorHelper
{
    /**
     * @param string $folder
     * @return DirectoryIterator
     */
    public function creat(string $folder): DirectoryIterator
    {
        return new DirectoryIterator($folder);
    }
}