<?php  
    include 'include/allprofilefunc.php';
    
    #SPECIAL CODE: for SubjectFriends.php

    ////////////////////////////////////////////////////////////////////////////////////
	///////// check FrndShp Bottom
	    if($user_id != $sesion_id){ 
	        //check on friends exists
	        $chek_frnd = $db->query("SELECT id FROM vy_frnds WHERE (user_one =? AND user_two =?) OR (user_one =? AND user_two=?) AND ", array($sesion_id,$user_id,$user_id,$sesion_id ));
		    
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
		          	$frndsBotom = '<input type="submit" id = "friendReq" name = "addFrndReq" onclick = \'sendRqst("'.$user_id .'","f")\'>';
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
	
?>
<?php include 'include/skeletonTop.php'; ?>
   
<div id = 'Pagewraper'>
    <?php include 'include/sidenavigation.php'; ?>
    <div id = 'side_two' >
		<!--/***********header after login*********/-->
		<?php include 'include/topheader.php'; ?>
		
		<div id='mainWraper'>
			<div class = 'section'>
		        <?php include 'include/profileheader.php'; ?>
               
                <div class="WraperPlugin">
                    <h2><span>SUBJECT NAME</span> <span>FRIENDS</span> </h2>

                    <div class = "friendsWraper">
                    	<div class = "friendBody">
                	        <h2><span>ALL</span> <span>SUBJECT NAME</span> <span>FRIENDS</span> </h2>
                	        <div class = "searchplugin">
                		         <input class = "search" type="text" placeholder="search friends">
                	        </div>

			                <?php  
			                    /////////////////////////////////////////////////////////////////////////////////////////////////////////////
			                    //////////// FRIENDS DISPLAY
				                   $selectInReqTable = $db->query("SELECT * FROM vy_frnds  WHERE user_one =?", array($user_id));
				                  
					                if($selectInReqTable->count()){
					                  	# Results frnd req Table.....
					                  	foreach($selectInReqTable->results() as $selectInReqTabl){
					                  		# results id
					                  	    $one_id = $selectInReqTabl->user_one.'<br>';
					                  		$two_id = $selectInReqTabl->user_two;

					                        

					                  	    //>>>>>>>>>>>>>>>>>>>>>>>>>>>>>IF USER_TWO NOT SESION USER>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>//
						                  	    if($two_id != $user_id){
						                  		# code...
					                  			$friend_one = $db->query('SELECT * FROM vy_users WHERE id = ?', array($two_id));                  				
					                  			$frnd_mainAcc = $friend_one->first()->Main_account;
					                  			$frnd_onename = $friend_one->first()->username;
					                  			$frnd_profile = $friend_one->first()->profile;

					                            //>>>>>>>>>>>>>>>>>>>>>>>>>>>>> IF PROF PICT FRND >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>//
						                  			if($friend_one->first()->profile){
										                $frndOne_profile = "<img src ='userdata/".$friend_one->first()->profile."'>";
										            }else{
										                $frndOne_profile = "<img src ='userdata/profile/pro3.png' />";
										            }
									            //>>>>>>>>>>>>>>>>>>>>>>>>>>>>> END: IF PROF PICT FRND >>>>>>>>>>>>>>>>>>>>>>>>>>>>>//
					                            
					                            //>>>>>>>>>>>>>>>>>>>>>>>>>>>IF MAIN ACOUNTSDETAILS  >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>//
						                  			if ($frnd_mainAcc != Null) {
						                  				# code...
						                  			
						                  			    $frnd_one = $db->query('SELECT * FROM '.$frnd_mainAcc.' WHERE user_id = ?', array($two_id)); 
						                  			
							                  			if($frnd_mainAcc == 'student_acc' OR $frnd_mainAcc == 'teacher_acc' OR $frnd_mainAcc == 'p_acc'){
							                  			        $Acc_dtls_o = $friend_one->first()->schoolname.'<br/>';
							                  				    $levComb = ($friend_one->first()->facultOrComb_taken == '') ? 
							                  				                $friend_one->first()->levelOrStandard.'<br/>' : $friend_one->first()->facultOrComb_taken.'<br/>';
							                  			

							                  			    if($frnd_mainAcc == 'student_acc'){
							                  				    $title =  'Title: Student';
							                  				}else if($frnd_mainAcc == 'teacher_acc'){
							                  			        $title = 'Title: Teacher';
							                  				}else if($frnd_mainAcc == 'p_acc'){
							                  				    $title = 'Title: Parent' ;
							                  				}
							                  			}

							                  			if($frnd_mainAcc == 'enterpr_acc'){
							                  				$Acc_dtls_o = $friend_one->first()->main_busnes;
							                  			    $title = "Enterprenuer";
							                  			} 
						                  		    }else{
							                  			$Acc_dtls_o = "";
							                  			$levComb    = "";
							                  			$title      = "";
						                  		    }
					                  		    //>>>>>>>>>>>>>>>>>>>>>>>>>>>END: IF MAIN ACOUNTS DETAILS>>>>>>>>>>>>>>>>>>>>>>>>>>>>>//
						                  		
						                  		echo '<div class = "studentInvetation">
												    	<div class = "ExamInvetation">
													    	<div class = "tRequest">
										                        <div class = "topDiv">
										                        	
										                        	<div class = "profImg">
																		'.$frndOne_profile.'
																	</div>
																	
																	<div class = "details ">
																		<a href = "#">
																			<span class = "name">'. $frnd_onename .'</span>
																			<span class = "name">'. $title .'</span>

																			<span class = "Schoolname SubjectTeach">'.$Acc_dtls_o .'</span>
																			<span class = "SubjectTeach">'.$levComb.'</span>
																		</a>
																	</div>
										                        </div>

										                        <div class = "botmDiv otherTeacherbotmDiv">
											    			    	<div class = "view startBoton">
											    						Unfreind
											    					</div>


											    			    	<div class = "donate startBoton" onclick = \'openAbsolute("HomeworkCompose")\';">
											    						Message
											    					</div>
										                        </div>
												       	    </div>
													    </div>
												    </div>';
						                  	    }
					                  	    //>>>>>>>>>>>>>>>>>>>>>>>>>>>>>END: IF USER NOT SESION USER>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>//
						                    }
						            }else{
						                // echo "<div class = 'ErrorMssge NotReqMsg'>You dont Have Any FRIENDs</div>";
						            }

                                    
						            $FrndsTable_user_two = $db->query("SELECT * FROM vy_frnds  WHERE user_two =?", array($user_id));
						            if($FrndsTable_user_two->count()){
						            	
						            	$user_one_frnd =$FrndsTable_user_two->first()->user_one;

						            	if ($user_one_frnd != $user_id){
						            		# code...
						            		$Frndsuser_one = $db->query("SELECT * FROM vy_users WHERE id =?", array($user_one_frnd));
						            		if($Frndsuser_one->count()){
                                              
                                                $frnd_mainAcc = $Frndsuser_one->first()->Main_account;
						                  		$frnd_onename = $Frndsuser_one->first()->username;
						                  	    $frnd_profile = $Frndsuser_one->first()->profile;

					                  		   //>>>>>>>>>>>>>>>>>>>>>>>>>>>>> IF PROF PICT FRND >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>//
						                  			if($Frndsuser_one->first()->profile){
										                $frndOne_profile = "<img src ='userdata/".$Frndsuser_one->first()->profile."'>";
										            }else{
										                $frndOne_profile = "<img src ='userdata/profile/pro3.png' />";
										            }
									            //>>>>>>>>>>>>>>>>>>>>>>>>>>>>> END: IF PROF PICT FRND >>>>>>>>>>>>>>>>>>>>>>>>>>>>>//

										        //>>>>>>>>>>>>>>>>>>>>>>>>>>>IF MAIN ACOUNTS DETAILS>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>//
						                  			if ($frnd_mainAcc != Null) {
						                  				# code...
						                  			
						                  			    $frndone = $db->query('SELECT * FROM '.$frnd_mainAcc.' WHERE user_id = ?', array($user_one_frnd)); 
						                  			
							                  			if($frnd_mainAcc == 'student_acc' OR $frnd_mainAcc == 'teacher_acc' OR $frnd_mainAcc == 'p_acc'){
							                  			        $Acc_dtls_o = $frndone->first()->schoolname.'<br/>';
							                  				    $levComb = ($frndone->first()->facultOrComb_taken == '') ? 
							                  				                $frndone->first()->levelOrStandard.'<br/>' : $frndone->first()->facultOrComb_taken.'<br/>';
							                  			

							                  			    if($frnd_mainAcc == 'student_acc'){
							                  				    $title =  'Title: Student';
							                  				}else if($frnd_mainAcc == 'teacher_acc'){
							                  				    $title = 'Title: Teacher';
							                  				}else if($frnd_mainAcc == 'p_acc'){
							                  				    $title = 'Title: Parent' ;
							                  				}
							                  			}

							                  			if($frnd_mainAcc == 'enterpr_acc'){
							                  				$Acc_dtls_o = $frndone->first()->main_busnes.'<br/>';
							                  				$title = "Enterprenuer";
							                  			} 
						                  		    }else{
							                  			$Acc_dtls_o = "";
							                  			$levComb    = "";
							                  			$title      = "";
						                  		    }
					                  		    //>>>>>>>>>>>>>>>>>>>>>>>>>>>END: IF MAIN ACOUNTS DETAILS>>>>>>>>>>>>>>>>>>>>>>>>>>>>>//
						                  		    echo '<div class = "studentInvetation">
													    	<div class = "ExamInvetation">
														    	<div class = "tRequest">
											                        <div class = "topDiv">
											                        	
											                        	<div class = "profImg">
																			'.$frndOne_profile.' ONE
																		</div>
																		
																		<div class = "details ">
																			<a href = "#">
																				<span class = "name">'. $frnd_onename .'</span>
																				<span class = "name">'. $title .'</span>

																				<span class = "Schoolname SubjectTeach">'.$Acc_dtls_o .'</span>
																				<span class = "SubjectTeach">'.$levComb.'</span>
																			</a>
																		</div>
											                        </div>

											                        <div class = "botmDiv otherTeacherbotmDiv">
												    			    	<div class = "view startBoton">
												    						Unfreind
												    					</div>


												    			    	<div class = "donate startBoton" onclick = \'openAbsolute("HomeworkCompose")\';">
												    						Message
												    					</div>
											                        </div>
													       	    </div>
														    </div>
													    </div>';
					            		}
					            	}
						            	

						            	
						            }
			                    //////////// END: FRIENDS DISPLAY
				                /////////////////////////////////////////////////////////////////////////////////////////////////////////////
			              	?>
                        </div>
                     
                        
                    	<?php
	                    	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	                    	///////////// NOTIFICATION SIDE
		                        if( $sesion_id == $user_id){
		                          	#All friends Request/.......
		                            $sql_frndRqst = 'SELECT  * FROM  vy_req LEFT JOIN vy_users ON vy_req.recv_id = vy_users.id  WHERE  recv_id = ?';
		                          	$sql_frnds = $db->query($sql_frndRqst,array($sesion_id));

		                          	if($sql_frnds->count()){
		                          		foreach ($sql_frnds->results() as $sql_frnd){
		                          		 	# code...
		                          		    $sender_id_frndReqst = $sql_frnd->user_id;
		                          		    $user_notfc = $sql_frnd->username;
		                          		    $dir =$sql_frnd->profile;
		                          		    $statas_req = $sql_frnd->state; 
		                          		     
			                                //>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> userFrom Request Details >>>>>>>>>>>>>>>>>>>>>//
				                                $sql_userFrom = 'SELECT  * FROM  vy_users WHERE id = ?';
				                                $userFrom = $db->query($sql_userFrom,array($sender_id_frndReqst));
				                                $user_from_notfc = $userFrom->first()->username;
				                                $user_from_pro = $userFrom->first()->profile;
				                                $mainAcc_check = $userFrom->first()->Main_account;
			                                //>>>>>>>>>>>>>>>>>>>>>>>>>>>> END: userFrom Request Details >>>>>>>>>>>>>>>>>>>>//
			                               
			                                //>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> UserFrom profile picture >>>>>>>>>>>>>>>>>>>>>//
										        if($user_from_pro){
										            $prof_notf = "<img src =userdata/".$userFrom->first()->profile.">";
										        }else{
										            $prof_notf = "<img src ='userdata/profile/pro3.png'>";
										        }
									        //>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>END: UserFrom profile picture >>>>>>>>>>>>>>>>>>>>>//

		                                    //>>>>>>>>>>>>>>>>>>>>>>>>>>>IF MAIN ACOUNTS DETAILS>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>//
					                  			if ($mainAcc_check != Null) {
					                  				# code...
					                  			
					                  			    $userFrom_req = $db->query('SELECT * FROM '.$mainAcc_check.' WHERE user_id = ?', array($sender_id_frndReqst)); 
					                  			
						                  			if($mainAcc_check == 'student_acc' OR $mainAcc_check == 'teacher_acc' OR $mainAcc_check == 'p_acc'){
						                  			        $scholname_Acc = $userFrom_req->first()->schoolname.'<br/>';
						                  				    $comb = ($userFrom_req->first()->facultOrComb_taken == '') ? 
						                  				                $userFrom_req->first()->levelOrStandard.'<br/>' : $userFrom_req->first()->facultOrComb_taken.'<br/>';
						                  			

						                  			    if($mainAcc_check == 'student_acc'){
						                  				    $title =  'Title: Student';
						                  				}else if($mainAcc_check == 'teacher_acc'){
						                  				    $title = 'Title: Teacher';
						                  				}else if($mainAcc_check == 'p_acc'){
						                  				    $title = 'Title: Parent' ;
						                  				}
						                  			}

						                  			if($mainAcc_check == 'enterpr_acc'){
						                  				$Acc_dtls_o = $userFrom_req->first()->main_busnes.'<br/>';
						                  				$title = "Enterprenuer";
						                  			} 
					                  		    }else{
						                  			$scholname_Acc = "";
						                  			$comb    = "";
						                  			$title      = "";
					                  		    }
					                  		//>>>>>>>>>>>>>>>>>>>>>>>>>>>END: IF MAIN ACOUNTS DETAILS>>>>>>>>>>>>>>>>>>>>>>>>>>>>>//
			                      	

			                      		 	//state desicion botton......
			                      		 	if ($statas_req == 'v'){
			                      		 		# code...
			                      		 		$verify = 'Pls Verify Me "Your Classmate"';
			                      		 		$ClickBoton = '<a href="insidefunc.php?user='.$user_uname.'&&action=eccept&&state=v&&from='.$sender_id_frndReqst.'" class = "donate startBoton">
								    						Eccept
								    					</a>';
			                      		 	}

			                      		 	if ($statas_req == 'f'){
			                      		 		# code...
			                      		 		$verify = 'Friend Request';
			                      		 		$ClickBoton = '<a href="insidefunc.php?user='.$user_uname.'&&action=eccept&&state=f&&from='.$sender_id_frndReqst.'" class = "donate startBoton">
								    						Eccept
								    					</a>';

								    			// $ClickBoton = '<div onclick= \'funcRqst("'.$sender_id_frndReqst.'","f","eccept") \' class = "donate startBoton">
								    			// 			Eccept
								    			// 		</div>';
			                      		 	}

			                      		 	if ($statas_req == 'q'){
			                      		 		# code...
			                      		 		$verify = 'Questions Request';
			                      		 		$ClickBoton = '<div class = "donate startBoton" onclick = \'openAbsolute("HomeworkCompose");\'>
								    				Compose Questions
								    					</div>';
			                      		    }
		                         


			                          		echo '<div class = "Notifcation">
							                    <h2>Notification</h2>
				                    		    <div class = "studentInvetation">
										    	<div class = "ExamInvetation">
											    	<div class = "tRequest">
								                        <div class = "topDiv">
								                        	
								                        	<div class = "profImg">
																'.$prof_notf.'
															</div>
															
															<div class = "details ">
																<a href = "#">
																	<span class = "name">'.$user_from_notfc.'</span>
																	<span class = "Schoolname SubjectTeach">'. @$scholname_Acc .'</span>
																	<span class = "SubjectTeach">'.@$comb.'</span>
																	<span class = "SubjectTeach">'.$verify .'</span>
																</a>
															</div>
								                        </div>

								                        <div class = "botmDiv otherTeacherbotmDiv">
									    			    	<div class = "view startBoton">
									    						Ignore
									    					</div>
									    			    	'.$ClickBoton.'
								                        </div>
										       	    </div>
										       	    </div>
											    </div>
									        </div>';
		                          		}
		                          	}else{
		                          		echo "<div class = 'ErrorMssge NotReqMsg'>You dont Have Any Request</div>";
		                          	}
		                        }
	                        ///////////// END: NOTIFICATION SIDE
	                        /////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                        ?>

                    
                    </div>
                    
	                
                 </div>

		    </div>
		    <?php include 'include/infosection.php'; ?>
		</div>
	</div>
</div>
    
</div>

<?php include 'include/SkelotonBottom_login.php'; ?>



