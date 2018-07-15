<?php
   require "config.php";
   class LoginRegistration{
   	
   	function __construct(){
   	    	$database = new DatabaseConnection(); 
   	}


   	public function registerUser($fname,$uname,$pass,$phoneNo){
   		global $pdo;
   		$query  = $pdo->prepare("SELECT id FROM vy_users WHERE username = ? AND fullname = ?");
        $query ->execute(array($uname,$fname)); 
        $num = $query->rowCount();

        if($num == 0){
        	 $query = $pdo->prepare("INSERT INTO vy_users(username,phoneNo,password,fullname) VALUES(?,?,?,?)");
        	 $query ->execute(array($uname,$phoneNo,$pass,$fname));   
             return true;
        }else{
        	print   "Username/fullname already used";
        }
   	}
   }
 ?> 