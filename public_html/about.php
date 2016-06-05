<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<!-- sets IE rendering to IE-EDGE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- sets viewport width to device width, scaling 1:1 -->
		<meta name="viewport" content="width=device-width, initial-scale=1">


		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
				integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css"
				integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

		<!-- OUR CUSTOM CSS -->
		<link rel="stylesheet" href="css/style.css" type="text/css">

		<!-- HTML5 shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

		<![endif]-->

		<!-- jQuery -->
		<script src="https://code.jquery.com/jquery-2.2.3.min.js"
				  integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
				  integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
				  crossorigin="anonymous"></script>
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
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
									  data-target="#collapse" aria-expanded="false" aria-controls="navbar">
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
									<a href="#about-piano" class="dropdown-toggle" data-toggle="dropdown" role="button"
										aria-baspopup="true" aria-expanded="false">About the Piano<span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a class="btn btn-default btn-sm" href="#find" role="button">Find the Right Piano</a>
										</li>
										<li><a class="btn btn-info btn-sm" href="#finger" role="button">Finger Position</a></li>
									</ul>
								</li><!--/.dropdown for about piano -->
								<li class="dropdown">
									<a href="#reading-music" class="dropdown-toggle" data-toggle="dropdown" role="button"
										aria-baspopup="true" aria-expanded="false">Reading music<span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="reading-music.php#tempo" class="btn btn-default btn-sm" role="button">Tempo</a></li>
										<li><a href="reading-music.php#rhythm" class="btn btn-info btn-sm" role="button">Rhythm</a></li>
										<li><a href="reading-music.php#notation" class="btn btn-success btn-sm" role="button">Music Notation</a></li>
										<li><a href="reading-music.php#key" class="btn btn-default btn-sm" role="button">Key Signatures</a></li>
									</ul>
								</li><!--/.dropdown for music theory -->
								<li class="dropdown">
									<a href="#link" class="dropdown-toggle" data-toggle="dropdown" role="button"
										aria-haspopup="true" aria-expanded="false">Links<span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="http://imslp.org/">IMSLP</a></li>
										<li><a href="http://a.bestmetronome.com/">Metronome</a></li>
										<li><a href="https://www.musictheory.net/">Music theory</a></li>
									</ul>
								</li><!--/.dropdown for link -->
								<li><a href="index.php#contact-me">Contact Me</a></li>
							</ul>
						</div><!--/.nav-collapse -->
					</div><!--nav container-->
				</nav>
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<p id="about-me"><strong>About me: </strong><em>Hello, this is Ellen! I started playing the piano
						at the age of five and have never stopped since. During my freshman year at university, I began to
						give piano lessons. After completing my bachelor's degree in piano performance in Taipei, Taiwan,
									I worked as a piano teacher and collaborative pianist. Later, I received my master's degree in
									piano performance and piano pedagogy from the University of Houston in Houston, Texas. I
									taught classes in group piano, music fundamentals and music appreciation at Lone Star College in Cypress, Texas. I have found that everywhere, both in the eastern and western world, there are plenty of people looking to learn the piano. Recently, I have also been training to become a web developer. I hope to
									incorporate my previous experiences into my new skills, in order to help people who are
									interested in learning to play the piano.</em></p>
						</div>
					</div>
				</div><!--/. container of about me -->
				<h2 class="about-piano" id="about"><em>Important tips about playing piano</em></h2>
				<p id="find" class="find_piano"><strong>Find the right piano</strong><br>Just as the golden rule of real
					estate is "Location, location, location!", the best way to master the piano is "Practice, practice,
					practice!" Because of this, as someone who is interested in starting piano lessons, picking the right piano is an important first step. A full-size, standard piano has eighty-eight keys; however, an
					acoustic piano can cost an arm and a leg. My suggestion is to get a weighted electronic
					keyboard with at least 61 keys, preferably one with a pedal. After getting a piano, it is time to start practicing
					with it!</p>
				<img class="roland img-responsive" src="images/roland.jpg" alt="keyboard">
				<p id="finger" class="finger_position"><strong>Finger position</strong><br>In my opinion, starting directly from the five-finger position is the most effective way to
					build a good foundation for learning. As all piano music requires the ten fingers to work together to
					create fine music, it is very important to have equal strength in all fingers(finger independence). Practicing with all fingers from the beginning will prepare you to play more complex pieces and simplify the path to mastering the piano. Please see
					the picture below, which shows the numbers assigned to each of the fingers. Once you've memorized these, take a look at the
					keyboard image above this paragraph. Notice the arrangement of the black keys: it is a two-three-two-three
					pattern. Surrounding each group of two black keys group are three white keys. From left to right, these are the notes C, D, and E. The four white keys
					surrounding the group of three black keys are F, G, A, and B.<br>Put your right hand finger number 1 on the middle C and your left hand finger number
					5 on the next C to the left. Now rest your other fingers on the white keys next to each other. You are now in five finger position in the key of C major. Play around with this position, and have fun!</p>
				<img class="fingers img-responsive" src="images/fingering.jpg" alt="fingers">
			</div><!--/.sfooter-content -->
			<footer>
				<p>copyright</p>
			</footer>
		</div><!-- container-->
	</body>