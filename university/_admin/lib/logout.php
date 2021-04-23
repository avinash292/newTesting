<?php
session_start();
if($_REQUEST[act])
{
$_REQUEST[act]();
}

function faculty_logout()
{
//echo "hii";
$_SESSION[faculty_user]="";
header('location:../index.php?msg=You are Logout Successfully.....!!!!');
}
function admin_logout()
{
//echo "hello";
$_SESSION[login_user]="";
header('location:../index.php?msg=You are Logout Successfully.....!!!!');
}


?>