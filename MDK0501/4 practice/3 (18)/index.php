<?php
function getDivisors($x)
{
    global $dels;
    for ($i = 1; $i <= $x; $i++) {
        $del = $x / $i;
        if (is_int($del)) {
            array_unshift($dels, $del);
        }
    }
    return $dels;
}
$x = $_POST['x'];
$dels = array();
getDivisors($x);
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
        <button type="submit">погна</button>
        <?php
        if (!empty($dels)) {
        ?>
        <p>Делители числа <?= $_POST['x'] ?> - это числа
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