<?php


error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

/**
 *
 * S - Single responsibility Principle - принцип единой ответственности
 * O - open close principle - принцип открытости закрытости -
 * L - Barbara Liskov Substitution Principle - принцип подскановки Барбары Лисков
 * I - Interface Segregation - разделение инфтерфейсов
 * D - Dependency inversion - инверсия зависимостей - Зависимость на абстрациях (абстрактные классы или интерфейсы)
 *
 */



class AClass
{
    public function test(int $a)
    {
        echo "Hello";
    }

    public function qwe()
    {

    }
}

$a = new AClass();
$a->test("asdasd");








die();





















require_once "Helpers/DB.php";
require_once "Models/User.php";


interface Commentabe
{
    public function getType(): string;
    public function getId(): int;
}

class Post implements Commentabe
{

    public function getType(): string
    {
        return self::class;
    }

    public function getId(): int
    {
        return 1;
    }
}

class Photo implements Commentabe
{

    public function getType(): string
    {
        return self::class;
    }

    public function getId(): int
    {
        return 1;
    }
}

class Video implements Commentabe
{

    public function getType(): string
    {
        return self::class;
    }

    public function getId(): int
    {
        return 1;
    }
}

class Audio implements Commentabe
{

    public function getType(): string
    {
        return self::class;
    }

    public function getId(): int
    {
        return 1;
    }
}

class Comment
{

}

class CommentService
{

    public function comment(Commentabe $commentabe, string $comment, int $userId)
    {
        $query = "
        
        INSERT INTO comments 
        SET 
          comment_source = '{$commentabe->getType()}',
          comment_source_id = '{$commentabe->getId()}',
          user_id = $userId,
          comment = '$comment'
        ";
    }

}


$cs = new CommentService();

$c = new User();
$cs->comment($c, "LOL", 1);

































die();

interface Payable
{
    public function pay(float $amount): float;
    public function getServiceName(): string;
}

interface Subscribable
{
    public function subscribe();
}


class LiqPay implements Payable, Subscribable
{

    private const TAX = 0.015;

    public function pay(float $amount): float
    {
        //
        return $amount * (1 + self::TAX);
    }

    public function getServiceName(): string
    {
        return self::class;
    }

    public function subscribe()
    {
        // TODO: Implement subscribe() method.
    }
}

class PayPal implements Payable, Subscribable
{
    private const TAX = 0.01;

    public function pay(float $amount): float
    {
        return $amount * (1 + self::TAX);
    }

    public function getServiceName(): string
    {
        return self::class;
    }

    public function subscribe()
    {
        // TODO: Implement subscribe() method.
    }
}

class Stripe implements Payable, Subscribable
{
    private const TAX = 0.009;

    public function pay(float $amount): float
    {
        return $amount * (1 + self::TAX);
    }

    public function getServiceName(): string
    {
        return self::class;
    }

    public function subscribe()
    {
        // TODO: Implement subscribe() method.
    }
}

class BrainTree implements Payable, Subscribable
{
    private const TAX = 0.02;

    public function pay(float $amount): float
    {
        return $amount * (1 + self::TAX);
    }

    public function getServiceName(): string
    {
        return self::class;
    }

    public function subscribe()
    {
        // TODO: Implement subscribe() method.
    }
}

class iPay implements Payable
{

    public function pay(float $amount): float
    {
        return false;
    }

    public function getServiceName(): string
    {
        return false;
    }
}

class PaymentService
{
    public function proceedPayment(Payable $paymentSystem, float $amount)
    {
        $total = $paymentSystem->pay($amount);
        file_put_contents("log.txt", "Payment [{$paymentSystem->getServiceName()}]. Received $amount, taken: $total" . PHP_EOL, FILE_APPEND);
    }
}

$pp = new PayPal();
$lp = new LiqPay();
$st = new Stripe();


$ps = new PaymentService();

$ps->proceedPayment(new BrainTree(), 100);













class A
{
   public function t1() {}
}

class B extends A
{
    public function t2() {

    }
}

function test(B $obj) { // A => B

}