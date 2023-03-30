<?php
if (!file_exists("test.txt") && !file_exists("mir.txt")) {
    file_get_contents("test.txt");
} elseif (!file_exists("test.txt") && file_exists("mir.txt")) {
    rename("mir.txt", "test.txt");
}
?>
<a href="./getTxt.php"><button>Считать данные файла</button></a>
<br>
<a href="./rename.php"><button>Переименовать файл</button></a>
<br>
<a href="./copy.php"><button>Копировать файл</button></a>
<br>
<a href="./delWorld.php"><button>Удалить world.txt</button></a>
<br>
<a href="./exists.php"><button>Проверить существование world.txt и mir.txt</button></a>
<br>
<br>
<a href="./newFolder.php"><button>Создать папку test</button></a>
<br>
<a href="./renameFolder.php"><button>Переименовать папку test в www</button></a>
<br>
<a href="./delFolder.php"><button>Удалить папку www</button></a>