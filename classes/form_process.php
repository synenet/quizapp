<?php 
	session_start();
	 require_once 'classes/users.php';
	  require_once 'classes/questions.php';
 	$id =  $_SESSION['user_id'];
 	if (empty($id)) {
 		# code...
 		header('Location:register.php');
 	}

 	$data = new Users;
 	$details = $data->get_user_details($id);

 	
 	foreach ($details as $detail) {
 		# code...
 		$username = $details->username;
 		$email = $details->email;
 		$fullname = $details->fullname;
 		//$lastname = $detail->lastname;

 	}

 	//QUESTION PROCESSING

 	//sets the type variable for each case
 	$post = $_POST;
 	if (isset($post['submit_html'])) {
 		$type = '1';
 		
 	}elseif(isset($post['submit_css'])){
 		$type = '2';
 	}elseif(isset($post['submit_php'])){
 		$type = '3';
 		//var_dump($post);
 	}elseif(isset($post['submit_js'])){
 		$type = '4';
 	}else{
 		$type = '0';
 	}

 	//defines variable for each process
 	if (!empty($post)) {
 		
 			
 		# code...
 		$q = $post['question'];
 		$option1 = $post['option1'];
 		$option2 = $post['option2'];
 		$option3 = $post['option3'];
 		$answer = $post['answer'];
 		$question = new Question ;
 		$make_question = $question->insert_question($q,$option1,$option2,$option3,$answer,$type);
 		echo $make_question;
 	}
 	
 	if (isset($_GET['delete'])) {
 		# code...
 		$question = new Question ;
 		$del_id = $_GET['qid'];
 		$question->delete_question($del_id);
 	}