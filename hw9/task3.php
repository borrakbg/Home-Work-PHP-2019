<?php
error_reporting(E_ALL & ~E_NOTICE);
function repeated_element(){
    $array = [2, 11, 2, 3, 0, 2];
    echo '<form method="post" action="">';
    echo '<input type="text" name="numb">';
    echo '<input type="submit" name="send" value="Провери">';
    echo '</form>';
    $array_rep_count = array_count_values($array);
    $userNumb = $_POST['numb'];
    if (isset($_POST['send'])){
        if (array_key_exists($userNumb,$array_rep_count) ){
            foreach ($array_rep_count as $key=>$value){
               if ($userNumb == $key){
                   echo "In array ".json_encode($array)."<br> Number " .$key." repeated ".$value."<br>";
               }
            }
        }elseif (empty($userNumb)){
            echo "Please input number!!!";
        }else{
            echo "Number ".$userNumb. " is not array element";
        }
    }
}

repeated_element();