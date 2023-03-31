<html lang="ru">
<?php
session_start();

if ($_SESSION['header'] == 3) {
?>
    <header>
        header3
    </header>
<?php
}
if ($_SESSION['aside'] == 3) {
?>
    <aside>
        sidebar3
    </aside>
<?php
}
if ($_SESSION['content'] == 3) {
?>
    <main>
        content3
    </main>
<?php
}
if ($_SESSION['footer'] == 3) {
?>
    <header>
        footer3
    </header>
<?php
}
