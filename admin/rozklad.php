<?php 
	
	include($_SERVER['DOCUMENT_ROOT'].'/ippt-website/config/config.php');

if($_SESSION){
  } else {
    header('Location:../index.php');
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Administrator page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="#">Адміністративна панель</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav">
	      <li class="nav-item active">
	        <a class="nav-link" href="main.php">Всі пости <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="rozklad.php">Залити Розклад</a>
	      </li>
<!-- 	      <li class="nav-item">
	        <a class="nav-link" href="#">Pricing</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link " href="#">Disabled</a> -->
	      </li>
	    </ul>
	  </div>
</nav>	
	
<section class="container rozklad">
<div class="container">
        <div class="row">
          <div class="col-12 col-lg-3">
            <form action="app/add_rozklad.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <p class="text-bold text-dark-blue">Освітній рівень:</p>
                <select class="form-control" id="educationalDegree" name="degree">
                  <option value="1">Молодший спеціаліст</option>
                  <option value="2">Бакалавр</option>
                  <option value="3">Магістр</option>
                </select>
            </div>
            <div class="form-group">
                <p class="text-bold text-dark-blue">Спеціальність:</p>
                <select class="form-control" id="trainingDirection" name="direction">
                  <option value="1" >Обслуговування комп'ютерних мереж та систем (КН)</option>
                  <option value="2">Фінанси та кредит (ФК)</option>
                  <option value="3">Комерційна діяльність (КД)</option>
                  <option value="4">Бухгалтерський облік (БО)</option>
                </select>
            </div>
            <div class="form-group">
                <p class="text-bold text-dark-blue">Курс:</p>
                <select class="form-control" id="trainingCourse" name="course">
                  <option value="1">Перший курс</option>
                  <option value="2">Другий курс</option>
                  <option value="3">Третій курс</option>
                  <option value="4">Четвертий курс</option>
                </select>
            </div>
            <div class="form-group">
                <p class="text-bold text-dark-blue">Файл:</p>
                <select class="form-control" id="requiredFile" name="requiredfile">
                  <option value="1">Графік навчального процесу</option>
                  <option value="2">Розклад заннять</option>
                  <option value="3">Розклад заліково-екзаменаційної сесії</option>
                  <option value="4">Рейтинг студентів</option>
                </select>
            </div>
            <div class="form-group">
              <input type="hidden" name="10000" value="30000" />
                  <span class="fa fa-key" aria-hidden="true"></span>
                  <input style="margin-left: 5px;" type='file' name="pdf">
            </div><br>
            <div class="form-group">
              <button class="btn btn-green" type="submit">Завантажити файл</button>
            </div>
          </div>
   </form>
   </div>
   </div>

</section>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Bootstrap -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>	
</body>
</html>