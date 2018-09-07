 


<!-- <div id = "" class = "cpver "> -->
    <div id = "composqsn" class = "composqsnWall absoluteWraper">
 <!--    <div id = 'close' onclick = "closeDiv('QstnPage');"><i class = 'fa fa-close'></i></div> -->

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
                   
                    <?php 
                    if($submitforpage == 'st_page'){
                    ?>

                      <span class = "sendBotton" id = "sendQstn_student" >Send AS</span>
                      
                    <?php
                    }else if($submitforpage == 'teach_page'){
                    ?>

                    <span class = "sendBotton" id = "sendQstn" >Send </span>

                  
<?php
                    }else if($submitforpage == 'ex_page'){
                    ?>

                    <span class = "sendBotton" id = "ExamList" >Send </span>

                    <?php
                    }
                    ?>

            	    
                </div>

            	<div class = "sectIcon" onclick = "openAbsolute('shareTo');">
            	     <span class="usMatchItm">Ask Fellow Genius </span>
            	</div>
            	
            </div>
		</div>
     </div>
<!-- </div> -->
				  