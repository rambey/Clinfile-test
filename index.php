<?php
require_once 'vendor/autoload.php';

use Root\Www\Classes\File;
use Root\Www\Controllers\FileController;
use Root\Www\Controllers\FilterController;
use Root\Www\Services\FilterGenerator;


$startingDirectory = '/var/www/tmp/documents';
$fileName = 'universe-formula';
$file = new File($startingDirectory, $fileName);
$fileController = new FileController($file);
$universeFormulaPath = $fileController->locateUniverseFormula($startingDirectory);
echo "le chemnin du fichier est  : " .$universeFormulaPath . PHP_EOL;
echo "<br><br>";
echo "_____________________________________________________________________________________________________";
echo "<br><br>";

$filterController = new FilterController();
$filterGenerator = new FilterGenerator();
$filterGenerator2 = new FilterGenerator();
$jsonPath = 'data/exemple-1.json';
$jsonPath2 = 'data/exemple-2.json';
$jsonContent = file_get_contents($jsonPath);
$jsonContent2 = file_get_contents($jsonPath2);
$filterController->generateFilterAction($filterGenerator,$jsonContent);
echo "<br><br>";
$filterController->generateFilterAction($filterGenerator2,$jsonContent2);
