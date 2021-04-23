<?php 
	// thong tin ket noi database
	$server = 'localhost'; //$server = '127.0.0.1'
	$username = 'root'; // username default
	$password = 'none'; // password default
	$database = '19php01_demo1'; // ket noi den database nay
	
	// thuc hien ket noi database
	$connect = mysqli_connect($server, $username, $password, $database);

	// utf-8 connect
	mysqli_set_charset($connect,"utf8");
	// kiem tra ket noi database
	if ($connect === FALSE) {
		echo "Connect fail ".mysqli_connect_error();
	}

	// du lieu dung de chen vao users
	$name = 'Hoài Cảnh'; // $name = $_POST['name'];
	$email = 'canh@yahoo.com';
	$phone = '0905666999';
	$avatar = 'ok.jpg';
	$city = 'Hue';
	$gender = 'male';

	// cau lenh insert du lieu
	$sql = "INSERT INTO users (name, email, phone, avatar, city, gender) VALUES ('$name', '$email', '$phone', 'avatar', '$city', '$gender')";

	// thuc thi cau lenh 
	if (mysqli_query($connect, $sql) === TRUE) {
		echo "Register success!";
		echo "<br>Hoài Cảnh";
	} else {
		echo "Register error";
	}

?>