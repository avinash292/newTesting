<?php
session_start();
$_SESSION[faculty_user]="";
header('location:../index.php');
?>