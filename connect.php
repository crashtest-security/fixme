<?php
    // A simple PHP script demonstrating how to connect to MySQL.
    // Press the 'Run' button on the top to start the web server,
    // then click the URL that is emitted to the Output tab of the console.
​
    $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
​
    $servername = $url["host"];
    $username = $url["user"];
    $password = $url["pass"];
    $database = substr($url["path"], 1);
    $dbport = 3306;
​
    // Create connection
    $db = new mysqli($servername, $username, $password, $database, $dbport);
​
    // Check connection
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }
    
    // Connect to session
    session_start(); 
    
    // Check Login
    function logged_in() {
    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
        return(true);        
    }
    return(false);
}
?>