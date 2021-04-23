<?php
	include 'inc/header.php';
	include 'inc/slider.php';
?>
<div class="main">
	<!--<?php echo session_id()?>-->
    <div class="content">
    	<div class="content_top">
    		<div class="heading">
    		<h3>Feature Products</h3>
    		</div>
    		<div class="clear"></div>
    	</div>
	      <div class="section group">
	      	<?php
	      		$pd_feathered = $pd->getproduct_feathered();
	      		if($pd_feathered){
	      			while($result = $pd_feathered->fetch_assoc()){
	      	?>
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="details.php?proId=<?php echo $result['productId'];?>"><img src="admin/uploads/<?php echo $result['image']?>" height = "80px" alt="" /></a>
					 <h2><?php echo $result['productName'];?></h2>
					 <!-- <p><?php echo $fm->textShorten($result['product_desc'], 50);?></p> -->
					 <p><span><?php echo $fm->format_currency($result['price'])." "."VND";?></span></p>
				     <div class="button"><span><a href="details.php?proId=<?php echo $result['productId'];?>" class="details">Details</a></span></div>
				</div>
				<?php
					}
					}
				?>
			</div>
			<div class="content_bottom">
    		<div class="heading">
    		<h3>New Products</h3>
    		</div>
    		<div class="clear"></div>
    	</div>
			<div class="section group">
			<?php
	      		$pd_new = $pd->getproduct_new();
	      		if($pd_new){
	      			while($result_new = $pd_new->fetch_assoc()){
	      	?>
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="details.php?proId=<?php echo $result_new['productId'];?>"><img src="admin/uploads/<?php echo $result_new['image']?>" height = "80px" alt="" /></a>
					 <h2><?php echo $result_new['productName'];?></h2>
					 <p><span><?php echo $fm->format_currency($result_new['price'])." "."VND";?></span></p>
				     <div class="button"><span><a href="details.php?proId=<?php echo $result_new['productId'];?>" class="details">Details</a></span></div>
				</div>
				<?php
					}
					}
				?>
			</div>
			<div class="">
				<?php
					$pd_all = $pd->get_all_product();
					$pd_count = mysqli_num_rows($pd_all);
					$pd_bottom = $pd_count/2;
					$i=1;
					echo '<p>Trang :</p>';
					for($i=1;$i<$pd_bottom;$i++){
						echo '<a style="margin:0 5px;" href="index.php?trang='.$i.'">'.$i.'</a>';
					}
				?>
			</div>
    </div>
 </div>
<?php
	include 'inc/footer.php';
?>
