<?php

interface CRUDable
{
    public function create();
    public static function read();
    public function update(): bool;
    public function delete(): bool;
}

class User implements CRUDable
{

    public function create()
    {
        // TODO: Implement create() method.
    }

    public static function read()
    {
        // TODO: Implement read() method.
    }

    public function update(): bool
    {
        return false;
    }

    public function delete(): bool
    {
        return false;
    }
}

class Order implements CRUDable
{
    public function create()
    {
        // TODO: Implement create() method.
    }

    public static function read()
    {
        // TODO: Implement read() method.
    }

    public function update(): bool
    {
        return false;
    }

    public function delete(): bool
    {
        return false;
    }
}

class Product implements CRUDable
{
    public function create()
    {
        // TODO: Implement create() method.
    }

    public static function read()
    {
        // TODO: Implement read() method.
    }

    public function update(): bool
    {
        return false;
    }

    public function delete(): bool
    {
        return false;
    }
}

class Cart implements CRUDable
{

    public function create()
    {
        // TODO: Implement create() method.
    }

    public static function read()
    {
        // TODO: Implement read() method.
    }

    public function update(): bool
    {
        // TODO: Implement update() method.
    }

    public function delete(): bool
    {
        // TODO: Implement delete() method.
    }
}

/**
 * C - create
 * R - read
 * U - update
 * D - delete
 */


Product::read();
User::read();
Order::read();
Cart::read();