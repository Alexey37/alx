<?php

/**
 * $_POST = вся логика завязан на пост запросе
 *
 * 1) авторизация и логаут
 * 2) форма для работы с таблицей тренеры
 * 3) форма заполнения матчей
 *
 * Class Admin
 */

class Main {

    protected const COACH_FILE = 'upload/coach.txt';

    protected $post;

    public function __construct(array $post)
    {
        if (isset($post['submit']) || isset($post['submit_match'])) { //если сабмит или сабмит_матч существуют,
            $this->post = $post; //то записываем в свойство пост массив пост
        }
    }

    protected function clearArray(array $array)
    {
        $result = [];
        foreach ($array as $key => $value) {
            $key = trim($key);
            $value = trim($value);
            if (stristr($value, ', ')) {
                $value = str_replace(', ', ',', $value);
            }
            if (empty($key) || empty($value)) {    // || - ИЛИ   //если удаляю ключ, то грохается и значение
                continue;
            }
            $result[$key] = $value;
        }
        return $result;
    }

    protected function saveData(string $fileName, string $data)
    {
        return file_put_contents($fileName, $data) !== false;
    }

    protected function explodeByLineBreak(string $string): array
    {
        return explode("\n", $string);
    }
}

class DataBase {

    const DSN = 'mysql:host=localhost;dbname=arashi5_alex';
    const USER_NAME ='arashi5_alex';
    const PASS = 'Takoro923Dzad';

    private $connection;

    public function __construct()
    {
        try {
            $this->connection = new PDO(
                static::DSN,
                static::USER_NAME,
                static::PASS
            );
        } catch (Exception $exception) {
            //TODO ДЗ - обработать ошибку
        }
    }

    public function getAdminPasswords()
    {
        try {
            $sqlQuery = 'SELECT password FROM user WHERE role="adm"';
            $dbResult = $this->connection->query($sqlQuery);
            return $dbResult->fetchAll( \PDO::FETCH_ASSOC);
        } catch (Exception $exception) {
            dump($exception->getMessage());
        }
    }
}


class Admin extends Main {

    public function authorize(): void
    {
        if (!isset($this->post['password'])) {
            return;
        }

      $passwords = (new DataBase())->getAdminPasswords();
      $passwords = array_column($passwords, 'password');
        if (in_array($this->post['password'], $passwords, true)) {
            session_start();
            $_SESSION['auth'] = true;
        }
    }





    public function unAuthorize(): void
    {
        if (isset($post['logout'])) {
            unset($_SESSION['auth']);
        }
    }

    /**
     * @return bool
     */
    public static function isAuthorized(): bool
    {
        return $_SESSION && $_SESSION['auth'] === true;
    }
}
//TODO: починить
class Coaches extends Main {

    private $uploadedCoaches = '';

    public function getUploadedCoaches(): string
    {
        if (file_exists('upload/coach.txt')) {
            $this->uploadedCoaches = file_get_contents(SERVER_NAME . '/upload/coach.txt');
        }

        return $this->uploadedCoaches;
    }

    public function execute(): ?bool
    {
        if (!isset($this->$post['coaches'])) {
            return null;
        }
        $content = $this->explodeByLineBreak($this->post['coaches']);
        $uploadedCoaches = $this->explodeByLineBreak($this->uploadedCoaches);
        $coachData = $this->prepareCoachData($content, $uploadedCoaches);
        return $this->saveData(static::COACH_FILE, $coachData);
    }



    private function prepareCoachData(array $content, array $uploadedCoaches): string
    {
        foreach($content as $key => $value) {
            if (in_array(trim($value), $uploadedCoaches)) {
                unset($content[$key]);
            }
        }

        $result = $this->clearArray(array_merge($uploadedCoaches, $content));
        return implode("\n", array_unique($result));
    }
}

if (isset($post['coaches']) && $post['submit']) {


    $writeResult = file_put_contents( 'upload/coach.txt', $result);
    if ($writeResult) {
        $success = true;
    }
}


$host = 'localhost';  // Хост, у нас все локально
$user = 'arashi5_alex';    // Имя созданного вами пользователя
$pass = '1q2w3e4r5t'; // Установленный вами пароль пользователю
$db_name = 'MySQL - arashi5_alex@vh214.timeweb.ru';   // Имя базы данных
$link = mysqli_connect($host, $user, $pass, $db_name); // Соединяемся с базой

// Ругаемся, если соединение установить не удалось
if (!$link) {
    echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
    exit;
}


