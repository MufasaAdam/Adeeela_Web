<?php 
	session_start();
	unset($_SESSION['u_id']);
	unset($_SESSION['u_name']);
	unset($_SESSION['u_photo']);
	unset($_SESSION['u_phone']);
	unset($_SESSION['u_email']);
    unset($_SESSION['book_id']);

	header('location:index.php');
?>