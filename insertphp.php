<?php 

$user='root';
$con= mysqli_connect('localhost', $user); 
mysqli_select_db($con, 'ajaxcurd');

extract($_POST);

if(isset($_POST['submit'])){

	$q =" insert into ajaxinsert (username, password) values ('$username', '$password')" ;

	$query = mysqli_query($con, $q);
	header('location: insert.php');

}

 ?>
