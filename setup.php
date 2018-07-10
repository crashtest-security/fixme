<?php

include "connect.php";

echo("Creating Database...");

$query = "DROP TABLE IF EXISTS `users`, `guestbook`; CREATE TABLE `users` (`id` int(11) NOT NULL AUTO_INCREMENT `username` varchar(255) NOT NULL, `password` varchar(255) NOT NULL,
PRIMARY KEY(`id`)); CREATE TABLE `guestbook` (`id` int(11) NOT NULL AUTO_INCREMENT, `username` VARCHAR(255) NOT NULL, `entry` TEXT NOT NULL, PRIMARY KEY(`id`)); INSERT INTO `users` (`username`, `password`) VALUES ('admin', 'haXXor'), ('user', '12345678');";
$result = $db->query($query);

echo($result);