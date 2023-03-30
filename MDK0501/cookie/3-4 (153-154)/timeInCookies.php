<?php
setcookie('month','month', time() + 3600 * 24 * 30);
$_COOKIE['month'] = 'month';
setcookie('year','year', time() + 3600 * 24 * 30 * 365);
$_COOKIE['year'] = 'year';
setcookie('10years','10years', time() + 3600 * 24 * 30 * 365 * 10);
$_COOKIE['10years'] = '10years';
header("Location: index.php");
?>