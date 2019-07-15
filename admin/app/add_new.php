<?php 
	include($_SERVER['DOCUMENT_ROOT'].'/ippt-website/config/config.php');


	if($_POST){
		$title = $_POST['title'];
		$author = $_POST['author'];
		$short_text = $_POST['short_text'];
		$photograph = $_POST['photograph'];
		$text = $_POST['text'];
		$type_of_new = $_POST['type_of_new'];
		$images = $_FILES['photo']['tmp_name'];
		$gimages = [];
		
		
		$uid = md5(uniqid(rand(),1));
	
	
		if(move_uploaded_file($images, '../img/'.$uid.'.jpg')){
			$gimages = 'admin/img/'.$uid.'.jpg';
		}
			
		
		try{
			$news = R::dispense('news');
			$news->title=$title;
			$news->author=$author;
			$news->short_text=$short_text;
			$news->photograph=$photograph;
			$news->type_of_new = $type_of_new;
			$news->text=$text;
			$news->img=$gimages;
			$news->data_add = date('j-m-y,h:i');
			R::store($news);
		} catch (Exception $e) {
			echo "Вибачайте сталась помилка зв'яжіться з розробником 0971750340";
		} finally {
			header('Location:../main.php');
		}





	}




?>