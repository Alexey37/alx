<?php
require ("lib/header.php");

use App\Admin\Coaches;
use App\Admin\Admin;
use App\Admin\Calendar;

$calendar = new Calendar();
$dom = $calendar->parseContent($calendar->isServerLive());
if ($dom !== null) {

}


$post = $_POST;

$admin = new Admin($post);
$admin->authorize();
$admin->unAuthorize();

$coaches = new Coaches($_POST);
$uploadedCoaches = $coaches->getUploadedCoaches();
$result =

$uploadedCoaches = '';


if (isset($post['coaches']) && $post['submit']) {


    $writeResult = file_put_contents( 'upload/coach.txt', $result);
    if ($writeResult) {
        $success = true;
    }
}

if ($post['submit_match']) {

    $error = '';
    $file = $_FILES;
    try {
        if (!preg_match( '/[а-яё]/iu', $post['team_home'])) {
            throw new Exception('Неверное название команды хозяев');
        }

        if (!validateResult($post['result'])) {
            throw new Exception('Не указан результат');
        }

        if (!preg_match( '/[а-яё]/iu', $post['team_visitors'])) {
            throw new Exception('Неверное название команды гостей');
        }

        if (!$post['date']) {
            throw new Exception('Не указана дата');
        }


        $resultMatches = [
            'teamH' => $post['team_home'],
            'result' => $post['result'],
            'teamV' => $post['team_visitors'],
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

?>

<link rel="stylesheet" href="bootstrap.css">

<div class="container">

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

    <form method="post" action="admin.php">
        <input class="btn btn-danger" type="submit" name="logout" value="logout"/>
    </form>

    <form method="post" action="admin.php">
        <div class="mb-3">
            <label for="coaches" class="form-label">Тренеры</label>
            <textarea class="form-control" id="coaches" rows="3" name="coaches"><?= $result ?? $uploadedCoaches ?? ''?></textarea>
        </div>
        <div>
            <input class="btn btn-info" type="submit" name="submit"/>
        </div>
    </form>

    <br>
    <p>Сыгранные матчи</p>
    <form method="post" action="admin.php" enctype="multipart/form-data">
        <input type="text" name="team_home" placeholder="команда хозяев"/>
        <input type="text" pattern="\d+(:\d)?" name="result" placeholder="результат (в формате Х:Х)"/>
        <input type="text" name="team_visitors" placeholder="команда гостей"/>
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
</div>

<script src="jquery.js"></script>
<script src="bootstrap.js"></script>

