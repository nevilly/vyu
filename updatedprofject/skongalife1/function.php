<?php
    require"config.php";

    class LoginRegistration{
		
	
        
        function __construct(){
           $database = new DatabaseConnection(); 
        }
        
        
        public function registerUser($username,$name,$pass_m,$schul) {
          global $pdo;
          
          $query = $pdo->prepare("SELECT * FROM user ");
          $result = $query->fetchAll(PDO::FETCH_ASSOC);
          print_r($result);
          
         
        }
        
    } 
?>