<?php
// $c = $_POST['celsium'];
// echo $c * 9 / 5 + 32;
    $c = $_POST['c'];
    $c = round($c * 1.8 + 32, 1);
    header("Location: index.php?f=".$c)
?>