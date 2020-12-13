<?php

$yearOfFoundation = 1937;
$yearFirstCupRsfsrWinner = 1940;
$yearSecondCupRsfsrWinner = 1986;
$yearFinalCupRsfsr = 1984;
$yearGoldenRingCupWinner = 2001;
$yearSecondDivWinner = 2006;
$yearSecondDiwWinnerPartOne = 2018;
$yearSecondDiwWinnerPartTwo = 2019;
$oldNameSpartak = 'Спартак';
$oldNameOsnova = 'Основа';
$oldNameDinamo = 'Динамо';
$oldNameKrasnoeZnamya = 'Красное знамя';
$oldNameZnamya = 'Знамя';
$oldNameTextilschick = 'Текстильщик';
$ivanovo = 'Иваново';
$yearWord = 'год';
$today = date("d.m.Y H:i:s");


$mainTable = [
    $oldNameSpartak => "1937-1939",
    $oldNameOsnova => "1939-1943",
    $oldNameDinamo => "1945-1946",
    $oldNameKrasnoeZnamya => [
        "1947-1952",
        "1954-1957",
    ],
    $oldNameZnamya => "1953",
    $oldNameTextilschick => [
        "1957-1998",
        "2003",
        "2008-н.в.",
    ],
    $ivanovo => "1999-2000",
    $oldNameTextilschick . "Ъ" => "2001-2002",
    $oldNameTextilschick . "-Телеком" => "2004-2007",
];

$clubOldNamesAndDates = [];
$i = 0;
foreach ($mainTable as $clubName => $date) {
    if (is_string($date)) {
        $i++;
        $clubOldNamesAndDates[$i] = prepareValue($clubName, $date);

    }

    if (is_array($date)) {
        foreach ($date as $value) {
            $i++;
            $clubOldNamesAndDates[$i] = prepareValue($clubName, $value);

        }
    }
}


usort($clubOldNamesAndDates, function($a, $b) {
    return $a['date'] <=> $b['date'];
});


//LOGIKA ТОЛЬКО ДЛЯ ТАБЛИЦ, ГДЕ НЕ БОЛЕЕ 2 СТОЛБЦОВ
$coaches = file_get_contents (SERVER_NAME . '/upload/coach.txt'); //задаем переменную, которая работает с указанным файлом
if (!empty($coaches) && strlen($coaches)) { //если переменная не пустая И И  содержит хотя бы 1 символ
    $prepareCoaches = explode("\n", $coaches); //разбивает строку на массив при помощи делиметра слэшН - перенос строки (в кавычках указывается то от чего перенос прыгает)
    $coachTable = []; //объявляем переменную коачтэйбл массивом
    $i = 0;
    foreach ($prepareCoaches as $coach) { // перебираем массив форич (для каждого) где 1 переменная является перебираемым значением массива,
        $i++;
        $result = explode( ',', $coach); //преобразуем строки из значений массива prepareCoaches в массив из 2 заранее известных элементов
        $coachTable[$i]=prepareValue($result[0], $result[1]);
        //$coachTable[$result[0]] = $result[1]; // где ключ резалт0 (имя тренера), а значение резалт1 (год)
    }

    //sortirovka TUT!!!!!
}





$testOne = [
    'bug' => 1,
    2,
    3,
    4
];





$string = 'строка';
$int = 2;
$float = 3.14;
$bool = true || false;
$null = null;
$array1 =[
    1,
    2,
    3,
];
$array2 = [
    'foot' => "ball",
    1.2 => 123,
];
$std0bject = new \stdClass();




if (isset($_GET['sort_by_name'])) {

    uniSort($_GET['sort_by_name'], $coachTable, 'name');

}

if (isset($_GET['sort_by_date'])) {

    uniSort($_GET['sort_by_date'], $coachTable, 'date');

}



/**
 * @param string $sortByName
 * @param array $coachTable
 */
function uniSort(string $sort, array &$coachTable, $type) {
    if ($sort === 'asc') {
        usort($coachTable, function ($a, $b) use ($type) {
            if ($a[$type] === $b[$type]) {
                return 0;
            }
            if ($a[$type] > $b[$type]) {
                return 1;

            }
            return -1;
        });
    }
    if ($sort === 'desc') {
        usort($coachTable, function ($a, $b) use ($type) {
            if ($a[$type] === $b[$type]) {
                return 0;
            }
            if ($a[$type] < $b[$type]) {
                return 1;
            }
            return -1;
        });
    }
}

//function sortCoachByDate(string $sortByDate, array &$coachTable) {
    //if ($sortByDate === 'asc') {
    //    usort($coachTable, function ($a, $b) {
    //        if ($a['date'] === $b['date'] ) {
    //            return 0;
    //        }
    //        if ($a['date'] > $b['date']) {
    //            return 1;
    //        }
    //        return -1;
   //     });
 //   }
 //   if ($sortByDate === 'desc') {
  //      usort($coachTable, function ($a, $b) {
 //           if ($a['date'] === $b['date']) {
   //             return 0;
     //       }
  //          if ($a['date'] < $b['date']) {
   //             return 1;
 //           }
   //         return -1;
 //       });
//    }
//}
//как объединить сортировку по дате и по имени не дублируя код, чтобы одна функция сортировала и по имени и по дате
//аргумент нэйм или дэйт в кач переменной


/**
 * @param string $name
 * @param string $date
 * @return array
 */
function prepareValue(string $name, string $date): array {
    $result['name'] = $name;
    $result['date'] = $date;

    return $result;
}

/**
 * 1) фотографии
 * 2) команды соперники
 * 3) результаты матча
 *
 * part 1
 * настройка вывода контента - front
 *  фото, дата, результаты, соперник
 *
 * part 2
 * настройка логики загрузки данных
 * json
 * file upload
 * форма, которая будет содержать
 *          загрузку файла
 *          результат
 *          соперник
 *          дата
 *
 */
