<?php

$db = new SQLite3("users.db");

function logged_in() {
        return(false);
}

if (logged_in()) {
    print("Yeah");
} else {
    print("Login_Form");
}

?>