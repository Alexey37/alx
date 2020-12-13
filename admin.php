<?php
require ("lib/header.php");
require ('lib/admin.php');
$post = $_POST;

$admin = new Admin($post);
$admin->authorize();
$admin->unAuthorize();

$coaches = new Coaches($_POST);
$uploadedCoaches = $coaches->getUploadedCoaches();
$result =

$uploadedCoaches = '';



if ($post['submit_match']) {

    $error = '';
    $file = $_FILES;
    try {
        if (!preg_match( '/[а-яё]/iu', $post['teamH'])) {
            throw new Exception('Неверное название команды хозяев');
        }

        if (!validateResult($post['result'])) {
            throw new Exception('Не указан результат');
        }

        if (!preg_match( '/[а-яё]/iu', $post['teamV'])) {
            throw new Exception('Неверное название команды гостей');
        }

        if (!$post['date']) {
            throw new Exception('Не указана дата');
        }


        $resultMatches = [
            'teamH' => $post['teamH'],
            'result' => $post['result'],
            'teamV' => $post['teamV'],
            'date' => $post['date'],
        ];
        
        $data = file_put_contents(
            'upload/match.txt',
            json_encode($resultMatches) . PHP_EOL,
            FILE_APPEND
        );

        if (!$data) {
            throw new Exception('Не удалось сохранить данные');
        }


    } catch (\Exception $exception) {
        $error = $exception->getMessage();
    }
}
function validateResult (string $result) {
    if (empty($result)) {
        return false;
    }

    if (stristr($result, ':') === false) {
        return false;
    }
    $matchResult = explode(":", $result);

    if (count($matchResult)>2) {
        return false;
    }

    foreach ($matchResult as $value) {
        if (!is_integer((int)$value)) {
            return false;
        }
    }
    return true;
}



echo $error;
?>


<?php if ($success && $post['submit']): ?>
    <p style="color: greenyellow">Успешно!</p>
<?php endif;?>

<?php if (!Admin::isAuthorized()):?>
<p>Пароль</p>
<form method="post" action="admin.php">
    <input type="password" name="password" value=""/>
    <input type="submit" name="submit"/>
</form>
<?php endif;?>

<?php if (Admin::isAuthorized()):?>
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
        <input type="text" name="teamH" placeholder="команда хозяев"/>
        <input type="text" pattern="\d+(:\d)?" name="result" placeholder="результат (в формате Х:Х)"/>
        <input type="text" name="teamV" placeholder="команда гостей"/>
        <input type="date" pattern="/(19|20)\d\d-((0[1-9]|1[012])-(0[1-9]|[12]\d)|(0[13-9]|1[012])-30|(0[13578]|1[02])-31)/" name="date" placeholder="дата"/>

        <input type="submit" name="submit_match" />
    </form>
<?php endif;?>

<?php
function validateDate($date, $format = 'd.m.Y') {
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) == $date;
}

var_dump(validateDate('10.02.2011', 'd.m.Y'));
?>


