<?php

    $numbers = [];

    while (count($numbers) < 15) {
        $randomNumb = rand(1,100);

        if(!in_array($randomNumb, $numbers)) {
            $numbers[] = $randomNumb;
        }
    }

    var_dump($numbers);

?>