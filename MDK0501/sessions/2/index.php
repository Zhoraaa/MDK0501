<?php
session_start();
header("Refresh: 1");
if (!isset($_SESSION['checked'])) {
        $_SESSION['checked'] = time();
        echo 'Вы впервые на этой странице';
} else {
        $time = time() - $_SESSION['checked'];
        echo 'С вашего первого захода на страницу прошло ' . $time;
        switch (substr(time() - $_SESSION['checked'], -1)) {
                case 0:
                        echo " секунд";
                        break;
                case 1:
                        echo " секунда";
                        break;
                case 2:
                        echo " секунды";
                        break;
                case 3:
                        echo " секунды";
                        break;
                case 4:
                        echo " секунды";
                        break;
                case 5:
                        echo " секунд";
                        break;
                case 6:
                        echo " секунд";
                        break;
                case 7:
                        echo " секунд";
                        break;
                case 8:
                        echo " секунд";
                        break;
                case 9:
                        echo " секунд";
                        break;
        }
}
?>
<br>
<a href="../"><button>Обратно</button></a>
