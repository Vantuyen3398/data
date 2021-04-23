<h1>Wecome to my website</h1>
<?php 
	include 'controller/frontend_controller.php';
	$frontend_controller = new FrontendController();
	$frontend_controller->handleRequestFrontend();
?>