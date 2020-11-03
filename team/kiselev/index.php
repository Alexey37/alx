<?php
require ("../../header.php");
$birthDate = '30.01.1995';

?>

<div id="font" class="head-container">
    <br>
    <span class="headlines">Киселёв Максим Вадимович</span>
</div>

<br>

<img src="<?= IMAGES?>Kiselev.png" />

<div>
    <table class="main-table">
        <tr>
            <td>Амплуа</td>
            <td>Вратарь</td>
        </tr>
        <tr>
            <td>Номер игрока</td>
            <td>16</td>
        </tr>
        <tr>
            <td>Дата рождения</td>
            <td><?= $birthDate?></td>
        </tr>
        <tr>
            <td>Место рождения</td>
            <td>г. Саратов</td>
        </tr>
        <tr>
            <td>Гражданство</td>
            <td>РФ</td>
        </tr>
        <tr>
            <td>Рост</td>
            <td>189 см</td>
        </tr>
        <tr>
            <td>Вес</td>
            <td>75 кг</td>
        </tr>
        <tr>
            <td>Стоимость</td>
            <td>200 тыс. &#8364</td>
        </tr>
        <tr>
            <td>Контракт до</td>
            <td>30.06.2021</td>
        </tr>

        <tr>
            <td>В команде с</td>
            <td>27.07.2020</td>
        </tr>
        <tr>
            <td>Предыдущий клуб</td>
            <td>Чайка (с. Песчанокопское)</td>
        </tr>
    </table>

</div>

<?php
require ("../../footer.php");
?>