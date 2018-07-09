<?php

function login($username, $password) {
    global $db;
    $query = "select `id` from `users` where `username` = '$username' AND `password` = '$password'";
    $result = $db->query($query);
    if ($result->num_rows > 0 && $row = $result->fetch_assoc()) {
        $_SESSION['logged_in'] = true;
        $_SESSION['userid'] = $row['id'];
        return(true);
    }
    print('<div class="row"><div class="col-lg-12 text-center" style="color:red;">Login unsuccessful!</div></div>');
    return(false);
}



print('<div class="container">');


if (logged_in() || (isset($_POST['username']) && isset($_POST['password']) && login($_POST['username'], $_POST['password']))) {
    $id = $_SESSION['userid'];
        global $db;
    $query = "select * from `users` where `id` = '$id' LIMIT 1";
    $result = $db->query($query);
    if ($row = $result->fetch_assoc()) {
        $username = $row['username'];
    }
    
    print('<div class="row">
            <div class="col-lg-12 text-center">
                <h1>Private Area</h1>
                Hey ' . $username . '. Nice to have you here!
            <a href="?site=logout.php">Logout</a>
            </div>
        </div>
        <!-- /.row -->   
    ');
} else {
    print('<div class="row">
            <div class="col-lg-12 text-center">
                <h1>Login</h1>
                <br />
    <form action="#" method="POST">
    <input type="text" name="username" id="username" placeholder="username" label="username" /><br />
    <input type="password" name="password" id="password" placeholder="password" label="password" /><br />
    Stay logged in? <input type="checkbox" name="loggedin" id="loggedin" value="true" /><br />
    <input type="submit" name="submit" id="submit" value="submit" label="submit" />
    </form>
            </div>
        </div>
        <!-- /.row -->');
}

print('
    </div>
    <!-- /.container -->');

?>
