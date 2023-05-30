<?php

namespace Root\Www\Controllers;

use Root\Www\Services\FilterGenerator;

class FilterController
{

    public function generateFilterAction(FilterGenerator $filterGenerator, $jsonData)
    {
        $data = json_decode($jsonData, true);
        $filter = $filterGenerator->generateFilter($data);
        echo "Exemple: ($filter)" . PHP_EOL;
    }
}
