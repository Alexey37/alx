<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
$root = '';
if ($_SERVER['REQUEST_URI'] !== '/admin.php') {
    $rootLevels = explode('/', $_SERVER['REQUEST_URI']);
    foreach ($rootLevels as $key => $level) {
        if ($key === 0 || !$level) {
            continue;
        }
        $root .= '../';
    }
}

require_once $root . "vendor/autoload.php";

$serverName = "http://" . $_SERVER["SERVER_NAME"];
$title="Текстильщик Иваново";
$regionalFootballClub="Областной футбольный клуб";
$unoffFunPortal="Неофициальный фанатский портал - just for fun";
define("SERVER_NAME", $serverName);
define("IMAGES", $serverName . "/images/");


?>
