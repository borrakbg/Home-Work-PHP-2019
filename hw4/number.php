<form action="" method="post">
    <input type="number" name="first"><br />
    <input type="number" name="second"><br />
    <input type="number" name="three"><br />

    <input type="submit" name="send">
</form>
<?php
if (isset($_POST['send'])){
    $first = $_POST['first'];
    $second = $_POST['second'];
    $three = $_POST['three'];

    if (!empty($first) && !empty($second) && !empty($three)){
        echo $three." ".$second." ".$first ;
    }else{
        echo "Моля попълнете всички полета";
    }

}