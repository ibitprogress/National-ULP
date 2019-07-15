<?php 
	include($_SERVER['DOCUMENT_ROOT'].'/ippt-website/config/config.php');

	$dep = R::getAll("SELECT * FROM department WHERE dp=1");

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>IPPT - Department IST</title>

	<!-- Normalize css -->
	<link rel="stylesheet" href="../../sources/css/normalize.min.css">

	<!-- Bootstrap styles -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="../../sources/font-awesome/css/font-awesome.min.css">

	<!-- My styles -->
	<link rel="stylesheet" href="ist.css">
</head>
<body data-spy="scroll" data-target=".scrolling-navbar" data-offset="50" class="body"> 
	<!-- Preloader -->
	<div id="preloader">
		<div class="preload-img">
			<img class="preload-logo" src="../../sources/img/logo.png" alt="logo">
		</div>
	</div>

	<!-- HEADER -->
	<header id="header-dep" class="header-dep">
		<nav class="navbar fixed-top navbar-expand-lg navbar-light scrolling-navbar">  
		<div class="container">
			<a class="navbar-brand text-dark-blue nav-link-scroll" href="#bg-img-ist">Кафедра ІСТ</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav mr-auto col justify-content-end">
			      <li class="nav-item">
			        <a class="nav-link nav-link-scroll" href="#about-department">Про нас</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link nav-link-scroll" href="#education">Освітні програми</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link nav-link-scroll" href="#teachers">Працівники</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link nav-link-scroll" href="#science">Наукова діяльність</a>
			      </li>
			      <!-- <li class="nav-item">
			        <a class="nav-link nav-link-scroll" href="#ist-stud-proj">Проекти</a>
			      </li> -->
			      <li class="nav-item">
			        <a class="nav-link nav-link-scroll" href="#partners">Партнери</a>
			      </li>
			    </ul>
			  </div>
			</div>
		</nav>
	</header>

	<!-- BACKGROUND IMG -->
	<div id="bg-img-ist" class="bg-img-ist">
		<h1 class="text-white">Кафедра<br>інформаційних систем<br>і технологій</h1>
		<div class="transfotrm-diagonal-green"></div>
		<div class="transfotrm-diagonal-dark-blue"></div>
	</div>

	<!-- IST DEPARTMENT -->
	<section id="ist-department" class="ist-department">
		<div id="about-department" class="about-department">
			
			<div class="about-department-info-container">
				<div class="container">
					<div class="about-department-info">
						<h2 class="text-white text-center">Про нас</h2>
						<p class="text-white">Кафедра інформаційних систем і технологій (ІСТ) — це навчально-науковий підрозділ Інституту підприємництва та перспективних технологій Національного університету “Львівська політехніка”.  Кафедра інформаційних систем і технологій проводить підготовку фахівців з спеціальності 122 “Комп’ютерні науки” за освітніми рівнями:</p>
						<ul>
							<li class="text-white">бакалавр;</li>
							<li class="text-white">магістр (спеціалізація – “Комп’ютерний еколого-економічний моніторинг”</li>
						</ul>
						<p class="text-white">При кафедрі діє циклова комісія, що забезпечує підготовку студентів за освітньо-кваліфікаційним рівнем “молодший спеціаліст” спеціальності 122 “Комп’ютерні науки”.</p>
						<p class="text-white">Навчальна діяльність кафедри тісно пов’язана з науковою діяльністю науково-педагогічних працівників і студентів. Колектив кафедри інформаційних систем і технологій налічує понад 20 науково-педагогічних працівників (на постійному місці праці та за сумісництвом), з яких 2 доктора наук, професора та 15 кандидатів наук.</p>
						<p class="text-white">Результати наукових досліджень викладачів опубліковані у фахових наукових вісниках та журналах, які включених до міжнародних наукометричних баз даних ( Web of Science, Scopus, Web of Knowledge, Google Scholar тощо),  матеріалах міжнародних наукових конференцій та семінарів.</p>
					</div>
				</div>
			</div>
			<div id="subdivisions" class="subdivisions">
				<div class="container">
					<h3 class="text-center">Підрозділи кафедри</h3>
					<div class="row">
						<div class="col-12">
							<div class="subdivision">
								<div class="subdivision-container">
									<div class="subdivision-title">
										<h4>Лабораторія проектування вбудованих систем</h4>
									</div>
									<div class="subdivision-description">
										<p>Включає мікроконтролери AVR та STM32 з комплектами давачів і актюаторів. На базі лабораторії ведеться практична підготовка з навчальних дисциплін: "Архітектура комп’ютерів", "Основи електроніки", "Комп’ютерна схемотехніка та архітектура комп’ютерів", "Проектування Інтернет речей", "Проектування інформаційних управляючих систем екологічного моніторингу". Лабораторна база використовується при виконання дипломних магістерських робіт. Проводяться наукові дослідження.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12">
							<div class="subdivision">
								<div class="subdivision-container">
									<div class="subdivision-title">
										<h4>Локальна мережева академія CISCO</h4>
									</div>
									<div class="subdivision-description">
										<p>Студенти мають можливість займатись в локальній мережевій академії CISCO, яка функціонує в Інституті. Після успішного завершення навчання видаються відповідні сертифікати міжнародного взірця.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12">
							<div class="subdivision">
								<div class="subdivision-container">
									<div class="subdivision-title">
										<h4>ITlab Науково – навчальна студентська лабораторія ІТ</h4>
									</div>
									<div class="subdivision-description">
										<p>Scientific research students laboratory IT Науково-навчальна студентська лабораторія інформаційних технологій створена для підтримки інноваційних студентських проектів з 	розробки програмних та апаратних рішень в рамках науково-навчальних напрямів кафедри.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="education" class="education">
			<div class="education-container">
				<div class="container">
					<h2 class="text-white text-center">Освітні програми</h2>
					<div class="row">
						<div class="col-12 col-md-4">
							<div class="education-part">
								<div class="education-part-title">
									<h4 class="text-white text-center">ОКР "МОЛОДШИЙ СПЕЦІАЛІСТ"</h4>
								</div>
								<div class="education-part-content text-center">
									<p>Спеціальність 122 Комп’ютерні науки <br> (5.05010101 «Обслуговування програмних систем і комплексів») <br> Кваліфікація: молодший спеціаліст з  комп’ютерних наук</p>
									<a href="../../sources/pdf/education_science_3.pdf" class="text-green">Читати більше</a>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-4">
							<div class="education-part">
								<div class="education-part-title">
									<h4 class="text-white text-center">ОР "БАКАЛАВР"</h4>
								</div>
								<div class="education-part-content text-center">
									<p>Спеціальність 122 Комп’ютерні науки, галузь знань 12 "Інформаційні технології" <br> Кваліфікація: бакалавр з комп’ютерних наук</p>
									<a href="../../sources/pdf/ОПП_КН_бак_17-18_01-04-18.pdf" class="text-green">Читати більше</a>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-4">
							<div class="education-part">
								<div class="education-part-title">
									<h4 class="text-white text-center">ОР "МАГІСТР"</h4>
								</div>
								<div class="education-part-content text-center">
									<p>Спеціальність: 122 Комп’ютерні науки, галузь знань 12 "Інформаційні технології" <br> Кваліфікація: магістр з комп’ютерних наук <br> за спеціалізацією "Комп’ютерний еколого-економічний моніторинг"</p>
									<a href="../../sources/pdf/ОПП_компютерний_еколого-економiчний_монiторинг_м_1.12._2016.pdf" class="text-green">Читати більше</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="green-bg"></div>
		</div>

		<div id="teachers" class="teachers">
			<div class="container">
				<h2 class="text-center">Працівники кафедри</h2>
				<div class="row">
				<?php foreach($dep as $d): ?> 	
					<div class="col-12 col-md-6">
						<div class="teacher">
							<h4 class="text-dark-blue"><a><?=$d['name']; ?> </a></h4>
							<h6 class="text-green"><?=$d['zaz']; ?></h6>
							<hr>
						</div>
					</div>
				<?php endforeach; ?>	
<!-- 					<div class="col-12 col-md-6">
						<div class="teacher">
							<h4 class="text-dark-blue"><a href="teacher-ist.php">Слюсарчук Юрій Миколайович  </a></h4>
							<h6 class="text-green">доцент кафедри, к.ф.-м.н., доцент</h6>
							<hr>
						</div>
					</div>
					<div class="col-12 col-md-6">
						<div class="teacher">
							<h4 class="text-dark-blue"><a href="teacher-ist.php">Ємець Володимир Федорович </a></h4>
							<h6 class="text-green">професор кафедри, д.ф.-м.н., професор</h6>
							<hr>
						</div>
					</div>
					<div class="col-12 col-md-6">
						<div class="teacher">
							<h4 class="text-dark-blue"><a href="teacher-ist.php">Процько Ігор Омелянович </a></h4>
							<h6 class="text-green">доцент кафедри, к.т.н., доцент</h6>
							<hr>
						</div>
					</div>
					<div class="col-12 col-md-6">
						<div class="teacher">
							<h4 class="text-dark-blue"><a href="teacher-ist.php">Машевська Марта Володимирівна </a></h4>
							<h6 class="text-green">старший викладач кафедри, к.т.н.</h6>
							<hr>
						</div>
					</div>
					<div class="col-12 col-md-6">
						<div class="teacher">
							<h4 class="text-dark-blue"><a href="teacher-ist.php">Баран Мар'яна Михайлівна  </a></h4>
							<h6 class="text-green">доцент кафедри, к.ф.-м.н., доцент</h6>
							<hr>
						</div>
					</div>
					<div class="col-12 col-md-6">
						<div class="teacher">
							<h4 class="text-dark-blue"><a href="teacher-ist.php">Зелінський Андрій Ярославович </a></h4>
							<h6 class="text-green">старший викладач кафедри, к.т.н.</h6>
							<hr>
						</div>
					</div>
					<div class="col-12 col-md-6">
						<div class="teacher">
							<h4 class="text-dark-blue"><a href="teacher-ist.php">Угрин Леся Євгенівна </a></h4>
							<h6 class="text-green">старший викладач кафедри</h6>
							<hr>
						</div>
					</div>
					<div class="col-12 col-md-6">
						<div class="teacher">
							<h4 class="text-dark-blue"><a href="teacher-ist.php">Борейко Олег Юрійович </a></h4>
							<h6 class="text-green">асистент кафедри, к.т.н.</h6>
							<hr>
						</div>
					</div>
					<div class="col-12 col-md-6">
						<div class="teacher">
							<h4 class="text-dark-blue"><a href="teacher-ist.php">Щербак Ілона Миколаївна </a></h4>
							<h6 class="text-green">старший викладач кафедри, к.т.н.</h6>
							<hr>
						</div>
					</div>
					<div class="col-12 col-md-6">
						<div class="teacher">
							<h4 class="text-dark-blue"><a href="teacher-ist.php">Лиса Наталія Корнеліївна </a></h4>
							<h6 class="text-green">асистент кафедри, к.т.н.</h6>
							<hr>
						</div>
					</div>
					<div class="col-12 col-md-6">
						<div class="teacher">
							<h4 class="text-dark-blue"><a href="teacher-ist.php">Навитка Марія Любомирівна </a></h4>
							<h6 class="text-green">старший викладач кафедри</h6>
							<hr>
						</div>
					</div>
					<div class="col-12 col-md-6">
						<div class="teacher">
							<h4 class="text-dark-blue"><a href="teacher-ist.php">Максим'юк Катерина Вікторівна </a></h4>
							<h6 class="text-green">асистент кафедри</h6>
							<hr>
						</div>
					</div> -->
				</div>
			</div>
		</div>

		<div id="science" class="science">
			<div class="science-container">
				<div class="container">
					<h2 class="text-white text-center">Наукова діяльність</h2>
					<div class="row">
						<div class="col-12 col-md-6">
							<div class="science-card">
								<h4 class="text-center">Наукові напрями кафедри інформаційних систем і технологій</h4>
								<hr>
								<ul>
									<li>дослідження та проектування інтелектуальних систем (керівник – проф. Теслюк В.М.)</li>
									<li>швидкі алгоритми цифрової обробки сигналів (керівник – доц. Процько І.О.)</li>
									<li>автоматизація проектування і моделювання систем "Розумний будинок" та "Розумне місто"</li>
									<li>розроблення та дослідження інтелектуальних систем комп'ютерного еколого-економічного моніторингу</li>
								</ul>
							</div>
						</div>
						<div class="col-12 col-md-6">
							<div class="science-card">
								<h4 class="text-center">Тематика наукових робіт та проектних розробок викладачів і студентів кафедри</h4>
								<hr>
								<ul>
									<li>організація моделей баз і сховищ даних</li>
									<li>розроблення інформаційного забезпечення комп’ютерних систем, web-систем та Інтернет технологій</li>
									<li>проектування інформаційного забезпечення систем аналізу та підтримки прийняття рішень</li>
								</ul>
								<p>В рамках наукової роботи зі студентами вивчаються новітні технології розробки програмного забезпечення<!-- , зокрема під мобільну операційну систему Android та з використання апаратно-обчислювальної платформи Arduino -->.</p>
							</div>
						</div>
						<div class="col-12">
							<div class="science-card publications">
								<h4 class="text-center">Публікації</h4>
								<hr>
								<div class="publication">
									<p><span class="text-green">Boreiko O., Teslyuk V., Zelinskyy A., Berezsky O. Development of models and means of the server part of the system for passenger traffic registration of public transport in the "smart" city // Східно-Європейський журнал передових технологій. – 2017. – № 1/2 (85). – P. 40–47. (SCOPUS)</p>
								</div>
								<div class="publication">
									<p><span class="text-green">Holovatyy A., Teslyuk V., Iwaniec M., Mashevska M. Development of a system for monitoring vibration accelerations based on the raspberry pi microcomputer and the ADXL345 accelerometer // Східно-Європейський журнал передових технологій. – 2017. – № 6. – P. 52–62. (SCOPUS)</p>
								</div>
								<div class="more-publications">
									<a href="#" class="btn btn-green">Більше публікацій</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="dark-blue-bg"></div>
		</div>

	<!-- 	<div id="ist-stud-proj" class="ist-stud-proj">
			<div class="container">
				<h2 class="text-center">Проекти кафедри</h2>
				<div class="row">
					<div class="col-12 col-md-6">
						<a href="projects.php">
							<div class="proj-card">
								<div class="row no-gutters">
									<div class="col-12 col-md-5">
										<div class="proj-img">
											<img src="../../sources/img/news/IMG_4752.jpg" alt="proj-img">
										</div>
									</div>
									<div class="col-12 col-md-7">
										<div class="proj-info">
											<h3 class="text-white">Lorem Ipsum</h3> -->
											<!-- <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis cum mollitia fuga ut atque dolorum.</p>
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-12 col-md-6">
						<a href="projects.php">
							<div class="proj-card">
								<div class="row no-gutters">
									<div class="col-12 col-md-5">
										<div class="proj-img">
											<img src="../../sources/img/news/IMG_4731.jpg" alt="proj-img">
										</div>
									</div>
									<div class="col-md-7">
										<div class="proj-info">
											<h3 class="text-white">Lorem Ipsum</h3>
											<!-- <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis voluptate reiciendis adipisci architecto nisi dolore!</p> 
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="more-proj">
					<a href="projects.php" class="btn btn-dark-blue">Переглянути усі</a>
				</div>
			</div>
		</div> -->

		<div id="partners" class="partners">
			<div class="container">
				<h2 class="text-white text-center">Партнери</h2>
				<div class="row">
					<div class="col-12">
						<div class="partner">
							<h4 class="text-white">Природний заповідник "Розточчя"</h4>
						</div>
					</div>
					<div class="col-12">
						<div class="partner">
							<h4 class="text-white">Державний історико-культурний заповідник "Тустань"</h4>
						</div>
					</div>
					<div class="col-12">
						<div class="partner">
							<h4 class="text-white">Компанія Epam Systems</h4>
						</div>
					</div>
					<div class="col-12">
						<div class="partner">
							<h4 class="text-white">Компанія N-iX</h4>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>

	<!-- FOOTER -->
	<footer id="footer" class="footer">
		<div class="container">
			<div class="copyright">
				<p class="text-green">
					<i class="fa fa-copyright text-green" aria-hidden="true"></i>
					2018 Інститут підприємництва та перспективних технологій НУ "Львівська політехніка"
				</p>
			</div>
		</div>
	</footer>

	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Bootstrap -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>

	<!-- Plugins scripts -->
	<script src="jparticle.jquery.min.js"></script>

	<!-- My scripts -->
	<script src="ist.js"></script>
</body>
</html>