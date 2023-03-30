<html lang="ru">
<?php
if ($_POST['a'] > $_POST['b'] && $_POST['a'] > $_POST['c']) :
    $max = $_POST['a'];
    $x = $_POST['b'];
    $y = $_POST['c'];
elseif ($_POST['b'] > $_POST['a'] && $_POST['b'] > $_POST['c']) :
    $max = $_POST['b'];
    $x = $_POST['a'];
    $y = $_POST['c'];
elseif ($_POST['c'] > $_POST['a'] && $_POST['c'] > $_POST['b']) :
    $max = $_POST['c'];
    $x = $_POST['a'];
    $y = $_POST['b'];
endif;

$answ = ($x ** 2 + $y ** 2 == $max ** 2) ? "Пифагорическая тройка" : "Пифагорическая депреся";
?>

<form action="#" method="post">
    <input name="a" id="" cols="30" rows="10" placeholder="Введите число a" type="number" />
    <input name="b" id="" cols="30" rows="10" placeholder="Введите число b" type="number" />
    <input name="c" id="" cols="30" rows="10" placeholder="Введите число c" type="number" />
    <button type="submit">погна</button>
</form>
<p>Ответ: <?= $answ ?></p>
<br>
<a href="./"><button>Oбратно</button></a>