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

   

    ////////////////////////////////////////////////////////////////////////////////////
	///////// Check SUBJECT TYPE OF STUDENT

	   $subjects = "";
	   $checksubject = $db->get('student_acc',array('user_id','=',$user_id));
        if($checksubject->count() > 0){
                
            $level = $checksubject->first()->level_identify; 
            $darasa = $checksubject->first()->levelOrStandard; 
            $comb = $checksubject->first()->facultOrComb_taken;
            $subjectx = $checksubject->first()->subjects;
            $q = "";
            $l = "";

                    
			if($darasa == 'Form 6'){
				# code...

				$l = 6;
				if($comb == 'PCB'){
					$q = $subjectx;
			    }
               
                if($comb == 'CBG'){
    				$q = $subjectx;
                }         			    

			    if($comb == 'PCM'){
    				$q = $subjectx;
			    }

			    if($comb == 'HKL'){
    				$q = $subjectx;
			    }

			    if($comb == 'HGE'){
        			$q = $subjectx;
			    }

			    if($comb == 'HGM'){
    				$q = $subjectx;
			    }

			    if($comb == 'EGM'){
    				$q = $subjectx;
			    }
			}

			if($darasa == 'Form 5'){
				# code...
				$l = 5;
				if($comb == 'PCB'){
					$q = $subjectx;
			    }
               
                if($comb == 'CBG'){
    				$q = $subjectx;
                }         			    

			    if($comb == 'PCM'){
    				$q = $subjectx;
			    }

			    if($comb == 'HKL'){
    				$q = $subjectx;
			    }

			    if($comb == 'HGE'){
        			$q = $subjectx;
			    }

			    if($comb == 'HGM'){
    				$q = $subjectx;
			    }

			    if($comb == 'EGM'){
    				$q = $subjectx;
			    }
			}

			if($darasa == 'Form 4'){
				# code...
				$l = 4;
				if($comb == 'PCB'){
					$q = $subjectx;
					
			    }
               
                if($comb == 'CBG'){
    				$q = $subjectx;
                }         			    

			    if($comb == 'PCM'){
    				$q = $subjectx;
			    }

			    if($comb == 'HKL'){
    				$q = $subjectx;
			    }

			    if($comb == 'HGE'){
        			$q = $subjectx;
			    }

			    if($comb == 'HGM'){
    				$q = $subjectx;
			    }

			    if($comb == 'EGM'){
    				$q = $subjectx;
			    }
			}

			if($darasa == 'Form 3'){
				# code...
				$l = 3;
				if($comb == 'PCB'){
					$q = $subjectx;
			    }
               
                if($comb == 'CBG'){
    				$q = $subjectx;
                }         			    

			    if($comb == 'PCM'){
    				$q = $subjectx;
			    }

			    if($comb == 'HKL'){
    				$q = $subjectx;
			    }

			    if($comb == 'HGE'){
        			$q = $subjectx;
			    }

			    if($comb == 'HGM'){
    				$q = $subjectx;
			    }

			    if($comb == 'EGM'){
    				$q = $subjectx;
			    }
			}

			if($darasa == 'Form 2'){
				# code...
				$l = 2;
				$q = $subjectx;
			}

			if($darasa == 'Form 1'){
				# code...
				$l = 1;
				$q = $subjectx;
			}
            
			if($darasa == 'pre Form 1'){
				# code...
				$l = 0;
				$q = $subjectx;
			}
            
           
            $sub = explode(',' ,$q);
           
            if(count($sub) > 0){
               foreach($sub as $k=> $x){
               	 //echo $x;
               
               	$f_l = $db->query("SELECT * FROM vy_subjects WHERE level = ? AND id = ?", array($l,$x));
             
			    if($f_l-> count() > 0){
                  $sub_id = $f_l->first()->id;
                  $sub_name = $f_l->first()->suubject_name;

                  $subjects .= "
                        <div class = 'subjects panels'>
						<span id = 'My_wall_noty_no' class='subject_One'>
							99
							<span class ='plusDiv'>+</span>
						</span>
						<a href = 'subject.php?user=$user_uname&subject=$sub_id'>
							<span class ='subj'>$sub_name</span>
						</a>
					    </div>";
			    }
               }
            }	
        }else{
        	echo 'No';
        }
    /////////END: Check SUBJECT TYPE OF STUDENT
    ////////////////////////////////////////////////////////////////////////////////////
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
					
					<h3>MY WAll & SUBJECTS <span style="float:; margin-left: 15%;"><?php echo strtoupper($st_schulname); ?></span><span style="float:right;"><?php echo $darasa; ?></span></h3>
					
					<div class = 'myWall panels'>
						<span id = 'My_wall_noty_no'>12</span>
						<a href ='#'>My Wall</a>
					</div>
					
				
					<?php echo $subjects; ?>


					<div class = 'subjects panels'>
						<span id = 'My_wall_noty_no' class='subject_One'>2</span>
						<a href ='#'>Summary</a>
					</div>
					
					<div class = 'subjects_plus panels'>
						<a href ='#'>+</a>
					</div>
				</div>
			
				
				<div class = 'teachersProfile'>
				    <h3>YOUR TEACHERS</h3>
		            <?php
						////////////////////////////////////////////////////////////////////////////////////
					    /////////teacher details
					       $teacher = "";
					       $teacher_info = $db->query('SELECT * FROM teacher_acc,vy_users WHERE teacher_acc.user_id = vy_users.id AND schoolname =? AND region =? AND levelOrStandard =?', array($st_schulname,$st_rname,$st_lev));
						   if(!$teacher_info->count()){
						   	  echo 'No Teacher Found For your Level Invite theme <input="text" placeholder="enter your teacher phone No" name = "teacherPhone"> ';
						   }else{
						    	foreach($teacher_info->results() as $teacher){
						             $usernam = escape($teacher->username);
						             $subje = escape($teacher->prof_subject_2);
						             $level = escape($teacher->	levelOrStandard);
						             //$scholnam = escape($teacher->	schoolname).'<br/>';

						            if(!$teacher->profile){
										  $teach_cover_dir = "<img src ='userdata/profile/pro3.png' width ='100px' height ='100px;'>";
										}else{	
										   $teach_cover_dir = "<img src =userdata/".$teacher->profile." width ='100px' height ='100px;'>";
										}

								   echo  "<div id = 'teacher'>
											<a href='teacherprofile.php?user=".$usernam."' class ='t_profile'>". $teach_cover_dir ."</a>
											<a href='teacherprofile.php?user=".$usernam."' class ='details'>
												<span class = 'title'>Teacher:</span>
												<span class = 'name'>".$usernam."</span>
												<span class = 'subjec'>Subject:</span>
												<span class = 'name'>".$subje."</span>
												
												
												
												<span class = 'level'>form:</span>
												<span class = 'name'>".$level."</span>
													
											
											</a>
												<a href ='#'>Other Bios Teachers</a>
										</div>";
						    	    }    
						   }
					    /////////teacher details
						////////////////////////////////////////////////////////////////////////////////////
			        ?>		
			    </div>

			
				
				<div class = 'development'>
					<h3>STATICS AND DEVELOPMENT</h3>
					
					
					<div class = 'subjects panels'>
						<a href ='timeTable.php?user=<?php echo $user_uname; ?> '><span class ='subj'>Time table</span></a>
					</div>
					
					<div class = 'subjects panels'>
						<a href ='results.php?user=<?php echo $user_uname; ?> '><span class ='subj'>Result</span></a>
					</div>
					
					
					<div class = 'subjects panels'>
						<a href ='#'><span class ='subj'>Money Max</span></a>
					</div>



					<div class = 'subjects panels'>
						<a href ='#'><span class ='subj'>Your BankMoney</span></a>
					</div>

					<div class = 'subjects panels'>
						<a href ='ourBookCover.php?user=<?php echo $user_uname; ?>'><span class ='subj'>Our Books Covers</span></a>
					</div>

					<div class = 'myWall panels'>
						<a href ='statics.php?user=<?php echo $user_uname; ?>'><i  class="icofont icofont-chart-line" aria-hidden="true"></i></a> 
					</div>
				</div>
				
				
				<div class = 'extrathing'>
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
			
				</div>
				
			</div>
			
			<?php include 'include/infoSection.php'; ?> 
		</div>
		
		</div>
    </div>
    
</div>
<script type="text/javascript" src="jscript/jscript.js">
	
</script>
 <?php include 'include/positonAbsolute.php'; ?> 

 
	
</script>
</body>
</html>

<?php
  //}else{
    //   echo '<p>You need <a href = "login.php">Login</a> or <a href = "registration.php">Register</a></p>';
  //  }
?>

<!--//materials sehem ya kuifadhi materials ya maomo yako kama vile summaries
-->