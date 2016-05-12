
       
        <nav class="navbar navbar-default" role="navigation">
           <?php if($debug==1)   { ?>
            <button id="btn-debug" class="btn btn-default"><i class="fa fa-bug" aria-hidden="true"></i>
            </button>
            <?php } ?>
          
                <ul class="nav navbar-nav">

                    <?php
                    /*   IMPORTANT: the code from here is used in funtions/template.php in order to use navigation bar as funtions so as to make it dynamic     */
                    /* In order to get code commented out ?,p etc are deleted,please refer to funtions/template.php to learn 
                    about which code are cut from here */
                       
                       
                        //while($nav=mysqli_fetch_assoc($res)) { //copying this in template function with closing tag
                            //echo '<li><a href="?page='.$nav['id'].'">'.$nav['title'].'</a></li>'; //static navigation bar..so commentted it out
                              /*ending the php and outputting without echo statement */
                                /* we can put html content within the php by breaking the php which is super cool*/

                        
                           // <!-- this piece of code does all the dynamic navigation work instead of putting for each navigation items
                            
                           // <!-- this code is what i had before going fully dynamic- as we can see we had to write this piece of code for multiple items
                           // each one for home, about, faq, contact us.. we are keepking faq and contact us as it is so that we can hard code into it later if i
                           // want..cheers                   
                           // <li/*php if($pageid==2){ echo ' class= "active"';} >><a href="?page=2">About Us</a> </li> 
                            
                            
                           //  <li<php if($pageid==$nav['id']){ echo ' class= "active"';} >> <a href="?page=<php echo $nav['id']; >"><hp echo $nav['label']; ></a> </li>


                        //<php }  >

                        //nav_main($dbc,$pageid);


                    ?>

                    <!-- for highlighting navbar think about space.. there should be space other wise design willbe messy-->
                    <!-- for navbar not to be messy put space either after li or after ' before class
                    Also this navigation bar is static which is not used we can make navigation bar dynamic by pulling information from database
                    which is done inside while loop-- stay tuned for more execersie

                    -->
                     <!--?page=1 means 'index.php?page=1' -->
                            <!-- index.php?page=2;if($pageid==1) {echo 'class="active"';} used instead of class=active in navbar so that when clicked each button will be highlighted-->


                    <li> <a href="#">DashBoard</a> </li>
                    <li><a href="#">Pages</a> </li>
                    <li> <a href="#">Users</a> </li>
                    <li><a href="#">Settings</a> </li>
                </ul>
           
        </nav>
       
                       
                           
         
                            