<?php
$string = "Take a shot";
$search = array("a","t","e","s");
$release = array("u","v","o","p");
$result = str_replace($search,$release,$string);
echo $result;

echo "<hr />";
?>
<form method="post" action="">
    <input type="text" name="txt">
    <input type="submit" name="send" value="Go">
</form>
<?php

