<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>IPPT - Department EKM</title>

	<!-- Normalize css -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">

	<!-- Bootstrap styles -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="../sources/font-awesome/css/font-awesome.min.css">

	<!-- My styles -->
	<link rel="stylesheet" href="../sources/css/style.css">
	<link rel="stylesheet" href="../sources/css/animate.css">
	<link rel="stylesheet" href="../sources/css/responsive.css">
</head>
<body>
	<!-- Preloader -->
	<div id="preloader">
		<div class="preload-img">
			<img class="preload-logo" src="../sources/img/logo.png" alt="logo">
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
									<a class="nav-link" href="../index.php">Головна <span class="sr-only">(current)</span></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="../entrant.php">Вступнику</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="../student.php">Студенту</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="../graduate.php">Випускнику</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="../news-archive.php">Новини</a>
								</li>
							</ul>    
						</div>
					</div>
					<div class="col-12 col-lg-4">
						<div class="row justify-content-end">
							<form class="form-inline my-2 my-lg-0 search-input">
								<input class="form-control mr-sm-2" type="text" placeholder="Пошук..." aria-label="Search">
								<button class="btn btn-searching my-2 my-sm-0" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
							</form>
						</div>
					</div>
				</div>
			</nav>
		</div>
	</header>

	<section id="ekm-department" class="ekm-department">
		<div class="container">	
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="../index.php">Головна</a></li>
				<li class="breadcrumb-item"><a href="../about-us.php">Про інститут</a></li>
				<li class="breadcrumb-item"><a href="../about-us.php">Кафедри</a></li>
				<li class="breadcrumb-item"><a href="ekm.php">Кафедра ЕКМ</a></li>
				<li class="breadcrumb-item active get-text">Про кафедру</li>
			</ol>

			<div id="ekm-department-tabs">
				<div class="row">
					<div class="col-12 col-lg-3">
						<div class="ekm-department-navbar">
							<ul class="nav nav-tabs" role="tablekm">
								<li role="presentation"><a class="post-text active" href="#ekm-base-info"  aria-controls="ekm-base-info" role="tab" data-toggle="tab">Про кафедру</a></li>
								<li role="presentation"><a class="post-text" href="#ekm-teachers" aria-controls="ekm-teachers" role="tab" data-toggle="tab">Працівники кафедри</a></li>
								<li role="presentation"><a class="post-text" href="#ekm-scientific-activity" aria-controls="ekm-scientific-activity" role="tab" data-toggle="tab">Наукова діяльність</a></li>
								<li role="presentation"><a class="post-text" href="#ekm-educational-programs" aria-controls="ekm-educational-programs" role="tab" data-toggle="tab">Освітні програми</a></li>
								<li role="presentation"><a class="post-text" href="#ekm-partners" aria-controls="ekm-partners" role="tab" data-toggle="tab">Партнери</a></li>
								<li role="presentation"><a class="post-text" href="#ekm-student-practice-bases" aria-controls="ekm-student-practice-bases" role="tab" data-toggle="tab">Бази практики</a></li>
								<li role="presentation"><a class="post-text" href="#ekm-projects" aria-controls="ekm-projects" role="tab" data-toggle="tab">Проекти кафедри</a></li>
							</ul>
						</div>
					</div>
					<div class="col-12 col-lg-9">
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane fade in active show" id="ekm-base-info">
								<h2>Про кафедру</h2>
								<div class="ekm-base-info">
								    <p>
								    	<span class="text-bold">Завідувач кафедри:</span> <span class="text-italic">к.е.н., Лисяк Наталя Михайлівна</span>
								    	<br>
								    	<span class="text-bold">Заступник з навчально-методичної роботи:</span> <span class="text-italic">к.е.н. Лех Ірина Анатоліївна</span>
								    	<br>
								    	<span class="text-bold">Заступник з наукової роботи:</span> <span class="text-italic">к.е.н., доц. Олекюк Галина Василівна</span>
								    	<br>
								    	<span class="text-bold">Адреса:</span> <span class="text-italic">вул. Горбачевського, 18, 32-й н.к., кім. 301, 408</span>
								    	<br>
								    	<span class="text-bold">Телефон:</span> <span class="text-italic">(032) 258-24-86</span>
								    	<br>
								    	<span class="text-bold">E-mail:</span> <span class="text-italic">EKM.dept@lpnu.ua</span>
								    </p>
								</div>
								<hr style="margin-left: 0; width: 100%;">
								<div class="ekm-photo">
									<div class="img">
										<img src="../sources/img/department/ekm/dep_ekm.jpg" alt="ekm-photo">
									</div>
								</div>
								<hr style="margin-left: 0; width: 100%;">
								<div class="ekm-more-info">
									<p>Кафедра економіки і маркетингу (ЕКМ) створена у 2016 році шляхом об’єднання кафедр загальноекономічної підготовки та маркетингу, гуманітарної підготовки і кафедри міжнародної економіки.</p>
									<p>Кафедра здійснює підготовку студентів за спеціальністю 075 «Маркетинг» галузі знань 07 «Управління та адміністрування» денної та заочної форм навчання а також забезпечує викладання фундаментальних загальноекономічних та гуманітарних дисциплін для інших спеціальностей ліцензованих в інституті.</p>
									<p>При кафедрі діє циклова комісія для організації підготовки фахівців за освітньо-кваліфікаційним рівнем “молодший спеціаліст” спеціальності «Маркетинг».</p>
									<p>Робота колективу кафедри спрямована на підготовку конкурентоспроможних фахівців шляхом підвищення якості надання освітніх послуг, впровадження інноваційних методів навчання, органічного поєднання навчальної та наукової роботи, вдосконалення практичної складової підготовки студентів, формування освітніх програм згідно тенденцій та потреб ринку праці.</p> 
									<p>В основі навчальних програм фахових та вибіркових дисциплін - інноваційні авторські курси, які реалізують концепцію проблемно-орієнтованого навчання з метою розвитку творчого, критичного мислення у студентів, набуття ними відповідних фахових компетентностей.</p>
									<p>Для забезпечення всебічного розвитку студентів освітньо-наукова діяльність кафедри базується на:</p>
									<ul>
										<li>поєднанні теоретичних та прикладних аспектів навчання;</li>
										<li>організації практик у провідних установах, організаціях та підприємствах м.Львова., регіону а також підприємствах Польщі;</li>
										<li>впровадженні інтегрованих платформ для дистанційного викладання через систему Віртуального навчального середовища Національного університету «Львівська політехніка»;</li>
										<li>організації наукової роботи з молодими науковцями та студентами;</li>
										<li>проведенні змістовної виховної серед студентської молоді.</li>
									</ul>
									<p>Широкий міжгалузевий профіль підготовки фахівців має дозволить випускникам кафедри стати конкурентоспроможними на ринку праці та здійснювати професійну діяльність у різних сферах економіки, а саме бути успішними консультантами з маркетингу; фахівцями із стандартизації, сертифікації та якості; фахівцями-аналітиками з дослідження ринків; економістами з інтернет-маркетингу; менеджерами з транспортно-експедиторської діяльності; менеджерами (управителями) із комунікаційних технологій; менеджерами  з логістики; менеджерами  зі збуту; менеджерами із реклами.</p>

								</div>
							</div>

							<div role="tabpanel" class="tab-pane fade in" id="ekm-teachers">
								<h2>Працівники кафедри</h2>
								<div class="ekm-teachers-info">
								    <h4>
								   		<a href="#teacher" class="text-aqua"><span class="text-bold text-italic">Лисяк Наталя Михайлівна</span></a>
								   		<span> - завідувач кафедри, к.е.н., доц.</span>
								   	</h4>
								   	<h4>
								   		<a href="#teacher" class="text-aqua"><span class="text-bold text-italic">Олекюк Ганна Василівна</span></a>
								   		<span> - доцент кафедри, к.е.н.</span>
								   	</h4>
								   	<h4>
								   		<a href="#teacher" class="text-aqua"><span class="text-bold text-italic">Батьковець Наталя Олегівна</span></a>
								   		<span> - доцент кафедри, к.е.н., доц.</span>
								   	</h4>
								   	<h4>
								   		<a href="#teacher" class="text-aqua"><span class="text-bold text-italic">Цубов Леонід Володимирович</span></a>
								   		<span> - доцент кафедри, к.і.н., доц.</span>
								   	</h4>
								   	<h4>
								   		<a href="#teacher" class="text-aqua"><span class="text-bold text-italic">Лех Ірина Анатоліївна</span></a>
								   		<span> - ст.викладач кафедри, к.е.н.</span>
								   	</h4>
								</div>
							</div>

							<div role="tabpanel" class="tab-pane fade in" id="ekm-scientific-activity">
								<h2>Наукова діяльність</h2>
								<div class="ekm-scientific-activity-info">
								    <p>Наукова діяльність кафедри економіки і маркетингу зосереджена на перспективних напрямах наукових досліджень, а саме:</p>
								    <ul>
										<li>Урбаністика та просторова економіка <br>
									(к.е.н., доц. Лисяк Н.М., к.е.н. Олексюк Г.В., к.е.н. Попадинець Н.М., к.е.н.Пастернак О.І.);</li>
										<li>Проблеми формування ефективної моделі господарської системи в умовах євроінтеграційних процесів <br>
									(к.е.н., доц. Батьковець Н.О., к.е.н. Лех І.А., ст.викладач Колінко Н.О.);</li>
										<li>Дослідження теоретичних та прикладних аспектів соціально-гуманітарного розвитку України <br>
									(к.і.н., доц.Цубов Л.В., к.і.н., доц.Божко Н.М., ст.викладач Калінська О.П.).</li> 
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

							<div role="tabpanel" class="tab-pane fade in" id="ekm-educational-programs">
								<h2>Освітні програми</h2>
								<div class="ekm-educational-programs-info">
									<div class="ekm-program">
										<h3 class="text-bold">ОР "БАКАЛАВР"</h3>
									    <p>
										    <span class="text-bold">Повна назва кваліфікації:</span> Бакалавр з маркетингу  <br>
											<span class="text-bold">Термін навчання:</span> 4 роки <br>
											<span class="text-bold">Працевлаштування:</span> Робочі місця у сфері маркетингової діяльності, реклами, збуту: підприємства усіх форм власності, державні установи, консультування, формування та просування нових туристичних продуктів. <br>
											<a href="../sources/pdf/marketing.pdf" target="_blank" class="text-aqua">Профіль програми бакалавра зі спеціальності 075 «Маркетинг»</a>
										</p>
										<p>Студенти спеціальності 075 «Маркетинг» отримують теоретичні знання та практичні навички, а саме:</p>
										<ul>
											<li>вміння використовувати сучасні методи товарної, цінової, збутової та комунікаційної політик; </li>
											<li>глибокі знання та розуміння економічних законів, вміння аналізувати та раціонально мислити; </li>
											<li>знання основ ведення бізнесу на засадах маркетингу, в т.ч. основ інтернет-бізнесу; </li>
											<li>базові знання з правових, економічних і організаційних питань підприємницької діяльності; </li>
											<li>вміння розраховувати плановий бюджет маркетингової діяльності; </li>
											<li>базові знання з регулювання збутових, виробничих та товарних запасів; </li>
											<li>базові розуміння звітності з виконання планів матеріально-технічного забезпечення та збуту готової продукції підприємства; </li>
											<li>базові знання основ «бренду» та «брендингу». </li>
										</ul>

									</div>
									<div class="ekm-program">
										<h3 class="text-bold">ОР "МОЛОДШИЙ СПЕЦІАЛІСТ"</h3>
								    	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur dolore, earum ipsum rem. Necessitatibus, ab laborum officia dolor obcaecati cum, sequi numquam praesentium odit ipsa deserunt, error minima, culpa enim?</p>
									</div>
								</div>
							</div>

							<div role="tabpanel" class="tab-pane fade in" id="ekm-partners">
								<h2>Партнери</h2>
								<div class="ekm-partners-info">
								   <ul>
									   	<li>Львівська міська рада</li>
										<li>Львівська торгово-промислова палата</li>
										<li>Антимонопольний комітет України, Львівське обласне територіальне відділення </li>
										<li>ПП «Е Ван Логістик Сервіс»</li>
										<li>ТВК «Південний»</li>
										<li>ТОВ «Вікнарьофф Львів»</li>
										<li>ТОВ «Зубра-Центр»</li>
										<li>ТОВ «Іннеті Інновації»</li>
										<li>ТОВ «Фінарт капітал інвест»</li>
								   </ul>
								</div>
							</div>

							<div role="tabpanel" class="tab-pane fade in" id="ekm-student-practice-bases">
								<h2>Бази практики</h2>
								<div class="ekm-student-practice-bases-info">
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

							<div role="tabpanel" class="tab-pane fade in" id="ekm-projects">
								<h2>Проекти кафедри</h2>
								<div class="ekm-projects-info">
								   <p>Інформація з'явиться найближчим часом.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Footer -->
	<footer id="footer" class="footer">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-2">
					<div class="footer-logo img">
						<a href="index.php">
							<img src="../sources/img/logo.png" alt="footer-logo">
						</a>
					</div>
				</div>
				<div class="col-5">
					<div class="contact-us text-white">
						<p>Адрес: 9044, м. Львів, вул. Горбачевського, 18, 32-й н.к. </p>
						<p>Тел: (032) 258-20-27б, (032) 297-07-55 </p>
						<p>E-mail: IPPT.dept@lpnu.ua</p>
					</div>
				</div>
				<div class="col-5">
					<div class="copyright">
						<p class="text-aqua">
							<i class="fa fa-copyright" aria-hidden="true"></i>
							2018 Інститут Підприємництва та Перспективних Технологій.<br> Всі права застережено.<br>
							<a class="text-aqua" href="#our-genius">Розробка та підтримка здійснюється студентами ІППТ.</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Bootstrap -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

	<!-- My scripts -->
	<script src="../sources/js/script.js"></script>
</body>
</html>