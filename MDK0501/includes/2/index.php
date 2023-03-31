<html lang="ru">
<?php
$week = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
if ($_GET['day']){
file_put_contents('day.txt', '$day=' . $_GET['day'] . ';');
}
?>
<form action="#" method="get">
    <select name="day" required>
        <?php
        foreach ($week as $day) {
        ?>
            <option value="<?= $day ?>"><?= $day ?></option>
        <?php
        }
        ?>
    </select>
    <button type="submit">go</button>
</form>

<br>
<a href="../"><button>Обратно</button></a>