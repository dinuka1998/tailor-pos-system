<?php

require_once('function.php');
dbconnect();
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	if (attemptCus($_POST['email'], $_POST['password'])) {
		redirect('CustomerHome.php');
	}
	else {
		redirect('CustomerLogin.php?error=' . urlencode('Wrong username or password'));
	}
}

?>