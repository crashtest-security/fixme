<?php

include "connect.php";

echo("Creating Database...");

$query = file_get_contents("setup/create_db.sql");
$result = $db->query($query);

echo($result);