<?php
	$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/database.php');
	include_once ($filepath.'/../helpers/format.php');
	/**
	 * 
	 */
	class cart 
	{
		private $db;
		private $fm;

		public function __construct()
		{
			$this->db =new Database();
			$this->fm =new Format();
		}
		public function add_to_cart($quantity,$id){
			$quantity = $this->fm->validation($quantity);
			$quantity = mysqli_real_escape_string($this->db->link, $quantity);
			$id = mysqli_real_escape_string($this->db->link, $id);
			$sId = session_id();

			$query = "SELECT * FROM tbl_product WHERE productId = '$id'";
			$result = $this->db->select($query)->fetch_assoc(); 
			
			$productName = $result['productName'];
			$image = $result['image'];
			$price = $result['price'];

			$check_cart = "SELECT * FROM tbl_cart WHERE productId = '$id' AND sId = '$sId' ";
			// if($check_cart){
			// 	$msg = "Product Already Added";
			// 	return $msg;
			// }else{
					$query_insert ="INSERT INTO tbl_cart(productId, sId, productName, price, quantity, image) VALUES ('$id','$sId','$productName','$price','$quantity', '$image')" ;
						$insert_cart = $this->db->insert($query_insert);
						if($result){
							header ('Location:cart.php');
						}else{
							header ('Location:404.php');
						}
				//}
		}
		public function get_product_cart(){
			$sId = session_id();
			$query = "SELECT * FROM tbl_cart WHERE sId = '$sId'";
			$result = $this->db->select($query);
			return $result;
		}
		public function update_quantity_cart($quantity,$cartId){
			$quantity = mysqli_real_escape_string($this->db->link, $quantity);
			$cartId = mysqli_real_escape_string($this->db->link, $cartId);
			$query ="UPDATE tbl_cart SET 
							quantity = '$quantity'
							WHERE cartId = '$cartId'";
			$result = $this->db->select($query);
			if($result){
				header ('Location:cart.php');
			}else{
				$msg = "<span class='error'>Product Quantity Not Update SuccessFully</span";
				return $msg;
			}
		}
		public function del_product_cart($cartId){
			$cartId = mysqli_real_escape_string($this->db->link, $cartId);
			$query = "DELETE  FROM tbl_cart WHERE cartId = '$cartId'";
			$result = $this->db->select($query);
			if($result){
				header ('Location:cart.php');
			}else{
				$msg = "<span class='error'>Product Deleted Not SuccessFully</span";
				return $msg;
			}
		}
		public function check_cart(){
			$sId = session_id();
			$query = "SELECT * FROM tbl_cart WHERE sId = '$sId'";
			$result = $this->db->select($query);
			return $result;
		}
		public function check_order($customerId){
			$sId = session_id();
			$query = "SELECT * FROM tbl_order WHERE customerId = '$customerId'";
			$result = $this->db->select($query);
			return $result;
		}
		public function dell_all_data_cart(){
			$sId = session_id();
			$query = "DELETE  FROM tbl_cart WHERE sId = '$sId'";
			$result = $this->db->select($query);
			return $result;
		}
		public function dell_compare($customer_id){
			$sId = session_id();
			$query = "DELETE  FROM compare WHERE customer_id = '$customer_id'";
			$result = $this->db->delete($query);
			return $result;
		}
		public function insertOrder($customer_id){
			$sId = session_id();
			$query = "SELECT * FROM tbl_cart WHERE sId = '$sId'";
			$get_product = $this->db->select($query);
			if($get_product){
				while($result = $get_product->fetch_assoc()){
					$productId = $result['productId'];
					$productName = $result['productName'];
					$customerId = $customer_id;
					$quantity = $result['quantity'];
					$price = $result['price']*$quantity;
					$image = $result['image'];

					$query_order ="INSERT INTO tbl_order(productId, productName,customerId, price, quantity, image) VALUES ('$productId','$productName','$customerId','$price','$quantity', '$image')" ;
						$insert_order = $this->db->insert($query_order);
				}
			}
		}
		public function getAmountPrice($customer_id){
			$query = "SELECT price FROM tbl_order WHERE customerId = '$customer_id'";
			$get_price = $this->db->select($query);
			return $get_price;
		}
		public function get_cart_ordered($customer_id){
			$query = "SELECT * FROM tbl_order WHERE customerId = '$customer_id'";
			$get_cart_ordered = $this->db->select($query);
			return $get_cart_ordered;
		}
		public function get_inbox_cart(){
			$query = "SELECT * FROM tbl_order ORDER BY date_order";
			$get_inbox_cart = $this->db->select($query);
			return $get_inbox_cart;
		}
		public function shifted($id,$time,$price){
			$id = mysqli_real_escape_string($this->db->link, $id);
			$time = mysqli_real_escape_string($this->db->link, $time);
			$price = mysqli_real_escape_string($this->db->link, $price);
			$query ="UPDATE tbl_order SET 
							status = '1'
							WHERE id = '$id' AND date_order = '$time' AND price = '$price'";
			$result = $this->db->update($query);
			if($result){
				$msg = "<span class='success'> Update order SuccessFully</span";
			}else{
				$msg = "<span class='error'>Update order not SuccessFully</span";
				return $msg;
			}
			
		}
		public function del_shifted($id,$time,$price){
			$id = mysqli_real_escape_string($this->db->link, $id);
			$time = mysqli_real_escape_string($this->db->link, $time);
			$price = mysqli_real_escape_string($this->db->link, $price);
			$query ="DELETE FROM tbl_order 
							WHERE id = '$id' AND date_order = '$time' AND price = '$price'";
			$result = $this->db->delete($query);
			if($result){
				$msg = "<span class='success'> Delete order SuccessFully</span";
			}else{
				$msg = "<span class='error'>Delete order not SuccessFully</span";
				return $msg;
			}
			
		}
	}
?>
