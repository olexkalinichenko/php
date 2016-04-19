<html>
<head>
  <title>Калькулятор</title>
</head>
<Body>
<h1>Калькулятор</h1>
<form method="post">
  Введіть число 1<input type="text" name="a" value=""><br><br>
  <input type="radio" name="operation" value="+">додавання
  <input type="radio" name="operation" value='-'>віднімання
  <input type="radio" name="operation" value='*'>множення
  <input type="radio" name="operation" value='/'>ділення<br><br>
  Введіть число 2<input type="text" name="b" value=""><br><br>
  <input type="submit" value='Вирахувати'>
  <input type="reset" value='Відміна'>
</form>

<?php

if (!empty($_POST)) {
  $a = $_POST['a'];
  $b = $_POST['b'];
  $radio = $_POST['operation'];

  if ($radio == '+') {
    $c = $a + $b;
    echo "додавання {$a} + $b = $c";
  }
  elseif ($radio == '-') {
    $d = $a - $b;
    echo "віднімання  $a - $b = $d " ;
  }
  elseif ($radio == '*') {
    $e = $a * $b;
    echo "множення $a * $b = $e ";
  }
  elseif ($radio == '/') {
    if ($a == 0 || $b == 0) {
      echo 'ділити на нуль не можна';
    }
    else {
      $f = $a / $b;
      echo "ділення  $a / $b = $f ";
    }
  }
}

?>
</Body>
</html>
