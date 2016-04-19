<?php
if (isset($_GET) && !empty($_GET)) {
  var_dump($_GET);
}
if (isset($_POST) && !empty($_POST)) {
  var_dump($_POST);
}

?>


<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>

<h1> Робота з формами </h1>
<!--<form >-->
<!--  <p><input type="text" name="text"></p>-->
<!---->
<!---->
<!--  <p><input type="radio" name="radio-button" value="1">-->
<!--   <input type="radio" name="radio-button" value="2"></p>-->
<!---->
<!--  <p><input type="checkbox" name="checkbox-button-1"value="1">-->
<!--    <input type="checkbox" name="checkbox-button-2"value="1"></p>-->
<!---->
<!--<p><input type="hidden"name="zzzz"value="zzzz"></p>-->
<!--  <input type="submit" value="Сохранить">-->
<!--  <button type="submit">Сохранить</button>-->
<!--</form>-->


<form method="post">

  <p><input type="text" name="text"></p>


  <p><input type="radio" name="radio-button" value="1">
    <input type="radio" name="radio-button" value="2">
    <input type="radio" name="radio-button" value="3"></p>

  <p><input type="checkbox" name="checkbox-button-1" value="1">
    <input type="checkbox" name="checkbox-button-2" value="1"></p>

  <p><input type="hidden" name="zzzz" value="zzzz"></p>
  <input type="submit" value="Сохранить">
  <button type="submit">Сохранить</button>
</form>
<?php if (isset($_POST) && !empty($_POST)) : ?>
  <p>користувач ввів - <?= $_POST['text']; ?></p>
  <p>користувач вибрав - <?php if ($_POST['radio-button'] === '1') : ?>

      вибрав червону пігулку
    <?php elseif ($_POST['radio-button'] === '2') : ?>

      одуванчик
    <?php else: ?>
      іграшковий паравоз
    <?php endif; ?>
  </p>
  <p>
    Checkbox
    <?php if (isset($_POST['checkbox-button-1'])) : ?>
      Checkbox-button-1 is set
    <?php endif; ?>
    <?php if (isset($_POST['checkbox-button-2'])) : ?>
      Checkbox-button-2 is set
    <?php endif; ?>

  </p>
<?php endif; ?>


</body>
</html>
