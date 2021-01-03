<?php

namespace App\Admin;

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
