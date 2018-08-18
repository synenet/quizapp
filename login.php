<?php 

//require 'classes/database.php';

//$connect = new Database;

//echo $connect->connect();

//var_dump($connect->select('test','1')) ;

require 'classes/database.php';

 $connect = new Database;

// echo  $connect->showClass();

 $a= $connect->verify_email('sasonxg@gmail.com');
 var_dump($a);

 ?>