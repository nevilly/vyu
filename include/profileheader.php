	<!-- 	<?php  
    // require_once 'Core/Init.php';
    // // $user = new User();
    // // //echo $user->data()->username;
    // // if ($user->isLoggedIn()) {
    // //   # code...
    // //   // echo 'logged In';
    // //   // echo escape($user->data()->username);


    // if(!$username = Input::get('user')){
    //    Redirect::to('page.php');
    // }else{
    // 	 $user = new User($username);
    // 	 if(!$user ->exists()){
    //         Redirect::to(404);
    // 	 }else{
    // 	 	$data = $user->data();
    // 	 }
    // }
?> -->
  <?php 
   ?>



		<div class  ='large_profile'>
					<?php echo @$prof_cover_dir; ?>
				    <div id = 'cover_uploads'  class = 'prof cover_uploads'><span>Update cover photo</span></div><i onclick="openAbsolute('uploadprofile_cover');" class="fa fa-camera" id= 'cover_camera_prof'></i>
					<div id = 'cover_close'    class = 'prof cover_close'><span>Remove cover photo</span></div><i class="fa fa-times"  id= 'clos_cover_prof'></i>
             	</div>
				
				<div class = 'profileBox'>
					 <div class = 'profile_cicle' >
					 	<?php echo @$user_upload; ?>
					 	<?php echo @$prof_dir; ?>
					 </div>
					 <div class = 'user_info'>
						<div class = 'Username'><span><?php echo escape($fullname);?><span class='aka'> ,<?php echo escape($user_uname);?></span></span></div><hr/>
						<div class = 'dirLink'><i class ='fa fa-facebook-square'></i> <i class ='fa fa-twitter-square'></i> <i class ='fa fa-youtube-play'></i></div>
					</div>
			    </div>
				   
				<div class = 'follow'>
					<div class ='foll following'><span class = 'no'>6</span><span class  = 'title'>Following</span></div>
					<div class ='foll followers'><span class = 'no'>7</span><span class  = 'title'>Followers</span></div>
					
				</div>
                <?php echo $frendsBottn; ?>
			
				
				<div id = 'divnav'>
					<a class = 'wall navWall' href ="page.php"><span class = 'categry wal'>WALL</span></a>
					<a class = 'wall navprof' href ="profile.php"><span class = 'categry prof'>PROFILE</span></a>
					<a class = 'wall navSc'   href ="science.php"><span class = 'categry sc'>SCIENCE</span>
					 <div class = "nofy"><span>18</span></div></a>
					<a class = 'wall navBusn' href ="busness.php"><span class = 'categry busn'>BUSNESS</span>
					<div class = "nofy"><span>22</span></div></a>
					<a class = 'wall navArt'  href ="art.php"><span class = 'categry art'>ARTS</span>

					<div class = "nofy"><span>8</span></div></a>
					<a class = 'wall navEntr' href ="enterprenuer.php"><span class = 'categry entr'>ENTERPRENUERs</span><div class = "nofy enterpr"><span>8</span></div></a>
				</div>
				 <!-- <div class = "nofy"><span>8</span></div> -->
				<div id = 'divnavtwo'>
					<div class = 'divNavTwo'>
						<a class = 'wall navWall' href ="#"><span class = 'categry wal'>My wall</span></a>
						<a class = 'wall navprof' href ="#">New Feed</a>
						<a class = 'wall navSc' href ="#">MyLikes</a>
						<a class = 'wall navBusn' href ="#">Following</a>
						
				   </div>
					
					<div class = 'everythng'>-EVERYTHING-<i class="fa fa-angle-down" aria-hidden="true"></i></div>
					
				</div>