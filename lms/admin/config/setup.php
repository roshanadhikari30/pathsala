

<?php
/**
 * Created by PhpStorm.
 * User: roshan
 * Date: 4/12/16
 * Time: 5:46 PM
 */
/* database connectivity*/

#database connectivity

include('../config/connection.php');


/*constants*/

DEFINE('D_TEMPLATE','template');  //D_TEMPLATE means directories for template so that when testing new template it will be easier to just change the values

/* funtions*/
include('functions/data.php');
include('functions/template.php');

#Site setup
$debug = data_setting_value($dbc,'debug-status');

$site_title = 'firststepsinwebdev';
if(isset($_GET['page'])){
    $pageid = $_GET['page']; //set pageid equal to value given in the URL
}
else {
    $pageid=1;  //set pageid 1 or equal to HOMEPAGE
}


/*page setup+run the funtions*/

$page = data_page($dbc,$pageid);

?>