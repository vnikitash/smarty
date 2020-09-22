<?php

$db = new mysqli("db", 'root', '', 'skillup');


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