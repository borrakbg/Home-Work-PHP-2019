<form action="" method="post">
    <input type="text" name="month">
    <input type="submit" name="send">
</form>

<?php
$month = array( 1 => 'Януари', 2 => 'Февруари', 3 => 'Март', 4 => 'Април', 5 => 'Май', 6 => 'Юни',
7 => 'Юли', 8 => 'Август', 9 => 'Септември', 10 => 'Октомври', 11 => 'Ноември', 12 => 'Демкември');

foreach ($month as $key => $value){
    if (isset($_POST['send'])){
        $mon = $_POST['month'];

        if ($mon == $key){
            echo $value;
        }
    }
}