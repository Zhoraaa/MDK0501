<!-- 24.01 -->
<?php
function getDivisors($x){
    global $dels;
    for ($i = 1; $i<=$x; $i++) {
        $del = $x / $i;
        if(is_int($del)){array_unshift($dels, $del);}
    }
    return $dels;
}
$x=$_POST['x'];
$dels = array();
getDivisors($x);
var_dump($dels);
?>