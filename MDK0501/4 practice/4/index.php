<?php
function getDivisors($x, $y)
{
    global $dels;
    for ($i = 1; $i <= $x; $i++) {
        if (is_int($del = $x / $i) && is_int($y / $del)) {
            array_unshift($dels, $del);
        }
    }
    return $dels;
}
$x = $_POST['x'];
$y = $_POST['y'];
$dels = array();
getDivisors($x, $y);
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
        <input name="x" id="" cols="30" rows="10" placeholder="Введите число." type="number" />
        <input name="y" id="" cols="30" rows="10" placeholder="Введите число." type="number" />
        <button type="submit">погна</button>
        <?php
        if (!empty($dels)) {
        ?>
            <p> Общие делители чисел <?= $_POST['x'] ?> и <?= $_POST['y'] ?> - это числа
                <?php
                foreach ($dels as $del) {
                    echo $del . ", ";
                }
                ?>
            </p>
        <?php
        }
        ?>
    </form>
    <a href="../"><button>Обратно</button></a>

</body>

</html>