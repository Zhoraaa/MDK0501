<?php
session_start();
$_SESSION['x'] = $_GET['x'];
$_SESSION['y'] = $_GET['y'];

$val = (!empty($_GET['text'])) ? $_SESSION['test'] : "2";
$val2 = (!empty($_GET['text'])) ? $_SESSION['test'] : "3";
?>

<form action="#" method="get">
    <input type="text" name="x" id="" placeholder="type something" value="<?= $val ?>">
    <input type="text" name="y" id="" placeholder="type something" value="<?= $val2 ?>">
    <button type="submit">go</button>
</form>

<?php
if (!empty($_SESSION['y']) && !empty($_SESSION['y'])) {
?>
<a href="./read.php"><button>read</button></a>
<?php
}
?>

<br>
<a href="../"><button>Oбратно</button></a>