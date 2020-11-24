<?php
require("header.php");
$clubStatistic = file_get_contents (SERVER_NAME . '/upload/statistic.txt');
if (!empty($clubStatistic) && strlen($clubStatistic)) {
    $prepareClubStatistic = explode("\n", $clubStatistic);
    $clubStatTableRows = [];
    foreach ($prepareClubStatistic as $clubStatistic) {
//TUT!!!!1 uslovija
        $result = explode(',', $clubStatistic);
        $clubStatTableRows[] = $result;
    }
}
foreach ($clubStatTableRows as $value) {
   // dump($value);
}

?>


<div id="clubStatistic">
    <span class="table-headlines">Статистика выступлений клуба</span>
    <form method="get" action="/clubstat.php/">
        <table>
            <tr>
                <th><span>Год</span>
                    <br>
                    <button name="sort_by_year" type="submit" value="asc" onclick="return false">&#9650;</button>
                    <button name="sort_by_year" type="submit" value="desc">&#9660;</button>
                    <button name="sort_by_year" type="submit" value="">&#10006;</button>
                </th>
                <th>
                    <span>Турнир</span>
                </th>
                <th>
                    <span>Место</span>
                    <br>
                    <button name="sort_by_date" type="submit" value="asc">&#9650;</button>
                    <button name="sort_by_date" type="submit" value="desc">&#9660;</button>
                    <button name="sort_by_name" type="submit" value="">&#10006;</button>
                </th>
                <th>
                    <span>Игры</span>
                    <br>
                    <button name="sort_by_date" type="submit" value="asc">&#9650;</button>
                    <button name="sort_by_date" type="submit" value="desc">&#9660;</button>
                    <button name="sort_by_name" type="submit" value="">&#10006;</button>
                </th>
                <th>
                    <span>Выигрыши</span>
                    <br>
                    <button name="sort_by_date" type="submit" value="asc">&#9650;</button>
                    <button name="sort_by_date" type="submit" value="desc">&#9660;</button>
                    <button name="sort_by_name" type="submit" value="">&#10006;</button>
                </th>
                </th>
                <th>
                    <span>Ничьи</span>
                    <br>
                    <button name="sort_by_date" type="submit" value="asc">&#9650;</button>
                    <button name="sort_by_date" type="submit" value="desc">&#9660;</button>
                    <button name="sort_by_name" type="submit" value="">&#10006;</button>
                </th>
                <th>
                    <span>Поражения</span>
                    <br>
                    <button name="sort_by_date" type="submit" value="asc">&#9650;</button>
                    <button name="sort_by_date" type="submit" value="desc">&#9660;</button>
                    <button name="sort_by_name" type="submit" value="">&#10006;</button>
                </th>
                <th>
                    <span>Забитые <br>мячи</span>
                    <br>
                    <button name="sort_by_date" type="submit" value="asc">&#9650;</button>
                    <button name="sort_by_date" type="submit" value="desc">&#9660;</button>
                    <button name="sort_by_name" type="submit" value="">&#10006;</button>
                </th>
                <th>
                    <span>Пропущенные <br>мячи</span>
                    <br>
                    <button name="sort_by_date" type="submit" value="asc">&#9650;</button>
                    <button name="sort_by_date" type="submit" value="desc">&#9660;</button>
                    <button name="sort_by_name" type="submit" value="">&#10006;</button>
                </th>
                <th>
                    <span>Разница <br>мячей</span>
                    <br>
                    <button name="sort_by_date" type="submit" value="asc">&#9650;</button>
                    <button name="sort_by_date" type="submit" value="desc">&#9660;</button>
                    <button name="sort_by_name" type="submit" value="">&#10006;</button>
                </th>
                <th>
                    <span>Набранные <br>очки</span>
                    <br>
                    <button name="sort_by_date" type="submit" value="asc">&#9650;</button>
                    <button name="sort_by_date" type="submit" value="desc">&#9660;</button>
                    <button name="sort_by_name" type="submit" value="">&#10006;</button>
                </th>
            </tr>
            <?php foreach ($clubStatTableRows as $statCells) {?>
                <tr>
                    <?php foreach ($statCells as $cell) {?>
                    <td>
                        <?=$cell?>
                    </td>
                    <?php }?>
                </tr>
            <?php }?>
       </table>
    </form>
</div>

<br>
<body>
    <p class="main-text">* - турнир не был завершён из-за пандемии COVID-19. Команды, оказавшиеся в зоне вылета сохранили прописку в ФНЛ
    (при условии, что они не отказались от дальнейших выступлений)
    </p>
</body>



