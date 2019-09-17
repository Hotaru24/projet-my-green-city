<!DOCTYPE html>
<html lang="fr">

	<head>
		<meta charset="utf-8">
		<title>My Green City</title>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

		<meta name="author" content="#">
		<meta name="description" content="My Green City blablabla">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="common.css">
		<link rel="stylesheet" href="reset.css">

		<link rel="stylesheet" href="style_jennifer.css">

		<!--Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,900" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet"> 
	</head>

	<body>
		<section id="ctn_header"></section>
		<div id="container">
			<section id="ctn_action"></section>
			<section id="ctn_association"></section>
			<section id="ctn_dechet"></section>
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
		<section id="ctn_footer"></section>
	</body>
</html>
