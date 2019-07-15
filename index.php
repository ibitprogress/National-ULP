<?php 
include($_SERVER['DOCUMENT_ROOT'].'/ippt-website/config/config.php');

$slider = R::getAll("SELECT * FROM slider ORDER BY id DESC LIMIT 2 ");

$adwards_count= R::getCell("SELECT count(*) FROM adward");
// $f = $adwards_count-9;
$s = $adwards_count-6;
$th= $adwards_count-9;
// $fo = $adwards_count-9;
// echo "<div style='width:100%;background:red;'>$adwards_count</div>";
$adwards_first = R::getAll("SELECT * FROM adward ORDER BY id DESC LIMIT 3 ");
$adwards_second = R::getAll("SELECT * FROM adward ORDER BY id LIMIT 3 OFFSET $s");
$adwards_third = R::getAll("SELECT * FROM adward ORDER BY id LIMIT 3 OFFSET $th ");

$adwards_second = array_reverse($adwards_second);
$adwards_third = array_reverse($adwards_third);

$about_ippt = R::getAll("SELECT * FROM about");

$news = R::getAll("SELECT * FROM news ORDER BY id DESC LIMIT 4 ");

?>


<!DOCTYPE html>
<html lang="uk">
<head>
	<meta charset="UTF-8">
	<title>IPPT - main page</title>


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

	<!-- Main Page -->
	<section id="main-page" class="main-page">
		<!-- BACKGROUND SLIDER -->
		<div id="slider" class="slider">
			<div class="hot-news hot-news-1">
				<span><i class="fa fa-puzzle-piece large" aria-hidden="true"></i></span>
				<a class="hide-text" href="projects.php">Проекти</a>
			</div>
			<div class="hot-news hot-news-2">
				<span><i class="fa fa-cloud large" aria-hidden="true"></i></span>
				<a class="hide-text" href="http://vns.lpnu.ua/">ВНС</a>
			</div>
			<div class="hot-news hot-news-3">
				<span><i class="fa fa-list-alt large" aria-hidden="true"></i></span>
				<a class="hide-text" href="student.php">Розклад</a>
			</div>
			<div id="newsSlider" class="carousel slide news-slider" data-ride="carousel">
				<ol class="carousel-indicators">
				    <li data-target="#newsSlider" data-slide-to="0" class="active"></li>
				    <li data-target="#newsSlider" data-slide-to="1"></li>
				    <li data-target="#newsSlider" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
				    <div class="carousel-item active">
				        <img class="d-block w-100" src="sources/img/news/IMG_183222222.jpg" alt="First slide">
				    </div>
				<?php foreach($slider as $slide): ?>
				    <div class="carousel-item">
				        <img class="d-block w-100" src="<?=$slide['img']; ?>" alt="Second slide">
				    </div>
				<?php endforeach; ?>
				 <!--    <div class="carousel-item">
				        <img class="d-block w-100" src="sources/img/slider/slide3.jpg" alt="Third slide">
				    </div> -->
				</div>
			</div>
		</div>

		<!-- SECTION MENU -->
		<div class="section-menu">
			<div class="row no-gutters">
			<div class="section-menu-li col-12 col-sm-6 col-lg-3">
				<i class="icons icons-white fa fa-university" aria-hidden="true"></i>
				<h3 class="text-white">Про інститут</h3>
				<a href="about-us.php" class="btn btn-blue">Читати більше</a>
			</div>
			<div class="section-menu-li col-12 col-sm-6 col-lg-3">
				<i class="icons icons-white fa fa-graduation-cap" aria-hidden="true"></i>
				<h3 class="text-white">Освіта та Наука</h3>
				<a href="education-science.php" class="btn btn-blue">Читати більше</a>
			</div>
			<div class="section-menu-li col-12 col-sm-6 col-lg-3">
				<i class="icons icons-white fa fa-smile-o" aria-hidden="true"></i>
				<h3 class="text-white">Студентська Kолегія</h3>
				<a href="student_college/student-college.php" class="btn btn-blue" target="_blank">Читати більше</a>
			</div>
			<div class="section-menu-li col-12 col-sm-6 col-lg-3">
				<i class="icons icons-white fa fa-object-group" aria-hidden="true"></i>
				<h3 class="text-white">Галерея</h3>
				<a href="gallery-album.php" class="btn btn-blue">Читати більше</a>
			</div>
			</div>
		</div>

		<!-- INTRODUCTION -->
		<div id="introduction" class="introduction">
			<div class="container">
				<h1>Вступна кампанія 2018</h1>
				<p>Умови вступу у вищий навчальний заклад уже тут!</p>
				<a href="entrant.php" class="btn btn-green">Читати більше</a>
			</div>
		</div>

		<!-- BOARD -->
		<div id="board" class="board">
			<div class="container">
				<div class="row">
					<div class="left-side col-12 col-lg-3">
						<hr size="1" width="100" color="#333" align="left">
						<h2>Дошка оголошень</h2>
						<ol class="carousel-indicators" data-target="#boardCarousel">
							<li data-target="#boardCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#boardCarousel" data-slide-to="1"></li>
							<li data-target="#boardCarousel" data-slide-to="2"></li>
						</ol>
					</div>
					<div class="right-side col-12 col-lg-9">
						<div id="boardCarousel" class="carousel slide board-carousel" data-ride="carousel">
							<div class="carousel-inner">
							    <div class="carousel-item active">
							    	<div class="row no-gutters">
							    	<?php foreach($adwards_first as $adward): ?>	
							    		<div class="col-12 col-md-4">
							    			<a href="adward.php?adward=<?=$adward['id']; ?>" >
								    			<div class="board-news board-news-info">
										           	<div class="board-news-img img">
										           		<img src="<?=$adward['img']; ?>" alt="board-news-img-1">
										            </div>
										           	<div class="board-news-text">
										           		<h3 class="text-white"><?=$adward['title']; ?></h3>
														<h5 class="text-green"><?=$adward['data_add']; ?></h5>
										           		<p class="text-white"><?=$adward['short_text'];?></p>
										           	</div>
										        </div>
									    	</a>
							    		</div>
							    	<?php endforeach; ?>	
		<!-- 					    		<div class="col-12 col-md-4">
							    			<a href="news.php" >
								    			<div class="board-news board-news-info">
										           	<div class="board-news-img img">
										           		<img src="sources/img/news/IMG_4731.jpg" alt="board-news-img-1">
										            </div>
										           	<div class="board-news-text">
										           		<h3 class="text-white">News 1</h3>
														<h5 class="text-green">17.08.2017, 8:45</h5>
										           		<p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis culpa totam reprehenderit iste.</p>
										           	</div>
										        </div>
									    	</a>
							    		</div>
							    		<div class="col-12 col-md-4">
							    			<a href="news.php" >
								    			<div class="board-news board-news-info">
										           	<div class="board-news-img img">
										           		<img src="sources/img/news/IMG_4731.jpg" alt="board-news-img-1">
										            </div>
										           	<div class="board-news-text">
										           		<h3 class="text-white">News 1</h3>
														<h5 class="text-green">17.08.2017, 8:45</h5>
										           		<p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis culpa totam reprehenderit iste.</p>
										           	</div>
										        </div>
									    	</a>
							    		</div> -->
							    	</div>
							    </div>
							    <div class="carousel-item">
							    	<div class="row no-gutters">
							    		<?php foreach($adwards_second as $adward): ?>	
							    		<div class="col-12 col-md-4">
							    			<a href="adward.php?adward=<?=$adward['id']; ?>" >
								    			<div class="board-news board-news-info">
										           	<div class="board-news-img img">
										           		<img src="<?=$adward['img']; ?>" alt="board-news-img-1">
										            </div>
										           	<div class="board-news-text">
										           		<h3 class="text-white"><?=$adward['title']; ?></h3>
														<h5 class="text-green"><?=$adward['data_add']; ?></h5>
										           		<p class="text-white"><?=$adward['short_text'];?></p>
										           	</div>
										        </div>
									    	</a>
							    		</div>
							    	<?php endforeach; ?>	
							    	</div>
							    </div>
							    <div class="carousel-item">
							    	<div class="row no-gutters">
							    		<?php foreach($adwards_third as $adward): ?>	
							    		<div class="col-12 col-md-4">
							    			<a href="adward.php?adward=<?=$adward['id']; ?>" >
								    			<div class="board-news board-news-info">
										           	<div class="board-news-img img">
										           		<img src="<?=$adward['img']; ?>" alt="board-news-img-1">
										            </div>
										           	<div class="board-news-text">
										           		<h3 class="text-white"><?=$adward['title']; ?></h3>
														<h5 class="text-green"><?=$adward['data_add']; ?></h5>
										           		<p class="text-white"><?=$adward['short_text'];?></p>
										           	</div>
										        </div>
									    	</a>
							    		</div>
							    	<?php endforeach; ?>	
							    	</div>
							    </div>
							</div>
						</div>
					</div>
				</div> 
			</div>
		</div>

		<!-- NEWS -->
		<div id="last-news" class="last-news">
			<div class="container">
				<h2 class="text-center">Останні новини</h2>

				<div class="row no-gutters">
					<?php foreach($news as $new): ?>
					<div class="col-12 col-md-6 col-lg-6">
						<a href="news.php?news=<?=$new['id']; ?>" >
							<div class="news-card">
								<div class="row no-gutters">
									<div class="col-12 col-lg-5">
										<div class="news-card-img img">
											<img src="<?=$new['img']; ?>" alt="news">
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
<!-- 					<div class="col-12 col-md-6 col-lg-6">
						<a href="news.php" >
							<div class="news-card">
								<div class="row no-gutters">
									<div class="col-12 col-lg-5">
										<div class="news-card-img img">
											<img src="sources/img/news/IMG_4717.jpg" alt="news">
										</div>
									</div>
									<div class="col-12 col-lg-7">
										<div class="news-card-text">
											<h3 class="text-white">Lorem Ipsum</h3>
											<h5 class="text-green">18.08.2017, 8.45</h5>
											<p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-12 col-md-6 col-lg-6">
						<a href="news.php" >
							<div class="news-card">
								<div class="row no-gutters">
									<div class="col-12 col-lg-5">
										<div class="news-card-img img">
											<img src="sources/img/news/IMG_4717.jpg" alt="news">
										</div>
									</div>
									<div class="col-12 col-lg-7">
										<div class="news-card-text">
											<h3 class="text-white">Lorem Ipsum</h3>
											<h5 class="text-green">18.08.2017, 8.45</h5>
											<p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-12 col-md-6 col-lg-6">
						<a href="news.php" >
							<div class="news-card">
								<div class="row no-gutters">
									<div class="col-12 col-lg-5">
										<div class="news-card-img img">
											<img src="sources/img/news/IMG_4717.jpg" alt="news">
										</div>
									</div>
									<div class="col-12 col-lg-7">
										<div class="news-card-text">
											<h3 class="text-white">Lorem Ipsum</h3>
											<h5 class="text-green">18.08.2017, 8.45</h5>
											<p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
										</div>
									</div>
								</div>
							</div>
						</a>
					</div> -->
				</div>
				<div class="add-enother-news">
					<a href="news-archive.php" class="btn btn-green">Переглянути більше</a>
				</div>
			</div>
		</div>

		<!-- DIPLOMA -->
		<div id="diploma" class="diploma">
			<div class="container">
				<div class="row  align-items-center">
					<div class="col-12 col-lg-5">
						<div class="diploma-text">
							<h3 class="text-blue">Ми пишаємось <br> перемогами <br> наших <br> студентів!</h3>
							<a href="projects.php" class="btn btn-green">Читати більше</a>
						</div>
					</div>
					<div class="col-12 col-lg-7">
						<div class="diploma-photo img">
							<img src="sources/img/diplomas.png" alt="diplomas">
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- REVIEWS -->
		<div id="reviews" class="reviews">
			<div class="reviews-container container-fluid">
				<div id="sliderReviews" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner" role="listbox">
					    <div class="carousel-item active">
					    	<div class="reviews-info">
					    		<div class="row no-gutters">
					    			<div class="col-12 col-md-3">
					    				<div class="reviews-img">
								        	<img class="d-block img-fluid" src="sources/img/reviews/boss.jpg" alt="First slide">
								        </div>
					    			</div>
					    			<div class="col-12 col-md-9">
					    				<div class="reviews-text">
								        	<p class="text-grey">"<span> Інститут був для мене важливим першим поштовхом у майбутнє професійне життя - спочатку бухгалтера, згодом головного бухгалтера,  директора аутсорсингової компанії і вже тепер тренера та податкового консультанта. Щиро дякую моїм викладачам - натхненникам, а особливо моєму доброму наставнику - ректору Йосипу Яковичу за подаровану "вудочку" у життя!</span>"</p>
								        	<h6 class="text-green">Мар’яна Кавин
 											<span>,податковий консультан</span></h6>
								        </div>
					    			</div>
					    		</div>
					    	</div>
					    </div>
					    <?php foreach($about_ippt as $a_ippt): ?>
					    <div class="carousel-item">
					    	<div class="reviews-info">
						    	<div class="row no-gutters">
						    		<div class="col-12 col-md-3">
						    			<div class="reviews-img">
								        	<img class="d-block img-fluid" src="<?=$a_ippt['img']; ?>" alt="Second slide">
								        </div>
						    		</div>
						    		<div class="col-12 col-md-9">
						    			<div class="reviews-text">
								        	<p class="text-grey">"<span><?=$a_ippt['title']; ?></span>"</p>
								        	<h6 class="text-green"><?=$a_ippt['status'];?></h6>
								        </div>
						    		</div>
						    	</div>
					    	</div>
					    </div>
						<?php endforeach; ?>
					<a class="carousel-controls carousel-control-prev" href="#sliderReviews" role="button" data-slide="prev">
					    <span><i class="fa fa-angle-left" aria-hidden="true"></i></span>
					    <span class="sr-only">Previous</span>
					</a>
					<a class="carousel-controls carousel-control-next" href="#sliderReviews" role="button" data-slide="next">
					    <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
					    <span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>

		<!-- BANERS -->
		<div id="baners" class="baners">
			<!-- <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			        <div class="container">
				      	<div class="row no-gutters justify-content-around">
							<div class="baner">
								<a href="http://lp.edu.ua/" target="_blank"><img src="sources/img/banners/6.png" alt="LvivPolytechnic"></a>
							</div>
							<div class="baner">
								<a href="http://mon.gov.ua/" target="_blank"><img src="sources/img/banners/3.png" alt="MON"></a>							</div>
							<div class="baner">
								<a href="http://city-adm.lviv.ua/" target="_blank"><img src="sources/img/banners/1.png" alt="LvivCityCouncil"></a>
							</div>
					    </div>
			        </div>
			    </div>
			    <div class="carousel-item">
			    	<div class="container">
			    		<div class="row no-gutters justify-content-around">
							<div class="baner">
								<a href="http://vnz.org.ua" target="_blank"><img src="sources/img/banners/2.png" alt="LvivOblAdmin"></a>
							</div>
							<div class="baner">
								<a href="http://loda.gov.ua/" target="_blank"><img src="sources/img/banners/5.png" alt="Cisco"></a>
							</div>
							<div class="baner">
								<a href="http://lvtest.org.ua/" target="_blank"><img src="sources/img/banners/4.png" alt="N-iX"></a>
							</div>
			    		</div>
			    	</div>
			    </div>
			  </div>

			  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div> -->
			<div class="container">
				<div class="row no-gutters justify-content-around">
					<div class="baner">
						<a href="http://lp.edu.ua/" target="_blank"><img src="sources/img/banners/6.png" alt="LvivPolytechnic"></a>
					</div>
					<div class="baner">
						<a href="http://mon.gov.ua/" target="_blank"><img src="sources/img/banners/3.png" alt="MON"></a>
					</div>
					<div class="baner">
						<a href="http://city-adm.lviv.ua/" target="_blank"><img src="sources/img/banners/1.png" alt="LvivCityCouncil"></a>
					</div>
					<div class="baner">
						<a href="http://vnz.org.ua" target="_blank"><img src="sources/img/banners/2.png" alt="LvivOblAdmin"></a>
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