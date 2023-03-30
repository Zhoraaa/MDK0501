<?php
$x = $_POST['x'];
$i = 1;
$array = array();
if (empty($x)) {
    $i = "Вы ничего не ввели.";
} else {

    do {
        array_unshift($array, $x);
        $x--;
    } while ($x > 0);

    foreach ($array as $item) {
        $i = $i * $item;
    }
}
header("location: index.php?x=" . $_POST['x'] . "&answer=" . $i);
