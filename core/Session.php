<?php
namespace Core;

/**
 * Session class
 *
 * @author Nguyen Viet Duong
 */
class Session
{
    private $session;

    public function __construct()
    {
        $this->session = $_SESSION;
    }

    public function getSession() {
        return $this->session;
    }

    public function getData($keyName) {
        return $this->session[$keyName] ?? null;
    }

    public function setData($keyName, $value) {
        if (!$keyName) {
            throw new \Exception('Session key is required!');
        }
        $_SESSION[$keyName] = $value;
    }

    public function unset() {
        session_unset();
    }

    public function destroy() {
        session_destroy();
    }
}