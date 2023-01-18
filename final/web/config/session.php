<?php 
	session_start();

	if (!isset($_SESSION['giris'])) 
	echo "<script> window.location.href=\"../../dashbord/pages/sign-in.php?session=basarsiz\" </script>";
	