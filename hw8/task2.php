<?php
$arr = [];
$m = 4;
$n = 5;
$num = 1;
for( $i=0; $i<$m; $i++){
    $arr[$i] = [];
    for($j=0; $j<$n; $j++){

        $arr[$i][$j] =$num+=2;
    }
}

var_dump($arr);

echo "<table border=1>";
for($row = 0; $row < $m; $row++){
    echo  "<tr>";
    for($col=0; $col < $n; $col++){
        echo "<td>" . $arr[$row][$col] . "</td>";
    }
    echo "</tr>";
}
echo "</table>";