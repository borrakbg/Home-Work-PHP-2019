<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$students = [
        ['name'=>'Pesho Peshev Peshev', 'English'=>5,'Mathematics'=>5,'IT'=>6,'Sport'=>5, 'rating'=>$rating1],//arr 0
        ['name'=>'Toshko Cvetanov Tanchev', 'English'=>3,'Mathematics'=>4,'IT'=>6,'Sport'=>6,'rating'=>$rating2], //arr 1
        ['name'=>'Miroslav Cvetanov Tanchev', 'English'=>5,'Mathematics'=>5,'IT'=>6,'Sport'=>4, 'rating'=>$rating3], //arr 2
        ['name'=>'Vanesa Nikolova Lilova', 'English'=>5,'Mathematics'=>3,'IT'=>6,'Sport'=>5, 'rating'=>$rating4], //arr 3
        ['name'=>'Tihomir Petrov Jordanov', 'English'=>5,'Mathematics'=>6,'IT'=>6,'Sport'=>3, 'rating'=>$rating5], // arr 4
];

$rating1 = 0;
$rating2 = 0;
$rating3 = 0;
$rating4 = 0;
$rating5 = 0;

$rating=[
    $rating1 += ($students[0]['English']+$students[0]['Mathematics']+$students[0]['IT']+$students[0]['Sport'])/4,
    $rating2 += ($students[1]['English']+$students[1]['Mathematics']+$students[1]['IT']+$students[1]['Sport'])/4,
    $rating3 += ($students[2]['English']+$students[2]['Mathematics']+$students[2]['IT']+$students[2]['Sport'])/4,
    $rating4 += ($students[3]['English']+$students[3]['Mathematics']+$students[3]['IT']+$students[3]['Sport'])/4,
    $rating5 += ($students[4]['English']+$students[4]['Mathematics']+$students[4]['IT']+$students[4]['Sport'])/4
];

for($j=0; $j<count($students);){
    $students[$j]['rating'] = $rating[$j];
    $j++;
}

$avg_rating = ($rating[0]+$rating[1]+$rating[2]+$rating[3]+$rating[4])/5;

echo "<table border='1'>";
for ($i = 0; $i<count($students); $i++){
    echo "<tr>";
    foreach ($students[$i] as $key=>$value){
        echo "<td>". $key ." - ".$value."</td>";
    }
    echo "</tr>";
}
echo "<tr><td>Среден успех: ".$avg_rating."</td></tr>";
echo "<tr><td>Най-добър успех има: ".max($rating)."</td></tr>";
echo "</table>";


//var_dump($students);




