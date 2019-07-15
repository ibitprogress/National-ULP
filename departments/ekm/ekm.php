<?php 
	include($_SERVER['DOCUMENT_ROOT'].'/ippt-website/config/config.php');

	$dep = R::getAll("SELECT * FROM department WHERE dp=2");

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>IPPT - Department EKM</title>
	<!-- Normalize css -->
	<link rel="stylesheet" href="../../sources/css/normalize.min.css">

	<!-- Bootstrap styles -->
	<link rel="stylesheet" href="../../sources/css/bootstrap.min.css" crossorigin="anonymous"><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="../../sources/font-awesome/css/font-awesome.min.css">

	<!-- My styles -->
	<link rel="stylesheet" href="ekm.css">
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
			<a class="navbar-brand text-blue nav-link-scroll" href="#bg-img-ist">Кафедра ЕКМ</a>
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
			     <!--  <li class="nav-item">
			        <a class="nav-link nav-link-scroll" href="#ekm-stud-proj">Проекти</a>
			      </li> -->
			      <li class="nav-item">
			        <a class="nav-link nav-link-scroll" href="#partners">Партнери</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link nav-link-scroll" href="#practice-bases">Бази практик</a>
			      </li>
			    </ul>
			  </div>
			</div>
		</nav>
	</header>

	<!-- BACKGROUND IMG -->
	<div id="bg-img-ekm" class="bg-img-ekm">
		<h1 class="text-white">Кафедра<br>економіки та <br> маркетингу</h1>
		<div class="transfotrm-diagonal-green"></div>
		<div class="transfotrm-diagonal-blue"></div>
	</div>

	<!-- EKM DEPARTMENT -->
	<section id="ekm-department" class="ekm-department">
		<div id="about-department" class="about-department">
			
			<div class="about-department-info-container">
				<div class="container">
					<div class="about-department-info">
						<h2 class="text-white text-center">Про нас</h2>
						<p class="text-white">Кафедра економіки і маркетингу (ЕКМ) створена у 2016 році шляхом об’єднання кафедр загальноекономічної підготовки та маркетингу, гуманітарної підготовки і кафедри міжнародної економіки.</p>
						<p class="text-white">Кафедра здійснює підготовку бакалаврів галузі знань 07 «Управління та адміністрування» спеціальності 075 «Маркетинг» денної та заочної форм навчання а також забезпечує викладання фундаментальних загальноекономічних та гуманітарних дисциплін для інших спеціальностей ліцензованих в інституті. При кафедрі діє циклова комісія для організації підготовки фахівців за освітньо-кваліфікаційним рівнем “молодший спеціаліст” спеціальності «Маркетинг».</p>
						<p class="text-white">Одним із стратегічних завдань кафедри економіки і маркетингу є удосконалення системи освітньої діяльності у відповідності до Закону України «Про вищу освіту». Робота колективу кафедри спрямована на підготовку конкурентоспроможних фахівців шляхом підвищення якості надання освітніх послуг, впровадження інноваційних методів навчання, органічного поєднання навчальної та наукової роботи, вдосконалення практичної складової підготовки студентів, формування освітніх програм згідно тенденцій та потреб ринку праці. В основі навчальних програм фахових та вибіркових дисциплін - інноваційні авторські курси, які реалізують концепцію проблемно-орієнтованого навчання з метою розвитку творчого, критичного мислення у студентів, набуття ними відповідних фахових компетентностей.</p>
						<p class="text-white">Для забезпечення всебічного розвитку студентів освітньо-наукова діяльність кафедри базується на:</p>
						<ul>
							<li class="text-white">поєднанні теоретичних та прикладних аспектів навчання;</li>
							<li class="text-white">організації практик у провідних установах, організаціях та підприємствах м.Львова., регіону а також підприємствах Польщі;</li>
							<li class="text-white">впровадженні інтегрованих платформ для дистанційного викладання через систему Віртуального навчального середовища Національного університету «Львівська політехніка»;</li>
							<li class="text-white">організації наукової роботи з молодими науковцями та студентами;</li>
							<li class="text-white">проведенні змістовної виховної серед студентської молоді.</li>
						</ul>
						<p class="text-white">Підготовка фахівців має широкий міжгалузевий профіль, що дозволить випускникам кафедри здійснювати професійну діяльність у різних сферах економіки та стати конкурентоспроможними на ринку праці, успішними консультантами з маркетингу; фахівцями із стандартизації, сертифікації та якості; фахівцями-аналітиками з дослідження ринків; економістами з інтернет-маркетингу; менеджерами з транспортно-експедиторської діяльності; менеджерами (управителями) із комунікаційних технологій; менеджерами  з логістики; менеджерами  зі збуту; менеджерами із реклами.</p>
					</div>
				</div>
			</div>
		</div>

		<div id="education" class="education">
			<div class="education-container">
				<div class="container">
					<h2 class="text-white text-center">Освітні програми</h2>
					<div class="row">
						<div class="col-12 col-md-6">
							<div class="education-part">
								<div class="education-part-title">
									<h3 class="text-bold text-white text-center">Бакалавр</h3>
								</div>
								<div class="education-part-content text-center">
									<p>
									    <h4>ОСВІТНЬО-ПРОФЕСІЙНА ПРОГРАМА</h4>
										першого (бакалаврського) рівня вищої освіти <br>
										за спеціальністю 075 Маркетинг <br>
										Галузі знань 07 Управління та адміністрування <br>
										Кваліфікація: Бакалавр з маркетингу <br>
										<a href="../../sources/pdf/ОПП_бакал_маркетинг-1-1.pdf" class="text-green">Читати більше</a>
									</p>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6">
							<div class="education-part">
								<div class="education-part-title">
									<h3 class="text-bold text-white text-center">Молодший спеціаліст</h3>
								</div>
								<div class="education-part-content text-center">
									<p>
										<h4>ОСВІТНЬО-ПРОФЕСІЙНА ПРОГРАМА ПІДГОТОВКИ МОЛОДШОГО СПЕЦІАЛІСТА</h4>
										за спеціальністю 075 Маркетинг <br>
										(5.03050702 “Комерційна діяльність”) <br>
										Кваліфікація: молодший спеціаліст з маркетингу <br>
										<a href="../../sources/pdf/ОПП_мол_спеціал_читати_більше.pdf" class="text-green">Читати більше</a>
									</p>
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
				</div>
			</div>
		</div>

		<div id="science" class="science">
			<div class="science-container">
				<div class="container">
					<h2 class="text-white text-center">Наукова діяльність</h2>
					<div class="row">
						<div class="col-12">
							<div class="science-card">
								<p>Наукова діяльність кафедри економіки і маркетингу зосереджена на перспективних напрямах наукових досліджень, а саме:</p>
								<ul>
									<li>
										Урбаністика та просторова економіка <br>
										(к.е.н., доц. Лисяк Н.М., к.е.н. Олексюк Г.В., к.е.н. Попадинець Н.М., к.е.н.Пастернак О.І.);
									</li>
									<li>
										Проблеми формування ефективної моделі господарської системи в умовах євроінтеграційних процесів <br>
										(к.е.н., доц. Батьковець Н.О., к.е.н. Лех І.А., ст.викладач Колінко Н.О.);
									</li>
									<li>
										Дослідження теоретичних та прикладних аспектів соціально-гуманітарного розвитку України <br>
										(к.і.н., доц.Цубов Л.В., к.і.н., доц.Божко Н.М., ст.викладач Калінська О.П.).
									</li> 
								</ul>

								<p>Для забезпечення оптимального поєднання науково-дослідного та навчально-виховного процесу кафедри заплановано:</p>
								<ul>
									<li>посилення зв’язків із підприємствами та організаціями як потенційними роботодавцями для випускників кафедри;</li>
									<li>посилення роботи з підготовки і публікації результатів наукових досліджень у міжнародних наукових журналах, що входять до наукометричних баз даних;</li>
									<li>поглиблення співпраці з провідними вченими інших науково-дослідних, проектних і освітніх закладів України за напрямами наукових досліджень кафедри;</li>
									<li>участь в організації та проведенні Всеукраїнських та міжнародних наукових конференцій;</li>
									<li>налагодження міжнародної співпраці та виконання спільних міжнародних наукових проектів, забезпечення участі працівників кафедри в роботі міжнародних конференцій.</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="blue-bg"></div>
		</div>

<!-- 		<div id="ekm-stud-proj" class="ekm-stud-proj">
			<div class="container">
				<h2 class="text-center">Проекти кафедри</h2>
				<div class="row">
					<div class="col-12">
						 <h3 class="text-bold text-center">Інформація з'явиться найближчим часом.</h3>
					</div>
				</div>
			</div>
		</div> -->

		<div id="partners" class="partners">
			<div class="container">
				<h2 class="text-white text-center">Партнери</h2>
				<div class="row">
					<div class="col-12 col-md-6">
						<div class="partner">
							<h4 class="text-white">ТОВ «Вікнарьофф Львів»</h4>
						</div>
					</div>
					<div class="col-12 col-md-6">
						<div class="partner">
							<h4 class="text-white">ТОВ «Зубра-Центр»</h4>
						</div>
					</div>
					<div class="col-12 col-md-6">
						<div class="partner">
							<h4 class="text-white">ТОВ «Іннеті Інновації»</h4>
						</div>
					</div>
					<div class="col-12 col-md-6">
						<div class="partner">
							<h4 class="text-white">ТОВ «Фінарт капітал інвест»</h4>
						</div>
					</div>
					<div class="col-12 col-md-6">
						<div class="partner">
							<h4 class="text-white">ПП «Е Ван Логістик Сервіс»</h4>
						</div>
					</div>
					<div class="col-12 col-md-6">
						<div class="partner">
							<h4 class="text-white">Львівська міська рада</h4>
						</div>
					</div>
					<div class="col-12 col-md-6">
						<div class="partner">
							<h4 class="text-white">Антимонопольний комітет України, Львівське обласне територіальне відділення</h4>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="practice-bases" class="practice-bases">
			<div class="container">
				<h2 class="text-blue text-center">Бази практик</h2>
				<ul>
					<li>ТОВ «Вікнарьофф Львів» </li>
					<li>ТОВ «Зубра-Центр»</li>
					<li>ТОВ «Іннеті Інновації»</li>
					<li>ТОВ "Альянс Маркет"</li>
					<li>ДП «Арена Львів»</li>
					<li>ТОВ «Фінарт капітал інвест»</li>
					<li>ТОВ «Гербор-холдінг»</li>
					<li>ТОВ «ПМ Бізнес Солюшн»</li>
					<li>ТОВ «Ольвія Гранд»</li>
					<li>ТзОВ «Самбірський молокозавод»</li>
					<li>ПП «Е Ван Логістик Сервіс»</li>
					<li>ТОВ «Галпак»</li>
					<li>Антимонопольний комітет України, Львівське обласне територіальне відділення</li>
					<li>ТОВ «Торгівельно-виробнича компанія «Львівхолод»</li>
					<li>ТзОВ «Леоні Ваерінг Системс УА ГмБХ</li>
					<li>ПП «ДЕФКОН»</li>
					<li>ТОВ «ГЕФЕСТ+»</li>
					<li>ПрАТ «Моршинський завод мінеральних вод «Оскар», Львівська обл., м. Моршин </li>
					<li>ТОВ «Холдинг емоцій «!FEST»</li>
				</ul>
			</div>
		</div>
	</section>

	<!-- FOOTER -->
	<footer id="footer" class="footer">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-12 col-md-6">
					<p class="text-white">
						<span class="text-bold text-white">Адреса: </span>вул. Горбачевського, 18, 32-й н.к., кім. 301, 408<br>
						<span class="text-bold text-white">Номер телефону: </span>(032) 258-24-86<br>
						<span class="text-bold text-white">E-mail: </span>EKM.dept@lpnu.ua<br>
					</p>
				</div>
				<div class="col-12 col-md-6">
					<div class="copyright">
						<p class="text-green">
							<i class="fa fa-copyright text-green" aria-hidden="true"></i>
							2018 Інститут підприємництва та перспективних технологій <br> НУ "Львівська політехніка"<br> Всі права захищено.
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

	<!-- Plugins scripts -->
	<script src="jparticle.jquery.min.js"></script>

	<!-- My scripts -->
	<script src="ekm.js"></script>
</body>
</html>