<?php 
require_once 'classes/database.php';

/**
* 
*/
class Question  extends Database
{
	
	function __construct()
	{
		# code...
	}

	public function insert_question($que,$option1,$option2,$option3,$answer,$type){
		//die(var_dump($type));
		$db = $this->connect();
		$quesExist = $this->check_question_exist($que);
		if ($quesExist == true) {
			$newQuestion = $db->prepare("INSERT INTO test (question, option1, option2, option3, answer, type) VALUES (:question, :option1, :option2, :option3, :answer, :type)");
 	    	$newQuestion->execute([
	        ':question' => $que,
	        ':option1' => $option1,
	        ':option2' => $option2,
	        ':option3' => $option3,
	        ':answer'=> $answer, 
	        ':type'=> $type
	      ]);

 	    if ($newQuestion) {
 	    	# code...
 	    	$alert = 'Question successfully inserted';
			//session_start();
			$_SESSION['alert'] = $alert;
			return;
 	    }
		}else{
			$alert = 'Question already exist';
			//session_start();
			$_SESSION['alert'] = $alert;
			return ;
		}
		
	}

	public function check_question_exist($q){

		$db = $this->connect($q);
		$exist = $db->prepare("SELECT * FROM test WHERE question = :question  LIMIT 1");
    	$exist->execute([":question" => $q ]);

    	 if (sizeof($exist->fetchAll()) < 1) {
    	 	return true;
    	 }else{
    	 	return false;
    	 }

	}

	public  function get_questions(){
		//$db = $this->connect();
		$quest = $this->selectAll('test');
		return $quest;
	}

	public function delete_question($id){
		$del = $this->delete('test',$id);
		if ($del) {

			$alert = 'Record deleted successfully';
			//session_start();
			$_SESSION['alert'] = $alert;
			return ;
			# code...
		}

	}


}

 ?>