<?php

$a = 99999;    //  основний двигун
$b = 99999;  // допоміжні двигуни

if ($a <= $b || $b >= $a) {
  echo 'Перевірка перед стартом';
}
elseif ($b < 0 || $a < 0 || is_float($a) || is_float($b)) {
  echo 'Перевірити на наявність пошкоджень';
}
elseif ($a >= 100 && $b >= 100 && $a <= 1000 && $b <= 1000 && is_int($b) && is_int($a)) {
  echo 'Відбувся відрив від землі';
}
elseif ($a && $b >= 1000 && is_int($b) && is_int($a)) {
  echo 'Відрив від землі пройшов успішно і ракета вийшла на орбіту';
}
elseif ($a >= 1001 && $b <= 0) {
  echo 'Від’єднання допоміжних двигунів';
}
else {
  echo "Ракета не готова до старта";
}
echo '<br>';

switch ($a && $b) {
  case $a <= $b || $b >= $a:
    echo 'Перевірка перед стартом';
    break;
  case $b < 0 || $a < 0 || is_float($a) || is_float($b):
    echo 'Перевірити на наявність пошкоджень';
    break;
  case $a >= 100 && $b >= 100 && $a <= 1000 && $b <= 1000 && is_int($b) && is_int($a):
    echo 'Відбувся відрив від землі';
    break;
  case $a && $b >= 1000 && is_int($b) && is_int($a):
    echo 'Відрив від землі пройшов успішно і ракета вийшла на орбіту';
    break;
  case $a >= 1001 && $b <= 0:
    echo 'Від’єднання допоміжних двигунів';
    break;
  default :
    echo "Ракета не готова до старта";
    break;
}

echo '<br>';

//function name($a = NULL, $b = NULL) {
//  if ($a != NULL && $b != NULL) {
//    if (is_integer($a) && is_integer($b)) {
//      return $a + $b;
//    }
//    return 'Задани не цілі числа';
//  }
//  return 'Змінні не задані';
//}
//
//
//$math = name(293, 857);
//echo $math . '<br>';
//$math = name(2);
//echo $math . '<br>';
//$math = name(293.23, 857);
//echo $math . '<br>';
