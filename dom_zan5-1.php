<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Калькулятор</title>
</head>
<body>
<H1>Калькулятор</H1>
<form method="post">
  Введіть число 1<input type="text" name="a" value=""><br><br>
  <input type="radio" name="operation" value="+">додавання
  <input type="radio" name="operation" value="-">віднімання
  <input type="radio" name="operation" value="*">множення
  <input type="radio" name="operation" value="/">ділення<br><br>
  Введіть число 2<input type="text" name="b" value=""><br><br>
  <input type="submit" value="Вирахувати">
  <input type="reset" value="Відміна">
  <?php
  if (!empty($_POST)) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $radio = $_POST['operation'];
  }
  function calculator($a, $radio, $b) {
    if ($radio == '+') {
      $c = $a + $b;
      echo "додавання {$a} + {$b} = {$c}";
    }
    elseif ($radio == '-') {
      $d = $a - $b;
      echo "віднімання  {$a} - {$b} = {$d} ";
    }
    elseif ($radio == '*') {
      $e = $a * $b;
      echo "множення {$a} * {$b} = {$e} ";
    }
    elseif ($radio == '/') {
      if ($a == 0 || $b == 0) {
        echo "ділити на нуль не можна";
      }
      else {
        $f = $a / $b;
        echo "ділення  {$a} / {$b} = {$f} ";
      }
    }
    else {
      echo "Невідома операція";
    }
  }

  echo '<br><br>';
  $result = calculator($a, $radio, $b);
  echo '<br><br>';

  switch ($radio) {
    case '+':
      $c = $a + $b;
      echo "додавання {$a} + {$b} = {$c}";
      break;
    case '-':
      $d = $a - $b;
      echo "віднімання {$a} - {$b} = {$d}";
      break;
    case '*':
      $e = $a * $b;
      echo "множення {$a} * {$b} = {$e}";
      break;
    case '/':
      if ($a == 0 || $b == 0) {
        echo "ділити на нуль не можна";
      }
      elseif ($f = $a / $b) {
        echo "ділення  {$a} / {$b} = {$f} ";
      }
      break;

    default :
      echo "Невідома операція";
  }
  ?>
</form>
</body>
</html>
