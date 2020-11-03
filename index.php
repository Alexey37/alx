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
$oldNameSpartak = '"Спартак"';
$oldNameOsnova = 'Основа';
$oldNameDinamo = 'Динамо';
$oldNameKrasnoeZnamya = 'Красное знамя';
$oldNameZnamya = 'Знамя';
$oldNameTextilschick = 'Текстильщик';
$ivanovo = 'Иваново';
$yearWord = 'год';
$today = date("d.m.Y H:i:s");

$mainTable = [
    $oldNameSpartak => "1937-1939",
    $oldNameOsnova => "1939-1943",
    $oldNameDinamo => "1945-1946",
    $oldNameKrasnoeZnamya => [
        "1947-1952",
        "1954-1957",
    ],
    $oldNameZnamya => "1953",
    $oldNameTextilschick => [
        "1957-1998",
        "2003",
        "2008-н.в.",
    ],
    $ivanovo => "1999-2000",
    $oldNameTextilschick . "Ъ" => "2001-2002",
    $oldNameTextilschick . "Телеком" => "2004-2007",
];

$coachTable = [
    "Владимир Зиновьев" => "2010",
    "Александр Гущин" => "2010-2012",
    "Дмитрий Парфёнов" => "2012-2015",
    "Равиль Сабитов" => "2015-2016",
    "Сергей Петров" => "2016-2017",
    "Вадим Евсеев" => "2017",
    "Денис Бояринцев" => "2017-2019",
    "Сергей Павлов" => "2020-н.в.",
];

print_r ($mainTable);




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

<br>

<hr>

<br>

<p>
    <span class="sub-text font-weight main-text">"<?php echo $oldNameTextilschick?>"</span> — <span class="main-text"> советский и российский
    футбольный клуб из города <?php echo $ivanovo?>. Основан в <?php echo $yearOfFoundation?> году. Домашний стадион —
    <a href="https://ru.wikipedia.org/wiki/Текстильщик_(стадион,_Иваново)" title="Стадион Текстильщик">"<?php echo $oldNameTextilschick?>"</a>.
    В качестве спортивной базы клуба заявлен ивановский стадион «Локомотив». Команда выступает во втором по значимости
    футбольном дивизионе России - Футбольной Национальной Лиге. </span>
</p>

<div>
    <span class="headlines">История клуба</span>
    <span class="main-text">
    <p >
        Футбольный клуб "<?php echo $oldNameTextilschick?>" основан в 1937 году. Тогда ивановская команда,
        которая в то время называлась "<?php echo $oldNameSpartak?>", впервые приняла участие в чемпионате СССР. Однако,
        в целом ивановский футбол значительно старше. Свою точку отсчета футбол в нашем городе берет с 1909 года.
        Тогда в <?php echo $ivanovo?>-Вознесенске прошли первые организованные матчи, а в 1912-м (в год образования
        всероссийского футбольного союза) команда <?php echo $ivanovo?>-Вознесенска сыграла свой первый матч, обыграв
        соседей из Кохмы с неприличным для современного футбола счетом 21:0.
    </p>
    <p>
        В 20-е годы активно формировались футбольные коллективы на текстильных фабриках. В 1923 году сборная города
        <?php echo $ivanovo?>-Вознесенск приняла участие в футбольном турнире в рамках 1-го Всесоюзного праздника
        физкультуры, проходившего в Москве. Это соревнование рассматривается как первый неофициальный чемпионат СССР.
        Напомним, что чемпионаты страны среди клубных команд начали проводиться только в 1936 году. В дальнейшем
        <?php echo $ivanovo?>-Вознесенск регулярно участвовал в различных всесоюзных и всероссийских соревнованиях,
        принимал немало международных матчей. В конце 20-х – начале 30-х годов в наш город приезжали рабочие команды
        Латвии, Финляндии, Норвегии, Англии, Германии. Ивановский футбол высоко котировался в стране. Неслучайно в 1933
        году при первом составлении списка «33-х лучших» футболистов страны в него попали сразу шестеро ивановцев!
        Причем большее количество игроков представляло только столицу.
    </p>
    <p>
        Продолжение следует...
    </p>
    </span>
</div>

<br>

<div>
    <span class="headlines">Достижения</span>
    <span class="main-text">
        <ul>
            <li>Обладатель Кубка РСФСР - <?php echo $yearFirstCupRsfsrWinner?> <?php echo $yearWord?></li>
            <li>Обладатель Кубка РСФСР - <?php echo $yearSecondCupRsfsrWinner?> <?php echo $yearWord?></li>
            <li>Финалист Кубка РСФСР - <?php echo $yearFinalCupRsfsr?> <?php echo $yearWord?></li>
            <li>Обладатель Кубка Золотого кольца - <?php echo $yearGoldenRingCupWinner?> <?php echo $yearWord?></li>
            <li>Чемпион Второго дивизиона ПФЛ (зона Запад) - <?php echo $yearSecondDivWinner?> <?php echo $yearWord?></li>
            <li>Победитель Первенства ПФЛ (зона Запад) - <?php echo $yearSecondDiwWinnerPartOne?>/<?php echo $yearSecondDiwWinnerPartTwo?> сезон</li>
        </ul>
    </span>
</div>

<div>
    <span class="headlines">Названия клуба</span>
    <table class="main-table">

        <tr>
            <th>Название</th>
            <th>Период</th>
        </tr>
        <?php foreach ($mainTable as $name => $date) {?>
        <tr>
            <td><?=$name?></td>
            <td><?=$date?></td>
        </tr>
        <?php }?>
   </table>
</div>

<br>

    <div>
        <span class="headlines">Тренеры клуба с 2010 года</span>
        <table class="main-table">

            <tr>
                <th>Тренер</th>
                <th>Период</th>
            </tr>
            <?php foreach ($coachTable as $coachName => $coachDate) {?>
                <tr>
                    <td><?=$coachName?></td>
                    <td><?=$coachDate?></td>
                </tr>
            <?php }?>
        </table>
    </div>

<br>

<div>
    <address><span class="sub-text">г. <?php echo $ivanovo?>, ул. Ермака, 49, 153025</span></address>
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

<p>
    <img class="date" width="35" height="35" src="ball.png">
    <span class = "font-weight"><?php echo $today?></span>
    <img width="35" height="35" src="ball.png">
</p>


    <img width="853" height="640" src="images/ShinTextile.png" />

<br>

<form>
    <button><i>Наверх страницы</i></button>
    <br>

    <p style="text-align: center">

        <button><img width="50" height="50" src="ball.png" alt="Текстиль"
                         style="vertical-align: middle"></button></p>

</form>

    <br>

<br>

<?php
require ("footer.php");
?>