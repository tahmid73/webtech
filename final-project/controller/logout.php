<?php 
session_start(); 
session_unset();
header("LOCATION: ../view/login.php");