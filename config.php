<?php 
$host='localhost';
$username='root';
$password='';
$dbname='task';
	$elaqe=mysqli_connect($host,$username,$password,$dbname);
		if (!$elaqe) {
			echo "DataBase ilə elaqə qurulmadı";
		}

 ?>