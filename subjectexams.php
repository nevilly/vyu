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
				
				<header id = header_lect>
					<div id ='allExam' onclick = "panel_hideshow('panel1');" >All Exams </div>
					<div  onclick = "panel_hideshow('panel2');"   id =''>2018-2010</div>
					<div  onclick = "panel_hideshow('panel3');" id =''>2009-2006</div>
					<div onclick = "panel_hideshow('panel4');" id =''>2005-2001</div>
					<div onclick = "panel_hideshow('panel5');" id =''>2000-1980</div>
				
				</header>
				
				<div id= 'sucject_search'>
					<input id = 'search_lectures' placeholder='search lectures Example: Nutrion by Emmanuel:school name,2017'>
				</div>
				

               <div class = "panelbody">
	               <div id = "panel1" class = "panelx AllExam">
	                 	<h3>ALL EXAMS</h3>
                        <div id = 'sucject_lecture' onclick = "openAbsolute('exam_temprate');">
							<div id ='imgCover'><img src = videos/cove.png></div><!-- <iframe src ='pdfile/bios/biosExams/Biology_1_2009.pdf' width ='100px' height ='100px;'></iframe>-->
							<div id='details'>
								<span class ='topc_lect'>NECTA BIOS 2016</span>
							    <span class ='title'>Writter:</span><span class ='ans'>Nehemia</span>
	                            <span class ='title'>Form:</span><span class ='ans'> 4</span>
							</div>
					   </div>
	               </div>
                

                    <div id = "panel2" class = "panelx">
	                 	<h3>2018-2010</h3>
                        <div id = 'sucject_lecture' onclick = "openAbsolute('exam_temprate');">
							<div id ='imgCover'><img src = videos/cove.png></div><!-- <iframe src ='pdfile/bios/biosExams/Biology_1_2009.pdf' width ='100px' height ='100px;'></iframe>-->
							<div id='details'>
								<span class ='topc_lect'>NECTA BIOS 2016</span>
							    <span class ='title'>Writter:</span><span class ='ans'>Nehemia</span>
	                            <span class ='title'>Form:</span><span class ='ans'> 4</span>
							</div>
					   </div>
	               </div>

                    <div id = "panel3" class = "panelx">
	                 	<h3>2009-2006</h3>
                        <div id = 'sucject_lecture' onclick = "openAbsolute('exam_temprate');">
							<div id ='imgCover'><img src = videos/cove.png></div><!-- <iframe src ='pdfile/bios/biosExams/Biology_1_2009.pdf' width ='100px' height ='100px;'></iframe>-->
							<div id='details'>
								<span class ='topc_lect'>NECTA BIOS 2016</span>
							    <span class ='title'>Writter:</span><span class ='ans'>Nehemia</span>
	                            <span class ='title'>Form:</span><span class ='ans'> 4</span>
							</div>
					   </div>
	               </div>

                    <div id = "panel4" class = "panelx">
	                 	<h3>2005-2001</h3>
                        <div id = 'sucject_lecture' onclick = "openAbsolute('exam_temprate');">
							<div id ='imgCover'><img src = videos/cove.png></div><!-- <iframe src ='pdfile/bios/biosExams/Biology_1_2009.pdf' width ='100px' height ='100px;'></iframe>-->
							<div id='details'>
								<span class ='topc_lect'>NECTA BIOS 2016</span>
							    <span class ='title'>Writter:</span><span class ='ans'>Nehemia</span>
	                            <span class ='title'>Form:</span><span class ='ans'> 4</span>
							</div>
					   </div>
	               </div>
                    <div id = "panel5" class = "panelx">
	                 	<h3>2000-1980</h3>
                        <div id = 'sucject_lecture' onclick = "openAbsolute('exam_temprate');">
							<div id ='imgCover'><img src = videos/cove.png></div><!-- <iframe src ='pdfile/bios/biosExams/Biology_1_2009.pdf' width ='100px' height ='100px;'></iframe>-->
							<div id='details'>
								<span class ='topc_lect'>NECTA BIOS 2016</span>
							    <span class ='title'>Writter:</span><span class ='ans'>Nehemia</span>
	                            <span class ='title'>Form:</span><span class ='ans'> 4</span>
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

<?php
 //   }else{
 //       echo '<p>You need <a href = "login.php">Login</a> or <a href = "registration.php">Register</a></p>';
	// }
?>
