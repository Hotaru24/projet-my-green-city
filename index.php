<!DOCTYPE html>
<html lang="fr">

	<head>
		<meta charset="utf-8">
		<title>My Green City</title>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

		<meta name="author" content="#">
		<meta name="description" content="My Green City blablabla">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="header/styleHeader.css">
		<link rel="stylesheet" href="style_jennifer.css">

		<!--Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,900" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet"> 
	</head>

	<body>
		<header id="ctn_header">
			<?php
			include 'header/header.php';
			?>
		</header>
		<div id="container">
			<section id="ctn_action">
				<h2>ACTIONS</h2>
				<div class="carousel-wrapper">
				<span id="item-1"></span>
				<span id="item-2"></span>
				<span id="item-3"></span>
				<div class="carousel-item item-1">
					
					<p class="boutton_assos">En savoir plus</p>
					<a class="arrow arrow-prev" href="#item-3"></a>
					<a class="arrow arrow-next" href="#item-2"></a>
				</div>
				
				<div class="carousel-item item-2">
					
					<p class="boutton_assos">En savoir plus</p>
					<a class="arrow arrow-prev" href="#item-1"></a>
					<a class="arrow arrow-next" href="#item-3"></a>
				</div>
				
				<div class="carousel-item item-3">
					
					<p class="boutton_assos">En savoir plus</p>
					<a class="arrow arrow-prev" href="#item-2"></a>
					<a class="arrow arrow-next" href="#item-1"></a>
				</div>
				</div>
			</section>
			<section id="ctn_association"></section>
			<section id="ctn_dechet">
				<header>
				<h2>Gestion des dechets</h2>
				</header>

					<h3>Conseil</h3>
					<div class="content_conseil" >

						<div class="left">
							<img src="https://image.freepik.com/photos-gratuite/femme-affaires-mode-jeune-ayant-idee-concept-inspiration_1187-18281.jpg"/>
						</div>
						
						<div class="right">
							<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, temporibus? Quibusdam id nesciunt, mollitia assumenda possimus aliquid ad voluptate blanditiis eius unde vero nihil a et facere. Assumenda, nemo delectus.</p>
						</div>
					</div>


					<h3> Points de collecte </h3>
					<div class=" content_points_collecte">
						
						<div class="right">
							<img src="https://www.meinier.ch/sites/default/files/documents/planmeinier.jpg">
						</div>

						<div class="left">
							<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis obcaecati tempore unde fugiat, reiciendis, repellendus temporibus cum voluptatum voluptate modi odio voluptas similique ducimus nesciunt amet nam doloremque fugit illo.</p>
						</div>
					</div>
						

					<button class="accordion">Section 1 </button>

					<div>
						<button class="accordion">Section 2 </button>
						<div class="panel">
							<p>Lorem ipsum...</p>
						</div>
					</div>
					<button class="accordion">Section 3 </button>
						</section>
				<section id="ctn_contact">
					<header>
					<h2>Contact Us</h2>
					</header>
					<form action="#" method="post">
						<div>
							<label for="name">Name: <abbr title="required">*</abbr></label> 
							<input type="text" id="name" name="user_name">
							</div>
						<div>
						<label for="mail">Your email adress <abbr title="required">*</abbr></label>
						<input type="email" id="mail" name="user_mail">
						</div>
						<div>
							<label for="message">Your Message: <abbr title="required">*</abbr></label>
							<textarea id="message" name="user_message"></textarea>
						</div>
						<div class="button">
							<button type="submit">Send your message</button>
						</div>
					</form>
				</section>
		</div><!-- Fin Container -->
		<section id="ctn_footer">
			<?php
			include 'footer.php';
			?>
		</section>
	</body>
</html>
