<?php
	include 'inc/header.php';
	//include 'inc/slider.php';
?>
<?php
	if(!isset($_GET['proId']) || $_GET['proId'] == NULL){
        echo "<script>window.location='404.php'</script>";
    }else{
        $id = $_GET['proId'];
    }
	$customer_id = Session::get('customer_id');
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['compare'])) {
     // The request is using the POST method
    	$productId = $_POST['productid'];
        $insertCompare = $pd->insertCompare($productId,$customer_id);
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
     // The request is using the POST method
    	$quantity = $_POST['quantity'];
        $insertCart = $ct->add_to_cart($quantity,$id);
    }
?>
 <div class="main">
    <div class="content">
    	<div class="section group">
    			<?php
    				$get_product_details = $pd->get_details($id);
    				if($get_product_details){
    					while ($result_details = $get_product_details->fetch_assoc()){
				?>
				<div class="cont-desc span_1_of_2">				
					<div class="grid images_3_of_2">
						<img src="admin/uploads/<?php echo $result_details['image']?>" alt="" />
					</div>
					<div class="desc span_3_of_2">
						<h2><?php echo $result_details['productName']?></h2>
						<p><?php echo $fm->textShorten($result_details['product_desc'], 150);?></p>					
						<div class="price">
							<p>Price: <span><?php echo $fm->format_currency($result_details['price'])." "."VND";?></span></p>
							<p>Category: <span><?php echo $result_details['catName'];?></span></p>
							<p>Brand:<span><?php echo $result_details['brandName'];?></span></p>
						</div>
						<div class="add-cart">
							<form action="" method="post">
								<input type="number" class="buyfield" name="quantity" value="1" min="1"/>
								<input type="submit" class="buysubmit" name="submit" value="Buy Now"/>
							</form>
							<!-- <?php
								if(isset($AddtoCart)){
									echo '<span style = "color:red;font_size:180px;">Product Already Added</span>';
								}
							?> -->				
						</div>
						<div class="add-cart">
							<form action="" method="POST">
								<!-- <a class="buysubmit" href="?wlist=<?php echo $result_details['productId'] ?>" >Save to Wishlist</a> -->
								<!-- <a class="buysubmit" href="?compare=<?php echo $result_details['productId'] ?>" >Compare Product</a> -->		
								<input type="hidden" name="productid" value="<?php echo $result_details['productId'] ?>"/>
								<?php
									$login_check = Session::get('customer_login');
									if($login_check){
										echo '<input type="submit" class="buysubmit" name="compare" value="Compare Product"/>';
									}else{
										echo '';
									}
								?>
								<?php
									if(isset($insertCompare)){
										echo $insertCompare;
									}
								?>
								<input type="hidden" name="productid" value="<?php echo $result_details['productId'] ?>"/>
								<?php
									$login_check = Session::get('customer_login');
									if($login_check){
										echo '<input type="submit" class="buysubmit" name="wlist" value="Save to Wishlist"/>';
									}else{
										echo '';
									}
								?>
							</form>
						</div>
					</div>
					<div class="product-desc">
					<h2>Product Details</h2>
					<?php echo $fm->textShorten($result_details['product_desc'], 150);?>
			    	</div>
				
				</div>
				<?php
					}
    				}
				?>

				<div class="rightsidebar span_3_of_1">
					<h2>CATEGORIES</h2>
					<ul>
						<?php
							$getall_cat = $cat->show_category_fontend();
							if($getall_cat){
								while($resultall_cat = $getall_cat->fetch_assoc()){
						?>
				      	<li><a href="productbycat.php?catid=<?php echo $resultall_cat['catId']?>"><?php echo $resultall_cat['catName']?></a></li>
				      	<?php
				      		}
				      	}
				      	?>
    				</ul>
    	
 				</div>
 		</div>
 	</div>
	<?php
	include 'inc/footer.php';
?>
