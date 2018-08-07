<?php  
     require_once 'Core/Init.php';

	$user = new User();
	if ($user->isLoggedIn()) {

    $username = escape($user->data()->username);
    $og_id = escape($user->data()->id);
    $sesion_id = session::get(config::get('session/session_name'));      


  //   $photo_sql = 'SELECT profile FROM vy_users WHERE user_id =? AND p_status=?';

  //   $profile_picture = $db->query($photo_sql, array($user_id,'a'));
	 //    if($profile_picture->count()){
		   
		
		//     if($profile_picture->first()->profile){
  //                 $prof_dir = "<img src =userdata/".$profile_picture->first()->profile." width ='100px' height ='100px;'>";
		   
		//     }else{
		//     	 $prof_dir = "<img src ='userdata/profile/pro3.png' width ='100px' height ='100px;'>";
		//     }
		// }


      $profile_header = $db->query('SELECT profile FROM vy_users WHERE id =?', array($sesion_id));
	    if(!$profile_header->first()->profile){
		    $profile_head = "<img src ='userdata/profile/pro3.png' width ='100px' height ='100px;'>";
		}else{	
		    $profile_head = "<img src =userdata/".$profile_header->first()->profile." width ='100px' height ='100px;'>";
		}


   
$acc = $db->query("SELECT * FROM vy_users WHERE id = ?",array($sesion_id));
$acc->first()->username;

   
                    
?>

<div id ='top_header' class ='top_header'>
			<i   id = 'sid_nav_close'  class="fa fa-bars" ></i>
			<i   id = 'sid_nav_open'  class="fa fa-bars" ></i>
			
			<div class ='input_to_header'>
				<input type = 'text' name='top_search_header' id = 'input_Top_h' class = "input_Top_header" onclick = " onlyBigsearch('displaySeachresult','input_Top_h','ItemTwo');"
                 onclick = "top_headerhideshow('displaySeachresult');"
				>
				<i class="fa fa-search" aria-hidden="true"></i>
                <!---///=== big search input //-->
				<div id = "displaySeachresult" class = "displaySeachresult">
				  <div id = 'close' onclick = "closeDi('displaySeachresult','ItemTwo','input_Top_h');">
				      <i class = 'fa fa-close'></i>
				  </div >
				  <div class = "xoverflow">
				      <div class = "despl">
				        <div class = "searchprof"> 
				          <div class = 'profImg'>
				            <img title = 'Patent Profile' src = 'img/profiles/p8.jpg' id = parent_img/>
				          </div>  
				        </div>

				        <div class = "detdispl">
				          <span class = "name">Nehemia Mwansasu</span>
				          <span class = "school">Unversity of Dar Es Salaam</span>
				          <span class = "pozision">Geoligist Lecture</span>
				        </div>
				      </div>

				      <div class = "despl">
				        <div class = "searchprof"> 
				          <div class = 'profImg'>
				            <img title = 'Patent Profile' src = 'img/profiles/p8.jpg' id = parent_img/>
				          </div>  
				        </div>

				        <div class = "detdispl">
				          <span class = "name">Nehemia Mwansasu</span>
				          <span class = "school">Unversity of Dar Es Salaam</span>
				          <span class = "pozision">Geoligist Lecture</span>
				        </div>
				      </div>
				    </div>
				</div>
				<!---///===Endof big search input //-->
			</div>
			
			<div id = "ItemTwo" class = 'ItemTwo'>

				<div class ='DivTwo Membars'>
					<?php 
				      if($acc->first()->teacher_acc == 1){
				      	echo '<a href = "teacheraccount.php?user='.$acc->first()->username.'">Teacher</a>';
					  }
					?>

					<!-- <a href = "#">My Account</a> -->
				</div>
				 
				<div class ="DivTwo Groups">
					<?php 
				      if($acc->first()->student_acc == 1){
				      	echo '<a href = "student_profile.php?user='.$acc->first()->username.'">Student</a>';
					  }
					?>
				</div>

				<div class ='DivTwo activities'>
                    <?php 
                        if($acc->first()->enterprenuer_acc == 1){
					      	echo '<a href = "enterprenuer.php?user='.$acc->first()->username.'">enterprenuer</a>';
						}
                    ?>
				</div>
				
                <div class ='DivTwo More' id='itemMore' ><a href = "#"    >Boxed</a></div>
				<div class ='DivTwo Boxed' id='itemBoxed' ><a href = "#"
				    onclick = "swicthVisibility('topHeaderMor');"
                    onclick = "top_headerhideshow('topHeaderMor');"> More
                </a>
                    <div id = "topHeaderMor" class = "topHeaderMore topHeaderMor">
						<div><a href>More</a></div>
						<div><a href>More</a></div>
						<div><a href>More</a></div>
					</div>
				</div>
				<div class ='DivTwo dot' id='itemChangeDot'><b onclick = "swicthVisibility('topHeaderMore');"
                 onclick = "top_headerhideshow('topHeaderMore');"
				>...</b>
				    <div id = "topHeaderMore" class = "topHeaderMore">
						<div><a href>More</a></div>
						<div><a href>More</a></div>
						<div><a href>More</a></div>
					</div>
				</div>
			</div>
			
			
			<div class = 'ItemThree'>
				<div class ='DivThree notification' onclick = "swicthVisibility('bellNotification');"
                 onclick = "top_headerhideshow('bellNotification');">
				    <a href = '#'>
				        <i class="fa fa-bell" aria-hidden="true"></i>
				        <div class ='notfyCount noty_top_a' id = 'noty_top_one'></div>
				    </a>
				    <!---///=== All Notifications Pop Bell  //-->
                    <div id = "bellNotification" class = "displaySeachresult bellNotification">
					 
					    <div id = "bellNotificationplace" class = "xoverflow">
					        <div class = "despl">
						        <div class = "searchprof"> 
						          <div class = 'profImg'>
						            <img title = 'Patent Profile' src = 'img/profiles/p8.jpg' id = parent_img/>
						          </div>  
						        </div>

						        <div class = "detdispl belldetail">
						          <span class = "name">Nehemia Mwansasu</span>
						          <span class = "jibu">Answered your qustion</span>
						        </div>
					        </div>

					      <div class = "despl">
					        <div class = "searchprof"> 
					          <div class = 'profImg'>
					            <img title = 'Patent Profile' src = 'img/profiles/p8.jpg' id = parent_img/>
					          </div>  
					        </div>

					        <div class = "detdispl belldetail">
					          <span class = "name">Nehemia Mwansasu</span>
					          <span class = "jibu">"reply to your Comment "</span>
					          
					        </div>
					      </div>

					     
					    </div>
                    </div>
                    <!---///=== END All Notifications Pop Bell //-->
				</div>
				<div class ='DivThree shopCart' onclick = "swicthVisibility('shopcartBell');">

					<a href='#'>
					    <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
					    <div class ='notfyCount noty_top_b'>13</div>
					</a>

					<div id = "shopcartBell" class = "displaySeachresult shopcartBell">
					    <div class = "xoverflow">
					      <div class = "despl">
					        <div class = "searchprof"> 
					          <div class = 'profImg'>
					            <img title = 'Patent Profile' src = 'img/profiles/p8.jpg' id = parent_img/>
					          </div>  
					        </div>

					        <div class = "detdispl belldetail">
					          <span class = "name">Nehemia Mwansasu</span>
					          <span class = "jibu">Answer your qustion</span>
					          
					        </div>
					      </div>

					      <div class = "despl">
					        <div class = "searchprof"> 
					          <div class = 'profImg'>
					            <img title = 'Patent Profile' src = 'img/profiles/p8.jpg' id = parent_img/>
					          </div>  
					        </div>

					        <div class = "detdispl belldetail">
					          <span class = "name">Nehemia Mwansasu</span>
					          <span class = "jibu">"reply to your Comment "</span>
					          
					        </div>
					      </div>

					    </div>
                    </div>
				</div>
				<div class ='DivThree top_setting'>
					<li>
					<div class ='Div name'><a href="profile.php?user=<?php echo escape($user->data()->username);?>"><?php echo escape($user->data()->username);?></a><i class="fa fa-angle-down" aria-hidden="true"></i></div>
					<div class ='Div profile'><?php echo $profile_head; ?></div>
					<ul class="listWraper">
						
						<li class = 'list Dashboard'><a class='one' href = "#">Dashboard</a>
						    <ul class= "ul list_Dashboard">
								<li class ='l Profile'><a href ="#">Profile</a></li>
								<li class ='l Customize'><a href ="#">Customize</a></li>
					 			<li class ='l Widgets'><a href ="#">Widgets</a></li>
								<li class ='l Menus'><a href ="#">Menus</a></li>
								<li class ='l Themes'><a href ="#">Themes</a></li>
								<li class ='l Plugins'><a href ="#">Plugins</a></li>
								<li class ='l Songoka_Option'><a href ="#">Songoka Option</a><div id ='H_triangle' class ='H_triangle'></div></li>
							</ul>
						</li>
						
						<li class = 'list Wall'><a href = "page.php">Wall</a>
						  <ul class= "ul list_Wall">
								<li class ='l Following'><a href ="#">Following</a><div id ='H_triangle' class ='H_triangle'></div></li>
								<li class ='l Wall'><a href ="#">Wall</a></li>
								<li class ='l News_Feed'><a href ="#">News Feed</a></li>
								<li class ='l My_Likes'><a href ="#">My Likes</a></li>
								
							</ul>
						</li>
						
						<li class = 'list Profile'><a href = "#">Profile</a>
						    <ul class= "ul list_Profile">
								<li class ='l View'><a href ="#">View</a><div id ='H_triangle' class ='H_triangle'></div></li>
								<li class ='l Edit'><a href ="#">Edit</a></li>
								<li class ='l Change_profile_Photo'><a href ="#">Change Profile Phote</a></li>
								<li class ='l Change_cover_Image'><a href ="#">Change Cover Image</a></li>
								
							</ul>
						</li>
						<li class = 'list Notification'><a href = "#">Notification <span class='ul_Notify_nofication notify_No'>13</span></a>
						    <ul class= "ul list_Notification">
								<li class ='l unread'><a href ="#">unread <span class='li_notify_Unread notify_No'>3</span></a><div id ='H_triangle' class ='H_triangle'></div></li>
								<li class ='l read'><a href ="#">read<span class='li_notify_read notify_No'>0</span></a></li>
							</ul>
						</li>
						
						<li class = 'list Message'><a href = "#">Message  <span class='Ul_notify_Message notify_No'>2</span></a>
						    <ul class= "ul list_Message">
								<li class ='l Inbox'><a href ="#">Inbox <span class='li_notify_inbox notify_No'>3</span></a><div id ='H_triangle' class ='H_triangle'></div></li>
								<li class ='l starred'><a href ="#">starred<span class='li_notify_starred notify_No'>0</span></a></li>
								<li class ='l sent'><a href ="#">sent</a></li>
								<li class ='l Compose'><a href ="#">Compose</a></li>
								<li class ='l Member_notices'><a href ="#">All Members Notices</a></li>
							</ul>
						
						</li>
						<li class = 'list Friend'><a href = "#">Friend <span class='Ul_notify_frnd notify_No'>1</span></a>
						    <ul class= "ul list_Friend">
								<li class ='l Friendship'><a href ="#">Friendship <span class='li_notify_frnd_req notify_No'>3</span></a><div id ='H_triangle' class ='H_triangle'></div></li>
								<li class ='l Pending_Request'><a href ="#">Pending Request<span class='li_notify_pendin_req notify_No'>1</span></a></li>
								
							</ul>   
						</li>
						<li class = 'list Groups'><a href = "#">Groups</a>
						    <ul class= "ul list_Groups">
								<li class ='l Membership'><a href ="#">Membership <span class='li_notify_frnd_req notify_No'>3</span></a><div id ='H_triangle' class ='H_triangle'></div></li>
								<li class ='l Pending_Request'><a href ="#">Pending Request<span class='li_notify_pendin_req notify_No'>1</span></a></li>
								<li class ='l Create_group'><a href ="#">Create a Group</a></li>
								
							</ul>
						</li>
						
						<li class = 'list Photo'><a href = "#">Photo</a>
						     <ul class= "ul list_Photo">
								<li class ='l Uploads'><a href ="#">Uploads</a><div id ='H_triangle' class ='H_triangle'></div></li>
								<li class ='l Album'><a href ="#">Album</a></li>
								
							</ul>
						</li>
						
						<li class = 'list Setting'><a href = "#">Setting</a>
						    <ul class= "ul list_Setting">
								<li class ='l General'><a href ="#">General </a><div id ='H_triangle' class ='H_triangle'></div></li>
								<li class ='l Email'><a href ="#">Email</a></li>
								<li class ='l Profile'><a href ="#">Profile</a></li>
								<li class ='l Profile'><a href ="changepassword.php">Change password</a></li>
								<li class ='l Profile'><a href ="update.php">update Info</a></li>
								
							</ul>
						</li>
						
						<li class = 'list logout'><a href = "logout.php"><span>LOGOUT</span></a></li>
					</ul>
					
					</li>
				</div>
			</div>
               
			
		
		</div>

<?php

    }else{
         echo '<p>You need <a href = "login.php">Login</a> or <a href = "registration">Register</a></p>';
	 }
?>