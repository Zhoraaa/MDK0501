<?php
$message = null;
if (file_exists("./mir.txt")){
    $message .= "mir.txt существует<br>";
} else {
    $message .= "mir.txt не существует<br>";

}
if (file_exists("./folder/world.txt")) {
    $message .= "world.txt существует";
} else {
    $message .= "world.txt не существует";
}
?>
<span><?= $message ?></span>
<br>
<a href="./index.php"><button>Oбратно</button></a>