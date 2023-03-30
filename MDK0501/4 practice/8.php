<html lang="ru">
<?php
$text = $_POST['text'];
echo strlen($text) . "<br>";
echo substr_count($text, "o");
?>

<form action="#" method="post">
    <textarea name="text" id="" style="width: 800px; height: 300px; padding: 5px; font-size: 16px;resize:none">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nulla odio, auctor eget vehicula sed, mattis et velit. Sed pharetra volutpat diam, nec eleifend velit pulvinar sed. Phasellus sed feugiat est, in lobortis massa. Ut eros turpis, porta sed commodo at, pulvinar pulvinar enim. Suspendisse urna sem, feugiat a mauris a, volutpat posuere diam. Aliquam id dictum mauris. Sed ante dolor, dictum iaculis est nec, pharetra laoreet eros. Suspendisse porta metus sit amet nisi suscipit, quis ultrices tellus imperdiet. Cras scelerisque ut nunc a ultricies. Cras in quam varius tellus rhoncus tincidunt.</textarea>
    <button type="submit">погна</button>
</form>
<p>Ответ: <?= $answ ?></p>
<br>
<a href="./"><button>Oбратно</button></a>