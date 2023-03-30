<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Document</title>
</head>

<body>

	<?php
	if (isset($_COOKIE['month'])) : echo $_COOKIE['month'] ;else: echo "Куки на месяц не установлена"; endif;
	?>
	<br>
	<?php
	if (isset($_COOKIE['year'])) : echo $_COOKIE['year'] ;else: echo "Куки на год не установлена"; endif;
	?>
	<br>
	<?php
	if (isset($_COOKIE['10years'])) : echo $_COOKIE['10years'] ;else: echo "Куки на 10 лет не установлена"; endif;
	?>
	<br>
	<a href="./timeInCookies.php"><button>Установить куки</button></a>
	<br>
	<a href="./deleteCookies.php"><button>Удалить куки на год</button></a>
	<br>
	<a href="./deleteCookie2.php"><button>Удалить куки на 10 лет</button></a>
	<br>
	<a href="./deleteCookie3.php"><button>Удалить все куки</button></a>
	<br>
	<br>
    <a href="../"><button>Обратно</button></a>

</body>

</html>