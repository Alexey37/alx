<?php
require ("header.php");
require ("lib/index.php");
?>

<br/>

<p id="top"></p>
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
        которая в то время называлась <?php echo $oldNameSpartak?>, впервые приняла участие в чемпионате СССР. Однако,
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
    <details>
    <summary style="outline: transparent"><span class="headlines" style="cursor: pointer">Достижения</span></summary>
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
    </details>
</div>

<br>

<div>
    <details>
    <summary style="outline: transparent"><span class="headlines" style="cursor: pointer">Названия клуба</span></summary>
    <table class="main-table">
        <tr>
            <th>Название</th>
            <th>Период</th>
        </tr>
        <?php foreach ($clubOldNamesAndDates as $value) {?>
        <tr>
            <td><?=$value['name']?></td>
            <td><?=$value['date']?></td>
        </tr>
        <?php }?>
    </table>
    </details>
</div>

<br>

<div id="coach">
    <details>
    <summary style="outline: transparent"><span class="headlines" style="cursor: pointer">Тренеры клуба</span></summary>
    <form method="get" action="/">
        <table class="main-table">
        <tr>
            <th>Тренер
                <br>
                <button name="sort_by_name" type="submit" value="asc">&#9650;</button>
                <button name="sort_by_name" type="submit" value="desc">&#9660;</button>
                <button name="sort_by_date" type="submit" value="asc">&#10006;</button>
            </th>
            <th>Период
                <br>
                <button name="sort_by_date" type="submit" value="asc">&#9650;</button>
                <button name="sort_by_date" type="submit" value="desc">&#9660;</button>
            </th>
        </tr>
            <?php foreach ($coachTable as $coach) {?>
                <tr>
                    <td><?=$coach['name']?></td>
                    <td><?=$coach['date']?></td>
                </tr>
            <?php }?>
    </table>
    </form>
    </details>
</div>

<br>

<div>
    <details>
    <summary style="outline: transparent"><span class="headlines" style="cursor: pointer">Полезные ссылки</span></summary>
    <br>
    <a href="/clubstat.php/" title="Статистика выступлений" target="_blank">Статистика выступлений</a>
    <br>
    <a href="/team/" title="Состав команды" target="_blank">Состав команды</a>
    <br>
    <a href="http://fc-textil.ru" title="Официальный сайт ФК Текстильщик" target="_blank">fc-textil.ru</a>
    <br>
    <a href="https://ru.wikipedia.org/wiki/%D0%A2%D0%B5%D0%BA%D1%81%D1%82%D0%B8%D0%BB%D1%8C%D1%89%D0%B8%D0%BA_(%D1%84%D1%83%D1%82%D0%B1%D0%BE%D0%BB%D1%8C%D0%BD%D1%8B%D0%B9_%D0%BA%D0%BB%D1%83%D0%B1,_%D0%98%D0%B2%D0%B0%D0%BD%D0%BE%D0%B2%D0%BE)" title="Текстиль на Wiki" target="_blank">Текстильщик на Wiki</a>
    </details>
</div>

<br>

<div>
    <address><span class="sub-text">г. <?php echo $ivanovo?>, ул. Ермака, 49, 153025</span></address>
</div>

<br>



<br>

<p>
    <img class="date" width="35" height="35" src="ball.png">
    <span class = "font-weight"><?php echo $today?></span>
    <img width="35" height="35" src="ball.png">
</p>

<br>

<form>
    <button><a href="#top" title="Наверх страницы">&#9650;</a></button>
    <br>

    <p style="text-align: center">

        <button style="cursor: pointer"><img width="50" height="50" src="ball.png" alt="Текстиль"
                         style="vertical-align: middle"></button></p>

</form>

<br>

<?php
require ("footer.php");
?>