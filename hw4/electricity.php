<?php
$kw=302;
$step1=50;
$step2=100;
$step3=100;
$prize_step1=0.1;
$prize_step2=0.15;
$prize_step3=0.25;
$prize_step4=0.35;
$prize=NULL;
$DDS=1.2;
$kw_step4=NULL;
$kw_step1=NULL;
$kw_step2=NULL;
$kw_step3=NULL;
if ($kw<$step1){
	$kw_step1=$kw;
	$prize=$kw*$prize_step1*$DDS;
	}
elseif ($kw<($step1+$step2))
{$kw_step1=$step1;
$kw_step2=$kw-$step1;
$prize=(($kw_step1*$prize_step1)+($kw_step2*$prize_step2))*$DDS;}
elseif ($kw<($step1+$step2+$step3))
{$kw_step3=$kw-$step1-$step2;
	$kw_step1=$step1;
	$kw_step2=$step2;
	$prize=(($kw_step1*$prize_step1)+($kw_step2*$prize_step2)+($kw_step3*$prize_step3))*$DDS;}
else 
	{$kw_step4=$kw-$step1-$step2-$step3;
	$kw_step1=$step1;
	$kw_step2=$step2;
	$kw_step3=$step3;
	$prize=(($kw_step1*$prize_step1)+($kw_step2*$prize_step2)+($kw_step3*$prize_step3)+($kw_step4*$prize_step4))*$DDS;}
echo "<p>"."потербление: ".$kw." kW/h"."</p>";
echo "<p>"."сума: ".number_format($prize,2)." лв с ДДС"."</p>";