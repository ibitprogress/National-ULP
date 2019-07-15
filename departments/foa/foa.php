<?php 
	include($_SERVER['DOCUMENT_ROOT'].'/ippt-website/config/config.php');

	$dep = R::getAll("SELECT * FROM department WHERE dp=3");

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>IPPT - Department FOA</title>

	<!-- Normalize css -->
	<link rel="stylesheet" href="../../sources/css/normalize.min.css">

	<!-- Bootstrap styles -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="../../sources/font-awesome/css/font-awesome.min.css">

	<!-- My styles -->
	<link rel="stylesheet" href="foa.css">
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
			<a class="navbar-brand text-blue nav-link-scroll" href="#bg-img-ist">Кафедра ФОА</a>
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
			    <!--   <li class="nav-item">
			        <a class="nav-link nav-link-scroll" href="#foa-stud-proj">Проекти</a>
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
	<div id="bg-img-foa" class="bg-img-foa">
		<h1 class="text-white">Кафедра фінансів, <br> обліку і аналізу</h1>
		<div class="transfotrm-diagonal-green"></div>
		<div class="transfotrm-diagonal-blue"></div>
	</div>

	<!-- FOA DEPARTMENT -->
	<section id="foa-department" class="foa-department">
		<div id="about-department" class="about-department">
			
			<div class="about-department-info-container">
				<div class="container">
					<div class="about-department-info">
						<h2 class="text-white text-center">Про нас</h2>
						<p class="text-white">Кафедра фінансів, обліку і аналізу утворена у 2016 році шляхом реорганізації на основі об’єднання двох кафедр – кафедри фінансів та кафедри обліку і аудиту. Кафедра фінансів була заснована у 2002 році, до розвитку кафедри докладені зусилля Кухаренко Італіни Кирилівни, Микитюк Наталії Олегівни, Бондарчук (Колісник) Марії Костянтинівни, які у різні роки очолювали кафедру. Кафедра обліку і аудиту була створена 20 березня 2001 року, до розвитку кафедри доклали зусилля Полякова Л.М., Акіншина О.В., Бец М.Т., Свірська О.Б., Гавран В.Я., які у різні роки очолювали кафедру.</p>
						<p class="text-white">Кафедра фінансів, обліку і аналізу здійснює підготовку бакалаврів у галузі знань 07 «Управління та адміністрування» за спеціальностями 072 «Фінанси, банківська справа та страхування», 071 «Облік і оподаткування» за денною та заочною формами навчання, а також молодших спеціалістів за спеціальностями 5.03050801 «Фінанси і кредит», 5.03050901 «Облік і аудит».</p>
						<p class="text-white">Фахівці, підготовлені за спеціальностями 072 «Фінанси, банківська справа та страхування», 071 «Облік і оподаткування» володіють комплексом знань в сфері державних і місцевих фінансів, банківської і страхової справи, грошового обігу, фінансового менеджменту, ринку цінних паперів, обліку і оподаткування.</p>
						<p class="text-white">Підготовка фахівців має широкий міжгалузевий профіль, що дозволяє здійснювати професійну діяльність у різних сферах економіки і державного управління фінансами.</p>
						<p class="text-white">Кафедра у 2018 році започатковує підготовку магістрів за спеціальністю 072 «Фінанси, банківська справа та страхування». Кафедра фінансів, обліку і аналізу виконує кадрові, технологічні та організаційні вимоги діяльності у сфері вищої освіти, зокрема, щодо підготовки фахівців за другим рівнем вищої освіти. Гарантом освітньої програми буде к.е.н., професор Лапішко Марія Львівна, штатними працівниками кафедри є 12 кандидатів економічних наук, тематика наукової роботи яких відповідає спеціальності 072 «Фінанси, банківська справа та страхування». Штатними працівниками кафедри є науково-педагогічні працівники, які є визнаними професіоналами з досвідом управлінської роботи за фахом (к.е.н., професор Лапішко М.Л., к.е.н., доц. Кльоба Л.Г., к.е.н., доц. Добош Н.М.). На умовах сумісництва до навчального процесу залучені 3 доктори економічних наук, професори.</p>
						<p class="text-white">Випускники можуть працювати у сфері грошового посередництва, фінансового лізингу; банківських послуг; ризикового страхування; страхування життя та заощаджень; недержавного пенсійного страхування; біржової діяльності; в допоміжній діяльності у сфері обліку, фінансів, банківської справи та страхування, а також започатковувати власний бізнес.</p>
						<p class="text-white">Випускники кафедри є конкурентоспроможними на ринку праці, успішними в підприємницькій діяльності та на державній службі, обіймають високі посади керівників і провідних фахівців на підприємствах різних форм власності, у банківських установах, страхових компаніях та інших фінансових установах, в органах Державної фіскальної служби, Державної аудиторської служби України, Державної казначейської служби України.</p>
					</div>
				</div>
			</div>
		</div>

		<div id="education" class="education">
			<div class="education-container">
				<div class="container">
					<h2 class="text-white text-center">Освітні програми</h2>
					<div class="row">
						<div class="col-12">
							<div class="all-education-info">
								<h3 class="text-center">ІНФОРМАЦІЯ ПРО КОМПЕТЕНТНОСТІ ТА ФАХОВЕ СПРЯМУВАННЯ СТУДЕНТІВ-ФІНАНСИСТІВ</h3>
								<p>Студенти спеціальності 072 «Фінанси, банківська права та страхування» отримують теоретичні знання та практичні навички з вирішення питань:</p>
								<ul>
									<li>управління процесами формування і використання державних фінансових ресурсів. Вони будуть здатні розробляти і втілювати стратегічну і тактичну державну фінансову політику в умовах ринкових відносин, розробляти варіанти управлінських рішень з питань фінансової діяльності на рівнях регіону, галузі, держави. Фахівці будуть затребувані для економічної, організаційно-управлінської, аналітичної, науково-дослідної роботи в органах державного управління, зокрема Рахункової палати, Міністерства фінансів, у територіальних фінансових органах, у контролюючих фінансових органах, у державних позабюджетних фондах;</li>
									<li>щодо функціонування фінансового ринку, а також формування практичних навичок у сфері страхової, фінансової, інвестиційної діяльності фінансових посередників;</li>
									<li>застосування сучасних методів фінансового управління, методів аналізу і вмінням прогнозувати фінансово-економічні ситуації. Фахівці зможуть працювати на державних, приватних, спільних підприємствах, у господарських товариствах різних видів економічної діяльності.</li>
								</ul>
								<p>Студенти здатні виконувати організаційно-управлінську та інформаційно-аналітичну роботу у таких сферах: грошово-кредитна система; фінансова діяльність підприємств та організацій; оподаткування підприємств; діяльність підприємств, установ, організацій на фінансовому ринку; організування банківської справи, банківські операції та їх проведення; біржові операції банків; валютне регулювання; оподаткування; організування моніторингу податкової служби; страхування, облік та аналіз діяльності страхових організацій; фінансовий менеджмент; організування та вдосконалення інформаційних систем на підприємствах, у комерційних банках, фінансових органах, органах податкової та митної служб.</p>
								<p>Первинною посадою для фахівців даного профілю є економіст, який може виконувати такі функції: розроблення проектів фінансового забезпечення інноваційних, інвестиційних та виробничих програм, бізнес-планів підприємства; підготовка фінансових та банківських документів із платежів та зобов’язань підприємств, фізичних осіб; складання фінансових звітів; аналіз фінансового стану.</p>
								<p class="text-italic text-bold">Переваги навчання за спеціальністю «Фінанси, банківська справа та страхування»:</p>
								<ul>
									<li>сучасна якісна вища освіта за універсальною спеціальністю в одному з найкращих ВНЗ України;</li>
									<li>забезпечуємо студентів гуртожитком;</li>
									<li>забезпечуємо практику та стажування, а кращим студентам – працевлаштування;
									є державне замовлення на підготовку фахівців;</li>
									<li>можливість участі у міжнародній академічній мобільності;</li>
									<li>навчання у «європейській столиці» - м. Львові, в особливому культурному, освітянському, молодіжному середовищі.</li>
								</ul>
							</div>
						</div>
						<div class="col-12">
							<div class="education-part">
								<div class="education-part-title">
									<h4 class="text-white text-center">ОР "БАКАЛАВР"</h4>
								</div>
								<div class="education-part-content">
									<p>
										<span class="text-bold">СПЕЦІАЛЬНІСТЬ:</span> 072 «Фінанси, банківська справа та страхування» <br>
										<span class="text-bold">ГАЛУЗЬ ЗНАНЬ:</span> 07 «Управління та адміністрування» <br>
										<span class="text-bold">Кваліфікація:</span> бакалавр з фінансів, банківської справи та страхування <br>
										<span class="text-bold">Тривалість навчання:</span> 4 роки – на базі повної загальної середньої освіти
											2 /  3 роки – на базі ОКР «Молодший спеціаліст» <br>
										<span class="text-bold">Освітня програма:</span> «Фінанси, банківська справа та страхування» <br>
										<span class="text-bold">Мета освітньої програми:</span> надання студентам знань щодо побудови фінансової системи та її ролі для розвитку економіки держави, умов забезпечення ефективності фінансових відносин, особливостей функціонування фінансового ринку, діяльності фінансових інституцій, методів формування і використання фінансових ресурсів на макро- та мікрорівнях, формування вмінь та практичних навичок застосування сучасних інструментів фінансового управління у сферах оподаткування, банківської, страхової, фінансово-інвестиційної діяльності підприємств та інших суб’єктів господарювання, регулювання фінансових ризиків, оптимізації міжбюджетних відносин та підготувати студентів для подальшого працевлаштування за обраною спеціальністю. <br>
										<a href="../../sources/pdf/ОПП-БАКАЛАВР-072.pdf" class="text-green">Читати більше</a>
									</p>
								</div>
							</div>
						</div>
						<div class="col-12">
							<div class="education-part">
								<div class="education-part-title">
									<h4 class="text-white text-center">ОР "МАГІСТР"</h4>
								</div>
								<div class="education-part-content">
									<p>
										<span class="text-bold">СПЕЦІАЛЬНІСТЬ:</span> 072 «Фінанси, банківська справа та страхування» <br>
										<span class="text-bold">ГАЛУЗЬ ЗНАНЬ:</span> 07 «Управління та адміністрування» <br>
										<span class="text-bold">Кваліфікація:</span> магістр з фінансів, банківської справи та страхування <br>
										<span class="text-bold">Тривалість навчання:</span> 1,4 роки – на базі ОР «Бакалавр» <br>
										<span class="text-bold">Освітня програма:</span> «Фінанси, банківська справа та страхування» <br>
										<span class="text-bold">Мета освітньої програми:</span> Формування програмних (загальних та професійних) компетентностей, передових теоретичних та методологічних знань, розуміння законодавчої бази, професійних вмінь та навичок, що дозволять студентам спеціальності 072 «Фінанси, банківська справа та страхування» вирішувати спеціалізовані задачі та практичні проблеми у сфері управління фінансами територіальних громад. <br>
										Освітньо-професійна програма базується на загальновідомих положеннях та результатах сучасних наукових досліджень з фінансів, банківської справи, страхування та орієнтує на актуальні спеціалізації, в рамках яких можлива подальша професійна та наукова кар’єра: фінансовий менеджер, фінансовий аналітик, фінансовий консультант, управлінець у сфері місцевих фінансів, управлінець у сфері інвестування та просторового розвитку.<br>
										Освітньо-професійна програма має дві практичні лінії – фінанси територіальних громад та управління фінансовими послугами. Обсяг освітньо-професійної програми 90 кредитів ЄКТС, термін навчання 1,5 роки. До розробки долучилися наукові працівники, докторанти державних установ «Інститут регіональних досліджень ім. М. Долішнього» та «Інститут економіки та прогнозування» НАН України, які беруть участь у підготовці та реалізації програми децентралізації влади у Львівській області. <br>
										<a href="../../sources/pdf/ОПП-ПРОФІЛЬ-МАГІСТР-072_.pdf" class="text-green">Читати більше</a>
										</p>
								</div>
							</div>
						</div>
						<div class="col-12">
							<div class="education-part">
								<div class="education-part-title">
									<h4 class="text-white text-center">ОКР "МОЛОДШИЙ СПЕЦІАЛІСТ"</h4>
								</div>
								<div class="education-part-content">
									<p>
										<span class="text-bold">СПЕЦІАЛЬНІСТЬ:</span> 072 «Фінанси, банківська справа та страхування» <br>
										<span class="text-bold">ГАЛУЗЬ ЗНАНЬ:</span> 07 «Управління та адміністрування» <br>
										<span class="text-bold">Кваліфікація:</span> молодший спеціаліст з фінансів, банківської справи та страхування <br>
										<span class="text-bold">Тривалість навчання:</span> 3 роки – на основі базової загальної середньої освіти <br>
										<span class="text-bold">Освітня програма:</span> «Фінанси, банківська справа та страхування» <br>
										<span class="text-bold">Мета освітньої програми:</span> надання студентам знань щодо економічної системи держави, побудови фінансової системи, формування практичних навичок для роботи на первинних посадах у фінансових підрозділах підприємств, організацій, установ, органах державної влади та управління, у фінансових установах. <br>
										<a href="../../sources/pdf/ОПП МОЛОДШИЙ СПЕЦІАЛІСТ 072.pdf" class="text-green">Читати більше</a>
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
								<h4 class="text-center">Наукові напрями кафедри</h4>
								<hr>
								<ul>
								   	<li>«Розвиток фінансово-кредитних відносин в умовах глобалізаційних трансформацій». Керівник - к.е.н. доц. Гориславець П.А. Номер держреєстрації - 0114U005251. Результати виконання: теоретичні і практичні рекомендації відображені у наукових публікаціях викладачів кафедри, зокрема у монографії, 15 статтях у виданнях, що входять до наукометричних баз даних та закордонних виданнях.</li>
								   	<li>«Проблеми обліку, аналізу і аудиту в сучасних умовах господарювання». Керівник -к.е.н., доц. Гавран В.Я. Номер держреєстрації - 0114U001247. Результати виконання: опубліковано 8 статей у періодичних наукових фахових виданнях, з них 5 одноосібно і 2  у наукових виданнях, що входять до наукометричних баз даних.</li>
								</ul>
								 <a href="#science-lp" class="text-green">Публікації науково-педагогічних працівників кафедри</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="blue-bg"></div>
		</div>

<!-- 		<div id="foa-stud-proj" class="foa-stud-proj">
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
											<h3 class="text-white">Зустріч з випускниками Дрогобич, 2018</h3>
											<!-- <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis cum mollitia fuga ut atque dolorum.</p> -->
										<!-- </div>
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
									<div class="col-12 col-md-7">
										<div class="proj-info">
											<h3 class="text-white">Наукові фестини та брейн-ринг, 2018</h3>
											<!-- <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis voluptate reiciendis adipisci architecto nisi dolore!</p> -->
								<!-- 		</div>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="more-proj">
					<a href="projects.php" class="btn btn-blue">Переглянути усі</a>
				</div>
			</div>
		</div>  -->

		<div id="partners" class="partners">
			<div class="container">
				<h2 class="text-white text-center">Партнери</h2>
				<div class="row">
					<div class="col-12 col-md-6">
						<div class="partner">
							<h4 class="text-white">ПАТ АСК «Дністер»</h4>
						</div>
					</div>
					<div class="col-12 col-md-6">
						<div class="partner">
							<h4 class="text-white">ПрАТ СК «ПЗУ Україна»</h4>
						</div>
					</div>
					<div class="col-12 col-md-6">
						<div class="partner">
							<h4 class="text-white">ПрАТ «АСК «ІНГО Україна»</h4>
						</div>
					</div>
					<div class="col-12 col-md-6">
						<div class="partner">
							<h4 class="text-white">ПрАТ СК «Уніка»</h4>
						</div>
					</div>
					<div class="col-12 col-md-6">
						<div class="partner">
							<h4 class="text-white">АТ «Ощадбанк»</h4>
						</div>
					</div>
					<div class="col-12 col-md-6">
						<div class="partner">
							<h4 class="text-white">ПАТ КБ «Приватбанк»</h4>
						</div>
					</div>
					<div class="col-12 col-md-6">
						<div class="partner">
							<h4 class="text-white">ПАТ АКБ «Львів»</h4>
						</div>
					</div>
					<div class="col-12 col-md-6">
						<div class="partner">
							<h4 class="text-white">Львівська міська рада</h4>
						</div>
					</div>
					<div class="col-12 col-md-6">
						<div class="partner">
							<h4 class="text-white">Рахункова палата України, територіальне управління по Волинській, Львівській, Рівненській та Тернопільській областях, м. Львів</h4>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="practice-bases" class="practice-bases">
			<div class="container">
				<h2 class="text-blue text-center">Бази практик</h2>
				<ul>
					<li>АБ «Укргазбанк»</li>
					<li>ПАТ АКБ «ТАС»</li>
					<li>ПАТ КБ «Приватбанк»</li>
					<li>ПАТ «Кредобанк»</li>
					<li>ПАТ АКБ «Львів»</li>
					<li>ПАТ «ПУМБ»</li>
					<li>АТ «Ощадбанк»</li>
					<li>АТ «ОТП Банк»</li>
					<li>ПАТ «Мегабанк»</li>
					<li>ПАТ «Укрсоцбанк»</li>
					<li>ПрАТ «УСК «КНЯЖА ВІЄННА ІНШУРАНС ГРУП»</li>
					<li>ПрАТ «АСК «ІНГО Україна»</li>
					<li>ПрАТ СК «Брокбізнес»</li>
					<li>ПрАТ СК «ПЗУ Україна»</li>
					<li>ПАТ СК «Дністер»</li>
					<li>ПрАТ СК «Уніка»</li>
					<li>АТ СК «АХА Страхування»</li>
					<li>Долинська районна державна адміністрація</li></li>
					<li>Львівська міська рада</li>
					<li>Рахункова палата України, територіальне управління по Волинській, Львівській, Рівненській та Тернопільській областях, м. Львів</li>
					<li>ПАТ «Львівський інструментальний завод»</li>
					<li>ПАТ «Концерн Галнафтогаз»</li>
					<li>ПАТ «Кохавинська паперова фабрика»</li>
					<li>ПрАТ «Компанія Ензим»</li>
					<li>ТзОВ Львівське АТП – 14631</li>
					<li>ДП «Львівський облавтодор»</li>
					<li>НГВУ «Бориславнафтогаз» ПАТ «Укрнафта»</li>
					<li>НГВУ «Долинанафтогаз» ПАТ «Укрнафта»</li>
					<li>ПАТ «Концерн-Електрон»</li>
					<li>ПАТ «Мультиплекс-Холдинг»</li>
					<li>ПАТ «Укрзалізниця» РФ «Львівська залізниця» ВП «Моторвагонне депо Львів»</li>
					<li>ПАТ «Львівський холодокомбінат»</li>
					<li>ПрАТ «Концерн Хлібпром»</li>
					<li>ПрАТ «Львівський електроламповий завод «Іскра»</li>
					<li>Державне підприємство «Боринське лісове господарство»</li>
					<li>ДП «Рава – Руське лісове господарство»</li>
					<li>Корпорація будівельних підприємств «Карпатбуд»</li>
					<li>ПАТ «Галичфарм»</li>
					<li>ПАТ «Коломийське заводоуправління будівельних матеріалів»</li>
					<li>ПАТ «Львівська кондитерська фабрика «СВІТОЧ»</li>
					<li>ТОВ «Фокстрот»</li>
					<li>АТ «ОТП Банк»</li>
					<li>ЛМКП «Львівтеплоенерго»</li>
					<li>ПАТ «Укрпошта»</li>
					<li>ДП «Турківське лісове господарство»</li>
					<li>КП «Управління водопровідно-каналізаційного господарства»</li>
					<li>ПАТ «Бібльос»</li>
					<li>ПАТ «Карлсберг Україна»</li>
					<li>ПАТ «Галичфарм»</li>
					<li>ПАТ «Львівгаз»</li>
					<li>ТОВ «Корпорація Альянс Сервіс»</li>
					<li>ТОВ «Т.В.Д»</li>
					<li>Філія ТОВ «Нестле Україна «Нестле Бізнес Сервіс в Європі»</li>
					<li>ТОВ «Галицький пекар»</li>
					<li>Фермерське господарство «Ольвія»</li>
					<li>ТОВ «Максимум-капітал»</li>
					<li>ТОВ «МАРЕКС.ЮЕЙ»</li>
					<li>ЦКС «Анісія»</li>
				</ul>
			</div>
		</div>
	</section>

	<!-- FOOTER -->
	<footer id="footer" class="footer">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-6">
					<p class="text-white">
						<span class="text-bold text-white">Адреса: </span>вул. Горбачевського, 18, 32-й н.к., кім. 308<br>
						<span class="text-bold text-white">Номер телефону: </span>(032) 258-25-68<br>
						<span class="text-bold text-white">E-mail: </span>FOA.dept@lpnu.ua<br>
					</p>
				</div>
				<div class="col-12 col-md-6">
					<div class="copyright">
						<p class="text-green">
							<i class="fa fa-copyright text-green" aria-hidden="true"></i>
							2018 Інститут підприємництва та перспективних технологій <br> НУ "Львівська політехніка"<br>
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
	<script src="foa.js"></script>
</body>
</html>