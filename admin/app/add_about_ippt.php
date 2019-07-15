<?php 
	include($_SERVER['DOCUMENT_ROOT'].'/ippt-website/config/config.php');


	if($_POST){
		$title = $_POST['title'];
		$status = $_POST['status'];
		$images = $_FILES['photo']['tmp_name'];
		$gimages = [];
		
		
		$uid = md5(uniqid(rand(),1));
	
	
		if(move_uploaded_file($images, '../img/'.$uid.'.jpg')){
			$gimages = 'admin/img/'.$uid.'.jpg';
		}
			
		$about_ippt = R::dispense('about');
		
		$about_ippt->title=$title;
		$about_ippt->status=$status;
		$about_ippt->img=$gimages;
		R::store($about_ippt);
		
	
		header('Location:../main.php');
	






	}




?>