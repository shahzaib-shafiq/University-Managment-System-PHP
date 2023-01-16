<?php
$db=new mysqli("localhost","root","","managment");
if (!$db)
{
    echo "failed";
}
else
{
    echo "connected";
}
?>