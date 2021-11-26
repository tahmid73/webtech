<?php 
session_start(); 
unset($_SESSION['username']);
header("LOCATION: ../view/login.php");