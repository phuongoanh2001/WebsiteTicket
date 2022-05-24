<?php
include("config.php");
session_start();
if(!session_is_registered('user')){
header("location:login.php");
}
?>
<html>
<body>
Đăng nhập thành công !
</body>
</html>