<!DOCTYPE html>
<html lang="zh-Hant">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Log in to Grusse</title>

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
	
	<style type="text/css"> 	
	section {
    min-height: 100%;
    background-size: cover;
    background-image:url('/img/cards2epic.jpg') ;
    }

    a:hover, a:focus{
    	color: black;
    }

    </style>
</head>

<body> 
	<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<a style = "margin-right: 20px; " class="navbar-brand page-scroll" href="/"> Grusse </a>
			</div>
		</div>
		<!-- /.container-fluid -->
	</nav>

	<section>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 text-center ">
					<h1 style="margin-top: 35px">Log in to <span style="color: #BD3043;">Grusse</span></h1>
					<div class="form-group col-lg-8 col-lg-offset-2 ">
						<form class="form-horizontal form-primary" method="post" action="#">						
							<div style="margin-top: 45px" class="input-group">
								<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
								<input type="text" class="form-control" name="name" id="username"  placeholder="Username"/>
							</div>
							<div style="margin-top: 30px" class="input-group">
								<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
								<input type="password" class="form-control" name="email" id="password"  placeholder="Password"/>
							</div>
							<div style="margin-top: 40px">
								<button type="button" type="submit" class="btn btn-primary ">Sign in</button><br>
								<br>
								<a href=""> Forget your password? </a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	


	<!-- jQuery -->
	<script src="/vendor/jquery/jquery.min.js"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>