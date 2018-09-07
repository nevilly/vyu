
    
<?php  
   include 'include/allprofilefunc.php';
	$url_subjId = preg_replace("#[^0-9]#",'',Input::get('subjectid'));
	$url_exmno  = preg_replace("#[^0-9]#",'',Input::get('exmno'));
	$url_exmID  = preg_replace("#[^0-9]#",'',Input::get('examid'));

	
    $subjectName =  get($db,'vy_subjects','id',$url_subjId,'suubject_name');  // get subjectName;
    $level       =  get($db,'vy_subjects','id',$url_subjId,'level');          // get level;
   
?>



<?php include 'include/skeletonTop.php';?>
        <div id = 'Pagewraper'>
  <?php include 'include/sidenavigation.php'; ?>
  
    <div id = 'side_two' >
		<!--/***********header after login*********/-->
		<?php include 'include/topheader.php'; ?>
		
		<div id='mainWraper'>
			<div class = 'section'>

				<?php 
                    
				    $examId_selected = '';

	                $qry =  "SELECT planName,planAvgMax FROM
	                    vy_dreamhussle WHERE 
	                    user_id = ? AND id = ? AND subj_id = ? "
	                ;
	                
	                $sql = $db->query($qry,array($user_id,$url_exmID,$url_subjId));

	                if ($sql->count()) {
                      
                        $planName =  $sql->first()->planName;    // get plan name;
                        $planAv   =  $sql->first()->planAvgMax;  // get Avarege max;

                       
                        # New Query check if user id and subj id exist ;
                       
                        $vyDrm  =  "SELECT * FROM vy_dreamworkexam
                            WHERE
                               user_id = ? AND dream_id = ? AND paperNo = ?
                            "
                        ;

		                $sql2 = $db->query($vyDrm,array($user_id,$url_exmID,$url_exmno));
                    
                        if (!$sql2->count()) {

					        $insert = $db->insert('vy_dreamworkexam',
					        	array(
			        	          'user_id'  => $user_id, 
			        	          'dream_id' => $url_exmID, 
			        	          'paperNo'  => $url_exmno )
					        	)
					        ;
				           
				           // return the last id

				            if($insert){

                                #Select Random Exams Id 
				                $rnd =  "SELECT id FROM vy_exmcompoz WHERE subj_id = ? ORDER BY RAND() LIMIT 1";
                                $sql_rnd = $db->query($rnd,array($url_subjId));

				                if($sql_rnd->count()){
				               	    echo 'selected Id => '. $examId_selected =  $sql_rnd->first()->id;

                                    
				               	    $sql_pdate = "UPDATE vy_dreamworkexam SET examChoosenId = ? WHERE dream_id = ? AND 	paperNo = ?";
				               	   
				               	    $porifleupdate = $db->query($sql_pdate,array($examId_selected,$url_exmID,$url_exmno));

                               
					               	$StartButton = "<div class = 'startBoton' id = 'startVyu_Exam'  onclick = \"HomekComp('ExamFontPage','Qustionpage');\">
				    						            Start Exam
				    					            </div>";
				                }else{
				                   	echo "Randon sql Error: random selecting system failed work";
				                }

				            }
	                    }else{
	                    	// $StartButton = "<div class = 'startBoton' id = 'startVyu_Exa' > Already Do </div>";

	                    		$StartButton = "<div class = 'startBoton' id = 'startVyu_Exam'  onclick = \"HomekComp('ExamFontPage','Qustionpage');\">
				    						            Start Exam
				    					            </div>";
	                    }
                    }else{
	                	echo "SELECT sql Error: line 31 id not Found";
	                }

	                echo "  <script>var user = {
					    	    user         : '$user_id',
					    	    user_id      : '$user_id',
					            username     : '$username',
					            subject_id   : '$url_subjId',
					            url_examID   : '$url_exmID',
					            url_exmNo    : '$url_exmno',
					            exmId_slctd  : '$examId_selected'
								
				                };
				            </script>
				        "
				    ;
                 ?>

            
			    <!-- examTime -->
			    <div class = "headerOnPlanner">
			    	<div class ="headerOne" onclick = 'HomekComp("panelTeachersExam","panelExam");'>SITE EXAMS</div>
			    	<div class ="headerTwo" onclick = 'HomekComp("panelExam","panelTeachersExam");'>TEACHERS OFFER EXAMS</div>
			    </div>

                <!-- //examTime panel compose by site -->
                	
			 
			    <div id = "panelExam" class = " siteExam">
			    	<div class ="examsWraper">
			    		<div class = "exambody">
			    			<div class = "examPage">
			    				<div id = "ExamFontPage" class = "ExamFontPage">
			    					<div class = "MaxWish">
                                          I wish To Get ABOVE:<br/>
                                          <b ><?php echo escape($planAv); ?></b>
			    						  <b class = 'b1'>%</b>
			    					</div>
			    					<div class = "Dreamtitles">
			    						<select id='dreamtTitle'> 
				                            <option selected="selected"><?php echo escape($planName);?></option>
				                           	                              
				                        </select>
			    					</div>


			    					<div class = "examHrs">
			    						 2hours Exam
			    					</div>

			    					<?php echo $StartButton; ?>

			    					<div class = "Instruction">
			    						<div class = "Instructhead"> Instruction</div>
			    						<div class = "Instructbody">
			    							 <span class = "No">1</span>
			    							 <span class = "instraa">Do Not leave the page before you finish exam ,you will counted as fail</span>
			    						</div>
			    					</div>

			    					<div class = "Instructfoter">
			    					    <div class = "created">
			    							<span class = "creatTitle">Created By</span>
			    							<span class = "name">Songoka.com</span>
		    							</div>
			    					</div>
			    				</div>
			    				
			    				<!-- Question Start -->
			    				<div id = "Qustionpage" class = "Qustionpage">
			    					<div class = "qstnBody">
			    						<div class = "topInfo">
			    							<div class = "head">SUBJECT : <?php   echo  escape(strtoupper($subjectName));  ?></div> 
			    							<div class = "dreamName">ON PLAN :<?php  echo escape($planName);    ?></div>         
			    							<div class = "classleve">FORM <?php echo escape($level); ?></div>     
			    							<div class = "head">2HRS</div>        
			    						</div>
                                        
                                        <?php 
			    						    $examId_selectd  = 1;  // have to change this code
			    						    $section_A = '';

			    						    $qstn_qry =  'SELECT * FROM vy_qustion WHERE qstnCompz_id = ?';

			    						    $qr =  $db->query($qstn_qry,array($examId_selectd));
                                            
			    						    if($qr->count()){
                                                echo "found";
                                                foreach ($qr->results() as $r) {
                                                     $c = 0;

                                                    
                                                	# code...
                                                    $section   = 	 $r->section;         // question Section;
                                                    $qN        = 	 $r->qNo;             // question No;
                                                    $qColum    = 	 $r->qColum;          // question Colom;
                                                    $tpc_tle   = 	 $r->topic_title;     // question Colom;
                                                    $sub_tpc   = 	 $r->sub_tpc;         // question subtopic;
                                                    $qst       = 	 $r->qstn;            // question ;
                                                    $match_a   = 	 $r->match_a;         // question match_a;
                                                    $match_b   = 	 $r->match_b;         // question match_b;
                                                    $match_c   = 	 $r->match_c;         // question match_c;
                                                    $tch_ans   = 	 $r->tch_ans;         // question answer;

                                                    if($section == "SECTION A" && $match_a !== '' && $match_a !== '' && $match_a !== ''){

                                                    	if($match_a !== '' && $match_a !== '' && $match_a !== '' ){

                                                    	    $match = ' <div class = "matchitemes">
                                                            <!--  firstMact item -->
	                                          	   	  	  	<div class = "matchOne">
	                                          	   	  	  	    <div class = "inputA">
	                                          	   	  	  	        <input type = "radio" >
	                                          	   	  	  	    </div>
	                                          	   	  	  	 	
	                                          	   	  	  	 	<div class = "answer">
	                                          	   	  	  	 		<div>'.$match_a.'</div>
	                                          	   	  	  	 		<div class = "ReprImg">
	                                          	   	  	  	 		    <div class = "qstnImg">
	                                          	   	  	  	 		        <img src = "">
	                                          	   	  	  	 		    </div>
	                                          	   	  	  	 		</div>
	                                          	   	  	  	 	</div>
	                                          	   	  	  	</div>

	                                          	   	  	  	<div class = "matchOne">
	                                          	   	  	  	    <div class = "inputA"><input type = "radio"></div>
	                                          	   	  	  	 	<div class = "answer">
	                                          	   	  	  	 		<div>'.$match_b.'</div>
	                                          	   	  	  	 		<div class = "ReprImg">
	                                          	   	  	  	 		    <div class = "qstnImg">
	                                          	   	  	  	 		        <img src = "">
	                                          	   	  	  	 		    </div>
	                                          	   	  	  	 		</div>
	                                          	   	  	  	 	</div>
	                                          	   	  	  	</div>

	                                          	   	  	  	<div class = "matchOne">
	                                          	   	  	  	    <div class = "inputA"><input type = "radio"></div>
	                                          	   	  	  	 	<div class = "answer">
	                                          	   	  	  	 		<div>'.$match_c.'</div>
	                                          	   	  	  	 		<div class = "ReprImg">
	                                          	   	  	  	 		    <div class = "qstnImg">
	                                          	   	  	  	 		        <img src = "">
	                                          	   	  	  	 		    </div>
	                                          	   	  	  	 		</div>
	                                          	   	  	  	 	</div>
	                                          	   	  	  	</div>
                                          	   	  	   
                                          	   	  	        </div>';
                                                        }else{
                                                    		$match = '';
                                                    	}
                                                         $c = 1;
                                                        $qstn = '<div class = "qNo">
				                                          	   	        <span class = "No">'.$c.'</span>
				                                          	   	        <span class = "kpengele">'.escape($qColum).'</span>
                                          	   	                    </div>
                                          	   	               '
                                          	   	            ;
                                          	   	           $c++;

                                          	   	        $body = '<div class = "qstnSectBody">
                                          	   	              '.$qstn.'
                                          	   	         <div class = "theQstnwraper">
                                          	   	  	    <div class = "theQstnbody">
	                                                        <div class = "qstntime">'.$qst.'	                                                        </div>
                                          	   	  	    	
                                          	   	  	    	<div class = "qstnBodyImg">
	                                  	   	  	  	 		    <div class = "qstnImg">
	                                  	   	  	  	 		        <img src = "">
	                                  	   	  	  	 		    </div>
	                                          	   	  	  	</div>
                                          	   	  	    </div>

                                          	   	  	   '.$match.'

                                          	   	  	    <div class = "correct">
                                          	   	  	        <span>X</span>
                                          	   	  	    </div>
                                          	   	    </div>
                                          	   	    </div>';

                                                      

                                                    $section_A .= $body;

                                                    }
                                                }

			    						    } else{
			    						    	echo "Not found";
			    						    }

			    						?>

			    					

                                         
                                        <div class = "startQstn">
                                            <!-- /*section A true/false*/ -->
                                            <section class="onqstn">
                                          	   <h2>SECTION A</h2>
                                          	   <?php echo $section_A; ?>
                                          	   
                                            </section>
                                           
                                           <!-- /*section B true/false*/ -->
                                            <section class="onqstn">
                                          	   <h2>SECTION B</h2>
                                          	  
                                          	   <div class = "qstnSectBody">
                                          	   	    <div class = "qNo">
                                          	   	        <span class = "No">2,</span>
                                          	   	        <span class = "kpengele">2.1</span>
                                          	   	    </div>

                                          	   	    <div class = "theQstnwraper">
                                          	   	  	    <div class = " theqstnAndImg">
                                          	   	  	    	<div class = "qstntime">jkasjldjfkajfskajsfafsafsadfdsa</div>
                                          	   	  	    	<div class = "ReprImg">
	                                  	   	  	  	 		    <div class = "qstnImg">
	                                  	   	  	  	 		        <img src = "img/loginSlider/proce.jpg">
	                                  	   	  	  	 		    </div>
	                                          	   	  	  	 </div>
                                          	   	  	    </div>

                                          	   	  	    <div class = "truOrfalse">

                                                           <div class = "trutime">
                                                           	   <span class = "truInput" ><input type="radio" name=""></span>
                                                           	   <span class = "truAns">True</span>
                                                           </div>

                                                           <div class = "falsetime">
                                                           	   <span class = "truInput"><input type="radio" name=""></span>
                                                           	   <span class = "falseAns">False</span>
                                                           </div>
                                          	   	  	    </div>

                                          	   	  	    <div class = "correct">
                                          	   	  	        <span>X</span>
                                          	   	  	    </div>
                                          	   	    </div>
                                          	   </div>

                                          	   <div class = "qstnSectBody">
                                          	   	    <div class = "qNo">
                                          	   	        <span class = "No">2,</span>
                                          	   	        <span class = "kpengele">2.1</span>
                                          	   	    </div>

                                          	   	    <div class = "theQstnwraper">
                                          	   	  	    <div class = " theqstnAndImg">
                                          	   	  	    	<div class = "qstntime">jkasjldjfkajfskajsfafsafsadfdsa</div>
                                          	   	  	    	<div class = "ReprImg">
	                                  	   	  	  	 		    <div class = "qstnImg">
	                                  	   	  	  	 		        <img src = "">
	                                  	   	  	  	 		    </div>
	                                          	   	  	  	 </div>
                                          	   	  	    </div>

                                          	   	  	    <div class = "truOrfalse">

                                                           <div class = "trutime">
                                                           	   <span class = "truInput" ><input type="radio" name=""></span>
                                                           	   <span class = "truAns">True</span>
                                                           </div>

                                                           <div class = "falsetime">
                                                           	   <span class = "truInput"><input type="radio" name=""></span>
                                                           	   <span class = "falseAns">False</span>
                                                           </div>
                                          	   	  	    </div>

                                          	   	  	    <div class = "correct">
                                          	   	  	        <span>X</span>
                                          	   	  	    </div>
                                          	   	    </div>
                                          	   </div>
                                            </section> 


                                           <!-- /*section C true/false*/ -->
                                            <section class="onqstn">
                                          	   <h2> SECTION C </h2>
                                          	   <div class = "listAlistB_header">
                                          	   	    <div class = "listA">LIST A</div>
                                          	   	    <div class = "listB">LIST B</div>
                                          	   </div>
                                          	  
                                          	   <div class = "qstnSectBody">
                                          	   	    <div class = "qNo">
                                          	   	        <span class = "No">3,</span>
                                          	   	        <span class = "kpengele">3.1</span>
                                          	   	    </div>

                                          	   	    <div class = "theQstnwraper relateItemsQstn">
                                          	   	  	    <div class = " theqstnAndImg">
                                          	   	  	    	<div class = "qstntime">Classification</div>
                                          	   	  	    	<div class = "ReprImg">
	                                  	   	  	  	 		    <div class = "qstnImg">
	                                  	   	  	  	 		        <img src = "img/loginSlider/proce.jpg">
	                                  	   	  	  	 		    </div>
	                                          	   	  	  	 </div>

                                          	   	  	    </div >

                                          	   	  	    <div class = "relatedItemB">

                                                         	<div class = "matchOne">
	                                          	   	  	  	    <div class = "inputA">A:</div>
	                                          	   	  	  	 	<div class = "answer">
	                                          	   	  	  	 		<div>plant to breath</div>
	                                          	   	  	  	 		<div class = "ReprImg">
	                                          	   	  	  	 		    <div class = "qstnImg">
	                                          	   	  	  	 		        <img src = "img/loginSlider/proce.jpg">
	                                          	   	  	  	 		    </div>
	                                          	   	  	  	 		</div>
	                                          	   	  	  	 	</div>
	                                          	   	  	  	</div>
                                          	   	  	    </div>
                                                        
                                                        <div class = "answerRelatedItem">
                                                            <input type = "text" placeholder="B"  name = "">
                                                        </div>

                                          	   	  	    <div class = "correct">
                                          	   	  	        <span>X</span>
                                          	   	  	    </div>
                                          	   	    </div>
                                          	   </div>

                                          	   <div class = "qstnSectBody">
                                          	   	    <div class = "qNo">
                                          	   	        <span class = "No">3,</span>
                                          	   	        <span class = "kpengele">3.2</span>
                                          	   	    </div>

                                          	   	    <div class = "theQstnwraper relateItemsQstn">
                                          	   	  	    <div class = " theqstnAndImg">
                                          	   	  	    	<div class = "qstntime">what is photosysness</div>
                                          	   	  	    	<div class = "ReprImg">
	                                  	   	  	  	 		    <div class = "qstnImg">
	                                  	   	  	  	 		        <img src = "">
	                                  	   	  	  	 		    </div>
	                                          	   	  	  	 </div>

                                          	   	  	    </div >

                                          	   	  	    <div class = "relatedItemB">

                                                         	<div class = "matchOne">
	                                          	   	  	  	    <div class = "inputA">A:</div>
	                                          	   	  	  	 	<div class = "answer">
	                                          	   	  	  	 		<div>is a process of grouping</div>
	                                          	   	  	  	 		<div class = "ReprImg">
	                                          	   	  	  	 		    <div class = "qstnImg">
	                                          	   	  	  	 		        <img src = "">
	                                          	   	  	  	 		    </div>
	                                          	   	  	  	 		</div>
	                                          	   	  	  	 	</div>
	                                          	   	  	  	</div>
                                          	   	  	    </div>
                                                        
                                                        <div class = "answerRelatedItem">
                                                            <input type = "text" placeholder="A"  name = "">
                                                        </div>

                                          	   	  	    <div class = "correct">
                                          	   	  	        <span>X</span>
                                          	   	  	    </div>
                                          	   	    </div>
                                          	   </div>
                                            </section>
                                        </div>
			    					</div>
			    				</div>
			    			</div>
			    		</div>
			    	</div>
			    </div>
                
                <!-- TEACHERS OFFER EXAMS -->
			    <div id = "panelTeachersExam" class = " gD composePlanAnDrea">
			       <!--  -->
			       <div class = "asideDivExam">
			       	    <div class = "examPage">
			    				<div id = "ExamFontPag" class = "ExamFontPage">
			    					<div class = "Dreamtitles">
			    						<select id='dreamtTitle'> 
				                            <option selected="selected">REVOLUTION HAS BEGAN</option>
				                            <option>FOR ALL HATERS</option>
				                            <option>PAINFALL SUCCESS</option>
				                            <option>BORN FOR SUCCESS</option>
				                            <option>NEVER GIV UP TIME FOR REVENGE</option>		                              
				                        </select>
			    					</div>

			    					<div class = "examHrs">
			    						 2hours Exam
			    					</div>

			    					<div class = "startBoton" onclick = 'HomekComp("ExamFontPag","Qustionpag");'>
			    						 Start
			    					</div>

			    					<div class = "Instruction">
			    						<div class = "Instructhead"> Instruction</div>
			    						<div class = "Instructbody">
			    							 <span class = "No">1</span>
			    							 <span class = "instraa">Do Not leave the page before you finish exam ,you will counted as fail</span>
			    						</div>
			    					</div>

			    					<div class = "Instructfoter">
			    					    <div class = "created">
			    							<span class = "creatTitle">Created By</span>
			    							<span class = "name">Songoka.com</span>
		    							</div>
			    					</div>
			    				</div>
			    				
			    				<div id = "Qustionpag" class = "Qustionpage">
			    					<div class = "qstnBody">
			    						<div class = "topInfo">
			    							<div class = "head">SUBJECT NAME EXAM</div> 
			    							<div class = "dreamName">DREAM NAME</div>         
			    							<div class = "classleve">FORM FOUR</div>     
			    							<div class = "head">2HRS</div>        
			    						</div>
                                         
                                        <div class = "startQstn">
                                            <!-- /*section A true/false*/ -->
                                            <section class="onqstn">
                                          	   <h2>SECTION A</h2>
                                          	   
                                          	   <div class = "qstnSectBody">
                                          	   	    <div class = "qNo">
                                          	   	        <span class = "No">1,</span>
                                          	   	        <span class = "kpengele">1.1</span>
                                          	   	    </div>

                                          	   	    <div class = "theQstnwraper">
                                          	   	  	    <div class = "theQstnbody">
	                                                        <div class = "qstntime">jWhat is meaning of Classification?
	                                                        </div>
                                          	   	  	    	
                                          	   	  	    	<div class = "qstnBodyImg">
	                                  	   	  	  	 		    <div class = "qstnImg">
	                                  	   	  	  	 		        <img src = "">
	                                  	   	  	  	 		    </div>
	                                          	   	  	  	</div>
                                          	   	  	    </div>

                                          	   	  	    <div class = "matchitemes">
                                                            <!--  firstMact item -->
	                                          	   	  	  	<div class = "matchOne">
	                                          	   	  	  	    <div class = "inputA"><input type = "radio"></div>
	                                          	   	  	  	 	<div class = "answer">
	                                          	   	  	  	 		<div>Miosis is process of diffusing</div>
	                                          	   	  	  	 		<div class = "ReprImg">
	                                          	   	  	  	 		    <div class = "qstnImg">
	                                          	   	  	  	 		        <img src = "">
	                                          	   	  	  	 		    </div>
	                                          	   	  	  	 		</div>
	                                          	   	  	  	 	</div>
	                                          	   	  	  	</div>

	                                          	   	  	  	<div class = "matchOne">
	                                          	   	  	  	    <div class = "inputA"><input type = "radio"></div>
	                                          	   	  	  	 	<div class = "answer">
	                                          	   	  	  	 		<div>Cprruption is form of mioss</div>
	                                          	   	  	  	 		<div class = "ReprImg">
	                                          	   	  	  	 		    <div class = "qstnImg">
	                                          	   	  	  	 		        <img src = "">
	                                          	   	  	  	 		    </div>
	                                          	   	  	  	 		</div>
	                                          	   	  	  	 	</div>
	                                          	   	  	  	</div>

	                                          	   	  	  	<div class = "matchOne">
	                                          	   	  	  	    <div class = "inputA"><input type = "radio"></div>
	                                          	   	  	  	 	<div class = "answer">
	                                          	   	  	  	 		<div>Is prosess of grouping</div>
	                                          	   	  	  	 		<div class = "ReprImg">
	                                          	   	  	  	 		    <div class = "qstnImg">
	                                          	   	  	  	 		        <img src = "">
	                                          	   	  	  	 		    </div>
	                                          	   	  	  	 		</div>
	                                          	   	  	  	 	</div>
	                                          	   	  	  	</div>
                                          	   	  	   
                                          	   	  	    </div>

                                          	   	  	    <div class = "correct">
                                          	   	  	        <span>X</span>
                                          	   	  	    </div>
                                          	   	    </div>
                                          	   </div>

                                          	   <div class = "qstnSectBody">
                                          	   	    <div class = "qNo">
                                          	   	        <span class = "No">1,</span>
                                          	   	        <span class = "kpengele">1.2</span>
                                          	   	    </div>

                                          	   	    <div class = "theQstnwraper">
                                          	   	  	    <div class = "theQstnbody">
	                                                        <div class = "qstntime">jkasjlWhat is real meaning of miosis and choos the anser beolowdjfkajfskajsfafsafsadfdsa
	                                                        </div>
                                          	   	  	    	<div class = "qstnBodyImg">
	                                  	   	  	  	 		    <div class = "qstnImg">
	                                  	   	  	  	 		        <img src = "img/loginSlider/proce.jpg">
	                                  	   	  	  	 		    </div>
	                                          	   	  	  	</div>
                                          	   	  	    </div>

                                          	   	  	    <div class = "matchitemes">
                                                            <!--  firstMact item -->
	                                          	   	  	  	<div class = "matchOne">
	                                          	   	  	  	    <div class = "inputA"><input type = "radio"></div>
	                                          	   	  	  	 	<div class = "answer">
	                                          	   	  	  	 		<div>Miosis is process of diffusing</div>
	                                          	   	  	  	 		<div class = "ReprImg">
	                                          	   	  	  	 		    <div class = "qstnImg">
	                                          	   	  	  	 		        <img src = "">
	                                          	   	  	  	 		    </div>
	                                          	   	  	  	 		</div>
	                                          	   	  	  	 	</div>
	                                          	   	  	  	</div>

	                                          	   	  	  	<div class = "matchOne">
	                                          	   	  	  	    <div class = "inputA"><input type = "radio"></div>
	                                          	   	  	  	 	<div class = "answer">
	                                          	   	  	  	 		<div>Cprruption is form of mioss</div>
	                                          	   	  	  	 		<div class = "ReprImg">
	                                          	   	  	  	 		    <div class = "qstnImg">
	                                          	   	  	  	 		        <img src = "">
	                                          	   	  	  	 		    </div>
	                                          	   	  	  	 		</div>
	                                          	   	  	  	 	</div>
	                                          	   	  	  	</div>

	                                          	   	  	  	<div class = "matchOne">
	                                          	   	  	  	    <div class = "inputA"><input type = "radio"></div>
	                                          	   	  	  	 	<div class = "answer">
	                                          	   	  	  	 		<div>Cprruption is form of mioss</div>
	                                          	   	  	  	 		<div class = "ReprImg">
	                                          	   	  	  	 		    <div class = "qstnImg">
	                                          	   	  	  	 		        <img src = "">
	                                          	   	  	  	 		    </div>
	                                          	   	  	  	 		</div>
	                                          	   	  	  	 	</div>
	                                          	   	  	  	</div>
                                          	   	  	    </div>

                                          	   	  	    <div class = "correct">
                                          	   	  	        <span>X</span>
                                          	   	  	    </div>
                                          	   	    </div>
                                          	   </div>


                                          	   <div class = "qstnSectBody">
                                          	   	    <div class = "qNo">
                                          	   	        <span class = "No">1,</span>
                                          	   	        <span class = "kpengele">1.3</span>
                                          	   	    </div>

                                          	   	    <div class = "theQstnwraper">
                                          	   	  	     <div class = "theQstnbody">
	                                                        <div class = "qstntime">what is photosyness
	                                                        </div>
                                          	   	  	    	<div class = "qstnBodyImg">
	                                  	   	  	  	 		    <div class = "qstnImg">
	                                  	   	  	  	 		        <img src = "img/loginSlider/proce.jpg">
	                                  	   	  	  	 		    </div>
	                                          	   	  	  	</div>
                                          	   	  	    </div>

                                          	   	  	    <div class = "matchitemes">
                                                            <!--  firstMact item -->

	                                          	   	  	  	<div class = "matchOne">
	                                          	   	  	  	    <div class = "inputA"><input type = "radio"></div>
	                                          	   	  	  	 	<div class = "answer">
	                                          	   	  	  	 		<div>Cprruption is form of mioss</div>
	                                          	   	  	  	 		<div class = "ReprImg">
	                                          	   	  	  	 		    <div class = "qstnImg">
	                                          	   	  	  	 		        <img src = "img/loginSlider/proce.jpg">
	                                          	   	  	  	 		    </div>
	                                          	   	  	  	 		</div>
	                                          	   	  	  	 	</div>
	                                          	   	  	  	</div>

	                                          	   	  	  	<div class = "matchOne">
	                                          	   	  	  	    <div class = "inputA"><input type = "radio"></div>
	                                          	   	  	  	 	<div class = "answer">
	                                          	   	  	  	 		<div>Cprruption is form of mioss</div>
	                                          	   	  	  	 		<div class = "ReprImg">
	                                          	   	  	  	 		    <div class = "qstnImg">
	                                          	   	  	  	 		        <img src = "img/loginSlider/proce.jpg">
	                                          	   	  	  	 		    </div>
	                                          	   	  	  	 		</div>
	                                          	   	  	  	 	</div>
	                                          	   	  	  	</div>

	                                          	   	  	  	<div class = "matchOne">
	                                          	   	  	  	    <div class = "inputA"><input type = "radio"></div>
	                                          	   	  	  	 	<div class = "answer">
	                                          	   	  	  	 		<div>Cprruption is form of mioss</div>
	                                          	   	  	  	 		<div class = "ReprImg">
	                                          	   	  	  	 		    <div class = "qstnImg">
	                                          	   	  	  	 		        <img src = "img/loginSlider/proce.jpg">
	                                          	   	  	  	 		    </div>
	                                          	   	  	  	 		</div>
	                                          	   	  	  	 	</div>
	                                          	   	  	  	</div>
                                          	   	  	    </div>

                                          	   	  	    <div class = "correct">
                                          	   	  	        <span>X</span>
                                          	   	  	    </div>
                                          	   	    </div>
                                          	   </div>
                                            </section>
                                           
                                           <!-- /*section B true/false*/ -->
                                            <section class="onqstn">
                                          	   <h2>SECTION B</h2>
                                          	   
                                          	   <div class = "qstnSectBody">
                                          	   	    <div class = "qNo">
                                          	   	        <span class = "No">2,</span>
                                          	   	        <span class = "kpengele">2.1</span>
                                          	   	    </div>

                                          	   	    <div class = "theQstnwraper">
                                          	   	  	    <div class = " theqstnAndImg">
                                          	   	  	    	<div class = "qstntime">jkasjldjfkajfskajsfafsafsadfdsa</div>
                                          	   	  	    	<div class = "ReprImg">
	                                  	   	  	  	 		    <div class = "qstnImg">
	                                  	   	  	  	 		        <img src = "img/loginSlider/proce.jpg">
	                                  	   	  	  	 		    </div>
	                                          	   	  	  	 </div>
                                          	   	  	    </div>

                                          	   	  	    <div class = "truOrfalse">

                                                           <div class = "trutime">
                                                           	   <span class = "truInput" ><input type="radio" name=""></span>
                                                           	   <span class = "truAns">True</span>
                                                           </div>

                                                           <div class = "falsetime">
                                                           	   <span class = "truInput"><input type="radio" name=""></span>
                                                           	   <span class = "falseAns">False</span>
                                                           </div>
                                          	   	  	    </div>

                                          	   	  	    <div class = "correct">
                                          	   	  	        <span>X</span>
                                          	   	  	    </div>
                                          	   	    </div>
                                          	   </div>

                                          	   <div class = "qstnSectBody">
                                          	   	    <div class = "qNo">
                                          	   	        <span class = "No">2,</span>
                                          	   	        <span class = "kpengele">2.1</span>
                                          	   	    </div>

                                          	   	    <div class = "theQstnwraper">
                                          	   	  	    <div class = " theqstnAndImg">
                                          	   	  	    	<div class = "qstntime">jkasjldjfkajfskajsfafsafsadfdsa</div>
                                          	   	  	    	<div class = "ReprImg">
	                                  	   	  	  	 		    <div class = "qstnImg">
	                                  	   	  	  	 		        <img src = "">
	                                  	   	  	  	 		    </div>
	                                          	   	  	  	 </div>
                                          	   	  	    </div>

                                          	   	  	    <div class = "truOrfalse">

                                                           <div class = "trutime">
                                                           	   <span class = "truInput" ><input type="radio" name=""></span>
                                                           	   <span class = "truAns">True</span>
                                                           </div>

                                                           <div class = "falsetime">
                                                           	   <span class = "truInput"><input type="radio" name=""></span>
                                                           	   <span class = "falseAns">False</span>
                                                           </div>
                                          	   	  	    </div>

                                          	   	  	    <div class = "correct">
                                          	   	  	        <span>X</span>
                                          	   	  	    </div>
                                          	   	    </div>
                                          	   </div>
                                            </section> 


                                           <!-- /*section C true/false*/ -->
                                            <section class="onqstn">
                                          	   <h2> SECTION C </h2>
                                          	   <div class = "listAlistB_header">
                                          	   	    <div class = "listA">LIST A</div>
                                          	   	    <div class = "listB">LIST B</div>
                                          	   </div>
                                          	  
                                          	   <div class = "qstnSectBody">
                                          	   	    <div class = "qNo">
                                          	   	        <span class = "No">3,</span>
                                          	   	        <span class = "kpengele">3.1</span>
                                          	   	    </div>

                                          	   	    <div class = "theQstnwraper relateItemsQstn">
                                          	   	  	    <div class = " theqstnAndImg">
                                          	   	  	    	<div class = "qstntime">Classification</div>
                                          	   	  	    	<div class = "ReprImg">
	                                  	   	  	  	 		    <div class = "qstnImg">
	                                  	   	  	  	 		        <img src = "img/loginSlider/proce.jpg">
	                                  	   	  	  	 		    </div>
	                                          	   	  	  	 </div>

                                          	   	  	    </div >

                                          	   	  	    <div class = "relatedItemB">

                                                         	<div class = "matchOne">
	                                          	   	  	  	    <div class = "inputA">A:</div>
	                                          	   	  	  	 	<div class = "answer">
	                                          	   	  	  	 		<div>plant to breath</div>
	                                          	   	  	  	 		<div class = "ReprImg">
	                                          	   	  	  	 		    <div class = "qstnImg">
	                                          	   	  	  	 		        <img src = "img/loginSlider/proce.jpg">
	                                          	   	  	  	 		    </div>
	                                          	   	  	  	 		</div>
	                                          	   	  	  	 	</div>
	                                          	   	  	  	</div>
                                          	   	  	    </div>
                                                        
                                                        <div class = "answerRelatedItem">
                                                            <input type = "text" placeholder="B"  name = "">
                                                        </div>

                                          	   	  	    <div class = "correct">
                                          	   	  	        <span>X</span>
                                          	   	  	    </div>
                                          	   	    </div>
                                          	   </div>

                                          	   <div class = "qstnSectBody">
                                          	   	    <div class = "qNo">
                                          	   	        <span class = "No">3,</span>
                                          	   	        <span class = "kpengele">3.2</span>
                                          	   	    </div>

                                          	   	    <div class = "theQstnwraper relateItemsQstn">
                                          	   	  	    <div class = " theqstnAndImg">
                                          	   	  	    	<div class = "qstntime">what is photosysness</div>
                                          	   	  	    	<div class = "ReprImg">
	                                  	   	  	  	 		    <div class = "qstnImg">
	                                  	   	  	  	 		        <img src = "">
	                                  	   	  	  	 		    </div>
	                                          	   	  	  	 </div>

                                          	   	  	    </div >

                                          	   	  	    <div class = "relatedItemB">

                                                         	<div class = "matchOne">
	                                          	   	  	  	    <div class = "inputA">A:</div>
	                                          	   	  	  	 	<div class = "answer">
	                                          	   	  	  	 		<div>is a process of grouping</div>
	                                          	   	  	  	 		<div class = "ReprImg">
	                                          	   	  	  	 		    <div class = "qstnImg">
	                                          	   	  	  	 		        <img src = "">
	                                          	   	  	  	 		    </div>
	                                          	   	  	  	 		</div>
	                                          	   	  	  	 	</div>
	                                          	   	  	  	</div>
                                          	   	  	    </div>
                                                        
                                                        <div class = "answerRelatedItem">
                                                            <input type = "text" placeholder="A"  name = "">
                                                        </div>

                                          	   	  	    <div class = "correct">
                                          	   	  	        <span>X</span>
                                          	   	  	    </div>
                                          	   	    </div>
                                          	   </div>
                                            </section>
                                        </div>
			    					</div>
			    				</div>
			    		</div>
			       </div>

			       <!-- teacher request -->
			        <div class = "teacherRequest">
			            <div class = "DreamSearch teacherSearch">
	                        <input type = "text" placeholder="teacher Dreams">
	                    </div>

	                    <?php 
                            $all_exmCompoz = "SELECT e.*,v.id  as vid, v.username as vus, v.profile as vp FROM                vy_exmcompoz e
                                            LEFT JOIN vy_users as v ON (e.user_id = v.id) 
                                            WHERE subj_id = ? 
                                               
                                        "
                                   ;

                            $sql_t =  $db->query($all_exmCompoz,$url_subjId);

                            if($sql_t->count()){
                            	echo " exam foud";

                            	foreach ($sql_t->results() as $t) {
                            		# code...
                            		

	                            	$user_id      = 	    $t->user_id;
	                            	$subj_id      = 	    $t->subj_id;
	                            	$exam_name    = 	    $t->exam_name;
	                            	$exam_type    = 		$t->exam_type;
	                            	$strt_time    = 		$t->strt_time;
	                            	$end_time     = 		$t->end_time;
	                            	$exam_date    = 		$t->exam_date;
	                            	$exam_instr   = 		$t->exam_instr;
	                            	$schoolname   = 		$t->schoolname;
	                            	$lvlStndrd    = 		$t->levelOrStandard;
	                            	$mknd         = 		$t->mkondo;
	                            	$region       = 		$t->region;


	                            	$t_username   = 		$r->vus;
	                            	$t_profile    = 		$r->vp;

	                            	$width        = 100;
						            $height       = 100;
						            $class        = '';
						            $t_profile    = $db->prfl_pctwithClass($t_profile, $width, $height, $class);

						            $subjectName =  get($db,'vy_subjects','id',$subj_id,'suubject_name');

                                    if($schoolname == $st_schulname && 
                                       $region == $st_rname &&
                                       $mknd   == $mkondo &&
                                       $lvlStndrd   == $st_lev &&
                                       $lvl_identify   == $st_levelidentify &&
                                       $subj_id   == $st_levelidentify 
                                       ){
                                       
                                       $MyTeachExm .= '<div class = "tRequest">
			                        <div class = "topDiv">
			                        	
			                        	<div class = "profImg">
											'.$t_profile.'
										</div>
										
										<div class = "details">
											<a href = "#">
												<span class = "name">$t_username</span>
												<span class = "SubjectTeach">$subjectName Teacher</span>
											</a>
										</div>
			                        </div>

			                        <div class = "botmDiv">
			                        	<div class = "Dreamtitles">
				    						<select id="dreamtTitle"> 
					                            <option selected="selected">REVOLUTION HAS BEGAN</option>
					                            <option>FOR ALL HATERS</option>
					                            <option>PAINFALL SUCCESS</option>
					                            <option>BORN FOR SUCCESS</option>
					                            <option>NEVER GIV UP TIME FOR REVENGE</option>		                              
					                        </select>
					    			    </div>

				    			    	<div class = "startBoton">
				    						BEGGING FOR EXAM
				    					</div>

				    			    	<div class = "view startBoton">
				    						view exam
				    					</div>


				    			    	<div class = "donate startBoton" onclick = \'openAbsolute("Donation");\'>
				    						Donate
				    					</div>
			                        </div>
					       		</div>
';
                                    }else{
                                    	$MyTeachExm .= "No  TEacher";
                                    }
                            	}

                            }else{
                            	echo "No exams found for that subject";
                            }
                            
	                    ?>
			            
			            <div class = "yourtechears">
			                <h3>Your teachers</h3>
			                <div class = "xoverflow">

			                    <?php echo $MyTeachExm; ?>
					       	    <div class = "tRequest">
			                        <div class = "topDiv">
			                        	
			                        	<div class = 'profImg'>
											<img src ='img/profiles/p4.jpg' >
										</div>
										
										<div class = "details">
											<a href = "#">
												<span class = "name">Nehemia Mwansasu</span>
												<span class = "SubjectTeach">Kiswahili Teacher</span>
											</a>
										</div>
			                        </div>

			                        <div class = "botmDiv">
			                        	<div class = "Dreamtitles">
				    						<select id='dreamtTitle'> 
					                            <option selected="selected">REVOLUTION HAS BEGAN</option>
					                            <option>FOR ALL HATERS</option>
					                            <option>PAINFALL SUCCESS</option>
					                            <option>BORN FOR SUCCESS</option>
					                            <option>NEVER GIV UP TIME FOR REVENGE</option>		                              
					                        </select>
					    			    </div>

				    			    	<div class = "startBoton">
				    						BEGGING FOR EXAM
				    					</div>

				    			    	<div class = "view startBoton">
				    						view exam
				    					</div>


				    			    	<div class = "donate startBoton" onclick = "openAbsolute('Donation');">
				    						Donate
				    					</div>
			                        </div>
					       		</div>

					       	    <div class = "tRequest">
			                        <div class = "topDiv">
			                        	
			                        	<div class = 'profImg'>
											<img src ='img/profiles/p4.jpg' >
										</div>
										
										<div class = "details">
											<a href = "#">
												<span class = "name">Nehemia Mwansasu</span>
												<span class = "SubjectTeach">Kiswahili Teacher</span>
											</a>
										</div>
			                        </div>

			                        <div class = "botmDiv">
			                        	<div class = "Dreamtitles">
				    						<select id='dreamtTitle'> 
					                            <option selected="selected">REVOLUTION HAS BEGAN</option>
					                            <option>FOR ALL HATERS</option>
					                            <option>PAINFALL SUCCESS</option>
					                            <option>BORN FOR SUCCESS</option>
					                            <option>NEVER GIV UP TIME FOR REVENGE</option>		                              
					                        </select>
					    			    </div>

				    			    	<div class = "startBoton">
				    						BEGGING FOR EXAM
				    					</div>

				    			    	<div class = "view startBoton">
				    						view exam
				    					</div>


				    			    	<div class = "donate startBoton" onclick = "openAbsolute('Donation');">
				    						Donate
				    					</div>
			                        </div>
					       		</div>

					       	    <div class = "tRequest">
			                        <div class = "topDiv">
			                        	
			                        	<div class = 'profImg'>
											<img src ='img/profiles/p4.jpg' >
										</div>
										
										<div class = "details">
											<a href = "#">
												<span class = "name">Nehemia Mwansasu</span>
												<span class = "SubjectTeach">Kiswahili Teacher</span>
											</a>
										</div>
			                        </div>

			                        <div class = "botmDiv">
			                        	<div class = "Dreamtitles">
				    						<select id='dreamtTitle'> 
					                            <option selected="selected">REVOLUTION HAS BEGAN</option>
					                            <option>FOR ALL HATERS</option>
					                            <option>PAINFALL SUCCESS</option>
					                            <option>BORN FOR SUCCESS</option>
					                            <option>NEVER GIV UP TIME FOR REVENGE</option>		                              
					                        </select>
					    			    </div>

				    			    	<div class = "startBoton">
				    						BEGGING FOR EXAM
				    					</div>

				    			    	<div class = "view startBoton">
				    						view exam
				    					</div>


				    			    	<div class = "donate startBoton" onclick = "openAbsolute('Donation');">
				    						Donate
				    					</div>
			                        </div>
					       		</div>
					       		
					       	    <div class = "tRequest">
			                        <div class = "topDiv">
			                        	
			                        	<div class = 'profImg'>
											<img src ='img/profiles/p4.jpg' >
										</div>
										
										<div class = "details">
											<a href = "#">
												<span class = "name">Nehemia Mwansasu</span>
												<span class = "SubjectTeach">Kiswahili Teacher</span>
											</a>
										</div>
			                        </div>

			                        <div class = "botmDiv">
			                        	<div class = "Dreamtitles">
				    						<select id='dreamtTitle'> 
					                            <option selected="selected">REVOLUTION HAS BEGAN</option>
					                            <option>FOR ALL HATERS</option>
					                            <option>PAINFALL SUCCESS</option>
					                            <option>BORN FOR SUCCESS</option>
					                            <option>NEVER GIV UP TIME FOR REVENGE</option>		                              
					                        </select>
					    			    </div>

				    			    	<div class = "startBoton">
				    						BEGGING FOR EXAM
				    					</div>

				    			    	<div class = "view startBoton">
				    						view exam
				    					</div>


				    			    	<div class = "donate startBoton" onclick = "openAbsolute('Donation');">
				    						Donate
				    					</div>
			                        </div>
					       		</div>
				       	    </div>
			       	    </div>

			       	    <div class = " yourtechears Othertechears">
			       	        <h3>Other teachers</h3>
			                <div class = "xoverflow">
					       	    <div class = "tRequest">
			                        <div class = "topDiv">
			                        	
			                        	<div class = 'profImg'>
											<img src ='img/profiles/p4.jpg' >
										</div>
										
										<div class = "details ">
											<a href = "#">
												<span class = "name">Nehemia Mwansasu</span>
												<span class = "Schoolname SubjectTeach">Kisutu Secendary School</span>
												<span class = "SubjectTeach">Mathematics Teacher</span>
											</a>
										</div>
			                        </div>

			                        <div class = "botmDiv otherTeacherbotmDiv">
			                        	<div class = "Dreamtitles">
				    						<select id='dreamtTitle'> 
					                            <option selected="selected">REVOLUTION HAS BEGAN</option>
					                            <option>FOR ALL HATERS</option>
					                            <option>PAINFALL SUCCESS</option>
					                            <option>BORN FOR SUCCESS</option>
					                            <option>NEVER GIV UP TIME FOR REVENGE</option>		                              
					                        </select>
					    			    </div>

				    			    	<div class = "startBoton">
				    						BEGGING FOR EXAM
				    					</div>

				    			    	<div class = "view startBoton">
				    						view exam
				    					</div>


				    			    	<div class = "donate startBoton" onclick = "openAbsolute('Donation');">
				    						Donate
				    					</div>
			                        </div>
					       	    </div>
				       	    </div>
			       	    </div>
			        </div>
			    </div>

               
           
			</div>
			
            <?php include 'include/infosection.php'; ?>
		</div>
		
		</div>
    </div>
    
<?php include 'include/skelotonBottom_login.php'; ?>

<!-- <script src="jscript/tymtableSave.js"></script> -->
<!-- <script src="jscript/tsliderlive.js"></script> -->
<!-- <script src="jscript/teacherfunction.js"></script> -->
<!-- <script src="jscript/tsliderSingleParent.js"></script> -->



