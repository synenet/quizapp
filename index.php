<!DOCTYPE html>
<html>
<head>
	<title>Quiz App</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-theme.css">
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src ="assets/js/bootstrap.js"></script>
	<script type="text/javascript" src ="assets/js/bootstrap.bundle.js"></script>


</head>
<body>
<div class="wrapper">
	<div class="header">

		<nav class="navbar   navbar-dark navbar-default ">

			<a href="#" class="navbar-brand text-primary">QuizApp</a>
			<ul class="nav navbar navbar-right">
				<li class="nav-item"><a href="register.php?att=login" class="nav-link" >Login</a></li>
				<li class="nav-item"><a href="register.php?att=register" class="nav-link">Register</a></li>

			</ul>
			
		</nav>
	</div>

	<div class="main">
		<div class="container-fluid jumbotron">
			<div class="row highlight">
				<div class="col-md-4 left-highlight">
					<h3>Get a quick assessment to certify your professional skills</h3>
					<p> Become a well accredited software developer by taking our online test 
					within a few minutes and increase your chance of landing that dream job</p>
					<a href="#" class="btn btn-primary">Start Now</a>
				</div>

				<div class="col-md-8 right-highlight">
					b
				</div>
			</div>
		</div>

		<div class="container">
			
				<h3 class="text-center mb-4"> Take expert exams in these programmes</h3>
			
			
			<div class="row language px-4 my-4 py-4" style="background:#607d8b;color:#fff">
				
				<div class="col-md-3   "  >
					<h4 class="text-center sm-tx  mb-4">HTML</h4>
					<img src="assets/images/html.png" class="img-thumbnail sm-img rounded-circle img-fluid" >
					<p class="text-middle my-4 " style="max-width:200px">Hypertext Markup Language is the standard markup 
					language for creating web pages and web applications. With Cascading Style 
					Sheets and JavaScript, it forms a triad of 
					cornerstone technologies for the World Wide We.</p>
				</div>

				<div class="col-md-3">
					<h4 class="text-center sm-tx  mb-4">CSS</h4>
					<img src="assets/images/css.png" class="img-thumbnail sm-img rounded-circle img-fluid">
					<p class="text-middle my-4 " style="max-width:200px">Cascading Style Sheets is a style sheet language used for describing the presentation of a document written in a markup language like HTML. CSS is a cornerstone technology of the World Wide Web, alongside HTML and JavaScript. .</p>
				</div>

				<div class="col-md-3">
					<h4 class="text-center sm-tx  mb-4">PHP</h4>
					<img src="assets/images/php.png" class="img-thumbnail sm-img rounded rounded-circle img-fluid">
					<p class="text-middle my-4 " style="max-width:200px">PHP: Hypertext Preprocessor is a server-side scripting language designed for Web development, but also used as 
					a general-purpose programming language.</p>
				</div>

				<div class="col-md-3">
					<h4 class="text-center sm-tx  mb-4">JAVASCRIPT</h4>
					<img src="assets/images/js.png" class="img-thumbnail sm-img rounded-circle img-fluid">
					<p class="text-middle my-4 " style="max-width:200px">JavaScript, often abbreviated as JS, is a high-level, interpreted programming language. It is a language which is also characterized as dynamic, weakly typed, prototype-based and multi-paradigm .</p>
				</div>
				
			</div>
			
		</div>
	</div>

	<div >
		<?php 
			include 'views/footer.php';
		?>
	</div>
</div>




	
</body>
</html>