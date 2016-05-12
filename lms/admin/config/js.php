<?php
    //javascript pages
?>

<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<!--Jquery UI -->
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.js"</script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>



<script>
        $(document).ready(function (){
            $("#console-debug").hide();
            $("#btn-debug").click(function () {
                    $("#console-debug").toggle();    
            });
        });
</script>
