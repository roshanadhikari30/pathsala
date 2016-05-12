


<?php

session_start();

#database
include('../config/connection.php');
if($_POST){
    $query= "SELECT * FROM users WHERE email='$_POST[email]' AND password = '$_POST[password]'";

    $res = mysqli_query($dbc,$query);

    if(mysqli_num_rows($res)==1){
        $_SESSION['username']=$_POST['email'];
        header('Location: admin/index.php');
    }
}
?>


<!DOCTYPE html>
<meta name="viewport" content="width=device-width, inital-scale=1">
<html>
<head>

    <?php include('config/css.php');?> <!-- has css -->
    <?php include('config/js.php')?>


    <title> admin login</title> <!-- displaying page title with site title dynamically -->
</head>
<body>

<!-- ends the nav bar -->
<?php //include(D_TEMPLATE.'/navigation.php');?> <!--D_TEMPLATE goes there instead of template folder for dynamic making purp -->


<div class="container-fluid">

    <div class="row">

                <div class="col-md-4 col-md-offset-4">

                    <div class = "panel panel-info">
                        <div class="panel-heading"

                            <em>Login Credentials</em>

                        </div> <!-- end panel-heading -->
                    <div class="panel-body">
                        <form action="login.php" method="post" role="form">
                            <div class="form-group">

                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="email" name ="email" placeholder="Email">

                            </div>
                            <div class="form-group">

                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">

                            </div>

                            <!--
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Check me out
                                </label>
                            </div>

                            -->
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                    </div> <!-- end panel body -->
                </div>
        </div> <!-- end column class -->


    </div>  <!-- end row class -->

<!-- end container class -->


<?php //include( D_TEMPLATE.'/footer.php');?> <!-- footer area !-->

<?php //if($debug==1) {
    //include('widgets/debug.php');} ?>





</html>