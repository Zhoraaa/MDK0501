<html lang="ru">

<?php
$val = (isset($_POST['text']))?$_POST['text']:"Hello, World!";
?>

<form action="#" method="post">
    <textarea name="text" id="" style="width: 800px; height: 300px; padding: 5px; font-size: 16px;resize:none"><?= $val ?></textarea>
    <button type="submit">погна</button>
</form>

<?php
function poschitay($text)
{
    $text_len = mb_strlen($text);

    // Преобразуем строку в массив, по умолчанию у функции шаг составляет 1. Можно дописать вторым аргументом.
    $symbols = str_split($text);

    // Считаем символы
    foreach ($symbols as $symbol) {
        if (!isset($counter[$symbol])) {
            $counter[$symbol] = 1;
        } elseif (isset($counter[$symbol])) {
            $counter[$symbol]++;
        }
    }

    foreach ($counter as $key => $item) {
        $item .= " (" . round($item / $text_len * 100, 1) . "%)";
        $counter[$key] = $item;
    }

    return $counter;
}

if (!empty($_POST)) {
    $text = $_POST['text'];

    echo "<pre>";
    print_r(poschitay($text));
    echo "</pre>";
}
?>

<br>
<a href="./"><button>Oбратно</button></a>