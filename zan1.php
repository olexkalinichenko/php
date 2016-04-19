<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Урок 1</title>
</head>
<body>
<!--заголовок-->
<h1>
  Урок 1
</h1>
<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto
  aspernatur deserunt est et eveniet hic ipsam labore modi molestias natus, odio
  odit, porro repellendus soluta velit. Non quod saepe sequi.</p>
<h2>
  Урок1
</h2>
<p>
  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem blanditiis
  impedit itaque, laborum mollitia natus perspiciatis quia. Assumenda,
  consequuntur ducimus iste nam numquam perspiciatis, quam quas quidem
  reprehenderit rerum voluptates?
</p>
<h3>Список</h3>
<ul>

  <li>список1</li>
  <li>список2</li>
  <li>список3</li>
  <li>список4</li>
  <li>список5</li>
  <li>список6</li>

</ul>
<a href="test.html">test link</a>
<a href="http://php.net">Домашне завдання Целые числа
  Числа с плавающей точкой
  Строки </a>
<h3>
  Меню

</h3>
<a href="http://docs.emmet.io/cheat-sheet/">Підказки для html</a>

<?php

echo "<h3>Hello world</h3> ";
echo '<h4>Hello world</h4> ';

$text = 'djfld;flcp;dl';//текст

$int = 1; // целе чісло
$float = 1.3; // чісло з плаваючою точкой

echo "<h3>$text</h3> ";

echo '<h4>' . $text . ' </h4> ';

?>


</body>
</html>
