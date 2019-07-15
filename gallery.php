<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>IPPT - gallery</title>
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

	<!-- GALLERY PAGE -->
	<div id="gallery-page" class="gallery-page">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<ol class="breadcrumb">
					  <li class="breadcrumb-item"><a href="index.php">Головна</a></li>
					  <li class="breadcrumb-item"><a href="about-us.php">Про інститут</a></li>
					  <li class="breadcrumb-item active">Галерея</li>
					</ol>
				</div>
				<div class="col-12 col-lg-3">
					<div class="gallery-navbar">
						<ul>
							<li><a href="#allnews" class="active">Всі новини</a></li>
							<li><a href="#sport">Спорт</a></li>
							<li><a href="#science">Наука</a></li>
							<li><a href="#meeting">Зустрічі</a></li>
							<li><a href="#trips">Подорожі</a></li>
							<li><a href="#spring-and-autumn-of-lp">"Весна та Осінь політехніки"</a></li>
						</ul>
					</div>
				</div>
				<div class="col-12 col-lg-9">
					<div class="gallery-section">
						<h2>Всі альбоми</h2>
						<div class="row">
							<div class="col-12 col-md-4">
								<a href="gallery-album.php">
									<div class="gallery-container">
										<div class="gallery-img img">
											<img src="sources/img/news/IMG_183222222.jpg" alt="news-img">
										</div>
										<div class="gallery-text">
											<h5 class="text-green">25.09.2017, 12:00</h5>
											<h3 class="text-blue">Lorem Ipsum</h3>
										</div>
									</div>
								</a>
							</div>
							<div class="col-12 col-md-4">
								<a href="gallery-album.php">
									<div class="gallery-container">
										<div class="gallery-img img">
											<img src="sources/img/news/IMG_4786.jpg" alt="news-img">
										</div>
										<div class="gallery-text">
											<h5 class="text-green">25.09.2017, 12:00</h5>
											<h3 class="text-blue">Lorem Ipsum</h3>
										</div>
									</div>
								</a>
							</div>
							<div class="col-12 col-md-4">
								<a href="gallery-album.php">
									<div class="gallery-container">
										<div class="gallery-img img">
											<img src="sources/img/news/IMG_4717.jpg" alt="news-img">
										</div>
										<div class="gallery-text">
											<h5 class="text-green">25.09.2017, 12:00</h5>
											<h3 class="text-blue">Lorem Ipsum</h3>
										</div>
									</div>
								</a>
							</div>
							<div class="col-12 col-md-4">
								<a href="gallery-album.php">
									<div class="gallery-container">
										<div class="gallery-img img">
											<img src="sources/img/news/IMG_4805.jpg" alt="news-img">
										</div>
										<div class="gallery-text">
											<h5 class="text-green">25.09.2017, 12:00</h5>
											<h3 class="text-blue">Lorem Ipsum</h3>
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>

					<div class="gallery-footer">
						<nav aria-label="Page navigation example">
						    <ul class="pagination">
							    <li class="page-item">
							        <a class="page-link" href="#" aria-label="Previous">
							        	<span aria-hidden="true">&laquo;</span>
							        	<span class="sr-only">Previous</span>
							        </a>
							    </li>
							    <li class="page-item"><a class="page-link" href="#">1</a></li>
							    <li class="page-item active"><a class="page-link" href="#">2</a></li>
							    <li class="page-item"><a class="page-link" href="#">3</a></li>
							    <li class="page-item">
							        <a class="page-link" href="#" aria-label="Next">
							        	<span aria-hidden="true">&raquo;</span>
							        	<span class="sr-only">Next</span>
							        </a>
							    </li>
						    </ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
	
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