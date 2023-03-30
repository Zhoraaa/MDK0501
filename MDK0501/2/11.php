<?php
$newArr = array();
for ($x=0; $x<100; $x++){
    global $array;
    $array[] = rand(0, 300);
}

foreach ($array as $key=>$item){
    if (strpos($item, '5') !== false) {
        array_push($newArr, $item);
    }
}
echo'<pre>';
print_r($newArr);
echo'</pre>';
?>