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

<form action="" method="post">
    <input type="submit" name="random" value="Генериране на число">
</form>

<?php
if (isset($_POST['random'])){
    $random = rand(-100,100);
    echo $random;
}else{
    echo "Моля натиснете бутона за генериране на число";
}
?>
</body>
</html>