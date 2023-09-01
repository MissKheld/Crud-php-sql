<?php 
 $con = mysqli_connect('localhost', 'root', '');
 	if (!$con) {
 		die("Echec de connexion" . mysqli_error($con));
 	}

 $select_db = mysqli_select_db($con, '8-CRUD');
 	if (!$select_db) {
 		die("Echec de selection de la BD" . mysqli_error($con));
 	}
