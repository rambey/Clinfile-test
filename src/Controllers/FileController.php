<?php

namespace Root\Www\Controllers;

use Root\Www\Classes\File;
use Root\Www\Exceptions\FileException;

class FileController
{
    private File $file;

    /**
     * @param File $file
     */
    public function __construct(File $file)
    {
        $this->file = $file;
    }

    public function locateUniverseFormula($directory): ?string
    {
        try {
            if (!is_dir($directory)) {
                throw FileException::directoryNotFound($directory);
            }
            $files = scandir($directory);
            foreach ($files as $file) {
                if ($file === '.' || $file === '..') {
                    continue;
                }
                $path = $directory . '/' . $file;
                if (is_dir($path)) {
                    $result = $this->locateUniverseFormula($path);
                    if ($result !== null) {
                        return $result;
                    }
                } elseif ($file === $this->file->getFileName()) {
                    return $path;
                } else {
                    throw FileException::fileNotFound($directory);
                }
            }
        } catch (FileException $e) {
            return $e->toJsonResponse();
        }
        return null;
    }
}
