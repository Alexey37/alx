<?php
require("../header.php");

use App\Admin\DataBase;
$gamesCalendar = (new DataBase())->getGamesCalendar();
?>
<table class="main-table">
    <tr>
        <th>Хозяева</th>
        <th>ЛОГО</th>
        <th>Счёт</th>
        <th>Дата проведения</th>
    </tr>
    <?php foreach ($gamesCalendar as $value) {?>
        <tr>
            <td><?=$value['name']?></td>
            <td><img src ="../upload/opponents/Irtysh.png"></td>
            <td><?=$value['score']?></td>
            <td><?=$value['game_date']?></td>
        </tr>
    <?php }?>
</table>

<?php
require ("../footer.php");
?>
