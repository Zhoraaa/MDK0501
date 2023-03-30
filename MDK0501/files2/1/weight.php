<?php
$w = filesize("./folder/world.txt");
?>
<p><?php echo $w . " B" ?></p>
<p><?php echo round($w / 1024, 3) . " MB" ?></p>
<p><?php echo round($w / 1024 / 1024, 3) . " GB" ?></p>
<a href="./index.php"><button>Oбратно</button></a>
