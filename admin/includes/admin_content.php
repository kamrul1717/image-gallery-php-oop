<?php include("user.php"); ?>

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                ADMIN
                <small>Subheading</small>
            </h1>

            <?php 

            $user = new User();

            $user->username = "Student                 ksdjfkldsj";
            $user->password = "something weird !@#$$%^&";
            $user->first_name = "solksd%%%";
            $user->last_name = "don'            t know";

            $user->create();


            // $user = User::find_user_by_id(7);
            // $user->username = "WILLIAMSom    dsjflk";
            // $user->password = "davi46#$$%%d45";
            // $user->first_name = "david";
            // $user->last_name = "rob";

            // $user->update();


            // $user = User::find_user_by_id(6);
            // $user->delete();

            // $user = User::find_user_by_id(6);
            // $user->password = "justpassword";

            // $user->save();

            // $user = new User();
            // $user->username = "SUAVE";
            // $user->save();


             ?>


            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                </li>
                <li class="active">
                    <i class="fa fa-file"></i> Blank Page
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container-fluid -->