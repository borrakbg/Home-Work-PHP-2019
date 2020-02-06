<form method="post" action="">
    <input type="text" name="numb" size="4">
    <input type="submit" name="send">
</form>
<?php

$myNumb = 7;

if (isset($_POST['send'])){
    $numb = $_POST['numb'];

    if ($numb == $myNumb){
        echo "Познахте!!! Числото е: ".$myNumb;
    }elseif ($numb < $myNumb){
        echo "По-малко е от моето!!! Числото е: ".$myNumb;
    }elseif ($numb > $myNumb){
        echo "По - голямо е от моето!!! Числото е: ".$myNumb;
    }

}else{
    echo "Моля въведете число!!!";
}