<?php
	include 'inc/header.php';
	//include 'inc/slider.php';
?>
 <div class="main">
    <div class="content">
    	<div class="content_top">
    		<div class="heading">
    		</div>
    		<div class="clear"></div>
    	</div>
	      <div class="section group">
	      	<?php
	      		$all_product = $pd->get_all_product();
	      		if($all_product){
	      			while($result = $all_product->fetch_assoc()){
	      	?>
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="details.php?proId=<?php echo $result['productId'];?>">
					 	<img src="admin/uploads/<?php echo $result['image']?>" width = "100px" height = "80px" alt="" />
					 </a>
					 <h2><?php echo $result['productName'];?></h2>
					 <p>
					 	<span><?php echo $fm->format_currency($result['price'])." "."VND";?></span>
					 </p>
				     <div class="button">
				     	<span>
				     		<a href="details.php?proId=<?php echo $result['productId'];?>" class="details">Details</a>
				     	</span>
				     </div>
				</div>
			<?php
				}
			}
			?>
			</div>
			
    </div>
 </div>
<?php
	include 'inc/footer.php';
?>