
<?php
session_start();
if(!$_SESSION['email']) {
	header('Location: cadastro.html#paralogin');
	exit();
}