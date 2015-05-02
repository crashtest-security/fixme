<?php

echo("<html><head>");

include "head.php";

echo("</head><body>");


echo('    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Start Bootstrap</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="?site=about.php">About</a>
                    </li>
                    <li>
                        <a href="?site=services.php">Services</a>
                    </li>
                    <li>
                        <a href="?site=login.php">Login</a>
                    </li>
                    <li>
                        <a href="?site=contact.php">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>');

if (isset($_GET['site']) && $_GET['site'] != "") {
    include $_GET['site'];
} else {
    echo('    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>A Bootstrap Starter Template</h1>
                <p class="lead">Complete with pre-defined file paths that you won\'t have to change!</p>
                <ul class="list-unstyled">
                    <li>Bootstrap v3.3.1</li>
                    <li>jQuery v1.11.1</li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->');
}

echo("</body></html>");

?>