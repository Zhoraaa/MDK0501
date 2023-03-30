<?php
$array = array(
    'en'=>array('Sunday','Monday','Tuesday','Wednesday','Thursday','Firthday','Saturday'),
    'ru'=>array('Воскресенье','Понедельник','Вторник','Среда','Четверг','Пятница','Суббота')
);
echo $array['ru'][1], '<br>', $array['en'][3];
?>