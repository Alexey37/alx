<?php
require ("lib/header.php");
session_start ();

$post = $_POST;
if (isset($post['password']) && isset($post['submit'])) {
    $password = '123456';
    if ($password === $post['password']) {
        setcookie('auth', 'true', time()+3600);
        $_SESSION['auth']='true';
    }
}

if (isset($post['logout'])) {
    setcookie('auth', false, time() - 3600);
    unset($_SESSION['auth']);
}

$uploadedCoaches = '';
if (file_exists('upload/coach.txt')) {
    $uploadedCoaches = file_get_contents(SERVER_NAME . '/upload/coach.txt');
}



if (isset($post['coaches']) && $post['submit']) {
    $content = explode("\n", $post['coaches']);
    $uploadedCoaches = explode("\n", $uploadedCoaches);
    foreach($content as $key => $value) {
        if (in_array(trim($value), $uploadedCoaches)) {
            unset($content[$key]);
        }
    }


    //уничтожить пробелы и пустые элементы массива (воскресенье)
    $result = array_merge($uploadedCoaches, $content);
    $result = clearArray($result);
    $result = implode("\n", array_unique($result));
    $writeResult = file_put_contents( 'upload/coach.txt', $result);
    if ($writeResult) {
        $success = true;
    }
}

function clearArray (array $array){
    $result =[];
    foreach ($array as $key => $value) {
        $key=trim($key);
        $value=trim($value);
        if (stristr($value,', ')) {
            $value=str_replace (', ', ',', $value);
        }
        if (empty($key) || empty($value)) {    // || - ИЛИ   //если удаляю ключ, то грохается и значение
            continue;
        }
        $result[$key]=$value;
    }
    dump($result);
    return $result;
}



?>


<?php if ($success && $post['submit']): ?>
    <p style="color: greenyellow">Успешно!</p>
<?php endif;?>

<?php if (!$_SESSION['auth']):?>
<p>Пароль</p>
<form method="post" action="admin.php">
    <input type="password" name="password" value=""/>
    <input type="submit" name="submit"/>
</form>
<?php endif;?>

<?php if ($_SESSION['auth'] === 'true'):?>
    <p>Тренеры</p>
<form method="post" action="admin.php">
    <textarea name="coaches"><?= $result ?? $uploadedCoaches ?? ''?></textarea>
    <input type="submit" name="submit"/>
</form>
<form method="post" action="admin.php">
   <input type="submit" name="logout" value="logout"/>
</form>
<?php endif;?>