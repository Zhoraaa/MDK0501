<html lang="ru">
<?php
session_start();

if ($_SESSION['header'] == 2) {
?>
    <header>
        header2
    </header>
<?php
}
if ($_SESSION['aside'] == 2) {
?>
    <aside>
        sidebar2
    </aside>
<?php
}
if ($_SESSION['content'] == 2) {
?>
    <main>
        content2
    </main>
<?php
}
if ($_SESSION['footer'] == 2) {
?>
    <header>
        footer2
    </header>
<?php
}
