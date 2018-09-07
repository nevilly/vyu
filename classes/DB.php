<?php


class DB{


	private static $_instance = null;
	private $_pdo ,
			$_query,
			$_error = false,
			$_results,
			$count = 0,
      $_lastId,
      $_fetchall;


    private function __construct(){
    	# code...
    	try{

            $this->_pdo = new PDO('mysql:host='.Config::get('mysql/host').';
                               dbname='.Config::get('mysql/db'),
                               Config::get('mysql/username'),
                               Config::get('mysql/password')
            );
    	}catch(PDOException $e){ 
    		die($e->getMessage());
    	} 
    }


    public static function getInstance(){
    	if(!isset(self::$_instance)){
    		self::$_instance = new DB();
    	}
    	return self::$_instance;
    }

    public function query($sql,$params = array()){
    	$this->_error = false;
    	if($this->_query = $this->_pdo->prepare($sql)){
            $x = 1;
            if(count($params)){
              	foreach ($params as $param) {
              		# code...
              		$this->_query->bindValue($x, $param);
              		$x++;
              	}
            }

            if($this->_query->execute()){
                $this->_results = $this->_query->fetchAll(PDO::FETCH_OBJ);
                $this->_count = $this->_query->rowCount();
               // $this->_fetchall = $this->_query->fetchAll();
               // $this->_lastId = $this->_results->lastInsertId();
            }else{
              $this-> _error = true;
            }
    	}

      return $this;
    }

    public function action($action,$table,$where = array()){
      if(count($where === 3)){
         $operators = array('=','>','<','>=',"<=");

         $field      = $where[0];
         $operator   = $where[1];
         $value      = $where[2];

         if(in_array($operator,$operators)){
          //examle $sql = "SELECT * FROM users WHERE username = 'Nehemia''
            $sql = "{$action} FROM {$table} WHERE {$field} {$operator} ?"; 
            if(!$this->query($sql,array($value))->error()){
                return $this;
            }
         }
      }
      return false; 
    }

    public function get($table,$where){
        return $this->action('SELECT *',$table, $where);
    }

    public function delete($table,$where){
       return $this->action('DELETE',$table,$where);
    }

    public function insert($table,$fields = array()){
        $keys =  array_keys($fields);
        $values = '';
        $x = 1;
      
        foreach($fields as $field){
           $values .= '?';
           if($x < count($fields)){
              $values .= ', ';
           }
           $x++;
        }

      // die($values);
      $sql = "INSERT INTO {$table} (`".implode('`,`',$keys)."`) VALUES ({$values})"; 
      if(!$this->query($sql, $fields)->error()){
        return true;
      }
     
      return false;
    }

    public function update($table,$id,$fields){
       $set = '';
       $x =1;

      foreach($fields as $name => $value){
        $set .= "{$name} = ?"; 

        if($x < count($fields)){
            $set .= ', ';
        }
        $x++;
      }

      // $sql = "UPDATE {users} SET {password = 'newpassword'} WHERE id = {3}";
       $sql = "UPDATE {$table} SET {$set} WHERE id = {$id}";

       if(!$this->query($sql, $fields)->error()){
         return true;
       }

       return false;
    }

    public function results(){
        return $this->_results;
    }

    public function first(){
        return $this->results()[0];
    }

    public function error(){
        return $this->_error;
    }

    public function count(){
        return $this->_count;
    }


    public function lastId(){
        return $this->_lastId;
    }

    public function fetchall(){
        return $this->_fetchall->lastInsertId();
    }

    public function detailsCheck($new_accout,$user_i){
       $this->_error = false;
       if(!$accounts = $this->query("SELECT student_acc,parent_acc,enterprenuer_acc,teacher_acc FROM vy_users WHERE user_id = ?",array(  $user_i))->error()){

            if ($accounts->first()->$new_accout == 1){
                $acc = $this->query("SELECT * FROM $new_accout WHERE user_id = ?" ,array($user_i));
                
                if($acc->count()){
                   return "count";
                }else{
                  $insert_idAcc= $acc->insert($new_accout, array('user_id' => $user_i));
                   
                }
            }         
        }
    }

    public function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    public function prfl_pct($prof_chanel,$width=NULL,$height=Null){
        if($prof_chanel){
          return "<img src =userdata/".$prof_chanel." width='".$width."px' height='".$height."px'>";
        }else{
          return "<img src ='userdata/profile/pro3.png' />";
        }
    }

    public function prfl_pctwithClass($prof_chanel, $width = NULL, $height = Null, $class = Null){
        if($prof_chanel){
          return "<img src =userdata/".$prof_chanel." width='".$width."px' height='".$height."px' class = '".$class."'>";
        }else{
          return "<img src ='userdata/profile/pro2.png' width='".$width."px' height='".$height."px' class = '".$class."' />";
        }
    }

    public function timeAgo($time_ago){
        $cur_time   = time();
        $time_elapsed   = $cur_time - $time_ago;
        $seconds  = $time_elapsed ;
        $minutes  = round($time_elapsed / 60 );
        $hours    = round($time_elapsed / 3600);
        $days     = round($time_elapsed / 86400 );
        $weeks    = round($time_elapsed / 604800);
        $months   = round($time_elapsed / 2600640 );
        $years    = round($time_elapsed / 31207680 );
        
        // Seconds
        if($seconds <= 60){
            echo "$seconds sec ago";
        }
        
        //Minutes
        else if($minutes <=60){
            if($minutes==1){
              return "1min ago";
            }
            else{
            return "$minutes min ago";
            }
        }
        
        //Hours
        else if($hours <=24){
            if($hours==1){
                return "an hour ago";
            }else{
                return "$hours hrs";
            }
        }
        
        //Days
        else if($days <= 7){
            if($days==1){
                return "yesterday";
            }else{
                return "$days days ago";
            }
        }
        
        //Weeks
        else if($weeks <= 4.3){
            if($weeks==1){
                return " 1week ago";
            }else{
                return "$weeks weeks ago";
            }
        }

        //Months
        else if($months <=12){
            if($months==1){
                return "1 month ago";
            }else{
                return "$months months ago";
            }
        }
        
        //Years
        else{
            if($years==1){
                return "1yr ago";
            }else{
                return "$years yrs ago";
            }
        }
    }
}