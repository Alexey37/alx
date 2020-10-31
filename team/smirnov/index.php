<?php
require ("../../header.php");
$birthDate = '15.04.1994';

?>



<div id="font" class="head-container">
        <br>
        <span class="headlines">Смирнов Алексей Сергеевич</span>
</div>

<br>

<img src="../../images/Smirnov.png" />

<div>
        <table class="main-table">
        <tr>
            <td>Амплуа</td>
            <td>Вратарь</td>
        </tr>
        <tr>
            <td>Номер игрока</td>
            <td>1</td>
        </tr>
        <tr>
            <td>Дата рождения</td>
            <td><?php echo $birthDate?></td>
        </tr>
        <tr>
            <td>Место рождения</td>
            <td>г. Иваново</td>
        </tr>
        <tr>
            <td>Гражданство</td>
            <td>РФ</td>
        </tr>
        <tr>
            <td>Рост</td>
            <td>191 см</td>
        </tr>
        <tr>
            <td>Вес</td>
            <td>79 кг</td>
        </tr>
        <tr>
            <td>Стоимость</td>
            <td>300 тыс. &#8364</td>
        </tr>
        <tr>
            <td>Контракт до</td>
            <td>30.06.2021</td>
        </tr>

        <tr>
            <td>В команде с</td>
            <td>01.07.2012</td>
        </tr>
        <tr>
            <td>Предыдущий клуб</td>
            <td>Текстильщик Иваново II</td>
        </tr>
    </table>

</div>

<?php
require ("../../footer.php");
?>