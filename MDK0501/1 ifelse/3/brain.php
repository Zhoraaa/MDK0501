<?php
$i = $_POST['my_num'];
if($i>=50){echo $i**2;}
elseif(10<$i&$i<30){echo '0';}
else{echo 'Ошибка';}
?>