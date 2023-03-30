<?php
$arr = array(
    '1.txt' => '0',
    '2.txt' => '0',
    '3.txt' => '0'
);
foreach($arr as $key => $value){
    $value = file_get_contents($key);
    $arr[$key] = $value;
    // echo $key, ' => ', $value, ' <br>';
}
// var_dump($arr);
file_put_contents('new.txt', $arr);
?>
<br>
<a href="./index.php"><button>Oбратно</button></a>