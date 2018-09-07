<?php  


require_once 'Core/Init.php';

$user = new User();
$db = DB::getInstance();
if ($user->isLoggedIn()) {
  #echo 'logged In';
  $username = escape($user->data()->username);
  $user_id = escape($user->data()->id);
 
  $action = Input::get('action');
  $status   = $db->test_input(Input::get('state'));
  $from   = $db->test_input(Input::get('from'));


  // href="insidefunc.php?user=$user_uname&&action=eccept&&status=f"

  ////////////////////////////////////////////////////////////////////////
  /////>>>>>> Eccept Request 
      if ($action == 'eccept' &&  $status == 'f'){
          # code...
         
        $deleteInReqTable = $db->query("DELETE FROM vy_req WHERE (user_id =? AND recv_id =?) OR ( user_id =? AND recv_id =?) AND state = ? ", array($from,$user_id,$user_id,$from,$status));

         // $deleteInReqTable = $db->query('DELETE FROM vy_req WHERE user_id = ? AND recv_id = ? AND state = ?',array($from ,$user_id,$status));

          if($deleteInReqTable){
             # deleted table and check If is any frnd Req

             $selectInReqTable = $db->query("SELECT * FROM vy_frnds WHERE (user_one =? AND user_two =?) OR ( user_one =? AND user_two =?) AND frnd_status = ?", array($from,$user_id,$user_id,$from,$status));

             if ($selectInReqTable->count()){
                 # code...
                  
                 Redirect::to('subjectFriends.php?user='.$username); 
             }else{
                  $profupdate = $db->insert('vy_frnds',array('user_one' => $from ,'user_two' => $user_id,'frnd_status' =>  $status));
                  if ($profupdate){
                      # code...
                      Redirect::to('subjectFriends.php?user='.$username); 
                  }

             }


              
         }else{
            echo "note";
         }
      }


      if($action == 'eccept' &&  $status == 'v'){
         # code...
         
          // $deleteReq = 'DELETE FROM vy_req WHERE user_id = ? AND recv_id =? AND states = ?';
         
          $deleteInReqTable = $db->query('DELETE FROM vy_req WHERE user_id = ? AND recv_id = ? AND state = ?',array($from ,$user_id,$status));

         if ($deleteInReqTable) {
             # code...
            $profupdate = $db->insert('vy_frnds',array('user_one' => $from ,'user_two' => $user_id,'frnd_status' => $status));
            if ($profupdate){
                # code...
                Redirect::to('subjectFriends.php?user='.$username); 
            }
          }else{
                echo "note";
          }
      } 
  /////>>>>>> End Eccept Request
  //////////////////////////////////////////////////////////////////////////

  /////////////////////////////////////////////////////////////////////////
  ////////////////**********Choose Main Account

    #$parameter= 'MainAccvalue='+radio_obje_vlue;

    if(!empty($_POST['MainAccvalue'])){
        $MainAccvalue = $db->test_input($_POST['MainAccvalue']);
        

         $sql = "UPDATE vy_users SET Main_account = ? WHERE id = ?";
                  $porifleupdate = $db->query($sql,array($MainAccvalue,$user_id));
                  if($porifleupdate){
                      

                      Redirect::to('page.php'); 
                  }else{
                      echo "Choose Main Account Error Conctact:0654881994";
                  }
    }

  ////////////////**********END: Choose Main Account
  /////////////////////////////////////////////////////////////////////////





  //////////////////////////////////////////////////////////////////////////
  /////////>>>>>> uploading script
    if(isset($_FILES['profile_pct'])&& $action == 'profilePicture'){
    	# code...
    	if(((@$_FILES["profile_pct"]["type"]   == 'image/jpeg') ||
           (@$_FILES["profile_pct"]["type"] == 'image/jpg') ||
           (@$_FILES["profile_pct"]["type"] == 'image/png') ||
           (@$_FILES["profile_pct"]["type"] == 'image/gif')) &&
           (@$_FILES["profile_pct"]["size"] < 1048576)){
    		$chars ="abcdefjhijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ123456789";
    	    $rand_dir_name = substr(str_shuffle($chars),0, 15);
    	    mkdir("userdata/profile_pct/$rand_dir_name");
    	    if(file_exists("userdata/profile_pct/$rand_dir_name/".@$_FILES["profile_pct"]["name"])){
                 echo @$_FILES["profile_pct"]["name"]. "already Exists";
    	    }else{
    	    	move_uploaded_file($_FILES['profile_pct']['tmp_name'], "userdata/profile_pct/$rand_dir_name/". @$_FILES["profile_pct"]["name"]);

                $filename = @$_FILES["profile_pct"]["name"];
    	    	$dir = 'profile_pct/'.$rand_dir_name.'/'. @$_FILES["profile_pct"]["name"];

                $photoup_sql = 'SELECT profile FROM vy_users WHERE id =?';

                $profile_picture = $db->query($photoup_sql, array($user_id));
                  if(!$profile_picture->count()){
                   
                }else{  
                    // if($profile_picture->first()->profile){
                    //           // $prof_dir = "<img src =userdata/".$profile_picture->first()->profile." width ='100px' height ='100px;'>";

                    $sql = "UPDATE vy_users SET profile = ? WHERE id = ?";
                    $porifleupdate = $db->query($sql,array($dir,$user_id));
                    if($porifleupdate){

                      $profupdate = $db->insert('vy_photo',array('user_id' => $user_id,'photo' => $dir,'p_status' => 'a'));
                      if ($profupdate) {
                        # code...
                          Redirect::to('profile.php?user='.$username); 
                      }else{
                        echo "Sory uploading Error Contact:06541994";
                      }
                     
                    }else{
                      echo "Sory uploading Error 'upadate' Contact:06541994 ";
                    }
    	    }}

    	}else{
    		echo "error";
    	}
    }

    if(isset($_FILES['profile_cover'])&& $action == 'profileCover'){
    	# code...
    	if(((@$_FILES["profile_cover"] ["type"]   == 'image/jpeg') ||
           (@$_FILES["profile_cover"]["type"] == 'image/jpg') ||
           (@$_FILES["profile_cover"]["type"] == 'image/png') ||
           (@$_FILES["profile_cover"]["type"] == 'image/gif')) &&
           (@$_FILES["profile_cover"]["size"] < 1048576)){
    		$chars ="abcdefjhijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ123456789";
    	    $rand_dir_name = substr(str_shuffle($chars),0, 15);
    	    mkdir("userdata/profile_cover/$rand_dir_name");
    	    if(file_exists("userdata/profile_cover/$rand_dir_name/".@$_FILES["profile_cover"]["name"])){
                 echo @$_FILES["profile_cover"]["name"]. "already Exists";
    	    }else{
    	    	move_uploaded_file($_FILES['profile_cover']['tmp_name'], "userdata/profile_cover/$rand_dir_name/". @$_FILES["profile_cover"]["name"]);

    	    	 $dir = 'profile_cover/'.$rand_dir_name.'/'. @$_FILES["profile_cover"]["name"];

    	    
    	    	
    	    	   
                     $sql_find = "SELECT user_id,photo,p_status FROM vy_photo WHERE user_id = ? AND p_status =?";
                    // $luk =  $user->IntableFind('vy_photo','user_id',$user_id);
                      $luk =  $db->query($sql_find,array($user_id,'b'));

                    if($luk->count()){

                        
                    	$sql = "UPDATE vy_photo SET photo = ? WHERE user_id = ? AND p_status = ?";
                    	$porifleupdate = $db->query($sql,array($dir,$user_id,'b'));
                    	if($porifleupdate){
                    		Redirect::to('profile.php?user='.$username);
                    		
                    	}else{
                    		echo "Sory uploading Error Contact:06541994";
                    	}
                    }else{
                        //echo $user_id,$dir;
                        // echo "Not";
                        // exit();
                    	$profupdate = $db->insert('vy_photo',array('user_id' => $user_id,'photo' => $dir,'p_status' => 'b'));
                    	if ($profupdate) {
                    		# code...
                    	    Redirect::to('profile.php?user='.$username); 
                    	}else{
                    		echo "Sory uploading Error Contact:06541994";
                    	}
                     }
    	    }

    	}else{
    		echo "error";

    	}
    }
  /////////>>>>>>END: uploading script
  //////////////////////////////////////////////////////////////////////////

  //////////////////////////////////////////////////////////////////////////////
  /////////>>>>>>>>>chatsystem#parameter= 'userd='+user_id+'&&mainpagetextValue='+textValue;

    if(!empty($_POST['mainpagetextValue'])){
        $text = $db->test_input($_POST['mainpagetextValue']);
        $userd = $db->test_input($_POST['userd']);
         
        #msg_status
        //a = creator wall msg
        //b = creator wall msg reply
        //c = creator wall friend msg
        $profupdate = $db->insert('vy_msg',array('sender_id' => $user_id,'msj' =>$text, 'date' => date("Y-m-d H:i:s"), 'msg_status' => 'a'));
        if ($profupdate) {
          # code...

         $qry_msg = 'SELECT vy_msg.id,vy_msg.sender_id,vy_msg.recv_id,vy_msg.msj,vy_msg.msg_status,vy_users.id,vy_users.profile,vy_users.username FROM vy_msg LEFT JOIN vy_users ON vy_users.id = vy_msg.sender_id ORDER BY vy_msg.id DESC';
         
          $msgrows =  $db->query($qry_msg);
       
          if($msgrows->count()){
              foreach ($msgrows->results() as $msgrow){
                # code...

                $msj_P = ($msgrow->profile) ? 
               '<div id ="profilecycle">
                    <img src = userdata/'.$msgrow->profile.' width="60px" height ="60px" style = "border-radius:50%">
                </div>' 
                :
               '<div id ="profilecycle">
                    <img src ="userdata/profile/pro3.png" width="60px" height ="60px" style = "border-radius:50%">
               </div>';
          echo $msgrow->sender_id;
          echo "<div id = 'posted' style = 'border:1px solid red;'>
                <div class = 'posted_profile'>
                  <div class = 'posted_cicle'>
                     $msj_P
                   </div>
                </div>
                <div class ='name_time'><span class = 'name'>".$msgrow->username."</span><span class = 'time_ago'>1min Ago</span></div>
                <div class ='msg'>".$msgrow->msj."</div>
                <div class ='icons'>
                  <span id='reply' class = 'ico reply'><i class = 'fa fa-reply'></i></span>
                  <span id='love' class = 'ico reply'><i class = 'fa fa-heart-o'></i></span>
                  <span id='thumb_up' class = 'ico reply'><i class = 'fa fa-thumbs-up'></i></span>
                  <span id='delete' class = 'ico reply'><i class= 'fa fa-remove'></i></span>
                  <span id='spam' class = 'ico reply'>spam</span>
                  <span id='delete' class = 'ico reply'><i class= 'fa fa-unlock-alt'></i></span>
                </div>

                 ".$msgrow->id."
                  <div class = 'replyDive'><textarea id = 'replyText".$msgrow->id."'></textarea><span class ='replyB' onclick= \"reply('".$msgrow->sender_id."','".$msgrow->id."','".$user_id."','replyText".$msgrow->id."');\"><i class = 'fa fa-send'></i></span></div>
              </div>";

                }
          }else{
            echo "no thing";
          }
          
        }else{
          echo 'NOT GONE';
        }
    }



    if(!empty($_POST['wallmsg'])) {
      # code...
      $qry_msg = 'SELECT vy_msg.id,vy_msg.sender_id,vy_msg.recv_id,vy_msg.msj,vy_msg.msg_status,vy_users.id,vy_users.profile,vy_users.username FROM vy_msg LEFT JOIN vy_users ON vy_msg.sender_id  = vy_users.id ORDER BY vy_msg.id DESC';

      $msgrows =  $db->query($qry_msg);
   
      if($msgrows->count()){
          foreach ($msgrows->results() as $msgrow) {
            # code...

            $msj_P = ($msgrow->profile) ? 
           '<div id ="profilecycle">
                <img src = userdata/'.$msgrow->profile.' width="60px" height ="60px" style = "border-radius:50%">
            </div>' 
            :
           '<div id ="profilecycle">
                <img src ="userdata/profile/pro3.png" width="60px" height ="60px" style = "border-radius:50%">
           </div>';
          echo $msgrow->id;
          echo "<div id = 'posted' >
              <div class = 'posted_profile'>
                <div class = 'posted_cicle'>
                   $msj_P
                 </div>
              </div>
              ".$msgrow->sender_id."
              <div class ='name_time'><span class = 'name'>".$msgrow->username."</span><span class = 'time_ago'>1min Ago</span></div>
              <div class ='msg'>".$msgrow->msj."</div>
              <div class ='icons'>
               <div id='sender_id'></div>
                <span id='reply' class = 'ico reply' onclick= \"reply('".$msgrow->sender_id."','".$msgrow->id."','".$user_id."');\"><i class = 'fa fa-reply'></i></span>
                <span id='love' class = 'ico reply'><i class = 'fa fa-heart-o'></i></span>
                <span id='thumb_up' class = 'ico reply'><i class = 'fa fa-thumbs-up'></i></span>
                <span id='delete' class = 'ico reply'><i class= 'fa fa-remove'></i></span>
                <span id='spam' class = 'ico reply'>spam</span>
                <span id='delete' class = 'ico reply'><i class= 'fa fa-unlock-alt'></i></span>
              </div>
              
              <div class = 'replyDive'><textarea></textarea><span class ='replyB'><i class = 'fa fa-send'></i></span></div>
          </div>";
      }
      }else{
        echo "no thing";
      }
    }


    

    // parameter= 'userd='+user_id+'&&subjecWallMsg='+textValue+'&&status='+status+'&&topics_title='+topics_title+'&&topics_title='+topics_title+'&&sub_topic='+sub_topic+'&&subject_id='+subject_id;

    if(!empty($_POST['subjecWallMsg'])){
      # code...
      $ideaOrQstn = $db->test_input($_POST['subjecWallMsg']);
      $userd = $db->test_input($_POST['userd']);
      $state = $db->test_input($_POST['status']);

      if($state == 'a'){
         $creat_request = $db->insert('vy_wallsubject',array( 'user_id' => $user_id, 'ideaOrQstn' => $ideaOrQstn, 'date' => date("Y-m-d H:i:s"),'status' => 'a'));
      }
    }

    // parameter= 'subjectWallId='+msg_id+'&&replysubjecWallMsg='+textValue+'&&status='+status;
   if(!empty($_POST['replysubjecWallMsg'])){
        # code...
        $ideaOrQstn = $db->test_input($_POST['replysubjecWallMsg']);
        $replysubjectMsg_id = $db->test_input($_POST['subjectWallId']);
        $state = $db->test_input($_POST['status']);

        
           $creat_request = $db->insert('vy_wallsubjectreply',array( 'wallsubjectreply_id' => $replysubjectMsg_id, 'msg' => $ideaOrQstn, 'replier_id' => $user_id,'date' => date("Y-m-d H:i:s")));
       

      }



      // parameter = 'mainqstnwall='+mainqstnwall+'&&dateqstnDonewall='+dateqstnDonewall+'&&qstnFromSchoolname='+qstnFromSchoolname+'&&subjectnameQstnWall='+subjectnameQstnWall+'&&topicnameQstnwal='+topicnameQstnwal+'&&subtopicQstnwall='+subtopicQstnwall+'&&Qn_selectNoQstnwall='+Qn_selectNoQstnwall+'&&Qn_selectNoColomQstnwall='+Qn_selectNoColomQstnwall+'&&match_a='+match_a+'&&match_b='+match_b+'&&match_c='+match_c+'&&status='+status;

         
    if(!empty($_POST['mainqstnwall'])){
      
      echo $mainqstnwall = $db->test_input($_POST['mainqstnwall']); '<br/>';
      echo $SECTION_qstnwall = $db->test_input($_POST['SECTION_qstnwall']);
      echo $dateqstnDonewall = $db->test_input($_POST['dateqstnDonewall']);
      echo $qstnFromSchoolname = $db->test_input($_POST['qstnFromSchoolname']);
      echo $subjectnameQstnWall = $db->test_input($_POST['subjectnameQstnWall']);
      echo $topicnameQstnwal = $db->test_input($_POST['topicnameQstnwal']);
      echo $subtopicQstnwall = $db->test_input($_POST['subtopicQstnwall']);
      echo $Qn_selectNoQstnwall = $db->test_input($_POST['Qn_selectNoQstnwall']);
      echo $Qn_selectNoColomQstnwall = $db->test_input($_POST['Qn_selectNoColomQstnwall']);
      echo $match_a = $db->test_input($_POST['match_a']);
      echo $match_b = $db->test_input($_POST['match_b']);
      echo $match_c = $db->test_input($_POST['match_c']);
      echo $state = $db->test_input($_POST['status']);
      echo $subject_name = $db->test_input($_POST['subject_name']);
      echo $subject_id = $db->test_input($_POST['subject_id']);

     

      if($state == 'b'){
         $creat_request = $db->insert('vy_wallsubject',array( 'user_id' => $user_id, 'section' => $SECTION_qstnwall, 'qstnNo' => $Qn_selectNoQstnwall,'columNo'=> $Qn_selectNoColomQstnwall,'topics_title' => $topicnameQstnwal,'sub_topic'=> $subtopicQstnwall,'ideaOrQstn' => $mainqstnwall,'subject_id' => $subject_id,
          'subject_name' => $subject_name,'schoolnam' => $qstnFromSchoolname,'examdate' => $dateqstnDonewall, 'date' => date("Y-m-d H:i:s"),'match_a' => $match_a,'match_b' => $match_b,'match_c' => $match_c,'status' => 'b'));
      }
    }



   // parameter= 'textAnswe='+textAnswe+'&&wallsubject='+wallsubject;

     if(!empty($_POST['textAnswe'])){
      # code...
      $textAnswe = $db->test_input($_POST['textAnswe']);
      $replysubjectMsg_id = $db->test_input($_POST['subjectWallId']);
      $subject_id = $db->test_input($_POST['subject_id']);
      
       echo $subject_id;


      
         // $creat_request = $db->insert('vy_wallsubjectreply',array( 'wallsubjectreply_id' => $replysubjectMsg_id, 'msg' => $ideaOrQstn, 'replier_id' => $user_id,'date' => date("Y-m-d H:i:s")));
    }



    //parameter= 'topicname='+tpcva+'&&topicbody='+topicbdy+'&&subject_id='+subject_id+'&&buktopictitle='+tpcttle+'&&buktitleCont='+tpcinstractn+'&&schulname='+shulname;


    // parameter= 'topicname='+tpcva+'&&topicbody='+topicbdy+'&&subject_id='+subject_id+'&&buktopictitle='+tpcttle+'&&buktitleCont='+tpcinstractn+'&&schulname='+shulname+'&&region='+region+'&&lev='+lev;
    if(!empty($_POST['buktopictitle'])){
        # code...
        $tpcnam  = $db->test_input($_POST['buktopictitle']);
        $buktitleCont  = $db->test_input($_POST['buktitleCont']);

        $topicname  = $db->test_input($_POST['topicname']);
        $topicbody  = $db->test_input($_POST['topicbody']);
        $subject_id = $db->test_input($_POST['subject_id']);
        $schulname  = $db->test_input($_POST['schulname']);
        $region     = $db->test_input($_POST['region']);
        $lev        = $db->test_input($_POST['lev']);

        
        //topic name and it body
        
         
        $book = $db->query('SELECT  * FROM vy_subjecttopics WHERE  topic_title  =? AND subject_id = ? AND  user_id = ? ', array($tpcnam,$subject_id,$user_id));
        
        if($book->count()){
            #insert subtopic....
            $buktitle_id = $book->first()->id;
            $topicnam = explode(',' ,$topicname);
            $topicbod = explode(',' ,$topicbody);

            $r = array_combine($topicnam, $topicbod);

            foreach ($r as $tpcname => $tpcbody){
                # insert body and topic name parpendiculor......
                $creat_request = $db->insert('vy_subtpc',array( 'user_id' => $user_id, 'subject_id' => $subject_id, 'topic_id' => $buktitle_id,'subtpc' => $tpcname,'subtpc_contct' => $tpcbody));

                if($creat_request){
                    $savedMsge = "<div class = 'savedAlert'>Saved</div>";
                }else{
                    $savedMsge = "<div class = 'savedAlert'>Not Saved</div>";
                }   
            }
             
        }else{
        
            $creat_tpc = $db->insert('vy_subjecttopics',array( 'user_id' => $user_id, 'subject_id' => $subject_id, 'topic_title' => $tpcnam,'titleContent' => $buktitleCont,'shoolname' => $schulname,'region' => $region,'level' => $lev));

            if ($creat_tpc) {
                # get id of inserted new topic

                $book = $db->query('SELECT  * FROM vy_subjecttopics WHERE  topic_title  =? AND subject_id = ? AND  user_id = ?', array($tpcnam,$subject_id,$user_id));

                $buktitle_id = $book->first()->id;  // this id
                $topicnam = explode(',' ,$topicname);
                $topicbod = explode(',' ,$topicbody);

                $r = array_combine($topicnam, $topicbod);

                foreach ($r as $tpcname => $tpcbody){
                    # insert in subtopic

                    $creat_request = $db->insert('vy_subtpc',array( 'user_id' => $user_id, 'subject_id' => $subject_id, 'topic_id' => $buktitle_id,'subtpc' => $tpcname,'subtpc_contct' => $tpcbody));

                    if($creat_request){
                      echo "<div class = 'savedAlert'>Saved</div>";
                    }else{
                      echo "<div class = 'savedAlert'>Not Saved</div>";
                    }
                }

            }else{
              echo "note gone";
            }
        }
    }

  ////////////////////////////////////////////////////////////////////////////////////
  /////////Friends Request
  // parameter= 'reqfrnd_userid='+user_id+'&&dirUrl='+dirUrl;

    if(!empty($_POST['reqfrnd_userid'])){
      # code...
   
      $recv_id =$db->test_input( $_POST['reqfrnd_userid']);
      $dirUrl =$db->$_POST['dirUrl'];
      $table = 'vy_req';
      $creat_request = $db->insert($table,array( 'user_id' => $user_id, 'recv_id' => $recv_id, 'state' => 'f'));

      if($creat_request){
        echo "gome";

        Redirect::to($dirUrl.'?user='.$recv_id); 
      }else{
        echo 'not ogone';
      }
    }
  /////////Friends Request
  ////////////////////////////////////////////////////////////////////////////////////

  ////////////////////////////////////////////////////////////////////////////////////
  /////Topic Cover checkBox
    //parameter= 'id_subTopic='+id_subTopic+'&&id_value='+id_value;
    // parameter= 'id_subTopic='+id_subTopic+'&&id_value='+id_value+'&&id_dis='+id_dis;

    if(!empty($_POST['id_value'])){
      # code...
      $id_value = $db->test_input($_POST['id_value']);
      $id_dis = $db->test_input($_POST['id_dis']);
      
       
        $sql = "UPDATE vy_subtpccover SET checkCover = ? WHERE id = ?";
                  $porifleupdate = $db->query($sql,array(1,$id_dis));
                  

           // if($porifleupdate){
           //    echo "Done";
           // }else{
           //     echo "Not";
           // }
         // $creat_request = $db->insert('vy_wallsubjectreply',array( 'wallsubjectreply_id' => $replysubjectMsg_id, 'msg' => $ideaOrQstn, 'replier_id' => $user_id,'date' => date("Y-m-d H:i:s")));
    }

  /////Topic Cover checkBox
  ////////////////////////////////////////////////////////////////////////////////////

 ////////////////////////////////////////////////////////////////////////////////
    ////////// time table composer
       
        if(!empty($_POST['selectedTopic']) == 'selectedTopic' ){
            $teacherId    =  $db->test_input($_POST['teacherId']); 
            $subject_id    =  $db->test_input($_POST['subject_id']); 

            $tymT_subjectopics = $db->query('SELECT * FROM vy_subjecttopics WHERE subject_id = ? AND user_id = ?  ',array($subject_id,$user_id)); 
             if ($tymT_subjectopics->count()) {
              foreach ($tymT_subjectopics->results() as $tymT_subjectopic){
                

                 echo '<option value ='.$tymT_subjectopic->id.' >'.$tymT_subjectopic->topic_title.'</option>';

                  } 
              }else{ 
                 echo '<option>No topic Create Topics</option>'; 
              } 
           
    

        }
////////// time table composer
////////////////////////////////////////////////////////////////////////////////
  
////////////////////////////////////////////////////////////////////////////////////
/////TimeTable Composer
    // parameter = ''subject_id='+subject_id+'&&t_schulname='+t_schulname+'&&t_rname='+t_rname+classLevel='+classLevel+'&&classcategory='+classcategory+'&&date_timetable='+date_timetable+'&&start_classprd='+start_classprd+'&&End_classprd='+End_classprd+'&&tym_selectTopic='+tym_selectTopic;
   
   
    if(!empty($_POST['classLevel'])){

        $classLevel        =  $db->test_input($_POST['classLevel']);
        $classcategory     =  $db->test_input($_POST['classcategory']);
        $date_timetable    =  $db->test_input($_POST['date_timetable']);
        $start_classprd    =  $db->test_input($_POST['start_classprd']);
        $End_classprd      =  $db->test_input($_POST['End_classprd']);
        $tym_selectTopic   =  $db->test_input($_POST['tym_selectTopic']);
        $tym_subTopic_ID   =  $db->test_input($_POST['tym_selectsubTopic']);
        $tym_subject_id    =  $db->test_input($_POST['subject_id']);
        $tym_t_schulname   =  $db->test_input($_POST['t_schulname']);
        $tym_t_rname       =  $db->test_input($_POST['t_rname']);


        $keys        =  explode(',' ,$classLevel);
        $class        =  explode(',' ,$classLevel);
        $catgory       =  explode(',' ,$classcategory);
        $date_tmtable   =  explode(',' ,$date_timetable);
        $startprd  =  explode(',' ,$start_classprd);
        $endprd    =  explode(',' ,$End_classprd);
        $selectedTpc    =  explode(',' ,$tym_selectTopic);
        $selected_subTpc    =  explode(',' ,$tym_subTopic_ID);
    
        $result = array();

        foreach ($keys as $id => $key) {

            $result[$key] = array(
                'class'          => $class[$id],
                'category'       => $catgory[$id],
                'date_tmtable'   => $date_tmtable[$id],
                'startprd'       => $startprd[$id],
                'endprd'         => $endprd[$id],
                'selectedTpc'    => $selectedTpc[$id],
                'slctdSubTpc'    => $selected_subTpc[$id],
            );


              echo $clas          =  $result[$key]['class'];
              echo $category      =  $result[$key]['category'];
              echo $date_ttable   =  $result[$key]['date_tmtable'];
              echo $startpind     =  $result[$key]['startprd'];
              echo $endpind       =  $result[$key]['endprd'];
              echo $slctedTpc          =  $result[$key]['selectedTpc'];
              echo $slctdSubTpc        =  $result[$key]['slctdSubTpc'];
              echo '<br/>';



             if (!empty($date_ttable) && !empty($startpind) && !empty($endpind)) {
               # code...

                //ERRRORR.... thing to remeba how to remove deuplicated data her ...
                $insertTimetable = $db->insert('vy_timtable',
                    array('user_id'      => $user_id ,
                          'subject_id'  => $tym_subject_id,
                          'dayTopic'     => $slctedTpc,
                          'daySubtpc'    => $slctdSubTpc,
                          'date_period'  =>  $date_ttable,
                          'start_period' => $startpind,
                          'end_period'   => $endpind,
                          'Level'        => $clas,
                          'school_name'  => $tym_t_schulname,
                          'region'       => $tym_t_rname,
                          'category'     => $category,
                          'date'         => date("Y-m-d H:i:s")
                        )

                );
                 
                  if ($insertTimetable){
                      # code...
                      echo "Saveed....  'dublicated Error";
                  }else{
                    echo "Unsaved... dublicated data";
                  }
               
            }
          
        }
    }
/////END: TimeTable Composer
////////////////////////////////////////////////////////////////////////////////////



//////////////////////////////////////////////////////////////////////////////
///////Topic chooseer
        if(!empty($_POST['Selectvalue'])){
             $Selectvalue    =  $db->test_input($_POST['Selectvalue']);
             $subject_id    =  $db->test_input($_POST['subject_id']);
             
              // $tymT_subjectopics = $db->query('SELECT * FROM vy_subjecttopics WHERE subject_id = ? AND user_id = ? AND  id = ?',array($subject_id,$user_id,$Selectvalue ));
              //   if ($tymT_subjectopics->count()) {
              //       $topicId =  $tymT_subjectopics->first()->id;

             $subs = '';

                    $tymT_subtopics = $db->query('SELECT * FROM vy_subtpc WHERE subject_id = ? AND user_id = ? AND  topic_id = ?',array($subject_id,$user_id,$Selectvalue ));


                    if($tymT_subtopics->count()){

                      $a = -1;
                        foreach ($tymT_subtopics->results() as $tymT_subtopic){
                         # code...
                           $a++;
                             
                            $tm_title_id = $tymT_subtopic->id;
                            $tm_title = $tymT_subtopic->subtpc;

                            $subs .=  ' 
                                    <div class="subs subst'.$a.'">
                                    <span class ="subt" id = "subtopictitle'.$tm_title_id.'" >'.$tm_title .'</span>
                                      <span class = "chooseSubtopic">
                                        <input type="checkbox" name="" class ="subtoptc_checkbox"  id = "tymete_subtpc_checkbox'.$a.'" value = '.$tm_title_id.' >
                                      </span>
                                    </div>
                                    ';
                        }
                     }else{
                        $subs = "Subtopic Not Created";
                     }

                     echo $subs = "<div class = \"subtopic_list\" >$subs</div>";

               
        }



////////////////////////////////////////////////////////////////////////////////
////////// 
  // parameter= 'tcpId='+tcpId+'&&tuser_id='+user_id+'&&sbtpcId='+sbtpcId;
    
    if(!empty($_POST['tuser_id'])){
        
        $tuser_id    =  $db->test_input($_POST['tuser_id']); 
       
    echo    $tttcpId    =  $db->test_input($_POST['tcpId']);
    
    echo    $sbtpcId    =  $db->test_input($_POST['sbtpcId']);
    
        $tsubject    =  $db->test_input($_POST['tsubject']);
         
        
          $tusername = '';
          $prof = '';
          $tymtabletopc_titl = '';
          $titleContent = '';


        $tymtable_querys =  $db->query('SELECT * FROM vy_subjecttopics WHERE id = ? AND user_id = ?',array($tttcpId,$tuser_id));

         if($tymtable_querys->count()){
            foreach ($tymtable_querys->results() as $tymtable_query) {
                # code...
                
                $tymtabletopc_titl  .=  $tymtable_query->topic_title;
                $titleContent       .=  $tymtable_query->titleContent;
                $creatortopc_userId  =  $tymtable_query->user_id;


                $creatTpc_q =  $db->query('SELECT * FROM vy_users WHERE id = ?',array( $creatortopc_userId));
                $tusername          .=  $creatTpc_q->first()->username;
                $teach_prof          = $creatTpc_q->first()->profile;
                $prof               .= $db->prfl_pct($teach_prof,$width=100,$height=100);
            }

            $error =  "present My Dear";
         }else{
            $error = "Not found";
         }
          
 ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  //content Show
        $tymtable_subtpcs =  $db->query('SELECT * FROM vy_subtpc WHERE user_id = ? AND topic_id = ?',array($tuser_id,$tttcpId));


        $tymt_subtpc     = '';
        $tymt_subtpc_contct   = '';
        
        if($tymtable_subtpcs->count()){
            foreach ($tymtable_subtpcs->results() as $tymtable_subtpc) {
                # code...
                $tymt_subtpc           .=  $tymtable_subtpc->subtpc;
                $tymt_subtpc_contct    .=  $tymtable_subtpc->subtpc_contct;
            }
        }
       
        $query_subjectopic = $db->query('SELECT * FROM  vy_timtable WHERE subject_id = ? AND user_id = ?',array($subject_id,0));
                                                        if($query_subjectopic->count()){

       
             
        echo "
              <div id = 'close' onclick = \"closeDiv('timetable_temprate');\"><i class = 'fa fa-close'></i></div>
   


    <div id = t_profile>
        <div class ='t_profile'>".$prof."</div>
        <div class ='text_question'>
            <div class = 'semcicle'></div>
        <textarea id='ask_mada' onclick=\"askteachmQstn('ask_mada','allaskedtimetable');\" placeholder = 'Ask your teacher'></textarea>
        <div id= 'searchOnv'><input type = 'text' id ='search' name ='search_v' placeholder='search pepars qustion,teachers,students etc'></div>
        </div>
       
       
        <div  class = 'allasked' id = 'allaskedtimetable'>
            <div class = 'closet' onclick = \"closeDiv('allaskedtimetable');\"><span >hide</span></div>
            <div id = 'overlowOfQuestion'>
                <div id = 'knewknolgde'>
                    <div id = 'bief_question' onclick =\"switchVisbltyQ('chev_on_book_a','chev_se_book_a','mainKnolagd_book_a');\">
                        <i id = 'chev_on_book_a'class ='fa fa-chevron-right'></i>
                        <i id = 'chev_se_book_a' class ='fa fa-chevron-down'></i>
                       <span id = knw_title> Wha is real mean by the difination ....</span>
                    </div>
                    
                  <div id = 'mainKnolagd_book_a' class = 'mainKnolagde'>  
                    <div id = 'qustion'>Wha is real mean by the difination bilogy and si biology different to botanist</div>
                    <div id = 'q_reply'>
                        <div id ='t_ans_prof'>
                            <img src ='img/profiles/p2.jpg' width ='100px' height ='100px;'>
                        </div>
                        <div id = 'ans'>Biology is study of living organism andther envorment
                           and botany is branch of of bilogy which deals with plants
                        </div>
                    </div>
                </div>
                </div>
                
                
                 <div id = 'knewknolgde'>
                    <div id = 'bief_question' onclick =\"switchVisbltyQ('chev_on_book_b','chev_se_book_b','mainKnolagd_book_b');\">
                        <i id = 'chev_on_book_b'class ='fa fa-chevron-right'></i>
                        <i id = 'chev_se_book_b' class ='fa fa-chevron-down'></i>
                        <span id = knw_title> Wha is real mean by the difination .... </span>
                    </div>
                    
                  <div id = 'mainKnolagd_book_b'  class = 'mainKnolagde'>  
                    <div id = 'qustion'>Wha is real mean by the difination bilogy and si biology different to botanist</div>
                    <div id = 'q_reply'>
                        <div id ='t_ans_prof'>
                            <img src ='img/profiles/p2.jpg' width ='100px' height ='100px;'>
                        </div>
                        <div id = 'ans'>Biology is study of living organism andther envorment
                           and botany is branch of of bilogy which deals with plants
                        </div>
                    </div>
                </div>
                </div>
                
                 <div id = 'knewknolgde'>
                    <div id = 'bief_question' onclick =\"switchVisbltyQ('chev_on_book_c','chev_se_book_c','mainKnolagd_book_c');\">
                        <i id = 'chev_on_book_c'class ='fa fa-chevron-right'></i>
                        <i id = 'chev_se_book_c' class ='fa fa-chevron-down'></i>
                       <span id = knw_title> how genetics work wen a pragnancy ....</span>
                    </div>
                        
                    <div id = 'mainKnolagd_book_c' class = 'mainKnolagde'>  
                        <div id = 'qustion'>how genetics work wen a pragnancy woman want to delivar twins beby</div>
                        <div id = 'q_reply'>
                            <div id ='t_ans_prof'>
                                <img src ='img/profiles/p2.jpg' width ='100px' height ='100px;'>
                            </div>
                            <div id = 'ans'>geneitcs is formation of human bodywhisch result of shape and or=ther succemsta for restance Y meet with x is formed a boy and this is like it depend on the day you have sex
                            </div>
                        </div>
                        
                        <div id = 'q_reply'>
                            <div id ='t_ans_prof'>
                                <img src ='img/profiles/img1.jpg'>
                            </div>
                           
                            <div id = 'ans'>Biology is study 
                            </div>
                        </div>
                        
                         <div id = 'q_reply'>
                    <div id ='t_ans_prof'>
                        <img src ='img/profiles/img1.jpg'>
                    </div>
                    <div id = 'ans'>i wish to know the best day to have sex becouse ilove boyzbeby
                    </div>
               
                         </div>
                    </div>
                </div>
                
               
            </div>
            <div id ='q_text'>
                <textarea id = 'q_textarea'></textarea>
            </div>
        </div>
    </div>


    <div id = 'v_list'>
        <div class = 'v_overflow'>
           <div id = 'dayTopicDate' class = 'dayTopicDate'>
                <div id = 'dateTopic'  onclick = \"swicthVisibility('subtopic');\">
                    <span id = 'datePeriod'>27/3/2018</span>
                    <span id = 'topicName'>FAsihi</span>
                </div>
                
                <div id = 'subtopic' class = 'subtopic'>
                    <div class = 'major_subTopic' onclick = \"swicthVisibility('sub_of_subtopic');\">
                        <span id = 'sub_topic'>Maana ya fasihi</span>
                        <span id = 'datetopictought'>23/3/2016</span>
                        <span id = 'teacher_present'><i  class='icofont icofont-check' aria-hidden='true'></i></span>
                        
                    </div>
                    
                    <div id = 'sub_of_subtopic' class = 'sub_of_subtopic'>
                        <span class = 'sub_1_1'>fasihi Andishi</span>
                        <span class = 'sub_1_2'>fasihi Simulizi</span>
                    </div>
                </div>
                
           </div>
           
           <div id = 'dayTopicDate' class = 'dayTopicDate'>
                <div id = 'dateTopic'  onclick = \"swicthVisibility('subtopic_1');\">
                    <span id = 'datePeriod'>27/3/2018</span>
                    <span id = 'topicName'>Uchambuzi wa vitabu</span>
                </div>
                
                <div id = 'subtopic_1' class = 'subtopic'>
                    <div class = 'major_subTopic' onclick = \"swicthVisibility('sub_of_subtopic_1_1');\">
                        <span id = 'sub_topic'>Maana ya Maudhui</span>
                        <span id = 'datetopictought'>23/3/2016</span>
                        <span id = 'teacher_present'><i  class='icofont icofont-check' aria-hidden='true'></i></span>
                        
                    </div>
                    
                    <div id = 'sub_of_subtopic_1_1' class = 'sub_of_subtopic'>
                        <span class = 'sub_1_1'>Watoto wa Mama Ntilie</span>
                        <span class = 'sub_1_2'>Ngosw Penzi Kitovu Cha uzembe</span>
                    </div>
                </div>
                
           </div>
           
           
          
        
        
            <div id = 'dayTopicDate' class = 'Teacher_shiftiz'>
                New Teacher Last Teacher Shifted
           </div>
        
            <div id = 'dayTopicDate' class = 'dayTopicDate'>
                <div id = 'dateTopic'  onclick = \"swicthVisibility('subtopic');\">
                    <span id = 'datePeriod'>27/3/2018</span>
                    <span id = 'topicName'>Nomino</span>
                </div>
                
                <div id = 'subtopic' class = 'subtopic'>
                    <div class = 'major_subTopic' onclick = \"swicthVisibility('sub_of_subtopic');\">
                        <span id = 'sub_topic'>Maana ya Nomino</span>
                        <span id = 'datetopictought'>23/3/2016</span>
                        <span id = 'teacher_present'><i  class='icofont icofont-check' aria-hidden='true'></i></span>
                        
                    </div>
                    
                    <div id = 'sub_of_subtopic' class = 'sub_of_subtopic'>
                        <span class = 'sub_1_1'>Aina za Nomino</span>
                        <span class = 'sub_1_2'>fasihi Simulizi</span>
                    </div>
                </div>
                
           </div>
           
           <div id = 'dayTopicDate' class = 'dayTopicDate'>
                <div id = 'dateTopic'  onclick = \"swicthVisibility('subtopic_3');\">
                    <span id = 'datePeriod'>27/4/2017</span>
                    <span id = 'topicName'>Uchambuzi wa vitabu</span>
                </div>
                
                <div id = 'subtopic_3' class = 'subtopic'>
                    <div class = 'major_subTopic' onclick =\"swicthVisibility('sub_of_subtopic_2_1');\">
                        <span id = 'sub_topic'>Maana ya Maudhui</span>
                        <span id = 'datetopictought'>23/5/2017</span>
                        <span id = 'teacher_present'><i  class='icofont icofont-check' aria-hidden='true'></i></span>
                    </div>
                    
                    <div id = 'sub_of_subtopic_2_1' class = 'sub_of_subtopic'>
                        <span class = 'sub_1_1'>Watoto wa Mama Ntilie</span>
                        <span class = 'sub_1_2'>Ngosw Penzi Kitovu Cha uzembe</span>
                    </div>
                </div>
                
           </div>
           
           
          
        
        </div>
        
    </div>
    <div id = 'v_lecture' class ='centerPlace notes'>
       <div class = 'notesView'>
            <div class = 'printersLikeItemz'></div>
            <div class = 'TimeTabletpc_title'>
              ".$tymtabletopc_titl."
            </div>

            <div class = 'TimTabletpc_body'>
              ".escape($titleContent)."
            </div>

             <div class = 'TimeTablesubtpc_title'>
              ".$tymt_subtpc ."
            </div>

            <div class = 'TimTabletpc_body'>
              ".escape($tymt_subtpc_contct)."
            </div>
               
       </div>

          
            
        <div class = 'Quiznotes'>Quiz Notes</div>
        <div class = 'editnotes'>Edit Notes</div>
    </div>
    
    <div id = 'v_chart'>
        <div id='post_v_chart' onclick= \"swicthVisibility('text_vchart');\">Post Now</div>
        <div id = 'text_vchart'><textarea></textarea>
            <div id = 'send_vchart'>
                <div id = 'post_v'><input class = 'p' type='submit' id='submit_post' value = 'Post Update'></div>
                <div id = 'upload_photo'><i class='fa fa-camera' id= 'cover_camera_prof'></i></div>
            </div>
        </div>
        <div class = 'overflow'>
             <div id = 'posted_vchart'>
                    <div class = 'posted_profile'>
                        <div class = 'posted_cicle'>
                            <img src ='img/profiles/p4.jpg' >
                       </div>
                        
                        <div class ='name_time'>
                            <span class = 'name'>Jessica Sanders</span>
                            <span class = 'time_ago'>5hrs Ago</span>
                        </div>
                    
                    </div>
                    <div class ='msg'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
                    <div class ='icons'>
                        <span id='reply' class = 'ico reply'><i class = 'fa fa-reply'></i></span>
                        <span id='love' class = 'ico reply'><i class = 'fa fa-heart-o'></i></span>
                        <span id='thumb_up' class = 'ico reply'><i class = 'fa fa-thumbs-up'></i></span>
                        <span id='delete' class = 'ico reply'><i class= 'fa fa-remove'></i></span>
                        <span id='spam' class = 'ico reply'>spam</span>
                        <span id='delete' class = 'ico reply'><i class= 'fa fa-unlock-alt'></i></span>
                    </div>
                    
                </div>
             
             
             <div id = 'reply_vchart'>
                    <div class = 'posted_profile'>
                        <div class = 'posted_cicle'>
                            <img src ='img/profiles/p1.jpg' >
                       </div>
                        
                         <div class ='name_time'>
                            <span class = 'name'>Challo</span>
                            <span class = 'time_ago'>8hrs Ago</span>
                        </div>
                    </div>
                    
                    <div class ='msg'>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi</div>
                    <div class ='icons'>
                        <span id='reply' class = 'ico reply'><i class = 'fa fa-reply'></i></span>
                        <span id='love' class = 'ico reply'><i class = 'fa fa-heart-o'></i></span>
                        <span id='thumb_up' class = 'ico reply'><i class = 'fa fa-thumbs-up'></i></span>
                        <span id='delete' class = 'ico reply'><i class= 'fa fa-remove'></i></span>
                        <span id='spam' class = 'ico reply'>spam</span>
                        <span id='delete' class = 'ico reply'><i class= 'fa fa-unlock-alt'></i></span>
                    </div>
                </div>
             
             
               <div id = 'posted_vchart'>
                    <div class = 'posted_profile'>
                        <div class = 'posted_cicle'>
                            <img src ='img/profiles/p4.jpg' >
                       </div>
                        
                        <div class ='name_time'>
                            <span class = 'name'>Jessica Sanders</span>
                            <span class = 'time_ago'>5hrs Ago</span>
                        </div>
                    
                    </div>
                    <div class ='msg'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
                    <div class ='icons'>
                        <span id='reply' class = 'ico reply'><i class = 'fa fa-reply'></i></span>
                        <span id='love' class = 'ico reply'><i class = 'fa fa-heart-o'></i></span>
                        <span id='thumb_up' class = 'ico reply'><i class = 'fa fa-thumbs-up'></i></span>
                        <span id='delete' class = 'ico reply'><i class= 'fa fa-remove'></i></span>
                        <span id='spam' class = 'ico reply'>spam</span>
                        <span id='delete' class = 'ico reply'><i class= 'fa fa-unlock-alt'></i></span>
                    </div>
                    
                </div>
               
               
               <div id = 'posted_vchart'>
                    <div class = 'posted_profile'>
                        <div class = 'posted_cicle'>
                            <img src ='img/profiles/p4.jpg' >
                       </div>
                        
                        <div class ='name_time'>
                            <span class = 'name'>Jessica Sanders</span>
                            <span class = 'time_ago'>5hrs Ago</span>
                        </div>
                    
                    </div>
                    <div class ='msg'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
                    <div class ='icons'>
                        <span id='reply' class = 'ico reply'><i class = 'fa fa-reply'></i></span>
                        <span id='love' class = 'ico reply'><i class = 'fa fa-heart-o'></i></span>
                        <span id='thumb_up' class = 'ico reply'><i class = 'fa fa-thumbs-up'></i></span>
                        <span id='delete' class = 'ico reply'><i class= 'fa fa-remove'></i></span>
                        <span id='spam' class = 'ico reply'>spam</span>
                        <span id='delete' class = 'ico reply'><i class= 'fa fa-unlock-alt'></i></span>
                    </div>
                    
                </div>
               
               
               <div id = 'posted_vchart'>
                    <div class = 'posted_profile'>
                        <div class = 'posted_cicle'>
                            <img src ='img/profiles/p4.jpg' >
                       </div>
                        
                        <div class ='name_time'>
                            <span class = 'name'>Jessica Sanders</span>
                            <span class = 'time_ago'>5hrs Ago</span>
                        </div>
                    
                    </div>
                <div class ='msg'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
                    <div class ='icons'>
                        <span id='reply' class = 'ico reply'><i class = 'fa fa-reply'></i></span>
                        <span id='love' class = 'ico reply'><i class = 'fa fa-heart-o'></i></span>
                        <span id='thumb_up' class = 'ico reply'><i class = 'fa fa-thumbs-up'></i></span>
                        <span id='delete' class = 'ico reply'><i class= 'fa fa-remove'></i></span>
                        <span id='spam' class = 'ico reply'>spam</span>
                        <span id='delete' class = 'ico reply'><i class= 'fa fa-unlock-alt'></i></span>
                    </div>
                    
                </div>
               
               
               <div id = 'posted_vchart'>
                    <div class = 'posted_profile'>
                        <div class = 'posted_cicle'>
                            <img src ='img/profiles/p4.jpg' >
                       </div>
                        
                        <div class ='name_time'>
                            <span class = 'name'>Jessica Sanders</span>
                            <span class = 'time_ago'>5hrs Ago</span>
                        </div>
                    
                    </div>
                    <div class ='msg'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
                    <div class ='icons'>
                        <span id='reply' class = 'ico reply'><i class = 'fa fa-reply'></i></span>
                        <span id='love' class = 'ico reply'><i class = 'fa fa-heart-o'></i></span>
                        <span id='thumb_up' class = 'ico reply'><i class = 'fa fa-thumbs-up'></i></span>
                        <span id='delete' class = 'ico reply'><i class= 'fa fa-remove'></i></span>
                        <span id='spam' class = 'ico reply'>spam</span>
                        <span id='delete' class = 'ico reply'><i class= 'fa fa-unlock-alt'></i></span>
                    </div>
                    
                </div>
             
             
             <div id = 'reply_vchart'>
                    <div class = 'posted_profile'>
                        <div class = 'posted_cicle'>
                            <img src ='img/profiles/p1.jpg' >
                       </div>
                        
                         <div class ='name_time'>
                            <span class = 'name'>Challo</span>
                            <span class = 'time_ago'>8hrs Ago</span>
                        </div>
                    </div>
                    
                    <div class ='msg'>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi</div>
                    <div class ='icons'>
                        <span id='reply' class = 'ico reply'><i class = 'fa fa-reply'></i></span>
                        <span id='love' class = 'ico reply'><i class = 'fa fa-heart-o'></i></span>
                        <span id='thumb_up' class = 'ico reply'><i class = 'fa fa-thumbs-up'></i></span>
                        <span id='delete' class = 'ico reply'><i class= 'fa fa-remove'></i></span>
                        <span id='spam' class = 'ico reply'>spam</span>
                        <span id='delete' class = 'ico reply'><i class= 'fa fa-unlock-alt'></i></span>
                    </div>
                </div>
             
             
             <div id = 'posted_vchart'>
                    <div class = 'posted_profile'>
                        <div class = 'posted_cicle'>
                            <img src ='img/profiles/p4.jpg' >
                       </div>
                        
                        <div class ='name_time'>
                            <span class = 'name'>Jessica Sanders</span>
                            <span class = 'time_ago'>5hrs Ago</span>
                        </div>
                    
                    </div>
                    <div class ='msg'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
                    <div class ='icons'>
                        <span id='reply' class = 'ico reply'><i class = 'fa fa-reply'></i></span>
                        <span id='love' class = 'ico reply'><i class = 'fa fa-heart-o'></i></span>
                        <span id='thumb_up' class = 'ico reply'><i class = 'fa fa-thumbs-up'></i></span>
                        <span id='delete' class = 'ico reply'><i class= 'fa fa-remove'></i></span>
                        <span id='spam' class = 'ico reply'>spam</span>
                        <span id='delete' class = 'ico reply'><i class= 'fa fa-unlock-alt'></i></span>
                    </div>
                    
                </div>
             
             
             <div id = 'reply_vchart'>
                    <div class = 'posted_profile'>
                        <div class = 'posted_cicle'>
                            <img src ='img/profiles/p1.jpg' >
                       </div>
                        
                         <div class ='name_time'>
                            <span class = 'name'>Challo</span>
                            <span class = 'time_ago'>8hrs Ago</span>
                        </div>
                    </div>
                    
                    <div class ='msg'>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi</div>
                    <div class ='icons'>
                        <span id='reply' class = 'ico reply'><i class = 'fa fa-reply'></i></span>
                        <span id='love' class = 'ico reply'><i class = 'fa fa-heart-o'></i></span>
                        <span id='thumb_up' class = 'ico reply'><i class = 'fa fa-thumbs-up'></i></span>
                        <span id='delete' class = 'ico reply'><i class= 'fa fa-remove'></i></span>
                        <span id='spam' class = 'ico reply'>spam</span>
                        <span id='delete' class = 'ico reply'><i class= 'fa fa-unlock-alt'></i></span>
                    </div>
                </div>
             
        </div>
    </div>
         ";
       
   

    }
    }



// if($_POST['Action'] == 'simpleGetId'){
//       echo  $_POST['exmId'];
// }


}else{
  echo '<p>You need <a href = "login.php">Login</a> or <a href = "registration.php">Register</a></p>';
}  



