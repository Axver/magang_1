<?php
	
	session_start();
	if (!isset($_SESSION['username'])){
		
		echo "<script> alert('Anda Harus Log In Terlebih Dahulu!!'); window.location = '../index.php'; </script>";
		// header("Location:../index.php");
	}
	else
	{
		if($_SESSION['roleuser']!='user')
		{
			header("Location: ../index.php");
		}
	}
	
	
?>
