<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculations</title>
</head>
<body>

<h4>Rectangle</h4>
<?php
$sideOne = 10;
$sideTwo = 25;
$result = $sideOne*$sideTwo;

echo $result;
?>
<hr />

<h4>Square</h4>
<?php
$sideOne = 30;
$result = $sideOne*$sideOne;

echo $result
?>
<hr />
<h4>Triangle</h4>
<?php
$sideOne = 15;
$sideTwo = 30;
$result = ($sideOne*$sideTwo) /2;

echo $result;
?>
<hr />
<h4>Circle</h4>
<?php
$r = 25;
$pi = 3.14;
echo $pi*$r*$r;
?>
</body>
</html>

