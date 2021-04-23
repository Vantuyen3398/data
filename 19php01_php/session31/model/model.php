<?php 
	include 'config/database.php';

	class Model extends DatabaseConnect {

		function addUser($username, $password) {
			$sql = "INSERT INTO users(username, password) VALUES ('$username', '$password')";
			return mysqli_query($this->connect(), $sql);
		}

		public function listUser() {
			$sql = "SELECT * FROM users";
			$listUser = mysqli_query($this->connect(), $sql);
			return $listUser;
		}

		public function checkLogin($username, $password) {
			$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
			$listUser = mysqli_query($this->connect(), $sql);
			return $listUser;
		}
	}
?>