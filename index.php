<?php
require("header.php");
$title="Текстильщик Иваново";
$regionalFootballClub="Областной футбольный клуб";
$unoffFunPortal="Неофициальный фанатский портал - just for fun";
$yearOfFoundation = 1937;
$yearFirstCupRsfsrWinner = 1940;
$yearSecondCupRsfsrWinner = 1986;
$yearFinalCupRsfsr = 1984;
$yearGoldenRingCupWinner = 2001;
$yearSecondDivWinner = 2006;
$yearSecondDiwWinnerPartOne = 2018;
$yearSecondDiwWinnerPartTwo = 2019;
$oldNameSpartak = 'Спартак';
$oldNameOsnova = 'Основа';
$oldNameDinamo = 'Динамо';
$oldNameKrasnoeZnamya = 'Красное знамя';
$oldNameZnamya = 'Знамя';
$oldNameTextilschick = 'Текстильщик';
$ivanovo = 'Иваново';
$yearWord = 'год';







$string = 'строка';
$int = 2;
$float = 3.14;
$bool = true || false;
$null = null;
$array1 =[
    1,
    2,
    3,
];
$array2 = [
    'foot' => "ball",
    1.2 => 123,
];
$std0bject = new \stdClass()
?>

<br/>

<div id="font" class="head-container">
    <span class="sub-text font-weight"><?php echo $regionalFootballClub?></span>
    <br>
    <span class="title font-weight"><?php echo $title?></span>
    <br>
    <span class="undertitle"><?php echo $unoffFunPortal?></span>
    <br>
    <img class="logo"  src="textile.png" />
</div>

<hr>

<br>

<p>
    <span class="headlines">"Текстильщик"</span> — советский и российский футбольный клуб из города <?php echo $ivanovo?>.
    Основан в <?php echo $yearOfFoundation?> году. Домашний стадион —
    <a href="https://ru.wikipedia.org/wiki/Текстильщик_(стадион,_Иваново)" title="Стадион Текстильщик">Текстильщик</a>
    В качестве спортивной базы клуба заявлен ивановский стадион «Локомотив». Команда выступает во втором по значимости
    футбольном дивизионе России - Футбольной Национальной Лиге.
</p>

<br>

<div>
    <span class="headlines">Достижения</span>
    <ul>
        <li>Обладатель Кубка РСФСР - <?php echo $yearFirstCupRsfsrWinner?> <?php echo $yearWord?></li>
        <li>Обладатель Кубка РСФСР - <?php echo $yearSecondCupRsfsrWinner?> <?php echo $yearWord?></li>
        <li>Финалист Кубка РСФСР - <?php echo $yearFinalCupRsfsr?> <?php echo $yearWord?></li>
        <li>Обладатель Кубка Золотого кольца - <?php echo $yearGoldenRingCupWinner?> <?php echo $yearWord?></li>
        <li>Чемпион Второго дивизиона ПФЛ (зона Запад) - <?php echo $yearSecondDivWinner?> <?php echo $yearWord?></li>
        <li>Победитель Первенства ПФЛ (зона Запад) - <?php echo $yearSecondDiwWinnerPartOne?>/<?php echo $yearSecondDiwWinnerPartTwo?> сезон</li>
    </ul>
</div>

<div>
    <span class="headlines">Названия клуба</span>
    <style>

    </style>
    <table class="main-table">

        <tr>
            <th>Название</th>
            <th>Период</th>
        </tr>
        <tr>
            <td>"<?php echo $oldNameSpartak?>"</td>
            <td>1937-1939</td>
        </tr>
        <tr>
            <td>"<?php echo $oldNameOsnova?>"</td>
            <td>1939-1943</td>
        </tr>
        <tr>
            <td>"<?php echo $oldNameDinamo?>"</td>
            <td>1944-1946</td>
        </tr>
        <tr>
            <td>"<?php echo $oldNameKrasnoeZnamya?>"</td>
            <td>1947-1952</td>
        </tr>
        <tr>
            <td>"<?php echo $oldNameZnamya?>"</td>
            <td>1953</td>
        </tr>
        <tr>
            <td>"<?php echo $oldNameKrasnoeZnamya?>"</td>
            <td>1954-1957</td>
        </tr>
        <tr>
            <td>"<?php echo $oldNameTextilschick?>"</td>
            <td>1957-1998</td>
        </tr>
        <tr>
            <td>"<?php echo $ivanovo?>"</td>
            <td>1999-2000</td>
        </tr>
        <tr>
            <td>"<?php echo $oldNameTextilschick?>Ъ"</td>
            <td>2001-2002</td>
        </tr>
        <tr>
            <td>"<?php echo $oldNameTextilschick?>"</td>
            <td>2003</td>
        </tr>
        <tr>
            <td>"<?php echo $oldNameTextilschick?>-Телеком"</td>
            <td>2004-2007</td>
        </tr>
        <tr>
            <td>"<?php echo $oldNameTextilschick?>"</td>
            <td>2008-н.в.</td>
        </tr>
    </table>
</div>

<br>

<div>
    <address><span class="headlines">г. <?php echo $ivanovo?>, ул. Ермака, 49, 153025</span></address>
</div>

<br>

<div>
    <span class="headlines">Полезные ссылки</span>
        <br>
        <a href="http://fc-textil.ru" title="Официальный сайт ФК Текстильщик">fc-textil.ru</a>
        <br>
        <a href="/team/">Состав</a>
</div>

<br>

<form>
    <button><i>Тык</i></button>
    <br>

    <p style="text-align: center">

        <button><img width="50" height="50" src="ball.png" alt="Текстиль"
                     style="vertical-align: middle"></button></p>

</form>

<br>

<?php
require ("footer.php");
?>