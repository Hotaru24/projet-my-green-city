<!DOCTYPE html>
<html lang="fr">

	<head>
		<meta charset="utf-8">
		<title>My Green City</title>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

		<meta name="author" content="#">
		<meta name="description" content="My Green City blablabla">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="reset.css">
        <link rel="stylesheet" href="common.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="header/styleHeader.css">
        <link rel="stylesheet" href="style_jennifer.css">
		<link rel="stylesheet" href="style_Associations.css">
		
        <!--JavaScript -->
        <script type="text/javascript" src="script.js"></script>

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
					<div class="ctn_slider">
						<div class="item_slider">
						<a href="action/pages_actions/page_action1.php"><img src="https://i.postimg.cc/k5rb85F9/bio-Convert-Image.jpg(225 ko)
				https://i.postimg.cc/k5rb85F9/bio-Convert-Image.jpg
				" alt="image-bio" /></a>
						</div>
						<div class="item_slider">
						<a href="action/pages_actions/page_action2.php"> <img src="https://i.postimg.cc/BQ4s8f1y/recyclage-Convert-Image.jpg(68 ko)
				https://i.postimg.cc/BQ4s8f1y/recyclage-Convert-Image.jpg
				" alt="image-recyclage"/></a>
						</div>
						<div class="item_slider">
						<a href="action/pages_actions/page_action2.php"><img src="https://i.postimg.cc/RV61n257/Reduction-Dechet-Convert-Image.jpg(14 ko)
				https://i.postimg.cc/RV61n257/Reduction-Dechet-Convert-Image.jpg
				" alt="image-dechet" /></a>
						</div>
					</div>
					<button  class="button-left" onclick="plusDivs(-1)">&#10094;</button>
					<button  class="button-right" onclick="plusDivs(-1)">&#10094;</button>
				</div>
				</section>
				<section id="ctn_association">
					<h2>ASSOCIATIONS</h2>
						<div class="ctn_slider">
							<div class="item_slider">
							<a href="page_association.php"> <img src="https://i.postimg.cc/qBzQFzH1/logo1.png" alt="logo_asso1" /> </a>
							</div>
							<div class="item_slider">
							<a href="page_association.php"><img src="https://i.postimg.cc/kMzwPqnq/logo2.png" alt="logo_asso2"/></a>
							</div>
							<div class="item_slider">
							<a href="page_association.php"> <img src="https://i.postimg.cc/vZdzDhgK/logo3.png" alt="logo_asso3" /></a>
							</div>
						</div>
						<button class="button-left" onclick="plusDivs(-1)">&#10094;</button>
						<button class="button-right" onclick="plusDivs(1)">&#10095;</button>
				</section>
				<section id="ctn_dechet">
				<header>
				<h2>Gestion des dechets</h2>
				</header>
					<h3>Conseil</h3>
					<div class="content_conseil" >
						<div class="left">
							<img src="https://image.shutterstock.com/image-vector/go-green-design-vector-illustration-600w-304285055.jpg(45 ko)
				https://image.shutterstock.com/image-vector/go-green-design-vector-illustration-600w-304285055.jpg
				"/>
						</div>
						<div class="right">
							<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, temporibus? Quibusdam id nesciunt, mollitia assumenda possimus aliquid ad voluptate blanditiis eius unde vero nihil a et facere. Assumenda, nemo delectus. Maecenas erat ipsum, iaculis ut ex vel, maximus placerat augue. Aliquam auctor lorem a risus porta laoreet. Mauris luctus metus orci, a suscipit leo pulvinar in. Vivamus convallis vulputate diam ac hendrerit. Quisque a iaculis massa. Curabitur eu scelerisque tellus. Etiam dapibus lectus a dignissim efficitur. Cras vestibulum interdum nunc. Morbi condimentum massa sit amet orci commodo, ac feugiat nibh accumsan. Nulla vitae eleifend purus. Sed dictum pretium velit.

Donec vel aliquam mauris. Curabitur in dui lacus. </p>
						</div>
					</div>
					<hr />
					<h3> Points de collecte </h3>
					<div class="content_points_collecte">
						<div class="left">
							<details>
								<summary>points de collecte</summary>
								<div>
									<ul>
										<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, temporibus? Quibusdam id nesciunt, mollitia assumenda possimus aliquid ad voluptate blanditiis eius unde vero nihil a et facere. Assumenda, nemo delectus.</li>
										<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, temporibus? Quibusdam id nesciunt, mollitia assumenda possimus aliquid ad voluptate blanditiis eius unde vero nihil a et facere. Assumenda, nemo delectus.</li>
										<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, temporibus? Quibusdam id nesciunt, mollitia assumenda possimus aliquid ad voluptate blanditiis eius unde vero nihil a et facere. Assumenda, nemo delectus.</li>
									</ul>
								</div>
							</details>
							<details>
								<summary>points de collecte</summary>
								<div>
									<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, temporibus? Quibusdam id nesciunt, mollitia assumenda possimus aliquid ad voluptate blanditiis eius unde vero nihil a et facere. Assumenda, nemo delectus.</p>
								</div>
							</details>
							<details>
								<summary>points de collecte</summary>
								<div>
									<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, temporibus? Quibusdam id nesciunt, mollitia assumenda possimus aliquid ad voluptate blanditiis eius unde vero nihil a et facere. Assumenda, nemo delectus.</p>
								</div>
							</details>
						</div>
						<div class="right">
							<img src="nantes.png"/>
						</div>
					</div>
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
		<script type="text/javascript" src="scriptHeader.js"></script>
	</body>
</html>
