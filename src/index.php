<?php


use Root\Www\Classes\File;
use Root\Www\Controllers\FileController;

$startingDirectory = '/tmp/documents';
$fileName = 'universe-formula';
$file = new File($startingDirectory , $fileName);
$fileController = new FileController($file);
$universeFormulaPath = $fileController->locateUniverseFormula($startingDirectory);
echo $universeFormulaPath;
echo "\n";
echo "_________________________________________________________";
