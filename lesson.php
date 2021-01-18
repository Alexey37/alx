<?php

/***
 *
 * 1) Из переменной $dom(Экзэмпляр класса new Dom()) достать матчи Текстильщика
 * https://github.com/paquettg/php-html-parser
 *
 * Использовать методы findByClass или что-то аналогичное
 * обрабатывать полученные данные в цикле
 *
 * 2) Собрать массив вида
 * [
 *   'enemy' - соперник
 *   'status' = guest|home
 *   'date' - дата проведения
 * ]
 * 3) Создать в БД (на SQL) таблицу calendar
 *      enemy - string
 *      status - string
 *      date - DateTime
 * 4) Записать резальтаты массива в БД calendar - использовать класс lib/Admin/DataBase (добавить метод по добавлению данныхв произволльную таблицу)
 *
 */