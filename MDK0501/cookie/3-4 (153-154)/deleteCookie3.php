<?php
setcookie('month','month', time());
unset($_COOKIE['month']);
setcookie('year','year', time());
unset($_COOKIE['year']);
setcookie('10years','10years', time());
unset($_COOKIE['10years']);
header("location: index.php");
?>