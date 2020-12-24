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
    <div class="container-fluid">
        <div style="padding-top: 25px" class="row justify-content-md-center">
            <div class="col-1-2">
                <span class="small-headlines font-weight">Сыгранные матчи</span>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <form method="get" action="/Games.php/">
            <div class="col-1-2">
                <table>
                    <tr>
                        <th>
                            <span>Хозяева</span>
                        </th>
                        <th>
                            <span>Результат</span>
                        </th>
                        <th>
                            <span>Гости</span>
                        </th>
                        <th>
                            <span>Дата</span>
                        </th>
                    </tr>
                    <?php foreach ($clubGamesTableRows as $statCells) {?>
                        <tr>
                            <?php foreach ($statCells as $key => $cell) {?>
                                <td>
                                    <? if ($key === 'image'):?>
                                        <img src="/<?= $cell?>" width="200px" height="150px"/>
                                    <? elseif ($key === 'date'): ?>
                                        <?= date('d.m.Y', strtotime($cell))?>
                                    <?php else: ?>
                                        <?=$cell?>
                                    <?php endif ?>
                                </td>
                            <?php }?>
                        </tr>

                    <?php }?>
                </table>
            </div>
        </div>
    </div>
    </form>
</div>

<?php
require ("footer.php");
?>