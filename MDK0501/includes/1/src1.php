<html lang="ru">
<?php
session_start();

if ($_SESSION['header'] == 1) {
?>
    <header>
        header1
    </header>
<?php
}
if ($_SESSION['aside'] == 1) {
?>
    <aside>
        sidebar1
    </aside>
<?php
}
if ($_SESSION['content'] == 1) {
?>
    <main>
        content1
    </main>
<?php
}
if ($_SESSION['footer'] == 1) {
?>
    <header>
        footer1
    </header>
<?php
}
