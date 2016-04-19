<?php

$test = 'вісім';
$var = 'десять';
$int = 123;
$int1 = 456;
$f = 12.32;
echo '<p>' . $test . '</p>';
echo $var;
echo '<p>' . $int . ',' . $f . '</p>';

$plus = $int + $int1;
$minus = $int - $int1;
$um = $int * $int1;
$del = $int / $int1;

echo '<p>плюс =' . $plus . '</p>';
echo '<p>мінус =' . $minus . '</p>';
echo '<p>множення =' . $um . '</p>';
echo '<p>ділення =' . $del . '</p>';

$ost = $int1 % $int;
echo $ost;

