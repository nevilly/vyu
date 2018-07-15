
    
<?php  
include 'include/allprofilefunc.php';
?>



<?php /*include 'include/skeletonTop.php';*/ ?>

<?php include 'include/skeletonTop.php';?>
        <div id = 'Pagewraper'>
  <?php include 'include/sidenavigation.php'; ?>
  
    <div id = 'side_two' >
		<!--/***********header after login*********/-->
			<?php include 'include/topheader.php'; ?>
		
		<div id='mainWraper'>
			<div class = 'section'>
				<?php //include 'include/profileheader.php'; ?>

				
            
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

			    					<div class = "startBoton" onclick = 'HomekComp("ExamFontPage","Qustionpage");'>
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
			    				
			    				<div id = "Qustionpage" class = "Qustionpage">
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
			            <div class = "yourtechears">
			                <h3>Your teachers</h3>
			                <div class = "xoverflow">
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
    
</div>
<script type="text/javascript" src="jscript/jscript.js">
	
</script>

 <?php include 'include/positonAbsolute.php'; ?>
</body>
</html>




