<?php 
include 'config/database.php';

class FrontendModel extends DatabaseConnect {

	function register($role, $username, $password, $name, $email, $phone, $birthday, $avatar) {
		$created = date('Y-m-d h:i:s');
		$sql = "INSERT INTO users(role, username, password, name, email, phone, birthday, avatar, created) VALUES ('$role', '$username', '$password', '$name', '$email', '$phone', '$birthday', '$avatar', '$created')";
		return mysqli_query($this->connect(), $sql);
	}

	function login($username, $password) {
		$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
		return mysqli_query($this->connect(), $sql);

	}

	function checkExistUser($username, $email) {
		$sql = "SELECT * FROM users WHERE username = '$username' OR email = '$email'";
		return mysqli_query($this->connect(), $sql);
	}

	function getListProduct() {
		$sql = "SELECT products.id,
		 products.name,
		 products.price,
		 products.image,
		 product_categories.name as product_category_name
		 FROM products 
		 INNER JOIN product_categories ON products.product_category_id = product_categories.id
		 ";
		return mysqli_query($this->connect(), $sql);
	}

	function getProductDetail($id) {
		$sql = "SELECT products.id,
		 products.name,
		 products.price,
		 products.image,
		 product_categories.name as product_category_name
		 FROM products 
		 INNER JOIN product_categories ON products.product_category_id = product_categories.id
		  WHERE products.id = $id";
		return mysqli_query($this->connect(), $sql);
	}

}

?>