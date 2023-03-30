<?php
$x = $_POST['num1'];
$y = $_POST['num2'];
if($x-$y>=100 or $y-$x>=100){echo 'Да';} else {
    echo 'Нет';}
?>