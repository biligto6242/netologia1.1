<?php

$userName = 'Билигто';
$userAge  = 30;
$userJob  = 'Администратор-специалист спутниковых сетей';
$userCity = 'Москва';
$userEmail= 'biligto6242@yandex.ru';
?>
<div>
        <h3>Страница пользователя Билигто</h3>
        <p>Имя <?= $userName ?></p>
        <p>Возраст <?= $userAge ?></p>
        <p>Адрес электронной почты <a href="mailto:<?= $userEmail ?>"><?= $userEmail ?></a></p>
        <p>Город <?= $userCity ?></p>
        <p>О себе <?= $userJob ?></p>
</div>
