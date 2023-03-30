<?php
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];

$D = $b ** 2 - 4 * $a * $c;

switch ($D) {
    case ($D < 0):
        $answ = "Нет действительных корней";
        break;
    case ($D = 0):
        $answ = $b * -1 / ($a * 2);
        break;
    case ($D > 0):
        $answ = ($b*-1+sqrt($D))/($a*2);
        $answ2 = ($b*-1-sqrt($D))/($a*2);
        break;
}
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3адание</title>
</head>

<body>
    <form action="#" method="post">
        <input name="a" id="" cols="30" rows="10" placeholder="Введите число a (X^2)" type="number" />
        <input name="b" id="" cols="30" rows="10" placeholder="Введите число b (X)" type="number" />
        <input name="c" id="" cols="30" rows="10" placeholder="Введите число c" type="number" />
        <button type="submit">погна</button>
    </form>
    <p>Ответ: <?= $answ ?>, <?= $answ2 ?></p>
    <br>
    <a href="../"><button>Oбратно</button></a>
</body>

</html>