<?php
if (!is_dir("./test")) {
    mkdir("./test/", 0700);
}
?>
<p>Папка создана</p>
<a href="./massiveToFolder.php"><button>Создать папки с названиями из массива</button></a>
<br>
<a href="./index.php"><button>Oбратно</button></a>
