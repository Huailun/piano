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
								<li><a href="about.php">About Me</a></li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About Piano<span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a class="btn btn-default btn-sm" href="about.php#find" role="button">Find the right piano</a></li>
										<li><a class="btn btn-info btn-sm" href="about.php#finger" role="button">Finger Position</a></li>
									</ul>
								</li><!--/.dropdown for about piano -->
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Reading music<span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="reading-music.php#tempo">Tempo</a></li>
										<li><a href="reading-music.php#rhythm">Rhythm</a></li>
										<li><a href="reading-music.php#notation">Music notation</a></li>
										<li><a href="reading-music.php#key">Key signatures</a></li>
									</ul>
								</li><!--/.dropdown for music theory -->
								<li class="dropdown">
									<a href="#link" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Links<span class="caret"></span></a>
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
		<main>
			<h3>Reading Music</h3>
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<p id="tempo"><strong>Tempo</strong> is as important to music as a heart beat is to a person. Playing music in a steady tempo makes music flow smoothly. Tempo marks, in music notation, are in Italian. From Larghissimo to Pretissimo, there is a range of terms describing the slowest tempo to the fastest. Another way to express tempo is as beats per minute, or BPM.</p>
							</div>
								<img src="images/tempo.jpg" alt="tempo" class="tempo img-responsive pull-right">
					</div>
				</div><!--container of tempo -->
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<p id="rhythm"><strong>Rhythm</strong> is formed by the division of the note's value. There are two ways to divide a note. Dividing by two is used most often, followed by dividing by three. The different types of division are used to give music a distinct feeling in its movement.</p>
							</div>
								<img src="images/rhythm.png" alt="rhythm" class="rhythm img-responsive">
						</div>
					</div><!--container of rhythm-->
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<p id="notation"><strong>Music Notation:</strong>Music notes are arranged on a structure of five horizontal lines, which is called a staff. Between these lines, there are four spaces. The lines and spaces are counted from bottom to top, from the first line to the fifth line and the first space to the fourth space.<br>In each clef, the notes assigned to the lines and spaces are different. The most common clefs are the treble clef and the bass clef. The treble clef begins on the second line of the staff, which is a G note, and the bass clef starts on the fourth line, which indicates an F note.<br>Piano music is typically written on a grand staff, which consists of a treble clef (top) joined to a bass clef (bottom) in order to provide notation for both hands.</p>
							</div>
								<img src="images/images.png" alt="staff" class="clefs img-responsive">
						</div>
					</div><!--container of notation-->
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<p class="pull-left" id="key"><strong>Key signatures:</strong>There are fifteen major and fifteen minor keys in a well-tempered tuning system. Different keys can add different colors to a piece of music. Except for C major and A minor, all keys need to be marked with key signatures. Recognizing which key a piece of music is written in is essential to playing it correctly. There are seven sharps (#) and seven flats (b) in a key signature. They come with a fixed order and add up from one to seven. The order of the sharps is FCGDAEB(Father Charles Goes Down And Ends Battle.) Flats go in the reverse order, BEADGCF(Battle Ends And Down Goes Charles Father).</p>
							</div>
								<img src="images/circle-of5th.jpg" alt="circle-of-5th" class="circle img-responsive pull-right">
						</div>
					</div>
		</div>
		</main>
		</div><!--/.sfooter-content -->

		<footer>
			<p>copyright</p>
		</footer>
	</body>