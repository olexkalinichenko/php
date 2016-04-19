<?php

//$i = 1;
//$sum = 0;
//while ($i <= 112){
//  $sum = $sum + $i;
//  $i = $i + 3;
//}
//echo $sum ;

//$sum = 0;
//for ($i = 1; $i <= 112; $i = $i + 3){
//  $sum = $sum + $i;
//}
//echo $sum ;
//
//for ($i = 1; $i <=100; $i++){
//
//}
//
//if ($i % 2 == 0){

//}
/*
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
<?php for ($i = 1; $i <=100; $i++) :?>
<?php if ($i % 2 == 0) : ?>
    <div style="background-color: #e1e1e1;"><?= $i; ?> </div>
  <?php  else : ?>
    <div><?= $i;?> </div>

<?php endif;?>
<?php endfor;?>

</body>
</html>
*/

//function nameFunction(){
//echo 'iudjfcolaiskfol';
//}
////nameFunction();
//function nameFunction1($name){
//  $name = strtolower($name);
////  $name = strtoupper($name);
//  $name = ucfirst($name);
//  $name = ucwords($name);
//echo 'iudjfcolaiskfol -'.  $name. '<br>';
//}
//nameFunction1('Sasha zxc');
//nameFunction1('Alex cvb');
//nameFunction1('Ganna vnn');
//function mat($a,$b){
//
//  return $a + $b;
//}
//$math = mat(44,84);
//echo $math;

function name($a = null,$b= null){
  if($a != null && $b != null){
    if(is_integer($a) && is_integer($b) ){
      return $a+$b;
    }
    return 'Задани не цілі числа';
  }
  return 'Змінні не задані';
}
$math = name(293,857);
echo $math. '<br>';
$math = name(2);
echo $math. '<br>';
$math = name(293.23,857);
echo $math. '<br>';



?>

