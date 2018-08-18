<?php 
require 'classes/form_process.php';
	
 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-theme.css">
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src ="assets/js/bootstrap.js"></script>
	<script type="text/javascript" src ="assets/js/bootstrap.bundle.js"></script>

	<title><?php echo $fullname." ". "homepage"; ?></title>
</head>
<body>
<div class="wrapper">
	<?php 

include'views/header.php';



 ?>

 <div class="main container-fluid">
 
 	<?php 

 	if (!empty($_SESSION['alert'])) {
 		# code...
 		echo "<div class='mt-4 alert alert-danger alert-dismissible' role='alert'>";
 			echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		<span class="sr-only">Close</span>
	</button>';
 		echo $_SESSION['alert'];
 		echo "</div>";
 	}

 	 ?>

 <div class="row">

 	 <div class="col-md-2 left_panel text-center">
 	 	<p class="h4  mt-3">Profile</p>
 	 	<hr>
 	 	<p class=" my-2 text-bold text-success">Admin</p>
 	 	
 	 	<img src="assets/images/006-user.png" class="mb-2 mt-4" style="height:50px">
 	 	<p><em><?php echo '@'.$username; ?></em></p>
 	 	<small><?php echo $email; ?></small>
 	 	<p><?php echo $fullname; ?></p>

 	</div>
 	<div class="right_panel col-md-10 mt-4">
 		<div class="container-fluid">
 			<div class="row">
 			<div class="panel panel-default  col-md-6">
 			<div class="panel-heading">
 				<h6 class="panel-title p-2"> PHP Question</h6>
 			</div>
 			<div class="panel-body">
 				<form class=" text-center" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
 					<textarea name="question" class="form-control mb-4">
 						
 					</textarea>
 					<div class="form-row">
 						<input type="text" name="option1" class="col form-control mb-4 mr-2" placeholder="option1">
 						<input type="text" name="option2" class="col form-control mb-4 mr-2" placeholder="option2">
 						<input type="text" name="option3" class="col form-control mb-4 mr-2" placeholder="option3">
 						 <select class="form-control m4-4 col" name="answer" >
 							<option value="1">A</option>
 							<option value="2">B</option>
 							<option value="3">C</option>
 						</select>
 					</div>
 					<input type="submit" name="submit_php" class="btn btn-primary mb-4" value="Submit" />
 					
 				</form>
 			</div>
 		</div>	
 		<div class="panel panel-default col-md-6">
 			<div class="panel-heading">
 				<h6 class="panel-title p-2"> HTML Question</h6>
 			</div>
 			<div class="panel-body">
 				<form class=" text-center" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
 					<textarea name="question" class="form-control mb-4">
 						
 					</textarea>
 					<div class="form-row">
 						<input type="text" name="option1" class="col form-control mb-4 mr-2" placeholder="option1">
 						<input type="text" name="option2" class="col form-control mb-4 mr-2" placeholder="option2">
 						<input type="text" name="option3" class="col form-control mb-4 mr-2" placeholder="option3">
 						 <select class="form-control m4-4 col" name="answer" >
 							<option value="1">A</option>
 							<option value="2">B</option>
 							<option value="3">C</option>
 						</select>
 					</div>
 					<input type="submit" name="submit_html" class="btn btn-primary mb-4" value="Submit" />
 					
 				</form>
 			</div>
 		</div>
 			</div>
 		</div>
 		

 		 <div class="container-fluid mb-4 mt-4">
 			<div class="row">
 				<div class="panel panel-default col-md-6">
 			<div class="panel-heading">
 				<h6 class="panel-title p-2"> JAVASCRIPT Question</h6>
 			</div>
 			<div class="panel-body">
 				<form class=" text-center" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
 					<textarea name="question" class="form-control mb-4">
 						
 					</textarea>
 					<div class="form-row">
 						<input type="text" name="option1" class="col form-control mb-4 mr-2" placeholder="option1">
 						<input type="text" name="option2" class="col form-control mb-4 mr-2" placeholder="option2">
 						<input type="text" name="option3" class="col form-control mb-4 mr-2" placeholder="option3">
 						<select class="form-control m4-4 col" name="answer" >
 							<option value="1">A</option>
 							<option value="2">B</option>
 							<option value="3">C</option>
 						</select>
 					</div>
 					<input type="submit" name="submit_js" class="btn btn-primary mb-4" value="Submit" />
 					
 				</form>
 			</div>
 		</div>	
 		<div class="panel panel-default col-md-6">
 			<div class="panel-heading">
 				<h6 class="panel-title p-2"> CSS Question</h6>
 			</div>
 			<div class="panel-body">
 				<form class=" text-center" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
 					<textarea name="question" class="form-control mb-4">
 						
 					</textarea>
 					<div class="form-row">
 						<input type="text" name="option1" class="col form-control mb-4 mr-2" placeholder="option1">
 						<input type="text" name="option2" class="col form-control mb-4 mr-2" placeholder="option2">
 						<input type="text" name="option3" class="col form-control mb-4 mr-2" placeholder="option3">
 						<select class="form-control m4-4 col" name="answer" >
 							<option value="1">A</option>
 							<option value="2">B</option>
 							<option value="3">C</option>
 						</select>
 						<!-- <input type="text" name="answer" class="col form-control mb-4 mr-2" placeholder="option4"> -->
 					</div>
 					<input type="submit" name="submit_css" class="btn btn-primary mb-4" value="Submit" />
 					
 				</form>
 			</div>
 		</div>
 			</div>
 		</div>
 		<div class="row">
 			<div class="col-md-10 mx-4 my-4">
 				<h4 class="pb-2">List of Questions</h4>
 				<table class="table table-striped">
			<thead>
				<tr>
					<td>ID</td>
					<td>Question</td>
					<td>Option 1</td>
					<td>Option 2</td>
					<td>Option 3</td>
					<td>Action</td>
				</tr>
			</thead>
			<tbody>	
				<?php $questions = new Question;
				$q = $questions->get_questions();
				// echo "<pre>";
				// var_dump($q);
				// echo "</pre>";

				$index = 0;
				foreach ($q as $question) {
				$index++;
				echo"<tr>";
				echo "<td>".$index."</td>";
				echo "<td>".$question->question."</td>";
				echo "<td>".$question->option1."</td>";
				echo "<td>".$question->option2."</td>";
				echo "<td>".$question->option3."</td>";
				echo "<td><form method='GET' action='".$_SERVER['PHP_SELF']."'>".
				"<input type='hidden' name='qid' value='$question->id'/>
				<input type='submit' name='delete' value='Delete' class='btn btn-danger '/>
				</form></td>";
				echo "</tr>";
				
				
			}

				?>
				
		</tbody>	
		</table>
 			</div>
 			
 		</div>
 			
 		
 	</div>
 </div>

<!--  	Display the list of available questions -->
 	


 </div>

 <div class="footer">
 		<?php 
 		include 'views/footer.php';
 	 ?>
 </div>
</div>

</body>
</html>


