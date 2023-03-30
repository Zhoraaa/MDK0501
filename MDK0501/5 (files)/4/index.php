<?php
$i = file_get_contents('count.txt')+1;
file_put_contents('count.txt', $i);
?>
<br>
<a href="./index.php"><button>Oбратно</button></a>