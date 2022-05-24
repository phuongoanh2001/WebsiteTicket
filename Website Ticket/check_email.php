<?php
	include('config.php');
	@session_start();
?>
<?php
$email = $_POST['email'];
if(isset($_POST["email"]))
{
	//check if its ajax request, exit script if its not
	if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
		die();
	}
	
	//try connect to db
	$connecDB = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password)or die('could not connect to database');
	
	//trim and lowercase username
	$email =  strtolower(trim($_POST["email"])); 
	
	//sanitize username
	$email = filter_var($email, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
	
	//check username in db
	$results = mysqli_query($con,"SELECT * FROM taikhoan WHERE email = '$email'");
	
	//return total count
	$username_exist = mysqli_num_rows($results); //total records
	
	//if value is more than 0, username is not available
	if($username_exist) {
		die('<img src="images/not-available.png" /> Email không hợp lệ ! ');
	}else{
		die('<img src="images/available.png" />');
	}
	
	//close db connection
	mysqli_close($con);
}
?>
