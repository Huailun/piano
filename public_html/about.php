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
	<body class="sfooter">
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
								<li class="active"><a href="index.php">Home</a></li>
								<li><a href="#about-me">About Me</a></li>
								<li class="dropdown">
									<a href="#about-piano" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-baspopup="true" aria-expanded="false">About Piano<span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a class="btn btn-default btn-sm" href="#find" role="button">Find the right piano</a></li>
										<li><a class="btn btn-info btn-sm" href="#finger" role="button">Finger Position</a></li>
									</ul>
								</li><!--/.dropdown for about piano -->
								<li class="dropdown">
									<a href="#reading-music" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-baspopup="true" aria-expanded="false">Reading music<span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="#tempo" class="btn btn-default btn-sm" role="button">Tempo</a></li>
										<li><a href="#rhythm" class="btn btn-info btn-sm" role="button">Rhythm</a></li>
										<li><a href="#notation" class="btn btn-success btn-sm" role="button">Music notation</a></li>
										<li><a href="#key" class="btn btn-default btn-sm" role="button">Key signatures</a></li>
									</ul>
								</li><!--/.dropdown for music theory -->
								<li class="dropdown">
									<a href="#link" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-baspopup="true" aria-expanded="false">Link<span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="http://imslp.org/">IMSLP</a></li>
										<li><a href="http://a.bestmetronome.com/">Metronome</a></li>
										<li><a href="https://www.musictheory.net/">Music theory</a></li>
									</ul>
								</li><!--/.dropdown for link -->
								<li><a href="#contact-me">Contact Me</a></li>
							</ul>
						</div><!--/.nav-collapse -->
					</div><!--nav container-->
				</nav>
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<p id="about-me"><strong>About me: </strong><em>Hello, this is Ellen. I have started to play piano at age of five and never stopped ever since. From the freshman year at university, I began to give piano lessons. After getting my bachelor degree in piano performance in Taipei, Taiwan, I worked as a piano teacher and collaborative pianist. Later, I received my master degree in both piano performance and piano pedagogy from University of Houston in Houston, Texas. I taught class piano, music fundamentals and music appreciation in a community college at Cypress, Texas. I found that no matter in eastern or western world, there are plenty of people looking for learning piano. As a recent career change to be a web-developer, I hope to incorporate my previous experiences with the new skill I have learned to help people who are interested in learning piano.</em></p>
						</div>
					</div>
				</div><!--/. container of about me -->
					<h2 class="about-piano"><em>About piano</em></h2>
					<p id="find" class="find_piano"><strong>Find the right piano:</strong><br>Like the golden rule of real estate is "Location, Location, Location", the best way to master in piano is "Practice, Practice, Practice". Because of this, one who is interested in starting a piano lesson, pick the right piano is the important first step. The full size of a standard piano is consist of eighty-eight keys. However, an acoustic piano can cost most people an arm and a leg. My suggestion is to get a weighted electronic keyboard with at least 61 keys, preferrably with a pedal. After getting a piano, it is time to start play with it!</p>
					<img class="roland img-responsive" src="images/roland.jpg" alt="keyboard">
					<p id="finger" class="finger_position"><strong>Finger position:</strong><br>While sitting in front of your new piano, in my opinion, staring from the pattern of five-finger position is the most effective way to build a good fundation in piano learning. Because all piano music need ten fingers to work together to create fine music. It is very important to have equal strength of all fingers when playing piano. Working on all fingers as soon as possible will eliminate many potential obstacles in playing piano. Please see the picture below to see how fingers numbers in piano. After knowing the finger numbers, there is a keyboard right above this paragraph. Find the pattern of blacks on piano, it is a two-three-two-three pattern. The three white keys that cover two black keys group are named C-D-E, and the four white keys that cover three black keys group are F-G-A-B. Put you right hand number 1 on c and your left hand number 5 on the other C to the left. Then restYou are right on five finger position in </p>
					<img class="fingers img-responsive" src="images/fingering.jpg" alt="fingers">
				</div><!--/.sfooter-content -->
				<footer>
					<p>copyright</p>
				</footer>
			</div><!-- container-->
	</body>