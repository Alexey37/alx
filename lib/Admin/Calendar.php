<?php


namespace App\Admin;

use PHPHtmlParser\Dom;
use PHPHtmlParser\Exceptions\ChildNotFoundException;
use PHPHtmlParser\Exceptions\CircularException;
use PHPHtmlParser\Exceptions\ContentLengthException;
use PHPHtmlParser\Exceptions\LogicalException;
use PHPHtmlParser\Exceptions\StrictException;
use Psr\Http\Client\ClientExceptionInterface;

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

        try {
            return (new Dom())->loadFromUrl($this->url . 'sezon/kalendar/');
        } catch (ChildNotFoundException $e) {
        } catch (CircularException $e) {
        } catch (ContentLengthException $e) {
        } catch (LogicalException $e) {
        } catch (StrictException $e) {
        } catch (ClientExceptionInterface $e) {
        }

    }
}