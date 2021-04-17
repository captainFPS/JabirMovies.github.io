<?php

$server = "sql204.epizy.com";
$username = "epiz_28411607";
$password = "3izejF5RKQG";
$dbname = "epiz_28411607_Jabir";

  $conn = mysqli_connect($server, $username, $password, $dbname);

  if(!$conn){
      die("Connection Failed:".mysqli_connect_error());
  }

  ?>