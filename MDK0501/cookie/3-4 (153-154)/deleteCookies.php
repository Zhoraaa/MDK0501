<?php
setcookie('year','year', time());
unset($_COOKIE['10years']);
header("location: index.php");
?>