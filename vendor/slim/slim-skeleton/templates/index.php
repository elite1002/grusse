<!DOCTYPE html>
<html lang="zh-Hant">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Grusse</title>

	<!-- Bootstrap Core CSS -->
	<link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="/vendor/font-awesome/scss/font-awesome.scss" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<!-- Plugin CSS -->
	<link rel="stylesheet" href="/vendor/magnific-popup/magnific-popup.css" >
	<!-- My CSS -->
	<link rel="stylesheet" type="text/css" href="/css/mystyle.css">
	<link rel="stylesheet" type="text/css" href="/css/main.css">
	<!-- Theme CSS -->
	<link rel="stylesheet" href="/css/creative.css" >
</head>


<body id="page-top"> 
	<!--navbar -->
	<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
				</button>
				<a style = "margin-right: 20px; " class="navbar-brand page-scroll" href="#page-top"> Grusse </a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a class="page-scroll" href="#more"> Learn More</a></li>
					<li><a class="page-scroll" href="#cards"> Cards </a></li>
					<li><a class="page-scroll" href="#contact">Contact</a></li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>

	<header >
		<div class="row">
			<div class="col-lg-7">	
				<div class="row main">
					<br>
					<br>

					<h1 style="color: #BD3403; font-size:85px;"> Grüße  </h1>
					<h2 style="color: black;">
						Greeting from Everywhere.
					</h2>	
				</div>				

			</div>

			<div class="col-lg-5">
				<div class="row main">
					<div class="main-login main-center">
						<h1 class="title" style="color: black; font-family: 'Open Sans', 'Helvetica Neue', Arial, sans-serif;">Join now!</h1>
						<hr>
						<form class="form-horizontal" method="post" action="#">

							<div class="form-group">
								
								<div class="cols-sm-10">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
										<input type="text" class="form-control"  name="name" id="name"  placeholder="Full Name"/>
									</div>
								</div>
							</div>

							<div class="form-group">
								
								<div class="cols-sm-10">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
										<input type="text" class="form-control" name="email" id="email"  placeholder="Email"/>
									</div>
								</div>
							</div>

							<div class="form-group">
								
								<div class="cols-sm-10">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
										<input type="text" class="form-control" name="username" id="username"  placeholder="Username"/>
									</div>
								</div>
							</div>

							<div class="form-group">

								<div class="cols-sm-10">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
										<input type="password" class="form-control" name="password" id="password"  placeholder="Password"/>
									</div>
								</div>
							</div>

							<div class="form-group">
								
								<div class="cols-sm-10">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
										<input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Confirm Password"/>
									</div>
								</div>
							</div>

							<div class="form-group ">
								<button type="submit" class="btn btn-primary  btn-block login-button">Register</button>
								<button type="button" class="btn btn-mine btn-block login-button" onclick="window.location.href='/login.php'">Log In</button>
							</div>

						</form>
					</div>
				</div>
			</div>
		</div>
		<!--copy-->


	</header>

	<!--Why Grusse-->
	<section class="bg-primary" id="more">
		<div class ="container">
			<div class="row little_transparent">
				<div class="col-lg-8 col-lg-offset-2 text-center">
					<h1 class="section-heading">What is Grüße?</h1>
					<hr class="light">
				</div>
				<div class="col-lg-8 col-lg-offset-2">
					<p>
						'Grüße' means 'Regards' in Germany.<br><br>
						Modern poeple seldom use this word because we no longer use letters to communicate. <br>
						We are too busy to take up a pen.<br>
						We somehow forget how it feels to receive a postcard from a friend. <br><br>
						Technology doesn't mean we have to give up something old,<br>
						We preserve what we want,<br><br>

						From here, You can share your love to others, <br>
						And get others' support when needed.
						
						<footer> Regards<br>
							- A old man once told me</footer>
						</p>
					</blockquote>
				</div>

			</div>
		</div>
	</section>


	<!--PostCard-->
	<section class="bg-dark thumbnails" id="cards">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 text-center"> 
					<h1 class="section-heading">Postcards of the day</h1>
					<hr class="dark">
				</div>
				<!--Green one-->
				<div class="col-lg-6 little_transparent "> 

					<img class="img-thumbnail" src="/img/BGI_NY.jpg">
				</div>
				<!--Blue one-->
				<div class="col-lg-6 little_transparent" >
					<p class="lead">
						So if you're out there I swear to be good to you<br>
						But I'm done lookin', for my future someone<br>
						Cause when the time is right
						<br>
						You'll be here, but for now
						<br>
						Dear no one, this is your love song
					</p>
					<footer>  </footer>
				</div>
			</div>
		</div>
	</div>
</section>


<!--Contact US-->
<section class="bg-primary" id="contact">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 text-center"> 
				<h1 class="section-heading"> Who are we? </h1>
				<hr class="light">
				<p>
					Grusse.com<br>
					<br>
					Taiwan x Singapore.<br>
					<br>
					North Carolina State University<br>
					<br>
					#HackNC<br>
				</p>
			</div>
			<div class="col-lg-4 col-lg-offset-2 text-center">
				<i class="fa fa-phone fa-3x sr-contact"></i>
				<p>626-224-5973</p>
			</div>
			<div class="col-lg-4 text-center">
				<i class="fa fa-envelope-o fa-3x sr-contact"></i>
				<p> tcheng6@ncsu.edu </a></p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 text-center">  </div>
		</div>
	</div>
</section>

<!-- jQuery -->
<script src="/vendor/jquery/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="/vendor/scrollreveal/scrollreveal.min.js"></script>
<script src="/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<!-- Theme JavaScript -->
<script src="/js/creative.min.js"></script>
</body>
</html>