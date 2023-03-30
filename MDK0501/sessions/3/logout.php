<?php
session_start();
session_destroy();
unset($_SESSION);
?>
<br>
<a href="./"><button>Обратно</button></a>