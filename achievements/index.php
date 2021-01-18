<?php
require("../header.php");

use App\Admin\DataBase;
$achievements = (new DataBase())->getAchievements();
?>
    <table class="main-table">
        <tr>
            <th>Достижение</th>
            <th>Сезон</th>
        </tr>
        <?php foreach ($achievements as $value) {?>
            <tr>
                <td><?=$value['team_achievement']?></td>
                <td><?=$value['year_of_achievement']?></td>
            </tr>
        <?php }?>
    </table>
<?php
require ("../footer.php");
?>