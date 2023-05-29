<?php

namespace Root\Www\Classes;

class File
{
    private $filePath;
    private $fileName;

    /**
     * @param $filePath
     * @param $fileName
     */
    public function __construct($filePath, $fileName)
    {
        $this->filePath = $filePath;
        $this->fileName = $fileName;
    }


    public function getFilePath()
    {
        return $this->filePath;
    }

    public function setFilePath($filePath)
    {
        $this->filePath = $filePath;
    }

    public function getFileName()
    {
        return $this->fileName;
    }

    public function setFileName($fileName): void
    {
        $this->fileName = $fileName;
    }

}
