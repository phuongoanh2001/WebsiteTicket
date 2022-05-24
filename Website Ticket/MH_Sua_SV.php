<link rel="stylesheet" type="text/css" href="../style.css"/>
<?php 
	include_once('./ketnoi.php'); 
	$dieukien="";
	if(isset($_POST['masv']))
	{
		$masv=$_POST['masv'];
		$dieukien=" WHERE id={$masv}";
	}
	$strSQL="Select * From taikhoan1 {$dieukien}";
	$bang_sv=mysqli_query($ketnoi,$strSQL );
	
	$row=mysqli_fetch_array($bang_sv);
?>

<form action="" method="post" name="frmCapnhat" id="frmCapnhat">
	<input name="masinhvien" type="hidden" value="<?php echo  $row['id']; ?>" />
	<table width="100%" height="372" border="1"  bordercolor="#CCCCCC">
      <!--DWLayoutTable-->
      <div class="register_account">
  <div class="wrap">
    <h4 class="title">CẬP NHẬT THÔNG TIN SINH VIÊN</h4>
    
      
      <tr>
        <td width="176" height="27" align="left" bgcolor="#E5e5e5" class="smallfont">Tên sinh viên</td>
        <td width="435" bgcolor="#E5e5e5" class="smallfont"><input name="txttensv" type="text" id="txttensv" value="<?php echo  $row['username']; ?>" size="30" /></td>
      </tr>
      <tr>
        <td width="176" height="27" align="left" bgcolor="#E5e5e5" class="smallfont">Mật khẩu</td>
        <td width="435" bgcolor="#E5e5e5" class="smallfont"><input name="txtmatkhau" type="password" id="txtmatkhau" value="<?php echo  $row['password']; ?>" size="30" /></td>
      </tr>
      <tr>
        <td width="176" height="27" align="left" bgcolor="#E5e5e5" class="smallfont">Địa chỉ</td>
        <td width="435" bgcolor="#E5e5e5" class="smallfont"><input name="txtdiachi" type="text" id="txtdiachi" value="<?php echo  $row['address']; ?>" size="30" /></td>
      </tr>
      <tr>
        <td width="176" height="27" align="left" bgcolor="#E5e5e5" class="smallfont">Giới tính</td>
        <td width="435" bgcolor="#E5e5e5" class="smallfont"><input name="txtgioitinh" type="text" id="txtmatkhau" value="<?php echo  $row['gender']; ?>" size="30" /></td>
      </tr>
      <tr>
        <td width="176" height="27" align="left" bgcolor="#E5e5e5" class="smallfont">Họ</td>
        <td width="435" bgcolor="#E5e5e5" class="smallfont"><input name="txtho" type="text" id="txtgiasp" value="<?php echo  $row['fname']; ?>" size="30" /></td>
      </tr>
      <tr>
        <td width="176" height="27" align="left" bgcolor="#E5e5e5" class="smallfont">Tên</td>
        <td width="435" bgcolor="#E5e5e5" class="smallfont"><input name="txtten" type="text" id="txtgiasp" value="<?php echo  $row['lname']; ?>" size="30" /></td>
      </tr>
      <tr>
        <td width="176" height="27" align="left" bgcolor="#E5e5e5" class="smallfont">Email</td>
        <td width="435" bgcolor="#E5e5e5" class="smallfont"><input name="txtemail" type="text" id="txtgiasp" value="<?php echo  $row['email']; ?>" size="30" /></td>
      </tr>
      <tr>
        <td width="176" height="27" align="left" bgcolor="#E5e5e5" class="smallfont">Sđt</td>
        <td width="435" bgcolor="#E5e5e5" class="smallfont"><input name="txtsdt" type="text" id="txtsdt" value="<?php echo  $row['dienthoai']; ?>" size="30" /></td>
      </tr>
      <tr>
        <td width="176" height="27" align="left" bgcolor="#E5e5e5" class="smallfont">Lớp</td>
        <td width="435" bgcolor="#E5e5e5" class="smallfont"><input name="txtlop" type="text" id="txtlop" value="<?php echo  $row['class']; ?>" size="30" /></td>
      </tr>
        <td height="28" bgcolor="#E5e5e5" class="smallfont"><!--DWLayoutEmptyCell-->&nbsp;</td>
        <td bgcolor="#E5e5e5" class="smallfont"><input name="bntGhi" type="submit" id="bntGhi" value="Cập nhật" /></td>
      </tr>
    </table>
	<input name="hanhdong" type="hidden"  value="SUA_SP">
</form>

