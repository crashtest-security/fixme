<?php

print('<div class="container">');
    print('<div class="row">
            <div class="col-lg-12 text-center">
                <h1>Guestbook</h1>
            </div>
        </div>
        <!-- /.row -->   
    ');

global $db;

if(isset($_POST['entry']) && $_POST['entry'] != "") {
    $id = $_SESSION['userid'];
    $entry = $_POST['entry'];
    $query = "select * from `users` where `id` = '$id' LIMIT 1";
    $result = $db->query($query);
    if ($row = $result->fetch_assoc()) {
        $username = $row['username'];
    }
    $entry = strip_tags($entry);
    $entry = htmlspecialchars($entry);
    $query = "INSERT INTO `guestbook` (`username`, `entry`) VALUES ('$username', '$entry');";
    $result = $db->query($query);
    $db->commit();
    print('<div class="row">
            <div class="col-lg-12 text-center">
                Your entry was recorded.
            </div>
        </div>');
}

$id = $_SESSION['userid'];
$query = "select * from `guestbook` ORDER BY `id` DESC LIMIT 5";
$result = $db->query($query);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $username = $row['username'];
        $entry = $row['entry'];
        print('<div class="row">
            <div class="col-lg-12 text-center">
                ' . $username . ': ' . $entry . '
            </div>
        </div>
        <!-- /.row -->   
    ');
    }
} else {
        print('<div class="row">
            <div class="col-lg-12 text-center">
                Sorry. There is nothing here!
            </div>
        </div>
        <!-- /.row -->   
    ');
}

if(logged_in()) {
        print('<div class="row">
            <div class="col-lg-12 text-center">
    <form action="#" method="POST">
    <textarea rows="4" cols="50" name="entry" id="entry" value="entry" label="entry"></textarea><br />
    <input type="submit" name="submit" id="submit" value="submit" label="submit" />
    </form>
            </div>
        </div>
        <!-- /.row -->   
    ');
} else {
        print('<div class="row">
            <div class="col-lg-12 text-center">
                Sorry. You need to log in to write something.
            </div>
        </div>
        <!-- /.row -->   
    ');
}


print('
    </div>
    <!-- /.container -->');

?>