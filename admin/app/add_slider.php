<?php 
	include($_SERVER['DOCUMENT_ROOT'].'/ippt-website/config/config.php');

	if($_POST){
		$images = $_FILES['slide']['tmp_name'];
		$gimages = [];
		$uid = md5(uniqid(rand(),1));
	
	
		if(move_uploaded_file($images, '../img/'.$uid.'.jpg')){
			$gimages = 'admin/img/'.$uid.'.jpg';
		}
		try{	
			$slider = R::dispense('slider');
			$slider->img = $gimages;
			R::store($slider);
		} catch (Exception $e) {
			echo "Вибачайте сталась помилка зв'яжіться з розробником 0971750340";
		} finally {
			header("Location:../main.php");
		}

	}


?>