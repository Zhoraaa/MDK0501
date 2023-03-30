<?php
$getInfo = $_POST['cookie']?$_POST['cookie']:"Вы ничего не записали";
setcookie("getInfo", "$getInfo");
header("Location: ./getCookie.php");
exit();