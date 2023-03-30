<!-- 24.01 -->
<?php
$choise = $_POST['x'];
$array = array(0,1,2,3,4,5,6,7,8,9);
function delElem(){
    global $array;
    global $choise;
    foreach ($array as $key => $item){
        if($item == $choise){
            unset($array[$key]);
        }
    }
    return $array;
}

var_dump(delElem());
?>