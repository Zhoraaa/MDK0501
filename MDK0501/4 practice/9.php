<html lang="ru">

<form action="#" method="post">
    <textarea name="text" id="" style="width: 800px; height: 300px; padding: 5px; font-size: 16px;resize:none">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nulla odio, auctor eget vehicula sed, mattis et velit. Sed pharetra volutpat diam, nec eleifend velit pulvinar sed. Phasellus sed feugiat est, in lobortis massa. Ut eros turpis, porta sed commodo at, pulvinar pulvinar enim. Suspendisse urna sem, feugiat a mauris a, volutpat posuere diam. Aliquam id dictum mauris. Sed ante dolor, dictum iaculis est nec, pharetra laoreet eros. Suspendisse porta metus sit amet nisi suscipit, quis ultrices tellus imperdiet. Cras scelerisque ut nunc a ultricies. Cras in quam varius tellus rhoncus tincidunt.</textarea>
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