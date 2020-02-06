<?php

function print_array()
{
    $myArr = [
        ['blue' => 'Blue', 'black' => 'Black', 'red' => 'Red'],
        ['vr' => 'Vratsa', 'mz' => 'Mezdra', 'mnt' => 'Montana'],
    ];

    echo json_encode($myArr);

    for ($i=0; $i<count($myArr); $i++){
        echo "<br>";
        foreach ($myArr[$i] as $key=>$value){
            echo $key ." - ". $value."<br>";
        }
    }

}

print_array();