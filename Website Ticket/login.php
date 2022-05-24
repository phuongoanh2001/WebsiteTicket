<?php
	include("config.php");
	session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>website</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery1.min.js"></script>
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="js/jquery.easydropdown.js"></script>
</head>
<body>
<!-- Thuộc tính class có thể sử dụng 
		trong thẻ <div> để lên các khối giao diện giống nhau:-->
		<div class="header-top">
				<div class="wrap"> 
					</div>
					  <div class="cssmenu">
						 <ul>
							 <li><a href="index.php">Quay lại trang chủ</a></li>
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
			
    
<!-- Giải thích từ viết tắt: ul là viết tắt của từ tiếng Anh unordered list
	 (nghĩa là không có thứ tự), li là viết tắt của list, còn ol là viết tắt
	  của ordered list (nghĩa là có thứ tự).-->
				
<!-- <div class="header-top">
			  <div class="header-top-left">
			 <div class="cssmenu">
					<a href="index.php">Thoát</a>
			</div>
			<div class="clear"></div>
	 </div>
     <div class="clear"></div>
     </div> -->
	</div>
        <div class="login">
          	<div class="wrap">
				<div class="col_1_of_login span_1_of_login">
					<h4 class="title">Đăng Kí Thành Viên</h4>
					<p>1. Thành viên cần phải đăng kí thông tin một cách chính xác, họ tên phải được viết hoa kí tự đầu và có dấu rõ ràng. Ví dụ <span>Đặng Ngọc Trân</span>, tên truy cập chỉ được chấp nhận kí tự, _ và số, ví dụ <span>ngoctran_10</span>, các tên truy cập chứa kí tự lạ sẽ bị ban quan trị xóa nick ngay lập tức. Kính mong thành viên chấp hành đúng để có thể sinh hoạt trên website 1 cách nghiêm túc và chuyên nghiệp.</p>
                    <p>2. Sau khi điền đầy đủ các thông tin chính xác, các bạn nhấp vào nút Đăng kí, sau khi hệ thống duyệt đơn đăng kí của bạn sẽ gởi đến bạn 1 email kích hoạt tài khoản.
					<div class="button1">
					   <a href="dangki.php"><input type="submit" name="Submit" value="Đăng kí tại đây"></a>
					 </div>
					 <div class="clear"></div>
				</div>
				<div class="col_1_of_login span_1_of_login">
				<div class="login-title">
	           		<h4 class="title">Đăng Nhập Vào Hệ Thống</h4>
					<div id="loginbox" class="loginbox">
						<form action="checklogin.php" method="post">
						  <fieldset class="input">
						    <p id="login-form-username">
						      <label id="user" for="modlgn_username">Mã sinh viên</label>
						      <input id="user" type="text" name="user" class="inputbox" size="18" autocomplete="off">
						    </p>
						    <p id="login-form-password">
						      <label id="pass" for="modlgn_passwd">Mật khẩu</label>
						      <input id="pass" type="password" name="pass" class="inputbox" size="18" autocomplete="off">
						    </p>
						    <div class="remember">
							    <input type="submit" name="login"  id="login" class="button" value="Đăng nhập"><div class="clear"></div>
							 </div>
						  </fieldset>
						  </div>
						  </div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div class="footer">
			<div class="footer-top">
				<div class="wrap">
				  <div class="section group example">
					<div class="col_1_of_2 span_1_of_2">
						<ul class="f-list">
						  <li><img src="images/3.png"><span class="f-text">LIÊN HỆ VỚI CHÚNG TÔI KHI BẠN CẦN </span>
							<div class="clear">
							</div>
						</li>
						</ul>
					</div>
					<div class="clear"></div>
				  </div>
				</div>
			</div>
		<!-- Phần fb, liên hệ -->
			<div class="footer-middle">
				<div class="wrap">
			   <div class="section group example">
				  <div class="col_1_of_f_1 span_1_of_f_1">
					 <div class="section group example">
					   <div class="col_1_of_f_2 span_1_of_f_2">
						  <h3>Facebook</h3>
							<script>(function(d, s, id) {
							  var js, fjs = d.getElementsByTagName(s)[0];
							  if (d.getElementById(id)) return;
							  js = d.createElement(s); js.id = id;
							  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
							  fjs.parentNode.insertBefore(js, fjs);
							}(document, 'script', 'facebook-jssdk'));</script>
							<div class="like_box">	
								<div class="fb-like-box" data-href="https://www.facebook.com/hotrosinhviendhkt" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
							</div>
					   </div>
					 <div class="col_1_of_f_2 span_1_of_f_2">
					   <h3>Liên hệ</h3>
							<div class="company_address">
								<p>Địa chỉ: 71 Ngũ Hành Sơn, Đà Nẵng, Việt Nam</p>
								<p>Số điện thoại: 0236 3953 773</p>
								<p>Email: <span>hotrosinhvien@due.edu.vn</span></p>					   		
						   </div>
					</div>
					<div class="clear"></div>
				</div>
			   </div>
			  <div class="clear"></div>
				</div>
			  </div>
			</div>
		<!-- phần cuối cùng -->
			<div class="footer-bottom">
				<div class="wrap">
					 <div class="copy">
						<p>© 2022 |<a href="#" target="_blank"> Website Ticket</a></p>
					 </div>
					<div class="clear"></div>
				  </div>
			 </div>
		</div>
</body>
</html>