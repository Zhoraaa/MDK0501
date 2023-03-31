<?php
session_start();

if (!isset($_SESSION['counter'])) {
        $_SESSION['counter'] = 1;
} else {
        $_SESSION['counter']++;
}
if ($_SESSION['counter'] == 10):unset($_SESSION['counter']);endif;
echo $_SESSION['counter'];
?>
<br>
<a href="./logout.php"><button>destroy</button></a>
<br>
<a href="../"><button>Обратно</button></a>