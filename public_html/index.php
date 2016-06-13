<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<!-- sets IE rendering to IE-EDGE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- sets viewport width to device width, scaling 1:1 -->
		<meta name="viewport" content="width=device-width, initial-scale=1">


		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

		<!--FontAweseom-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

		<!-- OUR CUSTOM CSS -->
		<link rel="stylesheet" href="css/style.css" type="text/css">

		<!-- HTML5 shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

		<![endif]-->

		<!-- jQuery -->
		<script src="https://code.jquery.com/jquery-2.2.3.min.js"   integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo="   crossorigin="anonymous"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

		<!-- jQuery Form, Additional Methods, Validate -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/additional-methods.min.js"></script>

		<!-- Your JavaScript Form Validator -->
		<script src="js/form-validate.js"></script>

		<!-- Google reCAPTCHA -->
		<script src='https://www.google.com/recaptcha/api.js'></script>
		<title><?php echo _("Ellen's Piano Studio"); ?></title>
	</head>
	<body class="sfooter ">
		<div class="sfooter-content">

			<!-- begin bootstrap navbar -->
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="container-fluid">
				<nav class="navbar navbar-default" role="navigation">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
									  data-target="#collapse" aria-expanded="false" aria-controls="navbar">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="#featured"><?php echo _("Ellen's Online Piano Studio"); ?></a>
						</div><!--/.navbar-header -->
						<div class="collapse navbar-collapse" id="collapse">
							<!-- Collect the nav links and other content for toggling -->
							<ul class="nav nav-pills navbar-right">
								<li class="active"><a href="index.php"><?php echo _("Home"); ?></a></li>
								<li><a href="about.php#about-me"><?php echo _("About Me"); ?></a></li>
								<li class="dropdown">
									<a href="#about-piano" class="dropdown-toggle" data-toggle="dropdown" role="button"
										aria-haspopup="true" aria-expanded="false"><?php echo _("About the Piano"); ?><span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a class="btn btn-default btn-sm" href="about.php#find" role="button"><?php echo _("Find the Right Piano"); ?></a></li>
										<li><a class="btn btn-info btn-sm" href="about.php#finger" role="button"><?php echo _("Finger Position"); ?></a></li>
									</ul>
								</li><!--/.dropdown for about piano -->
								<li class="dropdown">
									<a href="#reading-music" class="dropdown-toggle" data-toggle="dropdown" role="button"
										aria-baspopup="true" aria-expanded="false"><?php echo _("Reading music"); ?><span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="reading-music.php#tempo" class="btn btn-default btn-sm" role="button"><?php echo _("Tempo"); ?></a></li>
										<li><a href="reading-music.php#rhythm" class="btn btn-info btn-sm" role="button"><?php echo _("Rhythm"); ?></a></li>
										<li><a href="reading-music.php#notation" class="btn btn-success btn-sm" role="button"><?php echo _("Music Notation"); ?></a></li>
										<li><a href="reading-music.php#key" class="btn btn-default btn-sm" role="button"><?php echo _("Key Signatures"); ?></a></li>
									</ul>
								</li><!--/.dropdown for music theory -->
								<li class="dropdown">
									<a href="#link" class="dropdown-toggle" data-toggle="dropdown" role="button"
										aria-haspopup="true" aria-expanded="false"><?php echo _("Links"); ?><span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="http://imslp.org/"><?php echo _("IMSLP"); ?></a></li>
										<li><a href="http://a.bestmetronome.com/"><?php echo _("Metronome"); ?></a></li>
										<li><a href="https://www.musictheory.net/"><?php echo _("Music theory"); ?></a></li>
									</ul>
								</li><!--/.dropdown for link -->
								<li><a href="index.php#contact"><?php echo _("Contact Me"); ?></a></li>
							</ul>
						</div><!--/.nav-collapse -->
				</nav>
			</div>
	<section class="welcome">
		<div class="container-fluid">
			<img src="images/keys.jpg" class="pull-right img-responsive keys" alt="key">
			<p class="h1"><?php echo _("Bach gave us God's word."); ?></p>
			<p class="h1"><?php echo _("Mozart gave us God's laughter."); ?></p>
			<p class="h1"><?php echo _("Beethoven gave us God's fire."); ?></p>
			<p class="h1"><?php echo _("God gave us Music that we might pray without words."); ?></p>
			<h2><em><?php echo _("Welcome to Ellen's Online Piano Studio"); ?></em></h2>
			<p><a class="btn btn-primary btn-md" href="#learn" role="button"><?php echo _("Learn more"); ?></a></p>
		</div>
	</section>

	<main>
		<div class="container-fluid learn-more">
			<div class="row learn-wrapper">
				<div class="col-sm-6">
					<p id="learn"><?php echo _("To many people, music is a powerful part of their personal life. Learning to play an instrument can help people to gain more concentration and release stress. From my years of teaching and personal learning experience, I can say that playing piano is not easy. But if you can start your piano lessons on the right path, it can save you time and energy and allow you to experience the joy of playing piano. The piano is different from other instruments. It is self-sufficient. It can create a melody and harmonize with chords at the same time. Also, unlike other instruments, a piano doesn't need to be tuned every time it is played. Learning to play the piano is also very helpful in developing a good ear for music and understanding music theory."); ?></p>
				</div>
			<div class="col-sm-6">
				<img class="piano img-responsive" src="images/mypiano.jpg" alt="my piano">
			</div>
			</div>

		</div>
	</main>
	<section>
		<div class="container">
			<h3 id="contact"><?php echo _("Contact me"); ?></h3>
			<!--Begin Contact Form-->
			<form id="contact-form" action="php/mailer.php" method="post">
				<div class="form-group">
					<label for="name"><?php echo _("Name"); ?><span class="text-danger">*</span></label>
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-user" aria-hidden="true"></i>
						</div>
						<input type="text" class="form-control" id="name" name="name" placeholder="Name">
					</div>
				</div>
				<div class="form-group">
					<label for="email"><?php echo _("Email"); ?><span class="text-danger">*</span></label>
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</div>
						<input type="email" class="form-control" id="email" name="email" placeholder="Email">
					</div>
				</div>
				<div class="form-group">
					<label for="subject"><?php echo _("Subject"); ?></label>
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-pencil" aria-hidden="true"></i>
						</div>
						<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
					</div>
				</div>
				<div class="form-group">
					<label for="message"><?php echo _("Message"); ?><span class="text-danger">*</span></label>
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-comment" aria-hidden="true"></i>
						</div>
						<textarea class="form-control" rows="5" id="message" name="message" placeholder="Message (2000 characters max)"></textarea>
					</div>
				</div>

				<!-- reCAPTCHA -->
				<div class="g-recaptcha" data-sitekey="6Lc58CETAAAAALOTf19eSEJpTk3dEdx8dF6j2oy9"></div>

				<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i><?php echo _("Send"); ?></button>
				<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i><?php echo _("Reset"); ?></button>
			</form>

			<!--empty area for form error/success output-->
			<div class="row">
				<div class="col-xs-12">
					<div id="output-area"></div>
				</div>
			</div>
		</div>
				</section>
		</div><!--/.sfooter-content -->
		<footer>
			<p>&copy;2016 Ellen Liu</p>
		</footer>
		</div><!-- container-->
	</body>
</html>
