<?php 

$vyu_users = "CREATE TABLE IF NOT EXISTS vyu_users(
              id INT(11) NOT NULL AUTO_INCREMENT,
              username VARCHAR(20) NOT NULL,
              password VARCHAR(255) NOT NULL,
              email VARCHAR(255) NULL,
              gender ENUM('m','f') NOT NULL,
              country VARCHAR(255) NULL,
              userLevel ENUM('a','b','c','d') NOT NULL DEFAULT 'a',
              avater VARCHAR(255)  NULL,
              ip VARCHAR(255)  NULL,
              signup DATETIME NOT NULL,
              lastlogin DATETIME NOT NULL,
              joined DATETIME NOT NULL,
              notescheck DATETIME NOT NULL,
              activated ENUM('0','1') NOT NULL DEFAULT '0',
              PRIMARY KEY (id),
              UNIQUE KEY username (username,email)
            );"

            $query = msqli_query($db_conx,$vyu_users);

            if($query === TRUE){
            	echo "data base created OK :)";
            }else{
            	echo "data base not created OK :( ";
            }

   ///////////////////////////////////////////// friends Request table
            $table_friends = "CREATE TABLE IF NOT EXISTS vyu_friends(
              id INT(11) NOT NULL AUTO_INCREMENT,
              user1 VARCHAR(20) NOT NULL,
              user2 VARCHAR(20) NOT NULL,
              datemade DATETIME NOT NULL,
              eccepted ENUM('0','1') NOT NULL DEFAULT '0',
              PRIMARY KEY (id)
            );"

            $query = msqli_query($db_conx,$table_friends);

            if($query === TRUE){
            	echo "table_friends created OK :)";
            }else{
            	echo "table_friends not created OK :( ";
            }


             ///////////////////////////////////////////// blockedUsers
            $table_blockusers = "CREATE TABLE IF NOT EXISTS vyu_blockusers(
              id INT(11) NOT NULL AUTO_INCREMENT,
              blocker VARCHAR(20) NOT NULL,
              blockee VARCHAR(20) NOT NULL,
              blockdate DATETIME NOT NULL,
              PRIMARY KEY (id)
            );"

            $query = msqli_query($db_conx,$table_friends);

            if($query === TRUE){
            	echo "table_blockusers created OK :)";
            }else{
            	echo "table_blockusers not created OK :( ";
            }

             ///////////////////////////////////////////// status_table
            $table_msg = "CREATE TABLE IF NOT EXISTS vyu_msg(
              id INT(11) NOT NULL AUTO_INCREMENT,
              osid INT(11) NOT NULL,
              account_name VARCHAR(20) NOT NULL,
              author VARCHAR(20) NOT NULL,
              type ENUM('a','b','c') NOT NULL,
              data TEXT NOT NULL,
              postdate DATETIME NOT NULL,
              PRIMARY KEY (id)
            );"

            $query = msqli_query($db_conx,$table_friends);

            if($query === TRUE){
            	echo "table_msg created OK :)";
            }else{
            	echo "table_msg not created OK :( ";
            }


            ///////////////////////////////////////////// photo
            $table_photo = "CREATE TABLE IF NOT EXISTS vyu_photo(
              id INT(11) NOT NULL AUTO_INCREMENT,
              user VARCHAR(20) NOT NULL,
              gallery VARCHAR(20) NOT NULL,
              filename VARCHAR(255) NOT NULL,
              description VARCHAR(255) NOT NULL,
              upladdate DATETIME NOT NULL,
              PRIMARY KEY (id)
            );"

            $query = msqli_query($db_conx,$table_friends);

            if($query === TRUE){
            	echo "table_photo created OK :)";
            }else{
            	echo "table_photo not created OK :( ";
            }

            ///////////////////////////////////////////// Notification
            $table_notif = "CREATE TABLE IF NOT EXISTS vyu_notf(
              id INT(11) NOT NULL AUTO_INCREMENT,
              user VARCHAR(20) NOT NULL,
              initiator VARCHAR(20) NOT NULL,
              app VARCHAR(255) NOT NULL,
              note VARCHAR(255) NOT NULL,
              did_read ENUM('0','1') NOT NULL DEFAULT '0',
              date_time DATETIME NOT NULL,
              PRIMARY KEY (id)
            );"

            $query = msqli_query($db_conx,$table_friends);

            if($query === TRUE){
              echo "table_notification created OK :)";
            }else{
              echo "table_notification not created OK :( ";
            }


 ///////////////////////////////////////////// vyu_emination
            $table_notif = "
              CREATE TABLE IF NOT EXISTS `vy_exam` (
                `id` int(11) NOT NULL,
                `user_id` int(11) DEFAULT NULL,
                `qstn_id` int(11) DEFAULT NULL,
                `ans_id` int(11) DEFAULT NULL,
                `inst_id` int(11) DEFAULT NULL,
                `exam_name` varchar(250) NOT NULL,
                `poste_time` datetime NOT NULL,
                `exam_date` datetime NOT NULL
                
              ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
            );"

            $query = msqli_query($db_conx,$table_friends);

            if($query === TRUE){
              echo "table_notification created OK :)";
            }else{
              echo "table_notification not created OK :( ";
            }


   ///////////////////////////////////////////// vyu_qustion
            $table_vy_qstn = "CREATE TABLE IF NOT EXISTS vy_qustion(
              id INT(11) NOT NULL AUTO_INCREMENT,
              user_id INT(11) NOT NULL,
              exam_id INT(11)  NOT NULL,
              qustn VARCHAR(20) NOT NULL,
              datequst datetime NOT NULL,
              PRIMARY KEY (id)
            );"

            $query = msqli_query($db_conx,$table_friends);

            if($query === TRUE){
              echo "table_notification created OK :)";
            }else{
              echo "table_notification not created OK :( ";
            }

   ///////////////////////////////////////////// vyu_answer
            $table_vy_answer = "CREATE TABLE IF NOT EXISTS vy_answer(
              id INT(11) NOT NULL AUTO_INCREMENT,
              user_id INT(11) NOT NULL,
              exam_id INT(11)  NOT NULL,
              ans TEXT,
              datequst datetime NOT NULL,
              PRIMARY KEY (id)
            );"

            $query = msqli_query($db_conx,$table_friends);

            if($query === TRUE){
              echo "table_notification created OK :)";
            }else{
              echo "table_notification not created OK :( ";
            }


   ///////////////////////////////////////////// vyu_answer
            $table_vy_answer = "CREATE TABLE IF NOT EXISTS `vy_instruction` ( 
               `id` INT NOT NULL AUTO_INCREMENT , 
               `user_id` INT NOT NULL , 
               `exam_id` INT NOT NULL ,
               `exam_type` VARCHAR(50) NOT NULL ,
               `exam_name` VARCHAR(100) NOT NULL ,
               `class_level` VARCHAR(20) NOT NULL ,
               `date_exam` DATETIME NOT NULL , 
               `school_name` VARCHAR(100) NULL DEFAULT NULL ,
                PRIMARY KEY (`id`)) ENGINE = InnoDB;"

            $query = msqli_query($db_conx,$table_friends);

            if($query === TRUE){
              echo "table_notification created OK :)";
            }else{
              echo "table_notification not created OK :( ";
            }


           
?>