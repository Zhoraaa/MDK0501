<?php
setcookie('10years','10years', time());
unset($_COOKIE['10years']);
header("location: index.php");
?>