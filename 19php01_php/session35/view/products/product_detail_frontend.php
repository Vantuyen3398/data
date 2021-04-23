<div class="detail_product_full">
	<h2><?php echo $productDetail['name']?></h2>
	<p><?php echo $productDetail['description']?></p>
	<p><?php echo $productDetail['price']?> VND</p>
	<p>Category: <?php echo $productDetail['product_category_name']?></p>
	<img src="webroot/uploads/products/<?php echo $productDetail['image']?>">
</div>
<div class="comment">
	<form action="index.php?controller=comment&action=comment&product_id=<?php echo $productDetail['id']?>" method="POST">
		<textarea name="content" rows="5" cols="40"></textarea>
		<input type="submit" name="comment" value="Comment">
	</form>
</div>

