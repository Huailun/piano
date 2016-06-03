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
		<title>PWP</title>
	</head>
	<body class="sfooter ">
		<div class="sfooter-content">

			<!-- begin bootstrap navbar -->
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="container-fluid">
				<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
					<div class="container">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false" aria-controls="navbar">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="#featured">Ellen's Online Piano Studio</a>
						</div><!--/.navbar-header -->
						<div class="collapse navbar-collapse" id="collapse">
							<!-- Collect the nav links and other content for toggling -->
							<ul class="nav nav-pills navbar-right">
								<li class="active"><a id="index.php">Home</a></li>
								<li><a href="about.php">About Me</a></li>
								<li class="dropdown">
									<a href="#about-piano" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-baspopup="true" aria-expanded="false">About Piano<span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a class="btn btn-default btn-sm" href="#find" role="button">Find the right piano</a></li>
										<li><a class="btn btn-info btn-sm" href="#finger" role="button">Finger Position</a></li>
									</ul>
								</li><!--/.dropdown for about piano -->
								<li class="dropdown">
									<a href="reading-music.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-baspopup="true" aria-expanded="false">Reading music<span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="#tempo">Tempo</a></li>
										<li><a href="#rhythm"></a></li>
										<li><a href="#notation">Music notation</a></li>
										<li><a href="#key">Key signatures</a></li>
									</ul>
								</li><!--/.dropdown for music theory -->
								<li class="dropdown">
									<a href="#link" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-baspopup="true" aria-expanded="false">Link<span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="http://imslp.org/">IMSLP</a></li>
										<li><a href="http://a.bestmetronome.com/">me</a></li>
										<li><a href="https://www.musictheory.net/">Music theory</a></li>
									</ul>
								</li><!--/.dropdown for link -->
								<li><a href="#contact-me">Contact Me</a></li>
							</ul>
						</div><!--/.nav-collapse -->
					</div><!--nav container-->
				</nav>
	<section class="welcome">
		<div class="container-fluid">
			<p class="h1">Bach gave us God's word.</p>
			<p class="h1">Mozart gave us God's laughter.</p>
			<p class="h1">Beethoven gave us God's fire.</p>
			<p class="h1">God gave us Music that we might pray without words.</p>
			<h2><em>Welcome to Ellen's Online Piano Studio</em></h2>
			<p><a class="btn btn-primary btn-md" href="#learn" role="button">Learn more</a></p>
		</div>
	</section>

	<main>
		<div class="container-fluid learn-more">
			<div class="row">
				<div class="col-md-6">
					<p class="pull-left" id="learn">To many people, music is a powerful part in their personal life. Learning to play an instrument can help people to gain more concentration and release stress. However, from years of teaching and my personal learning experiences, playing piano is not easy. But, if people can start their piano lesson in a right path, it can save tons of time and energy and enjoy the happiness of playing piano. Different with other instruments, piano is self-sufficient. It can create melody and chords at the same time. Also, not like other instruments, people don't need to tune their piano every time before they play on it. Piano is also very helpful to build good music ears and understand how music system works.</p>
				</div>

				<img class="piano pull-right img-responsive" src="images/mypiano.jpg" alt="my piano">
			</div>

		</div>
	</main>
	<section>
		<div class="container">
			<h3 id="contact">Contact me</h3>
		<form class="form-horizontal" role="form" method="post" action="index.php" id="contact-me">
			<div class="form-group">
				<label for="name" class="col-sm-2 control-label">Name</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="">
					</div>
			</div>
				<div class="form-group">
					<label for="email" class="col-sm-2 control-label">Email</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
					</div>
				</div>
				<div class="form-group">
					<label for="message" class="col-sm-2 control-label">Message</label>
					<div class="col-sm-10">
						<textarea class="form-control" rows="4" name="message"></textarea>
					</div>
				</div>
				<div class="form-group">
					<label for="human" class="col-sm-2 control-label">right hand + left hand = ?</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-10 col-sm-offset-2">
						<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-10 col-sm-offset-2">
						<! Will be used to display an alert to the user>
					</div>
				</div>
			</form>
		</div>
				</section>
		</div><!--/.sfooter-content -->
		<footer>
			<p>copyright</p>
		</footer>
		</div><!-- container-->
	</body>
