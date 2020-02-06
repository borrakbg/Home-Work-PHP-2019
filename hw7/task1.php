<?php
$arr = array();
for($i=1;$i<=20;$i++){
    array_push($arr,$i*5);
}
echo "<pre>";
print_r($arr);
echo "</pre>";