<?php
$arr = array("Вафли","Шоколоад","Бонбони","Плодове","Зеленчуци");
$ress = array_map('strlen',$arr);
echo "Най-късия е " . min($ress) .
    "<br>Най-дългия е " . max($ress);