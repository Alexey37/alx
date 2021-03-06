<?php
require("../header.php");

use App\Admin\DataBase;
$gamesCalendar = (new DataBase())->getGamesResults();
?>
<table class="main-table">
    <tr>
        <th>Хозяева</th>
        <th>Счёт</th>
        <th>LOGO</th>
        <th>Дата проведения</th>
    </tr>
    <?php foreach ($gamesCalendar as $value) {?>
        <tr>
            <td><?=$value['name']?></td>
            <td><?=$value['score']?></td>
            <td><?=$value['logo']?></td>
            <td><?=$value['game_date']?></td>
        </tr>
    <?php }?>
</table>

<?php
require ("../footer.php");
?>
