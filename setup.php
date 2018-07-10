<?php

include "connect.php";

$query = file_get_contents("setup/create_db.sql");
$result = $db->query($query);

echo("Created Database.");