<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>IPPT - About us page</title>
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
							    <li class="nav-item active">
									<a class="nav-link" href="index.php">Головна <span class="sr-only">(current)</span></a>
								</li>
								<li class="nav-item">
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

	<section id="about-us" class="about-us">
		<div class="container">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.php">Головна</a></li>
				<li class="breadcrumb-item"><a href="about-us.php">Про інститут</a></li>
				<li class="breadcrumb-item active get-text">Про інститут</li>
			</ol>

			<div id="about-us-tabs">
				<div class="row">
					<div class="col-12 col-lg-3">
						<div class="about-us-navbar">
							<ul class="nav nav-tabs about-us-tabs" role="tablist">
								<li role="presentation"><a class="post-text active" href="#aboutUs"  aria-controls="aboutUs" role="tab" data-toggle="tab">Про інститут</a></li>
								<li role="presentation"><a class="post-text" href="#leadership" aria-controls="leadership" role="tab" data-toggle="tab">Керівництво</a></li>
								<li role="presentation"><a class="post-text" href="#theDepartment" aria-controls="theDepartment" role="tab" data-toggle="tab">Кафедри</a></li>
								<li role="presentation"><a class="post-text" href="#deanery" aria-controls="deanery" role="tab" data-toggle="tab">Деканат базової та повної вищої освіти</a></li>
								<li role="presentation"><a class="post-text" href="#college" aria-controls="college" role="tab" data-toggle="tab">Коледж інноваційних технологій</a></li>
								<li role="presentation"><a class="post-text" href="#educationalMethodicalDepartment" aria-controls="educationalMethodicalDepartment" role="tab" data-toggle="tab">Навчально-методичний відділ</a></li>
								<li role="presentation"><a class="post-text" href="#affiliateDrohobych" aria-controls="affiliateDrohobych" role="tab" data-toggle="tab">Філія у м.Дрогобич</a></li>
								<li role="presentation"><a class="post-text" href="#researchSector" aria-controls="researchSector" role="tab" data-toggle="tab">Науково-дослідний сектор </a></li>
								<li role="presentation"><a class="post-text" href="#library" aria-controls="library" role="tab" data-toggle="tab">Науково-технічна бібліотека</a></li>
								<li role="presentation"><a class="post-text" href="#contacts" aria-controls="contacts" role="tab" data-toggle="tab">Контакти</a></li>
							</ul>
						</div>
					</div>

					<div class="col-12 col-lg-9">
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane fade in active show" id="aboutUs">
								<h2>Про інститут</h2>
								<div class="about-us-info">
								    <p>Навчально-науковий Інститут підприємництва та перспективних технологій (далі - Інститут) створено наказом Львівської політехніки від 28.05.2010 р. № 83-10.</p>
								    <p>Інституту організаційно підпорядковані філії Національного університету “Львівська політехніка' – у м. Дрогобич (82100, м. Дрогобич, вул. Січових Стрільців, 2).</p>
								    <p>У структуру інституту входить три випускових кафедри:</p>
								    <ul>
								    	<li>Кафедра інформаційних систем та технологій</li>
								    	<li>Кафедра економіки і маркетингу</li>
								    	<li>Кафедра фінансів, обліку і аналізу</li>
								    </ul>
								    <p>Науково-педагогічні працівники кафедр (2 доктори наук, 61 кандидати наук, 53 старших викладачів та 30 викладачів) забезпечують викладання на високому фаховому рівні.</p>
								    <p>Підготовка, перепідготовка та підвищення кваліфікації науково-педагогічних працівників кафедр проводиться за рахунок участі викладачів у науково-дослідній роботі, навчання в аспірантурі, стажування в провідних вищих навчальних закладах та науково-дослідних установах України, а також за рахунок участі у роботі методичних та наукових семінарів і конференцій.</p>
								    <p>За кожною з кафедр закріплено комп’ютерний клас і навчально-методичний кабінет, які, зокрема, використовуються як класи для курсового та дипломного проектування.</p>
								    <p>В інституті функціонує 7 спеціалізованих лабораторій:</p>
								    <ul>
								    	<li>програмних засобів;</li>
								    	<li>інформатики і програмування;</li>
								    	<li>комп’ютерної електроніки та мікропроцесорних систем</li>
								    	<li>систем баз даних та знань;</li>
								    	<li>розподілених систем та мереж;</li>
								    	<li>штучного інтелекту;</li>
								    	<li>CISCO.</li>
								    </ul>
								    <p>Крім того, у навчальному процесі використовуються загальноінститутські комп’ютерні класи та комп’ютеризовані лабораторії, оснащені сучасними ПК.</p>
								    <p>Навчальний процес забезпечений повним пакетом сучасних програмних продуктів.</p>
								    <p>Всього в інституті нараховується понад 200 комп'ютерів. Для потреб навчального процесу та наукової роботи студентів і викладачів кафедр навчальні лабораторії інституту підключені до глобальної мережї Інтернет.</p>
								</div>
								<div class="about-us-photo"></div>
							</div>

							<div role="tabpanel" class="tab-pane fade" id="leadership">
								<h2>Керівництво</h2>
								<div class="row">
								    <div class="col-12 col-lg-6">
								    	<div class="leadership-card">
								    		<div class="row no-gutters">
								    			<div class="col-12 col-lg-5">
								    				<div class="leadership-img img">
								    					<img src="http://ippt.lp.edu.ua/images/content/About/boss/Chromyak.jpg" alt="leadership">
								    				</div>
								    			</div>
								    			<div class="col-12 col-lg-7">
								    				<div class="leadership-text">
								    					<h3>Хром'як Йосиф Якович</h3>
								    					<h5 class="text-green">Директор</h5>
								    					<p>к.т.н., доцент, заслужений працівник освіти України, відмінник освіти України</p>
								    					<p>
								    						Тел: <span class="text-green">258-20-27</span>
								    						<br>
								    						E-mail: <span class="text-green">dir.ippt@gmail.com</span>
								    					</p>
								    				</div>
								    			</div>
								    		</div>
								    	</div>
								    </div>
								    <div class="col-12 col-lg-6">
								    	<div class="leadership-card">
								    		<div class="row no-gutters">
								    			<div class="col-12 col-lg-5">
								    				<div class="leadership-img img">
								    					<img src="sources/img/leadership/slyusarchuk.jpg">
								    				</div>
								    			</div>
								    			<div class="col-12 col-lg-7">
								    				<div class="leadership-text">
								    					<h3>Слюсарчук Юрій Миколайович</h3>
								    					<h5 class="text-green">Заступник директора</h5>
								    					<p>к.ф.-м.н., доцент, нагороджений Почесною грамотою Міністерства освіти і науки України</p>
								    					<p>
								    						Тел: <span class="text-green">258-26-76</span>
								    						<br>
								    						E-mail: <span class="text-green">yslyusarchuk@ukr.net</span>
								    					</p>
								    				</div>
								    			</div>
								    		</div>
								    	</div>
								    </div>
								    <div class="col-12 col-lg-6">
								    	<div class="leadership-card">
								    		<div class="row no-gutters">
								    			<div class="col-12 col-lg-5">
								    				<div class="leadership-img img">
								    					<img src="http://ippt.lp.edu.ua/images/content/kafedra_gp/teachers/tsubov_l_v.jpg" alt="leadership">
								    				</div>
								    			</div>
								    			<div class="col-12 col-lg-7">
								    				<div class="leadership-text">
								    					<h3>Цубов Леонід Володимирович</h3>
								    					<h5 class="text-green">Заступник директора</h5>
								    					<p>к.т.н., доцент, заслужений працівник освіти України, відмінник освіти України</p>
								    					<p>
								    						Тел: <span class="text-green">258-21-67</span>
								    						<br>
								    						E-mail: <span class="text-green">email@email.net</span>
								    					</p>
								    				</div>
								    			</div>
								    		</div>
								    	</div>
								    </div>
								</div>
							</div>

							<div role="tabpanel" class="tab-pane fade" id="theDepartment">
								<h2>Кафедри</h2>
								<div class="the-department-card">
								    <h3>Інформаційних систем і технологій</h3>
								    <p>
								    	<span class="text-bold">Завідувач кафедри:</span> <span class="text-italic">Теслюк Василь Миколайович</span>
								    	<br>
								    	<span class="text-bold">Адреса:</span> <span class="text-italic">вул. Горбачевського, 18, 32-й н.к., кім. 506, 402</span>
								    	<br>
								    	<span class="text-bold">Телефон:</span> <span class="text-italic">(032) 258-24-75</span>
								    	<br>
								    	<span class="text-bold">E-mail:</span> <span class="text-italic">IST.dept@lpnu.ua</span>, <span class="text-italic">kist.ippt@gmail.com</span>
								    	<br>
								    	<span class="text-bold">Web-сайт:</span> <span><a href="departments/ist/ist.php" class="text-green" target="_blank">ippt.lp.edu.ua/departments/ist.php</a></span>
								    </p>
								</div>
								<div class="the-department-card">
								    <h3>Кафедра економіки і маркетингу</h3>
								    <p>
								    	<span class="text-bold">Завідувач кафедри:</span> <span class="text-italic">Лисяк Наталя Михайлівна</span>
								    	<br>
								    	<span class="text-bold">Адреса:</span> <span class="text-italic">вул. Горбачевського, 18, 32-й н.к., кім. 301, 408</span>
								    	<br>
								    	<span class="text-bold">Телефон:</span> <span class="text-italic">(032) 258-24-86</span>
								    	<br>
								    	<span class="text-bold">E-mail:</span> <span class="text-italic">EKM.dept@lpnu.ua</span>
								    	<br>
								    	<span class="text-bold">Web-сайт:</span> <span class="text-italic"><a href="departments/ekm/ekm.php" class="text-green" target="_blank">ippt.lp.edu.ua/departments/ekm.php</a></span>
								    </p>
								</div>
								<div class="the-department-card">
								    <h3>Кафедра фінансів, обліку і аналізу</h3>
								    <p>
								    	<span class="text-bold">Завідувач кафедри:</span> <span class="text-italic">Гориславець Павло Анатолійович</span>
								    	<br>
								    	<span class="text-bold">Адреса:</span> <span class="text-italic">вул. Горбачевського, 18, 32-й н.к., кім. 308</span>
								    	<br>
								    	<span class="text-bold">Телефон:</span> <span class="text-italic">(032) 258-25-68</span>
								    	<br>
								    	<span class="text-bold">E-mail:</span> <span class="text-italic">FOA.dept@lpnu.ua</span>
								    	<br>
								    	<span class="text-bold">Web-сайт:</span> <span class="text-italic"><a href="departments/foa/foa.php" class="text-green" target="_blank">ippt.lp.edu.ua/departments/foa.php</a></span>
								    </p>
								</div>
							</div>

							<div role="tabpanel" class="tab-pane fade" id="deanery">
								<h2>Деканат базової та повної вищої освіти</h2>
								<div class="deanery-employee">
									<p>
										<span class="text-bold">Декан:</span> <span class="text-italic">Лапішко Марія Львівна, к.е.н., професор</span> <br>
										<span class="text-bold">Адреса:</span> <span class="text-italic">вул. Горбачевського, 18, кім. 201, 106.</span> <br>
										<span class="text-bold">Номер телефону:</span> <span class="text-italic">(032) 258-21-06</span> <br>
										<span class="text-bold">Е-mail:</span> <span class="text-italic">mariia.l.lapishko@lpnu.ua</span> <br>
									</p>
								</div>
								<div class="deanery-employee">
									<p>
										<span class="text-bold">Фахівець деканату  по роботі з студентами денної форми навчання:</span> <span class="text-italic">Хованець Галина Михайлівна</span> <br>
										<span class="text-bold">Е-mail:</span> <span class="text-italic">Galina.M.Khovanets@lpnu.ua</span> <br>
									</p>
								</div>
								<div class="deanery-employee">
									<p>
										<span class="text-bold">Фахівець деканату  по роботі з студентами заочної форми навчання:</span> <span class="text-italic">Лозинська Галина Ярославівна</span> <br>
										<span class="text-bold">Е-mail:</span> <span class="text-italic">Galina.Y.Lozinska@lpnu.ua</span> <br>
									</p>
								</div>
								<hr style="margin-left: 0; width: 100%;">
								<div class="img">
									<img src="sources/img/deanery/deanery.jpg" alt="deanery-img">
								</div>
								<hr style="margin-left: 0; width: 100%;">
								<h5 class="text-green text-right">
								    Недостатньо лише отримати знання –<br> 
									треба знайти їм застосування.<br> 
									Недостатньо тільки бажати<br>
 									– треба творити.<br>
									/Йоган  Гете/
								</h5>
								<p><span  class="text-bold">Деканат базової та повної вищої освіти</span> – підрозділ Інституту для колегіального управління, оперативного вирішення завдань освітнього процесу, організаційної роботи зі студентами та науково-педагогічними працівниками.   Тут студенти і викладачі можуть  з 8-30  год. до 16 – 30 вносити свої пропозиції для покращення  якості навчального процесу, отримати консультацію  чи пораду.</p>
								<p>Діяльність працівників деканату спрямована на створення в Інституті атмосфери ділової активності, корпоративної єдності,  дисциплінованості та творчого підходу до навчальної  і наукової діяльності.</p>
								<p class="text-bold">Підготовка бакалаврів здійснюється за спеціальностями:</p>
								<ul>
									<li>071 – <span class="text-green">«Облік і оподаткування»</span></li>
									<li>072 – <span class="text-green">«Фінанси, банківська справа та страхування»</span></li>
									<li>075 – <span class="text-green">«Маркетинг»</span></li>
									<li>122 – <span class="text-green">«Комп’ютерні науки»</span></li>
								</ul>
								<p>За спеціальністю 122 «Комп’ютерні науки»  випускники за освітнім рівнем «бакалавр»  можуть здобувати повну вищу освіту  та отримати диплом магістра, навчаючись  за спеціалізацією «Комп’ютерний еколого-економічний моніторинг».</p>
								<p class="text-bold">Освітню, методичну та наукову діяльність забезпечують три кафедри Інституту:</p>
								<ul>
									<li><span class="text-green">Кафедра  фінансів, обліку і аналізу</span> <br>( завідувач –  к.е.н., доцент Гориславець П.А.)</li>
									<li><span class="text-green">Кафедра економіки і маркетингу</span> <br>(завідувач – к.е.н., доцент Лисяк Н.М.)</li>
									<li><span class="text-green">Кафедра інформаційних систем і технологій</span> <br>(завідувач – д.т.н., професор  Теслюк В.М.)</li>
								</ul>
								<p>Велику допомогу в організаційних питаннях,  виявленні творчих здібностей студентів, формуванні у молоді моральних цінностей та активної громадянської позиції  надають деканату студентські органи самоврядування –   Студентська Колегія та Старостат.</p>
								<p class="text-bold">Старости академічних груп 2017/2018 н.р.:</p>
								<ul>
									<li>Група ФК-35  	–	<span class="text-green">Філь Олег Романович</span> </li>
									<li>Група ФК-36	–	<span class="text-green">Андріїшин Ірина Степанівна</span> </li>
									<li>Група МК-33	–	<span class="text-green">Чвартковська Вікторія Романівна</span> </li>
									<li>Група ОА-44	–	<span class="text-green">Пошивак Ярослав Васильович</span> </li>
									<li>Група ФК-45	–	<span class="text-green">Гац Христина Андріївна</span> </li>
									<li>Група ФК-46	–	<span class="text-green">Дмитрах Юрій Андрійович</span> </li>
									<li>Група МК-43	–	<span class="text-green">Батова Вікторія Ігорівна</span> </li>
									<li>Група КН-114  	–	<span class="text-green">Барнінець Діана Романівна</span> </li>
									<li>Група КН-223	–	<span class="text-green">Майхер Орест Володимирович</span> </li>
									<li>Група КН-39	–	<span class="text-green">Гирич Ольга Ігорівна</span> </li>
									<li>Група КН-490	–	<span class="text-green">Кувичко Дмитро Юрійович</span> </li>
									<li>Група КН-491 	–	<span class="text-green">Матюкевич Мар'яна Олегівна</span> </li>
									<li>Група КНЕМ-11	–	<span class="text-green">Демедюк Олег Павлович</span> </li>
									<li>Група КНЕМ-12	–	<span class="text-green">Сухинова Карина Володимирівна</span> </li>
									<li>Група КЕМм -21	–	<span class="text-green">Очич Ігор Русланович</span> </li>
									<li>Група КЕМс -21	–	<span class="text-green">Галай Марія Назарівна</span> </li> 
								</ul>
								<p>Студенти Інституту почувають себе невіддільною частиною багатотисячного загону студентства  НУ «Львівська політехніка» і не лише здобувають фахові знання, але й активну участь приймають в освітніх, наукових, виховних заходах що організовуються в Університеті та Інституті. Вони є ініціаторами та організаторами тематичних вечорів, театралізованих свят, зустрічей з відомими людьми, фестивалів, молодіжних дискотек.</p>
								<p>Щороку в Інституті проходить Міжвузівська студентська науково-технічна конференція, на якій студенти доповідають про свої наукові здобутки , результати творчих пошуків, тези доповідей публікуються у Збірнику науково-пошукових праць.</p>
								<p>Впродовж багатьох років студенти ІППТ успішно навчаються у Технологічній літній школі партнерів вишу Bionic University.</p>
								<p class="bold">Результатом активної участі студентів у науковій роботі за останні роки є призові місця на Всеукраїнських конкурсах та олімпіадах:</p>
								<ul>
									<li> <span class="text-green">В Перун</span> -  друге місце на Всеукраїнській студентській олімпіаді з дисципліни «Педагогіка» (2017).</li>
									<li> <span class="text-green">Н. Боднар, Р. Мотрук, Т. Кушерський, С.  Кулеша,  М. Шеремет</span> —  третє  місце  на  ІХ  Всеукраїнському студентському кейс-змаганні з маркетингу «Rising Industrial Marketing Stars» (2016).</li>
									<li> <span class="text-green">В. Крамарець</span> — переможець конкурсу «Завтра.UA» (2014).</li>
									<li> <span class="text-green">О. Гринишин</span> — диплом ІІІ ступеня на Всеукраїнському конкурсі студентських робіт з природничих, технічних і гуманітарних наук у галузі науки «Бухгалтерський облік, аналіз і аудит» (2015).</li>
									<li> <span class="text-green">Х. Грищук</span> — диплом ІІІ ступеня на Всеукраїнському конкурсі студентських робіт з природничих, технічних і гуманітарних наук у галузі науки «Туризм» (2015).</li>
									<li> <span class="text-green">Портак Маркіян</span> – І місце у Всеукраїнському конкурсі студентських робіт за галуззю знань «Екологія та екологічна безпека» (2014).</li>
								</ul>
								<p>Наполегливі зусилля у навчанні, громадській та науковій роботі студентів Інституту неодноразово відзначались державними установами. Серед номінантів премії Львівської обласної державної адміністрації: Христина Васьо (2015р.), Роман Цудний, Олеся Чиж, Юлія Пірус (2017р.); Дипломом «Кращий студент Пустомитівського району - 2017» нагороджена Юлія Углєва – студентка 4 курсу спеціальності «Фінанси та кредит».</p>
								<p>Студенти інституту, які навчаються за спеціальністю «Комп’ютерні науки», Є розробниками мобільних додатків для військовослужбовців – волонтер Армія SOS, Державного історико-культурного заповідника «Тустань». Вони неодноразово брали участь і перемагали в різноманітних хакатонах і конкурсах («ЕКО-Hackathon», «Bicycle Hackathon», «Золотий Байт» тощо).</p>
								<p>Виховна та культурно-просвітницька робота є невід’ємною частиною навчального процесу ІППТ і спрямована на формування у студентів високих моральних і культурних якостей, активної громадянської позиції та патріотизму, відродження національно-культурних традицій українського народу, прагнення до здорового способу життя, здатності протистояти асоціальним явищам. З цією метою проводяться тематичні вечори, зустрічі з відомими людьми України, Шевченківські читання тощо.</p>
								<p>Студенти інституту беруть активну участь у традиційних фес- тивалях   «Осінь   політехніки»   та «Весна політехніки».</p>
								<p>В інституті сформовані команди з футболу, волейболу, настільного тенісу та шахів. Студенти у складі збірних команд університету беруть участь у міжнародних, всеукраїнських та обласних універсіадах.</p>
								<h3>Гордістю нашого навчального закладу є випускники !</h3>
								<p>Сьогодні випускники ІППТ займають гідні позиції в провідних компаніях галузі ІТ, є засновниками багатьох фірм. Вони — свідомі громадяни своєї держави. Зокрема, це: </p>
								<ul>
									<li><span class="text-green">Олег Гасьошин </span>– арт – директор компанії «ELEKS»</li>
									<li><span class="text-green">Ростислав Гулька</span> – керівник фірми розробки комп’ютерних ігор «711 media development»</li>
									<li><span class="text-green">Мар’яна Кавин</span> – директор ТОВ Західна консалтингова група»</li>
									<li><span class="text-green">Володимит Бервецький</span> -  тренер департаменту роботи з публікоюТОВ Західна консалтингова група»</li>
									<li><span class="text-green">Андрій Седлер</span> – за участь у подіях на Майдані Гідності відзначений державною нагородою</li>
								</ul>
								<p>Чимало випускників інституту працюють над дисертаційними роботами і поповнили професорсько-викладацький склад кафедр інституту  —  Зоряна  Береза, Наталя Русина та Анна Бойценюк, а Ольга Грабельська, Ірина Фаринович, Лілія Гринаш, Ігор Кулиняк, Оксана Яцишин, Віталій Крупін, Юрій Злидник і Лозовицька Дарія, Курило Оксана захистили дисертації на здобуття наукового ступеня кандидата наук.</p>
							</div>

							<div role="tabpanel" class="tab-pane fade" id="college">
								<h2>Коледж інноваційних технологій</h2>
								<div class="about-us-college-info">
								    <div class="college-employee">
										<p>
											<span class="text-bold">Директор коледжу:</span> <span class="text-italic"> Батьковець  Наталія Олегівна, к.е.н., доцент</span> <br>
											<span class="text-bold">Адреса:</span> <span class="text-italic"> вул. Горбачевського, 18, 32-й н.к., кім. 401</span> <br>
											<span class="text-bold">Номер телефону:</span> <span class="text-italic"> (032) 258-26-29</span> <br>
											<span class="text-bold">Е-mail:</span> <span class="text-italic"> Nataliia.O.Batkovets@lpnu.ua</span> <br>
										</p>
									</div>
									<div class="college-employee">
										<p>
											<span class="text-bold">Фахівець деканату:</span> <span class="text-italic">Пиць Мирослава Богданівна</span> <br>
											<span class="text-bold">Е-mail:</span> <span class="text-italic"> Miroslava.B.Pyts@lpnu.ua</span> <br>
										</p>
									</div>
									<div class="college-employee">
										<p>
											<span class="text-bold">Фахівець деканату :</span> <span class="text-italic">Лозинська Галина Ярославівна</span> <br>
											<span class="text-bold">Е-mail:</span> <span class="text-italic"> Galina.Y.Lozinska@lpnu.ua</span> <br>
										</p>
									</div>
									<div class="img">
										<img src="sources/img/college/college.jpg" alt="deanery-img">
									</div>
								    <p>Коледж створений відповідно до Закону України «Про вищу освіту», з метою покращення підготовки фахівців з вищою освітою освітнього рівня молодший спеціаліст, а також проведення прикладних досліджень.</p>
								    <p>Основне завдання Коледжу - якісна підготовка і адаптація студентів до навчання на освітньо-професійних програмах підготовки бакалаврів, а потім спеціалістів чи магістрів, що повною мірою відповідає основним засадам ступеневої освіти.</p>
								    <p>Підготовку молодших спеціалістів здійснюється на базі базової загальної середньої освіти (9 класів). Сьогодні пропонується навчання за такими спеціальностями: “Маркетинг' (термін навчання 3 роки), «Комп’ютерні науки' (термін навчання 4 роки), “Облік і оподаткування' (термін навчання 3 роки), “Фінанси, банківська справа та страхування' (термін навчання 3 роки).</p>
								   	<p>Сьогодні у Коледжі навчається понад 500 студентів на денній та заочній формах навчання. Згідно із Законом України “Про вищу освіту' випускники мають можливість  продовжити навчання на освітньо-професійних програмах підготовки бакалаврів відповідних напрямів підготовки зі скороченим терміном навчання. За роки функціонування  такою можливістю скористалися понад 90 % випускників. Кращі випускники, після закінчення навчання за освітньо-професійними програмами бакалавра, продовжують навчання у магістратурі. </p>
								    <p>Важливо, що заняття проводять досвідчені викладачі, серед яких професори, доценти, а також фахівці з державних та комерційних структур.</p>
								    <p>Кращі студенти, які опановують знання в галузі комп’ютерних та інформаційних технологій, мають можливість паралельно навчатися в Soft Serve University корпорації Soft Serve на міжнародних сертифікаційних програмах, що дозволяє, починаючи з рівня молодшого спеціаліста, здобувати не тільки фундаментальні академічні знання, але й знайомитися із сучасними інформаційними технологіями з можливістю подальшого працевлаштування. Кращі студенти старших курсів відвідують лекції, що проводять провідні фахівці комп’ютерної фірми “ELEKS', “GlobalLogic' та додаткові навчальні курси.</p>
								    <p>Студенти Коледжу є активними учасниками предметних олімпіад, наукових конференцій, колективів художньої самодіяльності, спортивних команд інституту, членами студентської колегії інституту, беруть участь у щорічному фестивалі “Весна політехніки'.</p>
								    <p>Результати навчання, рівень підготовки випускників дає можливість стверджувати про значний позитивний ефект залучення молоді до навчання у вищих навчальних закладах після закінчення 9 класу, починаючи з підготовки на рівні молодшого спеціаліста. Це дає змогу формувати нові концепції освіти і виховання відповідно до вимог Болонського процесу, реалізувати неперервність та ступеневість освіти. Студенти мають можливість, починаючи з рівня молодшого спеціаліста, оволодіти всіма засобами та навичками університетської освіти, а отже, адаптуватися до вищої школи (конспектування лекцій, написання рефератів, курсових робіт, робота в бібліотеці, перші наукові дослідження, проведення презентацій тощо).</p>
								</div>
							</div>

							<div role="tabpanel" class="tab-pane fade" id="educationalMethodicalDepartment">
								<h2>Навчально-методичний відділ</h2>
								<div class="educational-methodical-department-content">
									<p>
										<span class="text-bold">Начальник навчально-методичного відділу:</span> <span class="text-italic">ст. викладач Самотій Наталія Степанівна</span> <br>
										<span class="text-bold">Адреса:</span> <span class="text-italic">вул. Горбачевського, 18, Корпус №32, кім. 202</span> <br>
										<span class="text-bold">Номер телефону:</span> <span class="text-italic">(032) 258-26-86</span> <br>
										<span class="text-bold">Е-mail:</span> <span class="text-italic">NMV.ippt@lpnu.ua, nataliia.s.samotii@lpnu.ua</span><br>
									</p>
								</div>
								<p class="text-bold">Працівники відділу:</p>
								<ul>
									<li><span class="text-bold">Заступник начальника НМВ:</span> <span class="text-italic">Чипак Анастасія Андріївна</span></li>
									<li><span class="text-bold">Фахівець НМВ:</span> <span class="text-italic">Шкільна Валентина Леонідівна</span></li>
								</ul>
								<div class="row">
									<div class="col-12 col-md-4">
										<div class="img">
											<img src="sources/img/educational-methodical-department/samotiy.jpg" alt="workers">
										</div>
									</div>
									<div class="col-12 col-md-4">
										<div class="img">
											<img src="sources/img/educational-methodical-department/chypak.jpg" alt="workers">
										</div>
									</div>
									<div class="col-12 col-md-4">
										<div class="img">
											<img src="sources/img/educational-methodical-department/shkilna.jpg" alt="workers">
										</div>
									</div>
								</div>
								<p>Діяльність відділу спрямована на методичне і організаційне забезпечення навчального процесу, проведення ліцензування та акредитації спеціальностей інституту, організація обліку персонального складу та руху контингенту студентів.</p>
								<p class="text-bold">Основні завдання та функції навчально-методичного відділу:</p>
								<ul>
									<li>впровадження інноваційних методів організації навчального  процесу, сучасних науково-теоретичних та практичних матеріалів і технологій навчання;</li>
									<li>впровадження у навчальний процес методичних рекомендацій Вченої і Науково-методичної рад університету та інституту;</li>
									<li>розробка разом з кафедрами навчальних планів ;</li>
									<li>контроль за виконанням планів навчально-методичної роботи кафедр;</li>
									<li>планування та розрахунок обсягів навчального навантаження науково-педагогічних працівників інституту;</li>
									<li>формування  графіків навчального процесу та контроль за їх дотриманням;</li>
									<li>планування підвищення кваліфікації науково-педагогічних працівників інституту та контроль за його дотриманням;</li>
									<li>методичне і організаційне забезпечення проведення ліцензування та акредитації спеціальностей інституту;</li>
									<li>організація проведення контролю залишкових знань студентів;</li> 
									<li>організація обліку персонального складу та руху контингенту студентів;</li>
									<li>супровід ЄДЕБО по студентському складу;</li> 
									<li>організація забезпечення студентів  та випускників  академічними документами (студентськими квитками,  індивідуальними навчальними планами студентів, бланками залікових книжок,  документами про вищу освіту,  додатками до дипломів європейського зразка);</li>
									<li>формування звітної документації по студентському складу.</li>

								</ul>
							</div>

							<div role="tabpanel" class="tab-pane fade" id="researchSector">
								<h2>Науково-дослідний сектор "Центр моделювання розвитку урбанізованих систем"</h2>
								<div class="research-sector-content">
									<p>
										<span class="text-bold">Керівник:</span> <span class="text-italic">д-р техн. наук, проф. Габрель Микола Михайлович</span><br>
										<span class="text-bold">Адреса:</span> <span class="text-italic">вул. Горбачевського, 18, Корпус №32, кім. 409 </span><br>
										<span class="text-bold">Номер телефону:</span> <span class="text-italic">(032) 237-71-29</span><br>
										<span class="text-bold">Е-mail:</span> <span class="text-italic">h_oleh@ukr.net</span><br>
									</p>
								</div>

								<p class="text-bold">Центр моделювання розвитку урбанізованих систем, створений у 1999р. Діяльність центру зосереджена у трьох напрямах:</p>

								<ul>
									<li><span class="text-bold">Науковий:</span> сфера досліджень – просторова організація та соціально-економічний розвиток міст та територій. За результатами наукових досліджень Інституту опубліковано понад 40 статей у фахових і закордонних виданнях, захищено кандидатську дисертацію. </li>
									<li><span class="text-bold">Навчальний:</span> організовано роботу базових курсів та курсів підвищення кваліфікації оцінювачів за напрямами «Оцінка об’єктів у матеріальній формі» та «Оцінка цілісних майнових комплексів, паїв, цінних паперів, немайнових прав та нематеріальних активів, утому числі прав на об’єкти інтелектуальної власності». Проект реалізується спільно з Фондом державного майна України. За звітний період підготовлено близько 270 оцінювачів та пройшли підвищення кваліфікації понад 850 осіб. Випускники отримують кваліфікаційні свідоцтва Фонду державного майна України та інституту.</li>
									<li><span class="text-bold">Практична діяльність:</span> в центрі працюють три сертифіковані оцінювачі, що здійснюють роботи з оцінки об’єктів державної та комунальної форми власності. Практична діяльність спеціалістів центру дає змогу проходити стажування випускників базових курсів оцінки майна.</li>
								</ul>

								<p>Навчально-наукова та практична діяльність центру дає змогу активно впроваджувати результати досліджень в навчальний процес Інституту з метою здобуття студентами теоретичних знань та практичних навичок, які допоможуть їм приймати самостійні рішення щодо наукових досліджень, оцінки стану територіальних суспільних систем та обґрунтування пропозицій з організацій та розвитку конкретних територій.</p>
							</div>

							<div role="tabpanel" class="tab-pane fade" id="affiliateDrohobych">
								<h2>Філія у місті Дрогобич</h2>
								<div class="affiliate-employee">
									<p>
										<span class="text-bold">Директор філії:</span> <span class="text-italic">Гавран Володимир Ярославович, к.е.н., доцент</span> <br>
										<span class="text-bold">Заступник директора філії:</span> <span class="text-italic">Щербан Тарас Йосипович</span> <br>
										<span class="text-bold">Інспектор деканату:</span> <span class="text-italic">Квик Іван Степанович</span> <br>
										<span class="text-bold">Адреса:</span> <span class="text-italic">82100, м. Дрогобич, вул. С.Стрільців, 2</span> <br>
										<span class="text-bold">Номер телефону:</span> <span class="text-italic">(03244) 337-35, 213 43</span> <br>
										<span class="text-bold">Е-mail:</span> <span class="text-italic">Volodymyr.Y.Gavran@lpnu.ua</span> <br>
									</p>
								</div>
								<p class="text-bold">Здобутки наших студентів:</p>
								<ul>
									<li><span class="text-green">Стахнів Марія</span> - 3 місце у Всеукраїнському конкурсі студентських наукових робіт</li>
									<li><span class="text-green">Гембарська Марія-Ірина</span> - стипендія Львівської облдержадміністрації та обласної ради</li>
									<li><span class="text-green">Марків Марта</span> - відзнака  Дрогобицької міської ради</li>
									<li><span class="text-green">Лахман Олег</span> - переможець пісенного конкурсу м. Дрогобича</li>
								</ul>
								<p>Переможці і призери студентських наукових конференцій.</p>
								<p>Переможці конкурсу  рекламних роликів  ІППТ.</p>
								<p>Переможці і призери численних спортивних змагань з мініфутболу.</p>
							</div>

							<div role="tabpanel" class="tab-pane fade" id="library">
								<h2>Навчально-наукова бібліотека</h2>
								<div class="about-library">
								    <div class="librarian">
										<p>
											<span class="text-bold">Завідувач бібліотеки:</span> <span class="text-italic">Печериця Яна Богданівна</span> <br>
											<span class="text-bold">Адреса:</span> <span class="text-italic">вул. Горбачевського, 18, кім. 108, 110</span> <br>
											<span class="text-bold">Номер телефону:</span> <span class="text-italic">(032) 258-26-84</span> <br>
											<span class="text-bold">Е-mail:</span> <span class="text-italic">Juanna.B.Pecherytsay@lpnu.ua</span> <br>
										</p>
									</div>
									<div class="librarian">
										<p>
											<span class="text-bold">Бібліотекар:</span> <span class="text-italic">Пиць Мирослава Богданівна</span> <br>
										</p>
									</div>
								</div>
								<p>Науково-технічна бібліотека є структурним підрозділом  Інституту підприємництва та перспективних технологій, що забезпечує бібліотечно-інформаційні, навчальні та культурно-просвітницькі потреби навчально-виховного процесу.</p>
								<p>Книжковий фонд бібліотеки інституту складає понад 25 тисяч книг, із яких значна частина – навчальні підручники та посібники , видані інститутом підприємництва та перспективних технологій.</p>
								<p>У бібліотеці організована постійна виставка видань навчально-методичної літератури професорсько-викладацького складу інституту. Бібліотека діє як просвітницький підрозділ, відгукуючись на видатні події і знаменні дати, є учасником різноманітних наукових та культурних заходів.</p>
								<p>Усі досягнення – це результат спільної роботи і взаєморозуміння колективу інституту, спрямованих на виховання молодого покоління.</p>
								<h4 class="text-center">ВИТЯГ З ПРАВИЛ</h4>
								<p class="text-bold text-center">користування науково-технічною бібліотекою  ІППТ НУ “Львівська політехніка'</p>
								<p class="text-center text-bold">ЗАГАЛЬНІ ПОЛОЖЕННЯ</p>
								<p>Правила користування науково-технічною бібліотекою розроблені відповідно до Закону України 32 /95-ВР “Про бібліотеки і бібліотечну справу', затвердженого 27 січня 1995 р., та Типового положення про бібліотеку вищого навчального закладу освіти України, затвердженого наказом Міністерства освіти України №155 від 30.04.98 р., Науково-технічна бібліотека є структурним підрозділом інституту і забезпечує навчальний процес, науково-педагогічну діяльність, виховну й культурно-просвітницьку роботу працівників і студентів ІППТ друкованими виданнями та іншими носіями інформації, що складають фонд бібліотеки. Науково-технічна бібліотека забезпечує читачів основними бібліотечно-бібліографічними послугами відповідно до основних завдань своєї діяльності</p>
								<p class="text-center text-bold">ПРАВА КОРИСТУВАЧІВ НАУКОВО-ТЕХНІЧНОЇ БІБЛІОТЕКИ</p>
								<p class="text-bold">Право користування науково- технічною бібліотекою ІППТ надається:</p>
								<ul>
									<li>студентам інституту різних освітньо-кваліфікаційних рівнів та форм навчання;</li>
									<li>професорсько-викладацькому складу та іншим працівникам Інституту, які працюють в інституті на постійному місці роботи;</li>
									<li>професорсько-викладацький склад, що працює в інституті за сумісництвом має право користуватися фондами НТБ виключно в читальному залі.</li>
								</ul>
								<p>Для цієї категорії викладачів бібліотека може видавати літературу на читацький формуляр матеріально-відповідальної особи кафедри (інспектора кафедри).</p>
								<p>Користувачі мають право одержувати книги, інші документи з бібліотечних фондів відповідно до цих Правил, отримувати довідково-інформаційні, бібліографічні та інші послуги.</p>
								<p>Для запису в бібліотеку користувачі подають паспорт і документ, що засвідчує їх відношення до кола осіб, що перелічені вище (службове посвідчення, студентський квиток, залікову книжку ).</p>
								<p>Запис студентів 1-х курсів  проводиться на підставі списків-наказів про зарахування. Записуючись до бібліотеки, читач повинен ознайомитися із Правилами користування науково-технічною бібліотекою ІППТ і підтвердити зобов'язання про їх виконання своїм підписом на читацькому формулярі.</p>
								<p>Документом, що дає право користуватися фондами бібліотеки студентам, є студентський квиток або залікова книжка.</p>
								<p>Документом, що дає право користуватись фондами бібліотеки працівникам , є  посвідчення, що засвідчує особу  і її відношення до ІППТ.</p>
								<p>Читацький формуляр є документом, що засвідчує дату і факт видачі читачеві чи прийняття від нього книг, інших документів. Користувачі й працівники бібліотеки зобов'язані розписатися у читацьких формулярах за кожний отриманий або зданий примірник.</p>
								<p class="text-center">РОБОТА АБОНЕМЕНТА НАУКОВО-ТЕХНІЧНОЇ БІБЛІОТЕКИ І ОБОВ'ЯЗКИ ЧИТАЧІВ</p>
								<p>Правом отримувати літературу додому користуються читачі, які не мають читацької заборгованості.</p>
								<p class="text-bold">Кількість і терміни видачі літератури додому:</p>
								<ul>
									<li>професорсько-викладацький склад, наукові працівники – до 6 примірників на термін  - один семестр;</li>
									<li>студентам ІППТ денної форми навчання до 5 примірників на місяць. При цьому право на повний комплект навчальної літератури з усіх дисциплін( що відповідає навчальному плану ) має староста групи – на семестр, для інших студентів планується певна кількість примірників на групу.</li>
									<li>студентам заочної форми навчання  4 примірника на  1 місяць. При цьому, повний комплект навчальної літератури з усіх дисциплін видається старості групи  на користування протягом семестру.</li>
								</ul>
								<p>Читач має право продовжити термін користування літературою, якщо на неї нема попиту, але обов'язково її перереєструвавши терміном до 1 місяця.</p>
								<p>Енциклопедії та інші довідкові видання, рідкісні книги, поодинокі примірники наукових видань, журнали видаються тільки для роботи в читальному залі.</p>
								<p class="text-bold">Користувачі зобов'язані:</p>
								<ul>
									<li>дотримуватися Правил користування науково-технічною бібліотекою ІППТ;</li>
									<li>вчасно повертати отримані в бібліотеці книги, інші документи, не виносити їх без відповідного оформлення із приміщення бібліотеки;</li>
									<li>не виривати і не загинати сторінок, не робити на них позначок;</li>
									<li>коректно ставитися до інших читачів та до бібліотечних працівників.</li>
								</ul>
								<p>На початку кожного навчального року читач повинен перереєструватися.</p>
								<p>Студенти на час літніх канікул зобов'язані повернути всі отримані ними книги та  навчально-методичні матеріали.
								Користувачі, які заподіяли шкоду бібліотечному фонду, несуть відповідальність згідно з чинним законодавством України.</p>
								<p class="text-bold">У випадку втрати (пошкодження) або розкрадання книг, інших документів, читачі зобов'язані в найкоротшій термін ліквідувати свою заборгованість шляхом представлення в бібліотеку:</p>
								<ul>
									<li>ідентичного видання (назва, вихідні дані, ціна збігаються);</li>
									<li>більш нового перевидання  на заміну видань, які є в бібліотеці в обмеженій кількості та користуються підвищеним попитом;</li>
									<li>ідентичних видань або їх ксерокопій, опрацьованих у вигляді книг, на заміну видань, які є в бібліотеці в 1-2 примірниках і користуються читацьким попитом, видання, яке визнане бібліотекою рівноцінним і необхідним.</li>
								</ul>
								<p>До повного розрахунку з бібліотекою читачі позбавляються права користуватися її послугами.
								В разі порушення Правил користування науково-технічною бібліотекою читачі можуть бути позбавлені права користуватися бібліотекою на деякий час.</p>
								<p>Вибуваючи з інституту (бібліотеки), користувачі зобов'язані повернути літературу, що за ними рахується. Бухгалтерія інституту робить остаточний розрахунок із працівником, що звільняється, тільки після письмового підтвердження бібліотекою про відсутність заборгованості.</p>
								<p>Після закінчення навчання, студенти ІППТ отримують диплом тільки після повного розрахунку з бібліотекою, про що ставиться відмітка в обхідному листку.</p>
								<p class="text-bold">Періодичні видання:</p>
								<p>Фінанси України <a href="www.minfin.gov.ua/control/uk/publish/archive" class="text-green">www.minfin.gov.ua/control/uk/publish/archive</a></p>
								<p>Економіка і прогнозування <a href="www.eip.org.ua" class="text-green">www.eip.org.ua</a></p>
								<p>Економіка України <a href="www.economukraine.com.ua" class="text-green">www.economukraine.com.ua</a></p>
								<p>Статистика України <a href="Ntkstat.com.ua" class="text-green">Ntkstat.com.ua</a></p>
								<p>Регіональна економіка <a href=" www.irr.org.ua/pe/" class="text-green"> www.irr.org.ua/pe/</a></p>
								<p>Економіка, фінанси, право <a href="www.nbuv.gov.ua/Soc_Gum/Efp/intex.php" class="text-green">www.nbuv.gov.ua/Soc_Gum/Efp/intex.php</a></p>
								<p>Бюджетна бухгалтерія <a href="www.factor.ua" class="text-green">www.factor.ua</a></p>
								<p>Страхова справа <a href="Forinsurer.com/sprava" class="text-green">Forinsurer.com/sprava</a></p>
								<p>Бухгалтерський облік і аудит <a href="www.nbuv.gov.ua/prtal/Soc_Gum/boia" class="text-green">www.nbuv.gov.ua/prtal/Soc_Gum/boia</a></p>
								<p>Маркетинг в Україні <a href="www.nbuv.gov.ua/portal/soc_gum/mvu/intex.php" class="text-green">www.nbuv.gov.ua/portal/soc_gum/mvu/intex.php</a></p>
								<p>Маркетинг и реклама <a href="www.mr.com.ua/" class="text-green">www.mr.com.ua/</a></p>
								<p>Фінансовий контроль <a href="www.dkrs.gov.ua" class="text-green">www.dkrs.gov.ua</a></p>
								<p>Все про бухгалтерський облік <a href="www.vodi.com.ua" class="text-green">www.vodi.com.ua</a></p>
								<p>Баланс. Бюджет <a href="www.balance.ua" class="text-green">www.balance.ua</a></p>
								<p>Урядовий кур'єр <a href="www.ukurier.gov.ua" class="text-green">www.ukurier.gov.ua</a></p>
								<p>Проблеми економіки <a href="red.poe@mail.ru" class="text-green">red.poe@mail.ru</a></p>
								<p>Бізнес Інформ <a href="biz_inf@ukr.net" class="text-green">biz_inf@ukr.net</a></p>
								<p>Актуальні проблеми економіки <a href="eco@nam.kiev.ua" class="text-green">eco@nam.kiev.ua</a></p>
								<p>Chip. Go Digital DVD <a href="www.chip.ua/zhurnal-chip" class="text-green">www.chip.ua/zhurnal-chip</a></p>
								<p>Видання доступні в читальному залі НТБ НУ "Львівська політехніка" (110 ауд.): <a href="http://library.lp.edu.ua/" class="text-green">http://library.lp.edu.ua/</a></p>
							</div>
								    
							<div role="tabpanel" class="tab-pane fade" id="contacts">
								<h2>Контакти</h2>
								<p>
								    <span class="text-bold">Адреса:</span> <span class="text-italic">79044, м. Львів, вул. Горбачевського, 18, 32-й н.к.</span></span>
								    <br>
								    <span class="text-bold">Телефон:</span> <span class="text-italic">(032) 258-20-27б (032) 297-07-55</span></span>
								    <br>
								    <span class="text-bold">E-mail:</span> <span class="text-italic">IPPT.dept@lpnu.ua,  dir.ippt@gmail.com</span></span>
								    <br>
								</p>
								<div class="contacts-map">
									<p class="text-bold">Ми на карті:</p>
								    <iframe src="https://www.google.com/maps/d/embed?mid=1Vi_nNytfkgbOD-y6n3BTrEpBizb-2Rnh" width="100%" height="480"></iframe>
								</div>
							</div>
						</div>
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