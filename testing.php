<?php
include 'Arr.php';
$arr = new Arr();

$date = new DateTime();
echo 'current date: ' . $date->format('d.m.Y H:i:s') . '<br>';

$arr['day'] = $date->format('d');
$arr['month'] = $date->format('m');
$arr['year'] = $date->format('Y');
var_dump($arr);

$vremya = new DateTime();
$vremya->setDate($arr['year'], $arr['month'], $arr['day']);
$vremya->setTime(0,0,0);
echo $vremya->format('d.m.Y H:i:s');

$interval = new DateInterval('P5M3DT1H40S');

$period = new DatePeriod($vremya, $interval, 5);
$c = -1;
foreach ($period as $datetime) {
    $c=$c+1;
    echo '<br>' . $c . ' intervals later date: ' . $datetime->format('d.m.Y H:i:s');
}




