<?php
header("Refresh: 1");
if (!isset($_COOKIE['checked'])) {
        setcookie('checked', time());
        $_COOKIE['checked'] = time();
        echo 'Вы впервые на этой странице';
} else {
        $time = time() - $_COOKIE['checked'];
        echo 'С вашего первого захода на страницу прошло ' . $time;
        switch (substr(time() - $_COOKIE['checked'], -1)) {
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
