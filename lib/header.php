<?php
$serverName = "http://" . $_SERVER["SERVER_NAME"];
$title="Текстильщик Иваново";
$regionalFootballClub="Областной футбольный клуб";
$unoffFunPortal="Неофициальный фанатский портал - just for fun";
define("SERVER_NAME", $serverName);
define("IMAGES", $serverName . "/images/");

/*
//Условие if else
if ($_SERVER["REQUEST_URI"] == "/team/") {
    echo 1;
} elseif (stristr($_SERVER["REQUEST_URI"], "team")) {
    echo 2;
} else {
    echo 3;
}

//switch case
switch ($_SERVER["REQUEST_URI"]) {
    case $_SERVER["REQUEST_URI"] == "/team/":
        echo 1;
        break;
    case $_SERVER["REQUEST_URI"] == "/team/kiselev/":
        echo 2;
        break;
    case $_SERVER["REQUEST_URI"] == "/team/smirnov/":
        echo 3;
        break;
    default:
        echo 4;
        break;
}
*/

/*
$array = ["sdfgsg", "vfdgbdb", "sdagvsdgb", "dfbgb"];
$i = 0;
for ($i; $i < 5; $i++) {
        if (empty($array[$i])) {
        echo $array[$i] . "<br>";
    }
}
*/

$pages = [
    "Состав" => [
        "smirnov" => "Смирнов Алексей",
        "kiselev" => "Киселев Максим",
        "fomin" => "Фомин Денис",
    ],
    "Индекс" => [
        "Текстильщик Иваново",
    ],
];

$title = '';
$requestUri = $_SERVER['REQUEST_URI'];
foreach ($pages as $key => $value) {
    if ($key == "Состав" && stristr($requestUri, "team")) {
        if ($requestUri != "/team/") {
            foreach ($value as $pageUri => $pageTitle) {
                if (stristr($requestUri, $pageUri)) {
                    $title = $pageTitle;
                }
            }
            break;
        } else {
            $title = $key;
            break;
        }
    } if ($key == "Индекс") {
        $title = $value[0];
        break;
    }
}

function dump($variable) {
    echo "<pre>";
    print_r($variable);
    echo "</pre>";
}



?>
