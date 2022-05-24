<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include('config.php');
@session_start();
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$idstudent=$_POST['idstudent'];
$email = $_POST['email'];
$class=$_POST['class'];
$username=$_POST['username'];
$password=$_POST['password'];
$phone=$_POST['phone'];
$document = mysqli_query($con,"INSERT INTO taikhoan1 (username, password, idstudent ,dienthoai, class ,email, fname, lname)VALUES('$username', '$password', '$idstudent','$phone', '$class','$email', '$fname', '$lname')");
if($document)
	{
	echo "<script>alert('Đăng ký thành công.');
				window.location = 'login.php';
				</script>";
	}
	else
	{
		echo "<script>alert('Đăng ký thất bại.');
				window.location = 'dangki.php';
				</script>";
	}
?>