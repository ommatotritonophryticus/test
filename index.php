<?php
require("commands.php");

foreach($rounds as $round_count => $round) { 
    echo "Круг ".$round_count."\n\n";
    foreach(array_chunk($round, 10) as $tour_count => $tour) {
        echo "Тур ".$tour_count."\n\n";
        foreach($tour as $round) {
            echo $round[0]."-".$round[1]."\n\n";
        }
    }
}