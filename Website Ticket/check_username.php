<?php
	include('config.php');
	@session_start();
?>
<?php
$username = $_POST['username'];
if(isset($_POST["username"]))
{
	//check if its ajax request, exit script if its not
	if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
		die();
	}
	
	//try connect to db
	$connecDB = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password)or die('could not connect to database');
	
	//trim and lowercase username
	$username =  strtolower(trim($_POST["username"])); 
	
	//sanitize username
	$username = filter_var($username, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
	
	//check username in db
	$results = mysqli_query($con,"SELECT * FROM taikhoan WHERE username = '$username'");
	
	//return total count
	$username_exist = mysqli_num_rows($results); //total records
	
	//if value is more than 0, username is not available
	if($username_exist) {
		die('<img src="images/not-available.png" /> Tài khoản đã có người sử dụng');
	}else{
		die('<img src="images/available.png" />');
	}
	
	//close db connection
	mysqli_close($con);
}
?>
