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
  <?php include 'include/sidenavigation.php'; ?>
  
    <div id = 'side_two' >
		<!--/***********header after login*********/-->
			<?php include 'include/topheader.php'; ?>
	
		
		font-size:2em;width:100%; text-align:center; boder:1px solid red;
		
		<div id='mainWraper'>
			<div class = 'section'>
				 <?php include 'include/profileheader.php'; ?>

				
				<span class = 'subject_title'>BIOLOGY WORD</span>
				<header id = 'header_teach'>
					<div id ='myWall'       class ='myWall'        onclick = "hideshow('mywall');"                       > My Wall         </div>
					<div id ='toCover'      class ='toCover'       onclick = "hideshow('check_covered_topic_teacher');"  > Topic Cover     </div>
					<div id ='nav_timtabl'  class ='nav_timtabl'   onclick = "hideshow('timetable');"                    > Time table      </div>
					<div id ='nav_pchember' class ='nav_pchember'  onclick = "hideshow('parentsChember');"               > <span>Bios</span> Books  </div>
					<div id ='nav_resul'    class ='nav_resul'     onclick = "hideshow('Result');"                       > <span>Bios</span> Result          </div>
					<div id ='nav_static'   class ='nav_static'    onclick = "hideshow('Stictix');"                      > <span>Bios</span> Statics         </div>
					<div id ='nav_hist'     class ='nav_hist'      onclick = "hideshow('t_history');"                    > <span>Bios</span> Summary       </div>
                    <div id ='nav_quiz'     class ='nav_quiz'      onclick = "hideshow('cv');"                           > <span>Bios</span> Exams     <!-- Quiz     --></div>
                    <div id ='nav_inf'      class ='nav_inf'       onclick = "hideshow('nav_inf');" title ='and bios summary'                     > <span>Bios</span> Notes           </div>
				</header>
				<div id = 'postArea'>
					<span class ='wha_NEW'>What's new,Nehemia</span>
					<textarea id = 'post_text'></textarea>
					
					<div id = 'post_option'>
						 
						<div id = 'Nav_everyone' class = 'Nav_everyone'>
							<a class = 'wall navWall' href ="#"><span class = 'categry wal'>login user</span></a>
							<a class = 'wall navprof' href ="#">Only me</a>
							<a class = 'wall navSc' href ="#">My friends</a>
							<a class = 'wall navBusn' href ="#">teachers</a>
				        </div>
						
						<input class = 'p' type='submit' id='submit_post' value = 'Post Update'>
						
					
						<div class ='p' id = 'everyone'>EVERYONE<i class="fa fa-angle-down" aria-hidden="true"></i></div>
					
						<div id = 'upload_photo'><i class="fa fa-camera" id= 'cover_camera_prof'></i></div>
					</div>
					
					
					   
				</div>
				
			
			
				<div id = 'posted'>
					<div class = 'posted_profile'>
						<div class = 'posted_cicle'>
							<img src ='img/profiles/img1.jpg' >
					   </div>
					</div>
					<div class ='name_time'><span class = 'name'>Nehemia</span><span class = 'time_ago'>1min Ago</span></div>
					<div class ='msg'>@jessicasanders Suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure </br>reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem</div>
					<div class ='icons'>
						<span id='reply' class = 'ico reply'><i class = 'fa fa-reply'></i></span>
						<span id='love' class = 'ico reply'><i class = 'fa fa-heart-o'></i></span>
						<span id='thumb_up' class = 'ico reply'><i class = 'fa fa-thumbs-up'></i></span>
						<span id='delete' class = 'ico reply'><i class= 'fa fa-remove'></i></span>
						<span id='spam' class = 'ico reply'>spam</span>
						<span id='delete' class = 'ico reply'><i class= 'fa fa-unlock-alt'></i></span>
					</div>
					
				</div>
			
			
			    <div id = 'posted'>
					<div class = 'posted_profile'>
						<div class = 'posted_cicle'>
							<img src ='img/profiles/p4.jpg' >
					   </div>
					</div>
					<div class ='name_time'><span class = 'name'>Jessica Sanders</span><span class = 'time_ago'>5hrs Ago</span></div>
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
				
				<div id = 'reply_posted'>
					<div class = 'posted_profile'>
						<div class = 'posted_cicle'>
							<img src ='img/profiles/p1.jpg' >
					   </div>
					</div>
					<div class ='name_time'><span class = 'name'>Challo</span><span class = 'time_ago'>8hrs Ago</span></div>
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
				
				<div id = 'posted'>
					<div class = 'posted_profile'>
						<div class = 'posted_cicle'>
							<img src ='img/profiles/p3.jpg' >
					   </div>
					</div>
					<div class ='name_time'><span class = 'name'>Barrack</span><span class = 'time_ago'>15hrs Ago</span></div>
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
				
				<div id = 'reply_posted'>
					<div class = 'posted_profile'>
						<div class = 'posted_cicle'>
							<img src ='img/profiles/p1.jpg' >
					   </div>
					</div>
					<div class ='name_time'><span class = 'name'>reply figure</span><span class = 'time_ago'>8hrs Ago</span></div>
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
			</div>
			
			
		    <div class = 'infoSection'>
				<span class = 'membars'>MEMBARS</span>
				<div id ='info_list'>
					<div class = 'newst memba'>Newest</div>
					<div class = 'Active memba'>Active</div>
					<div class = 'Popular memba'>Popular</div >
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
    
</div>
<script type="text/javascript" src="jscript/jscript.js">
	
</script>

 <?php include 'include/positonAbsolute.php'; ?>
</body>
</html>

