<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
<?php

$figure = array("Rectangle","Square","Triangle","Circle");
$formula = array('$sideOne*$sideTwo','$sideOne*$sideOne','($sideOne*$sideTwo) /2','$pi*$r*$r');
?>
<table>
    <tr>
        <th><?php echo $figure[0];?></th>
        <td class="color1"><?php echo $formula[0];?></td>
    </tr>
    <tr>
        <th><?php echo $figure[1];?></th>
        <td class="color2"><?php echo $formula[1];?></td>
    </tr>
    <tr>
        <th><?php echo $figure[2];?></th>
        <td class="color3"><?php echo $formula[2];?></td>
    </tr>
    <tr>
        <th><?php echo $figure[3];?></th>
        <td class="color4"><?php echo $formula[3];?></td>
    </tr>
</table>
</body>
</html>