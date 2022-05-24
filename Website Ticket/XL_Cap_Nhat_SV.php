<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	$ketnoi=new mysqli(
		'localhost',
		'root',
		'',
		'ticket'
	);
	$ketnoi->set_charset('utf8');
?>
<?php 
$hanhdong="";
$thongbao="";
if(isset($_POST['hanhdong']))
{
	$hanhdong=$_POST['hanhdong'];
	if($hanhdong=='THEM_MOI_SP')
		$thongbao=themSP_MOI();	
		
	if($hanhdong=='SUA_SP')
		$thongbao=SuathongtinSP();	
	if($hanhdong=='xoa')
		$thongbao=xoasanpham();		
		
}
function themSP_MOI()
{
	global $ketnoi;
	$khuyenmai="";
	$tensv="";
	$matkhau="";
	$diachi="";
	$tentk="";
	$ho="";
	$tentk="";
	$ten="";
	$sdt="";
	$gioitinh="";
	if(isset($_POST['txttensv']))
		$tensv=$_POST['txttensv'];
	if(isset($_POST['txtmatkhau']))
		$matkhau=$_POST['txtmatkhau'];
	if(isset($_POST['txtdiachi']))
		$diachi=$_POST['txtdiachi'];
	if(isset($_POST['txtkhuyenmai']))
		$khuyenmai=$_POST['txtkhuyenmai'];
	if(isset($_POST['txtsoluong']))
		$soluong=$_POST['txtsoluong'];
	if(isset($_POST['txtmota']))
		$mota=$_POST['txtmota'];
	if(isset($_POST['txten']))
		$ten=$_POST['txtten'];
	if(isset($_POST['txtgioitinh']))
		$gioitinh=$_POST['txtgioitinh'];
	$strSQL="Select id From sanpham   WHERE `tensanpham`='{$tensv}'";	
	$bang_SP=mysql_query($strSQL,$ketnoi);
	$row=mysql_fetch_array($bang_SP);	
	if($row)
		return "<script>alert('Sản phẩm này đã có trong CSDL');</script> ";
	
		$strSQL="INSERT INTO `sanpham` (`tensanpham`, `gia`, `safeoff`, `url`, `ho`,`mota`,`ten`,`soluong`,`category`)
	VALUES ('{$tensv}','{$matkhau}','{$khuyenmai}','{$diachi}','{$ho}','{$mota}','{$ten}','{$soluong}','{$gioitinh}')";
	mysql_query($strSQL,$ketnoi);
	return "Đã thêm sản phẩm vào CSDL !!!";				
}
function SuathongtinSP()
{
	global $ketnoi;
	$masv="";
	$tensv="";
	$matkhau="";
	$diachi="";
	$gioitinh="";
	$ho="";
	$mahsx="";
	$email="";
	$sdt="";
		
	if(isset($_POST['masinhvien']))
		$masv=$_POST['masinhvien'];
	if(isset($_POST['txttensv']))
		$tensv=$_POST['txttensv'];
	if(isset($_POST['txtmatkhau']))
		$matkhau=$_POST['txtmatkhau'];
	if(isset($_POST['txtdiachi']))
		$diachi=$_POST['txtdiachi'];
	if(isset($_POST['txtgioitinh']))
		$gioitinh=$_POST['txtgioitinh'];
	if(isset($_POST['txtho']))
		$ho=$_POST['txtho'];
	if(isset($_POST['txtten']))
		$ten=$_POST['txtten'];
	if(isset($_POST['txtemail']))
		$email=$_POST['txtemail'];
	if(isset($_POST['txtsdt']))
		$sdt=$_POST['txtsdt'];
	if(isset($_POST['txtlop']))
		$lop=$_POST['txtlop'];
		
	//Kiem tra du lieu
	$zxc=" UPDATE `taikhoan1` SET `username`='{$tensv}',`address`='{$diachi}',`password`='{$matkhau}',`class`='{$lop}',`fname`='{$ho}',`dienthoai`='{$sdt}',`lname`='{$ten}',`gender`='{$gioitinh}',`email`='{$email}' WHERE `id`={$masv}";
	mysqli_query($ketnoi,$zxc);
	return "Cập nhật thành công !!!";		
	
}
function xoasanpham()
{
	global $ketnoi;
	$masv="";	
	if(isset($_POST['masv']))
		$masv=$_POST['masv'];
		$bang_sp=@mysqli_query($ketnoi,$zxc);		
		$zxc="DELETE FROM taikhoan1 WHERE `id`={$masv}";
		mysqli_query($ketnoi,$zxc);
		return "Thong tin Sinh viên da duoc xoa khoi csdl !!!";	
		
}
?>

