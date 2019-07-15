<?php 
	include($_SERVER['DOCUMENT_ROOT'].'/ippt-website/config/config.php');


	if($_POST){
		$title = $_POST['title'];
		$short_text = $_POST['main_think'];
		$text = $_POST['text'];


			$project = R::dispense('iproject');
			$project->title=$title;
			$project->short_text=$short_text;
			$project->text = $text;
			R::store($project);
		
	
			header('Location:../main.php');
		


	}



?>