<?php include 'include/skeletonTop.php'; ?>
   
<div id = 'Pagewraper'>
    <?php include 'include/sidenavigation.php'; ?>
    <div id = 'side_two' >
		<!--/***********header after login*********/-->
		<?php include 'include/topheader.php'; ?>
		
		<div id='mainWraper'>
			<div class = 'section'>
		        <?php include 'include/profileheader.php'; ?>
				<header id = 'header_teach'>
					<div id ='myWall'       class ='myWall'        onclick = "tp_hideshow('tmywall');"                       > My Wall         </div>
					<div id ='toCover'      class ='toCover'       onclick = "tp_hideshow('check_covered_topic_teacher');"  > Topic Cover     </div>
					<div id ='nav_timtabl'  class ='nav_timtabl'   onclick = "tp_hideshow('timetable');"                    > Time table      </div>
					<div id ='nav_pchember' class ='nav_pchember'  onclick = "tp_hideshow('parentsChember');"               > Parent Chember  </div>
					<div id ='nav_resul'    class ='nav_resul'     onclick = "tp_hideshow('Result');"                       > Result          </div>
					<div id ='nav_static'   class ='nav_static'    onclick = "tp_hideshow('Stictix');"                      > Statics         </div>
					<div id ='nav_hist'     class ='nav_hist'      onclick = "tp_hideshow('examscompose');"                 > Your Exams      </div>
                    <div id ='nav_quiz'     class ='nav_quiz'      onclick = "tp_hideshow('cv');"                           > CV Job Adv      </div>
                    <div id ='nav_inf'      class ='nav_inf'       onclick = "tp_hideshow('use_info');"                     > info            </div>

                    </header>

			
				
				<div id = 'tmywall' class = 'mywall'>

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
				
				<div class = 'Myfucults'>
					<div id = 'check_covered_topic_teacher'>
						<div id = 'topic' onclick = "swicthVisibility('topic_checkBox');">TOPICS TO COVER</div>
							<div id='topic_checkBox'>
								<span id = 'topic_one'>Topic One</span> <input type="checkbox" name ='name_topic' id='name_topic' style='background:black;' />
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
                    
					<div id = 'timetable'>
						<header id = 'header_classTimetable'>
							<div class = 'formName'> FORM 1 A </div>
							<div class = 'formName'> FORM 1 B  </div>
							<div class = 'formName'> FORM 1 C</div></header>
					
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
                          </div></div>
                        </div>
                        </div>
				</div>
				
				<div id = 'parentsChember'>
                    <div class = 'parentsProfiles'>
						
						<div class = 'parProfile'>
							<div class = 'stPrfl'>
								<div class = 'stProf'>
									<img  title = 'student Profile' src ='img/profiles/img1.jpg' id = student_img/>
								</div>
							</div>
							
							<div class = 'prPrfl'>
								<div class = 'prProf'>
									<img title = 'Patent Profile' src = 'img/profiles/p8.jpg' id = parent_img/>
								</div>
							</div>

							<div class = 'detalsProf'>
							    <span class = 'name'>Nehemia Mwansasu</span> <span class = 'title'>'s,Parent</span> 
								<span class = 'ParentConctact'>
									<span class = 'title'>Contact:</span>
									<span class = 'ans'>0654881994</span>
								</span> 
							</div>
						</div>
					
					    <div class = 'parProfile'>
							<div class = 'stPrfl'>
								<div class = 'stProf'>
									<img  title = 'student Profile' src ='img/profiles/img1.jpg' id = student_img/>
								</div>
							</div>

							<div class = 'prPrfl'>
								<div class = 'prProf'>
									<img title = 'Patent Profile' src = 'img/profiles/p8.jpg' id = parent_img/>
								</div>
							</div>

							<div class = 'detalsProf'>
							    <span class = 'name'>Nehemia Mwansasu</span> <span class = 'title'>'s,Parent</span> 
								<span class = 'ParentConctact'>
									<span class = 'title'>Contact:</span>
									<span class = 'ans'>0654881994</span>
								</span> 
							</div>
						</div>
					
				
				        <div class = 'parProfile'>
							<div class = 'stPrfl'>
								<div class = 'stProf'>
									<img  title = 'student Profile' src ='img/profiles/img1.jpg' id = student_img/>
								</div>
							</div>

							<div class = 'prPrfl'>
								<div class = 'prProf'>
									<img title = 'Patent Profile' src = 'img/profiles/p8.jpg' id = parent_img/>
								</div>
							</div>

							<div class = 'detalsProf'>
							    <span class = 'name'>Nehemia Mwansasu</span> <span class = 'title'>'s,Parent</span> 
								<span class = 'ParentConctact'>
									<span class = 'title'>Contact:</span>
									<span class = 'ans'>0654881994</span>
								</span> 
							</div>	
						</div>
					
					   
					   <div class = 'parProfile'>
							<div class = 'stPrfl'>
								<div class = 'stProf'>
									<img  title = 'student Profile' src ='img/profiles/img1.jpg' id = student_img/>
								</div>
							</div>

							<div class = 'prPrfl'>
								<div class = 'prProf'>
									<img title = 'Patent Profile' src = 'img/profiles/p8.jpg' id = parent_img/>
								</div>
							</div>

							<div class = 'detalsProf'>
							    <span class = 'name'>Nehemia Mwansasu</span> <span class = 'title'>'s,Parent</span> 
								<span class = 'ParentConctact'>
									<span class = 'title'>Contact:</span>
									<span class = 'ans'>0654881994</span>
								</span> 
							</div>
					   </div>
							
					   <div class = 'parProfile'>
							<div class = 'stPrfl'>
								<div class = 'stProf'>
									<img  title = 'student Profile' src ='img/profiles/img1.jpg' id = student_img/>
								</div>
							</div>
							<div class = 'prPrfl'>
								<div class = 'prProf'>
									<img title = 'Patent Profile' src = 'img/profiles/p8.jpg' id = parent_img/>
								</div>
							</div>
							<div class = 'detalsProf'>
							    <span class = 'name'>Nehemia Mwansasu</span> <span class = 'title'>'s,Parent</span> 
								<span class = 'ParentConctact'>
									<span class = 'title'>Contact:</span>
									<span class = 'ans'>0654881994</span>
								</span> 
							</div>
					   </div>
					
					   <div class = 'parProfile'>
							<div class = 'stPrfl'>
								<div class = 'stProf'>
									<img  title = 'student Profile' src ='img/profiles/img1.jpg' id = student_img/>
								</div>
							</div>
							<div class = 'prPrfl'>
								<div class = 'prProf'>
									<img title = 'Patent Profile' src = 'img/profiles/p8.jpg' id = parent_img/>
								</div>
							</div>
							<div class = 'detalsProf'>
							    <span class = 'name'>Nehemia Mwansasu</span> <span class = 'title'>'s,Parent</span> 
								<span class = 'ParentConctact'>
									<span class = 'title'>Contact:</span>
									<span class = 'ans'>0654881994</span>
								</span> 
							</div>
						</div>
					
				        
						<div class = 'parProfile'>
							<div class = 'stPrfl'>
								<div class = 'stProf'>
									<img  title = 'student Profile' src ='img/profiles/img1.jpg' id = student_img/>
								</div>
							</div>
							<div class = 'prPrfl'>
								<div class = 'prProf'>
									<img title = 'Patent Profile' src = 'img/profiles/p8.jpg' id = parent_img/>
								</div>
							</div>
							<div class = 'detalsProf'>
							    <span class = 'name'>Nehemia Mwansasu</span> <span class = 'title'>'s,Parent</span> 
								<span class = 'ParentConctact'>
									<span class = 'title'>Contact:</span>
									<span class = 'ans'>0654881994</span>
								</span> 
							</div>
						</div>
				       <!--  <div class = 'right_arrow'></div>-->
					</div>
					
					
					<div class ='ParentsWrap'>
						
						<div class = 'allParents'>
							<div class = 'allparentsChart'>
								<div class = 'chartParentProfile'>
									<div class = 'chatarent'>
										<textarea onclick ="swicthVisibility('send_botton');"placeholder='Discuss Here'></textarea>
								    </div>
									
									<div id = 'send_botton'>
										<div id = 'post'><input class = 'p' type='submit' id='submit_post' value = 'Post Update'></div>
										<div id = 'upload_photo'><i class="fa fa-camera" id= 'cover_camera_prof'></i></div>
                                    </div>
								</div>
								<div class = 'xoverflow'>
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

			        <div class = "teacherStatistics">
			        	<header>Teacher Development Statistics</header>
			        	<div class = "Generalstatistics">
			        		<i  class="icofont icofont-chart-line" aria-hidden="true"></i>
			        	</div>
			        </div>


			         <div class = "teacherStatistics studenttatistics">
			        	<header class = "headertwo">Students Development Statistics</header>
			        	<input type = "text" placeholder="students development search">
			        	
			        	<div class = "studentstatistics">
			        	    <div class = "staticHeader">
			        	    	<div class = 'profImg'>
									<img title = 'Patent Profile' src = 'img/profiles/p8.jpg' id = parent_img/>
								</div>
							
			        	    	<span><a href = "#">Nehemia</a></span>
			        	    	<span class = 'fromForm'>Form4 B</span>
			        	    </div>

			        	    <div class = 'staticsDraw'>
			        		    <i  class="icofont icofont-chart-line" aria-hidden="true"></i>
			        		</div>
			        		<div class = "commentStatics"><i class ="fa fa-comment"></i><span>Advice/comments</span></div>
			        	</div>


			        	<div class = "studentstatistics">
			        	    <div class = "staticHeader">
			        	    	<div class = 'profImg'>
									<img title = 'Patent Profile' src = 'img/profiles/p8.jpg' id = parent_img/>
								</div>
							
			        	    	<span><a href = "#">Nehemia</a></span>
			        	    	<span class = 'fromForm'>Form4 B</span>
			        	    </div>

			        	    <div class = 'staticsDraw'>
			        		    <i  class="icofont icofont-chart-line" aria-hidden="true"></i>
			        		</div>
			        		<div class = "commentStatics"><i class ="fa fa-comment"></i><span>Advice/comments</span></div>
			        	</div>


			        	<div class = "studentstatistics">
			        	    <div class = "staticHeader">
			        	    	<div class = 'profImg'>
									<img title = 'Patent Profile' src = 'img/profiles/p8.jpg' id = parent_img/>
								</div>
							
			        	    	<span><a href = "#">Nehemia</a></span>
			        	    	<span class = 'fromForm'>Form4 B</span>
			        	    </div>

			        	    <div class = 'staticsDraw'>
			        		    <i  class="icofont icofont-chart-line" aria-hidden="true"></i>
			        		</div>
			        		<div class = "commentStatics"><i class ="fa fa-comment"></i><span>Advice/comments</span></div>
			        	</div>


			        	<div class = "studentstatistics">
			        	    <div class = "staticHeader">
			        	    	<div class = 'profImg'>
									<img title = 'Patent Profile' src = 'img/profiles/p8.jpg' id = parent_img/>
								</div>
							
			        	    	<span><a href = "#">Nehemia</a></span>
			        	    	<span class = 'fromForm'>Form4 B</span>
			        	    </div>

			        	    <div class = 'staticsDraw'>
			        		    <i  class="icofont icofont-chart-line" aria-hidden="true"></i>
			        		</div>
			        		<div class = "commentStatics"><i class ="fa fa-comment"></i><span>Advice/comments</span></div>
			        	</div>

			        	<div class = "studentstatistics">
			        	    <div class = "staticHeader">
			        	    	<div class = 'profImg'>
									<img title = 'Patent Profile' src = 'img/profiles/p8.jpg' id = parent_img/>
								</div>
							
			        	    	<span><a href = "#">Nehemia</a></span>
			        	    	<span class = 'fromForm'>Form4 B</span>
			        	    </div>

			        	    <div class = 'staticsDraw'>
			        		    <i  class="icofont icofont-chart-line" aria-hidden="true"></i>
			        		</div>
			        		<div class = "commentStatics"><i class ="fa fa-comment"></i><span>Advice/comments</span></div>
			        	</div>

			        	<div class = "studentstatistics">
			        	    <div class = "staticHeader">
			        	    	<div class = 'profImg'>
									<img title = 'Patent Profile' src = 'img/profiles/p8.jpg' id = parent_img/>
								</div>
							
			        	    	<span><a href = "#">Nehemia</a></span>
			        	    	<span class = 'fromForm'>Form4 B</span>
			        	    </div>

			        	    <div class = 'staticsDraw'>
			        		    <i  class="icofont icofont-chart-line" aria-hidden="true"></i>
			        		</div>
			        		<div class = "commentStatics"><i class ="fa fa-comment"></i><span>Advice/comments</span></div>
			        	</div>

			        	<div class = "studentstatistics">
			        	    <div class = "staticHeader">
			        	    	<div class = 'profImg'>
									<img title = 'Patent Profile' src = 'img/profiles/p8.jpg' id = parent_img/>
								</div>
							
			        	    	<span><a href = "#">Nehemia</a></span>
			        	    	<span class = 'fromForm'>Form4 B</span>
			        	    </div>

			        	    <div class = 'staticsDraw'>
			        		    <i  class="icofont icofont-chart-line" aria-hidden="true"></i>
			        		</div>
			        		<div class = "commentStatics"><i class ="fa fa-comment"></i><span>Advice/comments</span></div>
			        	</div>
			        </div>

			    	<!-- teacher parfomance measure by student parfomamce
			    	measure by mauzurio ya darasan
			    	measure by site partipation
			    	allstudent statistics -->
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
			    	<div class = "uplaodDocuments">
			    		<form action="upload.php" method="post" enctype="multipart/form-data">
						    <input type="file" name="fileToUpload" id="fileToUpload">
						   	<input type="submit"  value="Upload file" name="submit">
						</form>
				    </div>

				    <div class = "teacherJobOpp">
				    	<div class = "jobanouncermentWrapper">
					    	<div class = "JopAnnouncment">
					    		<header>HAPPYSKILLFUL SECONDARY SCHOOL</header>
					    		<section>
					    			<p class = "jobaim">
					    			heer we announce job toll ateacher ;;lkjalsdkkfj;laskdf;ladsf;ldas;fjasfkl;askf;lasjfl;askfl;askf'adfsk;ladskf;laskdfl;a;kldfa
					    			fa
					    			f;klafaslfklasfk;asfkaskf;lsakf'aslkf;sdkf'afas
					    			kfa;lfks;ldkfl;akf;laskf'dskl;kf'sadlfkladsfk'askldf
					    			</p>
	                                <div class = "specficationJob">
					    			   <h3>Specification</h3>
	                                   <p> 1. Job expireance 2 years</p>
	                                   <p> 2. Degree older</p>
	                                   <p> 3. Kiswahhili subject</p>
	                                   <p> 4. Form 6 subject</p>
	                                </div>
					    		</section>
					    	</div>
					    	
					    	<div  class ="applyJob" onclick = "swicthVisibility('selectDocument');" >
	                           Choose Document
	                        </div> 


					    	<div class = "selectDocument" id = "selectDocument" >
	                             <div class = "documentCompose" onclick = "openAbsolute('writepad');" >Compose New Document</div>
	                            <div class ="document1">
	                              <span><input type = "checkbox"></span><span class = "chet">Computer Curse Certifiacate</span>
	                            </div>

	                            <div  class ="document2" >
	                               <span><input type = "checkbox"></span><span class = "chet">Form4 Certifacate</span>
	                            </div>

	                            <div  class ="document3" >
	                               <span><input type = "checkbox"></span>
	                               <span class = "chet">application Letter</span>
	                               <span class = "editmod" onclick = "openAbsolute('writepad');">Edit</span>
	                            </div>

	                            <div  class ="document4" >
	                               <span><input type = "checkbox"></span>
	                               <span class = "chet">Curricaum vatee</span>
	                               <span class = "editmod" onclick = "openAbsolute('writepad');" >Edit</span>
	                            </div>

	                            <div class= "SendApplcataion">
	                            	<div id ="Jobapplication">Send Application</div>
	                            </div>
	                        </div>
				    	</div>
				    </div>

				    <div class = "SecreatDocument">
				    	<div class = "cv">
				    	    <span class = "cvTitle">Currucurum Votea</span>
				    	    <span class = "downloadCv">download</span>
				    	</div>

				    	<div class = "cv">
				    	    <span class = "cvTitle">Form 4 certifaicate</span>
				    	    <span class = "downloadCv">download</span>
				    	</div>

				    	<div class = "cv">
				    	    <span class = "cvTitle">Computer Curse</span>
				    	    <span class = "downloadCv">download</span>
				    	</div>

				    	<div class = "cv">
				    	    <span class = "cvTitle">Currucurum Votea</span>
				    	    <span class = "downloadCv">download</span>
				    	</div>
				    </div>
			    </div>

			    <div id = 'use_info'>
                    <div class = 'allAbout'>
						<h3>ABOUT</h3>
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
                    </div>  
			    </div>

				<div class = 'teachersProfile'>
					<h3>YOUR FELLOW TEACHER</h3>
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
					<h3>Book Readlist</h3>
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
					</div>--></div>
				
				<div class = 'extrathing'>
					<h3>My Books <i>(try to compose your book)</i> </h3>
					<div id = 'sucject_lecture' >
						<div id ='imgCover'><a href = 'writebook.php' style = 'display:block; width:100%; height:100%; background:#4dcadd;'>Compose Book</a></div>
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

