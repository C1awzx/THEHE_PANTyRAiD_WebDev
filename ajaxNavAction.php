<?php
session_start();
if($_SESSION['loggedIn']>0)
{
    echo"YES";
}
else
{
    echo"NO";
}
?>