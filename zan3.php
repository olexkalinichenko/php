<?php

$arrayInt = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14];
$arrayStr = [
  'menu1' => 'http://php.net',
  'menu2' => 'http://php.net',
  'menu3' => 'http://php.net',
  'menu4' => 'http://php.net',
  'menu5' => 'http://php.net',
];

$countArrayInt = count($arrayInt);

//for ($i = 0; $i < $countArrayInt; $i++) {
//  echo $arrayInt[$i] * 5 . '<br>';
//}
//$arrayInt[5]*= 5;
//echo '<ul>';
//foreach ($arrayInt as $key => $value){
//  echo '<li>'. $value *5 .'</li>';
// // echo $key.' - '. $value*5 .'<br>' ;
//}
//echo '</ul>';
$arrayEmpty = [];
$arrayEmpty[] = 2;
$arrayEmpty[] = 6;
$arrayEmpty[] = 9;
$arrayEmpty['jdfhjdmh'] = '9';

$arrayEmpty[7] = [2,3,4,5];
$arrayEmpty[] = ['dhfj','ysgdh','udfjh'];


//var_dump($arrayEmpty); die;
$a = 3;
$b = 2;

if ($a < 1||$b > 5){
  echo 'true';
}elseif ($b < 5){
  echo '$b < 5';
}
else{
  echo 'false';
}
echo '<br>';

switch ($a){
  case 3 : echo 'a = 3'; break;
  case 4 : echo 'a = 4'; break;
  case 5 : echo 'a = 5'; break;
  case 6 : echo 'a = 6'; break;
  default : echo 'Нет совпадения'; break;
}


?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
<ul>
  <?php foreach ($arrayInt as $key => $value) : ?>

    <li><?= $value * 5 ?></li>
  <?php endforeach; ?>
</ul>

<H1>menu</H1>
<ul>
  <?php foreach ($arrayStr as $key => $value) : ?>

    <li><a href="<?= $value ?>"><?= $key ?></a></li>
  <?php endforeach; ?>
</ul>


</body>
</html>
