<?php
	include($_SERVER['DOCUMENT_ROOT'].'/ippt-website/config/config.php');
	$projects = R::getAll("SELECT * FROM iproject");
 	
 	$first_project = R::getRow("SELECT * FROM iproject WHERE id=1");

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>IPPT - Projects page</title>
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

	<section id="projects-page" class="projects-page">
		<div class="container">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.php">Головна</a></li>
				<li class="breadcrumb-item"><a href="about-us.php">Про інститут</a></li>
				<li class="breadcrumb-item active">Проекти</li>
			</ol>

			<div id="projects-page-tabs">
				<div class="row">
					<div class="col-12 col-lg-3">
						<div class="projects-page-navbar">
							<ul class="nav nav-tabs projects-page-tabs" role="tablist">
								<?php foreach($projects as $p): ?>
									<li role="presentation"><a class="post-text" href="else_project.php?project=<?=$p['id']; ?>"  aria-controls="progect-1" role="tab" ><?=$p['title'] ?></a></li>
								<?php endforeach; ?>	
								<!-- <li role="presentation"><a class="post-text" href="#project-2" aria-controls="project-2" role="tab" data-toggle="tab">Проект 2</a></li>
								<li role="presentation"><a class="post-text" href="#project-3" aria-controls="project-3" role="tab" data-toggle="tab">Проект 3</a></li> -->
							</ul>
						</div>
					</div>
					<div class="col-12 col-lg-9">
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane fade in active show" id="progect-1">
								<h2><?=$first_project['title']; ?></h2>
								<p class="text-green text-bold text-italic"><?=$first_project['short_text']; ?></p>
								<p><?=$first_project['text']; ?></p>
							</div>

							<div role="tabpanel" class="tab-pane fade" id="project-2">
								<h2>Проект 2</h2>
								<p class="text-green text-bold text-italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia ratione ipsum, consequuntur, voluptates odit accusantium ab voluptatem necessitatibus reprehenderit deserunt, beatae nobis? Repellat amet necessitatibus unde, veritatis beatae, est natus.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus accusamus laboriosam et commodi consectetur odio tempora aut impedit eveniet, at quaerat culpa eos officiis, id quo pariatur quibusdam cupiditate soluta.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus accusamus laboriosam et commodi consectetur odio tempora aut impedit eveniet, at quaerat culpa eos officiis, id quo pariatur quibusdam cupiditate soluta.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus accusamus laboriosam et commodi consectetur odio tempora aut impedit eveniet, at quaerat culpa eos officiis, id quo pariatur quibusdam cupiditate soluta.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus accusamus laboriosam et commodi consectetur odio tempora aut impedit eveniet, at quaerat culpa eos officiis, id quo pariatur quibusdam cupiditate soluta.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus accusamus laboriosam et commodi consectetur odio tempora aut impedit eveniet, at quaerat culpa eos officiis, id quo pariatur quibusdam cupiditate soluta.</p>
							</div>

							<div role="tabpanel" class="tab-pane fade" id="project-3">
								<h2>Проект 3</h2>
								<p class="text-green text-bold text-italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia ratione ipsum, consequuntur, voluptates odit accusantium ab voluptatem necessitatibus reprehenderit deserunt, beatae nobis? Repellat amet necessitatibus unde, veritatis beatae, est natus.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus accusamus laboriosam et commodi consectetur odio tempora aut impedit eveniet, at quaerat culpa eos officiis, id quo pariatur quibusdam cupiditate soluta.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus accusamus laboriosam et commodi consectetur odio tempora aut impedit eveniet, at quaerat culpa eos officiis, id quo pariatur quibusdam cupiditate soluta.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus accusamus laboriosam et commodi consectetur odio tempora aut impedit eveniet, at quaerat culpa eos officiis, id quo pariatur quibusdam cupiditate soluta.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus accusamus laboriosam et commodi consectetur odio tempora aut impedit eveniet, at quaerat culpa eos officiis, id quo pariatur quibusdam cupiditate soluta.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus accusamus laboriosam et commodi consectetur odio tempora aut impedit eveniet, at quaerat culpa eos officiis, id quo pariatur quibusdam cupiditate soluta.</p>
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