<!DOCTYPE HTML>
<html>
<head>
<title>Website Ticket | Trang chủ</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<link href="css/form.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery1.min.js"></script>
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
<?php include("header.php"); ?>

<!-- Phần đầu -->
    
	
  <!-- banner -->
    <div id="fwslider">
        <div class="slider_container">
            <div class="slide"> 
                <!-- baner1 -->
                    <img src="images/banner1.png" alt=""/>
                <!-- Texts container -->
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <!-- Text title -->
                        <h4 class="title">ĐẠI HỌC KINH TẾ - ĐẠI HỌC ĐÀ NẴNG</h4>
                        <p class="description">ĐIỂM BÁN VÉ XE</p>
                    </div>
                </div>
            </div>
            <!-- banner2 -->
            <div class="slide">
                <img src="images/banner6.png" alt=""/>
                <div class="slide_content">
					<div class="slide_content_wrap">
						<h4 class="title">VÉ XE KÌ I NĂM 2022 - 2023</h4>
					    <br></br>
				        <p class="description">Mở bán từ ngày 20/08/2022 đến 20/09/2022</p>
                    </div>
                </div>
            </div>
            <!--/slide -->
        </div>
        <div class="timers"></div>
        <div class="slidePrev"><span></span></div>
        <div class="slideNext"><span></span></div>
    </div>
    <!--/slider -->
	<div class="main">
  <div class="wrap">
  
    <div class="section group">
      <div class="cont span_2_of_3">
        <h2 class="head">Thông tin sản phẩm</h2>
        <div class="top-box">
   			<?php include("sanpham.php"); ?>
        </div>
		</div>
		</div>
		</div>
		</div>
<!-- Check it out -->
		</div>
		<div class="rsidebar span_1_of_left">
			 <div class="border">
			 <link href="css/default.css" rel="stylesheet" type="text/css" media="all" />
			 <link href="css/nivo-slider.css" rel="stylesheet" type="text/css" media="all" />
			  <script src="js/jquery.nivo.slider.js"></script>
				<script type="text/javascript">
				$(window).load(function() {
					$('#slider').nivoSlider();
				});
				</script>
		<div class="slider-wrapper theme-default">
		  <div id="slider" class="nivoSlider">
			<img src="images/tb5.png"  alt="" />
			<img src="images/tb4.png"  alt="" />
			<img src="images/tb6.png"  alt="" />
		  </div>
		 </div>
		  <div class="btn"><a href="thongbao.php">Thông báo</a></div>
		 </div>
		 </div>
		  <div class="clear"></div>
		    </div>
<!-- 			   
			<div class="top-border"> -->
			<div class="border">
			<div class="top-border">
			<div class="sidebar-bottom">
			<!-- <div class="cont span_2_of_3"> -->
			   <div class="wrapper">
			   <h2 class="head">CHAT BOT VÉ XE DUE</h2>
			   <!-- <div class="border">    -->
        <div class="m_1">Trao đổi với chúng tôi nếu bạn có bất kỳ thắc mắc nào!!!</div>
     
            
			   <!-- <div class="wrapper"> -->
        <!-- <div class="title">Chatbot Website vé xe DUE - Trao đổi với chúng tôi nếu bạn có bất kì thắc mắc nào!</div> -->
        <!-- <div class="border"> -->
		<div class="form">
            <div class="bot-inbox inbox">
                <div class="icon">
                    <i class="fas fa-user"></i>
                </div>
                <div class="msg-header">
                    <p>Xin chào! Tôi có thể giúp gì cho bạn?</p>
                </div>
            </div>
        </div>
        <div class="typing-field">
            <div class="input-data">
                <input id="data" type="text" placeholder="Nhắn tin ngay.." required>
                <button id="send-btn1">Gửi</button>
            </div>
			</div>
		 </div>
		 </div>
		  <div class="clear"></div>
		    </div>
    </div>
    <script>
        $(document).ready(function(){
            $("#send-btn1").on("click", function(){
                $value = $("#data").val();
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');
                
                // start ajax code
                $.ajax({
                    url: 'message.php',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>'+ result +'</p></div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    
                    }
                });               
            });
        });
    </script>




<!-- Phần cuối -->

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