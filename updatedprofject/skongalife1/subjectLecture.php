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
					<div id ='topic_to_cover'>Topic Cover</div>
					<div id ='Subject_Lectures'>Subject Lectures</div>
					<div id ='Teachers_Help'>Teachers Help</div>
					<div id ='Lectures_PlayList'>Lectures PlayList</div>
				</header>
				
					<div id= 'sucject_search'>
						<input id = 'search_lectures' placeholder='search lectures Example: Nutrion by Emmanuel:school name,2017'>
					</div>
				
				
				<div class = 'Myfucults'>
					<div id = 'check_covered_topic'>
						<div id = 'topic' onclick = 'swictVisibility();'>TOPICS TO COVER</div>
						<div id='topic_checkBox'>
							<span id = 'topic_one'>Topic One</span> <input type="checkbox" name ='name_topic' id='name_topic'style='background:black;'/>
							<span id = 'topic_one'>Topic two</span> <input type="checkbox" name ='name_topic' id='name_topic'/>
							<span id = 'topic_one'>Topic three</span> <input type="checkbox" name ='name_topic' id='name_topic'>
							<span id = 'topic_one'>Topic four</span> <input type="checkbox" name ='name_topic' id='name_topic'>
							<span id = 'topic_one'>Topic five</span> <input type="checkbox" name ='name_topic' id='name_topic'>
							<span id = 'topic_one'>Topic six</span ><input type="checkbox" name ='name_topic' id='name_topic'>
							<span id = 'topic_one'>Topic seven</span> <input type="checkbox" name ='name_topic' id='name_topic'>
							<span id = 'topic_one'>Topic eight</span> <input type="checkbox" name ='name_topic' id='name_topic'>
							<span id = 'topic_one'>Topic nine</span> <input type="checkbox" name ='name_topic' id='name_topic'>
							<span id = 'topic_one'>Topic ten</span ><input type="checkbox" name ='name_topic' id='name_topic'>
							<span id = 'topic_one'>Topic eleven</span ><input type="checkbox" name ='name_topic' id='name_topic'>
						</div>
				    </div>
					
					
					<div id = 'subjectTeacher'>
						<div class ='t_profile'><img src ='img/profiles/p2.png' width ='100px' height ='100px;'></div>
						<div class ='details'>
							<span class = 't_name title'>My teacher:</span>
							<span class = 'name'>James</span>
							<span class = 'subjec title'>Subject:</span>
							<span class = 'name'>Bios</span>
						
							<span class = 'level title'>form:</span>
							<span class = 'name'>2</span>
								
						
						</div>
						<div id = 'dent_qustion_button' onclick = 'swicthVisibility("write_qust_to_teach");'>
						   <div id = 'question_teacher'>student qust </div>
							<div id = 'asked' title ='No of asked qust'>
								<span id = 'no_ascked_qustion'>Asked</span>
								<span id = 'no'>12</span>
							</div>
						</div>
						   <div id = 'write_qust_to_teach'>
							<textarea id ='qustion_time'  = 'example: what is biology'></textarea>
							<input type = 'submit' value = 'send Question' id = 'send_qust' >
						   </div>
						   <div id = 'question_teacher'>parent talk to teacher </div>
							<a href ='#'>Other Bios Teachers</a>
					</div>
					
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
					
					
					<div id = 'sucject_lecture' onclick = "openAbsolute('book_temprate');">
						<div id ='imgCover'><img src = videos/cove.png></div>
						<div id='details'>
							<span class ='topc_lect'>Respiration</span>
						    <span class ='title'>Name:</span><span class ='ans'>Maria Masaburi</span>
							  <span class ='title'>School:</span><span class ='ans'>Private Teacher</span>
							  <span class ='title'>School:</span><span class ='ans'>Ipc Collage</span>
							  <span class ='title'>Level:</span><span class ='ans'>Certificate</span>
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
				
				<div class = 'teachersProfile'>
					<h3>YOUR TEACHER</h3>
					<div id = 'teacher'>
						<div class ='t_profile'><img src ='img/profiles/p2.png' width ='100px' height ='100px;'></div>
						<div class ='details'>
							<span class = 'title'>Teacher:</span>
							<span class = 'name'>James</span>
							<span class = 'subjec'>Subject:</span>
							<span class = 'name'>Bios</span>
							
							<span class = 'school'>School:</span>
							<span class = 'name'>Your</span>
							
							<span class = 'level'>form:</span>
							<span class = 'name'>2</span>
								
						
						</div>
							<a href ='#'>Other Bios Teachers</a>
					</div>
					
					
					<div id = 'teacher'>
						<div class ='t_profile'><img src ='img/profiles/p2.png' width ='100px' height ='100px;'></div>
						<div class ='details'>
							<span class = 'title'>Teacher:</span>
							<span class = 'name'>Neema</span>
							<span class = 'subjec'>Subject:</span>
							<span class = 'name'>Bios</span>
							
							<span class = 'school'>School:</span>
							<span class = 'name'>Your</span>
							
							<span class = 'level'>form:</span>
							<span class = 'name'>2</span>
								
							
						</div>
						<a href ='#'>Other Bios Teachers</a>
					</div>
					
					<div id = 'teacher'>
						<div class ='t_profile'><img src ='img/profiles/p6.jpg' width ='100px' height ='100px;'></div>
						<div class ='details'>
							<span class = 'title'>Teacher:</span>
							<span class = 'name'>Enjoy</span>
							<span class = 'subjec'>Subject:</span>
							<span class = 'name'>Bios</span>
							
							<span class = 'school'>School:</span>
							<span class = 'name'>Happyskillful</span>
							
							<span class = 'level'>form:</span>
							<span class = 'name'>4</span>
								
							
						</div>
						<a href ='#'>Other Physics Teachers</a>
					</div>
					
					
					<div id = 'teacher'>
						<div class ='t_profile'><img src ='img/profiles/p3.jpg' width ='100px' height ='100px;'></div>
						<div class ='details'>
							<span class = 'title'>Teacher:</span>
							<span class = 'name'>Magy</span>
							<span class = 'subjec'>Subject:</span>
							<span class = 'name'>Bios</span>
							
							<span class = 'school'>School:</span>
							<span class = 'name'>Happyskillful</span>
							
							<span class = 'level'>form:</span>
							<span class = 'name'>4</span>
								
							
						</div>
						<a href ='#'>Other English Teachers</a>
					</div>
					
					<div id = 'teacher'>
						<div class ='t_profile'><img src ='img/profiles/p9.jpg' width ='100px' height ='100px;'></div>
						<div class ='details'>
							<span class = 'title'>Teacher:</span>
							<span class = 'name'>Challo</span>
							<span class = 'subjec'>Subject:</span>
							<span class = 'name'>Bios</span>
							
							<span class = 'school'>School:</span>
							<span class = 'name'>Happyskillful</span>
							
							<span class = 'level'>form:</span>
							<span class = 'name'>4</span>
						</div>
						<a href ='#'>Other Math Teachers</a>
					</div>
					
					<div id = 'teacher'>
						<div class ='t_profile'><img src ='img/profiles/p9.jpg' width ='100px' height ='100px;'></div>
						<div class ='details'>
							<span class = 'title'>Teacher:</span>
							<span class = 'name'>Nehemia</span>
							<span class = 'subjec'>Subject:</span>
							<span class = 'name'>Bios</span>
							
							<span class = 'school'>School:</span>
							<span class = 'name'>Happyskillful</span>
							
							<span class = 'level'>form:</span>
							<span class = 'name'>4</span>
						</div>
						<a href ='#'>Other Math Teachers</a>
					</div>
					
					<div id = 'teacher'>
						<div class ='t_profile'><img src ='img/profiles/p9.jpg' width ='100px' height ='100px;'></div>
						<div class ='details'>
							<span class = 'title'>Teacher:</span>
							<span class = 'name'>Upendo</span>
							<span class = 'subjec'>Subject:</span>
							<span class = 'name'>Kiswahili</span>
							
							<span class = 'school'>School:</span>
							<span class = 'name'>Happyskillful</span>
							
							<span class = 'level'>form:</span>
							<span class = 'name'>4</span>
						</div>
						<a href ='#'>Other Math Teachers</a>
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
				
				
				<div class = 'extrathing'>
					<h3>My Videos</h3>
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
					
					<div class = 'subjects panels'>
						<a href ='#'><span class ='subj'>School Diary</span></a>
					</div>
					
					<div class = 'subjects panels'>
						<a href ='#'><span class ='subj'>+</span></a>
					</div>
					
					
				</div>
				
				
			</div>
			
			
			
			
			
			
			
			
		  <?php include 'include/infosection.php'; ?>
			
			
		</div>
		
		</div>
    </div>
    
</div>
<?php include 'include/skelotonBottom_login.php'; ?>