<?php

    session_start();
    if(!isset($_SESSION['username'])){
        header('Location: login.php');
    }

?>

<?php include('config/setup.php');
?>

<!DOCTYPE html>
<meta name="viewport" content="width=device-width, inital-scale=1">
<html>
<head>

    <?php include('config/css.php');?> <!-- has css -->
    <?php include('config/js.php')?>


    <title> <?php echo $page['title'].'|'.$site_title; ?></title> <!-- displaying page title with site title dynamically -->
</head>
<body>

<!-- ends the nav bar -->
<?php include(D_TEMPLATE.'/navigation.php');?> <!--D_TEMPLATE goes there instead of template folder for dynamic making purp -->
<h1> Admin DashBoard </h1>



<?php include( D_TEMPLATE.'/footer.php');?> <!-- footer area !-->

<?php if($debug==1) {
    include('widgets/debug.php');
} ?>





</html>