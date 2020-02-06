<form action="" method="post">
Въведи числа:<input type="text" name="numbs" placeholder="1332,4655,7988">
<input type="submit" name="send" value="Изпрати">
</form>
<?php
if (isset($_POST['send'])){
    $numbs = $_POST['numbs'];
    $ress = explode(",",$numbs);
    for ($i = 0; $i<=count($ress); $i++){
        var_dump($ress);
    }
}