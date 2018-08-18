

<?php  
 include 'include/allprofilefunc.php';
    
    #SPECIAL CODE: for Subject.php

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
    

    ///////////////////////////////////////////////////////////////////////////////////
	///// Subject Name
        $checksubject = $db->get('vy_subjects',array('id','=',$subject_id));
        $subj = $checksubject->first()->suubject_name;
    ///// END: Subject Name
    ////////////////////////////////////////////////////////////////////////////////////

   
    ///////////////////////////////////////////////////////////////////////////////////
	///// School Teacher info  Query
        $teacherId = "";
        $TimeTbleMsage = "";
        $teacher_nfo = $db->query('SELECT * FROM teacher_acc,vy_users WHERE  teacher_acc.user_id = vy_users.id AND schoolname = ? AND region = ? AND levelOrStandard = ? AND level_identify = ? ', array($st_schulname,$st_rname,$st_lev , $st_levelidentify));
	 
        if ($teacher_nfo->count()) {
        	# Insect one teacher for now
        	#if teacher are more tha one cod;
        	
            foreach($teacher_nfo->results() as $teacher_nf){
            	
                $teacherI     =  $teacher_nf->user_id;
	        	$subject      =  $teacher_nf->subjects;
	        	$subject_arr  =  explode(',',$subject);

	        	if(in_array($subject_id, $subject_arr)){
	        	 	 
	        	    $teacherId    = $teacher_nf->user_id;
        	    	$teacherUname = $teacher_nf->username;
		        	$teacherSname = $teacher_nf->schoolname;
		        	$teacherRname = $teacher_nf->region;
		        	$teacherLname = $teacher_nf->levelOrStandard;
	        	}
        	 
        	}

        	
        }else{
	        echo "Ther is No teacher For ur School";
                $teacherId = 0;
	            $TimeTbleMsage = "<div>Tell Your Teach To Compose Time Table</div>";
	            $topicMsg      = "<div>Tell Your Teach To Compos Topic</div>";
	    }
		// @ $teacher_schulname =  $teacher_info->first()->schoolname;
		// @ $teacher_rname     =  $teacher_info->first()->region;
		// @ $teacher_lev       =  $teacher_info->first()->levelOrStandard;
		// @ $teacher_fa        =  $teacher_info->first()->facultOrComb_taken;
	///// END: School Teacher info  Query
    ////////////////////////////////////////////////////////////////////////////////////

   
    ///////////////////////////////////////////////////////////////////////////////////
	///// Teacher Identifier
        $teache_userId = $db->query('SELECT * FROM vy_subjecttopics,vy_users WHERE vy_subjecttopics.user_id = vy_users.id AND subject_id = ? AND user_id = ?',array($subject_id,$teacherId));

	    if($teache_userId->count()){
             $teacher_userId  = $teache_userId->first()->user_id; 
           $teacher_username  = 'Teacher: '.$teache_userId->first()->username.' Book'; 
	    }else{
	    	$teacher_username = "No Book For Your Teacher";
	    	$teacher_userId   = 0;
	    }
    ///// END: Teacher Identifier
    ////////////////////////////////////////////////////////////////////////////////////


	///////////////////////////////////////////////////////////////////////////////////
	///// insert data into topic cover 
        
        
        $checksubtpctitle_id  = "";

	    $checkTpcCovers = $db->query('SELECT * FROM vy_subtpc WHERE subject_id = ? AND user_id = ?',array($subject_id,$teacher_userId));
		if ($checkTpcCovers->count()){
	    	# code..
	    	foreach ($checkTpcCovers->results() as $checkTpcCover){
	          	# code...
	        	 $checksubtipc_id     = $checkTpcCover->topic_id;
	        	 $checksubtpctitle    = $checkTpcCover->subtpc;
	             $checksubtpctitle_id .= $checkTpcCover->id.',';
	             // $checksubtpc_covered = $checkTpcCover->subtpc_covered;
            }
		}

        
        $subtpcId_array = explode(',', $checksubtpctitle_id);

            
	    if (count($subtpcId_array) > 0) {
	      	# code...
	      	foreach ($subtpcId_array as $subtpcId_ar){
	      		# code...

	      		$check = $db->query("SELECT * FROM vy_subtpccover WHERE subtpc_id = ? AND subj_id = ? AND teacher_id =? AND user_id = ?", array($subtpcId_ar,$subject_id,$teacher_userId,$user_id));

	      		if (!$check->count()) {
	      			# code...
	      			$insert_subtopicId = $db->insert('vy_subtpccover',array( 'user_id' => $user_id, 'subtpc_id' => $subtpcId_ar, 'subj_id' => $subject_id,'teacher_id' => $teacher_userId));	

	      		}
	      	}
	    }
    ///// insert data into topic cover 
    ///////////////////////////////////////////////////////////////////////////////////
	
	$frompage = 0;
	if($st_fa == null){
		if($st_lev  == 'Form 1'){$facult = 'Pure Njuka';}
		if($st_lev  == 'Form 2'){$facult = 'just form 2';}
        
	}else{
        $facult = $st_fa;
	}

	 $st_lev;
 ?>


	<?php   $user_id;
			    echo "<script>var user = {
			    	user        : '$user_id',
					user_id     : '$user_id',
					sesion_id   : '$sesion_id',
					teacher_id  : '$teacher_userId',
					teacherUname: '$teacherUname',
					username    : '$username',
					profile     : '$prof_cover_dir',
					frompage    : '$frompage',
					status      : 'b',
					subjectName : '$subj',
					subject_id  : '$subject_id',
					basedSubj   : '$facult',
					schoolname  : '$st_schulname ', 
					region      : '$st_rname', 
					levelOrStandard : '$st_lev',
					level_identify  : '$st_levelidentify',
					mkondo      : '$mkondo'
					};
			</script>" 
	?>

<?php include 'include/skeletonTop.php';?>
<div id ="gog"></div>	


   
<div id = 'Pagewraper'>
        <?php include 'include/sidenavigation.php'; ?>
  
        <div id = 'side_two' >
		<!--/***********header after login*********/-->
			<?php include 'include/topheader.php'; ?>
		
		<div id='mainWraper'>
			<div class = 'section'>
				<?php include 'include/profileheader.php'; ?>

				<span class = 'subject_title'><?php echo strtoupper(escape($subj)); ?> WORD</span>
				<header id = 'header_teach'>
					<div id ='myWall'       class ='myWall'        onclick = "tp_hideshow('tmywall');"                      > My Wall         </div>
					<div id ='toCover'      class ='toCover'       onclick = "tp_hideshow('check_covered_topic_teacher');"  > Topic Cover     </div>
					<div id ='nav_timtabl'  class ='nav_timtabl'   onclick = "tp_hideshow('timetable');"                    > Time table      </div>
					<div id ='nav_pchember' class ='nav_pchember'  onclick = "tp_hideshow('parentsChember');"               > <span></span> Books  </div>
					<div id ='nav_resul'    class ='nav_resul'     onclick = "tp_hideshow('Result');"                       > <span></span> Result          </div>
					<div id ='nav_static'   class ='nav_static'    onclick = "tp_hideshow('Stictix');"                      > <span></span> Planning        </div>
					<div id ='nav_hist'     class ='nav_hist'      onclick = "tp_hideshow('cv');"                    > <span></span> Summary       </div>
                    <div id ='nav_quiz'     class ='nav_quiz'      onclick = "tp_hideshow('examscompose');"          > <span></span> Exams     <!-- Quiz     --></div>
                    <div id ='nav_inf'      class ='nav_inf'       onclick = "tp_hideshow('use_info');" title ='and bios summary'   > About <span>Subject</span> </div>
				</header>
            
            	<div id = 'tmywall' class = 'mywall'>
                   <div class="divPost">
	                   	<div class = " NormalIdeas" onclick = "dispVisibility('composqsn','whatsOnurmid');">Chats</div> 
	                    <div class = " composeQstnWall"  onclick="dispVisibility('whatsOnurmid','composqsn');">Compose Question</div>
                    </div>


				    <div id ='whatsOnurmid'  class = 'whatsOnurmid'>
				    	<textarea  id = 'WallMsg' class = 'Onurmind'></textarea>
				    	<div id = 'send_vchart'>
			                <div id = 'post_v' class = 'post_post'>
			                	<input class = 'p' type='submit' id='submit_post' value = 'Post Update'
			                onclick = "chatVar('WallMsg',' <?php echo $user_id; ?>', 'a');" ></div>


			                <div id = 'upload_photo' class = 'psot_post post_photo'><i class="fa fa-camera" id= 'cover_camera_prof'></i></div>
                        </div>
				    </div>

				    <!-- feeds question for the wall -->
				    <?php $submitforpage = 'st_page';?>
                    <?php include_once 'include/askquestion.php';?>

				  
				    <!-- Answer asked  feeds and other feed	 -->
					<div id  = "studentSubj" class = 'xoverflow'> </div>
				
				</div>

				<div class = 'Myfucults'>


					<div id = 'check_covered_topic_teacher'>
                         <div id = 'coco'></div>

                        <?php if ($sesion_id == $user_id) { ?>

	                        <div class = 'bukChanel'>
	                         	<div class = 'adminbuk  buukNotes' onclick = "dispVisibility('t_buk','siteBuk')"  >OnlineBook</div>
	                         	<div class = 'teacherBuk buukNotes'  onclick = "dispVisibility('siteBuk','t_buk')"  ><?php echo  escape($teacher_username);?></div>
	                        </div>

	                        <div id = 'siteBuk' class = 'siteBuk OnlineBook'>
		                        <?php 
		                            /////////////////////////////////////////////////////////////////////////////////////////////////////
		                            ///// check for Number of topic
			                            $Totaltopic = $db->query('SELECT * FROM  vy_subtpccover WHERE subj_id = ? AND user_id = ? AND 	teacher_id = ?',array($subject_id,$user_id,$teacher_userId));

			                            if($Totaltopic->count()){
			                            	$Totaltopic = $Totaltopic->count();
			                            	$teacher_userId;
			                            
									                        
										    $TotalCovered = $db->query('SELECT checkCover FROM vy_subtpccover WHERE subj_id = ? AND checkCover = ? user_id =? AND teacher_id = ?',array($subject_id,1,$user_id,$teacher_userId));

										        $i = 1;
										        foreach ($TotalCovered->results() as $key) {
										        	if ($key->checkCover == 1) {
                                                     	# counting amount of uncovered topic...
                                                        $totalCover = $i++;
                                                    }
										        }

										        if (@$totalCover > 0){
                                                	# code...
                                                	$totalCover;
                                                }else{
                                                   $totalCover = 0;
                                                }

				                            $remainUcoverd =  $Totaltopic - $totalCover;
			                            }else{

			                            	$Totaltopic     = 0;
			                            	$totalCover     = 0;
			                            	$remainUcoverd  = 0;
			                            }
		                            ///// check for Number of topic
		                            ///////////////////////////////////////////////////////////////////////////////////////////////////////
			                    ?>

			                    <div class = "topicDetails">
	                            	<div class = 'tpcDetails totalTopc'>
	                            		<span class = 'Totaltopic'>Total topic</span>
	                            		<span class = 'tpcCount'><?php echo $Totaltopic; ?></span>
	                            	</div>

	                            	<div class = 'tpcDetails TotalCovered'>
	                            		<span class = 'Totaltopic'>Total Covered</span>
	                            		<span class = 'tpcCount'><?php echo $totalCover; ?></span>
	                            	</div>

	                            	<div class = 'tpcDetails RemainTopic'>
	                            		<span class = 'Totaltopic'>Remain Topic to cover</span>
	                            		<span class = 'tpcCount'><?php echo $remainUcoverd; ?></span>
	                            	</div>
		                        </div>

		                        <div class = 'topicswrper'>
		                        	<h1 class =  'headerTopp' ><?php echo strtoupper($subj) .' TOPICS'; ?></h1>
		                            <div class = 'topicContenct'>
		                           	   <h1><?php echo strtolower($subj). ' Topics List'; ?></h1> 
		                           	   <div class = 'xoverflow'>
			                           	   	<div class = 'topicSubtopic'>
		                                       
												<?php 
													/////////////////////////////////////////////////////////////////////////////////////////////
													////////////Topic To Cover
													    $subject_id;
													    $tpc_id = "";

								                        $query_subjectopic = $db->query('SELECT * FROM vy_subjecttopics WHERE subject_id = ? AND user_id = ?',array($subject_id,0));
								                        if($query_subjectopic->count()){
								                        	# code...
								                        	$query_subjectopic->count();
								                        	//***********************************topic Results And Subtopic******************************//
									                        	foreach($query_subjectopic->results() as $query_subjtopic){
									                        		# code...
									                        		
									                        	    $tpc_id         =  $query_subjtopic->id;
									                        		$subject_title  =  $query_subjtopic->topic_title;

								                        		    //*********************************Topic Query************************************//

										                        	    echo"<div id = 'tpcContent' class = 'topic'>

											                                    <span   id      =   'plusSubtopic".$tpc_id."'
											                                            class   =   'disSubtpc'
											                                            onclick =   \"  switchVisbltyQ (  'plusSubtopic".$tpc_id."',
											                                                                              'minusSubtopic".$tpc_id."',
											                                                                              'subtopicWraper".$tpc_id."' )
											                                                        \"
											                                    >
											                                     +
											                                    </span> 
						                                                         
											                                    <span   id      =   'minusSubtopic".$tpc_id."'
											                                            class   =   'disSubtpc minus' 
											                                            onclick =   \"switchVisbltyQ ( 'plusSubtopic".$tpc_id."',
											                                                                           'minusSubtopic".$tpc_id."',
											                                                                           'subtopicWraper".$tpc_id."' )
											                                                        \"
											                                    >
											                                    -
											                                    </span>


						                                                        <span   id       =   'realTopcId".$tpc_id."' 
						                                                                class    =   'realtipc'
						                                                                onclick  =  \"  changeHeader ( 'TopicHeader',
						                                                                                               '".$subject_title."',
						                                                                                               'ContentHeader".$tpc_id."'
						                                                                                             );
						                                                                            \" 
						                                                        >
						                                                          ".$subject_title."
						                                                        </span>
												                           	   	</div>
									                                                
									                                            <div id = 'subtopicWraper".$tpc_id."' class = 'subtopicWraper'>
									                                            ";
							                                        //*********************************END: Topic Query************************************// 


						                                            //*********************************Subtopiuc Query************************************//
										                        	    $query_subtopic = $db->query('SELECT * FROM vy_subtpc WHERE subject_id = ?  AND  topic_id = ?',array($subject_id,$tpc_id));
										                                foreach ($query_subtopic->results() as $subtopic){
										                                	# code...
										                                	$subtipc_id     = $subtopic->topic_id;
										                                	$subtpctitle    = $subtopic->subtpc;
										                                    $subtpctitle_id = $subtopic->id;
										                                   // $subtpc_covered = $subtopic->subtpc_covered;

										                                  
										                                    $topictitle = $db->query('SELECT topic_title FROM vy_subjecttopics WHERE id = ?',array($subtipc_id));
					                                                           
					                                                        $tpc_title4subtpc =  $topictitle->first()->topic_title;
					                                                        $tpc_title4subtpc =  $topictitle->first()->topic_title;

					                                                        $check = $db->query("SELECT * FROM vy_subtpccover WHERE subtpc_id = ? AND subj_id = ? AND teacher_id =? AND user_id = ?", array($subtpctitle_id,$subject_id,$teacher_userId,$user_id));
                                                                            
                                                                              @$subtpc_covered =  $check->first()->checkCover;
                                                                              @$covered_id =  $check->first()->id;
                                                                              @$subtpc_id =  $check->first()->subtpc_id;

                                                                            if($subtpc_covered == 1){
                
																	                $tickCover = "<div  class   =  'coverd' ><i class = 'fa fa-check'></i></div>";

																	                // $ttickCover .= "<div  class   =  'coverd' ><i class = 'fa fa-check'></i></div>";
																	            }else{

																	            	$tickCover = "<div id ='coverd".$subtpctitle_id."' class   =  'coverd'  >

																	                	            <input type    =  'checkbox' 
																				                	       id      =  'coverSubtopic".$subtpc_id."' 
																				                	       value   = '1'
																				                	       onclick =  \" tick_coveredTopic('coverSubtopic".$subtpc_id."','".$covered_id."','coverd".$subtpctitle_id."')\" 
																			                	    >

																		                	    </div>";

																		            // $ttickCover .= "<div id ='coverd".$tsubtpctitle_id."' class   =  'coverd'  >

																	             //    	            <input type    =  'checkbox' 
																				          //       	       id      =  'coverSubtopic".$tsubtpctitle_id."' 
																				          //       	       value   = '1'
																				          //       	       onclick =  \" tick_coveredTopic('coverSubtopic".$tsubtpctitle_id."','".$tsubtpctitle_id."','coverd".$tsubtpctitle_id."')\" 
																			           //      	    >

																		            //     	    </div>";
																											                                    

																	            }
					                                                       

										                                	echo    " 
										                                	            <div    class       =  'subtopic' 
											                                	                onclick     =   \" topicContent ( 'TopicHeader',
											                                	                                                  '".$tpc_title4subtpc."',
											                                	                                                  'ContentDiv".$subtpctitle_id."'
											                                	                                        )
											                                	                                \"  
										                                	            >
										            			                	        ".$subtpctitle."
										            			                	    </div>

											            			                	".$tickCover."
										                           	   	     	    ";
										                                }
										                            //****************************END: Subtopiuc Query************************************//

									                                echo 
									                                    "</div>";
									                        	}

								                        	//*************************************END topic Results And Subtopic******************************//


								                        }else{
								                        	echo "No topics";
								                        }
					                                ////////////END: Topic To Cover
								                    ///////////////////////////////////////////////////////////////////////////////////////////////
											    ?> 	
			                           	   	</div>
		                           	   </div>
		                            </div>

		                            <div class = 'contect'>
		                           	    <h1 id = 'TopicHeader' class = 'subtpcHeader'></h1>
		                           	    <div class = 'xoverflow'>
		                                    <?php 
		                                        echo " <div id = 'done'></div>";
		                           	    	    //////////////////////////////////////////////////////////////////////////////////////////////////////// 
		                                        //////////Title Of Content
			                                        $subtpc_Cnts = $db->query('SELECT * FROM vy_subjecttopics WHERE subject_id = ?',array($subject_id));
								                    foreach ($subtpc_Cnts->results() as $subtpc_Cnts){

				                                        $subtpcId            =   $subtpc_Cnts->id;
				                                        $topic_title         =   $subtpc_Cnts->topic_title;
				                                        $titleContent        =   $subtpc_Cnts->titleContent;


				                                        echo "<div id = 'ContentHeader".$subtpcId."' class = 'ContentDiv'>
						                           	    		<h2 class = 'subtpctitle'>".$titleContent."</h2>
						                           	    		<div class = 'content'>
							                           	    		".$titleContent."
						                           	    	    </div>
					                           	    	</div>";
								                    }
							                    //////////END: Content Title
				                           	    /////////////////////////////////////////////////////////////////////////////////
                                            ?>
		                               
		                           	    	<?php 

		                           	    	    ///////////////////////////////////////////////////////////////////////////////////////////////////////////
		                           	    	    //////Content

			                                        $subtpc_Cnts = $db->query('SELECT * FROM vy_subtpc WHERE subject_id = ?',array($subject_id));
								                    foreach ($subtpc_Cnts->results() as $subtpc_Cnts){

			                                           $subtpcId    =   $subtpc_Cnts->id;
			                                           $subtotitle  =   $subtpc_Cnts->subtpc;
			                                           $content     =  $subtpc_Cnts->subtpc_contct;


				                                        echo "<div id = 'ContentDiv".$subtpcId."' class = 'ContentDiv'>
						                           	    		<h2 class = 'subtpctitle'>".$subtotitle."</h2>
					                           	    		<div class = 'content'>
						                           	    		".$content."
					                           	    	    </div>
					                           	    	</div>";
								                    }
							                    /////END: Content
				                           	    ///////////////////////////////////////////////////////////////////////////////////////////

		                           	    	?>
		                           	    </div>
		                            </div>
		                        </div>
	                        </div>

	                        <div id = 't_buk' class = 't_buk OnlineBook'>
	                        
		                        <?php 
		                            ///////////////////////////////////////////////////////////////////////////////////////////////////////
		                            ///// check for Number of topic
			                            $TTotaltopic = $db->query('SELECT * FROM vy_subtpccover WHERE subj_id = ? AND user_id = ? AND teacher_id = ?',array($subject_id,$user_id,$teacher_userId));

			                            if($TTotaltopic->count()){
			                            	 $tTotaltopic = $TTotaltopic->count();            
										    

										    $TTotalCovered = $db->query('SELECT checkCover FROM vy_subtpccover WHERE subj_id = ? AND checkCover = ? user_id =? AND teacher_id = ?',array($subject_id,1,$user_id,$teacher_userId));
										        $i = 1;

										        foreach ($TTotalCovered->results() as $key) {
										        	# code...
                                                    if ($key->checkCover == 1) {
                                                     	# counting amount of uncovered topic...
                                                       $ttotalCover = $i++;
                                                    }
										        }

                                                if (@$ttotalCover > 0){
                                                	# code...
                                                	$ttotalCover;
                                                }else{
                                                   $ttotalCover = 0;
                                                }

				                            $tremainUcoverd =  $tTotaltopic - $ttotalCover;

			                            }else{
			                            	$tTotaltopic     = 0;
			                            	$ttotalCover     = 0;
			                            	$tremainUcoverd  = 0;
			                            }
		                            ///// check for Number of topic
		                            ///////////////////////////////////////////////////////////////////////////////////////////////////////
			                    ?>

			                    <div class = "topicDetails">
	                            	<div class = 'tpcDetails totalTopc'>
	                            		<span class = 'Totaltopic'>Total topic</span>
	                            		<span class = 'tpcCount'><?php echo $tTotaltopic; ?></span>
	                            	</div>

	                            	<div class = 'tpcDetails TotalCovered'>
	                            		<span class = 'Totaltopic'>Total Covered</span>
	                            		<span class = 'tpcCount'><?php echo @$ttotalCover; ?></span>
	                            	</div>

	                            	<div class = 'tpcDetails RemainTopic'>
	                            		<span class = 'Totaltopic'>Remain Topic to cover</span>
	                            		<span class = 'tpcCount'><?php echo $tremainUcoverd; ?></span>
	                            	</div>
		                        </div>

		                        <div class = 'topicswrper'>
		                        	<h1 class =  'headerTopp' ><?php echo strtoupper($subj) .' TOPICS'; ?></h1>
		                            <div class = 'topicContenct'>
		                           	   <h1><?php echo strtolower($subj). ' Topics List'; ?></h1> 
		                           	   <div class = 'xoverflow'>
			                           	   	<div class = 'topicSubtopic'>
		                                       
												<?php 
													/////////////////////////////////////////////////////////////////////////////////////////////
													////////////Topic To Cover
													    $subject_id;
													    $tBuk_tpcId = "";

								                        $query_tsubjectopic = $db->query('SELECT * FROM vy_subjecttopics WHERE subject_id = ? AND user_id =?',array($subject_id,$teacher_userId));
								                        if($query_tsubjectopic->count()){
								                        	# code...
								                        	$query_tsubjectopic->count();
								                        	//***********************************topic Results And Subtopic******************************//
									                        	foreach($query_tsubjectopic->results() as $query_tsubjtopic){
									                        		# code...
									                        		
									                        		$tBuk_tpcId         =  $query_tsubjtopic->id;
									                        		$tBuksubject_title  =  $query_tsubjtopic->topic_title;

								                        		    //*********************************Topic Query************************************//

										                        	    echo"<div id = 'tpcContent' class = 'topic'>

											                                    <span   id      =   'tplusSubtopic".$tBuk_tpcId."'
											                                            class   =   'disSubtpc'
											                                            onclick =   \"  switchVisbltyQ (  'tplusSubtopic".$tBuk_tpcId."',
											                                                                              'tminusSubtopic".$tBuk_tpcId."',
											                                                                              'tsubtopicWraper".$tBuk_tpcId."' )
											                                                        \"
											                                    >
											                                     +
											                                    </span> 
						                                                         
											                                    <span   id      =   'tminusSubtopic".$tBuk_tpcId."'
											                                            class   =   'disSubtpc minus' 
											                                            onclick =   \"switchVisbltyQ ( 'tplusSubtopic".$tBuk_tpcId."',
											                                                                           'tminusSubtopic".$tBuk_tpcId."',
											                                                                           'tsubtopicWraper".$tBuk_tpcId."' )
											                                                        \"
											                                    >
											                                    -
											                                    </span>


						                                                        <span   id       =   'realTopcId".$tBuk_tpcId."' 
						                                                                class    =   'realtipc'
						                                                                onclick  =  \"  changeHeader ( 'tTopicHeader',
						                                                                                               '".$tBuksubject_title."',
						                                                                                               'tContentHeader".$tBuk_tpcId."'
						                                                                                             );
						                                                                            \" 
						                                                        >
						                                                          ".$tBuksubject_title."
						                                                        </span>
												                           	   	</div>
									                                                
									                                            <div id = 'tsubtopicWraper".$tBuk_tpcId."' class = 'subtopicWraper'>
									                                            ";
							                                        //*********************************END: Topic Query************************************// 


						                                            //*********************************Subtopiuc Query************************************//
										                        	    $query_subtopic = $db->query('SELECT * FROM vy_subtpc WHERE subject_id = ? AND topic_id = ?',array($subject_id,$tBuk_tpcId));
										                                foreach ($query_subtopic->results() as $subtopic){
										                                	# code...
										                                	$tsubtipc_id     = $subtopic->topic_id;
										                                	$tsubtpctitle    = $subtopic->subtpc;
										                                    $tsubtpctitle_id = $subtopic->id;
										                                    @$tsubtpc_covered = $subtopic->subtpc_covered;

										                                  
										                                    $topictitle = $db->query('SELECT topic_title FROM vy_subjecttopics WHERE id = ? AND user_id =?',
										                                  	                          array($tsubtipc_id,$teacher_userId));
					                                                           
					                                                        $t_title4subtpc =  $topictitle->first()->topic_title;

                                                                             $tcheck = $db->query("SELECT * FROM vy_subtpccover WHERE subtpc_id = ? AND subj_id = ? AND teacher_id =? AND user_id = ?", array($tsubtpctitle_id,$subject_id,$teacher_userId,$user_id));
                                                                            
                                                                              @$tsubtpc_covered =  $tcheck->first()->checkCover;
                                                                              @$tcovered_id =  $tcheck->first()->id;
                                                                              @$tsubtpc_id =  $tcheck->first()->subtpc_id;

                                                                            if($tsubtpc_covered == 1){
                
																	                

																	                $ttickCover = "<div  class   =  'coverd' ><i class = 'fa fa-check'></i></div>";
																            }else{
																	            $ttickCover = "<div id ='coverd".$tsubtpctitle_id."' class   =  'coverd'  >

																                	            <input type    =  'checkbox' 
																			                	       id      =  'coverSubtopic".$tsubtpc_id."' 
																			                	       value   = '1'
																			                	       onclick =  \" tick_coveredTopic('coverSubtopic".$tsubtpc_id."','".$tcovered_id."','coverd".$tsubtpctitle_id."')\" 
																		                	    >

																	                	    </div>";
																            }
					                                                      

										                                	echo    "  
										                                	            <div    class       =  'subtopic' 
											                                	                onclick     =   \" topicContent ( 'tTopicHeader',
											                                	                                                  '".$t_title4subtpc."',
											                                	                                                  'tContentDiv".$tsubtpctitle_id."'
											                                	                                        )
											                                	                                \"  
										                                	            >
										            			                	        ".$tsubtpctitle."
										            			                	    </div>

											            			                	".$ttickCover."
										                           	   	     	    ";
										                                }
										                            //****************************END: Subtopiuc Query************************************//

									                                echo 
									                                    "</div>";
									                        	}

								                        	//*************************************END topic Results And Subtopic******************************//


								                        }else{
								                        	echo "No topics";
								                        }
					                                ////////////END: Topic To Cover
								                    ///////////////////////////////////////////////////////////////////////////////////////////////
											    ?> 	
			                           	   	</div>
		                           	   </div>
		                            </div>

		                            <div class = 'contect'>
		                           	    <h1 id = 'tTopicHeader' class = 'subtpcHeader'></h1>
		                           	    <div class = 'xoverflow'>
		                                    <?php 
		                                        echo " <div id = 'done'></div>";
		                           	    	    //////////////////////////////////////////////////////////////////////////////////////////////////////// 
		                                        //////////Title Of Content
			                                        $subtpc_Cnts = $db->query('SELECT * FROM vy_subjecttopics WHERE subject_id = ? AND user_id =?',array($subject_id,$teacher_userId));
								                    foreach ($subtpc_Cnts->results() as $subtpc_Cnts){

				                                        $tsubtpcId            =   $subtpc_Cnts->id;
				                                        $topic_title         =   $subtpc_Cnts->topic_title;
				                                        $ttitleContent        =   $subtpc_Cnts->titleContent;


				                                        echo "<div id = 'tContentHeader".$tsubtpcId."' class = 'ContentDiv'>
						                           	    		<h2 class = 'subtpctitle'>".$ttitleContent."</h2>
						                           	    		<div class = 'content'>
							                           	    		".$ttitleContent."
						                           	    	    </div>
					                           	    	</div>";
								                    }
							                    //////////END: Content Title
				                           	    /////////////////////////////////////////////////////////////////////////////////

		                           	    	?>
		                               
		                           	    	<?php 

		                           	    	    ///////////////////////////////////////////////////////////////////////////////////////////////////////////
		                           	    	    //////Content

			                                        $subtpc_Cnts = $db->query('SELECT * FROM vy_subtpc WHERE subject_id = ? AND user_id= ?',array($subject_id,$teacher_userId));
								                    foreach ($subtpc_Cnts->results() as $subtpc_Cnts){

			                                           $tsubtpcId    =   $subtpc_Cnts->id;
			                                           $tsubtotitle  =   $subtpc_Cnts->subtpc;
			                                           $tcontent     =  $subtpc_Cnts->subtpc_contct;


				                                        echo "<div id = 'tContentDiv".$tsubtpcId."' class = 'ContentDiv'>
						                           	    		<h2 class = 'subtpctitle'>".$tsubtotitle."</h2>
					                           	    		<div class = 'content'>
						                           	    		".$tcontent."
					                           	    	    </div>
					                           	    	</div>";
								                    }
							                    /////END: Content
				                           	    ///////////////////////////////////////////////////////////////////////////////////////////

		                           	    	?>
		                           	    </div>
		                            </div>
		                        </div>
	                        </div>

                        <?php  }else{ echo "Creat Another Idea her <br> <b><u>idea</u></b> <br> 1. ask for notes may be";} ?>

					</div>
                    
                    <!-- timetable in subject and persenal time table -->
					<div id = 'timetable'>

                        <div class = "todayTimeTableAlert">
                            <div class = "headerTmTable">
	                           <h3 class = "todayTm">Today TimeTable</h3>
	                           <h3 class = "TomorTm">Tommorow TimeTable</h3>
                            </div>

                            <div  id =  "todayPeriods" class =  'todayPeriods'><!--Today Period--></div>

                            <div  id =  "tommorowPeriods" class =  'tommorowPeriods'><!--Tomorow Period--></div>
                        </div>

                       
 
						<header id = 'header_classTimetable'>
							<div class = 'formName'> FORM 1 A </div>
							<div class = 'formName'> FORM 1 B  </div>
							<div class = 'formName'> FORM 1 C</div>
						</header>
					
					    <div id= 'timetableA' class ='timetableA'>
							<table>
								<tr class= 'headerTable'>
									<th>MOndey</th>
									<th>Tuesd</th>
									<th>Wesd</th>
									<th>Friday</th>
									<th>saturday</th>
									<th>Sunday</th>
								</tr>
								
								
								<tr class= 'bodyTable'>
									<td id = 'dayPeriod' onclick = "openAbsolute('timetable_temprate');">
										<div class = 'period_tech'>
											<span class ='period'>Math</span>
											<div class = 'periodtime'><span class = 'startTime_p'>08:00am</span> <span class = 'too'>-</span><span class = 'fineshtime_p'> 9:00am</span></div>
									    </div>
										<div class = 'teacherName'><a href ='#'>T.mwakpesile</a></div>
								    </td>
									
									<td id = 'dayPeriod' onclick = "openAbsolute('timetable_temprate');">
										<div class = 'period_tech'>
											<span class ='period'>Kiswahili</span>
											<div class = 'periodtime'><span class = 'startTime_p'>08:00am</span> <span class = 'too'>-</span><span class = 'fineshtime_p'> 9:00am</span></div>
									    </div>
										<div class = 'teacherName'><a href ='#'>T.Magy</a></div>
								    </td>
									
									<td id = 'dayPeriod' onclick = "openAbsolute('timetable_temprate');">
										<div class = 'period_tech'>
											<span class ='period'>GEO</span>
											<div class = 'periodtime'><span class = 'startTime_p'>08:00am</span> <span class = 'too'>-</span><span class = 'fineshtime_p'> 9:00am</span></div>
									    </div>
										<div class = 'teacherName'><a href ='#'>T.Neema</a></div>
								    </td>
									
									<td id = 'dayPeriod' onclick = "openAbsolute('timetable_temprate');">
										<div class = 'period_tech'>
											<span class ='period'>ENG</span>
											<div class = 'periodtime'><span class = 'startTime_p'>08:00am</span> <span class = 'too'>-</span><span class = 'fineshtime_p'> 9:00am</span></div>
									    </div>
										<div class = 'teacherName'><a href ='#'>T.Luka</a></div>
								    </td>
									
									<td id = 'dayPeriod' onclick = "openAbsolute('timetable_temprate');">
										<div class = 'period_tech'>
											<span class ='period'>HISTORY</span>
											<div class = 'periodtime'><span class = 'startTime_p'>08:00am</span> <span class = 'too'>-</span><span class = 'fineshtime_p'> 9:00am</span></div>
									    </div>
										<div class = 'teacherName'><a href ='#'>T.Samweli</a></div>
								    </td>
									
									<td id = 'dayPeriod' onclick = "openAbsolute('timetable_temprate');">
										<div class = 'period_tech'>
											<span class ='period'>BIOS</span>
											<div class = 'periodtime'><span class = 'startTime_p'>08:00am</span> <span class = 'too'>-</span><span class = 'fineshtime_p'> 9:00am</span></div>
									    </div>
										<div class = 'teacherName'><a href ='#'>T.Mwampolelo</a></div>
								    </td>
								</tr>
								

								<tr class= 'bodyTable'>
									<td id = 'dayPeriod' onclick = "openAbsolute('book_temprate');">
										<div class = 'period_tech'>
											<span class ='period'>Math</span>
											<div class = 'periodtime'><span class = 'startTime_p'>08:00am</span> <span class = 'too'>-</span><span class = 'fineshtime_p'> 9:00am</span></div>
									    </div>
										<div class = 'teacherName'><a href ='#'>T.mwakpesile</a></div>
								    </td>
									
									<td id = 'dayPeriod' onclick = "openAbsolute('book_temprate');">
										<div class = 'period_tech'>
											<span class ='period'>Kiswahili</span>
											<div class = 'periodtime'><span class = 'startTime_p'>08:00am</span> <span class = 'too'>-</span><span class = 'fineshtime_p'> 9:00am</span></div>
									    </div>
										<div class = 'teacherName'><a href ='#'>T.Magy</a></div>
								    </td>
									
									<td id = 'dayPeriod' onclick = "openAbsolute('book_temprate');">
										<div class = 'period_tech'>
											<span class ='period'>GEO</span>
											<div class = 'periodtime'><span class = 'startTime_p'>08:00am</span> <span class = 'too'>-</span><span class = 'fineshtime_p'> 9:00am</span></div>
									    </div>
										<div class = 'teacherName'><a href ='#'>T.Neema</a></div>
								    </td>
									
									<td id = 'dayPeriod' onclick = "openAbsolute('book_temprate');">
										<div class = 'period_tech'>
											<span class ='period'>ENG</span>
											<div class = 'periodtime'><span class = 'startTime_p'>08:00am</span> <span class = 'too'>-</span><span class = 'fineshtime_p'> 9:00am</span></div>
									    </div>
										<div class = 'teacherName'><a href ='#'>T.Luka</a></div>
								    </td>
									
									<td id = 'dayPeriod' onclick = "openAbsolute('book_temprate');">
										<div class = 'period_tech'>
											<span class ='period'>HISTORY</span>
											<div class = 'periodtime'><span class = 'startTime_p'>08:00am</span> <span class = 'too'>-</span><span class = 'fineshtime_p'> 9:00am</span></div>
									    </div>
										<div class = 'teacherName'><a href ='#'>T.Samweli</a></div>
								    </td>
									
									<td id = 'dayPeriod' onclick = "openAbsolute('book_temprate');">
										<div class = 'period_tech'>
											<span class ='period'>BIOS</span>
											<div class = 'periodtime'><span class = 'startTime_p'>08:00am</span> <span class = 'too'>-</span><span class = 'fineshtime_p'> 9:00am</span></div>
									    </div>
										<div class = 'teacherName'><a href ='#'>T.Mwampolelo</a></div>
								    </td>
								</tr>
								
								<tr class= 'bodyTable breaktime'>
								    <td class = 'break'>
										<div class='breakTime'>
											<span>B</span>
											<span>R</span>
											<span>E</span>
											<span>A</span>
											<span>K</span>
											<span> </span>
											<span>T</span>
											<span>I</span>
											<span>M</span>
											<span>E</span>
										</div>
									</td>
								</tr>
								
							
							 
							    <tr class= 'bodyTable'>
									<td id = 'dayPeriod' onclick = "openAbsolute('book_temprate');">
										<div class = 'period_tech'>
											<span class ='period'>Math</span>
											<div class = 'periodtime'><span class = 'startTime_p'>08:00am</span> <span class = 'too'>-</span><span class = 'fineshtime_p'> 9:00am</span></div>
									    </div>
										<div class = 'teacherName'><a href ='#'>T.mwakpesile</a></div>
								    </td>
									
									<td id = 'dayPeriod' onclick = "openAbsolute('book_temprate');">
										<div class = 'period_tech'>
											<span class ='period'>Kiswahili</span>
											<div class = 'periodtime'><span class = 'startTime_p'>08:00am</span> <span class = 'too'>-</span><span class = 'fineshtime_p'> 9:00am</span></div>
									    </div>
										<div class = 'teacherName'><a href ='#'>T.Magy</a></div>
								    </td>
									
									<td id = 'dayPeriod' onclick = "openAbsolute('book_temprate');">
										<div class = 'period_tech'>
											<span class ='period'>GEO</span>
											<div class = 'periodtime'><span class = 'startTime_p'>08:00am</span> <span class = 'too'>-</span><span class = 'fineshtime_p'> 9:00am</span></div>
									    </div>
										<div class = 'teacherName'><a href ='#'>T.Neema</a></div>
								    </td>
									
									<td id = 'dayPeriod' onclick = "openAbsolute('book_temprate');">
										<div class = 'period_tech'>
											<span class ='period'>ENG</span>
											<div class = 'periodtime'><span class = 'startTime_p'>08:00am</span> <span class = 'too'>-</span><span class = 'fineshtime_p'> 9:00am</span></div>
									    </div>
										<div class = 'teacherName'><a href ='#'>T.Luka</a></div>
								    </td>
									
									<td id = 'dayPeriod' onclick = "openAbsolute('book_temprate');">
										<div class = 'period_tech'>
											<span class ='period'>HISTORY</span>
											<div class = 'periodtime'><span class = 'startTime_p'>08:00am</span> <span class = 'too'>-</span><span class = 'fineshtime_p'> 9:00am</span></div>
									    </div>
										<div class = 'teacherName'><a href ='#'>T.Samweli</a></div>
								    </td>
									
									<td id = 'dayPeriod' onclick = "openAbsolute('book_temprate');">
										<div class = 'period_tech'>
											<span class ='period'>BIOS</span>
											<div class = 'periodtime'><span class = 'startTime_p'>08:00am</span> <span class = 'too'>-</span><span class = 'fineshtime_p'> 9:00am</span></div>
									    </div>
										<div class = 'teacherName'><a href ='#'>T.Mwampolelo</a></div>
								    </td>
								</tr>
								
							
							    <tr class= 'bodyTable'>
									<td id = 'dayPeriod' onclick = "openAbsolute('book_temprate');">
										<div class = 'period_tech'>
											<span class ='period'>Math</span>
											<div class = 'periodtime'><span class = 'startTime_p'>08:00am</span> <span class = 'too'>-</span><span class = 'fineshtime_p'> 9:00am</span></div>
									    </div>
										<div class = 'teacherName'><a href ='#'>T.mwakpesile</a></div>
								    </td>
									
									<td id = 'dayPeriod' onclick = "openAbsolute('book_temprate');">
										<div class = 'period_tech'>
											<span class ='period'>Kiswahili</span>
											<div class = 'periodtime'><span class = 'startTime_p'>08:00am</span> <span class = 'too'>-</span><span class = 'fineshtime_p'> 9:00am</span></div>
									    </div>
										<div class = 'teacherName'><a href ='#'>T.Magy</a></div>
								    </td>
									
									<td id = 'dayPeriod' onclick = "openAbsolute('book_temprate');">
										<div class = 'period_tech'>
											<span class ='period'>GEO</span>
											<div class = 'periodtime'><span class = 'startTime_p'>08:00am</span> <span class = 'too'>-</span><span class = 'fineshtime_p'> 9:00am</span></div>
									    </div>
										<div class = 'teacherName'><a href ='#'>T.Neema</a></div>
								    </td>
									
									<td id = 'dayPeriod' onclick = "openAbsolute('book_temprate');">
										<div class = 'period_tech'>
											<span class ='period'>ENG</span>
											<div class = 'periodtime'><span class = 'startTime_p'>08:00am</span> <span class = 'too'>-</span><span class = 'fineshtime_p'> 9:00am</span></div>
									    </div>
										<div class = 'teacherName'><a href ='#'>T.Luka</a></div>
								    </td>
									
									<td id = 'dayPeriod' onclick = "openAbsolute('book_temprate');">
										<div class = 'period_tech'>
											<span class ='period'>HISTORY</span>
											<div class = 'periodtime'><span class = 'startTime_p'>08:00am</span> <span class = 'too'>-</span><span class = 'fineshtime_p'> 9:00am</span></div>
									    </div>
										<div class = 'teacherName'><a href ='#'>T.Samweli</a></div>
								    </td>
									
									<td id = 'dayPeriod' onclick = "openAbsolute('book_temprate');">
										<div class = 'period_tech'>
											<span class ='period'>BIOS</span>
											<div class = 'periodtime'><span class = 'startTime_p'>08:00am</span> <span class = 'too'>-</span><span class = 'fineshtime_p'> 9:00am</span></div>
									    </div>
										<div class = 'teacherName'><a href ='#'>T.Mwampolelo</a></div>
								    </td>
								</tr>
								
							
							    <tr class= 'bodyTable'>
									<td id = 'dayPeriod' onclick = "openAbsolute('book_temprate');">
										<div class = 'period_tech'>
											<span class ='period'>Math</span>
											<div class = 'periodtime'><span class = 'startTime_p'>08:00am</span> <span class = 'too'>-</span><span class = 'fineshtime_p'> 9:00am</span></div>
									    </div>
										<div class = 'teacherName'><a href ='#'>T.mwakpesile</a></div>
								    </td>
									
									<td id = 'dayPeriod' onclick = "openAbsolute('book_temprate');">
										<div class = 'period_tech'>
											<span class ='period'>Kiswahili</span>
											<div class = 'periodtime'><span class = 'startTime_p'>08:00am</span> <span class = 'too'>-</span><span class = 'fineshtime_p'> 9:00am</span></div>
									    </div>
										<div class = 'teacherName'><a href ='#'>T.Magy</a></div>
								    </td>
									
									<td id = 'dayPeriod' onclick = "openAbsolute('book_temprate');">
										<div class = 'period_tech'>
											<span class ='period'>GEO</span>
											<div class = 'periodtime'><span class = 'startTime_p'>08:00am</span> <span class = 'too'>-</span><span class = 'fineshtime_p'> 9:00am</span></div>
									    </div>
										<div class = 'teacherName'><a href ='#'>T.Neema</a></div>
								    </td>
									
									<td id = 'dayPeriod' onclick = "openAbsolute('book_temprate');">
										<div class = 'period_tech'>
											<span class ='period'>ENG</span>
											<div class = 'periodtime'><span class = 'startTime_p'>08:00am</span> <span class = 'too'>-</span><span class = 'fineshtime_p'> 9:00am</span></div>
									    </div>
										<div class = 'teacherName'><a href ='#'>T.Luka</a></div>
								    </td>
									
									<td id = 'dayPeriod' onclick = "openAbsolute('book_temprate');">
										<div class = 'period_tech'>
											<span class ='period'>HISTORY</span>
											<div class = 'periodtime'><span class = 'startTime_p'>08:00am</span> <span class = 'too'>-</span><span class = 'fineshtime_p'> 9:00am</span></div>
									    </div>
										<div class = 'teacherName'><a href ='#'>T.Samweli</a></div>
								    </td>
									
									<td id = 'dayPeriod' onclick = "openAbsolute('book_temprate');">
										<div class = 'period_tech'>
											<span class ='period'>BIOS</span>
											<div class = 'periodtime'><span class = 'startTime_p'>08:00am</span> <span class = 'too'>-</span><span class = 'fineshtime_p'> 9:00am</span></div>
									    </div>
										<div class = 'teacherName'><a href ='#'>T.Mwampolelo</a></div>
								    </td>
								</tr>	
							</table>
						</div>
						
						<a href = 'ComposeNotes.php' id = 'composeNotes' >Edit Time Table</a>
						<a href = 'ComposeNotes.php' id = 'composeNotes' >Compose Notes</a>
                        
                        <div id = 'student_List'>
						    <div id = 'topic' onclick = "swicthVisibility('stdent_listInteacher');">Student List</div>
							<div id='stdent_listInteacher'>
							<div id = 'classList_student' class = 'class_stude_list'>
								<h3>FORM 1 (A)</h3>
								<a href = '#'>Nehemia Mwansasu</a> <span id= 'id_static'><a href= 'statics.php'><i  class="icofont icofont-chart-line" aria-hidden="true"></i></a></span>
								<a href = '#'>Nehemia Mwansasu</a> <span id= 'id_static'><a href= 'statics.php'><i  class="icofont icofont-chart-line" aria-hidden="true"></i></a></span>
								<a href = '#'>Nehemia Mwansasu</a> <span id= 'id_static'><a href= 'statics.php'><i  class="icofont icofont-chart-line" aria-hidden="true"></i></a></span>
								<a href = '#'>Nehemia Mwansasu</a> <span id= 'id_static'><a href= 'statics.php'><i  class="icofont icofont-chart-line" aria-hidden="true"></i></a></span>
								<a href = '#'>Nehemia Mwansasu</a> <span id= 'id_static'><a href= 'statics.php'><i  class="icofont icofont-chart-line" aria-hidden="true"></i></a></span>
								<a href = '#'>Nehemia Mwansasu</a> <span id= 'id_static'><a href= 'statics.php'><i  class="icofont icofont-chart-line" aria-hidden="true"></i></a></span>
								<a href = '#'>Nehemia Mwansasu</a> <span id= 'id_static'><a href= 'statics.php'><i  class="icofont icofont-chart-line" aria-hidden="true"></i></a></span>
								<a href = '#'>Nehemia Mwansasu</a> <span id= 'id_static'><a href= 'statics.php'><i  class="icofont icofont-chart-line" aria-hidden="true"></i></a></span>
								<a href = '#'>Nehemia Mwansasu</a> <span id= 'id_static'><a href= 'statics.php'><i  class="icofont icofont-chart-line" aria-hidden="true"></i></a></span>
								<a href = '#'>Nehemia Mwansasu</a> <span id= 'id_static'><a href= 'statics.php'><i  class="icofont icofont-chart-line" aria-hidden="true"></i></a></span>
							</div>
							  
							<div id = 'classList_studen' class = 'class_stude_list'>
								<h3>FORM 1 (B)</h3>  
								<a href = '#'>Nehemia Mwansasu</a> <span id= 'id_static'><a href= 'statics.php'><i  class="icofont icofont-chart-line" aria-hidden="true"></i></a></span>
								<a href = '#'>Nehemia Mwansasu</a> <span id= 'id_static'><a href= 'statics.php'><i  class="icofont icofont-chart-line" aria-hidden="true"></i></a></span>
								<a href = '#'>Nehemia Mwansasu</a> <span id= 'id_static'><a href= 'statics.php'><i  class="icofont icofont-chart-line" aria-hidden="true"></i></a></span>
								<a href = '#'>Nehemia Mwansasu</a> <span id= 'id_static'><a href= 'statics.php'><i  class="icofont icofont-chart-line" aria-hidden="true"></i></a></span>
								<a href = '#'>Nehemia Mwansasu</a> <span id= 'id_static'><a href= 'statics.php'><i  class="icofont icofont-chart-line" aria-hidden="true"></i></a></span>
								<a href = '#'>Nehemia Mwansasu</a> <span id= 'id_static'><a href= 'statics.php'><i  class="icofont icofont-chart-line" aria-hidden="true"></i></a></span>
								<a href = '#'>Nehemia Mwansasu</a> <span id= 'id_static'><a href= 'statics.php'><i  class="icofont icofont-chart-line" aria-hidden="true"></i></a></span>
								<a href = '#'>Nehemia Mwansasu</a> <span id= 'id_static'><a href= 'statics.php'><i  class="icofont icofont-chart-line" aria-hidden="true"></i></a></span>
								<a href = '#'>Nehemia Mwansasu</a> <span id= 'id_static'><a href= 'statics.php'><i  class="icofont icofont-chart-line" aria-hidden="true"></i></a></span>
								<a href = '#'>Nehemia Mwansasu</a> <span id= 'id_static'><a href= 'statics.php'><i  class="icofont icofont-chart-line" aria-hidden="true"></i></a></span>
							</div>
							
							
						<div id = 'classList_studen' class = 'class_stude_list'>
                            <h3>FORM 1 (C)</h3>  
                            <a href = '#'>Nehemia Mwansasu</a><span id= 'id_static'><i  class="icofont icofont-chart-line" aria-hidden="true"></i> </span>
                            <a href = '#'>Nehemia Mwansasu</a><span id= 'id_static'><i  class="icofont icofont-chart-line" aria-hidden="true"></i> </span>
                            <a href = '#'>Nehemia Mwansasu</a><span id= 'id_static'><i  class="icofont icofont-chart-line" aria-hidden="true"></i> </span>
                            <a href = '#'>Nehemia Mwansasu</a><span id= 'id_static'><i  class="icofont icofont-chart-line" aria-hidden="true"></i> </span>
                            <a href = '#'>Nehemia Mwansasu</a><span id= 'id_static'><i  class="icofont icofont-chart-line" aria-hidden="true"></i> </span>
                            <a href = '#'>Nehemia Mwansasu</a><span id= 'id_static'><i  class="icofont icofont-chart-line" aria-hidden="true"></i> </span>
                            <a href = '#'>Nehemia Mwansasu</a><span id= 'id_static'><i  class="icofont icofont-chart-line" aria-hidden="true"></i> </span>
                            <a href = '#'>Nehemia Mwansasu</a><span id= 'id_static'><i  class="icofont icofont-chart-line" zaria-hidden="true"></i> </span>
                         </div>
                      </div>
                        </div>
                    </div>
				</div>
				
				<div id = 'parentsChember'>
                    <div id = "SubjectBookLibray" class = "SubjectBookLibray">
                        <div class = "head">
                        	<h3 class = "FavouriteBooks">Favourite Books</h3>
                        	<h3>Book Plannig To Read</h3>
                        </div>
                        <div class = "firstDiv">
                        	<div class = "slidShowBody">
                        		<div class = "slideArrow backArrwo"><i class = "fa fa-angle-double-left"></i></div>
                        		<div class = "mainslidDiv">
	                        		<div class = "panelslide">
	                        			<div class = "bookImg"><img src = "img/books_cover/geo/form3.jpg"></div>
	                        			<div class = "deatails">
	                        				<span class = "ans">Bios third Ediiton</span>
	                        			</div>
	                        		</div>
                                    
                                    <div class = "panelslide">
	                        			<div class = "bookImg"><img src = "img/books_cover/geo/geo_from2.jpg"></div>
	                        			<div class = "deatails">
	                        			
	                        			<span class = "ans">Bios third Ediiton</span>
	                        			</div>
	                        		</div>
                                    
                                    <div class = "panelslide">
	                        			<div class = "bookImg"><img src = "img/books_cover/geo/form4.jpg"></div>
	                        			<div class = "deatails">
	                        				<span class = "ans">Bios third Ediiton</span>
	                        			</div>
	                        		</div>
                        		</div>
                        		<div class = "slideArrow forwardArrwo"><i class = "fa fa-angle-double-right"></i></div>
                        	</div>
                        	
                        	<div class = "favaraoytBook">
                        		<div class = "mainslidDiv favaraotBook">
	                        		<div class = "panelslide">
	                        			<div class = "bookImg"><img src = "img/books_cover/geo/form3.jpg"></div>
	                        			<div class = "deatails">
	                        				<span class = "ans">Bios third Ediiton</span>
	                        			</div>
	                        		</div>
                                    
                                    <div class = "panelslide">
	                        			<div class = "bookImg"><img src = "img/books_cover/geo/form3.jpg"></div>
	                        			<div class = "deatails">
	                        			
	                        			<span class = "ans">Bios third Ediiton</span>
	                        			</div>
	                        		</div>
                                    
                                    <div class = "panelslide">
	                        			<div class = "bookImg"><img src = "img/books_cover/geo/form3.jpg"></div>
	                        			<div class = "deatails">
	                        				<span class = "ans">Bios third Ediiton</span>
	                        			</div>
	                        		</div>
                        		</div>
                        		<div class = "peginatoin">
                        			<span>1</span>
                        			<span>2</span>
                        			<span>3</span>
                        			<span>4</span>
                        			<span>5</span>
                        		</div>
                        	</div>
                        </div> 

                        <!-- All new book for sold and free will stay twu month -->
                        <div class = "secDiv">
                            <div class = "head">
                        	    <h3 class = "FavouriteBooks">
	                        	    <span class = "newred">New</span>
	                        	    <span>SUBJECT</span>
	                        	    <span>BOOK</span>
                        	    </h3>
                        	</div>

                        	<div class = "mainslidDiv">
	                        		<div class = "panelslide" onclick ="openAbsolute('book_buy');">
	                        			<div class = "bookImg"><img src = "img/books_cover/geo/form3.jpg"></div>
	                        			<div class = "deatails">
	                        				<span class = "ans">Bios third Ediiton</span>
	                        			</div>
	                        		</div>
                                    
                                    <div class = "panelslide">
	                        			<div class = "bookImg"><img src = "img/books_cover/geo/form3.jpg"></div>
	                        			<div class = "deatails">
	                        			
	                        			<span class = "ans">Bios third Ediiton</span>
	                        			</div>
	                        		</div>
                                    
                                    <div class = "panelslide">
	                        			<div class = "bookImg"><img src = "img/books_cover/geo/form3.jpg"></div>
	                        			<div class = "deatails">
	                        				<span class = "ans">Bios third Ediiton</span>
	                        			</div>
	                        		</div>
                            </div>
                        </div> 

                        <!--  freee books and Buyed books -->
                        <div class = "thridDiv">
                            
                            <div class = "head">
                        	    <h3 class = "FavouriteBooks">
	                        	    <span>SUBJECT</span> 
	                        	    <span>BOOK</span>
                        	    </h3>
                        	</div>

                        	<div class = "mainslidDiv">
	                        		<div class = "panelslide" onclick = "openAbsolute('book_temprate');">
	                        			<div class = "bookImg"><img src = "img/books_cover/geo/form3.jpg"></div>
	                        			<div class = "deatails">
	                        				<span class = "ans">Bios third Ediiton</span>
	                        			</div>
	                        		</div>
                                    
                                    <div class = "panelslide" onclick = "openAbsolute('book_temprate');">
	                        			<div class = "bookImg"><img src = "img/books_cover/geo/form3.jpg"></div>
	                        			<div class = "deatails">
	                        			
	                        			<span class = "ans">Bios third Ediiton</span>
	                        			</div>
	                        		</div>
                                    
                                    <div class = "panelslide" onclick = "openAbsolute('book_temprate');">
	                        			<div class = "bookImg"><img src = "img/books_cover/geo/form3.jpg"></div>
	                        			<div class = "deatails">
	                        				<span class = "ans">Bios third Ediiton</span>
	                        			</div>
	                        		</div>
                            </div>
                        </div>    

                        <!--  books for sold -->
                        <div class = "forthdDiv">
                            
                            <div class = "head">
                        	    <h3 class = "FavouriteBooks">
	                        	    <span>SOLD</span> 
	                        	    <span>SUBJECT</span> 
	                        	    <span>BOOK</span>
                        	    </h3>
                        	</div>

                        	<div class = "mainslidDiv">
	                        		<div class = "panelslide" onclick = "openAbsolute('book_buy');">
	                        			<div class = "bookImg"><img src = "img/books_cover/geo/form3.jpg"></div>
	                        			<div class = "deatails">
	                        				<span class = "ans">Bios third Ediiton</span>
	                        			</div>
	                        		</div>
                                    
                                    <div class = "panelslide" onclick = "openAbsolute('book_buy');">
	                        			<div class = "bookImg"><img src = "img/books_cover/geo/form3.jpg"></div>
	                        			<div class = "deatails">
	                        			
	                        			<span class = "ans">Bios third Ediiton</span>
	                        			</div>
	                        		</div>
                                    
                                    <div class = "panelslide" onclick = "openAbsolute('book_buy');">
	                        			<div class = "bookImg"><img src = "img/books_cover/geo/form3.jpg"></div>
	                        			<div class = "deatails">
	                        				<span class = "ans">Bios third Ediiton</span>
	                        			</div>
	                        		</div>
                            </div>
                        </div>         	   
                    </div>
                </div>

				
			    <div id = 'Result' class='resultPlace'>
			      <!--  subject result on subject page -->

			    	<div class = "boxPanel resultBOx">
                       <!-- masomo yatakuwa ya fade in katka div hizo nne -->
                    	<div class = "panel_one lastMax">
                    		<div class = "subject">KISWAHILI</div>
                    		<div class = "subjectMax">67%</div>
                    		<div class = "date">2/2/2018 <span class = "examtype">Quiz</span>
                            </div>
                    	</div>

                    	<div class = "panel_one lastMax">
                    		<div class = "subject">MATHEMATICS</div>
                    		<div class = "subjectMax">97%</div>
                    		<div class = "date">2/2/2018 <span class = "examtype">Assigment</span>
                            </div>
                    	</div>

                    	<div class = "panel_one lastMax">
                    		<div class = "subject">GEOGRAPHY</div>
                    		<div class = "subjectMax">44%</div>
                    		<div class = "date">2/2/2018 <span class = "examtype">Test</span>
                            </div>
                    	</div>

                    	<div class = "panel_one lastMax">
                    		<div class = "subject">HISTORY</div>
                    		<div class = "subjectMax">82%</div>
                    		<div class = "date">13/1/2018 
                               <span class = "examtype">Midterm Exam</span>
                    		</div>
                    	</div>
                    </div>
                    
                    <div class = "peparResust">
                    	<div class = "yearResult">
                    		<div class = "showYearAndLevel" onclick = "switchVisbltyQ('fa_angle_left','yaliyomo','fa_angle_down');" >             
                    		    <div class = "angleShow">
                    		       <i id = "fa_angle_left" class="fa fa-angle-right" aria-hidden="true"></i>
                    		       <i id = "fa_angle_down" class="fa fa-angle-down" aria-hidden="true"></i>
                    		    </div>
                    			<span class = "yrs">2017</span>
                    			<span class = "formLeve">FORM 4</span>
                    		</div>

                    		<div id = "yaliyomo" class = "yaliyomo">
                    			<div class = "studentResultx">
                    				<div class = 'profImg'>
									    <img src ='img/profiles/p4.jpg' >
							        </div>
							        <div class = "subjectResults">
							            <h3>BIOS</h3>
								        <div class = "resultsExam">
								            <div class = "resultbody">
									        	<div class = "p_a Examdate">2/6</div>
									        	<div class = "p_b Examname">Exam name</div>
									        	<div class = "p_c ExOpnion">Very Good</div>
									        	<div class = "p_d Exmax">89%</div>
									        	<div class = "p_e Exgrade">B</div>
								        	</div>

								        	<div class = "resultbody">
									        	<div class = "p_a Examdate">4/7</div>
									        	<div class = "p_b Examname">Exam name</div>
									        	<div class = "p_c ExOpnion">Very Good</div>
									        	<div class = "p_d Exmax">55%</div>
									        	<div class = "p_e Exgrade">C</div>
								        	</div>
								        </div>
								        <div class = "resultsStatics">
								            <div class  ="staticResultH"><span class = "subjectName">Subject Name</span> <span>STATISTICS</span></div>
								        	<i  class="icofont icofont-chart-line" aria-hidden="true"></i>
								        </div>
							        </div>

							        <div class = "subjectResults">
							            <h3>GEO</h3>
								        <div class = "resultsExam">
								            <div class = "resultbody">
									        	<div class = "p_a Examdate">3/5</div>
									        	<div class = "p_b Examname">MiddiTerm Test</div>
									        	<div class = "p_c ExOpnion">Very Good</div>
									        	<div class = "p_d Exmax">97%</div>
									        	<div class = "p_e Exgrade">A</div>
								        	</div>

								        	<div class = "resultbody">
									        	<div class = "p_a Examdate">4/6</div>
									        	<div class = "p_b Examname">Terminal Test</div>
									        	<div class = "p_c ExOpnion">Very Good</div>
									        	<div class = "p_d Exmax">55%</div>
									        	<div class = "p_e Exgrade">C</div>
								        	</div>
								        </div>
								        <div class = "resultsStatics">
								            <div class  ="staticResultH"><span class = "subjectName">Subject Name</span> <span>STATISTICS</span></div>
								        	<i  class="icofont icofont-chart-line" aria-hidden="true"></i>
								        </div>
							        </div>

                    			</div>
                    		</div>
                    	</div>

                    	<div class = "yearResult">
                    		<div class = "showYearAndLevel" onclick = "switchVisbltyQ('fa_angle_lef','yaliyom','fa_angle_dow');" >             
                    		    <div class = "angleShow">
                    		       <i id = "fa_angle_lef" class="fa fa-angle-right" aria-hidden="true"></i>
                    		       <i id = "fa_angle_dow" class="fa fa-angle-down" aria-hidden="true"></i>
                    		    </div>
                    			<span class = "yrs">2016</span>
                    			<span class = "formLeve">FORM 3</span>
                    		</div>

                    		<div id = "yaliyom" class = "yaliyomo">
                    			<div class = "studentResultx">
                    				<div class = 'profImg'>
									    <img src ='img/profiles/p4.jpg' >
							        </div>
							        <div class = "subjectResults">
							            <h3>BIOS</h3>
								        <div class = "resultsExam">
								            <div class = "resultbody">
									        	<div class = "p_a Examdate">2/6</div>
									        	<div class = "p_b Examname">Exam name</div>
									        	<div class = "p_c ExOpnion">Very Good</div>
									        	<div class = "p_d Exmax">89%</div>
									        	<div class = "p_e Exgrade">B</div>
								        	</div>

								        	<div class = "resultbody">
									        	<div class = "p_a Examdate">4/7</div>
									        	<div class = "p_b Examname">Exam name</div>
									        	<div class = "p_c ExOpnion">Very Good</div>
									        	<div class = "p_d Exmax">55%</div>
									        	<div class = "p_e Exgrade">C</div>
								        	</div>
								        </div>
								        <div class = "resultsStatics">
								            <div class  ="staticResultH"><span class = "subjectName">Subject Name</span> <span>STATISTICS</span></div>
								        	<i  class="icofont icofont-chart-line" aria-hidden="true"></i>
								        </div>
							        </div>

							        <div class = "subjectResults">
							            <h3>GEO</h3>
								        <div class = "resultsExam">
								            <div class = "resultbody">
									        	<div class = "p_a Examdate">3/5</div>
									        	<div class = "p_b Examname">MiddiTerm Test</div>
									        	<div class = "p_c ExOpnion">Very Good</div>
									        	<div class = "p_d Exmax">97%</div>
									        	<div class = "p_e Exgrade">A</div>
								        	</div>

								        	<div class = "resultbody">
									        	<div class = "p_a Examdate">4/6</div>
									        	<div class = "p_b Examname">Terminal Test</div>
									        	<div class = "p_c ExOpnion">Very Good</div>
									        	<div class = "p_d Exmax">55%</div>
									        	<div class = "p_e Exgrade">C</div>
								        	</div>
								        </div>
								        <div class = "resultsStatics">
								            <div class  ="staticResultH"><span class = "subjectName">Subject Name</span> <span>STATISTICS</span></div>
								        	<i  class="icofont icofont-chart-line" aria-hidden="true"></i>
								        </div>
							        </div>

                    			</div>
                    		</div>
                    	</div>
                    </div>
			    </div>	

			    <div id = 'Stictix'>
				    <div class = "headerOnPlanner">
				    	<div class ="headerOne" onclick = 'HomekComp("composePlanAnDrea","AcomplshedDream");'>YOUR GOALS & DREAM ACCOPKISHMENT</div>
				    	<div class ="headerTwo" onclick = 'HomekComp("AcomplshedDream","composePlanAnDrea");'>COMPOSE PLAN & DREAM</div>
				    </div>
	                <!-- //planner progress -->
				    <div id = "AcomplshedDream" class = "gD ompregressAndAcomplshedDream">
				    	<div class = "panelPlaner">
				    	   <!--  panel Exam show pepars and Maxs progress -->
				    		<div class = "panelExams">
				    		    <div class = "header_planExams">
				    			    <h3 class = "PlanningName">REVOLUTION HAS BEGAN</h3>
				    			    <h3 class = "dataStart">3/3/2015</h3>
				    			</div>

	                            <div class ="panelExamWraper">
	                            	<div class = "slideArrow backArrwo"><i class = "fa fa-angle-double-left"></i></div>
	                            	<div class ="panelExamBody">
	                            		<div class = "xoverflow">
	                            			
	                            			<div class = "examspage">
		                                         <div class = "examheader">
		                                         	<div class = "examNo">No:1</div>
		                                         	<div class = "examDoneDate">3/3/2017</div>
		                                         </div>

		                                         <div class = "DisplayMax"> 
		                                         	 <span class = "GetAbove">GET ABOVE</span>
		                                         	 <span class = "RealMax">60%</span>
		                                         </div>

		                                          <div class = "bottomExamdiv"> 
		                                         	 <span class = "upload">Upload</span>
		                                         	  <a href = 'examtime.php?user=<?php echo escape($user_uname);?>' class = "startExam"><?php echo $user_uname; ?></a>
		                                         </div>
	                            			</div>

	                            			<div class = "examspage">
		                                         <div class = "examheader">
		                                         	<div class = "examNo">No:2</div>
		                                         	<div class = "examDoneDate">3/3/2017</div>
		                                         </div>

		                                         <div class = "DisplayMax"> 
		                                         	 <span class = "GetAbove">GET ABOVE</span>
		                                         	 <span class = "RealMax">60%</span>
		                                         </div>

		                                          <div class = "bottomExamdiv"> 
		                                         	 <span class = "upload">Upload</span>
		                                         	 <a href = 'examtime.php?user=<?php echo escape($user_uname);?>' class = "startExam">Start Exams</a>
		                                         </div>
	                            			</div>
	                            		</div>
	                            	</div>
	                            	<div class = "slideArrow forwardArrwo"><i class = "fa fa-angle-double-right"></i></div>
	                            </div>
				    		</div>
	                        
	                        <!--  panel DREAM show aside pepars and Maxs progress -->
				    		<div class = "panelDream">
	                            <div class = "topheader">
				                    <div class = "firstheader">
				                     	<span class = "nameOfDream">NAME OF DREAM</span>
		                         	</div>

		                         	<div class = "DreamWinning">
		                         		<!-- <i class = "fa  fa-trophy"></i> -->
		                         		<div class = "dreamWining">
							                <img class = "imgWin" src = "img/planner/house/hous1/house.jpeg"/>
		                                                   
				                        	<div class = "details">
				                        		<div class = "sold">
				                        			<span class = "roundColor"></span>
				                        			<span class = "cash">MONEY:</span>
				                        		 	<span class = "cash">15550000 tzs</span>
				                        		</div>

				                        		<div class = "sold plannerButton">
				                        			<span class = "CheckDetails" onclick = "openAbsolute('MyDream');">Check Details
				                        			</span>
				                                </div>
				                        	</div>
			                        	</div> 
		                         	</div>
		                            <!-- 	
		                         	<div class = "seconfHeader">
		                         	    <span class = "progressBar">ON PROGRESS</span>
		                            </div> -->
	                            </div>
				    		</div>
				    	</div>
				    </div>

				    <div id = "composePlanAnDrea" class = " gD composePlanAnDrea">
				        <!-- Exams planning -->
	                    <div class = "gD ExamsPlanning">

				        	<div class = "planQstn">
	                         <!--    <div class = "uploadDiv">
		                            <div class = "createTender" onclick = "openAbsolute('summarysHare');">Create Planning</div>
		                        </div> -->

		                        <div class = "plannigWraper">
	                                <h3>PLANNER TIME</h3>
		                        	
		                        	<div class = "qtnOne">
		                        	    <span  class = "qstn">When Start EXAMS</span>
		                        	    <span><input type = "text" placeholder = " Start Date"></span>
		                        	</div>

		                        	<div class = "qtnOne planerName">
		                        	    <span  class = "qstn">Giv  Your Planner Name</span>
		                        	    <span><input type = "text" class = "planerName" placeholder = " example: Revolution Has began"></span>
		                        	</div>

		                        	<div class = "qtnTwo">
		                        	    
		                        	    <span  class = "qstn">How many Exam Plan To do</span>
		                        	    
		                        	    <span class = " maxplaned examNoSpan"><input type = "text" placeholder = "" class = "examNo"></span>
		                        	    
		                        	    <span class = "">per</span>
		                        	    
		                        	    <span class = "ChooseNo">
		                        	    	<select id='qtnType'> 
					                            <option selected="selected"></option>
					                            <option>1</option>
					                            <option>2</option>
					                            <option>3</option>
					                            <option>4</option>
					                            <option>5</option>
					                            <option>6</option>
					                            <option>7</option>
					                            <option>8</option>
					                            <option>9</option>
					                            <option>10</option>
			                               </select>
			                            </span>

			                            <span class = "daysChoose">
		                        	    	<select id='qtnType'> 
					                            <option selected="selected">day</option>
					                            <option>week</option>
					                            <option>Month</option>
					                            <option>year</option>
					                            <option>years</option>

					                        </select>
			                            </span>
		                        	</div>
		                            
		                            <div class = "qtnfour">
		                        	    <span  class = "qstn">Avarage Max planed to get</span>
		                        	    <span   class = "maxplaned examNoSpan"><input type = "text" placeholder = "Max" class = "examNo">% </span>  
		                        	    <span   class = "">:it cost</span>  
		                        	    <span   class = "">50,000tzs</span>  
		                        	    <span   class = "">(1% = 1500tzs )</span>  
		                        	</div>


		                        	<div class = "qtnSix">
		                        	    <span  class = "qstn">Money You Plan to get</span>
		                        	    <span><input type = "text" placeholder = "Assume Money"></span>
		                        	</div>
		                        </div>
	                            
	                            <div class = "plannigWraper">
	                                <h3>CHOOSE EXAMS AND MAX YOU WANT </h3>
		                        	 
		                        	 <div class = "gd selectSubject">
	                                    <div class = 'chooseSubject'> 
	                                        <span class = "inputSelctSubject"><input type="checkbox"></span>
	                                        <span class = "subjectName">Biology</span>
	                                        <span class = "AssumedMax"><input  type="text" class = "assumMax"></span>
	                                        <span class = "simpleState">it equal</span>
	                                        <span class = "costEstmated">5,000tz</span>
	                                    </div>

	                                    <div class = 'chooseSubject'> 
	                                        <span class = "inputSelctSubject"><input type="checkbox"></span>
	                                        <span class = "subjectName">Kiswahili</span>
	                                        <span class = "AssumedMax"><input  type="text" class = "assumMax"></span>
	                                        <span class = "simpleState">it equal</span>
	                                        <span class = "costEstmated">5,000tz</span>
	                                    </div>
	                                    
	                                    <div class = 'chooseSubject'> 
	                                        <span class = "inputSelctSubject"><input type="checkbox"></span>
	                                        <span class = "subjectName">Physics</span>
	                                        <span class = "AssumedMax"><input  type="text" class = "assumMax"></span>
	                                        <span class = "simpleState">it equal</span>
	                                        <span class = "costEstmated">4,000tz</span>
	                                    </div>

	                                    <div class = 'chooseSubject'> 
	                                        <span class = "inputSelctSubject"><input type="checkbox"></span>
	                                        <span class = "subjectName">Mathematics</span>
	                                        <span class = "AssumedMax"><input  type="text" class = "assumMax"></span>
	                                        <span class = "simpleState">it equal</span>
	                                        <span class = "costEstmated">7,000tz</span>
	                                    </div>
		                        	 	
		                        	 </div>
		                        </div>


		                        <div class = "plannigWraper">
	                                <h3>GAME OF DEVELOPMENT AND SUCCESS </h3>
		                        	 <div class = "DreamSearch">
		                        	 	<input type = "text" placeholder="Search Dreams">
		                        	 </div>

		                        	<div class = "plannerPanel planningWraper">
		                        	    <h4>HOUSE DREAMS</h4>
					                        <div class = "showpanel">
					                            <div class = "xoverflow">
						                        	<div class = "dreamImg">
						                        		<img src = "img/planner/house/hous1/house.jpeg">

							                        	<div class = "details">
							                        		<div class = "sold">
							                        			<span class = "roundColor"></span>
							                        			<span class = "cash">MONEY:</span>
							                        		 	<span class = "cash">15550000 tzs</span>
							                        		</div>

							                        		<div class = "sold plannerButton">
							                        			<span class = "CheckDetails" onclick = "openAbsolute('MyDream');">Check Details</span>
							                        			<span class = "BemyDream">Be my Dream</span>
							                                </div>
							                        	</div>
						                        	</div>

						                        	<div class = "dreamImg">
						                        		<img src = "img/planner/house/hous1/house.jpeg">

							                        	<div class = "details">
							                        		<div class = "sold">
							                        			<span class = "roundColor"></span>
							                        			<span class = "cash">MONEY:</span>
							                        			<span class = "cash">15550000 tzs</span>
							                        		</div>

							                        		<div class = "sold plannerButton">
							                        			<span class = "CheckDetails">Check Details</span>
							                        			<span class = "BemyDream">Be my Dream</span>
							                                </div>
							                        	</div>
						                        	</div>
			                                        
			                                        <div class = "dreamImg">
						                        		<img src = "img/planner/house/hous1/house.jpeg">

							                        	<div class = "details">
							                        		<div class = "sold">
							                        			<span class = "roundColor"></span>
							                        			<span class = "cash">MONEY:</span>
							                        			<span class = "cash">15550000 tzs</span>
							                        		</div>

							                        		<div class = "sold plannerButton">
							                        			<span class = "CheckDetails">Check Details</span>
							                        			<span class = "BemyDream">Be my Dream</span>
							                                </div>
							                        	</div>
						                        	</div>

			                                        <div class = "dreamImg">
						                        		<img src = "img/planner/house/hous1/house.jpeg">

							                        	<div class = "details">
							                        		<div class = "sold">
							                        			<span class = "roundColor"></span>
							                        			<span class = "cash">MONEY:</span>
							                        			<span class = "cash">15550000 tzs</span>
							                        		</div>

							                        		<div class = "sold plannerButton">
							                        			<span class = "CheckDetails">Check Details</span>
							                        			<span class = "BemyDream">Be my Dream</span>
							                                </div>
							                        	</div>
						                        	</div>

			                                        <div class = "dreamImg">
						                        		<img src = "img/planner/house/hous1/house.jpeg">

							                        	<div class = "details">
							                        		<div class = "sold">
							                        			<span class = "roundColor"></span>
							                        			<span class = "cash">MONEY:</span>
							                        			<span class = "cash">15550000 tzs</span>
							                        		</div>

							                        		<div class = "sold plannerButton">
							                        			<span class = "CheckDetails">Check Details</span>
							                        			<span class = "BemyDream">Be my Dream</span>
							                                </div>
							                        	</div>
						                        	</div>
					                        	</div>

		                                        <div class = "peginatoin">
				                        			<span>1</span>
				                        			<span>2</span>
				                        			<span>3</span>
				                        			<span>4</span>
				                        			<span>5</span>
				                        		</div>
					                        </div>
		                        	</div>
	                                

		                        	<div class = "plannerPanel planningWraper">
		                        	    <h4>FARMARS BUSINESS DREAMS</h4>
					                        <div class = "showpanel">
					                            <div class = "xoverflow">
						                        	<div class = "dreamImg">
						                        		<img src = "img/planner/house/hous1/house.jpeg">

							                        	<div class = "details">
							                        		<div class = "sold">
							                        			<span class = "roundColor"></span>
							                        			<span class = "cash">MONEY:</span>
							                        		 	<span class = "cash">15550000 tzs</span>
							                        		</div>

							                        		<div class = "sold plannerButton">
							                        			<span class = "CheckDetails" onclick = "openAbsolute('MyDream');">Check Details</span>
							                        			<span class = "BemyDream">Be my Dream</span>
							                                </div>
							                        	</div>
						                        	</div>

						                        	<div class = "dreamImg">
						                        		<img src = "img/planner/house/hous1/house.jpeg">

							                        	<div class = "details">
							                        		<div class = "sold">
							                        			<span class = "roundColor"></span>
							                        			<span class = "cash">MONEY:</span>
							                        			<span class = "cash">15550000 tzs</span>
							                        		</div>

							                        		<div class = "sold plannerButton">
							                        			<span class = "CheckDetails">Check Details</span>
							                        			<span class = "BemyDream">Be my Dream</span>
							                                </div>
							                        	</div>
						                        	</div>
			                                        
			                                        <div class = "dreamImg">
						                        		<img src = "img/planner/house/hous1/house.jpeg">

							                        	<div class = "details">
							                        		<div class = "sold">
							                        			<span class = "roundColor"></span>
							                        			<span class = "cash">MONEY:</span>
							                        			<span class = "cash">15550000 tzs</span>
							                        		</div>

							                        		<div class = "sold plannerButton">
							                        			<span class = "CheckDetails">Check Details</span>
							                        			<span class = "BemyDream">Be my Dream</span>
							                                </div>
							                        	</div>
						                        	</div>

			                                        <div class = "dreamImg">
						                        		<img src = "img/planner/house/hous1/house.jpeg">

							                        	<div class = "details">
							                        		<div class = "sold">
							                        			<span class = "roundColor"></span>
							                        			<span class = "cash">MONEY:</span>
							                        			<span class = "cash">15550000 tzs</span>
							                        		</div>

							                        		<div class = "sold plannerButton">
							                        			<span class = "CheckDetails">Check Details</span>
							                        			<span class = "BemyDream">Be my Dream</span>
							                                </div>
							                        	</div>
						                        	</div>

			                                        <div class = "dreamImg">
						                        		<img src = "img/planner/house/hous1/house.jpeg">

							                        	<div class = "details">
							                        		<div class = "sold">
							                        			<span class = "roundColor"></span>
							                        			<span class = "cash">MONEY:</span>
							                        			<span class = "cash">15550000 tzs</span>
							                        		</div>

							                        		<div class = "sold plannerButton">
							                        			<span class = "CheckDetails">Check Details</span>
							                        			<span class = "BemyDream">Be my Dream</span>
							                                </div>
							                        	</div>
						                        	</div>
					                        	</div>

		                                        <div class = "peginatoin">
				                        			<span>1</span>
				                        			<span>2</span>
				                        			<span>3</span>
				                        			<span>4</span>
				                        			<span>5</span>
				                        		</div>

					                        </div>
		                        	</div>

		                        	<div class = "plannerPanel planningWraper">
		                        	    <h4>CARS DREAMS</h4>
					                        <div class = "showpanel">
					                            <div class = "xoverflow">
						                        	<div class = "dreamImg">
						                        		<img src = "img/planner/house/hous1/house.jpeg">

							                        	<div class = "details">
							                        		<div class = "sold">
							                        			<span class = "roundColor"></span>
							                        			<span class = "cash">MONEY:</span>
							                        		 	<span class = "cash">15550000 tzs</span>
							                        		</div>

							                        		<div class = "sold plannerButton">
							                        			<span class = "CheckDetails" onclick = "openAbsolute('MyDream');">Check Details</span>
							                        			<span class = "BemyDream">Be my Dream</span>
							                                </div>
							                        	</div>
						                        	</div>

						                        	<div class = "dreamImg">
						                        		<img src = "img/planner/house/hous1/house.jpeg">

							                        	<div class = "details">
							                        		<div class = "sold">
							                        			<span class = "roundColor"></span>
							                        			<span class = "cash">MONEY:</span>
							                        			<span class = "cash">15550000 tzs</span>
							                        		</div>

							                        		<div class = "sold plannerButton">
							                        			<span class = "CheckDetails">Check Details</span>
							                        			<span class = "BemyDream">Be my Dream</span>
							                                </div>
							                        	</div>
						                        	</div>
			                                        
			                                        <div class = "dreamImg">
						                        		<img src = "img/planner/house/hous1/house.jpeg">

							                        	<div class = "details">
							                        		<div class = "sold">
							                        			<span class = "roundColor"></span>
							                        			<span class = "cash">MONEY:</span>
							                        			<span class = "cash">15550000 tzs</span>
							                        		</div>

							                        		<div class = "sold plannerButton">
							                        			<span class = "CheckDetails">Check Details</span>
							                        			<span class = "BemyDream">Be my Dream</span>
							                                </div>
							                        	</div>
						                        	</div>

			                                        <div class = "dreamImg">
						                        		<img src = "img/planner/house/hous1/house.jpeg">

							                        	<div class = "details">
							                        		<div class = "sold">
							                        			<span class = "roundColor"></span>
							                        			<span class = "cash">MONEY:</span>
							                        			<span class = "cash">15550000 tzs</span>
							                        		</div>

							                        		<div class = "sold plannerButton">
							                        			<span class = "CheckDetails">Check Details</span>
							                        			<span class = "BemyDream">Be my Dream</span>
							                                </div>
							                        	</div>
						                        	</div>

			                                        <div class = "dreamImg">
						                        		<img src = "img/planner/house/hous1/house.jpeg">

							                        	<div class = "details">
							                        		<div class = "sold">
							                        			<span class = "roundColor"></span>
							                        			<span class = "cash">MONEY:</span>
							                        			<span class = "cash">15550000 tzs</span>
							                        		</div>

							                        		<div class = "sold plannerButton">
							                        			<span class = "CheckDetails">Check Details</span>
							                        			<span class = "BemyDream">Be my Dream</span>
							                                </div>
							                        	</div>
						                        	</div>
					                        	</div>

		                                        <div class = "peginatoin">
				                        			<span>1</span>
				                        			<span>2</span>
				                        			<span>3</span>
				                        			<span>4</span>
				                        			<span>5</span>
				                        		</div>

					                        </div>
		                        	</div>
		                        </div>
				        	</div>
				        </div>
				    </div>
                </div>

                <div id = "examscompose">
                	<div class = "uplaodDocuments">
			    		<form action="upload.php" method="post" enctype="multipart/form-data">
						    <input type="file" name="fileToUpload" id="fileToUpload">
						   	<input type="submit"  value="Upload file" name="submit">
						</form>

						<div class = 'homeWorkPlace'>
						    <span onclick = "openAbsolute('HomeworkCompose');">Create Homework</span>
					    </div>
				    </div>

				    <div class = "exmsList">
				    	<div class = "examwrap" >
				    	   <span class = "arrfont"><i class = "fa fa-arrow-right"></i></span>
				    	   <span class = "title" onclick = "openAbsolute('exam_temprate');">Safari examinaation</span>
				    	   <span class = "name">quiz</span>
				    	   <span class = "date">2/2/2012</span>
				    	</div>

				    	<div class = "examwrap" >
				    	   <span class = "arrfont"><i class = "fa fa-arrow-right"></i></span>
				    	   <span class = "title" onclick = "openAbsolute('exam_temprate');">Safari examinaation</span>
				    	   <span class = "name">quiz</span>
				    	   <span class = "date">2/2/2012</span>
				    	</div>

				    	<div class = "examwrap" >
				    	   <span class = "arrfont"><i class = "fa fa-arrow-right"></i></span>
				    	   <span class = "title" onclick = "openAbsolute('exam_temprate');">Ubungo safi </span>
				    	   <span class = "name">examinaation</span>
				    	   <span class = "date">2/2/2012</span>
				    	</div>				   
				    </div>
                </div>

			    <div id = 'cv'>
			    	<div class = "schoolSummary">
			    		<form action="upload.php" method="post" enctype="multipart/form-data" class = "summaryForm">
						    <input type="file" name="fileToUpload" id="fileToUpload">
						   	<input type="submit"  value="Upload file" name="submit">
						</form>

						<div class = "uploadDiv panelSummaryupload">
	                        <div class = "createTender" onclick = "openAbsolute('summarysHare');">Create Summary</div>
	                    </div>
				    </div>

				    <div class = "summariesWraper">
				       <h3 class = "headerShareSummary">SHARES SUMMARIES</h3>

				        
				        <div class = "summaryPanel">
                            <div class = "sumaruHeader">
                             	<div class = "title">
                             	   <span class = "SumaryTopic">Topic:</span>
                             	   <span class = "SumaryTopicName">GENETICS</span>
                                </div>

                                <div class = "summaryNo">
                             	   <span class = "SumaryTopic">Summery No</span>
                             	   <span class = "SumaryNo">01</span>
                                </div>

                                <div class = "subtitle">
                             	   <span class = "SumaryTopic">Sub Topic</span>
                             	   <span class = "SumaryTopicName">irigation</span>
                                </div>
                            </div>

                            <div class = "summarybody">
                                <div class = "MainBodySummaary">
	                             	what is respitaration:<br/>
	                             	is prosecess of breath in and breath out by usin g mouth through ousophogus to the lungs<br>

                             	</div>
                             	
                             	<footer>
                             	 	<div class = "writenBy">
                             	 	    <a href = "#">
	                             	 		<span class = "writenTitle" >Written By</span>
	                             	 		<span class = "writenname" >Nehemia Mwansasu</span>
                             	 		</a>
                             	 	</div>
                             	</footer>
                            </div>

                            <div class = "iconGroup summaryIcon">
                            	<div class = "firstIcon"><span><i class = "fa fa-thumbs-o-up"></i></span><span>125</span></div>
                            	<div class = "sectIcon" onclick = "openAbsolute('shareTo');"><span ><i class = "fa fa-share-square"></i></span><span>45</span></div>
                            	<div class = "thirdIcon"><span><i class = "readed">readed</i></span><span>425</span></div>
                            	<div class = "forthIcon" onclick = "openAbsolute('printList');"><span><i class = "fa fa-print"></i></span><span>printList</span></div>
                            </div>
				        </div>

				        <div class = "summaryPanel">
                            <div class = "sumaruHeader">
                             	<div class = "title">
                             	   <span class = "SumaryTopic">Topic:</span>
                             	   <span class = "SumaryTopicName">GROWTH AND RESPIRATION</span>
                                </div>

                                <div class = "summaryNo">
                             	   <span class = "SumaryTopic">Summery No</span>
                             	   <span class = "SumaryNo">08</span>
                                </div>

                                <div class = "subtitle">
                             	   <span class = "SumaryTopic">Sub Topic</span>
                             	   <span class = "SumaryTopicName">irigation, movement,transporation, yaliyaree,Respiration</span>
                                </div>
                            </div>

                            <div class = "summarybody">
                                <div class = "MainBodySummaary">
	                             	<img src ='img/profiles/s2.jpg' >
                             	</div>
                             	
                             	<footer>
                             	 	<div class = "writenBy">
                             	 	    <a href = "#">
	                             	 		<span class = "writenTitle" >Written By</span>
	                             	 		<span class = "writenname" >Nehemia Mwansasu</span>
                             	 		</a>
                             	 	</div>
                             	</footer>
                            </div>

                            <div class = "iconGroup summaryIcon">
                            	<div class = "firstIcon"><span><i class = "fa fa-thumbs-o-up"></i></span><span>125</span></div>
                            	<div class = "sectIcon" onclick = "openAbsolute('shareTo');"><span ><i class = "fa fa-share-square"></i></span><span>45</span></div>
                            	<div class = "thirdIcon"><span><i class = "readed">readed</i></span><span>425</span></div>
                            	<div class = "forthIcon" onclick = "openAbsolute('printList');"><span><i class = "fa fa-print"></i></span><span>printList</span></div>
                            </div>
				        </div>

				        <div class = "summaryPanel">
                            <div class = "sumaruHeader">
                             	<div class = "title">
                             	   <span class = "SumaryTopic">Topic:</span>
                             	   <span class = "SumaryTopicName">GROWTH AND RESPIRATION</span>
                                </div>

                                <div class = "summaryNo">
                             	   <span class = "SumaryTopic">Summery No</span>
                             	   <span class = "SumaryNo">08</span>
                                </div>

                                <div class = "subtitle">
                             	   <span class = "SumaryTopic">Sub Topic</span>
                             	   <span class = "SumaryTopicName">irigation, movement,transporation, yaliyaree,Respiration</span>
                                </div>
                            </div>

                            <div class = "summarybody">
                                <div class = "MainBodySummaary">
	                             	<img src ='img/profiles/s2.jpg' >
                             	</div>
                             	
                             	<footer>
                             	 	<div class = "writenBy">
                             	 	    <a href = "#">
	                             	 		<span class = "writenTitle" >Written By</span>
	                             	 		<span class = "writenname" >Nehemia Mwansasu</span>
                             	 		</a>
                             	 	</div>
                             	</footer>
                            </div>

                            <div class = "iconGroup summaryIcon">
                            	<div class = "firstIcon"><span><i class = "fa fa-thumbs-o-up"></i></span><span>125</span></div>
                            	<div class = "sectIcon" onclick = "openAbsolute('shareTo');"><span ><i class = "fa fa-share-square"></i></span><span>45</span></div>
                            	<div class = "thirdIcon"><span><i class = "readed">readed</i></span><span>425</span></div>
                            	<div class = "forthIcon" onclick = "openAbsolute('printList');"><span><i class = "fa fa-print"></i></span><span>printList</span></div>

                            </div>
				        </div>

				        <div class = "summaryPanel">
                            <div class = "sumaruHeader">
                             	<div class = "title">
                             	   <span class = "SumaryTopic">Topic:</span>
                             	   <span class = "SumaryTopicName">GROWTH AND RESPIRATION</span>
                                </div>

                                <div class = "summaryNo">
                             	   <span class = "SumaryTopic">Summery No</span>
                             	   <span class = "SumaryNo">08</span>
                                </div>

                                <div class = "subtitle">
                             	   <span class = "SumaryTopic">Sub Topic</span>
                             	   <span class = "SumaryTopicName">irigation, movement,transporation, yaliyaree,Respiration</span>
                                </div>
                            </div>

                            <div class = "summarybody">
                                <div class = "MainBodySummaary">
	                             	what is respitaration:<br/>
	                             	is prosecess of breath in and breath out by usin g mouth through ousophogus to the lungs
                             	</div>
                             	
                             	<footer>
                             	 	<div class = "writenBy">
                             	 	    <a href = "#">
	                             	 		<span class = "writenTitle" >Written By</span>
	                             	 		<span class = "writenname" >Nehemia Mwansasu</span>
                             	 		</a>
                             	 	</div>
                             	</footer>
                            </div>

                            <div class = "iconGroup summaryIcon">
                            	<div class = "firstIcon"><span><i class = "fa fa-thumbs-o-up"></i></span><span>125</span></div>
                            	<div class = "sectIcon" onclick = "openAbsolute('shareTo');"><span ><i class = "fa fa-share-square"></i></span><span>45</span></div>
                            	<div class = "thirdIcon"><span><i class = "readed">readed</i></span><span>425</span></div>
                            	<div class = "forthIcon" onclick = "openAbsolute('printList');"><span><i class = "fa fa-print"></i></span><span>printList</span></div>
                            </div>
				        </div>
				    </div>

				    <div class = "divSharedSummary">
				        <h3 class = "headerShareSummary">MY SUMMARIES</h3>
				        <div class="AllpostestesSummaries">
			        		<div class = "divSenderDetels">
			        		    <a href = "#">
				        			<div class = 'profImg'>
									    <img src ='img/profiles/p4.jpg' >
							        </div>

							        <div class ='name_time'>
									    <span class = 'name'>Jessica Sanders</span>
									    <span class = 'time_ago'>5hrs Ago</span>
									</div>
								</a>
			        		</div>

				            <div class = "summaryPanel">
	                            <div class = "sumaruHeader">
	                             	<div class = "title">
	                             	   <span class = "SumaryTopic">Topic:</span>
	                             	   <span class = "SumaryTopicName">GROWTH AND RESPIRATION</span>
	                                </div>

	                                <div class = "summaryNo">
	                             	   <span class = "SumaryTopic">Summery No</span>
	                             	   <span class = "SumaryNo">08</span>
	                                </div>

	                                <div class = "subtitle">
	                             	   <span class = "SumaryTopic">Sub Topic</span>
	                             	   <span class = "SumaryTopicName">irigation, movement,transporation, yaliyaree,Respiration</span>
	                                </div>
	                            </div>

	                            <div class = "summarybody">
	                                <div class = "MainBodySummaary">
		                             	<img src ='img/profiles/s2.jpg' >
	                             	</div>
	                             	
	                             	<footer>
	                             	 	<div class = "writenBy">
	                             	 	    <a href = "#">
		                             	 		<span class = "writenTitle" >Written By</span>
		                             	 		<span class = "writenname" >Nehemia Mwansasu</span>
	                             	 		</a>
	                             	 	</div>
	                             	</footer>
	                            </div>

	                            <div class = "iconGroup summaryIcon">
	                            	<div class = "firstIcon"><span><i class = "fa fa-thumbs-o-up"></i></span><span>125</span></div>
	                            	<div class = "sectIcon" onclick = "openAbsolute('shareTo');"><span ><i class = "fa fa-share-square"></i></span><span>45</span></div>
	                            	<div class = "thirdIcon"><span><i class = "readed">readed</i></span><span>425</span></div>
	                            </div>
				            </div>
				        </div>


				        <div class="AllpostestesSummaries">
			        		<div class = "divSenderDetels">
			        		    <a href = "#">
				        			<div class = 'profImg'>
									    <img src ='img/profiles/p4.jpg' >
							        </div>

							        <div class ='name_time'>
									    <span class = 'name'>Jessica Sanders</span>
									    <span class = 'time_ago'>5hrs Ago</span>
									</div>
								</a>
			        		</div>

				            <div class = "summaryPanel">
                            <div class = "sumaruHeader">
                             	<div class = "title">
                             	   <span class = "SumaryTopic">Topic:</span>
                             	   <span class = "SumaryTopicName">NUTRITION</span>
                                </div>

                                <div class = "summaryNo">
                             	   <span class = "SumaryTopic">Summery No</span>
                             	   <span class = "SumaryNo">08</span>
                                </div>

                                <div class = "subtitle">
                             	   <span class = "SumaryTopic">Sub Topic</span>
                             	   <span class = "SumaryTopicName">Respiration</span>
                                </div>
                            </div>

                            <div class = "summarybody">
                                <div class = "MainBodySummaary">
	                            what is respitaration:<br/>
	                             	is prosecess of breath in and breath out by usin g mouth through ousophogus to the lungs<br>
	                             	is prosecess of breath in and breath out by usin g mouth through ousophogus to the lungs<br>
	                             	is prosecess of breath in and breath out by usin g mouth through ousophogus to the lungs<br>
                             	</div>
                             	
                             	<footer>
                             	 	<div class = "writenBy">
                             	 	    <a href = "#">
	                             	 		<span class = "writenTitle" >Written By</span>
	                             	 		<span class = "writenname" >Nehemia Mwansasu</span>
                             	 		</a>
                             	 	</div>
                             	</footer>
                            </div>

                            <div class = "iconGroup summaryIcon">
                            	<div class = "firstIcon"><span><i class = "fa fa-thumbs-o-up"></i></span><span>125</span></div>
                            	<div class = "sectIcon" onclick = "openAbsolute('shareTo');"><span ><i class = "fa fa-share-square"></i></span><span>45</span></div>
                            	<div class = "thirdIcon"><span><i class = "readed">readed</i></span><span>425</span></div>
                            </div>
				        </div>				        
				        </div>

				    </div>
				</div>

			    <div id = 'use_info'>
                    <!-- <div class = 'allAbout'>
						<h3>ABOUT </h3>
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
						<span class = 'Combi'>Subject Teach :</span><span class = 'answ'>PCB</span>   <span id = 'edit'>edit</span>
						</div>
				
						<div class = 'datebirth'>
						<span class = 'datebirth'>Birth date :</span><span class = 'answ'>26/6/2017</span>  <span id = 'edit'>edit</span>
						</div>
				
						<div class = 'email'>
							<span class = 'email'>Level :</span><span class = 'answ'>FORM 4</span>   <span id = 'edit'>edit</span>
						</div>
					</div>
                    
                    <div class = "historyInfo">
                       <h4>Historia</h4>
                    	<table >  
	                    	<tbody>          
	                    	    <tr>
									<th>Years</th>
									<th>Position</th>
									<th class = "where">Where</th>
									<th>Statics</th>
									<th>Verification</th>
								</tr>

								<tr>
						            <td>
						               <span>1994-1999</span>
						               <span class = "edit_mode">Edit</span>
						            </td>

	                    			<td>
	                    			    <span>Teaching</span>
	                                    <span class = "edit_mode">Edit</span>
	                    			</td>
	                    			
	                    			<td class = "where">
	                                    <span>
	                                        <a href="#">Green Accers Secondary schoory</a>
	                                    </span>
	                                    <span class = "edit_mode">Edit</span>
	                    			</td>
	                    			
	                    			<td>
	                    			    <i  class="icofont icofont-chart-line" aria-hidden="true"></i>
	                    			</td>
	                    			<td>sign</td>
								</tr>

								<tr>
						            <td>
						               <span>2009-2017</span>
						               <span class = "edit_mode">Edit</span>
						            </td>

	                    			<td>
	                    			    <span>Teaching</span>
	                                    <span class = "edit_mode">Edit</span>
	                    			</td>
	                    			
	                    			<td class = "where">
	                                    <span>
	                                        <a href="#">AGAPE SECONDARY SCHOOL</a>
	                                    </span>
	                                    <span class = "edit_mode">Edit</span>
	                    			</td>
	                    			
	                    			<td>
	                    			    <i  class="icofont icofont-chart-line" aria-hidden="true"></i>
	                    			</td>
	                    			<td>sign</td>
								</tr>
							</tbody>
                        </table>
                    </div>  --> 

                    ABOUT subject.... why we study <br/>
                    how it important and where you apply it in real life <br/>
                    and simple documentary about subject <br/>

                    and try to chambua all branchies of subject and where it applied in real life <br/>

                    so it easy for student to choose or diced why he take the subject <br/>
			    </div>

			    </div>
			
             <?php include 'include/infosection.php'; ?>
		</div>
		
		</div>
    </div>
    
</div>
<?php include 'include/skelotonBottom_login.php'; ?>
<script src="jscript/studentfunction/s.subject.js"></script>
<!-- <script src="jscript/tsliderlive.js"></script> -->


