<?php 
	include($_SERVER['DOCUMENT_ROOT'].'/ippt-website/config/config.php');

	$news = R::getAll('SELECT * FROM news WHERE type_of_new=4');


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>IPPT - Student's College</title>

	<!-- Normalize css -->
	<link rel="stylesheet" href="../sources/css/normalize.min.css">

	<!-- Bootstrap styles -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="../sources/font-awesome/css/font-awesome.min.css">

	<!-- My styles -->
	<link rel="stylesheet" type="text/css" href="student-college.css">
</head>
<body data-spy="scroll" data-target=".navbar-scroll" data-offset="50" id="body">
	<!-- Preloader -->
	<div id="preloader">
		<div class="preload-img">
			<img class="preload-logo" src="../sources/img/logo.png" alt="logo">
		</div>
	</div>

	<!-- Header -->
	<header id="header" class="header">
		<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-blue navbar-scroll">
			<div class="container">
				<a class="navbar-brand nav-link-scroll" href="#body">КСІ</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
				    <ul class="navbar-nav mr-auto col justify-content-end">
				      <li class="nav-item">
				        <a class="nav-link nav-link-scroll" href="#about-csi">Про нас <span class="sr-only">(current)</span></a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link nav-link-scroll" href="#csi-components">Склад</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link nav-link-scroll" href="#csi-activity">Діяльність</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link nav-link-scroll" href="#csi-news">Новини</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link nav-link-scroll" href="#csi-contacts">Контакти</a>
				      </li>
				    </ul>
				</div>
			</div>
		</nav>
	</header>

	<div class="bg-csi-img">
		<a class="scroll-down" href="#about-csi"></a>
		<div class="bg-pattern"></div>
	</div>

	<!-- Student College -->
	<section id="student-college" class="student-college">
		<div id="about-csi" class="about-csi">
			<div class="container">
				<h2 class="text-blue text-center"><span>Про нас</span></h2>
				
					<div class="row no-gutters">
						<div class="col-12 col-md-6">
							<div class="info-about-us text-blue">
								<p>
									Колегія студентів  є провідним органом студентського самоврядування,<br> який об’єднує на добровільних засадах студентів інституту, сприяючи створенню умов прозорості,<br> чесності та відкритості навчального процесу.
								</p>
								<p>
									КСІ є ланкою між студентами та викладачами, щоб зробити їх спілкування ефективнішим,<br> дати можливість студентам донести до адміністрації університету свій погляд на навчальний процес.
								</p>
								<p>
									КСІ забезпечує захист прав та інтересів студентів, їхню участь у керуванні інституту,<br> дає можливість для творчої та особистої реалізації, розвиває лідерські навички студентів.
								</p>
								<p>
									Варто зазначити, що Колегія студентів представляє інтереси усієї студентської громади,<br> членом якої Ви стаєте, вступаючи до лав студентства.
								</p>
							</div>
						</div>
						<div class="col-12 col-md-6">
							<div class="students-polozhennya text-blue">
								<p>
									Студентське самоврядування діє відповідно  до законодавства  України,<br> рішень спеціально уповноваженого центрального органу виконавчої влади в галузі освіти і науки,<br> Міністерства освіти і науки, молоді та спорту  України, положення про студентське самоврядування в Університеті.
								</p>
								<p>
									У <a href="http://www.lp.edu.ua/sites/default/files/attach/2017/4656/students-polozhennya-2016.pdf" class="text-aqua text-bold">цьому положенні</a> вказані  основні завдання Студентського самоврядування:
									<ul>
										<li><span>забезпечення і захист прав та інтересів студентів, зокрема, стосовно організації навчального процесу;</span></li>
										<li><span>забезпечення виконання студентами своїх обов'язків;</span></li>
										<li><span>сприяння навчальній, науковій та творчій діяльності студентів;</span></li>
										<li><span>сприяння створенню відповідних умов для проживання та відпочинку студентів;</span></li>
										<li><span>сприяння діяльності студентських гуртків, товариств, об'єднань, клубів за інтересами;</span></li>
										<li><span>організація співробітництва із студентами інших вищих навчальних закладів і молодіжними організаціями;</span></li>
										<li><span>сприяння працевлаштуванню випускників;</span></li>
										<li><span>участь у вирішенні питань міжнародного обміну студентами.</span></li>
									</ul>
								</p>
							</div>
						</div>
					</div>
			</div>
		</div>

		<div id="csi-components" class="csi-components">
			<div class="container">
				<h2 class="text-blue text-center"><span>Склад колегії</span></h2>
				<div class="csi-members">
					<div class="row justify-content-around">
						<div class="col-lg-3">
							<div class="csi-member-card">
								<div class="csi-member-img img">
									<img src="../sources/img/student-college/members/roman.jpg" alt="csi-member-img">
								</div>
								<div class="csi-member-name">
									<h3 class="text-white text-center">Присташ <br> Юрій</h3>
									<h5 class="text-blue text-center">Голова Колегії студентів</h5>
								</div>
								<div class="csi-member-info">
									<h4 class="text-white">Контактна інформація:</h4>
									<p class="text-aqua">
										<span class="text-bold">Тел:</span><br>  (097) 17 50 340<br>
										<span class="text-bold">E-mail: ksi.ippt@gmail.com</span><br> <br>
										<span class="text-bold">Соц. мережі:</span><br> <a href="https://www.facebook.com/rtsudny" class="text-aqua text-white-hover">facebook.com/rtsudny</a>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="csi-activity" class="csi-activity">
			<div class="container">
				<h2 class="text-blue text-center"><span>Діяльність колегії</span></h2>
				<div class="our-activity">
					<div class="row justify-content-around">
						<div class="col-lg-6">
							<div class="activity-card">
								<div class="activity-icon">
									<i class="fa fa-line-chart" aria-hidden="true"></i>
								</div>
								<div class="activity-info">
									<p>Ініціює заходи, спрямовані на підвищення якості освіти інституту і запровадження новітніх освітніх технологій;</p>
								</div>
								<div class="clear"></div>
							</div>
						</div>

						<div class="col-lg-6">
							<div class="activity-card">
								<div class="activity-icon">
									<i class="fa fa-handshake-o" aria-hidden="true"></i>
								</div>
								<div class="activity-info">
									<p>Організовує зустрічі, майстер-класи, тренінги з представниками бізнесу та відомими людьми;</p>
								</div>
								<div class="clear"></div>
							</div>
						</div>


						<div class="col-lg-6">
							<div class="activity-card">
								<div class="activity-icon">
									<i class="fa fa-university" aria-hidden="true"></i>
								</div>
								<div class="activity-info">
									<p>Організовує та проводить екскурсії на підприємства, державні установи, фабрики та заводи;</p>
								</div>
								<div class="clear"></div>
							</div>
						</div>


						<div class="col-lg-6">
							<div class="activity-card">
								<div class="activity-icon">
									<i class="fa fa-book" aria-hidden="true"></i>
								</div>
								<div class="activity-info">
									<p>Сприяє забезпеченню навчальними та методичними матеріалами (співпраця з бібліотекою і кафедрами);</p>
								</div>
								<div class="clear"></div>
							</div>
						</div>


						<div class="col-lg-6">
							<div class="activity-card">
								<div class="activity-icon">
									<i class="fa fa-bar-chart" aria-hidden="true"></i>
								</div>
								<div class="activity-info">
									<p>Досліджує різні аспекти навчально-виховного процесу з метою виявлення його проблем та недоліків, розробляє пропозиції для їх вирішення;</p>
								</div>
								<div class="clear"></div>
							</div>
						</div>


						<div class="col-lg-6">
							<div class="activity-card">
								<div class="activity-icon">
									<i class="fa fa-user-md" aria-hidden="true"></i>
								</div>
								<div class="activity-info">
									<p>Співпрацює з кафедрами в організації (у разі потреби)  консультаційних занять для студентів, які мають проблеми із засвоєнням певних дисциплін;</p>
								</div>
								<div class="clear"></div>
							</div>
						</div>


						<div class="col-lg-6">
							<div class="activity-card">
								<div class="activity-icon">
									<i class="fa fa-ambulance" aria-hidden="true"></i>
								</div>
								<div class="activity-info">
									<p>Бере участь у розв’язанні  конфліктів, що виникають у навчальній діяльності;</p>
								</div>
								<div class="clear"></div>
							</div>
						</div>

						<div class="col-lg-6">
							<div class="activity-card">
								<div class="activity-icon">
									<i class="fa fa-calendar" aria-hidden="true"></i>
								</div>
								<div class="activity-info">
									<p>Проводить заходи, спрямовані на розвиток соціальної відповідальності та історичної свідомості;</p>
								</div>
								<div class="clear"></div>
							</div>
						</div>

						<div class="col-lg-8">
							<div class="activity-card">
								<div class="activity-icon">
									<i class="fa fa-gavel" aria-hidden="true"></i>
								</div>
								<div class="activity-info">
									<p>Звичайно, що Колегія студентів захищає інтереси студентства. В інституті накопичено досвід звернення студентів із письмовими заявами з різних питань із проханням втручання, сприяння КСІ</p>
								</div>
								<div class="clear"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="csi-news" class="csi-news">
			<div class="container">
				<h2 class="text-blue text-center"><span>Новини колегії</span></h2>
				<div class="row no-gutters">
					<?php foreach($news as $new): ?>
					<div class="col-12 col-md-6 col-lg-6">
						<a href="news.php?news=<?=$new['id']; ?>" >
							<div class="news-card">
								<div class="row no-gutters">
									<div class="col-12 col-lg-5">
										<div class="news-card-img img">
											<img src="../<?=$new['img']; ?>" alt="news">
										</div>
									</div>
									<div class="col-12 col-lg-7">
										<div class="news-card-text">
											<h3 class="text-white"><?=$new['title']; ?></h3>
											<h5 class="text-green"><?=$new['data_add']; ?></h5>
											<p class="text-white"><?=$new['short_text']; ?></p>
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
				<?php endforeach; ?>
				</div>
				<div class="add-enother-news">
					<a href="news-archive.php" class="btn btn-aqua">Переглянути більше</a>
				</div>
			</div>
		</div>
	</section>

	<!-- Footer -->
	<footer id="csi-contacts" class="csi-contacts">
		<div class="contacts-info">
			<h4 class="text-white"><span>Контакти:</span></h4>
			<p class="text-white">
				Адреса: м. Львів, вул. Горбачевського, 18, каб.: 001 <br>
				E-mail: ksi.ippt@gmail.com <br>
				Тел: 097 17 50 340 <br>
				<a href="https://www.facebook.com/ksiippt/" class="text-aqua text-white-hover"><img src="../sources/img/contacts/facebook.svg" alt="facebook-icon"></a>
				<a href="https://www.instagram.com/ksi_ippt/" class="text-aqua text-white-hover"><img src="../sources/img/contacts/instagram.svg" alt="instagram-icon"></a>
			</p>
		</div>
		<div class="contacts-img">
			<div class="img">
				<img src="../sources/img/student-college/stud-col-all.jpg" alt="footer-img">
			</div>
		</div>
	</footer>

	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Bootstrap -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>

	<!-- My scripts -->
	<script src="student-college.js"></script>
</body>
</html>