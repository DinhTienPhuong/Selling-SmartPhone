<?php
    $server="localhost";
	$user="root";
	$pass="";
	$db="eshop";

    //$con = mysqli_connect("localhost","root","","cart");
    $con = mysqli_connect($server, $user,$pass,$db);
    if(mysqli_connect_errno()){
        echo "Falied to connect to MySQL: ".mysqli_connect_error();
        exit();
    }
?>