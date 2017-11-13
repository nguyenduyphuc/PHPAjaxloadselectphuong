<?php
$servername="localhost";
$username="root";
$pass="";
$db="demoajax";
$conn=new PDO("mysql:host=$servername;dbname=$db",$username,$pass);
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//$conn->exec("SET CHARACTER SET utf-8");