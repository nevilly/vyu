

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
	///// Teacher Account Query

        $teacher_info = $db->query('SELECT * FROM teacher_acc,vy_users WHERE teacher_acc.user_id = vy_users.id AND user_id =?', array($user_id));
	   // if(!$user_info->count()){
	   // 	  echo 'fail';
	   // }else{	
	   //  	  // foreach($user->results() as $user){
	   //     //       echo escape($user-> suubject_name ).'<br/>';
	   //  	  //  }
	   //  }

		   @ $teacherId         =  $teacher_info->first()->user_id;
	       @ $teacher_schulname =  $teacher_info->first()->schoolname;
		   @ $teacher_rname     =  $teacher_info->first()->region;
	       @ $teacher_lev       =  $teacher_info->first()->levelOrStandard;
	       @ $teacher_fa        =  $teacher_info->first()->facultOrComb_taken;
	       @ $profesional_subj  =  $teacher_info->first()->prof_subject_1;
	       @ $schoolname        =  $teacher_info->first()->schoolname;
	       @ $level_identify    =  $teacher_info->first()->level_identify;
	      


	       if($level_identify == 'h'){
	       	  $basedSubj = $profesional_subj."ist Lecture";
	       }else{
                $basedSubj = $profesional_subj."ist Teacher";
	       }


	///// END: Subject Name
    ////////////////////////////////////////////////////////////////////////////////////

    ///////////////////////////////////////////////////////////////////////////////////
	///// Teacher Account Query


	///// END: Subject Name
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

			<!-- 	<script>
					image = new array('img/profiles/63.png',  'img/profiles/img1.jpg','img/profiles/life.jpg');
					img_number = 0;
					img_Length =  image.lenght - 1;

					function change_img(num){
                        img_number = img_number + num;

                        if(img_number > img_Length){
                             img_number = 0;
                        }

                        if(img_number < 0){
                           img_number  = img_Length;
                        }

                         document.slidShow.src = image[img_number]; 
                         return false;
					}
				</script>
  
                <div class = "trial" style = "border:1px solid red; width:100%;"
                >
					<img src =  'img/profiles/63.jpg' name = 'slidShow'>

					  <table>
				    	<tr>
				    		<td align="left"><div onclick = "return change_img(-1)">Prev</div></td>
				    		<td align="left"><div onclick = "return change_img(1)" >Next</div></td>
				    	</tr>
				    </table>
			    </div> -->
               <style>
               	  

               	    #parentsChember > .main{
               	    	width: 99%;
               	    	margin-top:-10%;
               	    	float:left;
               	    }

               	    #parentsChember > .main > .sliderContainer{
               	    	width: 88%;
               	    	height: 165px;
               	    }


               	    #parentsChember > .main > .nav{
               	    	width: 5%;
               	    }
               	    
                    .main{
                    	width:98%;
                    	float:left;
                    }

                    .sliderContainer{
                    	width:755px;
                    	height: 110px;
                    	margin:30px auto;
                        border:1px solid rgba(2,2,2,.2);
                        overflow: hidden;
                        float: left;
                    }

                    .sliderContainer .slider{
                    	width:6000px;
                    	height: 130px;
                    	transition: all 1s ease-in-out;
                    	/*border:1px solid yellow;*/
                    }

                    .sliderContainer .slider .box{
                    	height: 100%;
                    	float:left;
                    	width:150px;
                    	margin-left: 6px;
                    }
                    
                    .sliderContainer .slider .box{
                    	
                    }

                    .sliderContainer .slider .box .parentSlider{
                    	float:left;
                    	width:100%;
                    	height: 100%;
                    	border-radius:3px;
                    }

                    .sliderContainer .slider .box .parentSlider > img{
                    	float:left;
                    	width:100%;
                    	height: 100%;	
                    }

              
                    .main .nav{
                        float: left;
                        width: 5%;
                        line-height: 40px;
                        border: 1px solid grey;
                        cursor: pointer;
                        text-align: center;
                        background: rgba(36,33,32,.4);
                        color:#fff;
                        cursor: pointer;
                        font-size: 25px;
                        opacity: 0.5;
                        transition: all .5s ease-in-out;
                        margin-top: 7%;
                    }

                    .main .nav{
                    	opacity:1;
                    }

                    .main .nav:hover{
                    	background: rgba(10,10,10,.6);
                    	color:orangered;
                    }

                    .Next{    
                    	right: 0px;
                    }

                    .prevouis{
                    	left: 0px;
                    }
                     
                    /* >>>>>>>>>>>> >>>>> parent slider profile */
			       .slideContainer{
			           width:100%;
			           height: 100%;
			           border-radius: 3px;
			       }

			        .topcontainer{
			           width:100%;
			           height: 20%;
			           float:left;
			        }

			        .topcontainer > a{
			           border:1px solid green;
			           width:25%;
			           height:130%;
			           border-radius:50%;
			           text-decoration:none;
			           float:right;
			           position: relative;
			        }

			       
			        .topcontainer > a > img{
			           border:1px solid green;
			           width:100%;
			           height:100%;
			           border-radius:50%;
			       }


			       .another{
			           width:100%;
			           height: 80%;
			           float:left;
			       }

			       .ParentPicture{
			        width:80%;
			        height: 60%;
			        margin-top:-7%;
			        float:left;
			        margin-left:8%;

			       }

			        .ParentPicture img{
			           width:100%;
			           height: 100%;
			           border-radius:3px;
			       }
			      .profileDetails{
			        width:100%;
			           height:55%;
			           border:1px solid rgba(2,2,2,.2);
			           padding-top:2%;
			           float:left;
			           margin-top:-2%;
			      }
			      
			      .profileDetails > .info{
			          width:98%;
			          height: 90%;
			          padding-left: 2%;
			          float:left;
			          
			      }

			      .infod{
			        color:grey;
			        font-size: 10px;
			        width:25%;
			        float:left;
			        padding-top:1px;
			        font-weight: bold;
			      }

			      .info2{
			        font-size: 10px;
			        color:grey;
			        width:70%;
			        float:left;
			      }


			      .info2 > a{
			        text-decoration: none;
			        color:grey;
			         font-size: 10px;
			      }

			      .infoDiv{
			          width:100%;
			          float:left;
			          padding-left:2%;
			          padding-top:1%;
			          margin-top:1%;
			         
			      }

			       .last{
			          width:100%;
			          float:left;
			          background: #4dcadd;
			          color:white;
			          padding: 0px;
			          margin: 0px;
			          margin-top:3%;
			      }


			      .last > i{
			        width:100%;
			        font-size:18px;
			        text-align: center;

			      }

			      .last:hover > i{
			       border:1px solid #4dcadd;
			       color:#4dcadd;
			       background: white
			      }
			      /* >>>>>>>>>>>> >>>>> END parent slider profile */
               </style>
                
                
                <script>

                	var showed_box = 0;
                 	function fNext(){
                 	 	showed_box +=  -158;
                         
                      

                 	 	if(showed_box < -800){
                          showed_box = 0;
                 	 	}

                 	 	document.getElementById('sid').style.transform = "translateX("+ showed_box+"px)";
                 	}  

                    function fPrevious(){
                 	 	showed_box +=  158;

                 	 	if(showed_box > 0){
                          showed_box = -800;
                 	 	}

                 	 	document.getElementById('sid').style.transform = "translateX("+ showed_box+"px)";
                 	}  
                     
                </script>
				<span class = 'subject_title'><?php echo strtoupper(escape($subj)); ?> WORLD</span>
				<header id = 'header_teach'>
					<div id ='myWall'       class ='myWall'        onclick = "tp_hideshow('tmywall');"                       > My Wall         </div>
					<div id ='toCover'      class ='toCover'       onclick = "tp_hideshow('check_covered_topic_teacher');"  > Topic Cover     </div>
					<div id ='nav_timtabl'  class ='nav_timtabl'   onclick = "tp_hideshow('timetable');"                    > Time table      </div>
					<div id ='nav_pchember' class ='nav_pchember'  onclick = "tp_hideshow('parentsChember');"               > Parent Chember  </div>
					<div id ='nav_resul'    class ='nav_resul'     onclick = "tp_hideshow('Result');"                       > Result          </div>
					<div id ='nav_static'   class ='nav_static'    onclick = "tp_hideshow('Stictix');"                      > Statics         </div>
					<div id ='nav_hist'     class ='nav_hist'      onclick = "tp_hideshow('examscompose');"                 > Your Exams      </div>
                    <div id ='nav_quiz'     class ='nav_quiz'      onclick = "tp_hideshow('cv');"                           > CV Job Adv    </div>
                    <div id ='nav_inf'      class ='nav_inf'       onclick = "tp_hideshow('use_info');"                     > info       </div>
                </header>
             
            <div id="divuser_id" style="visibility:hidden">
    <?php echo $user_id;
    echo "<script>var user = {
    	    user_id   : '$user_id',
            username  : '$username',
            profile   : '$profile',
            frompage  : '$frompage',
            status    : 'b',
            subjectName : '$subj',
            subject_id  : '$subject_id',
            basedSubj   : '$basedSubj',
            schoolname  : '$schoolname', 
            region      : '$teacher_rname', 
            levelOrStandard : '$teacher_lev'
            };
            </script>" ?>

  <!--    $parent_acc = $db->query('SELECT * FROM  p_acc,vy_users WHERE  p_acc.user_id = vy_users.id AND schoolname =? AND region = ? AND levelOrStandard = ?', array($teacher_schulname,$teacher_rname,$teacher_lev)) -->
    
    	
</div>
            	<div id = 'tmywall' class = 'mywall'>
                   <div class="divPost">
	                   	<div class = " NormalIdeas" onclick = "dispVisibility('composqsn','whatsOnurmid');">Chats</div> 
	                    <div class = " composeQstnWall"  onclick="dispVisibility('whatsOnurmid','composqsn');">Compose Question</div>
                    </div>

				    <!-- <div id = "neno"></div>
				    <div id = "nen"></div> -->
				    
				    <div id ='whatsOnurmid'  class = 'whatsOnurmid'>
				    	<textarea  id = 'WallMsg' class = 'Onurmind'></textarea>
				    	<div id = 'send_vchart'>
			                <div id = 'post_v' class = 'post_post'>
			                	<input class = 'p' type='submit' id='submit_post' value = 'Post Update'
			                onclick = "chatVar('WallMsg',' <?php echo $user_id; ?>', 'a');" ></div>
                            
                             
			                <div id = 'upload_photo' class = 'psot_post post_photo'><i class="fa fa-camera" id= 'cover_camera_prof'></i></div>
                        </div>
				    </div>

				    
                    <div id = "composqsn" class = "composqsnWall">

                    	<div class = "upperInstr">
                    		<div id ='exam_section'>
			                    <label for='SECTION'>SECTION</label>
			                    <select id='SECTION_qstnwall'> 
			                        <option selected="selected">SECTION A</option>
			                        <option>SECTION A</option>
			                        <option>SECTION B</option>
			                        <option>SECTION C</option>
			                        <option>SECTION D</option>
			                        <option>SECTION E</option>
			                        <option> NO SECTION</option>
			                    </select>
		                     </div>
                    	 
                    	    <div class = "rightQstnDive">

		                    	<input type = "text" placeholder="date" id="dateqstnDonewal">
		                    	<input type = "text" placeholder="School Name" id = "qstnFromSchoolname">
		                    </div>


                    	 <div class = "topcAndSubtopcQstn">
                           <input style="text-align: center;" type = "text" class = "SUbjectName" placeholder="SUbject Name" value = "<?php echo strtoupper($subj); ?>" id="subjectnameQstnWall">
                    	   <input type = "text" style="text-align: center;" class = "TopcName" placeholder="Topc Name"  id ="topicnameQstnwal">
                    	   <input type = "text" style="text-align: center;" class = "SubtopcName" placeholder="Subtopc Name" id ="subtopicQstnwall">
                    	 </div>
                    	</div>



                    	<div class = "midleInstr">
                    		<div class = "qstnNo">
							    <span class = "No">
							    <label for='Qno'>Qn</label>
			                        <select id='Qn_selectNoQstnwall'> 
			                            <option selected="selected">0</option>
			                            <option>1</option>
			                            <option>2</option>
			                            <option>3</option>
			                            <option>4</option>
			                            <option>5</option>
			                            <option>6</option>
			                            <option>6</option>
			                            <option>7</option>
			                            <option>8</option>
			                            <option>9</option>
			                            <option>10</option>
			                            <option>11</option>
			                            <option>12</option>
			                            <option>13</option>
			                            <option>14</option>
			                            <option>15</option>
			                        </select>
			                    </span>
			                    <span class = "ColomNo">
			                    	 <label for='Qno'>Qn</label>
				                        <select id='Qn_selectNoColomQstnwall'> 
				                            <option selected="selected">0</option>
				                            <option>1.1</option>
				                            <option>1.2</option>
				                            <option>1.3</option>
				                            <option>1.4</option>
				                            <option>1.5</option>
				                            <option>1.6</option>
				                            <option>1.6</option>
				                            <option>1.7</option>
				                            <option>1.8</option>
				                            <option>1.9</option>
				                            <option>1.10</option>
				                            <option>1.11</option> 
				                        </select>
			                    </span>
							</div>

							<div class = "qstnBody chatbox">
							    <textarea id="mainqstnwall" onclick ="panelText_hidshow('panelTex_one');"></textarea>

							    <span id ="panelTex_one" class = "camraqstn"><i class = "fa fa-camera"></i></span>
							    <div class = "ReprImg">
          	   	  	  	 		    <div class = "qstnImg">
          	   	  	  	 		        <img src = "img/loginSlider/proce.jpg">
          	   	  	  	 		    </div>

          	   	  	  	 		    <div class = "qstnImg">
          	   	  	  	 		        <img src = "">
          	   	  	  	 		    </div>
	                            </div>
							</div>
                    	</div>

                        <div onclick="swicthVisibility('matchitem');" class = "usMatchItm">Use Match Items</div>
						
						<div id = "matchitem" class = "matchitem qstnMatach">
		        			<div class="matchs">
		        				<div class = "qstnNo">
		        		          <span class = "ColomNo">A</span>
		        		        </div>
		        		        <div class = "matchAns"><input onclick ="panelText_hidshow('panelTex_two');" type = "text" id = "match_a"></div>
		        		        <span class = "camraqstn" id = "panelTex_two"><i class = "fa fa-camera"></i></span>
		        		        <div class = "ReprImg">
          	   	  	  	 		    <div class = "qstnImg">
          	   	  	  	 		        <img src = "">
          	   	  	  	 		    </div>
	                            </div>
		        			</div>

		        			<div class="matchs">
		        				<div class = "qstnNo">
		        		          <span class = "ColomNo">B</span>
		        		        </div>
		        		        <div class = "matchAns"><input onclick ="panelText_hidshow('panelTex_three');"  type = "text" id =match_b></div>
		        		         <span class = "camraqstn" id = "panelTex_three"><i class = "fa fa-camera"></i></span>
		        		        <div class = "ReprImg">
          	   	  	  	 		    <div class = "qstnImg">
          	   	  	  	 		        <img src = "">
          	   	  	  	 		    </div>
	                            </div>
		        			</div>

		        			<div class="matchs">
		        				<div class = "qstnNo">
		        		          <span class = "ColomNo">C</span>
		        		        </div>
		        		        <div class = "matchAns"><input type = "text" onclick ="panelText_hidshow('panelTex_four');" id ='match_c'></div>
		        		        <span class = "camraqstn" id = "panelTex_four"><i class = "fa fa-camera"></i></span>
		        		        <div class = "ReprImg">
          	   	  	  	 		    <div class = "qstnImg">
          	   	  	  	 		        <img src = "img/loginSlider/proce.jpg">
          	   	  	  	 		    </div>

	                            </div>
		        			</div>
						</div>

						<div class = "lasInstr">
							<div class = "iconGroup QstnSenderIcone">

                            	<div class = "sectIcon">
                            	    <span class = "sendBotton" id = "sendQstn" >Send</span>
                                </div>

                            	<div class = "sectIcon" onclick = "openAbsolute('shareTo');">
                            	     <span class="usMatchItm">Ask Fellow Genius </span>
                            	</div>
                            	
                            </div>
						</div>
                    </div>
				  
					<div  id = 'subjectWallQstn' class = 'xoverflow'>
                       


                    </div>
				</div>




				<div class = 'Myfucults'>                	
                   
					<div id = 'check_covered_topic_teacher'>
                        <?php if ($sesion_id == $user_id) { ?>
                       
                            <div class = "topicDetails">
                                  <div onclick="openAbsolute('simpBukCompser');" class = 'SmplBookComp'>Simple Book Composer</div>
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

							                        $query_subjectopic = $db->query('SELECT * FROM vy_subjecttopics WHERE subject_id = ?',array($subject_id));
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
									                        	    $query_subtopic = $db->query('SELECT * FROM vy_subtpc WHERE subject_id = ? AND topic_id = ?',array($subject_id,$tpc_id));
									                                foreach ($query_subtopic->results() as $subtopic){
									                                	# code...
									                                	$subtipc_id     = $subtopic->topic_id;
									                                	$subtpctitle    = $subtopic->subtpc;
									                                    $subtpctitle_id = $subtopic->id;
									                                    @$subtpc_covered = $subtopic->subtpc_covered;

									                                  
									                                    $topictitle = $db->query('SELECT topic_title FROM vy_subjecttopics WHERE id = ?',
									                                  	                          array($subtipc_id));
				                                                           
				                                                        $tpc_title4subtpc =  $topictitle->first()->topic_title;
				                                                        $tpc_title4subtpc =  $topictitle->first()->topic_title;


				                                                        if($subtpc_covered == 1){
	                                                                        $tickCover = "<div  class   =  'coverd' ><i class = 'fa fa-check'></i></div>";
									                                    }else{
									                                    	$tickCover = "<div id ='coverd".$subtpctitle_id."' class   =  'coverd'  >

										                                    	            <input type    =  'checkbox' 
												            			                	       id      =  'coverSubtopic".$subtpctitle_id."' 
												            			                	       value   = '1'
												            			                	       onclick =  \" tick_coveredTopic('coverSubtopic".$subtpctitle_id."','".$subtpctitle_id."','coverd".$subtpctitle_id."')\" 
											            			                	    >

										            			                	    </div>";
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
                        <?php  }else{ echo "Creat Another Idea here <br> <b><u>idea</u></b> <br> 1. ask for notes may be"; } ?>
					</div>
                    
                    <!-- /*timetable teacher composer*/ -->
					<div id = 'timetable'>
                        
                        <div class = "topicDetails">
                              <div onclick="openAbsolute('timetableCompser');" class = 'SmplBookComp'>Timetable Composer</div>
                        </div>
                             
                        
                        <!-- <div class = timetableComposer>
                        	<h3><b>Create Subject Time table</b></h3>
							
							<div id = "addplace" class = "xoverflow">
              
				              <div class="timecontainer" id="timecontainer">

				                <div id="holddiv0" class = 'holder'>
				                   
				                    <div class="child1 showwlpanel"> 
					                    <div class = 'wklist'>
					                        <label for='qstty'></label>
					                        <select id='ttable_weak'> 
					                            <option selected="selected">Mondey</option>
					                            <option>Tuesday</option>
					                            <option>wednesday</option>
					                            <option>Thursday</option>
					                            <option>Friday</option>
					                            <option>Saturaday</option>
					                            <option>Sunday</option>
					                        </select>
					                    </div>

					                    <div class = 'tmtbable daterecord'>
			                               <h4>Date</h4>
			                               
			                                <div class = 'dat'>
			                                    <select id='tymtable_date'> 
			                                        <option selected="selected">00</option>
			                                        <option>01</option>
			                                        <option>02</option>
			                                        <option>03</option>
			                                        <option>04</option>
			                                        <option>05</option>
			                                    </select>
			                                </div>
			                         
			                              
			                               <div class = 'Semdotds datestrok'> / </div>
			                              
			                                <div class = 'Minx monthee'>
			                                    <select id='tymtabledate_month'> 
			                                        <option selected="selected">00</option>
			                                        <option>01</option>
			                                        <option>02</option>
			                                        <option>03</option>
			                                        <option>04</option>
			                                        <option>05</option>
			                                    </select>
			                                </div>
			                              
			                             <div class = 'Semdotds datestrok'> / </div>
			                             
			                              <div class = 'pm_am yearx'>
			                                   <select id='tymtable_year'> 
			                                        <option selected="selected">2018</option>
			                                        <option>2019</option>
			                                        <option>2020</option>
			                                        <option>2021</option>
			                                   </select>
			                              </div>
			                            </div>
		                            </div>
				                    
				                    <div class="child2 showtime">
				                    	<div class = 'timeFortimeTable'>
					                            <div class = 'tmtbable start_tmtable'>
					                              <h4>Start Period</h4>
					                                <div class = 'hrx'>
					                                   <select id='start_tymtsblr_hrs'> 
					                                        <option selected="selected">00</option>
					                                        <option>01</option>
					                                        <option>02</option>
					                                        <option>03</option>
					                                        <option>04</option>
					                                        <option>06</option>
					                                        <option>07</option>
					                                        <option>08</option>
					                                        <option>09</option>
					                                        <option>12</option>
					                                        <option>13</option>
					                                        <option>14</option>
					                                        <option>15</option>
					                                        <option>16</option>
					                                        <option>17</option>
					                                        <option>18</option>
					                                        <option>19</option>
					                                        <option>21</option>
					                                        <option>22</option>
					                                        <option>23</option>
					                                   </select>
					                                </div>
					                         
					                              
					                               <div class = 'Semdotds'> : </div>
					                              
					                              <div class = 'Minx'>
					                                   <select id='start_tymtsble_min'> 
					                                        <option selected="selected">00</option>
					                                        <option>01</option>
					                                        <option>02</option>
					                                        <option>03</option>
					                                        <option>04</option>
					                                        <option>06</option>
					                                        <option>07</option>
					                                        <option>08</option>
					                                        <option>09</option>
					                                        <option>12</option>
					                                        <option>13</option>
					                                        <option>14</option>
					                                        <option>15</option>
					                                        <option>16</option>
					                                        <option>17</option>
					                                        <option>18</option>
					                                        <option>19</option>
					                                        <option>21</option>
					                                        <option>22</option>
					                                        <option>23</option>
					                                        <option>24</option>
					                                        <option>25</option>
					                                        <option>26</option>
					                                        <option>27</option>
					                                        <option>28</option>
					                                        <option>29</option>
					                                        <option>30</option>
					                                        <option>31</option>
					                                        <option>32</option>
					                                        <option>33</option>
					                                        <option>34</option>
					                                        <option>35</option>
					                                        <option>36</option>
					                                        <option>37</option>
					                                        <option>38</option>
					                                        <option>39</option>
					                                        <option>40</option>
					                                        <option>41</option>
					                                        <option>42</option>
					                                        <option>43</option>
					                                        <option>44</option>
					                                        <option>45</option>
					                                        <option>46</option>
					                                        <option>47</option>
					                                        <option>48</option>
					                                        <option>49</option>
					                                        <option>51</option>
					                                        <option>52</option>
					                                        <option>53</option>
					                                        <option>54</option>
					                                        <option>55</option>
					                                        <option>56</option>
					                                        <option>57</option>
					                                        <option>58</option>
					                                        <option>59</option>
					                                        <option>60</option>
					                                   </select>
					                              </div>
					                              
					                             
					                              <div class = 'pm_am'>
					                                   <select id='start_tymtsble_amOrpm'> 
					                                        <option selected="selected">PM</option>
					                                        <option>AM</option>
					                                        
					                                   </select>
					                              </div>
					                            </div>
					                         
					                         <div class = 'tmtbable Endtime'>
					                              <h4>End Period</h4>
					                              <div class = 'hrx'>
					                                   <select id='end_tymtsblr_hrs'> 
					                                        <option selected="selected">00</option>
					                                        <option>01</option>
					                                        <option>02</option>
					                                        <option>03</option>
					                                        <option>04</option>
					                                        <option>06</option>
					                                        <option>07</option>
					                                        <option>08</option>
					                                        <option>09</option>
					                                        <option>12</option>
					                                        <option>13</option>
					                                        <option>14</option>
					                                        <option>15</option>
					                                        <option>16</option>
					                                        <option>17</option>
					                                        <option>18</option>
					                                        <option>19</option>
					                                        <option>21</option>
					                                        <option>22</option>
					                                        <option>23</option>
					                                   </select>
					                              </div>
					                         
					                              
					                               <div class = 'Semdotds'> : </div>
					                              
					                              <div class = 'Minx'>
					                                   <select id='start_tymtsble_min'> 
					                                        <option selected="selected">00</option>
					                                        <option>01</option>
					                                        <option>02</option>
					                                        <option>03</option>
					                                        <option>04</option>
					                                        <option>06</option>
					                                        <option>07</option>
					                                        <option>08</option>
					                                        <option>09</option>
					                                        <option>12</option>
					                                        <option>13</option>
					                                        <option>14</option>
					                                        <option>15</option>
					                                        <option>16</option>
					                                        <option>17</option>
					                                        <option>18</option>
					                                        <option>19</option>
					                                        <option>21</option>
					                                        <option>22</option>
					                                        <option>23</option>
					                                        <option>24</option>
					                                        <option>25</option>
					                                        <option>26</option>
					                                        <option>27</option>
					                                        <option>28</option>
					                                        <option>29</option>
					                                        <option>30</option>
					                                        <option>31</option>
					                                        <option>32</option>
					                                        <option>33</option>
					                                        <option>34</option>
					                                        <option>35</option>
					                                        <option>36</option>
					                                        <option>37</option>
					                                        <option>38</option>
					                                        <option>39</option>
					                                        <option>40</option>
					                                        <option>41</option>
					                                        <option>42</option>
					                                        <option>43</option>
					                                        <option>44</option>
					                                        <option>45</option>
					                                        <option>46</option>
					                                        <option>47</option>
					                                        <option>48</option>
					                                        <option>49</option>
					                                        <option>51</option>
					                                        <option>52</option>
					                                        <option>53</option>
					                                        <option>54</option>
					                                        <option>55</option>
					                                        <option>56</option>
					                                        <option>57</option>
					                                        <option>58</option>
					                                        <option>59</option>
					                                        <option>60</option>
					                                   </select>
					                              </div>
					                              
					                             
					                              <div class = 'pm_am'>
					                                    <select id='start_tymtsble_amOrpm'> 
					                                        <option selected="selected">PM</option>
					                                        <option>AM</option>
					                                        
					                                   </select>
					                              </div>
					                         
					                         </div>
					                         
					                        
					                        
					                    </div>
				                    </div>

				                    <div class="child3 showsubject">
				                    	<div class = ''>
				                            <div class = 'tmtbable choose_topics'>
				                                <h4>choose topic</h4>
				                                <div class = 'topics'>
				                                   <select id='tymtable_selectTopic'> 
				                                        <option disabled selected value> -- select topic to teach -- </option>
				                                        <option>fasihi</option>
				                                        <option>unyambulishaji</option>
				                                        <option>Aina za maneno</option>
				                                        <option>riwaya</option>
				                                        <option> tamthilia</option>
				                                   </select>
				                                </div>

				                                <div class = 'selectSub'>
				                                   	<h4>Select Subtopic</h4>
				                                   	<div class = 'subtopicttle'>
				                                   		<span class ='subt' id = "tymete_subtpc">subtopicname</span>
				                                   		<span class = "chooseSubtopic"><input type="checkbox" name="" id = 'tymete_subtpc_checkbox' ></span>
				                                   	</div>
				                                </div>
				                            </div>
					                    </div>
				                    </div>
				                </div>

				              </div>
                            </div>


                           <div  class = "bukCmpButtn addsubtopic"onclick="CreateTimeTableIncr('timecontainer')">ADD SUBTOPIC</div> 
						</div> -->

                        <div class = "todayTimeTableAlert teachertimetable">
                           <div class = "headerTmTable">
	                           <h3 class = "todayTm">Today TimeTable</h3>
	                           <h3 class = "TomorTm">Tommorow TimeTable</h3>
                           </div>

                           <?php 

                                if($teacherId > 0){
	                                 $daydat = date('Y-m-d');

                                    
                                    $tomorrow = date("Y-m-d", strtotime("+1 day"));
                                    $tomorrow;
	                              


	                                $tym_tables =  $db->query("SELECT * FROM vy_timtable,vy_users WHERE vy_timtable.user_id = vy_users.id AND date_period = ? AND user_id = ? AND school_name = ? AND region = ?", array( $daydat,$teacherId,$st_schulname,$st_rname));

	                                if($tym_tables->count()){
	                                
	                                  	foreach ($tym_tables->results() as $tym_table) {
	                                  		# code...
                                            $tymtable_Tuname = $tym_table->username;
                                            $start_period = $tym_table->start_period;
                                            $dayTopic   = $tym_table->dayTopic;
                                            $end_period   = $tym_table->end_period;
                                            $end_period   = $tym_table->end_period;
                                            $tprofile   = $tym_table->profile;
                                            $tprofile   = $tym_table->profile;
                                        
                                            
                                            $pf  = $db->prfl_pct($tprofile,$width=50,$height=50);
                                            

                                            if ($user_id = $sesion_id) {
                                            	# code...

                                                $instructionTm =  '<div class = "instructionTm">
						                           	  <div class = "notyfcation">
						                           	     <div class = "paidSchoolFees">
							                           	  	<span class = "Wrdfst">Your</span>
							                           	  	<span class = "Wrdsc">WELCOM</span>
							                           	  	<span class = "reviewboto" onclick = \'openAndvalue("timetable_temprate");\'>
													                Review Notes
							                           	  	</span>
						                                 </div>
					                                      
						                                 <div class = "paidSchoolFees unpaidShoolFees">
							                           	  	 <span class = "Wrdfst">Not</span>
							                           	  	 <span class = "Wrdsc">Alloweed</span>
							                           	  	 <span class = "Wrdfst">Reason:Shool Fees</span>
						                                 </div>
						                           	  </div>
						                            </div>

                                                     <div class = "emergencyChary">My Emergency Sir</div>
						                            ';
                                            }


                                             echo '<div class = "todayTmTableBody">

				                                <div class = "showsubject">
				                                    <span class = "subject">'.$subj.'</span>
				                                    
				                                    <span class = "teachProf">
				                                        <a href = "#">
					                                    	<div class = "profImg">
																'.$pf.'
															</div>

															<div class = "Tmdetails">
															    <span class = "titletm">By teacher</span>
															    <span class = "Nametm">'.$tymtable_Tuname.'</span>
															</div>
														</a>
				                                    </span>
				                                </div>

				                                <div class = "tmMidlewraper">
					                               	<span class = "theTime">'.$start_period.'</span>
					                               	<span class = "theTimeremain">
					                               	    <span>End:</span>
					                               	    <span>'.$end_period.'</span>
					                               	</span>
				                                </div>	
					                            '.$instructionTm .'
				                               
				                           </div>  ';
             
	                                  	}
	                                }else{
	                                  	echo "Free Day";
	                                }


                                 
	                                $tables_tomorows =  $db->query("SELECT * FROM vy_timtable,vy_users WHERE vy_timtable.user_id = vy_users.id AND date_period = ? AND user_id = ? AND school_name = ? AND region = ?", array( $tomorrow,$teacherId,$st_schulname,$st_rname));

	                                if($tables_tomorows->count()){
	                                
	                                  	foreach ($tables_tomorows->results() as $tables_tomorow) {
	                                  		# code...
                                            $tmr_tymtable_Tuname = $tables_tomorow->username;
                                            $tmr_start_period = $tables_tomorow->start_period;
                                            $tmr_dayTopic   = $tables_tomorow->dayTopic;
                                            $tmr_end_period   = $tables_tomorow->end_period;
                                            $tmr_tprofile   = $tables_tomorow->profile;
                                        
                                            
                                            $tmr_pf  = $db->prfl_pct($tmr_tprofile,$width=50,$height=50);
                                            

                                            


                                             echo    '<div class = "tymorow">
						                           	    <div class = "showsubject">
						                                    <span class = "subject">'.$subj.'</span>

						                                    <div class = "tmMidlewraper tymorotyme">
								                               	<span class = "theTime">'.$tmr_start_period.'</span>
								                               	
							                                </div>
						                                    
						                                    <span class = "teachProf">
						                                        <a href = "#">
							                                    	<div class = "profImg">
																		'.$tmr_pf.'
																	</div>

																	<div class = "Tmdetails">
																	    <span class = "titletm">By teacher</span>
																	    <span class = "Nametm">'.$tmr_tymtable_Tuname.'</span>
																	</div>
																</a>
						                                    </span>
						                                </div>
						                           </div>';
             
	                                  	}
	                                }else{
	                                  	echo "<div class = 'alert_box'><span>Tommorow : </span><span>Free DAy</span></div>";
	                                }




                                }else{
                                	echo '<div class = "NotymTableT diverroMsg"> 
                                	         Tell YOur Teacher To Create School TimeTable 
                                	         <span> TimeTsble Req</span> 
                                	         <span> 
                                	            <span>Send Invate Msg</span>
                                	            <span><input type ="text" placeholder ="Enter Your Teacher No"></span>

                                	         </span> 
                                	        </div>';
                                }
                              ?>



                        </div>

                        <div class = "otherTimeTable">
                        	<div class = "xoverflow">
		                        <div class = "todayTimeTableAlert">
		                           <div class = "headerTmTable">
			                           <h3 class = "todayTm">Other TIme Table subject</h3>
			                           <!-- <h3 class = "TomorTm">Today TimeTable</h3> -->
		                           </div>

		                           <div class = "todayTmTableBody">
		                               <div class = "showsubject">
		                                    <span class = "subject">CHEM</span>
		                                    
		                                    <span class = "teachProf">
		                                       <a href = "#">
			                                    	<div class = 'profImg'>
														<img src ='img/profiles/p4.jpg'>
													</div>

													<div class = "Tmdetails">
													    <span class = "titletm">By teacher</span>
													    <span class = "Nametm">Nitike Mwansasu</span>
													</div>
												</a>
		                                    </span>
		                                </div>

		                                <div class = "tmMidlewraper">
			                               	<span class = "theTime">12:30 am</span>
			                               	<span class = "theTimeremain">
			                               	    <span>Remain:</span>
			                               	    <span>12hrs</span>
			                               	</span>
		                               </div>	

		                           
			                           <div class = "instructionTm">
			                           	  <div class = "notyfcation">
			                           	     <div class = "paidSchoolFees">
				                           	  	<span class = "Wrdfst">YOUR</span>
				                           	  	<span class = "Wrdsc">WELCOME</span>
				                           	  	<span class = "reviewboto" onclick = "openAbsolute('timetable_temprate');">
										                Review Notes
				                           	  	</span>
			                                 </div>
		                                      
			                                 <div class = "paidSchoolFees unpaidShoolFees">
				                           	  	 <span class = "Wrdfst">Not</span>
				                           	  	 <span class = "Wrdsc">Alloweed</span>
				                           	  	 <span class = "Wrdfst">Reason:Shool Fees</span>
			                                 </div>
			                           	  </div>
			                           </div>

		                               <div class = "emergencyChary">My Emergency Sir/madam</div>
		                           </div>  

                                    <div class = "todayTmTableBody">
		                               <div class = "showsubject">
		                                    <span class = "subject">GEO</span>
		                                    
		                                    <span class = "teachProf">
		                                       <a href = "#">
			                                    	<div class = 'profImg'>
														<img src ='img/profiles/p4.jpg'>
													</div>

													<div class = "Tmdetails">
													    <span class = "titletm">By teacher</span>
													    <span class = "Nametm">Nitike Mwansasu</span>
													</div>
												</a>
		                                    </span>
		                                </div>

		                                <div class = "tmMidlewraper">
			                               	<span class = "theTime">10:40 am</span>
			                               	<span class = "theTimeremain">
			                               	    <span>Remain:</span>
			                               	    <span>40min</span>
			                               	</span>
		                               </div>	

		                           
			                           <div class = "instructionTm">
			                           	  <div class = "notyfcation">
			                           	     <div class = "paidSchoolFees">
				                           	  	<span class = "Wrdfst">YOUR NOT</span>
				                           	  	<span class = "Wrdsc feeprblm" >ALLOWED</span>
				                           	  	<span class = "reviewboto" onclick = "openAbsolute('timetable_temprate');">
										                Reason:School Fees
				                           	  	</span>
			                                 </div>
		                                      
			                            </div>
			                           </div>

		                               <div class = "emergencyChary">Remaind your Parents</div>
		                           </div>  
		                        </div>
                        	</div>
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
                            <a href = '#'>Nehemia Mwansasu</a><span id= 'id_static'><i  class="icofont icofont-chart-line" aria-hidden="true"></i> </span>
                         </div>
                      </div>
                        </div>
                    </div>
				</div>
				
				<div id = 'parentsChember'>
                   <div class = "main ">
                	<div class = 'nav prevouis' onclick  = "fPrevious()"><</div>
				    
				    <div class =  "sliderContainer">

				    	<div id = 'sid' class = "slider">

				    	
				    		<div class = "box">
				    			<div class = parentSlider>
					    			<div class="slideContainer">
								        <div class="topcontainer">
								            <a href="#" class="studentProfile"><img src =  'img/loginSlider/pa.png'></a>
								        </div>
								        <div class="another">
								            
								            <div class = "ParentPicture">
								                <img src = 'img/loginSlider/bad.jpg'>
								             </div>

								            <div class="profileDetails">
								                <div class="info">
								                    <div class="infoDiv">
								                        <span class="infod parentNames" title="">Parent:</span>
								                        <span class="info2 parentNames"><a href="#">Nehemia Daud Mwansasu</a></span>
								                    </div>
								                   
								                    <div class="infoDiv">
								                            <span class="infod classLevel">reader:</span>
								                            <span class="info2 parentNames">Chairman</span>
								                 
								                    </div>

								                    <div class="infoDiv">
								                            <span class="infod classLevel">Level:</span>
								                            <span class="info2 parentNames">Form 1 B</span>
								                 
								                    </div>

								                      <div class="last" onclick="switchVisbltyQ('ParentsWrap','parentChat','parebt')">
								                            <i class="fa fa-angle-double-down" ></i>
								                    </div>
								                 
								                </div>
								            </div>
								        </div>

	                                </div>
				    			</div>
				    		</div>

				    		<div class = "box">
				    			<div class = parentSlider>
					    			<div class="slideContainer">
								        <div class="topcontainer">
								            <a href="#" class="studentProfile"><img src = 'img/loginSlider/pa.png'></a>
								        </div>
								        <div class="another">
								            
								            <div class = "ParentPicture">
								                <img src = 'img/loginSlider/bad.jpg'>
								             </div>

								            <div class="profileDetails">
								                <div class="info">
								                    <div class="infoDiv">
								                        <span class="infod parentNames" title="">Parent:</span>
								                        <span class="info2 parentNames"><a href="#">Nehemia Daud Mwansasu</a></span>
								                    </div>
								                   
								                    <div class="infoDiv">
								                            <span class="infod classLevel">reader:</span>
								                            <span class="info2 parentNames">Chairman</span>
								                 
								                    </div>

								                    <div class="infoDiv">
								                            <span class="infod classLevel">Level:</span>
								                            <span class="info2 parentNames">Form 1 B</span>
								                 
								                    </div>

								                      <div class="last">
								                            
								                            <i class="fa fa-angle-double-down" ></i>
								                 
								                    </div>
								                 
								                </div>
								            </div>
								        </div>

	                                </div>
				    			</div>
				    		</div>

				    	    <div class = "box">
				    			<div class = parentSlider>
					    			<div class="slideContainer">
								        <div class="topcontainer">
								            <a href="#" class="studentProfile"><img src =  'img/loginSlider/pa.png'></a>
								        </div>
								        <div class="another">
								            
								            <div class = "ParentPicture">
								                <img src = 'img/loginSlider/bad.jpg'>
								             </div>

								            <div class="profileDetails">
								                <div class="info">
								                    <div class="infoDiv">
								                        <span class="infod parentNames" title="">Parent:</span>
								                        <span class="info2 parentNames"><a href="#">Nehemia Daud Mwansasu</a></span>
								                    </div>
								                   
								                    <div class="infoDiv">
								                            <span class="infod classLevel">reader:</span>
								                            <span class="info2 parentNames">Chairman</span>
								                 
								                    </div>

								                    <div class="infoDiv">
								                            <span class="infod classLevel">Level:</span>
								                            <span class="info2 parentNames">Form 1 B</span>
								                 
								                    </div>

								                      <div class="last">
								                            
								                            <i class="fa fa-angle-double-down" ></i>
								                 
								                    </div>
								                 
								                </div>
								            </div>
								        </div>

	                                </div>
				    			</div>
				    		</div>

				    	    <div class = "box">
				    			<div class = parentSlider>
					    			<div class="slideContainer">
								        <div class="topcontainer">
								            <a href="#" class="studentProfile"><img src =  'img/loginSlider/pa.png'></a>
								        </div>
								        <div class="another">
								            
								            <div class = "ParentPicture">
								                <img src = 'img/loginSlider/bad.jpg'>
								             </div>

								            <div class="profileDetails">
								                <div class="info">
								                    <div class="infoDiv">
								                        <span class="infod parentNames" title="">Parent:</span>
								                        <span class="info2 parentNames"><a href="#">Nehemia Daud Mwansasu</a></span>
								                    </div>
								                   
								                    <div class="infoDiv">
								                            <span class="infod classLevel">reader:</span>
								                            <span class="info2 parentNames">Chairman</span>
								                 
								                    </div>

								                    <div class="infoDiv">
								                            <span class="infod classLevel">Level:</span>
								                            <span class="info2 parentNames">Form 1 B</span>
								                 
								                    </div>

								                      <div class="last">
								                            
								                            <i class="fa fa-angle-double-down" ></i>
								                 
								                    </div>
								                 
								                </div>
								            </div>
								        </div>

	                                </div>
				    			</div>
				    		</div>
				    		
				    		<div class = "box">
				    			<div class = parentSlider>
					    			<div class="slideContainer">
								        <div class="topcontainer">
								            <a href="#" class="studentProfile"><img src =  'img/loginSlider/pa.png'></a>
								        </div>
								        <div class="another">
								            
								            <div class = "ParentPicture">
								                <img src = 'img/loginSlider/bad.jpg'>
								             </div>

								            <div class="profileDetails">
								                <div class="info">
								                    <div class="infoDiv">
								                        <span class="infod parentNames" title="">Parent:</span>
								                        <span class="info2 parentNames"><a href="#">Nehemia Daud Mwansasu</a></span>
								                    </div>
								                   
								                    <div class="infoDiv">
								                            <span class="infod classLevel">reader:</span>
								                            <span class="info2 parentNames">Chairman</span>
								                    </div>

								                    <div class="infoDiv">
							                            <span class="infod classLevel">Level:</span>
							                            <span class="info2 parentNames">Form 1 B</span>
								                    </div>

								                    <div class="last">
								                            
								                            <i class="fa fa-angle-double-down" ></i>
								                    </div>
								                 
								                </div>
								            </div>
								        </div>

	                                </div>
				    			</div>
				    		</div>
				    	</div>
				    </div>

				 
				    <div class = 'nav Next'     onclick  = "fNext()">></div>
			        </div>
					
					<div class ='ParentsWrap' id = 'ParentsWrap' >
						<div class = 'allParents'>
							<div class = 'allparentsChart'>
								<div class = 'chartParentProfile'>
									<div class = 'chatarent'>
										<textarea onclick ="swicthVisibility('send_botton');"placeholder='Discuss Here' id = 't_To_p_wall'></textarea>
								    </div>
									
									<div id = 'send_botton'>
										<div id = 'post'><input class = 'postToAllteacher' type='submit' id='submit_post' value = 'Post Update'></div>
										<div id = 'upload_photo'><i class="fa fa-camera" id= 'cover_camera_prof'></i></div>
                                    </div>
								</div>
								<div id = "teacherToParentHolder" class = 'xoverflow'>
									<div class = 'profileSender'>
										<div class = 'profDisng'>
											<div class = 'barName'>
												<a href = '#' class = 'Parimg'><img  src = 'img/profiles/p8.jpg'></a>
												<a href ='#' class = 'ParName'>
													<span class = 'nam'>Angelina</span>
													<span class = 'is'>'s,</span>
													<span class = 'title'>Parents</span>
												</a>
												
												<!-- i will acitivate later
												<a href ='#' class = 'Stname'>
													<span class = 'nam'>Angelina</span>
												</a>-->
												<a href ='#' class = 'stdProf'><img src = 'img/profiles/p8.jpg'></a>
											
											</div>
											
										</div>
										
									    <div class = 'msg'>Mbona mwanagu daftari lake xilielewi kunashida gan anafeli sana somo lako</div>
										<div class = 'icon_time'>
											<div class ='icons'>
												<span id='reply' onclick="swicthVisibility('textSender');" class = 'ico reply'><i class = 'fa fa-reply'></i></span>
												<span id='thumb_up' class = 'ico reply'><i class = 'fa fa-thumbs-up'></i></span>
												<span id='delete' class = 'ico reply'><i class= 'fa fa-remove'></i></span>
												<span id='spam' class = 'ico reply'>spam</span>
												<span id='delete' class = 'ico reply'><i class= 'fa fa-unlock-alt'></i></span>
					                        </div>
											<div class = 'sendTime'>2days</div>
										</div>
										
									
									</div>
									
									<div id ='textSender' class = textReply>
										<textarea></textarea>
										<div class = 'sendPlan'>
										  <i class ='fa fa-send'></i>
										</div>
									</div>
									
									<div class = 'profileReply'>
										<div class = 'profDisng'>
											<div class = 'barName'>
												<a href = '#' class = 'Parimg'><img  src = 'img/profiles/p8.jpg'></a>
												<a href ='#' class = 'ParName'>
													<span class = 'nam'>Nehemia Mwansasu</span>
													<span class = 'is'>'s,</span>
													<span class = 'title'>Parents</span>
												</a>
												
												<!-- i will acitivate later
												<a href ='#' class = 'Stname'>
													<span class = 'nam'>Angelina</span>
												</a>-->
												<a href ='#' class = 'stdProf'><img src = 'img/profiles/p8.jpg'></a>
											
											</div>
											
										</div>
										
									    <div class = 'msg'>Sijamuona darasan leo xku ya tam=no na amna tarrifa yoyote ya kuumwa itabid tuonane</div>
										<div class = 'icon_time'>
											<div class ='icons'>
												<span id='reply' onclick="swicthVisibility('textreply');" class = 'ico reply'><i class = 'fa fa-reply'></i></span>
												<span id='thumb_up' class = 'ico reply'><i class = 'fa fa-thumbs-up'></i></span>
												<span id='delete' class = 'ico reply'><i class= 'fa fa-remove'></i></span>
												<span id='spam' class = 'ico reply'>spam</span>
												<span id='delete' class = 'ico reply'><i class= 'fa fa-unlock-alt'></i></span>
					                        </div>
											<div class = 'sendTime'>25days</div>
										</div>
										
									
									</div>
									<div id ='textreply' class = 'textReply'><textarea></textarea>
									  <div class = 'sendPlan'><i class ='fa fa-send'></i></div>
									</div>
									
									<div class = 'profileReply'>
										<div class = 'profDisng'>
											<div class = 'barName'>
												<a href = '#' class = 'Parimg'><img  src = 'img/profiles/p8.jpg'></a>
												<a href ='#' class = 'ParName'>
													<span class = 'nam'>Nehemia Mwansasu</span>
													<span class = 'is'>'s,</span>
													<span class = 'title'>Parents</span>
												</a>
												
												<!-- i will acitivate later
												<a href ='#' class = 'Stname'>
													<span class = 'nam'>Angelina</span>
												</a>-->
												<a href ='#' class = 'stdProf'><img src = 'img/profiles/p8.jpg'></a>
											
											</div>
											
										</div>
										
									    <div class = 'msg'>Sijamuona darasan leo xku ya tam=no na amna tarrifa yoyote ya kuumwa itabid tuonane</div>
										<div class = 'icon_time'>
											<div class ='icons'>
												<span id='reply' onclick="swicthVisibility('textreply');" class = 'ico reply'><i class = 'fa fa-reply'></i></span>
												<span id='thumb_up' class = 'ico reply'><i class = 'fa fa-thumbs-up'></i></span>
												<span id='delete' class = 'ico reply'><i class= 'fa fa-remove'></i></span>
												<span id='spam' class = 'ico reply'>spam</span>
												<span id='delete' class = 'ico reply'><i class= 'fa fa-unlock-alt'></i></span>
					                        </div>
											<div class = 'sendTime'>25days</div>
										</div>
								    </div>
									<div id ='textreply' class = 'textReply'><textarea></textarea>
									  <div class = 'sendPlan'><i class ='fa fa-send'></i></div>
									</div>
									
									<div class = 'profileReply'>
										<div class = 'profDisng'>
											<div class = 'barName'>
												<a href = '#' class = 'Parimg'><img  src = 'img/profiles/p8.jpg'></a>
												<a href ='#' class = 'ParName'>
													<span class = 'nam'>Nehemia Mwansasu</span>
													<span class = 'is'>'s,</span>
													<span class = 'title'>Parents</span>
												</a>
												
												<!-- i will acitivate later
												<a href ='#' class = 'Stname'>
													<span class = 'nam'>Angelina</span>
												</a>-->
												<a href ='#' class = 'stdProf'><img src = 'img/profiles/p8.jpg'></a>
											
											</div>
											
										</div>
										
									    <div class = 'msg'>Sijamuona darasan leo xku ya tam=no na amna tarrifa yoyote ya kuumwa itabid tuonane</div>
										<div class = 'icon_time'>
											<div class ='icons'>
												<span id='reply' onclick="swicthVisibility('textreply');" class = 'ico reply'><i class = 'fa fa-reply'></i></span>
												<span id='thumb_up' class = 'ico reply'><i class = 'fa fa-thumbs-up'></i></span>
												<span id='delete' class = 'ico reply'><i class= 'fa fa-remove'></i></span>
												<span id='spam' class = 'ico reply'>spam</span>
												<span id='delete' class = 'ico reply'><i class= 'fa fa-unlock-alt'></i></span>
					                        </div>
											<div class = 'sendTime'>25days</div>
										</div>
										
									
									</div>
									<div id ='textreply' class = 'textReply'><textarea></textarea>
									  <div class = 'sendPlan'><i class ='fa fa-send'></i></div>
									</div>
									
									
									
									<div class = 'profileReply'>
										<div class = 'profDisng'>
											<div class = 'barName'>
												<a href = '#' class = 'Parimg'><img  src = 'img/profiles/p8.jpg'></a>
												<a href ='#' class = 'ParName'>
													<span class = 'nam'>Nehemia Mwansasu</span>
													<span class = 'is'>'s,</span>
													<span class = 'title'>Parents</span>
												</a>
												
												<!-- i will acitivate later
												<a href ='#' class = 'Stname'>
													<span class = 'nam'>Angelina</span>
												</a>-->
												<a href ='#' class = 'stdProf'><img src = 'img/profiles/p8.jpg'></a>
											
											</div>
											
										</div>
										
									    <div class = 'msg'>Sijamuona darasan leo xku ya tam=no na amna tarrifa yoyote ya kuumwa itabid tuonane</div>
										<div class = 'icon_time'>
											<div class ='icons'>
												<span id='reply' onclick="swicthVisibility('textreply');" class = 'ico reply'><i class = 'fa fa-reply'></i></span>
												<span id='thumb_up' class = 'ico reply'><i class = 'fa fa-thumbs-up'></i></span>
												<span id='delete' class = 'ico reply'><i class= 'fa fa-remove'></i></span>
												<span id='spam' class = 'ico reply'>spam</span>
												<span id='delete' class = 'ico reply'><i class= 'fa fa-unlock-alt'></i></span>
					                        </div>
											<div class = 'sendTime'>25days</div>
										</div>
					                </div>
									<div id ='textreply' class = 'textReply'><textarea></textarea>
									  <div class = 'sendPlan'><i class ='fa fa-send'></i></div>
									</div>
								</div>
								
							</div>
							
							<div class = 'homeWorkPlace'>
								<div class = 'homeWorkPlace'>
									<span onclick = "openAbsolute('HomeworkCompose');">Create Homework</span>
								</div>
									
							<!-- 	<div class = 'AllhomeWorkPlaceList'>
									<span >Create Homework</span>
								</div> -->
							</div>
						</div>	
					</div>

					<div class ='ParentsWrap' id = 'parentChat3' >
						<div class = "MsgContainer chatBox">
						  <?php $parentId =  "<div id = 'datagiven' ></div>"?>

				
						   
						     <div class = "back" onclick="switchVisbltyQ('ParentsWrap','parentChat','parebt')">Go Back </div>
						    <div class="chatContainer">
						        <div class = "chatheader divdivision" >
						            <div class="introHeader">
						                <span class="parentTitle">Parent</span><span class="pname">Nehemia Daud Mwansasu</span>
						                <div ><a href = "#"><span>Moses Mwakatobe :</span><span style="font-style:italic; ">Form 1 B ,</span></a></div>
						                <div ><a href = "#"><span>Moses Mwakatobe Mwansasu :</span><span style="font-style:italic; ">Form 1 B ,</span></a></div>
						                <div ><a href = "#"><span>Moses Mwakatobe :</span><span style="font-style:italic; ">Form 1 B ,</span></a></div>
						            </div>
						        </div>

						        <div class = "ContainerChat">
			

						            <div class="xoverflow">

						                <div class="chatholder">
						                    <div class="divcirlce">

						                        <div class = "cicle"></div>
						                    </div>
						                    
						                    <div class = "textChat">
						                    
						                        <p>
						                                hellow teacher
						                    
						                        </p>
						                                
						                                    
						                    </div>
						                    <div class = "clear"></div>
						                </div>

						                <div class="chatholder">
						                    
					                        <div class="divcirlce rightdiv" style ="float:right">
					                            <div class = "cicle"></div>
					                        </div>
					                        
					                        <div class = "textChat" style ="float:right">
					                            <p>
					                                    asdfsafafjkalfaf akjsfakljfafa fkaljfak fakj fka
					                            </p>         
					                        </div>
					                    
					                        <div class = "clear"></div>
						                </div>

						                <div class="chatholder">
					                        <div class="divcirlce">
					                            <div class = "cicle"></div>
					                        </div>
					                        
					                        <div class = "textChat">
					                            <p>
					                                hellow teacher
					                            </p>                
					                        </div>
					                        <div class = "clear"></div>
						                </div>
						           </div>
						        </div>
						        <style >
						        	.down_Document{
						                margin-left: 10%;
									    margin-left: 10%;
									    width: 25%;
									    height: 80px;
									    float: left;
									    padding-left: 2%;
									    position: relative;
									    top: 2px;
									    transition: 1s;
									    border-left: 1px solid rgba(2,2,2,.2);
									    display: none;

						        	}
						        	.down_Document > .thedoc{
						        	    border: 1px solid #eeefee;
									    border-radius: 50px 50px;
									    padding: 2% 7%;
									    margin-top: 1%;
									    width: 60%;
									    background: white;
									    transition: color 0.1s linear 0s; 
									    transition: 1s; 
						        	}
						        	
						        	.down_Document > .thedoc:hover{
									    margin-left: 4%;
									    cursor:pointer;
						        	}

						        	.down_Document > .shadowDiv{
						        	    margin-left:10%;
						        	}

						        	.down_Document > .potea{
							            position: relative;
									    top: -9px;
									    left: -14%;
									    border-radius: 50px;
									    float: left;
									    width: 10%;
									    height: 17%;
									    padding: 1% 1%;
									    background: rgba(2,2,2,.5);
									    cursor: pointer;
									    color: white;
									    text-align: center;
									}

									.down_Document > .potea:hover{
						        	    margin-left:none;
						        	}

						        	.doc_slideBox{
						        		margin-left: 10%;
									    width: 80%;
									    height: 80px;
									    float: left;
									    position: relative;
									    top: -3px;
									    transition: 1s;
									    display: none;
						        	}

						        	.doc_slideBox > div{
									    width: 90px;
									    height: 95%;
									    float: left;
									    border-radius: 3px 3px;
									    margin-left: 5px;
									    margin-top: 4px;
									    box-shadow: 0px 0px 2px rgba(115,115,115,.5);
						        	}

						        	.doc_slideBox > .openAndClose{
						        	    border: none;
									    width: 80%;
									    height: 10px;
									    float: left;
									    border-radius: 0px;
									    margin-left: 8%;
									    margin-top: -4%;
									    font-size: 10px;
									    text-align: center;
									    padding: 2px 2px;
									    border-radius: 2px 3px 0px 0px;
									    cursor: pointer;
									    box-shadow: none;

						        	}

						        	.doc_slideBox > .openAndClose > i{
						        	    font-size:18px;
						        	}

						        	.doc_slideBox >div > .doc_discr{
						        		/*border:1px solid grey;*/
						        		width: 100%;
						        		height: 100%;
						        		border-radius: 3px 3px;
						        		overflow: hidden;
						        		
						        	}

						        	.doc_slideBox >div > .doc_discr > span{
						        		padding: 2px 2px;
									    width: 80%;
									    border: ;
									    border-bottom: 1px solid rgba(2,2,2,.2);
									    text-align: center;
									    font-style: italic;
									    font-size: 10px;
									    float: left;
									    margin-left: 5%;

						        	}
						        </style>
						      
						        <div class="textEditor">
							        <div class = "down_Document" id = "textDownload">
							            <div  class ="potea" onclick = "closeDiv('textDownload');">X</div>

							            <div class="thedoc"  onclick ="docchoosen('doc_slideBox','textDownload')">Test.txt</div>
							            <div class="thedoc" onclick ="docchoosen('doc_slideBox','textDownload')">Assiment</div>
							            <div class="thedoc" onclick ="docchoosen('doc_slideBox','textDownload')">Photo</div>
							        </div>
                                     <style type="text/css">
                                     	#slideDown{
                                     		display:block;
                                     	}

                                     	#slideUp{
                                     		display:none
                                     	}
                                     </style>
							        <div id ="doc_slideBox" class ="doc_slideBox">
							         <div id = "slideDown" class = 'openAndClose'  onclick = "changeHeightslideDown('slideDown','slideUp','doc_slideBox')">  <i class = "fa fa-angle-down"></i></div>


							         <div id = "slideUp" class = 'openAndClose'   onclick = "changeHeightslideUp('slideUp','slideDown','doc_slideBox')"> <i class = "fa fa-angle-up"></i></div>


							        	<div  id = 'doc_title' class = 'doc_title'>

							        	    <div class="doc_discr">
							        	     	<span>Test Name</span>
							        	     	<span>Form 3 B</span>
							        	     	<span>created: 27/2/2008</span>
							        	    </div>
							            </div>

							            <div  id = 'doc_title' class = 'doc_title'>

							        	    <div class="doc_discr">
							        	     	<span>Test Name</span>
							        	     	<span>Form 3 B</span>
							        	     	<span>created: 27/2/2008</span>
							        	    </div>  
							        	</div>
                                          
							        </div>

				                    <div class="chatholder">
				                            <div class="divcirlce">
				                                <div class = "cicle" id = 'chehh' onclick= "plusdoc('textDownload','doc_slideBox');">+</div>
				                            </div>
				                            
				                            <div class = "textChat">
				                                <textarea  autofocus="none"   placeholder = "write something" name="" id="" cols="" rows=""></textarea>      
				                            </div>
				                            <div class = "clear"></div>
				                    </div>
						        </div>

						    </div>
						</div>
					</div>	
			

				</div>

				
			   <div id = 'Result' class='resultPlace'>
			    	<div class = 'uploadResult'>
				    	<div class = 'uploadManual'>
		                    <div class = 'examname'>
		                        <input type = 'text' placeholder = 'Test Name'>
		                    </div>

		                    <div class = 'chuseQtionType'>
		                        <label for='qstty'></label>
		                        <select id='qtnType'> 
		                            <option selected="selected">Examination</option>
		                            <option>Quiz</option>
		                            <option>Test</option>
		                            <option>Speed Test</option>
		                            <option>Assigment</option>
		                            <option>Homework</option>
		                        </select>
		                    </div>

                            <div class = "dateDone">
                           	  <div class = 'Endtime daterecord'>
                              <h4>Date</h4>
                              
                               <div class = 'hrx wiki'>
                                   <select id='hrz wikibox'> 
                                        <option selected="selected">Monday</option>
                                        <option>Tue</option>
                                        <option>Wesnd</option>
                                        <option>Thursd</option>
                                        <option>frie</option>
                                        <option>sat</option>
                                        <option>Sund</option>
                                   </select>
                              </div>
                               
                               
                              <div class = 'hrx datee'>
                                   <select id='hrz datebox'> 
                                        <option selected="selected">00</option>
                                        <option>01</option>
                                        <option>02</option>
                                        <option>03</option>
                                        <option>04</option>
                                        <option>05</option>
                                   </select>
                              </div>
                         
                              
                               <div class = 'Semdotds datestrok'> / </div>
                              
                              <div class = 'Minx monthee'>
                                   <select id='Minitc monthbox'> 
                                        <option selected="selected">00</option>
                                        <option>01</option>
                                        <option>02</option>
                                        <option>03</option>
                                        <option>04</option>
                                        <option>05</option>
                                   </select>
                              </div>
                              
                             <div class = 'Semdotds datestrok'> / </div>
                             
                              <div class = 'pm_am yearx'>
                                   <select id='qtnType yearbox'> 
                                        <option selected="selected">2017</option>
                                        <option>2018</option>
                                        <option>2019</option>
                                        <option>2020</option>
                                        <option>2021</option>
                                   </select>
                              </div></div>
                            </div>      
                        </div>


		                <div class = 'StudentList anybotton' onclick = 'HomekComp("browsdResult","ListStud");'> <h4>StudentList </h4></div>
		                <div class = 'anybotton uploadPdf' onclick = 'HomekComp("ListStud","browsdResult");'><h4>UPLOAD RESULT PDF</h4></div>

				        <div id = 'ListStud' class = 'ListStud'>
		                   	<div class = 'staticsSimpleshow'>
		                   	    <h4><span class = 'name'>NEHEMIA </span> STATISTICS </h4>
		                     	<div class = 'statitShow'>
		                   		    <div id="piechart"  style ="width:100%; height:100%;"></div>
		                   	    </div>
		                   </div>
                   	       
                   	       <div id = 'studLst'>

	                	        <div id = 'alllst'>
			                      	<h4>
			                      	   <span class = 'adf'>Student List</span>
			                      	    
			                      	   <span id = 'studListClassNae'>  
			                         	    <select id='selectsstand'> 
			                                  <option selected="selected">ALL</option>
			                                  <option>FORM1 A</option>
			                                  <option>FORM1 B</option>
			                                  <option>FORM1 C</option>
			                                  <option>FORM1 D</option>
			                                  <option>FORM1 E</option>
			                                  <option></option>
			                              </select>
			                           </span>
			                      	</h4>
	                           </div>
	                              

			                    <div id = 'List' class = 'List'>
				                   	<table>
					                   	<tr class = "tableList heda">
					                   	   <td class="checkf">check</td>	
					                   	   <td>Profile</td>	
					                   	   <td>student Name</td>
					                   	   <td class = 'T_opnion'>Opnion</td>	
					                   	   <td >Max</td>
					                   	   <td  class ='static'>Statistic</td>		
					                   	</tr>

					                   	<tr class = tableList>
				                            <td class = 'no'>
				                                <input type = 'checkbox' class = 'checkfeez' name= 'checkfordsplay' id='inputOne' onclick = 'cheikinput("inputOne","bableReason");' >
				                                <div id = "bableReason" class = "bableReason">
				                                    <div class ='triangle'></div>
				                                    <div class = 'textReason'>
				                                        <textarea placeholder="Ex:Paid school fees"></textarea>
				                                    </div>
				                                </div>
				                            </td>
				                          
				                            <td class = 'prfile'>
				                               <div class = 'profImg'>
												    <img src ='img/profiles/p4.jpg' >
											    </div>
									        </td>
				                          
				                            <td class = 'name nameL'><a href="#">fasdfaf</a></td>
				                           
				                            <td class = 'T_opnion'>
				                            	<div class = ''>
				                                   <select id='opn'> 
				                                        <option selected="selected">Very Good</option>
				                                        <option>Parfet</option>
				                                        <option>See Me</option>
				                                        <option>Good</option>
				                                        <option>Pull up ur socks</option>
				                                        <option>Keep it up</option>
				                                        <option>This Not You</option>
				                                   </select>
				                                </div>
				                               
				                               <div class = 'dateTosee'>
				                                	<input type="text" name="dateToSee" placeholder="date to see">
				                               </div>
				                            </td>

				                            <td class = 'max'>
				                                <input type = 'text' placeholder="Max">
				                                <span>%</span>
				                            </td>
				                           
				                            <td class = 'static'><a href= 'statics.php'>
				                                 <i  class="icofont icofont-chart-line" aria-hidden="true"></i>
				                            </td>

					                   	</tr>

						               <!-- <tr class = tableList>
					                           <td class = 'no'>
					                                <input type = 'checkbox' class = 'checkfeez' name= 'checkfordsplay' id='inputwo' onclick = 'cheikinput("inputwo","bableReason2");'>
					                                <div id = "bableReason2" class = "bableReason">
					                                    <div class ='triangle'></div>
					                                    <div class = 'textReason'>
					                                        <textarea placeholder="Ex:Paid school fees"></textarea>
					                                    </div>
					                                </div>
					                           </td>

					                           <td class = 'prfile'>
					                               <div class = 'profImg'>
														<img src ='img/profiles/p4.jpg' >
													</div>
										       </td>

					                           <td class = 'name'><a href="#">fasdfaf</a></td>

					                           <td class = 'max'><input type = 'text' placeholder="Enter Max"><span>%</span></td>

					                          <td class = 'static'><a href= 'statics.php'>
					                              <i  class="icofont icofont-chart-line" aria-hidden="true"></i>
					                           </td>
						                   	</tr>

						                   	<tr class = tableList>
					                           <td class = 'no'><input type = 'checkbox' class = 'checkfeez' name= 'checkfordsplay'></td>
					                           <td class = 'prfile'>
					                               <div class = 'profImg'>
													    <img src ='img/profiles/p4.jpg' >
												    </div>
										        </td>
					                           <td class = 'name'><a href="#">Nehemia Mwansasu</a></td>
					                           <td class = 'max'><input type = 'text' placeholder="Enter Max"><span>%</span></td>
					                           <td class = 'static'><a href= 'statics.php'>
					                              <i  class="icofont icofont-chart-line" aria-hidden="true"></i>
					                           </td>
						                   	</tr>



						                	<tr class = tableList>
						                        <td class = 'no'>
						                           <input type = 'checkbox' class = 'checkfeez' name= 'checkfordsplay'>
						                        </td>
						                        
						                        <td class = 'prfile'>
						                           <div class = 'profImg'>
																<img src ='img/profiles/p4.jpg' >
															</div>
											         </td>
						                        
						                        <td class = 'name'>
						                           <a href="#">Neema Mwansasu</a>
						                        </td>
						                        
						                        <td class = 'max'>
						                           <input type = 'text' placeholder="Enter Max"><span>%</span>
						                        </td>

						                        <td class = 'static'><a href= 'statics.php'>
						                           <i  class="icofont icofont-chart-line" aria-hidden="true"></i>
						                        </td>

						                	</tr>
					                     -->               
				                    </table>
			                    </div>

			                   <div class="uploadRes">Upload Result</div>
                           </div>
                        </div>
			    	
				    	<div id = 'browsdResult' class = 'browsdResult'>
				    		<form action="upload.php" method="post" enctype="multipart/form-data">
							    <input type="file" name="fileToUpload" id="fileToUpload">
							    <div class = 'imgfileDisplay'></div>
							    <textarea class = "teacherThought" placeholder="Your thought About result"></textarea>
							    <input type="submit"  value="Upload file" name="submit">
							</form>

				    	</div>
			        </div>

			        <div class = 'resultWrapper'>
			        	<div class = 'championShow'>
			        	   <div class = 'ExamNAmeanDexame'>
			        	   	    <h4>Safari Examination</h4><div class = 'donedate'>2/2/2018</div>
                                <div>
			        	   	        <i class="icofont icofont-paper"></i>
			        	   	        <span class = 'examprevw' onclick = "swicthVisibility('exam_temprate');">preview</span>
			        	   	        <span class = "emDwn" >Exam Download</span>
			        	   	    </div>
			        	   </div>

			        	    <div class = "winnersBar">
			        	       
			        	       <div class = 'divBr'>
			        	       	   <div class = 'barOne'>
			        	       	   	   <span class = 'classWin'>Form 4 A</span>
			        	       	   	   <!-- <div class = "posNo posTwo">2</div>  -->
			        	       	   </div>
			        	       	   <div class = 'barTwo'>
			        	       	   	   <span class = 'classWin'>Form 4 B</span>
			        	       	   	   <!-- <div class = "posNo posFirst">1</div>  -->
 			        	       	   </div>

			        	       	   <div class = 'barThree'>
			        	       	   	   <span class = 'classWin'>Form 4 C</span>
			        	       	   	<!--   <div class = "posNo postHREE">3</div>  -->
			        	       	   </div>
			        	       </div>
			        	       <header>Winner Class</header>
                            </div>

                            <div class = "winnersBar ">
				        	    <div class = 'divBr Top3Student'>
				        	       	   <div class = 'barOne '>
				        	       	   	   <span class = 'classWin'> 
				        	       	   	        <a href="#">
					        	       	   	        <div class = 'profImg'>						
					        	       	   	            <img title = 'Patent Profile' src = 'img/profiles/p8.jpg' id = parent_img/>
										            </div>
									            </a>
	                                        </span>
				        	       	   </div>
				        	       	   <div class = 'barTwo'>
				        	       	   	    <span class = 'classWin'>   
				        	       	   	         <a href="#">
					        	       	   	        <div class = 'profImg'>						
					        	       	   	            <img title = 'Patent Profile' src = 'img/profiles/p8.jpg' id = parent_img/>
										            </div>
									            </a>

	                                        </span>
				        	       	   </div>

				        	       	   <div class = 'barThree'>
				        	       	   	    <span class = 'classWin'>   
				        	       	   	        <a href="#">
					        	       	   	        <div class = 'profImg'>						
					        	       	   	            <img title = 'Patent Profile' src = 'img/profiles/p8.jpg' id = parent_img/>
										            </div>
									            </a>

	                                        </span>
				        	       	   </div>
				        	    </div>
				        	    <header>Super Student</header>
                            </div>

                            <div  class = "top10Student">
                            	<header>Top 10</header>
                            	<div class = "topTEnList">
	                            	<div class = "xoverflow">
		                            	<div class = 'studentLevel'>
		                            		<span class = "no">1.</span>
                                            <div class = 'profImg'>						
					        	       	   	    <img title = 'Patent Profile' src = 'img/profiles/p8.jpg' id = parent_img/>
										    </div>	

										    <div class = 'jina'>						
					        	       	   	    <a href="#">Nehemia Mwansasu</a>
										    </div>
                                           
                                            <div class = "Winningmedal">
                                             	<i>m</i>
                                             </div>
										   
										    <div class = 'max'>						
					        	       	   	    92%
										    </div>
									    </div>

									    <div class = 'studentLevel'>
		                            		<span class = "no">2.</span>
                                            <div class = 'profImg'>						
					        	       	   	    <img title = 'Patent Profile' src = 'img/profiles/p8.jpg' id = parent_img/>
										    </div>	

										    <div class = 'jina'>						
					        	       	   	    <a href="#">Johm Mkeleketwa</a>
										    </div>

										    <div class = 'max'>						
					        	       	   	    82%
										    </div>
									    </div>

									    <div class = 'studentLevel'>
		                            		<span class = "no">3.</span>
                                            <div class = 'profImg'>						
					        	       	   	    <img title = 'Patent Profile' src = 'img/profiles/p8.jpg' id = parent_img/>
										    </div>	

										    <div class = 'jina'>						
					        	       	   	    <a href="#">Nanji oska</a>
										    </div>

										    <div class = 'max'>						
					        	       	   	    72%
										    </div>
									    </div>

									    <div class = 'studentLevel'>
		                            		<span class = "no">4.</span>
                                            <div class = 'profImg'>						
					        	       	   	    <img title = 'Patent Profile' src = 'img/profiles/p8.jpg' id = parent_img/>
										    </div>	

										    <div class = 'jina'>						
					        	       	   	    <a href="#">Ney wakuta</a>
										    </div>

										    <div class = 'max'>						
					        	       	   	    62%
										    </div>
									    </div>
	                                </div>
                            	</div>
                            </div>

                        </div>
                        <div class = 'viewResults_Charts' onclick = "swicthVisibility('wallRsult');">View results and Charts</div>
			        
					    <div id = 'wallRsult'>
						    <h4><span class = 'classNamw'>FORM 4 A</span> RESULTS</h4>
						    	<table>
				                   	<tr class = "tableList heda">
				                   	   <td class="checkf">No</td>	
				                   	   <td>Profile</td>	
				                   	   <td>student Name</td>
				                   	    <td class = 'T_opnion'>Opnion</td>	
				                   	   <td>Max</td>
				                   	   <td  class ='static'>Statistic</td>		
				                   	</tr>

				                   	<tr class = tableList>
			                           <td class = 'no'>
			                                 1
			                            </td>
			                           <td class = 'prfile'>
			                               <div class = 'profImg'>
												<img src ='img/profiles/p4.jpg' >
											</div>
								        </td>
			                           <td class = 'name'><a href="#">fasdfaf</a></td>
			                           <td class = 'T_opnion'>
			                                <span class = 'viw_opt'>Very GOod</span>
			                                <span class = 'viw_opt_date'>2/2/2016</span>
			                           </td>

			                           <td class = 'max'>
			                             <span class = 'r_max'>64</span>
				                           <span class = 'Maxparc'>%</span>
			                            </td>
			                           <td class = 'static'><a href= 'statics.php'>
			                              <i  class="icofont icofont-chart-line" aria-hidden="true"></i>
			                           </td>
				                   	</tr>

				                   	<tr class = tableList>
			                           <td class = 'no'>
			                                2
			                           </td>

			                           <td class = 'prfile'>
			                               <div class = 'profImg'>
												<img src ='img/profiles/p4.jpg' >
											</div>
								       </td>

			                           <td class = 'name'><a href="#">fasdfaf</a></td>
			                            <td class = 'T_opnion'>
			                                <span class = 'viw_opt'>Parfect</span>
			                                <span class = 'viw_opt_date'></span>

			                            </td>
			                           <td class = 'max'>
			                                 <span class = 'r_max'>89</span>
				                           <span class = 'Maxparc'>%</span>
			                           </td>

			                          <td class = 'static'><a href= 'statics.php'>
			                              <i  class="icofont icofont-chart-line" aria-hidden="true"></i>
			                           </td>
				                   	</tr>

				                   	<tr class = tableList>
			                           <td class = 'no'>3</td>
			                           <td class = 'prfile'>
			                               <div class = 'profImg'>
											    <img src ='img/profiles/p4.jpg' >
										    </div>
								        </td>
			                           <td class = 'name'><a href="#">Nehemia Mwansasu</a></td>

			                           <td class = 'T_opnion'>
			                                <span class = 'viw_opt'>see me</span>
			                                <span class = 'viw_opt_date'>2/2/2016</span>

			                            </td>
			                           <td class = 'max'>
				                           <span class = 'r_max'>44</span>
				                           <span class = 'Maxparc'>%</span>
			                           </td>
			                           <td class = 'static'><a href= 'statics.php'>
			                              <i  class="icofont icofont-chart-line" aria-hidden="true"></i>
			                           </td>
				                   	</tr>

				                	   <tr class = tableList>
				                        <td class = 'no'>
				                           4
				                        </td>
				                        
				                        <td class = 'prfile'>
				                           <div class = 'profImg'>
														<img src ='img/profiles/p4.jpg' >
													</div>
									         </td>
				                        
				                        <td class = 'name'>
				                           <a href="#">Neema Mwansasu</a>
				                        </td>
				                        
				                        <td class = 'T_opnion'>
			                                <span class = 'viw_opt'>Very GOod</span>
			                                <span class = 'viw_opt_date'></span>

			                            </td>
				                        <td class = 'max'>
				                            <span class = 'r_max'>94</span>
				                           <span class = 'Maxparc'>%</span>

				                        </td>

				                        <td class = 'static'><a href= 'statics.php'>
				                           <i  class="icofont icofont-chart-line" aria-hidden="true"></i>
				                        </td>

				                	   </tr>
			                   	</table>
			                   	<div class = 'teacha_advc'>
			                   		<div class = "teacha_advc_header">
				                   		<div class = "blckA">
				                   		    <span>T</span>
				                   		    <span>e</span>
				                   		    <span>a</span> 
				                   		    <span>c</span>
				                   		    <span>h</span>
				                   		    <span>e</span>
				                   		    <span>r</span>
				                   		</div>

				                   		<div class = "blckB">
				                   		    <span> A</span>
				                   		    <span>d</span>
				                   		    <span>i</span>
				                   		    <span>v</span>
				                   		    <span> e</span>
				                   		</div>
			                   		</div>
			                   		<div class = "Advx">
			                   			Matokeo xo mazuri kabsa kwa sababu watu hawasomi haiwezekan wa kwanza ana 90 wa pili ana sabini kwan mm nafundisha mtu mmja darasana kummazenu watoto machoko kweli
			                   		</div>
			                   	</div>

			                   	<div class = "chart">
			                   	    
				    <div class = 'whatsOnurmid'>
				    	<textarea  class = 'Onurmind'></textarea>
				    	<div id = 'send_vchart'>
			                <div id = 'post_v' class = 'post_post'><input class = 'p' type='submit' id='submit_post' value = 'Post Update'></div>
			                <div id = 'upload_photo' class = 'psot_post post_photo'><i class="fa fa-camera" id= 'cover_camera_prof'></i></div>
                        </div>
				    </div>
					<div class = 'xoverflow'>
	                   
	                    <div id = 'posted' class = 'chartUserOne'>
							<div class = 'posted_profile'>
								<div class = 'profImg'>
									<img src ='img/profiles/p4.jpg' >
							   </div>
							</div>
							
							<div class ='name_time'>
							    <span class = 'name'>Jessica Sanders</span>
							    <span class = 'time_ago'>5hrs Ago</span>
							</div>
							
							<div class ='msg'>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
							</div>

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
							<div class ='name_time'>
							<span class = 'name'>Challo</span><span class = 'time_ago'>8hrs Ago</span></div>
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

<script src="jscript/tymtableSave.js"></script>
<!-- <script src="jscript/tsliderlive.js"></script> -->
<script src="jscript/teacherfunction.js"></script>
<script src="jscript/tsliderSingleParent.js"></script>






