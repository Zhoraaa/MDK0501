<html lang="ru">
<?php
function getFile($name){
ob_start();
include($name);
return ob_get_clean();
}
echo getFile("2.txt");
?>

<br>
<a href="./"><button>Обратно</button></a>