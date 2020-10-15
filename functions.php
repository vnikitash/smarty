<?php

class DB
{
    private static $db;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (!self::$db) {
            echo "ESTABLISH CONNECTION...<br>";
            self::$db = new mysqli(
                'db',
                'root',
                '',
                'skillup'
                );
        }

        echo "READ FROM EXISTING VARIABLE<br>";
        return self::$db;
    }
}
class DB2
{
    private $db;

    public function getInstance()
    {
        if ($this->db) {
            echo "READ OLD CONNECT<br>";
            return $this->db;
        }
        echo "ESTABLISH NEW CONNECT<br>";
        return $this->db = new mysqli('db', 'root', '', 'skillup');
    }
}


class Session
{

    public function __construct()
    {
        if ($_COOKIE['session_id']) {
            session_id($_COOKIE['session_id']);
            session_start();
        } else {
            session_start();
            setcookie('session_id', session_id(), time() + 1000);
        }
    }

    public function get(string $key, $default = null)
    {
        return $_SESSION[$key] ?? $default;
    }

    public function set(string $key, $data)
    {
        $_SESSION[$key] = $data;
    }
}

$session = new Session();
echo $session->get('name');