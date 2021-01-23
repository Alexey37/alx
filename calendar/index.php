<?php
require("../header.php");

use App\Admin\DataBase;
$gamesCalendar = (new DataBase())->getGamesCalendar();
?>
<table class="main-table">
    <tr>
        <th>Хозяева</th>
        <th><img width="25" height="25" src="../images/ball2.png" alt="ball"></th>
        <th>Гости</th>
        <th>Дата проведения</th>
    </tr>
    <?php foreach ($gamesCalendar as $value) {?>
        <tr>
            <td><?=$value['team_host']?></td>
            <td><img width="25" height="25" src="../images/ball2.png" alt="ball"></td>
            <td><?=$value['team_visitor']?></td>
            <td><?=$value['game_date']?></td>
        </tr>
    <?php }?>
</table>

<?php
require ("../footer.php");
?>
