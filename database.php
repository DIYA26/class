<?php
$con = mysqli_connect("localhost","root","","utube1") or die($con);
if($con)
{
    echo "";
}
else{
    die('Could not Connect My Sql:' .mysql_error());
}
?>
