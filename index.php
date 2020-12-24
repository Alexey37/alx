<?php
require ("header.php");
require ("lib/index.php");
?>


<br xmlns="http://www.w3.org/1999/html">


<p class="part-one container-fluid">
    <span class="font-weight main-text">"<?php echo $oldNameTextilschick?>"</span> — <span class="main-text"> советский и российский
    футбольный клуб из города <?php echo $ivanovo?>. Основан в <?php echo $yearOfFoundation?> году. Домашний стадион — "<?php echo $oldNameTextilschick?>".
    В качестве спортивной базы клуба заявлен ивановский стадион «Локомотив». Команда выступает во втором по значимости
    футбольном дивизионе России - Футбольной Национальной Лиге. </span>
</p>

<div class="part-one container-fluid">
    <span class="headlines">История клуба</span>
    <span class="main-text">
    <p>
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

<div class="part-one container-fluid">
    <details>
    <summary style="outline: transparent"><span class="headlines" style="cursor: pointer">Достижения</span></summary>
    <span class="main-text">
       <ul>
            <li>Обладатель Кубка РСФСР - <?php echo $yearFirstCupRsfsrWinner?> <?php echo $yearWord?></li>
            <li>Обладатель Кубка РСФСР для команд второй лиги - <?php echo $yearSecondCupRsfsrWinner?> <?php echo $yearWord?></li>
            <li>Финалист Кубка РСФСР - <?php echo $yearFinalCupRsfsr?> <?php echo $yearWord?></li>
            <li>Обладатель Кубка Золотого кольца - <?php echo $yearGoldenRingCupWinner?> <?php echo $yearWord?></li>
            <li>Чемпион Второго дивизиона ПФЛ (зона Запад) - <?php echo $yearSecondDivWinner?> <?php echo $yearWord?></li>
            <li>Победитель Первенства ПФЛ (зона Запад) - <?php echo $yearSecondDiwWinnerPartOne?>/<?php echo $yearSecondDiwWinnerPartTwo?> сезон</li>
        </ul>
        </span>
    </details>
</div>

<br>

<div class="part-one container-fluid">
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

<div id="coach" class="part-one container-fluid">
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

<?php
require ("footer.php");
?>