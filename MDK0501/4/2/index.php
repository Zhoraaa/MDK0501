<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="brain.php" method="post">
        <input type="number" name="x" style="padding: 10px; width: 300px" id="">
        <button type="submit">Факториал</button>
        <p><?= $_GET['x'] ?>! = <?= $_GET['answer'] ?></p>
    </form>
    <a href="../"><button>Обратно</button></a>
</body>
</html>