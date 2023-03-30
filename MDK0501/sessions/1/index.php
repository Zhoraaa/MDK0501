<?php
session_start();
$_SESSION['test'] = $_GET['text'];

$val = (!empty($_GET['text'])) ? $_SESSION['test'] : "test val";
?>

<form action="#" method="get">
    <input type="text" name="text" id="" placeholder="type something" value="<?= $val ?>">
    <button type="submit">go</button>
</form>

<?php
if (!empty($_GET)) {
?>
<a href="./read.php"><button>read</button></a>
<?php
}
?>

<br>
<a href="../"><button>Oбратно</button></a>