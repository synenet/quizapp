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
 		$my_id = $details->id;
 		$username = $details->username;
 		$email = $details->email;
 		$fullname = $details->fullname;
 		$rank = $details->rank;
 		//$lastname = $detail->lastname;

 	}

 	function get_rank(){
 		$id =  $_SESSION['user_id'];
		$data = new Users;
		$details = $data->get_user_details($id);	
		foreach ($details as $detail) {
 		# code...
 		$my_id = $details->id;
 		$username = $details->username;
 		$email = $details->email;
 		$fullname = $details->fullname;
 		$rank = $details->rank;
 		//$lastname = $detail->lastname;

 	}

 		if ($rank == '1') {
 			$my_rank = 'Beginner';
 		}elseif ($rank == '2') {
 			$my_rank = 'Intermediate';
 		}elseif ($rank == '3') {
 			$my_rank = 'Advanced';
 		}else{
 			$my_rank = 'No ranking available';
 		}

 		return $my_rank;
 	}

 	//QUESTION PROCESSING

 	//sets the type variable for each case
 	 $questions = new Question;
	$q = $questions->get_questions();
	foreach ($q as $qu) {
		# code...
		$answer[] = $qu->answer;
	}
	$length = count($_POST) -1;
	//$new_answer = array_diff($_POST, ["submit"]);
	$new_post = array_splice($_POST,0,$length);

	//var_dump($new_post);
	
	if (isset($_POST['submit'])) {
		# code...
		// echo"<pre>";
		// var_dump($answer);
		// echo "</pre>";
		// echo"<pre>";
		// var_dump($new_post);
		// echo "</pre>";
		function compare($arr1,$arr2){
			$result= [];
			foreach ($arr1  as $key => $value) {
				# code...
				if ($arr1[$key] == $arr2[$key]) {
					# code...
					//echo "Correct";
					 array_push($result, '1');

				}else{
					//echo "Incorrect";
					 array_push($result, '0');
				}
			}

			//$result = [$correct,$fail];
			return $result;
			

		}

		$compare = compare($answer,$new_post);
		$sum = array_sum($compare);

		function process_res($sum){
		$id =  $_SESSION['user_id'];
		$data = new Users;
		$details = $data->get_user_details($id);	
		foreach ($details as $detail) {
 		# code...
 		$my_id = $details->id;
 		$username = $details->username;
 		$email = $details->email;
 		$fullname = $details->fullname;
 		$rank = $details->rank;
 		//$lastname = $detail->lastname;

 	}
			if ($sum < 5) {
				# code...
				$rank = '1';
			}elseif ($sum > 5 AND $sum < 10 ) {
				# code...
				$rank = '2';
			}elseif ($sum > 10 AND $sum <= 15) {
				# code...
				$rank = '3';
			}
		
		$data->insert_user_rank($rank,$my_id);
		}


		//echo"<h2>". $sum."</h2>";
		//var_dump($compare);
		process_res($sum);

	}