<?php
	include("config.php");
	@session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Ticket</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/form.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery1.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!--start slider -->
<link rel="stylesheet" href="css/fwslider.css" media="all">
<script src="js/jquery-ui.min.js"></script>
<script src="js/css3-mediaqueries.js"></script>
<script src="js/fwslider.js"></script>
<!--end slider -->
<script src="js/jquery.easydropdown.js"></script>
</head>
<body>

<div class="header-top">
  <div class="wrap">
    <div class="header-top-left">
      <div class="clear"></div>
    </div>
    <div class="cssmenu">
      <ul>
        <li><a>Chào mừng đến với Website vé xe DUE!</a></li>
        |
   <?php
	$hello = "";
	if(isset($_SESSION['login']))
	{
		$query = mysqli_query($con,"select * from taikhoan1 where id = '{$_SESSION['login']}'");
    $id = $_SESSION['login'];
		$result = mysqli_fetch_array($query);
		$hello = $result['idstudent'];
		echo"Chào &nbsp;". $hello;
		echo"<a href='/Website Ticket/Website Ticket/Thong_ke.php?id=$id  '> &nbsp; | Xem và chỉnh sửa thông tin của bạn!</a>";
		echo"<a href='?thoat'> &nbsp; | Đăng xuất</a>";

	}else {?>
    				<li><a href="login.php">Đăng nhập</a></li> |
					<li><a href="dangki.php">Đăng kí</a></li>
    <?php }
	if(isset($_GET['thoat']))
	{
		unset($_SESSION['login']);
		header('location:login.php');
	}
?>
      </ul>
    </div>
    <div class="clear"></div>
    </div>
    </div>

<!-- Phần thân -->
	<div class="header-bottom">
	    <div class="wrap">
			<div class="header-bottom-left">
				<div class="logo">
					<a href="index.php"><img src="images/logo6.jpg" alt=""/></a>
				</div>
				<div class="menu">
	            <ul class="megamenu skyblue">
			<li class="active grid"><a href="index.php">TRANG CHỦ</a></li>
			<li><a class="color4" href="#">LOẠI VÉ</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>VÉ THÁNG</h4>
								<ul>
									<li><a href="vexethang.php">Vé xe tháng </a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>THẺ KỲ</h4>
								<ul>
									<li><a href="theki.php">Thẻ kỳ I</a></li>
									<li><a href="theki.php">Thẻ Kỳ II</a></li>
								</ul>	
							</div>							
						</div>
					  </div>
					</div>
				</li>				
				<li><a class="color5" href="#">THÔNG BÁO</a>
				<div class="megapanel">
					<div class="col1">
							<div class="h_nav">
								<h4>THÔNG BÁO VỀ NHÀ XE</h4>
								<ul>
									<li><a href="quydinh.php">QUY ĐỊNH</a></li>
									<li><a href="thongbao.php">THÔNG BÁO</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>THÔNG BÁO VỀ GÓI VÉ</h4>
								<ul>
									<li><a href="vekivethang.php">THẺ KỲ_VÉ THÁNG</a></li>
								</ul>	
							</div>							
						</div>
					</div>
				</li> 
			</ul>
			</div>
			
		</div>


<div class="header-bottom-right">
  <div class="search">
    <form method="get">
    <input type="text"  class="textbox" name="search" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
    <input type="submit" value="Subscribe">
    </form>
     <div id="response"> </div>
  </div>
    
        
  

    <!--/slide --> 
  </div>
  <div class="timers"></div>
  <div class="slidePrev"><span></span></div>
  <div class="slideNext"><span></span></div>
</div>
<?php
	if(isset($_GET['search']))
	{
		$result = mysqli_query($con,"select count(*) from sanpham where name like '%{$_GET['search']}%'");
	} 
	else
	{
		$result = mysqli_query($con,"select count(*) from sanpham");
	}
	
?>










</body>
</html>