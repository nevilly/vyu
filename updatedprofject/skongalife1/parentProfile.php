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
					<div id ='myWall'       class ='myWall'        onclick = "hideshow('myWall');"                       > My Wall         </div>
					<div id ='toCover'      class ='toCover'       onclick = "hideshow('check_covered_topic_teacher');"  > Topic Cover     </div>
					<div id ='nav_timtabl'  class ='nav_timtabl'   onclick = "hideshow('timetable');"                    > Time table      </div>
					<div id ='nav_pchember' class ='nav_pchember'  onclick = "hideshow('parentsChember');"               > Parent Chember  </div>
					<div id ='nav_resul'    class ='nav_resul'     onclick = "hideshow('nav_resul');"                    > Result          </div>
					<div id ='nav_static'   class ='nav_static'    onclick = "hideshow('nav_static');"                   > Statics         </div>
					<div id ='nav_hist'     class ='nav_hist'      onclick = "hideshow('nav_hist');"                     > History         </div>
                    <div id ='nav_quiz'     class ='nav_quiz'      onclick = "hideshow('nav_quiz');"                     > Quizes          </div>
                    <div id ='nav_inf'      class ='nav_inf'       onclick = "hideshow('nav_inf');"                      > info            </div>
				</header>
				
					
				<div class = 'Myfucults'>
					<div id = 'check_covered_topic_teacher'>
						<div id = 'topic' onclick = "swicthVisibility('topic_checkBox');">TOPICS TO COVER</div>
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
						</div></div>
                    
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
                        </div></div>
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
									
								<div class = 'AllhomeWorkPlaceList'>
									<span >Create Homework</span>
								</div>
							</div>
						</div>
						
					</div></div>
				
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
					</div></div>
				
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
		
		</div>
    </div>
    
</div>

	<?php include 'include/skelotonBottom_login.php'; ?>