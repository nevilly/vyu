<?php 

   require_once 'Core/Init.php';

    $db = DB::getInstance();
    if(!$username = Input::get('user')){
       Redirect::to('page.php');
    }else{
    	$user = new User($username);
    	if(!$user ->exists()){
            Redirect::to(404);
    	}else{
    	 	$user_id = $user->data()->id;
    	 	$user_uname = $user->data()->username;
    	 	$fullname = $user->data()->fullname;
    	}
    }


    $sesion_id = session::get(config::get('session/session_name'));
    $subject_id = Input::get('subject');

	////////////////////////////////////////////////////////////////////////////////////
	/////// Profile Queries
	    $profile_picture = $db->query('SELECT profile FROM vy_users WHERE id =?', array($user_id));
		    if($profile_picture->count()){
			   
			    if($profile_picture->first()->profile){
			    	if($sesion_id == $user_id ){
	                  $prof_dir = "<img src =userdata/".$profile_picture->first()->profile." width ='100px' height ='100px;'>";
	                }elseif ($sesion_id != $user_id) {
	                	# code...

	                	   $prof_dir = "<img  src =userdata/".$profile_picture->first()->profile." width ='100px' height ='100px;' style='margin:0px' >";
	                }

	               
			   
			    }else{
			    	if($sesion_id == $user_id ){
			    	 $prof_dir = "<img src ='userdata/profile/pro3.png' width ='100px' height ='100px;' class = 'mainUserprofile'>";
			    	}elseif ($sesion_id != $user_id) {
			    		# code...
	                    $prof_dir = "<img src ='userdata/profile/pro3.png' width ='100px' height ='100px;' style='margin:0px;' >";
			    	}
			    	
			    }
			}
			
			if($sesion_id == $user_id ){
				$user_upload = "<div onclick= \"openAbsolute(
					'uploadprofile_pc');\" class = 'uploadProf_pc'><i class='fa fa-camera' ></i></div>";
			}

	        $profile_cover = $db->query('SELECT user_id,photo FROM vy_photo WHERE user_id =? AND p_status=?', array($user_id,'b'));
		    if(!$profile_cover->count()){
			    $prof_cover_dir = "<img src = 'img/profiles/life.jpg'/>";
			}else{	
			    $prof_cover_dir = "<img src =userdata/".$profile_cover->first()->photo." width ='100px' height ='100px;'>";
			}
	/////// End Profile Queries				   	
	//////////////////////////////////////////////////////////////////////////////////////

    ////////////////////////////////////////////////////////////////////////////////////
	///////// check FrndShp Bottom
	    if($user_id != $sesion_id){ 
	        //check on friends exists
	        $chek_frnd = $db->query("SELECT id FROM vy_frnds WHERE (user_one =? AND user_two =?) OR (user_one =? AND user_two=?) ", array($sesion_id,$user_id,$user_id,$sesion_id ));
		    
		    if($chek_frnd-> count()){
		    	#frndship found == No botton
	            $frndsBotom = '';
			}else{
				#frndship not found... Check in Request table
			  	$chek_frnd = $db->query("SELECT id FROM vy_req WHERE (user_id =? AND recv_id =?) OR (user_id =? AND recv_id =?) AND status =?", array($sesion_id,$user_id,$user_id,$sesion_id,'f'));
	            if($chek_frnd-> count()){
	            	#Request found .... No botton
	          	    $frndsBotom = '';
	            }else{
		          	#Request not found ....botton
		          	$frndsBotom = '<input type="submit" id = "friendReq" name = "addFrndReq" onclick = \'sendRqst("'.$user_id .'","f","profile.php")\'>';
	            }
			}   
	       
	      
		$frendsBottn = '<div class = "sendsRequest">
					<input type="submit" name = "SendMsg" value="Send Msg" onclick = "">
					'.$frndsBotom.'
					<div id = "resz"></div>
			   </div>';

		}else{
		 	$frendsBottn ="";
		}
    /////////END: check FrndShp Bottom
    ////////////////////////////////////////////////////////////////////////////////////

   
    
     

    $user_info = $db->query('SELECT * FROM student_acc,vy_users WHERE student_acc.user_id = vy_users.id AND user_id =?', array($user_id));
	   // if(!$user_info->count()){
	   // 	  echo 'fail';
	   // }else{	
	   //  	  // foreach($user->results() as $user){
	   //     //       echo escape($user-> suubject_name ).'<br/>';
	   //  	  //  }
	   //  }
	@ $st_schulname = $user_info->first()->schoolname;
	@ $st_rname=$user_info->first()->region;
	@ $st_lev =$user_info->first()->levelOrStandard;
	@ $st_fa  = $user_info->first()->facultOrComb_taken;
	@ $st_levelidentify  = $user_info->first()->level_identify;

 




