<!DOCTYPE html>
<html lang="en" class="entrant-height">
<head>
	<meta charset="UTF-8">
	<title>IPPT - Entrant's page</title>
	<link rel="icon" href="/logo.png" type="image/x-icon">
	<link rel="shortcut icon" href="sources/img/logo.png" type="image/x-icon">
	<!-- Normalize css -->
	<link rel="stylesheet" href="sources/css/normalize.min.css">

	<!-- Bootstrap styles -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="sources/font-awesome/css/font-awesome.min.css">

	<!-- Fancybox -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.25/jquery.fancybox.min.css">

	<!-- My styles -->
	<link rel="stylesheet" href="sources/css/style.min.css">
</head>
<body class="entrant-height">
	<!-- Preloader -->
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
								<li class="nav-item active">
									<a class="nav-link" href="entrant.php">Вступнику</a>
								</li>
								<li class="nav-item">
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

	<section id="entrant-page" class="entrant-page">
		<div class="container">
			<div id="entrant-tabs">
				<div class="row">
					<div class="col-12 col-lg-3">
						<div class="entrant-navbar">
							<ul class="nav nav-tabs entrant-tabs" role="tablist">
								<li role="presentation"><a class="post-text active" href="#entrant-main"  aria-controls="entrant-main" role="tab" data-toggle="tab">Загальна інформація</a></li>

								<li role="presentation"><a class="post-text" href="#specialties"  aria-controls="specialties" role="tab" data-toggle="tab">Спеціальності</a></li>

								<li role="presentation"><a class="post-text" href="#conditions-of-entr"  aria-controls="conditions-of-entr" role="tab" data-toggle="tab">Умови вступу</a></li>

								<li role="presentation"><a class="post-text" href="#license"  aria-controls="license" role="tab" data-toggle="tab">Ліцензія на надання освітніх послуг</a></li>

								<li role="presentation"><a class="post-text" href="#cost-of-education" aria-controls="cost-of-education" role="tab" data-toggle="tab">Вартість навчання</a></li>

								<li role="presentation"><a class="post-text" href="#selection-committee"  aria-controls="selection-committee" role="tab" data-toggle="tab">Розклад роботи Приймальної (відбіркової) комісії</a></li>

								<li role="presentation"><a class="post-text" href="#preparing-for-introduction"  aria-controls="preparing-for-introduction" role="tab" data-toggle="tab">Підготовка до вступу</a></li>

								<li role="presentation"><a class="post-text" href="#faq"  aria-controls="faq" role="tab" data-toggle="tab">Запитання/Відповіді</a></li>
							</ul>
						</div>
					</div>

					<div class="col-12 col-lg-9">
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane fade in active show" id="entrant-main">
								<h2>Загальна інформація</h2>
								<div class="entrant-info">
								    <p class="text-bold">Інститут здійснює підготовку фахівців на денній та заочній формах навчання за освітніми рівнями:</p> 
								    <ul>
								    	<li> <span class="text-bold text-italic text-green">молодший спеціаліст</span> (спеціальності “Комп’ютерні науки”, “Облік і оподаткування”, "Фінанси, банківська справа та страхування" і "Маркетинг");</li>
								    	<li> <span class="text-bold text-italic text-green">бакалавр</span> (спеціальності  “Комп’ютерні науки”,  “Облік і оподаткування”,  “Маркетинг”  та  “Фінанси, банківська справа та страхування”);</li>
								    	<li> <span class="text-bold text-italic text-green">магістр</span> (спеціальність "Комп’ютерні науки" (спеціалізація - ”Комп’ютерний еколого-економічний моніторинг”)).</li>
								    </ul>
								    <p>Запрошуємо випускників середніх загальноосвітніх навчальних закладів та вищих навчальних закладів І та ІІ рівнів акредитації здобути освіту в навчально-науковому Інституті підприємництва та перспективних технологій  Національного університету "Львівська політехніка", яка відповідає вимогам сьогодення!</p>

								    <h4 class="text-bold text-center">ЧЕРЕЗ НАВЧАННЯ ДО УСПІХУ !</h4>
								</div>
							</div>

							<div role="tabpanel" class="tab-pane fade in" id="specialties">
								<h2>Спеціальності</h2>
								<h3>Перелік освітніх ступенів та спеціальностей, за якими оголошується прийом на навчання у 2018 році, конкурсні предмети, вступні іспити</h3>

								<table class="table table-bordered table-hover"> <!--  table-responsive -->
									<thead class="thead-green">
									    <tr>
									      <th scope="col">Спеціальність</th>
									      <th scope="col">Спеціалізація <br> (освітня програма)</th>
									      <th scope="col">Конкурсні предмети <br> (вступні іспити)</th>
									    </tr>
									</thead>
									<tbody>
									  	<tr>
									  		<th scope="row" colspan="3">Бакалавр</th>
									  	</tr>
									    <tr>
									      <td scope="row">Комп’ютерні науки</td>
									      <td>Комп’ютерні науки</td>
									      <td>Українська мова та література, математика, <br> фізика (або історія України), іноземна мова</td>
									    </tr>
									    <tr>
									      <td scope="row">Фінанси, банківська справа та страхування</td>
									      <td>Фінанси, банківська справа та страхування</td>
									      <td>Українська мова та література, математика, <br> географія (або фізика), іноземна мова</td>
									    </tr>
									    <tr>
									      <td scope="row">Маркетинг</td>
									      <td>Маркетинг</td>
									      <td>Українська мова та література, математика, <br> географія (або фізика), іноземна мова</td>
									    </tr>
									      <td scope="row">Облік і оподаткування</td>
									      <td>Облік і оподаткування</td>
									      <td>Українська мова та література, математика, <br> географія (або фізика), іноземна мова</td>
									    </tr>

									  	<tr>
									  		<th scope="row" colspan="3">Магістр</th>
									  	</tr>
									    </tr>
									      <td scope="row">Комп’ютерні науки</td>
									      <td>Комп'ютерний еколого-економічний моніторинг</td>
									      <td>Фаховий іспит; іноземна мова</td>
									    </tr>

									  	<tr>
									  		<th scope="row" colspan="3">Молодший спеціаліст</th>
									  	</tr>
									    </tr>
									      <td scope="row">Комп’ютерні науки</td>
									      <td>Комп’ютерні науки</td>
									      <td>Українська мова, математика</td>
									    </tr>
									    </tr>
									      <td scope="row">Фінанси, банківська справа та страхування</td>
									      <td>Фінанси, банківська справа та страхування</td>
									      <td>Українська мова, математика</td>
									    </tr>
									    </tr>
									      <td scope="row">Маркетинг</td>
									      <td>Маркетинг</td>
									      <td>Українська мова, математика</td>
									    </tr>
									    </tr>
									      <td scope="row">Облік і оподаткування</td>
									      <td>Облік і оподаткування</td>
									      <td>Українська мова, математика</td>
									    </tr>
									</tbody>
								</table>

								<p><span class="text-bold">Обов'язкова</span> наявність <span class="text-bold">сертифікатів</span>. Програми вступних випробувань із загальноосвітніх предметів відповідають програмам середніх загальноосвітніх навчальних закладів.</p>
							</div>

							<div role="tabpanel" class="tab-pane fade in"  id="conditions-of-entr">
								<h2>Умови вступу</h2>
								<ul>
									<li><a target="_blank" href="http://lp.edu.ua/pryymalna-komisiya/pravyla-pryyomu" class="text-green">Правила прийому в 2018 році (бакалавр та магістр)</a></li>
									<li>
										<a target="_blank" href="http://lp.edu.ua/pryymalna-komisiya/pravyla-pryyomu" class="text-green">Правила прийому в 2018 році (молодший спеціаліст)</a>
										<ul>
											<li><a target="_blank" href="sources/pdf/programa_z_ukr_mova_na_osnovi_9_klasu_2018.pdf" class="text-green">Програма вступного випробування з української мови</a></li>
											<li><a target="_blank" href="sources/pdf/programa_z_matematiki_na_osnovi_9_klasu__2018.pdf" class="text-green">Програма вступного випробування з математики</a></li>
										</ul>
									</li>
									<li><a target="_blank" href="http://lp.edu.ua/magistry" class="text-green">Умови вступу для магістрів</a></li>
									<li><a target="_blank" href="http://lp.edu.ua/bakalavram" class="text-green">Умови вступу для бакалаврів</a></li>
									<li><a target="_blank" href="http://lp.edu.ua/sites/default/files/attach/2016/172/pravyla_mc_ippt18222.pdf" class="text-green">Умови вступу для молодших спеціалістів</a></li>
								</ul>

								<p class="text-bold">Додатки до Правил прийому:</p>
								<p>ОС «Бакалавр», «Магістр»</p>
								<ul>
									<li><a target="_blank" href="http://www.lp.edu.ua/sites/default/files/attach/2016/172/dodatok_1_ippt.pdf" class="text-green">Додаток 1. (ІППТ) Перелік освітніх ступенів та спеціальностей, за якими оголошується прийом на навчання, ліцензовані обсяги, терміни</a></li>
									<li><a target="_blank" href="http://www.lp.edu.ua/sites/default/files/attach/2016/172/dodatok_3_ippt.pdf" class="text-green">Додаток 3. (ІППТ) Перелік спеціальностей та вступних випробувань для прийому на навчання осіб, які здобули ОКР молодший  спеціаліст</a></li>
									<li><a target="_blank" href="http://www.lp.edu.ua/sites/default/files/attach/2016/172/dodatok_4_ippt.pdf" class="text-green">Додаток 4. (ІППТ) Перелік спеціальностей, вступних випробувань для прийому на навчання для здобуття освітнього ступеню магістра</a></li>
									<li><a target="_blank" href="http://www.lp.edu.ua/sites/default/files/attach/2016/172/dodatok_5_ippt_2018.pdf" class="text-green">Додаток 5. (ІППТ) Перелік конкурсних предметів у сертифікаті Українського центру оцінювання якості освіти</a></li>
								</ul>
								<p>ОКР «Молодший спеціаліст»</p>
								<ul>
									<li><a target="_blank" href="sources/pdf/Dodatok_1_MC_IPPT_26-06-18.pdf" class="text-green">Додаток 1. (ІППТ) Перелік освітніх ступенів та спеціальностей, за якими оголошується прийом на навчання, ліцензовані обсяги, терміни</a></li>
									<li><a target="_blank" href="http://www.lp.edu.ua/sites/default/files/attach/2016/172/dodatok_5_ippt_2018.pdf" class="text-green">Додаток 5. (ІППТ) Перелік конкурсних предметів </a></li>
								</ul>							

								<p class="text-bold">Для подачі заяви необхідно мати:</p>
								<ul>
								    <li class="text-italic">копію документа державного зразка про раніше здобутий освітній (освітньо-кваліфікаційний) рівень, на основі якого здійснюється вступ, і додаток до нього;</li>
								    <li class="text-italic">копію сертифіката відповідного рівня зовнішнього незалежного оцінювання (для вступників на основі повної загальної середньої освіти);</li>
								    <li class="text-italic">копію документа, що посвідчує особу та громадянство;</li>
								    <li class="text-italic">копію довідки ДПА про присвоєння ідентифікаційного номера;</li>
								    <li class="text-italic">чотири кольорові фотокартки розміром 3х4 см.</li>
								</ul>
							</div>

							<div role="tabpanel" class="tab-pane fade in"  id="license">
								<h2>Ліцензія на надання освітніх послуг</h2>
								<p>У приєднаних файлах:</p>
								<ul>
									<li><a target="_blank" href="http://lp.edu.ua/pryymalna-komisiya/licenziya-na-nadannya-osvitnih-poslug" class="text-green">Відомості про здійснення освітньої діяльності у сфері вищої освіти. <br> Національний університет «Львівська політехніка».</a></li>
									<li><a target="_blank" href="sources/pdf/Витяг Ліцензія на надання освітніх послуг ІППТ.pdf" class="text-green">Витяг з Ліцензії на надання освітніх послуг. <br> Інститут підприємництва та перспективних технологій Національного університету «Львівська політехніка».</a></li>
								</ul>
							</div>

							<div role="tabpanel" class="tab-pane fade in"  id="cost-of-education">
								<h2>Вартість навчання</h2>
								<ul>
									<li><a target="_blank" href="sources/pdf/ВАРТІСТЬ НАВЧАННЯ_МС_2018_26-06-18.pdf" class="text-green">Вартість підготовки фахівців ОКР «Молодший спеціаліст» для студентів, зарахованих на навчання в 2018 році.</a></li>
									<li><a target="_blank" href="sources/pdf/ІППТ_Бакалаври_магістри_денна_2018_26-06-18.pdf" class="text-green">Вартість підготовки фахівців ОС «Бакалавр», «Магістр» для студентів, зарахованих на навчання в 2018 році (Денна форма навчання).</a></li>
									<li><a target="_blank" href="sources/pdf/ІППТ_Бакалаври_магістри_заочна_2018_26-06-18.pdf" class="text-green">Вартість підготовки фахівців ОС «Бакалавр», «Магістр» для студентів, зарахованих на навчання в 2018 році (Заочна форма навчання).</a></li>
								</ul>
							</div>

							<div role="tabpanel" class="tab-pane fade in"  id="selection-committee">
								<h2>Розклад роботи Приймальної (відбіркової) комісії</h2>
								<table class="table table-bordered table-hover"> <!--  table-responsive -->
									<thead class="thead-green">
									    <tr>
									      <th scope="col">ТЕРМІН</th>
									      <th scope="col">ДНІ ТИЖНЯ</th>
									      <th scope="col">ГОДИНИ</th>
									    </tr>
									</thead>
									<tbody>
									    <tr>
									      <td scope="row">02 липня – 10 серпня <br> 2018 року</td>
									      <td>Понеділок – п’ятниця <br> Субота <br> Неділя</td>
									      <td>9:00 - 13:00; 14:00 - 18:00 <br> 9:00 - 13:00 <br> Вихідний</td>
									    </tr>
									    <tr>
									      <td scope="row">11 серпня – 31 серпня <br> 2018 року</td>
									      <td>Понеділок – п’ятниця <br> Субота <br> Неділя</td>
									      <td>9:00 - 13:00; 14:00 - 17:00 <br> Вихідний <br> Вихідний</td>
									    </tr>
									</tbody>
								</table>
							</div>

							<div role="tabpanel" class="tab-pane fade in"  id="preparing-for-introduction">
								<h2>Підготовка до вступу</h2>
								<p>Зразки тестових завдань для вступу на ОКР «Молодший спеціаліст»:</p>
								<ul>
									<li><a target="_blank" href="sources/pdf/variant_1.pdf" class="text-green">Варіант 1</a></li>
									<li><a target="_blank" href="sources/pdf/variant_2.pdf" class="text-green">Варіант 2</a></li>
								</ul>
							</div>

							<div role="tabpanel" class="tab-pane fade in"  id="faq">
								<h2>Запитання/Відповіді</h2>
								<p><a target="_blank" href="https://mon.gov.ua/ua/osvita/visha-osvita/vstupna-kampaniya-2018/poshirenni-zapitannya-vidpovidi-pro-vstup-2018" class="text-green">Поширені запитання – відповіді про вступ 2018</a></p>
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

	<!-- Fancybox -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.25/jquery.fancybox.min.js"></script>

	<!-- My scripts -->
	<script src="sources/js/script.min.js"></script>
</body>
</html>