<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>imoveis</title>
	<!--! favicon -->
	<link rel="shortcut icon" href="./assets/img/Logo.png" type="image/x-icon">
	<!--! Bootstrap -->
	<link rel="stylesheet" href="./assets/bootstrap/bootstrap.min.css">
	<!--! CSS -->
	<link rel="stylesheet" href="./pages/imoveis/imoveis.css">
</head>
<body>
	<?php
	session_start();
	require_once "./config/connect.php";
	require_once "./controllers/imovelController.php";
	
	if (isset($_SESSION["adm"])) {
		if ($_SESSION["adm"] == 1) {
			include "./components/header/headeradm.php";
		} else if ($_SESSION["adm"] == 0) {
			include "./components/header/header.php";
		}
	} else {
		include "./components/header/headerguest.php";
	}

	include "./pages/imoveis/imoveis.php";
		include "./components/footer/footer.php";
	?>

