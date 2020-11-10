<?php
$title="Текстильщик Иваново";
$regionalFootballClub="Областной футбольный клуб";
$unoffFunPortal="Неофициальный фанатский портал - just for fun";
$yearOfFoundation = 1937;
$yearFirstCupRsfsrWinner = 1940;
$yearSecondCupRsfsrWinner = 1986;
$yearFinalCupRsfsr = 1984;
$yearGoldenRingCupWinner = 2001;
$yearSecondDivWinner = 2006;
$yearSecondDiwWinnerPartOne = 2018;
$yearSecondDiwWinnerPartTwo = 2019;
$oldNameSpartak = '"Спартак"';
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
    $oldNameTextilschick . "Телеком" => "2004-2007",
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




//LOGIKA
$coaches = file_get_contents (SERVER_NAME . '/upload/coach.txt');
if (!empty($coaches) && strlen($coaches)) {
    $prepareCoaches = explode("\n", $coaches);
    $coachTable = [];
    foreach ($prepareCoaches as $coach) {
        //TUT!!!!1 uslovija
        $result = explode( ',', $coach);
        $coachTable[$result[0]] = $result[1];
    }

    //sortirovka TUT!!!!!
}










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




if (isset($_GET['sort_by_name']) || isset($_GET['sort_by_date'])) {

    sortCoachByName($_GET['sort_by_name'], $coachTable);


    if ($_GET['sort_by_date'] === 'date') {
        arsort($coachTable);
    }
}



/**
 * @param string $sortByName
 * @param array $coachTable
 */
function sortCoachByName(string $sortByName, array &$coachTable) {

    if (empty($sortByName)) {
        return;
    }

    if ($sortByName === 'asc') {
        ksort($coachTable);
        return;
    }

    if($sortByName === 'desc') {
        krsort($coachTable);
        return;
    }
}

/**
 * @param string $sortByDate
 * @param array $coachTable
 */


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
?>