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
				
       <!-- Question and answer page -->
				<div class = "bigWraper qstnandAnsWraper">
				    <h3>QUESTION AND ANSWER</h3>
                    <div class = "sendBotton composeQstn"  onclick="swicthVisibility('composqsn');">Compose Question</div>
                    <div id = "composqsn" class = "composqsn">

                    	<div class = "upperInstr">
                    		<div id ='exam_section'>
			                    <label for='SECTION'>SECTION</label>
			                    <select id='SECTION'> 
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

                    	 <input type = "text" placeholder="date">
                    	 <input type = "text" placeholder="School Name">
                    	
                    	 </div>

                    	 <div class = "topcAndSubtopcQstn">
                           <input type = "text" class = "SUbjectName" placeholder="SUbject Name">
                    	   <input type = "text" class = "TopcName" placeholder="Topc Name">
                    	   <input type = "text" clas = "SubtopcName" placeholder="Subtopc Name">
                    	 </div>
                    	</div>

                    	<div class = "midleInstr">
                    		<div class = "qstnNo">
							    <span class = "No">
							    <label for='Qno'>Qn</label>
			                        <select id='Qn_selectNo'> 
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
				                        <select id='Qn_selectNo'> 
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
							    <textarea onclick ="panelText_hidshow('panelTex_one');"></textarea>

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
		        		        <div class = "matchAns"><input onclick ="panelText_hidshow('panelTex_two');" type = "text"></div>
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
		        		        <div class = "matchAns"><input onclick ="panelText_hidshow('panelTex_three');"  type = "text"></div>
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
		        		        <div class = "matchAns"><input type = "text" onclick ="panelText_hidshow('panelTex_four');"></div>
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
                            	     <span class = "sendBotton">Send</span>
                            	</div>

                            	<div class = "sectIcon" onclick = "openAbsolute('shareTo');">
                            	     <span class="usMatchItm">Ask Fellow Genius </span>
                            	</div>
                            	
                            </div>

						</div>
                    </div>
				  
				    <div class = "qstnAndAnsBody">
				       <div class = "anseQstnDiv">
			                <div class = "despl">
						        <div class = "searchprof"> 
						          <div class = 'profImg'>
						            <img title = 'Patent Profile' src = 'img/profiles/p8.jpg' id = parent_img/>
						          </div>  
						        </div>

						        <div class = "detdispl">
							        <div class = "firsdeta">
							          <span class = "name">Nehemia Mwansasu</span>
							          <span class = "school">Unversity of Dar Es Salaam</span>
							          <span class = "pozision">Geoligist Lecture</span>
							        </div>
						          <div class = "qstntype">History Question</div>
						        </div>

						        <div class = "qastbody">
							        <div class = "qstn">
							        		<div class = "qstnNo">
							        		   <span class = "No">1</span><span class = "ColomNo">a</span>
							        		</div>

							        		<div class = "qstnBody">
							        			dfasfasfadf,amg,fm.,ms.,mhfs fsmfsgmfg,sdm
							        		</div>

							        		<div class = "matchitem">
							        			<div class="matchs">
							        				<div class = "qstnNo">
							        		          <span class = "ColomNo">A</span>
							        		        </div>
							        		        <div class = "matchAns"><input type = "text"></div>
							        			</div>
							        			<div class="matchs">
							        				<div class = "qstnNo">
							        		          <span class = "ColomNo">B</span>
							        		        </div>
							        		        <div class = "matchAns"><input type = "text"></div>
							        			</div>
							        			<div class="matchs">
							        				<div class = "qstnNo">
							        		          <span class = "ColomNo">C</span>
							        		        </div>
							        		        <div class = "matchAns"><input type = "text"></div>
							        			</div>
							        		</div>
                                           
                                            <div id= "yourAnse" class = "yourAnse">
                                                 <h3>Answer</h3>
                                                 <p>No Anser Now</p>
                                            </div>
							        		
							        		<div  class = "AnswerHer">
							        		     <span class = "neckedBoton viewAnswer" onclick="swicthVisibility('yourAnse');">View Answer</span> 
							        		     <!-- /*//absolute viewComments Answe*/ -->
							        		    <span class = "neckedBoton viewComment"onclick="swicthVisibility('viewAnsComment');">>View comments</span>
							        		</div>
							        </div>
						        </div>
					        </div>

				            <div class = "herToAns">
                                <div class = "ansHeader">ANSWER</div>
					            <div class = "answi">
					                <textarea placeholder="Anser Here"></textarea>
					             </div>
					            <span class = "clickedBoton sendHer">SEND ANSWER</span>
				            </div>
				        </div>
				    </div>

				</div>
				
				
			</div>
			


		<?php include 'include/infosection.php'; ?>
		</div>
		
        <div id = "writepad" class = "writePad">
            <div id = 'close' onclick = "closeDiv('writepad');">
                <i class = 'fa fa-close'></i>
            </div>
		        <div class = "panel">
		        <h4>Compose Document</h4>
		          <div class = "wraper">
		            <div class = "headerInput"><input id = "headerText" type = "text" placeholder="Your Title"></div>
		          <div class = "EditText">
				        <textarea id = "editComposeText" placeholder="Compose Here">                                                                                                                                                                               P.O BOX 323232,
				                                                                                                                                                                               
							ST MATHEW SEC SCHOOL
							HUMAN RESOURCES,
							P.O BOX 10914
							Dar-Es-Salaam,

							Dear Sir
							 
							                                                          REF:APPLICATION OF KISWAHILI TEACHING

							Refer to the head above concern appliying job posiiton on your school 

							am the teacher who have teaching expiriesnce in 3 yers and in have good statics in songoka.com vistit my teaching statistic

							i hop i wil get job in your scholll
							   

							                                              Your faithful in bulding nation
							                                               Nehemia Mwansasu
				        </textarea>
		          </div>
		          <div class ="savbottom">
		            <div class = "save">Save</div>
		          </div>
		        </div>
	        </div>
            <div class = "sidepanel">
                <h4>Your Documents</h4>
            	<div class = "xoverflow">
            		
            		<div class = "dtitle">
            		   <span class = "title">Application letter</span>
            		   <span class = "date">2/6/2016</span>
            		</div>
            	</div>
            </div>
        </div>
 
		</div>
</div>
    
</div>

<?php include 'include/SkelotonBottom_login.php'; ?>



