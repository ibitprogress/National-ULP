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
	    <!--   <li class="nav-item">
	        <a class="nav-link" href="#">Pricing</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link " href="#">Disabled</a> -->
	      </li>
	    </ul>
	  </div>
</nav>	
	
<section class="container">
	<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Дошка оголошень
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
          <form action="app/add_adward.php" method="POST" enctype="multipart/form-data">
            
                <div class="input-group">
                  <span style="margin-left: 5px;" class="input-group-addon" id="basic-addon1">Заголовок: </span>
                  <input type="text" class="form-control" name="title"  aria-describedby="basic-addon1">
                  <span style="margin-left: 5px;" class="input-group-addon" id="basic-addon1">Автор: </span>
                  <input type="text" class="form-control" name="author" aria-describedby="basic-addon1">
                  <span style="margin-left: 5px;" class="input-group-addon" id="basic-addon1">Фотограф: </span>
                  <input type="text" class="form-control" name="photograph" aria-describedby="basic-addon1">
                   <span style="margin-left: 5px;" class="input-group-addon" id="basic-addon1">Короткий текст: </span>
                  <input type="textarea" class="form-control" name="short_text" aria-describedby="basic-addon1">
                  <span style="margin-left: 5px;" class="input-group-addon" id="basic-addon1">Повний опис: </span>
                  <input type="textarea" class="form-control" name="text" aria-describedby="basic-addon1"><br><br><br><br><br>
                  <input type="hidden" name="10000" value="30000" />
                  <span class="fa fa-key" aria-hidden="true"></span>
                  <input style="margin-left: 5px;" type='file' name="img">
                </div>
               <div style="text-align: center; margin-top:5vh;"><button type="submit">Відправити</button></div>
                
            
          </form>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-secondary collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Новини
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
 <form action="app/add_new.php" method="POST" enctype="multipart/form-data">
            
                <div class="input-group">
                  <span style="margin-left: 5px;" class="input-group-addon" id="basic-addon1">Заголовок: </span>
                  <input type="text" class="form-control" name="title"  aria-describedby="basic-addon1">
                  <span style="margin-left: 5px;" class="input-group-addon" id="basic-addon1">Автор: </span>
                  <input type="text" class="form-control" name="author" aria-describedby="basic-addon1">
                  <span style="margin-left: 5px;" class="input-group-addon" id="basic-addon1">Фотограф: </span>
                  <input type="text" class="form-control" name="photograph" aria-describedby="basic-addon1">
                   <span style="margin-left: 5px;" class="input-group-addon" id="basic-addon1">Короткий текст: </span>
                  <input type="textarea" class="form-control" name="short_text" aria-describedby="basic-addon1">
                  <span style="margin-left: 5px;" class="input-group-addon" id="basic-addon1">Повний опис: </span>
                  <input type="textarea" class="form-control" name="text" aria-describedby="basic-addon1"><br><br><br><br><br>
                  <input type="hidden" name="10000" value="30000" />
                  <span class="fa fa-key" aria-hidden="true"></span>
                  <input style="margin-left: 5px;" type='file' name="photo">
                </div>
                <div style="text-align: center;margin-top: 5vh"><select class="form-control" name="type_of_new" multiple="multiple">
                  <option value="1">Спорт</option>
                  <option value="2">Наука</option>
                  <option value="3">Зустрічі</option>
                  <option value="4">Весна та осінь політехніки</option>
                  <option value="5">Подорожі</option>
                </select></div>
               <div style="text-align: center; margin-top:5vh;"><button type="submit">Відправити</button></div>
                
            
          </form>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-secondary collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Залити фотографію на головний слайдер
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
                 <form action="app/add_slider.php" method="POST" enctype="multipart/form-data">
            
                <div class="input-group">
                  
                  <input type="hidden" name="10000" value="30000" />
                  <span class="fa fa-key" aria-hidden="true"></span>
                  <input style="margin-left: 5px;" type='file' name="slide">
                </div>
               <div style="text-align: center; margin-top:5vh;"><button type="submit">Відправити</button></div>
                
            
          </form>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingFour">
      <h5 class="mb-0">
        <button class="btn btn-secondary collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
          Додати проект інституту
        </button>
      </h5>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body">
          <form action="app/add_project.php" method="POST" enctype="multipart/form-data">
            
                <div class="input-group">
                  
                   <span style="margin-left: 5px;" class="input-group-addon" id="basic-addon1">Заголовок: </span>
                  <input type="text" class="form-control" name="title"  aria-describedby="basic-addon1">
                   <span style="margin-left: 5px;" class="input-group-addon" id="basic-addon1">Головний тезис: </span>
                  <input type="text" class="form-control" name="main_think"  aria-describedby="basic-addon1">
                  <span style="margin-left: 5px;" class="input-group-addon" id="basic-addon1">Повний опис: </span>
                  <input type="textarea" class="form-control" name="text" aria-describedby="basic-addon1"><br><br><br><br><br>
                </div>
               <div style="text-align: center; margin-top:5vh;"><button type="submit">Відправити</button></div>
                
            
          </form>
      </div>
    </div>
  </div>  
    <div class="card">
    <div class="card-header" id="headingFour">
      <h5 class="mb-0">
        <button class="btn btn-secondary collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
          Додати цитату про інститут
        </button>
      </h5>
    </div>
    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
      <div class="card-body">
          <form action="app/add_about_ippt.php" method="POST" enctype="multipart/form-data">
            
                <div class="input-group">
                  
                   <span style="margin-left: 5px;" class="input-group-addon" id="basic-addon1">Цитата: </span>
                  <input type="text" class="form-control" name="title"  aria-describedby="basic-addon1">
                     <span style="margin-left: 5px;" class="input-group-addon" id="basic-addon1">ім'я та статус: </span>
                  <input type="text" class="form-control" name="status"  aria-describedby="basic-addon1">
                     <input type="hidden" name="10000" value="30000" />
                  <span class="fa fa-key" aria-hidden="true"></span>
                  <input style="margin-left: 5px;" type='file' name="photo">
                </div>

               <div style="text-align: center; margin-top:5vh;"><button type="submit">Відправити</button></div>
                
            
          </form>
      </div>
    </div>
  </div>
      <div class="card">
    <div class="card-header" id="headingFour">
      <h5 class="mb-0">
        <button class="btn btn-secondary collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseFive">
          Додати викладача
        </button>
      </h5>
    </div>
    <div id="collapseSix" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
      <div class="card-body">
          <form action="app/add_department_person.php" method="POST" enctype="multipart/form-data">
            
                <div class="input-group">
                  
                   <span style="margin-left: 5px;" class="input-group-addon" id="basic-addon1">Прізвище,Ім'я,по-батькові: </span>
                  <input type="text" class="form-control" name="name"  aria-describedby="basic-addon1">
                  <span style="margin-left: 5px;" class="input-group-addon" id="basic-addon1">Звання і заслуги: </span>
                  <input type="text" class="form-control" name="zaz"  aria-describedby="basic-addon1">
               
           
                </div>
                <div style="text-align: center;margin-top: 5vh"><select class="form-control" name="department" multiple="multiple">
                  <option value="1">ІСТ</option>
                  <option value="2">ЕКМ</option>
                  <option value="3">ФОА</option>
                 
                </select></div>

               <div style="text-align: center; margin-top:5vh;"><button type="submit">Відправити</button></div>
                
            
          </form>
      </div>
    </div>
  </div>
</div>
</section>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Bootstrap -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>	
</body>
</html>