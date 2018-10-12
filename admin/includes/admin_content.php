<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Admin
                <small>Subheading</small>
            </h1>

            <?php


            // $user = new User();

            // $user->username = "student";
            // $user->password = "rico the last";
            // $user->first_name = "rica";
            // $user->last_name = "suaves";

            // $user->create();


            // $user = User::find_by_id(6);

            // echo $user->username;
            // $user->username = "pac";
            // $user->password = "5464537346573";
            // $user->first_name = "MP";
            // $user->last_name = "hernandez";
            // $user->update();

            // $user = User::find_user_by_id(4);
            // $user->delete();

            // $user = User::find_user_by_id(1);
            // $user->username = "WHATEVER";
            // $user->save();

            // $user = new User();
            // $user->username = "SUAVE";
            // $user->save();

            // $photos = Photo::find_all();
            // foreach ($photos as $photo) {
            //     echo $photo->title;
            // }

            // $user = new User();

            // $user->username = "STUDENT";
            // $user->save();

            // $photo = new Photo();

            // $photo->title = "Just some test";
            // $photo->size = 20;
            // $photo->create();

            // echo INCLUDES_PATH;
            $photo = Photo::find_by_id(7);

            echo $photo->filename;

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
