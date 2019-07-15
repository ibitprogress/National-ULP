<?php 
	include($_SERVER['DOCUMENT_ROOT'].'/ippt-website/config/config.php');

	date_default_timezone_set('UTC');

	if($_POST){

		$title = $_POST['title'];
		$author = $_POST['author'];
		$short_text = $_POST['short_text'];
		$photograph = $_POST['photograph'];
		$text = $_POST['text'];
		
		$images = $_FILES['img']['tmp_name'];
		$gimages = [];
		
		
		$uid = md5(uniqid(rand(),1));
	
	
		if(move_uploaded_file($images, '../img/'.$uid.'.jpg')){
			$gimages = 'admin/img/'.$uid.'.jpg';
		}
			

			$adward = R::dispense('adward');
			$adward->title=$title;
			$adward->author=$author;
			$adward->short_text=$short_text;
			$adward->photograph=$photograph;
			$adward->text=$text;
			$adward->img=$gimages;
			$adward->data_add = date('j-m-y,h:i ');
			R::store($adward);
	

			header('Location:../main.php');
		




	}




?>