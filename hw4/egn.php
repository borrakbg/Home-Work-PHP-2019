<form action="" method="post">
    <input type="text" name="one" size="2">
    <input type="text" name="two" size="2">
    <input type="text" name="three" size="2">
    <input type="text" name="four" size="2">
    <input type="text" name="five" size="2">
    <input type="text" name="six" size="2">
    <input type="text" name="seven" size="2">
    <input type="text" name="eight" size="2">
    <input type="text" name="nine" size="2">

    <input type="submit" name="send">
</form>
<?php
if (isset($_POST['send'])){
    $first = $_POST['one'];
    $second = $_POST['two'];
    $three = $_POST['three'];
    $four = $_POST['four'];
    $five = $_POST['five'];
    $six = $_POST['six'];
    $seven = $_POST['seven'];
    $eight = $_POST['eight'];
    $nine = $_POST['nine'];

    echo "Your Number is: " .$first. " " .$second. " " .$four. " " .$five. " " .$six. " " .$seven . " " .$eight . " " .$nine."<br />";

        $sum = $first*2 + $second*4 + $three*8 + $four*5 + $five*10 + $six*9 + $seven*7 + $eight*3 + $nine*6;
        $nextSum = $sum/11;
        $format = (int)$nextSum;
        $lastNum = $sum - 11*$format;
        echo "Your last number is: ".$lastNum;
}

