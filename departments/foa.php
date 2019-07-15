<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>IPPT - Department FOA</title>

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

	<section id="foa-department" class="foa-department">
		<div class="container">	
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="../index.php">Головна</a></li>
				<li class="breadcrumb-item"><a href="../about-us.php">Про інститут</a></li>
				<li class="breadcrumb-item"><a href="../about-us.php">Кафедри</a></li>
				<li class="breadcrumb-item"><a href="foa.php">Кафедра ФОА</a></li>
				<li class="breadcrumb-item active get-text">Про кафедру</li>
			</ol>

			<div id="foa-department-tabs">
				<div class="row">
					<div class="col-12 col-lg-3">
						<div class="foa-department-navbar">
							<ul class="nav nav-tabs" role="tablfoa">
								<li role="presentation"><a class="post-text active" href="#foa-base-info"  aria-controls="foa-base-info" role="tab" data-toggle="tab">Про кафедру</a></li>
								<li role="presentation"><a class="post-text" href="#foa-educational-programs" aria-controls="foa-educational-programs" role="tab" data-toggle="tab">Освітні програми</a></li>
								<li role="presentation"><a class="post-text" href="#foa-teachers" aria-controls="foa-teachers" role="tab" data-toggle="tab">Працівники кафедри</a></li>
								<li role="presentation"><a class="post-text" href="#foa-scientific-activity" aria-controls="foa-scientific-activity" role="tab" data-toggle="tab">Наукова діяльність</a></li>
								<li role="presentation"><a class="post-text" href="#foa-projects" aria-controls="foa-projects" role="tab" data-toggle="tab">Проекти кафедри</a></li>
								<li role="presentation"><a class="post-text" href="#foa-students-projects" aria-controls="foa-students-projects" role="tab" data-toggle="tab">Студентські проекти</a></li>
								<li role="presentation"><a class="post-text" href="#foa-student-practice-bases" aria-controls="foa-student-practice-bases" role="tab" data-toggle="tab">Бази практик студентів</a></li>
								<li role="presentation"><a class="post-text" href="#foa-partners" aria-controls="foa-partners" role="tab" data-toggle="tab">Партнери</a></li>
							</ul>
						</div>
					</div>
					<div class="col-12 col-lg-9">
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane fade in active show" id="foa-base-info">
								<h2>Про кафедру</h2>
								<div class="foa-base-info">
								   <p>
								    	<span class="text-bold">Завідувач кафедри:</span> <span class="text-italic">Гориславець Павло Анатолійович</span>
								    	<br>
								    	<span class="text-bold">Заступник з навчально-методичної роботи:</span> <span class="text-italic">к.е.н. Данилків Христина Петрівна</span>
								    	<br>
								    	<span class="text-bold">Заступник з наукової роботи:</span> <span class="text-italic">к.е.н., доц. Добош Назар Миколайович</span>
								    	<br>
								    	<span class="text-bold">Адреса:</span> <spann class="text-italic">вул. Горбачевського, 18, 32-й н.к., кім. 308</span>
								    	<br>
								    	<span class="text-bold">Телефон:</span> <spann class="text-italic">(032) 258-25-68</span>
								    	<br>
								    	<span class="text-bold">E-mail:</span> <spann class="text-italic">FOA.dept@lpnu.ua</span>
								    </p>
								</div>
								<hr style="margin-left: 0; width: 100%;">
								<div class="ekm-photo">
									<div class="img">
										<img src="../sources/img/department/foa/dep_foa.jpg" alt="foa-photo">
									</div>
								</div>
								<hr style="margin-left: 0; width: 100%;">
								<div class="foa-more-info">
									<p>Кафедра фінансів, обліку і аналізу утворена у 2016 році шляхом реорганізації на основі об’єднання двох кафедр – кафедри фінансів та кафедри обліку і аудиту. Кафедра фінансів була заснована у 2002 році, до розвитку кафедри докладені зусилля Кухаренко Італіни Кирилівни, Микитюк Наталії Олегівни, Бондарчук (Колісник) Марії Костянтинівни, які у різні роки очолювали кафедру. Кафедра обліку і аудиту була створена 20 березня 2001 року, до розвитку кафедри доклали зусилля Полякова Л.М., Акіншина О.В., Бец М.Т., Свірська О.Б., Гавран В.Я., які у різні роки очолювали кафедру.</p>
									<p>Кафедра фінансів, обліку і аналізу здійснює підготовку бакалаврів у галузі знань 07 «Управління та адміністрування» за спеціальностями 072 «Фінанси, банківська справа та страхування», 071 «Облік і оподаткування» за денною та заочною формами навчання, а також молодших спеціалістів за спеціальностями 5.03050801 «Фінанси і кредит», 5.03050901 «Облік і аудит».</p>
									<p>Фахівці, підготовлені за спеціальностями 072 «Фінанси, банківська справа та страхування», 071 «Облік і оподаткування» володіють комплексом знань в сфері державних і місцевих фінансів, банківської і страхової справи, грошового обігу, фінансового менеджменту, ринку цінних паперів, обліку і оподаткування.</p>
									<p>Підготовка фахівців має широкий міжгалузевий профіль, що дозволяє здійснювати професійну діяльність у різних сферах економіки і державного управління фінансами.</p>
									<p>Випускники можуть працювати у сфері грошового посередництва, фінансового лізингу; банківських послуг; ризикового страхування; страхування життя та заощаджень; недержавного пенсійного страхування; біржової діяльності; в допоміжній діяльності у сфері обліку, фінансів, банківської справи та страхування, а також започатковувати власний бізнес.</p>
									<p>Випускники кафедри є конкурентоспроможними на ринку праці, успішними в підприємницькій діяльності та на державній службі, обіймають високі посади керівників і провідних фахівців на підприємствах різних форм власності, у банківських установах, страхових компаніях та інших фінансових установах, в органах Державної фіскальної служби, Державної аудиторської служби України, Державної казначейської служби України.</p>
								</div>
							</div>

							<div role="tabpanel" class="tab-pane fade in" id="foa-educational-programs">
								<h2>Освітні програми</h2>
								<div class="about-us-info">
									<p class="text-bold">ОР "МАГІСТР"</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quisquam, nemo accusantium. Ea quidem recusandae, unde obcaecati ipsa optio molestias esse cum, amet libero vitae tempore voluptatibus odit? Nulla, soluta.</p>
								   <p class="text-bold">ОР "БАКАЛАВР"</p>
								   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum praesentium eos nihil saepe nostrum accusamus optio nulla amet facilis, iusto voluptates tempore dolor, delectus molestias, enim esse suscipit! Voluptatibus, iusto!</p>
								   <p class="text-bold">ОКР "МОЛОДШИЙ СПЕЦІАЛІСТ"</p>
								   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id odit officia eum voluptatum, totam facilis delectus saepe ad iste nemo voluptas pariatur atque earum voluptatibus, non tenetur veritatis? Sit, et.</p>
								</div>
							</div>

							<div role="tabpanel" class="tab-pane fade in" id="foa-teachers">
								<h2>Працівники кафедри</h2>
								<div class="foa-teachers-info">
								    <h4>
								   		<a href="#teacher" class="text-aqua"><span class="text-bold text-italic">Гориславець Павло Анатолійович</span></a>
								   		<span> - завідувач кафедри ФОА, к.е.н., доц.</span>
								   	</h4>
								    <h4>
								   		<a href="#teacher" class="text-aqua"><span class="text-bold text-italic">Лапішко Марія Львівна</span></a>
								   		<span> - професор, к.е.н., проф.</span>
								   	</h4>
								    <h4>
								   		<a href="#teacher" class="text-aqua"><span class="text-bold text-italic">Алєксєєв Ігор Валентинович</span></a>
								   		<span> - професор, д.е.н, проф.</span>
								   	</h4>
								    <h4>
								   		<a href="#teacher" class="text-aqua"><span class="text-bold text-italic">Бондарчук Марія Костянтинівна</span></a>
								   		<span> - професор, д.е.н, проф.</span>
								   	</h4>
								    <h4>
								   		<a href="#teacher" class="text-aqua"><span class="text-bold text-italic">Хома Ірина Борисівна</span></a>
								   		<span> - професор, д.е.н, проф.</span>
								   	</h4>
								</div>
							</div>

							<div role="tabpanel" class="tab-pane fade in" id="foa-scientific-activity">
								<h2>Наукова діяльність</h2>
								<div class="about-us-info">
								    <p class="text-bold">Наукові напрями кафедри:</p>
								    <ul>
								   		<li>«Розвиток фінансово-кредитних відносин в умовах глобалізаційних трансформацій». Керівник - к.е.н. доц. Гориславець П.А. Номер держреєстрації - 0114U005251. Результати виконання: теоретичні і практичні рекомендації відображені у наукових публікаціях викладачів кафедри, зокрема у монографії, 15 статтях у виданнях, що входять до наукометричних баз даних та закордонних виданнях.</li>
								   		<li>«Проблеми обліку, аналізу і аудиту в сучасних умовах господарювання». Керівник -к.е.н., доц. Гавран В.Я. Номер держреєстрації - 0114U001247. Результати виконання: опубліковано 8 статей у періодичних наукових фахових виданнях, з них 5 одноосібно і 2  у наукових виданнях, що входять до наукометричних баз даних.</li>
								    </ul>
								</div>
							</div>

							<div role="tabpanel" class="tab-pane fade in" id="foa-projects">
								<h2>Проекти кафедри</h2>
								<div class="about-us-info">
								   <p>Інформація з'явиться найближчим часом.</p>
								</div>
							</div>

							<div role="tabpanel" class="tab-pane fade in" id="foa-students-projects">
								<h2>Студентські проекти</h2>
								<div class="about-us-info">
								   <p>Інформація з'явиться найближчим часом.</p>
								</div>
							</div>

							<div role="tabpanel" class="tab-pane fade in" id="foa-student-practice-bases">
								<h2>Бази практик студентів</h2>
								<div class="foa-student-practice-bases-info">
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

							<div role="tabpanel" class="tab-pane fade in" id="foa-partners">
								<h2>Партнери</h2>
								<div class="about-us-info">
								    <ul>
										<li>ПАТ АСК «Дністер»</li>
										<li>ПрАТ СК «ПЗУ Україна»</li>
										<li>ПрАТ «АСК «ІНГО Україна»</li>
										<li>ПрАТ СК «Уніка»</li>
										<li>АТ «Ощадбанк»</li>
										<li>ПАТ КБ «Приватбанк»</li>
										<li>ПАТ АКБ «Львів»</li>
										<li>Львівська міська рада</li>
										<li>Рахункова палата України, територіальне управління по Волинській, Львівській, Рівненській та Тернопільській областях, м. Львів</li>
								    </ul>
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