<?php

//замість слова array використовується [ ] скобки також приклад нижче
$test = [
  'один' => '1',
  'два' => 2,
  'три' => '3345',
  'чотири' => 4,
  'п’ять' => 5,
];
//добавляє елементи масива
$test[0] = 12;
$test[1] = 'два';
//добавляє елементи масива без індекса/ ключа
$test[] = 12;
$test[] = 'два';
//змінюємо значення  елементів
$test['три'] = 35;
$test[3] = 2;

// повністю видаляємо елемент из масиву
unset($test['п’ять']);

//print_r($test);
var_dump($test);

//повністю видаляємо масив
unset($test);

echo '<br>';

//змішення ключів типів integer і string. тут використовується слово array
$test1 = array(
  'один' => '1',
  'два' => 2,
  3 => '3345',
  'чотири' => 4,
  7 => 5,
);
print_r($test1);
var_dump($test1);

//доступ до елементів масива
$array = array(
  "foo" => "bar",
  42 => 24,
  "multi" => array(
    "dimensional" => array(
      "array" => "foo",
      'food' => 987,
    ),
  ),
);

var_dump($array{"foo"});
var_dump($array{42});
var_dump($array["multi"]{"dimensional"}["array"], $array["multi"]{"dimensional"}['food']);

function foo() {
  return array(1, 'hello world!', 3);
}
function foo1() {
  return [1, 'hello world!', 3];
}

echo '<p>' . foo()[0] . '</p>';
echo '<p>' . foo()[1] . '</p>';
echo '<p>' . foo()[2] . '</p>';
echo 'Привіт світ' . ' ' . foo()[1] . ' ' . 'Привіт світ';
var_dump(foo());

$food = array(
  'один' => '1',
  'два' => 2,
  'три' => '3345',
  'чотири' => 4,
  'п’ять' => 5,
  8 => 67,
);

var_dump($food['три'], $food{8});


