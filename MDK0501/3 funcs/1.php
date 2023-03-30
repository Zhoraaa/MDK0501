<!-- 24.01 -->
<?php
function getSqrtSum($arr){
    $sum = 0;
    foreach($arr as $elem){
        $sum += sqrt($elem);
    }
    return $sum;
}
$arr = [16,25];
echo getSqrtSum($arr);
?>