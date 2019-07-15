<?php
	include($_SERVER['DOCUMENT_ROOT'].'/ippt-website/config/config.php');

	date_default_timezone_set('UTC');

	if($_POST){

		$degree = $_POST['degree'];
		$direction = $_POST['direction'];
		$course = $_POST['course'];
		$requiredfile = $_POST['requiredfile'];
		
		
		$images = $_FILES['pdf']['tmp_name'];
		$gimages = [];
		
		
		$uid = md5(uniqid(rand(),1));
	
	
		if(move_uploaded_file($images, '../pdf/'.$uid.'.pdf')){
			$gimages = 'admin/pdf/'.$uid.'.pdf';
		}
			
	
			$rozklad = R::dispense('rozklad');
			$rozklad->degree=$degree;
			$rozklad->direction=$direction;
			$rozklad->course=$course;
			$rozklad->requiredfile=$requiredfile;
			$rozklad->pdf_rozklad=$gimages;
			
			R::store($rozklad);
		
			header('Location:../rozklad.php');
		




	}




 ?>