<?php
	include("config.php");
	@session_start();
	if(isset($_GET['search']))
	{
		$query = mysqli_query($con,"select * from sanpham where tensanpham like '%{$_GET['search']}%'");
	}
	else
	{
	$query = mysqli_query($con,"select * from sanpham");
	}
	while($row = mysqli_fetch_array($query)){?>
<div class="col_1_of_3 span_1_of_3"> <a href="chitietsanpham.php?id=<?php echo $row["id"]; ?>">
  <div class="inner_content clearfix">
    <div class="product_image"> <img src="<?php echo $row["url"]; ?>" alt=""/> </div>
    <!--  -->
    <div class="price">
      <div class="cart-left">
        <p class="title"><?php echo $row["tensanpham"]; ?></p>
        <div class="price1"> <span class="reducedfrom"><?php echo $row["gia"]; ?></span> <span class="actual">VND
          <?php  echo $row["gia"]-($row["gia"] * $row["safeoff"] / 100) ?>
          </span> </div>
      </div>
      <div class="cart-right"> </div>
      <div class="clear"></div>
    </div>
  </div>
  </a> </div>
<?php }
?>