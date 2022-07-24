<?php

declare(strict_types=1);

namespace Test\FolderReader;

use App\DirectoryIteratorHelper;
use DirectoryIterator;
use PHPUnit\Framework\TestCase;

class DirectoryIteratorHelperTest extends TestCase
{
    /** @var DirectoryIteratorHelper  */
    private $directoryIteratorHelper;

    protected function setUp(): void
    {
        $this->directoryIteratorHelper = new DirectoryIteratorHelper();
    }

    public function testCreat()
    {
        $dirName =__DIR__;
        $result = $this->directoryIteratorHelper->creat($dirName);

        self::assertInstanceOf(DirectoryIterator::class, $result);
    }
}