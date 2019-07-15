<?php 
	include($_SERVER['DOCUMENT_ROOT'].'/ippt-website/config/config.php');


	if($_POST){
		$name = $_POST['name'];
		$department = $_POST['department'];
		$zaz = $_POST['zaz'];
		

			$departmnt = R::dispense('department');
			$departmnt->name=$name;
			$departmnt->zaz=$zaz;
			$departmnt->dp=$department;
			
			R::store($departmnt);
		
	
			header('Location:../main.php');
		


	}



?>