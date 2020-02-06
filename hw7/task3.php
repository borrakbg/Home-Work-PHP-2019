<table border="1">
<?php

for ($i=1; $i<=10; $i++){
    echo "<tr>";
    for ($j=1; $j<=$i; $j++){
        ?>
        <td colspan="<?php echo $j;?>">
        <?php
        $sum = $i*$j;
        echo $i."*".$j."=".$sum;
        echo "</td>";
    }
    echo "</tr>";
}


?>
</table>