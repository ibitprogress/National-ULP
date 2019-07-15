<?php
include($_SERVER['DOCUMENT_ROOT'].'/ippt-website/config/config.php');

$news_count= R::getCell("SELECT count(*) FROM news");

$random_id = rand(1,$news_count);

$latest_news = R::getAll("SELECT * FROM news ORDER BY id DESC LIMIT 2");

$news_random = R::getRow("SELECT * FROM news WHERE id=".$random_id);

$news_id = $_GET['news'];

$news = R::getRow("SELECT * FROM news WHERE id=".$news_id);


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>IPPT - <?=$news['title']; ?></title>
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
<body>
	<!-- Preloader -->
	<div id="preloader">
		<div class="preload-img">
			<img class="preload-logo" src="sources/img/logo.png" alt="logo">
		</div>
	</div>

	<!-- HEADER -->
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
								<li class="nav-item active">
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

	<section id="news-page" class="news-page">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<ol class="breadcrumb">
					  <li class="breadcrumb-item"><a href="index.php">Головна</a></li>
					  <li class="breadcrumb-item"><a href="news-archive.php">Новини</a></li>
					  <li class="breadcrumb-item active">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
					</ol>
				</div>
				<div class="col-12 col-lg-9">
					<div class="main-news">
						<div class="news-header">
							<h2 class="text-dark-blue"><?=$news['title']; ?></h2>
						</div>
						<div class="news-body">
							<div class="news-info">
								<h6>02.10.2017, <span class="news-author-photo">(Автор: <span><?=$news['author']; ?></span>, Фотограф: <span><?=$news['photograph']; ?></span></span>)</h6>
							</div>
							<div class="row">
								<div class="col-7">
									<div class="news-img img">
										<a data-fancybox="news" href="<?=$news['img']; ?>">
											<img src="<?=$news['img']; ?>" alt="news-img">
										</a>
									</div>
								</div>
								<div class="col-5">
									<div class="news-title">
										<h4><?=$news['short_text']; ?></h4>
									</div>
								</div>
								<div class="col-12">
									<div class="news-text">
										<p><?=$news['text']; ?></p>
									</div>
								</div>
								<div class="col-12">
					<!-- 				<div class="news-images">
										<div class="row">
											<div class="col-4">
												<div class="img">
													<a data-fancybox="news" href="sources/img/news/IMG_4717.jpg">
														<img src="sources/img/news/IMG_4717.jpg" alt="news-img">
													</a>
												</div>
											</div>
											<div class="col-4">
												<div class="img">
													<a data-fancybox="news" href="sources/img/news/IMG_4731.jpg">
														<img src="sources/img/news/IMG_4731.jpg" alt="news-img">
													</a>
												</div>
											</div>
											<div class="col-4">
												<div class="news-more-img">
													<div class="news-more-img-btn">
														<a href="gallery.php" class="btn btn-green"><i class="fa fa-plus" aria-hidden="true"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div> -->
									
								</div>
							</div>
						</div>
						<div class="news-footer">
							<div class="news-sharing">
								<h3>
									<span>Поширити: </span>
									<a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
									<a href="https://www.linkedin.com" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
								</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-3">
					<div class="last-news-navbar">
						<div class="last-news-navbar-header">
							<h3 class="text-white text-center">Останні новини</h3>
						</div>
						<div class="last-news-navbar-body">
							<div class="row no-gutters">
							<?php foreach ($latest_news as $l_news): ?>	
								<div class="col-12 col-md-6 col-lg-12">
									<div class="last-news">
										<div class="last-news-img img">
											<img src="<?=$l_news['img']; ?>" alt="last-news-img">
										</div>
										<div class="last-news-title">
											<h4 class="text-center"><a href="news.php?news=<?=$l_news['id']; ?>" class="text-green"><?=$l_news['title']; ?></a></h4>
										</div>
										<div class="last-news-text">
											<p><?=$l_news['short_text'] ?></p>
										</div>
									</div>
								</div>
							<?php endforeach; ?>
								<!-- <hr> -->
<!-- 								<div class="col-12 col-md-6 col-lg-12">
									<div class="last-news">
										<div class="last-news-img img">
											<img src="sources/img/news/IMG_4752.jpg" alt="last-news-img">
										</div>
										<div class="last-news-title">
											<h4 class="text-center"><a href="news.php" class="text-green">Lorem Ipsum</a></h4>
										</div>
										<div class="last-news-text">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio modi blanditiis illo dolorem, consequuntur provident sint qui facere quisquam magni nulla necessitatibus labore ducimus cumque.</p>
										</div>
									</div>
								</div> -->
							</div>
						</div>
					</div>
					<div class="top-news-navbar">
						<div class="top-news-navbar-header">
							<h3 class="text-white text-center">Популярні новини</h3>
						</div>
						<div class="top-news-navbar-body">
							<div class="row no-gutters">
								<div class="col-12 col-md-6 col-lg-12">
									<div class="top-news">
										<div class="top-news-img img">
											<img src="<?=$news_random['img']; ?>" alt="top-news-img">
										</div>
										<div class="top-news-title">
											<h4 class="text-center"><a href="news.php?news=<?=$news_random['id']; ?>" class="text-green"><?=$news_random['title']; ?></a></h4>
										</div>
										<div class="top-news-text">
											<p><?=$news_random['short_text']; ?></p>
										</div>
									</div>
								</div>
								<!-- <hr> -->
				<!-- 				<div class="col-12 col-md-6 col-lg-12">
									<div class="top-news">
										<div class="top-news-img img">
											<img src="sources/img/news/IMG_4752.jpg" alt="top-news-img">
										</div>
										<div class="top-news-title">
											<h4 class="text-center"><a href="news.php" class="text-green">Lorem Ipsum</a></h4>
										</div>
										<div class="top-news-text">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio modi blanditiis illo dolorem, consequuntur provident sint qui facere quisquam magni nulla necessitatibus labore ducimus cumque.</p>
										</div>
									</div>
								</div> -->
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

	<!-- Fancybox -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.25/jquery.fancybox.min.js"></script>

	<!-- My scripts -->
	<script src="sources/js/script.min.js"></script>
</body>
</html>