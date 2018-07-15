<?php  
    include 'include/allprofilefunc.php';

    #SPECIAL CODE: for profile.php
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

        

	/////////////////////////////////////////////////////////////////////////////////////
	///>>>>>>>>>>>>>> MainCount Check
	    $checkMainTable = $db->query("SELECT Main_account,student_acc,parent_acc,enterprenuer_acc,teacher_acc FROM vy_users  WHERE id =?", array($user_id));

	    $checkMainTable->first()->Main_account;


	    $student = '<div class ="profile_acc">
	                  <div class = "topIcon studtopIcon"><i class="icofont icofont-read-book-alt"></i></i></div>
	                  <a href = "student_profile.php?user='.$user_uname.'">student Account</a>
                         <hr/>
                         <div class ="notfi"><i class ="fa fa-fighter-jet"></i><span>All notification</span><span>99+</span></div>
	                  </div>';

	    $parent = '<div class ="profile_acc">
	                  <div class = "topIcon partopIcon"><i class="icofont icofont-businessman"></i></div>
	                  <a href = "parentProfile.php?user='.$user_uname.'">Parent Account</a>
                         <hr/>
                        <div class ="notfi"><i class ="fa fa-fighter-jet"></i><span>All notification</span><span>99+</span></div>
	                  </div>';

	    $Enter  =   '<div class ="profile_acc">
	                  <div class = "topIcon entertopIcon"><i class="icofont icofont-money-bag"></i></div>
	                  <a href = "enterprenuer.php?user='.$user_uname.'">enterprenuer Account</a>
                         <hr/>
                         <div class ="notfi"><i class ="fa fa-fighter-jet"></i><span>All notification</span><span>99+</span></div>
	                  </div>';
	    
	   
	    $Teacher = '<div class ="profile_acc">
	                  <div class = "topIcon teachtopIcon"><i class="icofont icofont-teacher"></i></div>
	                    <a href = "teacheraccount.php?user='.$user_uname.'">Teacher Account</a>
                        <hr/>
                        <div class ="notfi"><i class ="fa fa-fighter-jet"></i><span>All notification</span><span>99+</span></div>
	                  </div>';

	          
	    $stAcc = ($checkMainTable->first()->student_acc == 1)      ?  $student  : '' ;
	    $paAcc = ($checkMainTable->first()->parent_acc == 1)       ?  $parent   : '' ;
	    $enAcc = ($checkMainTable->first()->enterprenuer_acc == 1) ?  $Enter    : '' ;
	    $tcAcc = ($checkMainTable->first()->teacher_acc == 1)      ?  $Teacher  : '' ;    //>>>>>>>>>>>>>>>>>>>>>>>>>END: IF MAINCOUNT FOUND >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>//
    ///>>>>>>>>>>>>>> END MainCount Check
    /////////////////////////////////////////////////////////////////////////////////////
    
	
?>


<?php include 'include/skeletonTop.php';?>


    <div id = 'Pagewraper'>
	   <?php //include //'include/pageProfileNavigation.php'; ?>
	   <?php include 'include/sidenavigation.php'; ?>
	
	
    <div id = 'side_two' >
		<!--/***********header after login*********/-->
		<?php include 'include/topheader.php'; ?>
		
		<div id='mainWraper'>
			<div class = 'section'>
				<?php include 'include/profileheader.php'; ?>
				<div class = 'Myfucults'>
					<h3>MY WAll & SUBJECTS <span style="float:right;"><?php //echo $darasa; ?></span></h3>
                     <?php echo $stAcc; ?>
                     <?php echo $paAcc; ?>
                     <?php echo $tcAcc; ?>
                     <?php echo $enAcc; ?>
				</div>
			
				
				<!-- <div class = 'teachersProfile'>
					<h3>YOUR TEACHER</h3>

					<?php 
						   $teach_info = $db->query('SELECT * FROM teacher_acc,vy_users WHERE schoolname = ?  AND levelOrStandard = ? AND facultOrComb_taken = ? region = ? AND teacher_acc.user_id = vy_users.id',
						   	array($st_schulname,$st_lev,$st_fa,$st_rname));
						  
						   if(!$teach_info->count()){
						   	 
						   }
						  
						?>
					<div id = 'teacher'>
						

						<div class ='t_profile'><img src ='img/profiles/p2.png' width ='100px' height ='100px;'></div>
						<div class ='details'>
							<span class = 'title'>Teacher:</span>
							<span class = 'name'>James</span>
							<span class = 'subjec'>Subject:</span>
							<span class = 'name'>Bios</span>
							
							<span class = 'school'>School:</span>
							<span class = 'name'>Your</span>
							
							<span class = 'level'>form:</span>
							<span class = 'name'>2</span>
								
						
						</div>
							<a href ='#'>Other Bios Teachers</a>
					</div>
					
					
					<div id = 'teacher'>
						<div class ='t_profile'><img src ='img/profiles/p2.png' width ='100px' height ='100px;'></div>
						<div class ='details'>
							<span class = 'title'>Teacher:</span>
							<span class = 'name'>Neema</span>
							<span class = 'subjec'>Subject:</span>
							<span class = 'name'>Bios</span>
							
							<span class = 'school'>School:</span>
							<span class = 'name'>Your</span>
							
							<span class = 'level'>form:</span>
							<span class = 'name'>2</span>
								
							
						</div>
						<a href ='#'>Other Bios Teachers</a>
					</div>
					
					<div id = 'teacher'>
						<div class ='t_profile'><img src ='img/profiles/p6.jpg' width ='100px' height ='100px;'></div>
						<div class ='details'>
							<span class = 'title'>Teacher:</span>
							<span class = 'name'>Enjoy</span>
							<span class = 'subjec'>Subject:</span>
							<span class = 'name'>Physics</span>
							
							<span class = 'school'>School:</span>
							<span class = 'name'>Happyskillful</span>
							
							<span class = 'level'>form:</span>
							<span class = 'name'>4</span>
								
							
						</div>
						<a href ='#'>Other Physics Teachers</a>
					</div>
					
					
					<div id = 'teacher'>
						<div class ='t_profile'><img src ='img/profiles/p3.jpg' width ='100px' height ='100px;'></div>
						<div class ='details'>
							<span class = 'title'>Teacher:</span>
							<span class = 'name'>Magy</span>
							<span class = 'subjec'>Subject:</span>
							<span class = 'name'>English</span>
							
							<span class = 'school'>School:</span>
							<span class = 'name'>Happyskillful</span>
							
							<span class = 'level'>form:</span>
							<span class = 'name'>4</span>
								
							
						</div>
						<a href ='#'>Other English Teachers</a>
					</div>
					
					<div id = 'teacher'>
						<div class ='t_profile'><img src ='img/profiles/p9.jpg' width ='100px' height ='100px;'></div>
						<div class ='details'>
							<span class = 'title'>Teacher:</span>
							<span class = 'name'>Challo</span>
							<span class = 'subjec'>Subject:</span>
							<span class = 'name'>Math</span>
							
							<span class = 'school'>School:</span>
							<span class = 'name'>Happyskillful</span>
							
							<span class = 'level'>form:</span>
							<span class = 'name'>4</span>
						</div>
						<a href ='#'>Other Math Teachers</a>
					</div>
					
					<div id = 'teacher'>
						<div class ='t_profile'><img src ='img/profiles/p9.jpg' width ='100px' height ='100px;'></div>
						<div class ='details'>
							<span class = 'title'>Teacher:</span>
							<span class = 'name'>Nehemia</span>
							<span class = 'subjec'>Subject:</span>
							<span class = 'name'>Chemistry</span>
							
							<span class = 'school'>School:</span>
							<span class = 'name'>Happyskillful</span>
							
							<span class = 'level'>form:</span>
							<span class = 'name'>4</span>
						</div>
						<a href ='#'>Other Math Teachers</a>
					</div>
					
					<div id = 'teacher'>
						<div class ='t_profile'><img src ='img/profiles/p9.jpg' width ='100px' height ='100px;'></div>
						<div class ='details'>
							<span class = 'title'>Teacher:</span>
							<span class = 'name'>Upendo</span>
							<span class = 'subjec'>Subject:</span>
							<span class = 'name'>Kiswahili</span>
							
							<span class = 'school'>School:</span>
							<span class = 'name'>Happyskillful</span>
							
							<span class = 'level'>form:</span>
							<span class = 'name'>4</span>
						</div>
						<a href ='#'>Other Math Teachers</a>
					</div>
				</div> -->

			
				
				
				
				
				<!-- <div class = 'development'>
					<h3>STATICS AND DEVELOPMENT</h3>
					
					<?php echo $profile; ?>
					<div class = 'subjects panels'>
						<a href ='#'><span class ='subj'>Time table</span></a>
					</div>
					
					<div class = 'subjects panels'>
						<a href ='results.php'><span class ='subj'>Result</span></a>
					</div>
					
					
					<div class = 'subjects panels'>
						<a href ='#'><span class ='subj'>Money Max</span></a>
					</div>



					<div class = 'subjects panels'>
						<a href ='#'><span class ='subj'>Your BankMoney</span></a>
					</div>

					<div class = 'subjects panels'>
						<a href ='ourBookCover.php'><span class ='subj'>Our Books Covers</span></a>
					</div>

					<div class = 'myWall panels'>
						<a href ='#'><i  class="icofont icofont-chart-line" aria-hidden="true"></i></a> 
					</div>
				</div> -->
				
				
				<!-- <div class = 'extrathing'>
					<h3>EXTRA THINGS</h3>
					
					
					<div class = 'subjects panels'>
						<a href ='#'><span class ='subj'>School Diary</span></a>
					</div>
					
					<div class = 'subjects panels'>
						<a href ='#'><span class ='subj'>+</span></a>
					</div>
				</div>
				
				<div class = 'allAbout'>
					<h3>ABOUT</h3>
					<div class = 'username'>
					<span class = 'student_name'>Name :</span><span class = 'answ '>Nehemia</span>   <span id = 'edit'>edit</span>
					</div>
					
					<div class = 'school'>
					<span class = 'school'>Collage/school :</span><span class = 'answ'>Happsillful Secondary School</span>   <span id = 'edit'>edit</span>
					</div>
					
					<div class = 'resdent'>
					<span class = 'place_for_lvng'>Residential :</span><span class = 'answ'>Dar-es-salaam</span>   <span id = 'edit'>edit</span>
					</div>
				    
					<div class = 'conctact'>
					<span class = 'conctact'>Conctact :</span><span class = 'answ'>0654881994</span>   <span id = 'edit'>edit</span>
					</div>
					
					<div class = 'email'>
					<span class = 'email'>Email :</span><span class = 'answ'>Nehemia</span>   <span id = 'edit'>edit</span>
					</div>
			
			
			        <div class = 'Combi'>
					<span class = 'Combi'>Combination :</span><span class = 'answ'>PCB</span>   <span id = 'edit'>edit</span>
					</div>
			
				
				    <div class = 'datebirth'>
					<span class = 'datebirth'>Birth date :</span><span class = 'answ'>26/6/2017</span>  <span id = 'edit'>edit</span>
					</div>
			
				
					<div class = 'email'>
						<span class = 'email'>Level :</span><span class = 'answ'>FORM 4</span>   <span id = 'edit'>edit</span>
					</div>
			
				</div> -->
				
			</div>
			
			
			
			
			
			
			<?php include 'include/infoSection.php'; ?> 
			
		<!--     <div class = 'infoSection'>
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
			
			
			
			</div> -->
			
			
		</div>
		
		</div>
    </div>
    
</div>
<script type="text/javascript" src="jscript/jscript.js">
	
</script>
 <?php include 'include/positonAbsolute.php'; ?> 
</body>
</html>

<?php
  //}else{
    //   echo '<p>You need <a href = "login.php">Login</a> or <a href = "registration.php">Register</a></p>';
  //  }
?>

<!--//materials sehem ya kuifadhi materials ya maomo yako kama vile summaries
-->