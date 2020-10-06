<?php


require_once "libs/Smarty.class.php";

$db = new mysqli("db", 'root', '', 'skillup');



function deleteAll()
{

    global $db;

    $deleteOrderItems = "DELETE FROM order_items";
    $deleteOrders = "DELETE FROM orders";
    $deleteProducts = "DELETE FROM products";
    $deleteUsers = "DELETE FROM users";

    $db->query($deleteOrderItems);
    $db->query($deleteOrders);
    $db->query($deleteProducts);
    $db->query($deleteUsers);
}

function generateAll()
{

    global $db;

    $insertUsers = "INSERT INTO users (email, age) VALUES ";

    $usersToInsert = [];

    for ($i = 0; $i < 500; $i++) {
        $usersToInsert[] = "('user+$i@gmail.com', $i)";
    }

    $query = $insertUsers . implode(",", $usersToInsert);
    $db->query($query);


    $insertProducts = "INSERT INTO products (name, price) VALUES ";

    $productsToInsert = [];

    for ($i = 0; $i < 1000; $i++) {
        $productsToInsert[] = "('Product $i', '" . (rand(100,100000) / 100) . "')";
    }

    $query = $insertProducts . implode(",", $productsToInsert);
    $db->query($query);

    $userIds = $db->query("SELECT id FROM users ORDER BY RAND() LIMIT 100;")->fetch_all(MYSQLI_ASSOC);

    $userIds = array_map(function ($array) {
        return $array['id'];
    }, $userIds);

    $productIds = $db->query("SELECT id FROM products ORDER BY RAND() LIMIT 900;")->fetch_all(MYSQLI_ASSOC);

    $productIds = array_map(function ($array) {
        return $array['id'];
    }, $productIds);


    $orders = [];

    $insertOrders = "INSERT INTO orders (user_id, created_at) VALUES ";

    foreach ($userIds as $userId) {
        $ordersCount = rand(1,8);
        for ($i = 0; $i < $ordersCount; $i++) {
            $orders[] = "($userId, '" . date("Y-m-d H:i:s", rand(1590969600, 1598918399)) . "')";
        }
    }

    $db->query($insertOrders . implode(",",$orders));

    $orderIds = $db->query("SELECT id FROM orders")->fetch_all(MYSQLI_ASSOC);

    $orderIds = array_map(function ($array) {
        return $array['id'];
    }, $orderIds);

    $orderItems = [];

    $productMaxIndex = count($productIds) - 1;

    $orderQuery = "INSERT INTO order_items (order_id, item_id, `count`, price) VALUES ";
    $orderItems = [];

    foreach ($orderIds as $orderId) {
        $productsInOrder = rand(1,3);
        for ($i = 0; $i < $productsInOrder; $i++) {
            $orderItems[] = "($orderId, " . $productIds[rand(0, $productMaxIndex)] . ", " . rand(1,3) . ", " . (rand(1000, 100000) / 100) . ")";
        }
    }

    $db->query($orderQuery . implode(",", $orderItems));


}

$start = microtime(true);
deleteAll();
generateAll();

echo "TIME: " . (microtime(true) - $start);

/*
$template = "INSERT INTO users (email, age) VALUES ('%s@localhost', %s)";

for($i = 0; $i < 500; $i++) {
    $query = sprintf($template, $i, $i);
    $db->query($query);
}

echo "TIME: " . (microtime(true) - $start);
*/

/* SELECT
$res = $db->query("SELECT * FROM users");

$users = $res->fetch_all(MYSQLI_ASSOC);

foreach ($users as $user) {
    echo $user['email'] . '<br>';
}
*/





/* INSERT
$time = time();
$query = "INSERT INTO `users` SET `email` = 'user+$time@gmail.com', `md5` = '" . md5($time) . "', `salt` = '23aa'";
$db->query($query);
*/





/* DELETE
$query = "DELETE FROM `users` WHERE id = 14 LIMIT 1";
$db->query($query);
*/





/* UPDATE
$query = "UPDATE `users` SET `email` = 'updated' WHERE `id` = 13";
$db->query($query);
*/
