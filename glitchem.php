<?php
header('Content-Type: image/jpeg');

$url = $_GET['url'];


$string = file_get_contents($url);

$dlina = strlen($string);
$kysok = substr($string, ($dlina/3), rand(500,1000));
$point1 = substr($string, 0, ($dlina/2));
$kolvo = strlen($point1);
$kolvo2 = $dlina - $kolvo;
$point2 = substr($string, ($dlina/2), $kolvo2);

$newstring = $point1.$kysok.$point2;



echo $newstring;
