<?php

include "autoload.php";

use math\Translate as Math;
use word\Translate as Word;

$math = new Math(1111111111111111111);
$word = new Word('Hello');

echo 'Число ' . $math->number . ' в двоичной ==> ' . $math->fornum() . ' в десятичной';
echo '<br>';
echo $word->forhello();