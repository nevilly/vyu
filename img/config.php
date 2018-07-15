<?php
   
    class DatabaseConnection{
        public function __construct(){
            global $pdo;
            try{
                $pdo = new PDO('mysql:host=localhost;dbname = skongalife','root','');             
                 echo "connected";
            }catch(PDOException $e){
                echo $e->getMessage();
            }
            
        }
    }
    
    // class DatabaseConnection{
    //    public function __construct(){  
    //        global $pdo;
    //        try{
    //            $pdo = new PDO("mysql:host=localhost;dbname=oop",'root','');
    //           // $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMOD_EXCEPTION);
    //        echo "connect";
    //        }catch(PDOException $e){
    //           
    //            //echo "ERROR: ". $e->getMessage();
    //            exit("Database error");
    //       
    //        }
    //    }
    //}

?>

<!--users => teachers, student,interprenuers;
id,username,fullname,passwords,profile,date of regstration,last login,
galllay, Online test or Qtn, My Best scores-->
