

<?php 
  class  DatabaseConnection{

  	public function __construct($db_hos,$db_username,$db_password){
       echo'Attemot connection ...';
       if(!@$this->connect($db_hos,$db_username,$db_password)){
           echo "Connection Failed";
       }else if($this->connect($db_hos,$db_username,$db_password)){
            echo "COnnected to: ". $db_hos;
       }

  	}

  	public function connect($db_hos,$db_username,$db_password){
         if(!mysql_connect($db_hos,$db_username,$db_password)){
         	return false;
         }else{
         	return true;
         }
  	}
  }


$connection = new DatabaseConnection('localhost','reg','');
   
?>