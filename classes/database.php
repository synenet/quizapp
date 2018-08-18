<?php 

//require 'classes/config.php';

/**
* DATABSE CLASS
*/
class Database
{
	
	public $db;
	function __construct()
	{
		
		# code...
	try {
   // $db = new PDO("mysql:dbname=findworka;host=127.0.0.1", "root", "root");
    $db = new PDO("mysql:dbname=quizapp;host=localhost","root", "");

  		} catch(PDOException $e) {
    die('Db connection error: '. $e->getMessage());
  		}


	}



	public function connect(){

		try {
   // $db = new PDO("mysql:dbname=findworka;host=127.0.0.1", "root", "root");
    $db2 = new PDO("mysql:dbname=quizapp;host=localhost","root", "");

  		} catch(PDOException $e) {
    die('Db connection error: '. $e->getMessage());
  		}
  		return $db2;
		//return 'Connected successfully';
	}


	public function select($table, $ref){
	    //$this->connect();
	    $db2 = $this->connect();
		$data = $db2->prepare("SELECT * FROM $table WHERE id = :id LIMIT 1");
		$data->execute([":id" => $ref]);
		$userdata = $data->fetch(PDO::FETCH_OBJ);

		return $userdata;
		//return $db2;
	}

	public function selectAll($table){
		$db2 = $this->connect();
		$data = $db2->query("SELECT * FROM $table ");
		
		$userdata = $data->fetchAll(PDO::FETCH_OBJ);

		return $userdata;
		//return $db2;
	}

	public function update($table, $update_field, $update_data, $id){
	    //$this->connect();
	    $db2 = $this->connect();
		
		$data = $db->prepare("UPDATE $table SET $update_field =:data_set  WHERE id = :id ");
		$data->execute( [":id"=> $id,":data_set" => $update_data]);

		return true;
		//return $db2;
	}

		public function delete($table, $id){
	    //$this->connect();
	    $db2 = $this->connect();
		
		$data = $db2->prepare("DELETE FROM $table  WHERE id = :id ");
		$data->execute( [":id"=> $id]);

		return true;
		//return $db2;
	}

	public function verify_email($email){
		$db = $this->connect();

		$data = $db->prepare("SELECT * FROM users WHERE email = :email LIMIT 1");
		$data->execute([":email" => $email]);
		$userdata = $data->fetch(PDO::FETCH_OBJ);
		if (!empty($userdata)){
			return false;
		}else{
			return true;
		}
		
	}


}

 ?>