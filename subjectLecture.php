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
				
			<!-- 	<header id = header_lect>
					<div id ='topic_to_cover'>Topic Cover</div>
					<div id ='Subject_Lectures'>Subject Lectures</div>
					<div id ='Teachers_Help'>Teachers Help</div>
					<div id ='Lectures_PlayList'>Lectures PlayList</div>
				</header> -->
                <div class="sidePanelHeader">
				<h1 class = "sidePanelHeade"><span class = 'subject_title'>BIOLOGY</span> LECTURE</h1>
				</div>

				<div id= 'sucject_search'>
					<input id = 'search_lectures' placeholder='search lectures Example: Nutrion by Emmanuel:school name,2017'>
				</div>
				
<!-- 
				<div class = "topDivsidPanel">
				    <h2>MY PLAYLIST</h2>
					<div class = "vdeoplayist playlistWraper">
					    <div class = "xoverflow">
							<div id = 'sucject_lecture' onclick = "openAbsolute('video_temprate');">
								<div id ='imgCover'><img src = videos/cove.png></div>
								<div id='details'>
									<span class ='topc_lect'>Reproduction</span>
								    <span class ='title'>Name:</span><span class ='ans'>Nehemia</span>
									  <span class ='title'>School:</span><span class ='ans'>Private Teacher</span>
									  <span class ='title'>School:</span><span class ='ans'>Kamanda Tution</span>
									  <span class ='title'>Level:</span><span class ='ans'>Form 3,Form 4</span>
								</div>
							</div>
							<div id = 'sucject_lecture' onclick = "openAbsolute('video_temprate');">
								<div id ='imgCover'><img src = videos/cove.png></div>
								<div id='details'>
									<span class ='topc_lect'>Reproduction</span>
								    <span class ='title'>Name:</span><span class ='ans'>Nehemia</span>
									  <span class ='title'>School:</span><span class ='ans'>Private Teacher</span>
									  <span class ='title'>School:</span><span class ='ans'>Kamanda Tution</span>
									  <span class ='title'>Level:</span><span class ='ans'>Form 3,Form 4</span>
								</div>
							</div>
							<div id = 'sucject_lecture' onclick = "openAbsolute('video_temprate');">
								<div id ='imgCover'><img src = videos/cove.png></div>
								<div id='details'>
									<span class ='topc_lect'>Reproduction</span>
								    <span class ='title'>Name:</span><span class ='ans'>Nehemia</span>
									  <span class ='title'>School:</span><span class ='ans'>Private Teacher</span>
									  <span class ='title'>School:</span><span class ='ans'>Kamanda Tution</span>
									  <span class ='title'>Level:</span><span class ='ans'>Form 3,Form 4</span>
								</div>
							</div>
							<div id = 'sucject_lecture' onclick = "openAbsolute('video_temprate');">
								<div id ='imgCover'><img src = videos/cove.png></div>
								<div id='details'>
									<span class ='topc_lect'>Reproduction</span>
								    <span class ='title'>Name:</span><span class ='ans'>Nehemia</span>
									  <span class ='title'>School:</span><span class ='ans'>Private Teacher</span>
									  <span class ='title'>School:</span><span class ='ans'>Kamanda Tution</span>
									  <span class ='title'>Level:</span><span class ='ans'>Form 3,Form 4</span>
								</div>
							</div>
							<div id = 'sucject_lecture' onclick = "openAbsolute('video_temprate');">
								<div id ='imgCover'><img src = videos/cove.png></div>
								<div id='details'>
									<span class ='topc_lect'>Reproduction</span>
								    <span class ='title'>Name:</span><span class ='ans'>Nehemia</span>
									  <span class ='title'>School:</span><span class ='ans'>Private Teacher</span>
									  <span class ='title'>School:</span><span class ='ans'>Kamanda Tution</span>
									  <span class ='title'>Level:</span><span class ='ans'>Form 3,Form 4</span>
								</div>
							</div>
							<div id = 'sucject_lecture' onclick = "openAbsolute('video_temprate');">
								<div id ='imgCover'><img src = videos/cove.png></div>
								<div id='details'>
									<span class ='topc_lect'>Reproduction</span>
								    <span class ='title'>Name:</span><span class ='ans'>Nehemia</span>
									  <span class ='title'>School:</span><span class ='ans'>Private Teacher</span>
									  <span class ='title'>School:</span><span class ='ans'>Kamanda Tution</span>
									  <span class ='title'>Level:</span><span class ='ans'>Form 3,Form 4</span>
								</div>
							</div>
						</div>
					</div>



					<div class = "topicTocover">
						<h3>TOPOC TO COVER</h3>
						<div class = "xoverflow">
							<div class = "topicBandle">
								<div class = "topic">RepoductionBandle</div>
								<div class = "subtopic">
									<div class = ""></div>
								</div>

							</div>
						</div>
					</div>
				</div> -->
				
				<div class = 'Myfucults'>
					
					
					<h3>SUBJECT LECTURES</h3>

					
					<div id = 'sucject_lecture' onclick = "openAbsolute('video_temprate');">
						<div id ='imgCover'><img src = videos/cove.png></div>
						<div id='details'>
							<span class ='topc_lect'>Reproduction</span>
						    <span class ='title'>Name:</span><span class ='ans'>Nehemia</span>
							  <span class ='title'>School:</span><span class ='ans'>Private Teacher</span>
							  <span class ='title'>School:</span><span class ='ans'>Kamanda Tution</span>
							  <span class ='title'>Level:</span><span class ='ans'>Form 3,Form 4</span>
						</div>
					</div>
					
					<div id = 'sucject_lecture' onclick = "openAbsolute('video_temprate');">
						<div id ='imgCover'><img src = videos/cove.png></div>
						<div id='details'>
							<span class ='topc_lect'>Nutrition & Respiration</span>
						    <span class ='title'>Name:</span><span class ='ans'>Nehemia</span>
							  <span class ='title'>School:</span><span class ='ans'>Private Teacher</span>
							  <span class ='title'>School:</span><span class ='ans'>Kamanda Tution</span>
							  <span class ='title'>Level:</span><span class ='ans'>Form 3,Form 4</span>
						</div>
					</div>
					
						
					<div id = 'sucject_lecture' onclick = "openAbsolute('video_temprate');">
						<div id ='imgCover'><img src = videos/cove.png></div>
						<div id='details'>
							<span class ='topc_lect'>Nutrition & Respiration</span>
						    <span class ='title'>Name:</span><span class ='ans'>Nehemia</span>
							  <span class ='title'>School:</span><span class ='ans'>Private Teacher</span>
							  <span class ='title'>School:</span><span class ='ans'>Kamanda Tution</span>
							  <span class ='title'>Level:</span><span class ='ans'>Form 3,Form 4</span>
						</div>
					</div>
					
						
					<div id = 'sucject_lecture' onclick = "openAbsolute('video_temprate');">
						<div id ='imgCover'><img src = videos/cove.png></div>
						<div id='details'>
							<span class ='topc_lect'>Nutrition & Respiration</span>
						    <span class ='title'>Name:</span><span class ='ans'>Nehemia</span>
							  <span class ='title'>School:</span><span class ='ans'>Private Teacher</span>
							  <span class ='title'>School:</span><span class ='ans'>Kamanda Tution</span>
							  <span class ='title'>Level:</span><span class ='ans'>Form 3,Form 4</span>
						</div>
					</div>
					
						
					<div id = 'sucject_lecture' onclick = "openAbsolute('video_temprate');">
						<div id ='imgCover'><img src = videos/cove.png></div>
						<div id='details'>
							<span class ='topc_lect'>Nutrition & Respiration</span>
						    <span class ='title'>Name:</span><span class ='ans'>Nehemia</span>
							  <span class ='title'>School:</span><span class ='ans'>Private Teacher</span>
							  <span class ='title'>School:</span><span class ='ans'>Kamanda Tution</span>
							  <span class ='title'>Level:</span><span class ='ans'>Form 3,Form 4</span>
						</div>
					</div>
					
						
					<div id = 'sucject_lecture' onclick = "openAbsolute('video_temprate');">
						<div id ='imgCover'><img src = videos/cove.png></div>
						<div id='details'>
							<span class ='topc_lect'>Nutrition & Respiration</span>
						    <span class ='title'>Name:</span><span class ='ans'>Nehemia</span>
							  <span class ='title'>School:</span><span class ='ans'>Private Teacher</span>
							  <span class ='title'>School:</span><span class ='ans'>Kamanda Tution</span>
							  <span class ='title'>Level:</span><span class ='ans'>Form 3,Form 4</span>
						</div>
					</div>
					
						
					<div id = 'sucject_lecture' onclick = "openAbsolute('video_temprate');">
						<div id ='imgCover'><img src = videos/cove.png></div>
						<div id='details'>
							<span class ='topc_lect'>Nutrition & Respiration</span>
						    <span class ='title'>Name:</span><span class ='ans'>Nehemia</span>
							  <span class ='title'>School:</span><span class ='ans'>Private Teacher</span>
							  <span class ='title'>School:</span><span class ='ans'>Kamanda Tution</span>
							  <span class ='title'>Level:</span><span class ='ans'>Form 3,Form 4</span>
						</div>
					</div>
					
						
					<div id = 'sucject_lecture' onclick = "openAbsolute('video_temprate');">
						<div id ='imgCover'><img src = videos/cove.png></div>
						<div id='details'>
							<span class ='topc_lect'>Nutrition & Respiration</span>
						    <span class ='title'>Name:</span><span class ='ans'>Nehemia</span>
							  <span class ='title'>School:</span><span class ='ans'>Private Teacher</span>
							  <span class ='title'>School:</span><span class ='ans'>Kamanda Tution</span>
							  <span class ='title'>Level:</span><span class ='ans'>Form 3,Form 4</span>
						</div>
					</div>
					
						
					<div id = 'sucject_lecture' onclick = "openAbsolute('video_temprate');">
						<div id ='imgCover'><img src = videos/cove.png></div>
						<div id='details'>
							<span class ='topc_lect'>Nutrition & Respiration</span>
						    <span class ='title'>Name:</span><span class ='ans'>Nehemia</span>
							  <span class ='title'>School:</span><span class ='ans'>Private Teacher</span>
							  <span class ='title'>School:</span><span class ='ans'>Kamanda Tution</span>
							  <span class ='title'>Level:</span><span class ='ans'>Form 3,Form 4</span>
						</div>
					</div>
					
						
					<div id = 'sucject_lecture' onclick = "openAbsolute('video_temprate');">
						<div id ='imgCover'><img src = videos/cove.png></div>
						<div id='details'>
							<span class ='topc_lect'>Nutrition & Respiration</span>
						    <span class ='title'>Name:</span><span class ='ans'>Nehemia</span>
							  <span class ='title'>School:</span><span class ='ans'>Private Teacher</span>
							  <span class ='title'>School:</span><span class ='ans'>Kamanda Tution</span>
							  <span class ='title'>Level:</span><span class ='ans'>Form 3,Form 4</span>
						</div>
					</div>
					
					
					
					<div id = 'sucject_lecture' onclick = "openAbsolute('video_temprate');">
						<div id ='imgCover'><img src = videos/cove.png></div>
						<div id='details'>
							<span class ='topc_lect'>Genetics with example</span>
						    <span class ='title'>Name:</span><span class ='ans'>Maria Masaburi</span>
							  <span class ='title'>School:</span><span class ='ans'>Private Teacher</span>
							  <span class ='title'>School:</span><span class ='ans'>Ipc Collage</span>
							  <span class ='title'>Level:</span><span class ='ans'>Certificate</span>
						</div>
					</div>
					
					<div id = 'sucject_lecture' onclick = "openAbsolute('video_temprate');">
						<div id ='imgCover'><img src = videos/cove.png></div>
						<div id='details'>
							<span class ='topc_lect'>Classification Lectures</span>
						    <span class ='title'>Name:</span><span class ='ans'>Maria Masaburi</span>
							  <span class ='title'>School:</span><span class ='ans'>Private Teacher</span>
							  <span class ='title'>School:</span><span class ='ans'>Ipc Collage</span>
							  <span class ='title'>Level:</span><span class ='ans'>Certificate</span>
						</div>
					</div>
					
					<div id = 'sucject_lecture' onclick = "openAbsolute('video_temprate');">
						<div id ='imgCover'><img src = videos/cove.png></div>
						<div id='details'>
							<span class ='topc_lect'>Classification Lectures</span>
						    <span class ='title'>Name:</span><span class ='ans'>Maria Masaburi</span>
							  <span class ='title'>School:</span><span class ='ans'>Private Teacher</span>
							  <span class ='title'>School:</span><span class ='ans'>Ipc Collage</span>
							  <span class ='title'>Level:</span><span class ='ans'>Certificate</span>
						</div>
					</div>
					
					<div id = 'sucject_lecture' onclick = "openAbsolute('video_temprate');">
						<div id ='imgCover'><img src = videos/cove.png></div>
						<div id='details'>
							<span class ='topc_lect'>Classification Lectures</span>
						    <span class ='title'>Name:</span><span class ='ans'>Maria Masaburi</span>
							  <span class ='title'>School:</span><span class ='ans'>Private Teacher</span>
							  <span class ='title'>School:</span><span class ='ans'>Ipc Collage</span>
							  <span class ='title'>Level:</span><span class ='ans'>Certificate</span>
						</div>
					</div>
					
					<div id = 'sucject_lecture' onclick = "openAbsolute('video_temprate');">
						<div id ='imgCover'><img src = videos/cove.png></div>
						<div id='details'>
							<span class ='topc_lect'>Classification Lectures</span>
						    <span class ='title'>Name:</span><span class ='ans'>Maria Masaburi</span>
							  <span class ='title'>School:</span><span class ='ans'>Private Teacher</span>
							  <span class ='title'>School:</span><span class ='ans'>Ipc Collage</span>
							  <span class ='title'>Level:</span><span class ='ans'>Certificate</span>
						</div>
					</div>
					
				</div>
				
				<div class = 'development'>
					<h3>Lecture Playlist</h3>
						<div id = 'sucject_lecture' onclick = "openAbsolute('video_temprate');">
						<div id ='imgCover'><img src = videos/cove.png></div>
						<div id='details'>
							<span class ='topc_lect'>Classification Lectures</span>
						    <span class ='title'>Name:</span><span class ='ans'>Maria Masaburi</span>
							  <span class ='title'>School:</span><span class ='ans'>Private Teacher</span>
							  <span class ='title'>School:</span><span class ='ans'>Ipc Collage</span>
							  <span class ='title'>Level:</span><span class ='ans'>Certificate</span>
						</div>
						
					</div>
					
					
					<!--<div class = 'subjects panels'>
						<a href ='#'><span class ='subj'>Time table</span></a>
					</div>
					
					<div class = 'subjects panels'>
						<a href ='#'><span class ='subj'>Result</span></a>
					</div>
					
					<div class = 'subjects panels'>
						<a href ='#'><span class ='subj'>Our Books Covers</span></a>
					</div>
					
					<div class = 'subjects panels'>
						<a href ='#'><span class ='subj'>Money Max</span></a>
					</div>-->
				</div>
				
			
				
			</div>
			
			
			
			
			
			
			
			
		  <?php include 'include/infosection.php'; ?>
			
			
		</div>
		
		</div>
    </div>
    
</div>

<?php include 'include/skelotonBottom_login.php'; ?>

<?php
 //   }else{
 //       echo '<p>You need <a href = "login.php">Login</a> or <a href = "registration.php">Register</a></p>';
	// }
?>

