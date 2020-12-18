<?php
require ("lib/header.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title><?=$title?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo SERVER_NAME?>/style.css">
</head>

<body class="background"

<p id="top"></p>
<div id="font" class="head-container">
    <span class="sub-text font-weight"><?php echo $regionalFootballClub?></span>
    <br>
    <span class="title font-weight">Текстильщик Иваново</span>
    <br>
    <span class="undertitle"><?php echo $unoffFunPortal?></span>
    </div>
    <div class="btn-group margin-left" role="group" style="margin-top: 10px; margin-left: 235px">
        <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            ГАЛЕРЕЯ
        </button>
            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                <a class="dropdown-item" href="/gallery/index.php" target="_blank"><b>Фото</b></a>
                <a class="dropdown-item" href="#"><b>ВидеоПУСТО</b></a>
            </div>
    </div>
    <div class="btn-group margin-left" role="group" style="margin-top: 10px; margin-left: 1px">
        <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            СЕЗОН
        </button>
            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                <a class="dropdown-item" href="/team/" target="_blank"><b>Состав</b></a>
                <a class="dropdown-item" href=# target="_blank"><b>КалендарьПУСТО</b></a>
                <a class="dropdown-item" href="/Games.php" target="_blank"><b>Результаты</b></a>
            </div>
    </div>
    <div class="btn-group margin-left" role="group" style="margin-top: 10px; margin-left: 1px">
        <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            ВНЕШНИЕ ССЫЛКИ
        </button>
            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                <a class="dropdown-item" href="http://fc-textil.ru" target="_blank"><b>Официальный сайт клуба</b></a>
                <a class="dropdown-item" href="https://1fnl.ru/" target="_blank"><b>Официальный сайт ФНЛ</b></a>
                <a class="dropdown-item" href="https://ru.wikipedia.org/wiki/%D0%A2%D0%B5%D0%BA%D1%81%D1%82%D0%B8%D0%BB%D1%8C%D1%89%D0%B8%D0%BA_(%D1%84%D1%83%D1%82%D0%B1%D0%BE%D0%BB%D1%8C%D0%BD%D1%8B%D0%B9_%D0%BA%D0%BB%D1%83%D0%B1,_%D0%98%D0%B2%D0%B0%D0%BD%D0%BE%D0%B2%D0%BE)" target="_blank"><b>Текстильщик на "вики"</b></a>
            </div>
    </div>
    <div class="btn-group margin-left" role="group" style="margin-top: 10px; margin-left: 1px">
        <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            ИСТОРИЯ
        </button>
            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                <a class="dropdown-item" href="/clubstat.php/" target="_blank"><b>Статистика выступлений</b></a>
                <a class="dropdown-item" href=# target="_blank"><b>ДостиженияПУСТО</b></a>
                <a class="dropdown-item" href=# target="_blank"><b>Названия клубаПУСТО</b></a>
                <a class="dropdown-item" href=# target="_blank"><b>ТренерыПУСТО</b></a>
            </div>
    </div>
<div>
<a href="/">
    <img class="logo" src="<?= $serverName?>/textile.png" />
</a>

    <img style="margin-left: 1105px; margin-top: -187px" width="780px" src="<?= IMAGES?>Stadium2.png" class="img-thumbnail" alt="Стадион">
</div>

