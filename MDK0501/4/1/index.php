<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Из цельсия в фаренгейт</title>
</head>
<body>
    <form action="brain.php" method="post">
        <input type="number" name="c" style="padding: 10px; width: 300px" placeholder="Введите Цельсий, получите Фаренгейт">
        <button type="submit">Вперёд</button>
        <p>В фаренгейтах это: <?= $_GET['f'] ?></p>
    </form>
    <a href="../"><button>Обратно</button></a>
</body>
</html>