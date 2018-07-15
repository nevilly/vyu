<?php /*include 'include/skeletonTop.php';*/ ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Skonga life.com</title>
        <link rel="stylesheet" type="text/css" href="style/style.css"/>
		<!--<link rel="stylesheet" type="text/css" href="style/css/font-awesome.min.css"/>-->
		<link rel="stylesheet"  type="text/css" href="style/font-awesome/css/font-awesome.min.css" />
        <link rel="stylesheet"  type="text/css" href="style/icofont/css/icofont.css" />
     <!--<script type="text/javascript" src="js/jscript.js"></script>
   --> </head>
    <body>
   
        <div id = 'Pagewraper'>
    <div id = 'side_One' >
		<div id = navOne>
			<div id = 'logo' class = 'logo'> Songoka  </div>
			<div class = 'Home nav'><a href = 'index.php' >    <i    class="fa fa-home" ></i> <span class = 'name'> Home</span>     </a> </div>
			<hr/>
			<div class = 'blog nav'>  <a href = 'index.php' >  <i    class="fa fa-book" aria-hidden="true" ></i> <span class = 'name'> ReadBooks</span> </a></div>
			<hr/>
			<div class = 'Member nav'><a href = 'index.php' >    <i    class="icofont icofont-paper" aria-hidden="true" ></i> <span class = 'name'> Pepars</span>     </a> </div>
			<hr/>
			<div class = 'Other nav'> <a href = 'index.php' >    <i     class="fa fa-question-circle-o" aria-hidden="true"></i> <span class = 'name'> Questions & Answer</span>     </a></div>
		   <hr/>
			<div class = 'friend nav'><a href = 'index.php' >    <i    class="fa fa-users" aria-hidden="true"></i> <span class = 'name'> Friends</span> </a></div>
		   <hr/>
			<div class = 'Message nav'><a href = 'index.php' >    <i    class="fa fa-envelope" aria-hidden="true"></i> <span class = 'name'> Messages</span></a></div>
		   <hr/>
			<div class = 'Notfication nav'><a href = 'index.php' >  <i  class="fa fa-bell-o" aria-hidden="true"></i> <span class = 'name'> Notfication</span>     </a></div>
		   <hr/>
			<div class = 'forum nav'><a href = 'index.php' >  <i      class="icofont icofont-wallet" aria-hidden="true"></i> <span class = 'name'> Entarprenur</span>     </a></div>
		  <hr/>
			<div class = 'setting nav'><a href = 'index.php' >    <i    class="icofont icofont-teacher" aria-hidden="true"></i> <span class = 'name'> Teacher Helps</span> </a></div>
		  <hr/>
	    </div>
		
		
		<div id = navtwo>
			<div id = 'logo'  class = 'logo'> S </div>
			<div class = 'Home nav'>  <i   id= 'n_ico'  onmouseover = "mouse_enter('nav_home','nav_hova');" onmouseout ='mouse_leave("nav_home","nav_hova");'class="fa fa-home" ></i> Home</div><hr/>
			<div class = 'blog nav'>  <i   id= 'n_ico'  onmouseover = "mouse_enter('nav_rBook','nav_hova');" onmouseout ='mouse_leave("nav_rBook","nav_hova");' class="fa fa-book" aria-hidden="true"></i> ReadBooks</div><hr/>
			<div class = 'Member nav'> <i  id= 'n_ico'  onmouseover = "mouse_enter('nav_paper','nav_hova');" onmouseout ='mouse_leave("nav_paper","nav_hova");'class="icofont icofont-paper" aria-hidden="true"></i>Pepars</div><hr/>
			<div class = 'Other nav'><i    id= 'n_ico'  onmouseover = "mouse_enter('nav_QndAn','nav_hova');" onmouseout ='mouse_leave("nav_QndAn","nav_hova");'class="fa fa-question-circle-o" aria-hidden="true"></i>Questions & Answer</div><hr/>
			<div class = 'friend nav'><i   id= 'n_ico'  onmouseover = "mouse_enter('nav_frnd','nav_hova');" onmouseout ='mouse_leave("nav_frnd","nav_hova");'class="fa fa-users" aria-hidden="true"></i>Friends</div><hr/>
			<div class = 'Message nav'><i  id= 'n_ico'  onmouseover = "mouse_enter('nav_msg','nav_hova');" onmouseout ='mouse_leave("nav_msg","nav_hova");'class="fa fa-envelope" aria-hidden="true"></i>Messages</div><hr/>
			<div class = 'Notfication nav'><i id= 'n_ico' onmouseover = "mouse_enter('nav_noty','nav_hova');" onmouseout ='mouse_leave("nav_noty","nav_hova");' class="fa fa-bell-o" aria-hidden="true"></i>Notfication</div><hr/>
			<div class = 'forum nav'><i    id= 'n_ico'  onmouseover = "mouse_enter('nav_enterpr','nav_hova');" onmouseout ='mouse_leave("nav_enterpr","nav_hova");'class="icofont icofont-wallet" aria-hidden="true"></i>Entarprenur</div><hr/>
			<div class = 'setting nav'><i  id= 'n_ico'  onmouseover = "mouse_enter('nav_tHelp','nav_hova');" onmouseout ='mouse_leave("nav_tHelp","nav_hova");'class="icofont icofont-teacher" aria-hidden="true"></i>Teacher Helps</div><hr/>
        </div>

	
    </div>
	
	
    <div id = 'side_two' >
		<!--/***********header after login*********/-->
		<div id ='top_header' class ='top_header'>
			<i   id = 'sid_nav_close'  class="fa fa-bars" ></i>
			<i   id = 'sid_nav_open'  class="fa fa-bars" ></i>
			
			<div class ='input_to_header'>
				<input type = 'text' name='top_search_header' id = 'input_Top_header'>
				<i class="fa fa-search" aria-hidden="true"></i>
			</div>
			
			<div class = 'ItemTwo'>
				<div class ='DivTwo Membars'>Membars</div>
				<div class ='DivTwo Groups'>Groups</div>
				<div class ='DivTwo activities'>Site-activities</div>
                <div class ='DivTwo More'  id='itemMore' >More</div>
				<div class ='DivTwo Boxed' id='itemBoxed'>Boxed</div>
				<div class ='DivTwo dot' id='itemChangeDot'><b>...</b></div>
			</div>
			
			<div class = 'ItemThree'>
				<div class ='DivThree notification'><a href = '#'><i class="fa fa-bell" aria-hidden="true"></i><div class ='notfyCount noty_top_a'>5</div></a></div>
				<div class ='DivThree shopCart'><a href='#'><i class="fa fa-cart-arrow-down" aria-hidden="true"></i><div class ='notfyCount noty_top_b'>13</div></a></div>
				<div class ='DivThree top_setting'>
					<li>
					<div class ='Div name'>Nehemiatttttt<i class="fa fa-angle-down" aria-hidden="true"></i></div>
					<div class ='Div profile'><img src ='img/profiles/img1.jpg' ></div>
					<ul class="listWraper">
						
						<li class = 'list Dashboard'><a class='one' href = "#">Dashboard</a>
						    <ul class= "ul list_Dashboard">
								
								<li class ='l Songoka_Option'><a href ="#">Songoka Option</a><div id ='H_triangle' class ='H_triangle'></div></li>
								<li class ='l Customize'><a href ="#">Customize</a></li>
					 			<li class ='l Widgets'><a href ="#">Widgets</a></li>
								<li class ='l Menus'><a href ="#">Menus</a></li>
								<li class ='l Themes'><a href ="#">Themes</a></li>
								<li class ='l Plugins'><a href ="#">Plugins</a></li>
								<li class ='l Profile'><a href ="#">Profile</a></li>
							</ul>
						</li>
						
						<li class = 'list Wall'><a href = "#">Wall</a>
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
								
							</ul>
						</li>
						
						<li class = 'list logout'><a href = "#"><span>LOGOUT</span></a></li>
					</ul>
					
					</li>
				</div>
			</div>
               
			
		
		</div>
		
	
		
		
		
		<div id='mainWraper'>
			<div class = 'section'>
				<div class  ='large_profile'>
					<img src = 'img/profiles/life.jpg'/>
				    <div id = 'cover_uploads'  class = 'prof cover_uploads'><span>Update cover photo</span></div><i class="fa fa-camera" id= 'cover_camera_prof'></i>
					<div id = 'cover_close'    class = 'prof cover_close'><span>Remove cover photo</span></div><i class="fa fa-times"  id= 'clos_cover_prof'></i>
             	</div>
				
				<div class = 'profileBox'>
					 <div class = 'profile_cicle'><img src ='img/profiles/img1.jpg' width ='100px' height ='100px;'></div>
					 <div class = 'user_info'>
						<div class = 'Username'><span>Nehemia<span class='aka'> ,#nehy</span></span></div><hr/>
						<div class = 'dirLink'><i class ='fa fa-facebook-square'></i> <i class ='fa fa-twitter-square'></i> <i class ='fa fa-youtube-play'></i></div>
					</div>
			    </div>
				   
				<div class = 'follow'>
					<div class ='foll following'><span class = 'no'>6</span><span class  = 'title'>Following</span></div>
					<div class ='foll followers'><span class = 'no'>7</span><span class  = 'title'>Followers</span></div>
				</div>
				
				<div id = 'divnav'>
					<a class = 'wall navWall' href ="#"><span class = 'categry wal'>WALL</span></a>
					<a class = 'wall navprof' href ="#"><span class = 'categry prof'>PROFILE</span></a>
					<a class = 'wall navSc'   href ="#"><span class = 'categry sc'>SCIENCE</span> <span class = 'NotfNo math'>10<span></a>
					<a class = 'wall navBusn' href ="#"><span class = 'categry busn'>BUSNESS</span><span class = 'NotfNo eng'>8<span></a>
					<a class = 'wall navArt'  href ="#"><span class = 'categry art'>ARTS</span><span class = 'NotfNo kisw'>23<span></a>
					<a class = 'wall navEntr' href ="#"><span class = 'categry entr'>ENTERPRENUERs</span><span class = 'NotfNo enterpr'>99<span></a>
				</div>
				
			
				
			
			<div class = 'msgWall'>
				<div class = 'composeMsgDiv'><a href = 'composeMsg'>COMPOSE</a></div>
			    <div class = 'actionMsg'>
					<div id = 'bulkAction'>
						BULK ACTTONS <i class="fa fa-angle-down" aria-hidden="true"></i>
					</div>
					
					<div id = 'bulkMsgRespond'>
						<div id ='bulk_action'>Bulck Action</div>
						<div id ='mark_read'>MARK READ</div>
						<div id ='mark_unread'>MARK UNREAD</div>
						<div id ='dlt'>DELETE</div>
						<div id ='add_star'>ADD STAR</div>
						<div id ='remv_star'>REMOVE STAR</div>
			        </div>
			    
				   
				    <div id = 'apply_action'>APPLY</div>
				    <input type='text' name = 'searchMsg' id ='searchMsg' placeholder='Search Message...'>
			    </div>
			    
				<div class = 'in_out_msg'>
					<div id = 'inbox'> Inbox  <i class="fa fa-angle-right" aria-hidden="true"></i></div>
				    <div id = 'Starred'> Starred <i class="fa fa-angle-right" aria-hidden="true"></i></div>
				    <div id = 'Sent'> Sent  <i class="fa fa-angle-right" aria-hidden="true"></i></div>
				    <div id = 'Notices'> Notices  <i class="fa fa-angle-right" aria-hidden="true"></i></div>
				
				</div>
				
				<div class = 'display_msg'>
					<div id ='disp_msg_header'>
						<div id = 'check'> <input type = 'checkbox' name = 'allcheck'></div>
						<div id = 'from'> From</div>
						<div id = 'Subject'> Subject</div>
						<div id = 'Notices'> Notices</div>
				    </div>
				
				<div id = 'disp_magz'>
				    <div id = 'check'> <input type = 'checkbox' name = 'allcheck'></div>
				    <div id = 'from'> From</div>
				    <div id = 'Subject'> Subject </div>
				    <div id = 'Notices'> Notices  </div>
				</div>
				</div>
			
			
			
			</div>
			
			
			</div>
				
			
			
		    <div class = 'infoSection'>
				<span class = 'membars'>MEMBARS</span>
				<div id ='info_list'>
					<div class = 'newst memba'>Newest</div>
					<div class = 'Active memba'>Active</div>
					<div class = 'Popular memba'>Popular</div>
				</div>
				<div id ='newst' class = 'info_memba'>
					<div id = 'newstProfile'>
						<div id ='profilecycle'><img src = 'img/profiles/p3.jpg' width='70px' height ='60px;'/></div>
					<div class = 'name'>Big Boss</div>
						<div class = 'standardClass'>Collage</div>
						<div class = 'learn_from_him'>Learn From Him</div>
					</div>
					
					<div id = 'newstProfile'>
						<div id ='profilecycle'><img src = 'img/profiles/p3.jpg' width='70px' height ='60px;'/></div>
						<div class = 'name'>Barack</div>
						<div class = 'standardClass'>Collage</div>
						<div class = 'learn_from_him'>Learn From Him</div>
					</div>
					
					<div id = 'newstProfile'>
						<div id ='profilecycle'><img src = 'img/profiles/p9.jpg' width='70px' height ='60px;'/></div>
						<div class = 'name'>Jery</div>
						<div class = 'standardClass'>Collage</div>
						<div class = 'learn_from_him'>Learn From Him</div>
					</div>
					
					
						<div id = 'newstProfile'>
						<div id ='profilecycle'><img src = 'img/profiles/p9.jpg' width='70px' height ='60px;'/></div>
						<div class = 'name'>Jery</div>
						<div class = 'standardClass'>Collage</div>
						<div class = 'learn_from_him'>Learn From Him</div>
					</div>
						<div id = 'newstProfile'>
						<div id ='profilecycle'><img src = 'img/profiles/p9.jpg' width='70px' height ='60px;'/></div>
						<div class = 'name'>Jery</div>
						<div class = 'standardClass'>Collage</div>
						<div class = 'learn_from_him'>Learn From Him</div>
					</div>
					
						<div id = 'newstProfile'>
						<div id ='profilecycle'><img src = 'img/profiles/p9.jpg' width='70px' height ='60px;'/></div>
						<div class = 'name'>Jery</div>
						<div class = 'standardClass'>Collage</div>
						<div class = 'learn_from_him'>Learn From Him</div>
					</div>
					
					<div id = 'newstProfile'>
						<div id ='profilecycle'><img src = 'img/profiles/p2.png' width='70px' height ='60px;'/></div>
						<div class = 'name'>Neema</div>
						<div class = 'standardClass'>Collage</div>
						<div class = 'learn_from_him'>Learn From Him</div>
					</div>
					
					<div id = 'newstProfile'>
						<div id ='profilecycle'><img src = 'img/profiles/p7.jpg' width='70px' height ='60px;'/></div>
						<div class = 'name'>Enjoy</div>
						<div class = 'standardClass'>Collage</div>
						<div class = 'learn_from_him'>Learn From Him</div>
					</div>
					
				</div>
				<div id ='Active' class = 'info_memba'></div>
				<div id ='Popular' class = 'info_memba'></div>
			
			
			<div id='Ideas'>
				<h3>IQ INlARAGMENTS</h3>	
				<div class = 'p_idea'>
					<div class = 'header'>
						<div class= 'h_img'><img src = 'img/profiles/life.jpg'/></div>
						<h2>JINSI YA KUPATA MTAJI WA KUFUGA KUKU</h2>
					    <h4>enterprenuar</h4>
					</div>
					
					<div class ='soln'>
						Smart phon n kfaa chenye pesa nying sana
					</div>
				</div>
				
				<div class = 'p_idea'>
					<div class = 'header'>
						<div class= 'h_img'><img src = 'img/profiles/life.jpg'/></div>
						<h2>JINSI YA KUPATA MTAJI WA KUFUGA KUKU</h2>
					    <h4>enterprenuar</h4>
					</div>
					
					<div class ='soln'>
						Smart phon n kfaa chenye pesa nying sana
					</div>
				</div>
				
				<div class = 'p_idea'>
					<h2>How To Solve Quandrant Equestion</h2>
					<div class ='soln'>
						2x /  3x = 2f - 2f  find y <br/>
						how to solv this equestion helps please .....
						
					</div>
				</div>
				
				<div class = 'p_idea'>
					<div class = 'header'>
						<div class= 'h_img'><img src = 'img/profiles/life.jpg'/></div>
						<h2>JINSI YA KUPATA MTAJI WA KUFUGA KUKU</h2>
					    <h4>enterprenuar</h4>
					</div>
					
					<div class ='soln'>
						Smart phon n kfaa chenye pesa nying sana
					</div>
				</div>
				
				<div class = 'p_idea'>
					<div class = 'header'>
						<div class= 'h_img'><img src = 'img/profiles/life.jpg'/></div>
						<h2>JINSI YA KUPATA MTAJI WA KUFUGA KUKU</h2>
					    <h4>enterprenuar</h4>
					</div>
					
					<div class ='soln'>
						Smart phon n kfaa chenye pesa nying sana
					</div>
				</div>
				
				<div class = 'p_idea'>
					<div class = 'header'>
						<div class= 'h_img'><img src = 'img/profiles/life.jpg'/></div>
						<h2>JINSI YA KUPATA MTAJI WA KUFUGA KUKU</h2>
					    <h4>enterprenuar</h4>
					</div>
					
					<div class ='soln'>
						Smart phon n kfaa chenye pesa nying sana
					</div>
				</div>
				
				<div class = 'p_idea'>
					<div class = 'header'>
						<div class= 'h_img'><img src = 'img/profiles/life.jpg'/></div>
						<h2>JINSI YA KUPATA MTAJI WA KUFUGA KUKU</h2>
					    <h4>enterprenuar</h4>
					</div>
					
					<div class ='soln'>
						Smart phon n kfaa chenye pesa nying sana
					</div>
				</div>
				
				<div class = 'p_idea'>
					<div class = 'header'>
						<div class= 'h_img'><img src = 'img/profiles/life.jpg'/></div>
						<h2>JINSI YA KUPATA MTAJI WA KUFUGA KUKU</h2>
					    <h4>enterprenuar</h4>
					</div>
					
					<div class ='soln'>
						Smart phon n kfaa chenye pesa nying sana
					</div>
				</div>
				
				<div class = 'p_idea'>
					<div class = 'header'>
						<div class= 'h_img'><img src = 'img/profiles/life.jpg'/></div>
						<h2>JINSI YA KUPATA MTAJI WA KUFUGA KUKU</h2>
					    <h4>enterprenuar</h4>
					</div>
					
					<div class ='soln'>
						Smart phon n kfaa chenye pesa nying sana
					</div>
				</div>
				
				<div class = 'p_idea'>
					<div class = 'header'>
						<div class= 'h_img'><img src = 'img/profiles/life.jpg'/></div>
						<h2>JINSI YA KUPATA MTAJI WA KUFUGA KUKU</h2>
					    <h4>enterprenuar</h4>
					</div>
					
					<div class ='soln'>
						Smart phon n kfaa chenye pesa nying sana
					</div>
				</div>
				
				<div class = 'p_idea'>
					<div class = 'header'>
						<div class= 'h_img'><img src = 'img/profiles/life.jpg'/></div>
						<h2>JINSI YA KUPATA MTAJI WA KUFUGA KUKU</h2>
					    <h4>enterprenuar</h4>
					</div>
					
					<div class ='soln'>
						Smart phon n kfaa chenye pesa nying sana
					</div>
				</div>
				
				
				
			</div>
			
			
			
			</div>
			
			
		</div>
		
		</div>
    </div>
    n 
</div>

	<script type="text/javascript" src="jscript/jscript.js">
	
</script>
	<?php include 'include/positonAbsolute.php'; ?>
</body>
</html>

