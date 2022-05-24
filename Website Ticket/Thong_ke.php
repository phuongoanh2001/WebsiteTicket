<link rel="stylesheet" type="text/css" href="../style.css">
<?php 
$ketnoi="";
$ketnoi=new mysqli(
  'localhost',
  'root',
  '',
  'ticket'
);
$ketnoi->set_charset('utf8');

?>
<?php 
	include_once('./XL_Cap_Nhat_SV.php');
	if(isset($_POST['chucnang']))
	{
		$chucnang=$_POST['chucnang'];
		if($chucnang=='them')
			include_once('./MH_ThemSV_Moi.php');
		else if($chucnang=='sua')
			include_once('./MH_Sua_SV.php');
	}
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
		
			 </div>
			  <div class="clear"></div>
			  </div>
			 </div>
    
<?php 
$SQl = "SELECT * FROM taikhoan1 where id = " .$_REQUEST['id'];
$result=mysqli_query($ketnoi,$SQl);

?>
<?php 
$SQlKH="SELECT * FROM taikhoan1 ORDER BY id DESC LIMIT 0 , 5";
$resultKH=mysqli_query($ketnoi,$SQlKH);
?>
<?php 
$Count_SP="SELECT count( * ) FROM sanpham";
$bang_SP=mysqli_query($ketnoi,$Count_SP); 
$row=mysqli_fetch_array($bang_SP);
$tongsodong1=$row[0];
?>
<?php 
$Count_Kh="SELECT count( * ) FROM taikhoan1";
$bang_KH=mysqli_query($ketnoi,$Count_Kh); 
$row=mysqli_fetch_array($bang_KH);
$tongsodong=$row[0];
?>
<style type="text/css">
<!--
.style2 {color: #FF0000; font-weight: bold; }
-->
</style>

<br />
<table width="100%" height="110" border="1" bordercolor="#CCCCCC">
  <div class="register_account">
  <div class="wrap">
    <h4 class="title">XEM THÔNG TIN SINH VIÊN</h4>
  <tr>
    <td width="119"  height="21" align="center" class="title" style="color:#000"   background="../Login-Admin/images/bg.png"><strong>Mã sinh viên</strong></td>
    <td width="213"  align="center" class="title" style="color:#000"   background="../Login-Admin/images/bg.png">Tên sinh viên</td>
    <td width="180" align="center"  class="title" style="color:#000"   background="../Login-Admin/images/bg.png">Giới tính<br>    </td>
    <td width="213" align="center"  class="title" style="color:#000"   background="../Login-Admin/images/bg.png">Địa chỉ</td>
    <td colspan="2" align="center"  class="title" style="color:#000"   background="../Login-Admin/images/bg.png">Chức năng</td>
  </tr>
  <?php while($row=mysqli_fetch_array($result)){?>
  <tr>
    <td  height="21" align="center" bgcolor="#E5e5e5" class="smallfont" ><?php echo $row['idstudent']; ?></td>
    <td  align="left" bgcolor="#E5e5e5" class="smallfont"><?php echo $row['username']; ?>&nbsp;</td>
    <td align="left"  bgcolor="#E5e5e5" class="smallfont"><?php echo $row['gender']; ?>&nbsp;</td>
    <td  bgcolor="#E5e5e5" class="smallfont"><?php echo $row['address']; ?>&nbsp;</td>
    <td width="52"  bgcolor="#E5e5e5" class="smallfont"><a href="#"onClick="frmQlsv_onSubmit( <?php echo  $row['id']; ?>,'sua')">&nbsp;Sửa</a></td>
    
  </tr>
  <?php }?>

	
</table>
<br />

<form action="" method="post" name="frmQLSV">
<input name="chucnang" type="hidden" value="">
<input name="masv" type="hidden" value="">
<input name="hanhdong" type="hidden" value="">
</form>
<script language="JavaScript" type="text/javascript">
function frmQlsv_onSubmit(masv,chucnang)
{
	document.frmQLSV.chucnang.value=chucnang;
	document.frmQLSV.masv.value=masv;
	document.frmQLSV.submit();	
}

</script>


