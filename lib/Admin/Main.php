<?php

namespace App\Admin;

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