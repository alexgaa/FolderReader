<?php

declare(strict_types=1);

namespace App;

class FolderReader
{
    /** @var DirectoryIteratorHelper  */
    private $directoryIteratorHelper;

    /**
     * @param DirectoryIteratorHelper $directoryIteratorHelper
     */
    public function __construct(DirectoryIteratorHelper $directoryIteratorHelper)
    {
        $this->directoryIteratorHelper = $directoryIteratorHelper;
    }

    /**
     * @param string $folder
     * @return array
     */
    public function readFile(string $folder): array
    {
        $resultListFile = [];
        $directoryIterator = $this->directoryIteratorHelper->creat($folder);
        foreach ($directoryIterator as $directoryValue){
            if(!$directoryValue->isDot()){
                if(!$directoryValue->isDir()){
                    $resultListFile[] = $directoryValue->getPathname();
                } else {
                    $tempResult = $this->readFile($directoryValue->getPathname());
                    $resultListFile = array_merge($resultListFile, $tempResult);
                }
            }
        }
        return $resultListFile;
    }
}