<?php

$servername = "https://arsal16496.github.io/pentagontechnologies.github.io/";
$dBUsername = "root";
$dbPassword = "";
$dBName = "370projects";

$conn = mysqli_connect($servername, $dBUsername, $dbPassword, $dBName);

if(!$conn){
	echo "Databese Connection Failed";
}

?>