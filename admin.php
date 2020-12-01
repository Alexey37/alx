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
    return $result;
}

if ($post['submit_match']) {
    dump($post);
    dump($_FILES);
    $error = '';
    $file = $_FILES;
    try {
        if (!$post['team']) {
            throw new Exception('Неверное название команды');
        }

        if (!$post['result']) {
            throw new Exception('Не указан результат');
        }

        if (!$post['date']) {
            throw new Exception('Не указана дата');
        }

        if (!$file['image']) {
            throw new Exception('Не загружено изображение');
        }

        $resultMatches = [
            'team' => $post['team'],
            'result' => $post['result'],
            'date' => $post['date'],
            'image' => 'upload/' . $file['image']['name'],
        ];

        $uploadedResult = move_uploaded_file(
                $file['image']['tmp_name'],
                'upload/img/' . $file['image']['name']
        );

        if (!$uploadedResult) {
            throw new Exception("Не удалось сохранить изображение");
        }

        $data = file_put_contents(
                'upload/match.txt',
                json_encode($resultMatches),
                FILE_APPEND
        );

        if (!$data) {
            throw new Exception('Не удалось сохранить данные');
        }

    } catch (\Exception $exception) {
        $error = $exception->getMessage();
    }
}
print_r($resultMatches);

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
    <br>
    <br>
    <br>
    <p>Сыгранные матчи</p>
    <form method="post" action="admin.php" enctype="multipart/form-data">
        <input type="text" pattern="^[А-Яа-яЁё\-]+$" name="team" placeholder="команда"/>
        <input type="text" pattern="\d+(:\d)?" name="result" placeholder="результат"/>
        <input type="date" pattern="/(19|20)\d\d-((0[1-9]|1[012])-(0[1-9]|[12]\d)|(0[13-9]|1[012])-30|(0[13578]|1[02])-31)/" name="date" placeholder="дата"/>
        <input type="file" name="image"/>
        <input type="submit" name="submit_match" />
    </form>
<?php endif;?>

<?php
function validateDate($date, $format = 'd.m.Y') {
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) == $date;
}

var_dump(validateDate('30.02.2011', 'd.m.Y'));
?>


