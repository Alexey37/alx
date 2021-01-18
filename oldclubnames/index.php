<?php
require("../header.php");

use App\Admin\DataBase;
$oldNames =  (new DataBase())->getOldNames();
?>

<?php
//dump($oldNames);
?>
    <table class="main-table">
        <tr>
            <th>Название</th>
            <th>Период</th>
        </tr>
        <?php foreach ($oldNames as $value) {?>
            <tr>
                <td><?=$value['old_name']?></td>
                <td><?=$value['created_at']?></td>
            </tr>
        <?php }?>
    </table>

<?php
require ("../footer.php");
?>