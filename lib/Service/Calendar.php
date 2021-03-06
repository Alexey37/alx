<?php


namespace App\Service;

use PHPHtmlParser\Dom;

class Calendar
{
    const TEKSTILSHIK = 'Текстильщик';

    private $response;

    /** @var Dom */
    private $domCalendarContent;

    private $url = 'https://fc-textil.ru/';

    public function __construct()
    {
        $this->response = get_headers($this->url);
    }

    public function execute(): array
    {
        if (!$this->isServerLive()) {
            return [];
        }

        $this->getCalenderContent();
        return $this->getOpponents();
    }

    private function isServerLive(): bool
    {
        return stristr($this->response[0], '200');
    }

    private function getCalenderContent(): void
    {
        $this->domCalendarContent = (new Dom())->loadFromUrl($this->url . 'sezon/kalendar/');
    }

    private function getOpponents(): array
    {
        $result = [];
        foreach ($this->domCalendarContent->find('.calendar_item') as $key => $item) {
            $opponent = $this->getOpponent($item->find('.team'));
            if (empty($opponent)) {
                continue;
            }

        $score = trim(strip_tags($item->find('.count')->outerHtml));
        $date = trim(strip_tags($item->find('.date')->outerHtml));
        $opponentLogo = $this->getOpponentLogo($item->find('img') [$opponent['key_position']]);
        $result[$key] = [
            'name' => $opponent['name'],
            'is_visitor' => $opponent['is_visitor'],
            'score' => $score,
            'date' => $date,
            'logo' => $opponentLogo,
        ];
    }
    return $result;
}

        private function getOpponentLogo($img): string
        {
            $imageUrl = 'https://fc-textil.ru' . $img->getAttribute('src');
            $file = file_get_contents($imageUrl);
            if (!$file) {
                return '';
            }
            $imageName = explode("/", $imageUrl);
            $imageName = 'upload/opponents/' . $imageName[count($imageName) - 1];

            if (file_exists($imageName)) {
                return $imageName;
            }

            $result = file_put_contents($imageName, $file);
            if (!$result) {
                return '';
            }

            return $imageName;
        }

    /**
     * @param $teams
     * @return array
     * [
     *  name = Название оппонента
     *  is_visitor = Проводится ли игра дома
     * ]
     */
    private function getOpponent(iterable $teams): array //iterable - перебираемый массив/объект
    {

        $result = [];
        foreach ($teams as $key => $team) {
            $result[$key] = trim(strip_tags($team->outerHtml)); //trim - убирает пробелы в начале и в конце строки. strip_tags убирает html теги
        }

        $key = array_search(static::TEKSTILSHIK, $result, true); //array_search ищет Текстильщик в массиве
        if ($key === false) { //если не находим констТекстильщик толл возвращаем пустой массив
            return [];
        }


        $opponent = [];
        switch ($key) {  //определяем название оппонента и статус (гости/дом)
            case 0:
                $opponent = [
                    'name' => $teams[1],
                    'is_visitor' => false,
                    'key_position' => 1
                ];
                break;
            case 1:
                $opponent = [
                    'name' => $teams[0],
                    'is_visitor' => true,
                    'key_position' => 0
                ];
                break;
        }

        return $opponent;

    }
}

