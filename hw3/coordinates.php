<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$x1 = 20;
$x2 = 80;
$x3 = 10;

$y1 = 10;
$y2 = 90;
$y3 = 80;

$area = (($x1*$y2) + ($x2*$y3) + ($x3*$y1) - ($x1*$y3)-($x2*$y1)-($x3*$y2))/2;

echo $area;

?>
</body>
</html>