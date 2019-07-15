<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>IPPT - student's page</title>
	<link rel="icon" href="/logo.png" type="image/x-icon">
	<link rel="shortcut icon" href="sources/img/logo.png" type="image/x-icon">
	<!-- Normalize css -->
	<link rel="stylesheet" href="sources/css/normalize.min.css">

	<!-- Bootstrap styles -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="sources/font-awesome/css/font-awesome.min.css">

	<!-- My styles -->
	<link rel="stylesheet" href="sources/css/style.min.css">
</head>
<body>
	<!-- PRELOADER -->
	<div id="preloader">
		<div class="preload-img">
			<img class="preload-logo" src="sources/img/logo.png" alt="logo">
		</div>
	</div>

	<!-- Header -->
	<header id="header" class="header">
		<div class="navbar-contacts-language">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<div class="col-2 col-md-2 align-self-center">
						<div class="nav-logo">
							<div class="nav-logo-img">
								<a href="index.php"></a>
							</div>
							<div class="nav-logo-info">
								<span>Інститут підприємництва та перспективних технологій</span>
								<span>Національного університету "Львівська Політехніка"</span>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-4 col-md-3 col-lg-2 align-self-center">
						<div class="nav-contacts">
							<div class="row justify-content-end">
								<a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i></a>
								<a href="https://www.linkedin.com" target="_blank"><i class="fa fa-linkedin"></i></a>
								<a href="https://www.instagram.com" target="_blank"><i class="fa fa-instagram"></i></a>
								<a href="https://www.youtube.com/" target="_blank"><i class="fa fa-youtube"></i></a>
							</div>
						</div>
					</div>
				</div>
			</nav>
		</div>
		<div class="navbar-menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<div class="mobile-menu">
						<div class="row justify-content-end">
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					       		<span class="navbar-toggler-icon-fa"><i class="fa fa-bars" aria-hidden="true"></i></span>
					    	</button>
						</div>					
					</div>
					<div class="col-12 col-lg-6 align-self-center navbar-menu-del-padding">
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav"> 
							    <li class="nav-item">
									<a class="nav-link" href="index.php">Головна <span class="sr-only">(current)</span></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="entrant.php">Вступнику</a>
								</li>
								<li class="nav-item active">
									<a class="nav-link" href="student.php">Студенту</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="graduate.php">Випускнику</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="news-archive.php">Новини</a>
								</li>
							</ul>    
						</div>
					</div>
					<div class="col-12 col-lg-4">
						<div class="row justify-content-end">
							<form class="form-inline my-2 my-lg-0 search-input" action="admin/app/search.php" method="POST">
								<input class="form-control mr-sm-2" type="text" placeholder="Пошук..." aria-label="Search" name="search">
								<button class="btn btn-searching my-2 my-sm-0" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
							</form>
						</div>
					</div>
				</div>
			</nav>
		</div>
	</header>

	<section id="students-page" class="students-page">
		<!-- DOCUMENTS -->
		<div id="documents" class="documents">
			<div class="container">
				<div class="row">
					<div class="col-12 col-lg-3">
			<form action="student_search.php" method="POST" enctype="multipart/form-data">
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
              <button class="btn btn-green" type="submit">Завантажити файл</button>
            </div>
          </div>
   </form>
					<div class="col-12 col-lg-9">
						<div class="file-container">
							<p class="info-file">
								<!-- <span>Hello world!</span> -->
								<embed type="application/pdf" pluginspage="https://get.adobe.com/ru/reader/?promoid=KSWLH" src="sources/pdf/knm-41.pdf">
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- TRAINING RESOURCES -->
		<div id="training-resources" class="training-resources">
			<div class="container">
				<h2 class="text-center">Навчальні матеріали</h2>
				<div id="libraries" class="libraries">
					<h3>Наші бібліотеки:</h3>
					<div class="row no-gutters">
						<div class="col-12 col-md-4">
							<div class="ippt-students-lib lp-lib">
								<div class="lib-img img">
									<img src="sources/img/libraries/library-ippt.jpg" alt="ippt-students-library-img">
								</div>
								<div class="lib-work-time">
									<h3 class="text-white">Науково-технічна бібліотека ІППТ</h3>
									<ul>
										<li><span>Робочий час:</span> 9:00 - 16:00</li>
										<li><span>Робочі дні:</span> пн - сб, неділя - вихідний</li>
										<li><span>Адрес:</span> вул. Горбачевського, 18</li>
										<li><span>Контактний телефон:</span> (032) 222-33-44</li>
										<li><span>Веб-сторінка:</span> <a href="about-us.php">ippt.lp.edu.ua/about-us.php</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-4">
							<div class="lp-students-lib lp-lib">
								<div class="lib-img img">
									<img src="sources/img/libraries/lp-stud-library.jpg" alt="lp-students-library-img">
								</div>
								<div class="lib-work-time">
									<h3 class="text-white">Студентська бібліотека Львівської Політехніки</h3>
									<ul>
										<li><span>Робочий час:</span> 9:00 - 16:00</li>
										<li><span>Робочі дні:</span> пн - сб, неділя - вихідний</li>
										<li><span>Адрес:</span> вул. Митрополита Андрея, 1</li>
										<li><span>Контактний телефон:</span> (032) 222-33-44</li>
										<li><span>Веб-сторінка:</span> <a href="http://lp.edu.ua/node/2570">lp.edu.ua/node/2570</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-4">
							<div class="lp-scientific-lib lp-lib">
								<div class="lib-img img">
									<img src="sources/img/libraries/lp-scientific-library.jpg" alt="lp-scientific-library-img">
								</div>
								<div class="lib-work-time">
									<h3 class="text-white">Науково-технічна бібліотека НУ ЛП</h3>
									<ul>
										<li><span>Робочий час:</span> 9:00 - 16:00</li>
										<li><span>Робочі дні:</span> пн - сб, неділя - вихідний</li>
										<li><span>Адрес:</span> вул. Професорська, 1</li>
										<li><span>Контактний телефон:</span> (032) 258-21-64</li>
										<li><span>Веб-сторінка:</span> <a href="http://library.lp.edu.ua/">library.lp.edu.ua</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="interexting-resourses" class="interesting-resourses">
					<h3>Ресурси з цікавою інформацією:</h3>
					<div class="main-resources">
						<h4>Основна інфомрація</h4>
						<div class="row no-gutters">
							<div class="col-12 col-md-6">
								<ul>
									<li>Prometheus: <a href="https://prometheus.org.ua/">prometheus.org.ua</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="it-resources">
						<h4>IT - технології</h4>
						<div class="row no-gutters">
							<div class="col-12 col-md-6">
								<ul>
									<li>Спільнота праграмістів: <a href="https://dou.ua/">dou.ua</a></li>
									<li>Бібліотека програміста: <a href="https://proglib.io/">proglib.io</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="economic-resources">
						<h4>Економіка</h4>
						<div class="row no-gutters">
							<div class="col-12 col-md-6">
								<ul>
									<li>Міністерсто економічного розвитку та торгівлі: <a href="http://www.me.gov.ua">me.gov.ua</a></li>
								</ul>
							</div>
							<!-- <div class="col-12 col-md-6">
								<ul>
									<li>Hello World: <a href="#">info.com</a></li>
									<li>Hello World: <a href="#">info.com</a></li>
								</ul>
							</div> -->
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- NEARBY OBJECTS -->
		<div id="nearby-objects" class="nearby-objects">
			<div class="container">
				<h2 class="text-center">Найближчі об'єкти</h2>
				<div class="row no-gutters">
					<div class="col-12">
						<iframe src="https://www.google.com/maps/d/embed?mid=14J_GC4Q2yEKSqlbjfn7WpL1tBos" width="100%" height="320"></iframe>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<!-- FOOTER -->
	<footer id="footer" class="footer">
		<div class="container">
			<div class="row no-gutters align-items-center">
				<div class="col-2">
					<div class="footer-logo img">
						<a href="index.php">
							<img src="sources/img/logo.png" alt="footer-logo">
						</a>
					</div>
				</div>
				<div class="col-5">
					<div class="contact-us text-white">
						<p>Адреса: 79044, м. Львів, вул. Горбачевського, 18, 32-й н.к. </p>
						<p>Тел: (+38032) 297-07-55, (+38032) 258-20-27б</p>
						<p>E-mail: IPPT.dept@lpnu.ua, dir.ippt@gmail.com</p>
					</div>
				</div>
				<div class="col-5">
					<div class="copyright">
						<p class="text-white">
							<i class="fa fa-copyright" aria-hidden="true"></i>
							2018 Інститут підприємництва та перспективних технологій <br> НУ "Львівська політехніка"<br>
							<a class="text-green" href="#our-genius">Розробка та підтримка здійснюється викладачами та студентами ІППТ.</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Bootstrap -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>

	<!-- My scripts -->
	<script src="sources/js/script.min.js"></script>
</body>
</html>