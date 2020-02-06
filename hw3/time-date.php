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
<h4>България</h4>

<?php

date_default_timezone_set('Europe/Sofia');
echo date('l, jS, F H:i');

?>

<h4>Сидни/Австралия</h4>

<?php
date_default_timezone_set('Australia/Sydney');
echo date('l, jS, F H:i');
?>

</body>
</html>