<?php
require("header.php");
define("SERVER_NAME", $serverName);
define("IMAGES", $serverName . "/images/");
$clubGames = file_get_contents(SERVER_NAME . '/upload/match.txt');


if (!empty($clubGames) && strlen($clubGames)) {
    $prepareClubGames = explode( "\n", $clubGames);
    $clubGamesTableRows = [];
    foreach ($prepareClubGames as $clubGames) {

        $clubGamesTableRows[] = json_decode($clubGames);

    }
}
foreach ($clubGamesTableRows as $value) {

}

?>


<div id="clubGames">
    <span class="table-headlines">Сыгранные матчи</span>
    <form method="get" action="/Games.php/">
        <table>
            <tr>
                <th>
                    <span>Соперник</span>
                </th>
                <th>
                    <span>Результат</span>
                </th>
                <th>
                    <span>Дата</span>
                </th>
                <th>
                    <span>Фото</span>
                </th>
            </tr>
            <?php foreach ($clubGamesTableRows as $statCells) {?>
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
