<?php

    echo('    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>You are now logged out.</h1>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->');
    session_destroy();
    session_regenerate_id();

?>