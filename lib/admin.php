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

class Admin extends Main {

    const PASSWORD = '123456';

    public function authorize(): void
    {
        if (!isset($this->post['password'])) {
            return;
        }

        if ($this->post['password'] === static::PASSWORD) {
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


