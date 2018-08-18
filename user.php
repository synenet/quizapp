<?php 
require 'classes/form_process2.php';

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

 // 	if (!empty($_SESSION['alert'])) {
 // 		# code...
 // 		echo "<div class='mt-4 alert alert-danger alert-dismissible' role='alert'>";
 // 			echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	// 	<span aria-hidden="true">&times;</span>
	// 	<span class="sr-only">Close</span>
	// </button>';
 // 		echo $_SESSION['alert'];
 // 		echo "</div>";
 // 	}

 	 ?>

 <div class="row">

 	 <div class="col-md-2 left_panel text-center">
 	 	<p class="h4  mt-3">Profile</p>
 	 	<hr>
 	 	<img src="assets/images/005-boy.png" class="mb-2 mt-4" style="height:50px">
 	 	<p><em><?php echo '@'.$username; ?></em></p>
 	 	<small><?php echo $email; ?></small>
 	 	<p class="alert alert-success my-4">Your result is:<br><?php if (isset($_POST['submit'])) {
 	 		# code...
 	 		echo $sum."/$length"; 


 	 	} ?></p>

 	 	<h6>Rank</h6>
 	 	<p class="alert alert-primary">
 	 	<?php
 	 	$ranking = get_rank();
 	 	echo $ranking;
 	 	?>
 	 	</p>
 	 	<div>
 	 
 	 	</div>

 	</div>
 	<div class="right_panel col-md-10 mt-4 my-4">

 	<form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
 	<?php $questions = new Question;
	$q = $questions->get_questions();
	
		$index = 0;
 	 	foreach ($q as $quest) {
 	 	if ($quest->type =='1') {
		$qtype = 'HTML';
		}elseif ($quest->type =='2') {
			$qtype = 'CSS';
		}elseif ($quest->type =='3') {
			$qtype = 'PHP';
		}elseif ($quest->type =='4') {
			$qtype = 'JAVASCRIPT';
		}else{
			$qtype = '';
		}	
 	 	$index++;	
 		 echo'<div class="card my-3 "> 	
    	<div class="card-body">
        <h4 class="card-title">Question '.$index.'</h4>
        <h6 class="card-subtitle mb-2 text-muted">'.$qtype.'</h6>
        <p class="card-text">'.$quest->question.'</p>
		<fieldset class="form-group" name="group" value="qs'.$index.' ">     
		<div class="custom-control custom-radio">
		  <input type="radio" class="custom-control-input" value="1" id="input1'.$index.'" name="'.$index.'">
		  <label class="custom-control-label" for="input1'.$index.'">'.$quest->option1.'

		  </label>
		</div>
		

		
		<div class="custom-control custom-radio">
		  <input type="radio" class="custom-control-input" value="2" id="input2'.$index.'" name="'.$index.'" >
		  <label class="custom-control-label" for="input2'.$index.'" >'.$quest->option2.'</label>
		</div>
		

		
		<div class="custom-control custom-radio">
		  <input type="radio" class="custom-control-input" value="3" id="input3'.$index.'" name="'.$index.'">
		  <label class="custom-control-label" for="input3'.$index.'">'.$quest->option3.'</label>
		</div>
		</fieldset>
    </div>

	</div>';
		
 		 	}

?>
	<input type="submit" name="submit" class="btn btn-primary" value="Submit"/>
 	</form>



 			
 		
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


