<?php
$arr = ["folder1", "qwerty", "postavte5", "kaboom", "watafuke"];
foreach ($arr as $item) {
    $newFolder = "./test/".$item;
    mkdir($newFolder);
}
?>