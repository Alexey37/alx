<?php


namespace App\Admin;

use PHPHtmlParser\Dom;

class Calendar
{
    private $response;

    private $url = 'https://fc-textil.ru/';

    public function __construct()
    {
        $this -> response = get_headers($this->url);
    }

    public function isServerLive(): bool
    {
        return stristr($this->response[0], '200');
    }

    public function parseContent(bool $live): ?Dom
    {
        if (!$live) {
            return null;
        }

        return (new Dom())->loadFromUrl($this->url . 'sezon/kalendar/');

    }
}