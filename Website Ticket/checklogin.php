<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	include('config.php');
	@session_start();
?>
<?php
	if(isset($_POST['login']))
	{
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		if(empty($user) && empty($pass))
		{
			echo "<script>alert('Vui lòng nhập đầy đủ thông tin.');window.location.href='login.php'</script>";
		}else
		{
			$query = mysqli_query($con,"select id from taikhoan1 where idstudent = '{$user}' && password = '{$pass}'");
			$result = mysqli_fetch_array($query);
			if($result)			
			{   
				echo "<script>alert('Đăng nhập thành công !');window.location.href='index.php'</script>";
				$_SESSION['login'] = $result['id'];
			}
			else
			{
				echo "<script>alert('Vui lòng kiểm tra mã sinh viên và mật khẩu !');window.location.href='login.php'</script>";
			}
		}
	}
?>