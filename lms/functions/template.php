<?php
/**
 * Created by PhpStorm.
 * User: roshan
 * Date: 4/17/16
 * Time: 4:28 PM
 */


    function nav_main($dbc,$pageid){
        $query = "select * from pages";
        $res = mysqli_query($dbc,$query);
        
        while($nav=mysqli_fetch_assoc($res)) { ?>
            <li<?php if($pageid==$nav['id']){ echo ' class= "active"';}?>> <a href="?page=<?php echo $nav['id']; ?>"><?php echo $nav['label']; ?></a> </li>

        <?php }

    }
        

?>