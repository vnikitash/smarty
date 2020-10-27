<?php

namespace Models;


class UserModel
{
    private $id;
    private $email;
    private $password;

    public function setEmail(string $email): self
    {
        $this->email = trim(strip_tags($email));

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    //92c3c78c454a0de53f4cfada79ac4db5
    public function setPassword(string $password, bool $needHash = true): self
    {
        $this->password = $needHash ? md5($password) : $password;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    private function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function save(): bool
    {
        if (!$this->email) {
            die("Email not set!");
        }

        if (!$this->password) {
            die("Password Not set");
        }

        if ($this->id) {
            return $this->update();
        }

        return $this->create();
    }

    private function create(): bool
    {
        $db = \DB::getInstance();
        $db->query("
          INSERT 
          INTO users 
          SET 
            email = '{$this->email}', 
            password = '{$this->password}'");

        $this->setId($db->insert_id);

        return empty($db->error);
    }

    private function update()
    {
        $db = \DB::getInstance();
        $db->query("
          UPDATE 
            users 
          SET 
            email = '{$this->email}', 
            password = '{$this->password}'
          WHERE id = {$this->id} LIMIT 1");

        return empty($db->error);
    }

    public function delete(): bool
    {
        if (!$this->id) {
            die("User should exits in DB!");
        }

        $db = \DB::getInstance();
        $db->query("DELETE FROM users WHERE id = {$this->id} LIMIT 1");

        return (bool) $db->affected_rows;
    }

    public static function find(string $email): ?self
    {
        $db = \DB::getInstance();
        $res = $db->query("
          SELECT * 
          FROM users 
          WHERE email = '$email' 
          LIMIT 1");

        //'92c3c78c454a0de53f4cfada79ac4db5'

        $arrayUser = $res->fetch_assoc();

        if (empty($arrayUser)) {
            return null;
        }

        $user = new self();

        $user
            ->setPassword($arrayUser['password'], false)
            ->setId($arrayUser['id'])
            ->setEmail($email);

        return $user;
    }

    public static function getAllUser(): array
    {
        $db = \DB::getInstance();
        $res = $db->query("
          SELECT * 
          FROM users 
        ");


        return $res->fetch_all(MYSQLI_ASSOC);
    }
}