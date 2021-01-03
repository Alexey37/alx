<?php

namespace App\Admin;

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