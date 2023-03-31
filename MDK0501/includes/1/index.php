<?php
if (!empty($_GET)) {
include("./src1.php");
include("./src2.php");
include("./src3.php");

session_start();

$_SESSION['header'] = $_GET['header'];
$_SESSION['aside'] = $_GET['aside'];
$_SESSION['content'] = $_GET['content'];
$_SESSION['footer'] = $_GET['footer'];
}
?>
<form action="#" method="get">
    <input type="text" name="header" placeholder="header (1-3)" required>
    <br>
    <input type="text" name="aside" placeholder="aside (1-3)" required>
    <br>
    <input type="text" name="content" placeholder="main (1-3)" required>
    <br>
    <input type="text" name="footer" placeholder="footer (1-3)" required>
    <br>
    <button type="submit">go</button>
</form>

<br>
<a href="../"><button>Обратно</button></a>