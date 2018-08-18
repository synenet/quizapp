<?php
require_once'classes/database.php';

class USERS extends Database
{
function __construct(){
   // echo "The user class exists and extends the Database class";
}


public function register($fullname,$username,$email,$password){
		
		if ($this->verify_email($email)) {
		$db = $this->connect();
	  	$newUser = $db->prepare("INSERT INTO users (fullname, username, email, password,access, html_rank, css_rank, php_rank, js_rank) VALUES (:fullname, :username, :email, :password,:access, :html_rank, :css_rank, :php_rank, :js_rank)");
 	     $newUser->execute([
        ':fullname' => $fullname,
        ':username' => $username,
        ':password' => password_hash($password, PASSWORD_DEFAULT),
        ':email' => $email,
        ':access' => '1',
        ':html_rank'=> '0', 
        ':css_rank'=> '0',
        ':php_rank' => '0',
        ':js_rank' => '0'
      ]);

      return 'You have been registered';
			}else{
				return 'You are already registered';
			}	

      


}


public function login ($email, $password){
		$db2 = $this->connect();
		$data = $db2->prepare("SELECT * FROM users WHERE email = :email  LIMIT 1");
		$data_exec = $data->execute([":email" => $email]);

		if ($data_exec) {
			$userdata = $data->fetch(PDO::FETCH_OBJ);
			if ($userdata) {
				if (password_verify($password,$userdata->password)) {
				session_start();
				$acc = $this->get_access_level($userdata->id);

				if ($acc == '0') {						
					$_SESSION['user_id'] = $userdata->id;
					header('Location: admin.php');
				}else{
					$_SESSION['user_id'] = $userdata->id;
					header('Location: user.php');
				}

			}else{
				echo "Incorrect Password";
			}
			}else{
				echo "Incorrect details";
			}


		}else{
			echo "Incorrect Details";
		}


}

public   function get_user_details($id){
	$details = $this->select('users',$id);

	return $details;
}

public function get_access_level($id){
	$access = $this->select('users',$id);

	foreach ($access as $ac) {
		$access_level = $access->access;
		# code...
	}

	return $access_level;
}

public function insert_user_rank($rank,$id){
	$db2 = $this->connect();

	$data = $db2->prepare("UPDATE users SET rank =:rank  WHERE id = :id ");
		$data->execute( [":id"=> $id,":rank" => $rank]);

		return true;
}


}


?>