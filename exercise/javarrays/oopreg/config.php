<?php 

class DatabaseConnection{
    
    public function __construct(){ 
        global  $pdo;
    	
    	try{ 
		   $pdo = new PDO('mysql:host=localhost;dbname=vyu', 'root', '');
		   echo "connected";
		   
		}catch(PDOException $e){
			// echo $e->getMessage();
			exit('Database Reerro Connection');
		}


	}

}


?>