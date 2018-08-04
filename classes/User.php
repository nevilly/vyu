<?php

 class User{
     private $_db,
         $_data,
         $_sessionName,
         $_cookieName,
         $_isLoggedIn;

     public function __construct($user = null)
     {
         $this->_db = DB::getInstance();
         $this->_sessionName = Config::get('session/session_name');
         $this->_cookieName = Config::get('remember/cookie_name');

         if (!$user) {
             if (Session::exists($this->_sessionName)) {
                 # code...
                 $user = Session::get($this->_sessionName);
                 if ($this->find($user)) {
                     # code...
                     $this->_isLoggedIn = true;
                 } else {
                     //process Logout
                 }
             }
         } else {
             $this->find($user);
         }
     }

     public function update($fields = array(), $id = null)
     {
        if (!$id && $this->isLoggedIn()) {
            # code...
            $id = $this->data()->id;
        }
        if(!$this->_db->update('vy_users', $id, $fields)){
             throw new Exception("There was a problem Updating Account.");
             
        }
     }

  public function create($fields = array()){
        if(!$this->_db->insert('vy_users',$fields)){
             throw new Exception("There was a problem Creating Account.");
             
        }
        // $this->_db()->lastInsertedId();
  }


  public function create_student($fields = array()){
        if(!$this->_db->insert('student_acc',$fields)){
             throw new Exception("There was a problem Creating Account student acount.");
             
        }
  }

  public function create_r($fields = array()){
        if(!$this->_db->insert('vy_req',$fields)){
             throw new Exception("There was a problem Creating verification Requsest  acount.");
        }
  }

     public function create_teacher($fields = array())
     {
        if(!$this->_db->insert('teacher_acc',$fields)){
             throw new Exception("There was a problem Creating Account teacher acount.");
             
        }
  }

  public function create_e($fields = array()){
        if(!$this->_db->insert('enterpr_acc',$fields)){
             throw new Exception("There was a problem Creating Account teacher acount.");
        }
  }

  public function create_p($fields = array()){
        if(!$this->_db->insert('p_acc',$fields)){
             throw new Exception("There was a problem Creating Account parent acount.");
        }
  }

  public function idreturn($user){
     // $u_id = $this->_db->get('vy_users',$fields);
     //  if($u_id->count()){
     //    echo "Yes";
     //  }else{
     //    echo "No";
     //  }

      $data = $this->_db->get('vy_users',array('username', '=' ,$user));

        if($data->count()){
          foreach ($data->results() as $d) {
            # code...
            return $d->id;
          }
        
        }else{
          echo "No";
        }
      }
      
  


public function find($user = null){
      if ($user) {
        # code...
        $field = (is_numeric($user)) ? 'id' : 'username';
        $data = $this->_db->get('vy_users',array($field, '=' ,$user));

          if ($data->count()) {
           $this->_data = $data->first();
          return true;
        }
      }
      return false;
}

public function Myfind($table,$user = null){
      if ($user) {
        # code...
        $field = (is_numeric($user)) ? 'id' : 'username';
        $data = $this->_db->get($table, array($field, '=' ,$user));

        if($data->count()){
           $this->_data = $data->first();
          return true;
        }
      }
      return false;
}

public function IntableFind($table,$tablerow,$user = null){
      if ($user) {
          # code...
          $field = (is_numeric($user)) ? 'id' : 'username';
          $data = $this->_db->get($table, array($tablerow, '=', $user));

          if ($data->count()) {
           $this->_data = $data->first();
              return true;
          }
      }
      return false;
}


  public function login($username=null,$password=null,$remember=false){

    if(!$username && !$password && $this->exists()) {
        # log user in
        Session::put($this->_sessionName, $this->data()->id);

    }else{
        $user = $this->find($username);

      if ($user) {
          #if ($this->data()->password === Hash::make($password,$this->data()->salt)) 
          # code...Hash::make($password, $this->data()->salt)
            #if ($this->data()->salt === $password)  Baarki

          if ($this->data()->password === Hash::make($password,$this->data()->salt))  {
              # session
              session::put($this->_sessionName, $this->data()->id);

              if ($remember) {
                  # remember
                  $hash = Hash::unique();
                  $hashCheck = $this->_db->get('vy_users_session', array('user_id', '=', $this->data()->id));

                  if (!$hashCheck->count()) {
                      # code...
                      $this->_db->insert('vy_users_session', array(
                          'user_id' => $this->data()->id,
                          'hash' => $hash
                      ));
                  } else {
                      $hash = $hashCheck->first()->hash;
                  }

                  Cookie::put($this->_cookieName, $hash,Config::get('remember/cookie_expiry'));
              }
              return true;
          }
      }
    }
    
      return false;
  }

  public function hasPermission($key){
    $group = $this->_db->get('vy_group', array('id','=',$this->data()->grouped));
    if($group->count()){
      $permission = json_decode($group->first()->permission,true); 
 

      if ($permission[$key] == true){
        # code
        return true;

      }
    }

    return false;
 }

  // public function profile_pct($id){
  //    $profile_picture = $db->query('SELECT profile FROM vy_users WHERE id =?', array($user_id));
  //       if($profile_picture->count()){
         
  //         if($profile_picture->first()->profile){
  //             return $prof_dir = "<img src =userdata/".$profile_picture->first()->profile." width ='100px' height ='100px;'>";
         
  //         }else{
  //           return $prof_dir = "<img src ='userdata/profile/pro3.png' width ='100px' height ='100px;'>";
  //         }
  //     }
  // }


public function exists(){
   return (!empty($this->_data))? true : false; 
}

public function logout(){
    $this->_db->delete('vy_users_session', array('user_id', '=', $this->data()->id));
    Session::delete($this->_sessionName);
    Cookie::delete($this->_cookieName);
}


public function data(){
    return $this->_data;
}


public function isLoggedIn(){
    return $this->_isLoggedIn;
}





 }