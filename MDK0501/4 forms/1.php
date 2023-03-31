<html lang="ru">
<?php
$c = "N/A";
if ($_POST['c']) {
    $c = $_POST['c'];
    $c = round($c * 1.8 + 32, 1);
}
?>

<form action="#" method="post">
    <input type="number" name="c" style="padding: 10px; width: 300px" placeholder="Введите Цельсий, получите Фаренгейт">
    <button type="submit">Вперёд</button>
    <p>В фаренгейтах это: <?= $c ?></p>
</form>
<a href="../"><button>Обратно</button></a>