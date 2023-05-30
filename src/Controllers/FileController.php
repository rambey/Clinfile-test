<?php

namespace Root\Www\Controllers;

use Root\Www\Classes\File;

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
            }
        }

        return null;
    }
}
