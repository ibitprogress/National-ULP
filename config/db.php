<?php 
	include('config.php');

	$user = R::dispense('users');
	$user->username = "IPPT";
	$user->pass = "IPPT_USER_LOGIN";
	$user->permission = 1;

	R::store($user);


?>