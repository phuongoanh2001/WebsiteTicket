<?php 
	include('config.php');
	@session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Ticket</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery1.min.js"></script>
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script type="text/javascript" src="js/core.js"></script>
<script src="js/jquery.easydropdown.js"></script>
<script type="text/javascript">
	function laemail()
	{
		var mail = document.all.email.value;
		var acong = mail.indexOf("@");
		var dodai = mail.length-1;
		var daucham = mail.lastIndexOf('.');
		var daucach = mail.indexOf(' ');
		if((dodai<=5) || (acong<1) || (daucham<=acong+1) || daucach!=-1)
		{
			return false;
		}
		return true;
	}
</script>
<script type="text/javascript">
function validateForm()
{
var a=document.forms["reg"]["username"].value;
var b=document.forms["reg"]["password"].value;
var c=document.forms["reg"]["confirmPasswordInput"].value;
var d=document.forms["reg"]["phone"].value;
var f=document.forms["reg"]["class"].value;
var e=document.forms["reg"]["email"].value;
var h=document.forms["reg"]["idstudent"].value;
var y=document.forms["reg"]["fname"].value;
var i=document.forms["reg"]["lname"].value;
if ( (a==null || a=="") && (b==null || b=="") && (c==null || c=="")  && (d==null || d=="") &&  (f==null || f=="") && (e==null || e=="") &&
(h==null || h=="") && (y==null || y=="") && (i==null || i==""))
{
alert(" Tất cả thông tin phải đầy đủ, không được bỏ trống ");
return false;
}
if (a==null || a=="")
{
alert("Bạn cần nhập username !");
return false;
}
if (b==null || b=="")
{
alert("Bạn cần nhập Password !");
return false;
}
if (c==null || c=="")
{
alert("Bạn cần nhập Password !");
return false;
}
if (d==null || d=="")
{
alert("Bạn cần nhập số điện thoại !");
return false;
}
if (f==null || f=="")
{
alert("Bạn cần nhập lớp !");
return false;
}
if (e==null || e=="")
{
alert("Bạn cần nhập E-Mail !");
return false;
}
if (h==null || h=="")
{
alert("Bạn cần nhập mã sinh viên !");
return false;
}
if (y==null || y=="")
{
alert("Bạn cần nhập Họ !");
return false;
}
if (i==null || i=="")
{
alert("Bạn cần nhập tên !");
return false;
}
}
</script>
<script type="text/javascript">
$(document).ready(function() {
	$("#username").keyup(function (e) {
		$(this).val($(this).val().replace(/\s/g, ''));
		
		var username = $(this).val();
		if(username.length < 4){$("#user-result").html('');return;}
		
		if(username.length >= 4){
			$("#user-result").html('<img src="images/ajax-loader.gif" />');
			$.post('check_username.php', {'username':username}, function(data) {
			  $("#user-result").html(data);
			});
		}
	});	
});
</script>
<script type="text/javascript">
$(document).ready(function() {
	$("#email").keyup(function (e) {
		$(this).val($(this).val().replace(/\s/g, ''));
		
		var email = $(this).val();
		if(email.length < 4){$("#email-result").html('');return;}
		
		if(email.length >= 4){
			$("#email-result").html('<img src="images/ajax-loader.gif" />');
			$.post('check_email.php', {'email':email}, function(data) {
			  $("#email-result").html(data);
			});
		}
	});	
});
</script>
</head>
<body>
<?php
  $number1 = rand(1,9);
  $number2 = rand(1,9);
  $sum = $number1 + $number2;
?>
<?php include("header.php"); ?>
    </div>
     <div class="clear"></div>
     </div>
	</div>
<div class="register_account">
  <div class="wrap">
    <h4 class="title">Tạo tài khoản <span style="font-size:14px;">(*) không được để trống</span></h4>
    <form method="post" name="reg" id="reg"  onsubmit=" return validateForm()" action="xulydk.php">
      <div class="col_1_of_2 span_1_of_2">
        <div>
          <input type="text" name="username" id="username" placeholder="Tên hiển thị(*)" >  <span id="user-result"></span>
        </div>
        <div>
          <input type="password" name="password" id="password" placeholder="Mật khẩu(*)" >
        </div>
        <div>
          <input type="password" name="confirmPasswordInput" id="confirmPasswordInput" placeholder="Nhập lại mật khẩu(*)">
        </div>  <span id="passwordStrength"></span>   
		<div>
            <input type="text" name="email" id="email" onClick="if(laemail()) alert("Email hợp lệ"); else alert("Hãy nhập email hợp lệ");" placeholder="Email(*)"><span id="email-result"s></span>
        </div>  
   
        
      </div>
      <div class="col_1_of_2 span_1_of_2">
        <div>
          <input type="text" name="idstudent" id="idstudent" placeholder="Mã sinh viên(*)">
        </div>
        <div>
          <input type="text" placeholder="Lớp(*)" id="class" name="class" >
        </div>
        <div>
          <input type="text" placeholder="Số điện thoại(*)" id="phone" name="phone" >
        </div>
        <div> </div>
        <input type="text" placeholder="Họ(*)" name="fname" id="fname" class="code">
        <input type="text"  placeholder="Tên(*)" name="lname" id="lname" class="number">
     
      </div>
      <button type="submit" name="submit" id="submit" class="grey">Đăng kí</button>
      
      <div class="clear"></div>
    </form>
  </div>
</div>
<!-- Phần cuối -->

<div class="footer">
		<div class="footer-top">
			<div class="wrap">
			  <div class="section group example">
				</div>
				<div class="col_1_of_2 span_1_of_2">
					<ul class="f-list">
					  <li><img src="images/3.png"><span class="f-text">Liên hệ với chúng tôi khi bạn cần</span><div class="clear"></div></li>
					</ul>
				</div>
				<div class="clear"></div>
		      </div>
			</div>
		</div>
		<!-- Mục facebook -->
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
				</div>
				<div class="clear"></div>
		    </div>
		   </div>
		  <div class="clear"></div>
		    </div>
		  </div>
		</div>
		<div class="footer-bottom">
			<div class="wrap">
	             <div class="copy">
			        <p>© 2022 |<a href="#" target="_blank"> Website Ticket</a></p>
		         </div>
			    </div>
			    <div class="clear"></div>
		      </div>
	     </div>
	</div>
</body>
</html>