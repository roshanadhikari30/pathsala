<?php include('config/setup.php'); //accessing setup files

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
                       <div class ="container">
                           <h1> <p> <?php echo $page['header']; ?></p> </h1>
                            <?php echo $page['body_formatted'];?>


                       </div>

                <!-- end wrap-->
         
            <!-- footer code was here now replaced by separate footer page inside navigation folder !-->
           

            <?php include( D_TEMPLATE.'/footer.php');?> <!-- footer area !-->

             <?php if($debug==1) {
                 include('widgets/debug.php');
             } ?>
                   




    </html>