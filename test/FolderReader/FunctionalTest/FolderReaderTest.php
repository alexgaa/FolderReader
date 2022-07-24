<?php

declare(strict_types=1);

namespace Test\FolderReader\FunctionalTest;

use App\DirectoryIteratorHelper;
use App\FolderReader;
use PHPUnit\Framework\TestCase;

class FolderReaderTest  extends TestCase
{
    /** @var FolderReader  */
    private $folderReader;
    private $dirName;

    protected function setUp(): void
    {
        parent::setUp();
        $this->dirName = dirname(__DIR__, 1);

        $this->folderReader = new FolderReader(new DirectoryIteratorHelper());
    }

    public function testReadFile()
    {
        $result =  $this->folderReader->readFile($this->dirName);

        $exampleValue = $this->dirName . __FILE__;

        self::assertIsArray($result , $exampleValue);
    }
}