<?php

$states = include('states.php');

foreach($states as $state) {
    echo sprintf("## %s\n\n", $state['state']);
    echo sprintf("[informationsseite](%s)\n\n", $state['info']);

    if (count($state['cases']) > 0) {

        echo "Fallzahlen:\n\n";

        foreach($state['cases'] as $case) {
            echo sprintf("- [%s](%s)\n", $case['comment'], $case['url']);
        }
    } else {
        echo "Keine Fallzahlen?";
    }
    echo "\n\n";
}
