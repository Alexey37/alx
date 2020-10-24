<?php
    $serverName = "http://" . $_SERVER["SERVER_NAME"];
    define("SERVER_NAME", $serverName);
    echo $serverName;
    echo SERVER_NAME;
    $serverName = "jvfsdkjg";
    echo $serverName;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>alex dev workspace</title>
    <link rel="stylesheet" href="<?php echo SERVER_NAME?>/style.css">
</head>
<body>

