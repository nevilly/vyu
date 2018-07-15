<?php include 'include/skeletonTop.php'; ?>
   
<div id = 'Pagewraper'>
    <?php include 'include/sidenavigation.php'; ?>
    <div id = 'side_two' >
		<!--/***********header after login*********/-->
		<?php include 'include/topheader.php'; ?>
		
		<div id='mainWraper'>
			<div class = 'section'>
		        <?php include 'include/profileheader.php'; ?>
		        <h1 class = "headerTitleprofile">ENTERPRENUERSHIP</h1>
				<header id = 'header_teach' class =' enterprenuershiwordheader'>
					<div id ='myWall'       class ='myWall'        onclick = "Ent_hideshow('tmywall');"                       > My Wall         </div>

					<div id ='toCover'      class ='toCover'       onclick = "Ent_hideshow('myBusness');"  > My Busness     </div>
					<div id ='nav_timtabl'  class ='nav_timtabl'   onclick = "Ent_hideshow('timetable');"                    > Agriculture     </div>
					<div id ='nav_pchember' class ='nav_pchember'  onclick = "Ent_hideshow('parentsChember');"               >   Mashamba     </div>
					<div id ='nav_resul'    class ='nav_resul'     onclick = "Ent_hideshow('Result');"                       >     Hisa       </div>
					<div id ='nav_static'   class ='nav_static'    onclick = "Ent_hideshow('Stictix');"                      > Tender         </div>
					<div id ='nav_hist'     class ='nav_hist'      onclick = "Ent_hideshow('examscompose');"                 > Your Tips     </div>
                    <div id ='nav_quiz'     class ='nav_quiz'      onclick = "Ent_hideshow('cv');"                           > CV Job Adv      </div>
                    <div id ='nav_inf'      class ='nav_inf'       onclick = "Ent_hideshow('use_info');"                     > info            </div>
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

				<div id = "myBusness">
	                <div class = "crateUrBznesStory" >
					   <div class ="clickbotom"  onclick = "openAbsolute('ExpireanceShare');">Create History</div>
					</div>

					<div class = "busnesPofExpieance">
								<div class = "dateOfstatBznes">
								    <span>Date Of start Buzness</span>
								    <span>3/3/2002</span>
								</div>

								<div class = "MtajiwaKwanza">
								    <span>Mtaji wa kwanza </span>
								    <span class = "MtajAns">1,000,000</span>
								</div>

							    <div class = "MtajiwaKwanza">
								    <span>Time of Expirence </span>
								    <span class = "MtajAns">6 years</span>
								</div>


	                            <div class = "stepsOfBusness">
								    <h1>My Busness STEPS</h1>
								    <div class = "HatuaZaMwanzo">
								    	<h3>HATUA ZA AWALI</h3>
								    	<div>
								    		<h4>Nauli za Awali</h4>
								    		<p>
								    		    <span>Nauli ya kutoka</span>
								    		     <span class = "exp">ex:dar-ubungo station</span> 
								    		     <span>had</span> 
								    		     <span class = "exp">ex:dar-ubungo station</span> 
								    		     <span> mjin ni sh.</span> 
								    		     <span class = "cost">ex:4000</span>
								    		</p>
								    		<p>
								    		    <span class = "exp">other Instruction</span>
								    		    <span class = "cost">ex: 120,000</span>

								    		</p>

								    	</div>

								    	<div >
								    		<h4>Makazi</h4>
								    		<p>
								    		    <span class = "exp">ex:Guest Mbeya sh.</span>
								    		    <span class = "cost">ex: 10,000tzs</span>
								    		</p>
								    	</div>

								    	<div >
								    		<h4>Chakula</h4>
								    		<p>
								    		    <span class = "exp">Chakula safarin isizidi</span>
								    		    <span class = "cost">ex: 12,000tzs</span>

								    		</p>
								    	</div>
								    </div>


								    <div class = "HatuaZaKati">
								    	<h3>HATUA ZA KATI</h3>

								    	<div >
								    		<h4>AINA ZA MCHELE</h4>
								    	   <p>
								    		    <span class = "exp">Eg:Kitumbo ni sh.</span>
								    		    <span class = "cost">ex: 800tzs</span>

								    		</p>

								    		<p>
								    		    <span class = "exp">Eg:Mchele Mshale ni sh.</span>
								    		    <span class = "cost">ex: 1200tzs</span>

								    		</p>

								    		<p>
								    		    <span class = "exp">Eg:Mchele wa Mbeya ni sh.</span>
								    		    <span class = "cost">ex: 1500tzs</span>

								    		</p>
								    	</div>

								    	<div>
								    		<h4>KUPATA MZIGO</h4>
								    		<p>
								    		    <span class = "exp">Eg:Debe Moja la mchele sh.</span>
								    		    <span class = "cost">ex: 1,000tzs</span>

								    		</p>
								    	</div>


								    	<div >
								    		<h4>AINA ZA USAFIRI</h4>
								    	   <p>
								    		    <span class = "exp">Eg:Malory ni sh.</span>
								    		    <span class = "cost">ex: 800tzs</span>

								    		</p>

								    		<p>
								    		    <span class = "exp">Eg:Mabas ya Mkoa ni sh.</span>
								    		    <span class = "cost">ex: 1200tzs</span>

								    		</p>
								    	</div>



								    	<div >
								    		<h4>WABEBAJI</h4>
								    		
								    		<p>
								    		    <span class = "exp">Eg:upakiaji kwa gunia 1 ni sh.</span>
								    		    <span class = "cost">ex: 500tzs</span>

								    		</p>

								    	</div>

								    	<div >
								    		<h4>USAFIR/USAFIRISHAJI WA MZIGO</h4>
								            <p>
								    		   <span class = "exp">Eg:Lory Linaanza kupokea 1ton na pia inategemea na umbali wa sehem  kwa gunia moja ni sh.</span>
								    		    <span class = "cost">ex: 1500tzs</span>

								    		</p>
	 
							    	     </div>		    	
								    </div>


								    <div class = "HatuaZaMwisho">
								    	<h3>HATUA ZA Mwisho</h3>
								    	<div >
								    	   <h4>MASOKO YA MCHELE</h4>
								    	   <p>
								    		   <span class = "exp">Eg:Tandika,sokoine Street  ni sh.</span>
								    		    <span class = "cost">ex: 800tzs</span>
								    		</p>

								    		<p>
								    		   <span class = "exp">Eg:Mchele Mshale ni sh.</span>
								    		    <span class = "cost">ex: 1200tzs</span>
								    		</p>

								    		<p>
								    		    <span class = "exp">Mchele wa Mbeya ni sh</span>
								    		    <span class = "cost">1500tzs</span>
								    		</p>
								    	</div>

								    	<div >
								    		<h4>Soko Langu</h4>
								    		<p>
								    		    <span class = "exp">Tandika gunia ni sh.</span>
								    		    <span class = "cost">1100tzs</span>
								    		</p>
								    	</div>



								    	<div>
								    		<h4>Gharama Za kushusha Mzigo</h4>
								    		<p>
								    		    <span class = "exp">Kushusha gunia 1 ni sh</span>
								    		    <span class = "cost"> 100tzs</span>
								    		</p>

										</div>



								    
								    	<div >
								    		<h4> jinsi ya kufanya Biashara</h4>
								    		<p>Mzigo wa ukifika  wanaangalia ubora na aina ya mchele</p>
								    		<p>Mnaelewana bei</p>
								    		<p>Unapewa advance ya kwenda kuchukulia mzigo mwingine</p>
								    	</div>
								    </div>
								</div>
								<div class = "sponserdiv">
								   <h4><u>Agriculture Sponsers</u></h4>
									<div class = "suportCo">
									    <span>KILIMO KWANZA CO</span>
									    <div class = "details">
									        <span class = "contact">0765000001</span>
									        <span class = "supported">Ask Support</span>

									      </div>
									</div>

									<div class = "suportCo">
									    <span>KoMESHA NJAA BONGO CO</span>
									    <div class = "details">
									        <span class = "contact">0764313567</span>
									        <span class = "supported">Ask Support</span>

									      </div>
									</div>

									<div class = "suportCo">
									    <span>TWAMBOMBO UMOJA COMPANY</span>
									    <div class = "details">
									        <span class = "contact">0765000001</span>
									        <span class = "supported">Ask Support</span>

									      </div>
									</div>
								</div>

	                            <div class = "shortStory">
	                             	
	                             	<div class = "">
	                             		<h4>My Business History</h4>
	                             		<div>
	                             		   <i><u>Hints</u></i>
	                             		   <div>
		                             		   	<p>1.short story ya Maisha yak</p>
		                             		   	<p>2.Lini ulianza Kupata wazo La Biashara</p>
		                             		   	<p>3.Kitu gan Kilikufanya/shawishi uanze busness</p>
		                             		   	<p>4.Ulianza na Mtaji wa kiasi gan</p>
		                             		   	<p>4.1 Mtaji uliupataje Pataje</p>
		                             		   	<p>5.faida/hasara yake ilkuwa ni kiasi gan</p>
		                             		   	<p>6.Nini kilikuwezesha upate faida/au hasara hyo</p>
		                             		   	<p>7.katika 1-10 unahis mtaji wako umeongeza kiasi gani </p>
		                             		   	<p>8.Vikwazo vp ulivipitia na unavyovptia ambavyo unahis unaweza kueacha biashara</p>
		                             		   	<p>9.Ushauri wako kwa vijana wanaotaka kuiunga na busness</p>
	                             		   </div>
	                             		</div>
	                             	</div>

		                            <div class = "BusnessStoryQstn">
				             		    <div>	

				             		       <p class = "qustion">1.short story ya Maisha yak</p>
				             		       <p class = "answHist">Here Ans</p>
				             		   </div>

				             		   <div>	
				             		       <p class = "qustion">2.Lini ulianza Kupata wazo La Biashara</p>
				             		       <p class = "answHist">Here Ans</p>
				             		   </div>
				             		   		
				             		   	<div>	
				             		       	<p class = "qustion">3.Kitu gan Kilikufanya/shawishi uanze busness</p>	                          
				             		       	<p class = "answHist">Here Ans</p>
				             		   </div>
				         		   

				         		     	<div>	
				             		       	<p class = "qustion">4.Ulianza na Mtaji wa kiasi gan</p>
				                            <p class = "answHist">Here Ans</p>
				             		    </div>

				             		    <div>	
				             		       	<p class = "qustion">4.1 Mtaji uliupataje Pataje</p>
				                            <p class = "answHist">Here Ans</p>
				             		    </div>

				             		    <div>	
				             		       	<p class = "qustion">5.faida/hasara yake ilkuwa ni kiasi gan</p>	                                         
				             		       	<p class = "answHist">Here Ans</p>
				             		    </div>

				                        
				                        <div>	
				             		       	<p class = "qustion">6.Nini kilikuwezesha upate faida/au hasara hyo</p>
				                            <p class = "answHist">Here Ans</p>
				             		    </div>

				                        <div>	
				             		       	<p class = "qustion">7.katika 1-10 unahis mtaji wako umeongeza kiasi gani </p>
				                            <p class = "answHist">Here Ans</p>

				             		    </div>


				                        <div>	
				             		       <p class = "qustion" >8.Vikwazo vp ulivipitia na unavyovptia ambavyo unahis unaweza kueacha biashara</p>
				                           <p class = "answHist">Here Ans</p>
				             		    </div>

				             		  	<div>	
				             		       	<p class = "qustion">9.ushauri wako kwa vijana</p>	                            
				             		        <p class = "answHist">Here Ans</p>

				             		    </div>
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
				    <div class = "zaowraper">
		                <div class = "productWraper">
		                	<h1>NAFAKA PRODUCTS</h1>

		                	<table class = "Product">
		                
								<tr class= 'prdctList ProductHeader'>
									<th class = "productName">Product</th>
									<th class = "prdctCost_sokon">Sokon cost tzs/kg</th>
									<th class =  "prdctCost_shamban" >Shambani Cost tzs/debe</th>
								</tr>
									
								<tr class= 'prdctList ProductBody'>
									<td class = "productName">
										<a href = "mazao.php">Mchele</a>
								    </td>

								    <td class = "prdctCost_sokon">
										<span>1000 sh/</span>
										<span><i class ="fa fa-arrow-down"></i></span>
								    </td>

								    <td class = "prdctCost_shamban">
										<div>
										   <span>400 sh/</span>
										   <span><i class ="fa fa-arrow-up"></i></span>
								        </div>  

								        <div>
										   <span class = "Mji">Mbeya</span>/
										   <span class = "kijj">Kyela</span>
								        </div> 
								    </td>
								</tr>

								<tr class= 'prdctList ProductBody'>
									<td class = "productName">
										<a href = "#">Unga</a>
								    </td>

								    <td class = "prdctCost_sokon">
										<span>800 sh/</span>
										<span><i class ="fa fa-arrow-up"></i></span>
								    </td>

								    <td class = "prdctCost_shamban">
										<div>
										   <span>500 sh/</span>
										   <span><i class ="fa fa-arrow-down"></i></span>
								        </div>  

								        <div>
										   <span class = "Mji">Bukoba</span>/
										   <span class = "kijj">tizinde</span>
								        </div> 
								    </td>
								</tr>
								
								<tr class= 'prdctList ProductBody'>
									<td class = "productName">
										<a href = "#">Ngano</a>
								    </td>

								    <td class = "prdctCost_sokon">
										<span>1500 sh/</span>
										<span><i class ="fa fa-arrow-up"></i></span>
								    </td>

								    <td class = "prdctCost_shamban">
										<div>
										   <span>1000 sh/</span>
										   <span><i class ="fa fa-arrow-up"></i></span>
								        </div>  

								        <div>
										   <span class = "Mji">Arusha</span>/
										   <span class = "kijj">Mkweza</span>
								        </div> 
								    </td>
								</tr>	
						    </table>
		                </div>


		                <div class = "productWraper wrapersecproduct">
		                	<h1>MATUNDA PRODUCTS</h1>

		                	<table class = "Product">
		                
								<tr class= 'prdctList ProductHeader'>
									<th class = "productName">Product</th>
									<th class = "prdctCost_sokon">Sokon cost tzs/kg</th>
									<th class =  "prdctCost_shamban" >Shambani Cost tzs/debe</th>
								</tr>
									
								<tr class= 'prdctList ProductBody'>
									<td class = "productName">
										<a href = "mazao.php">Machungwa</a>
								    </td>

								    <td class = "prdctCost_sokon">
										<span>1000 sh/</span>
										<span><i class ="fa fa-arrow-down"></i></span>
								    </td>

								    <td class = "prdctCost_shamban">
										<div>
										   <span>400 sh/</span>
										   <span><i class ="fa fa-arrow-up"></i></span>
								        </div>  

								        <div>
										   <span class = "Mji">Mbeya</span>/
										   <span class = "kijj">Kyela</span>
								        </div> 
								    </td>
								</tr>

								<tr class= 'prdctList ProductBody'>
									<td class = "productName">
										<a href = "#">Matikit</a>
								    </td>

								    <td class = "prdctCost_sokon">
										<span>800 sh/</span>
										<span><i class ="fa fa-arrow-up"></i></span>
								    </td>

								    <td class = "prdctCost_shamban">
										<div>
										   <span>500 sh/</span>
										   <span><i class ="fa fa-arrow-down"></i></span>
								        </div>  

								        <div>
										   <span class = "Mji">Bukoba</span>/
										   <span class = "kijj">tizinde</span>
								        </div> 
								    </td>
								</tr>
								
								<tr class= 'prdctList ProductBody'>
									<td class = "productName">
										<a href = "#">Ndizi</a>
								    </td>

								    <td class = "prdctCost_sokon">
										<span>1500 sh/</span>
										<span><i class ="fa fa-arrow-up"></i></span>
								    </td>

								    <td class = "prdctCost_shamban">
										<div>
										   <span>1000 sh/</span>
										   <span><i class ="fa fa-arrow-up"></i></span>
								        </div>  

								        <div>
										   <span class = "Mji">Arusha</span>/
										   <span class = "kijj">Mkweza</span>
								        </div> 
								    </td>
								</tr>	
						    </table>
		                </div>


		                <div class = "productWraper wrapersecproduct">
		                	<h1>VIUNGO PRODUCTS</h1>

		                	<table class = "Product">
		                
								<tr class= 'prdctList ProductHeader'>
									<th class = "productName">Product</th>
									<th class = "prdctCost_sokon">Sokon cost tzs/kg</th>
									<th class =  "prdctCost_shamban" >Shambani Cost tzs/debe</th>
								</tr>
									
								<tr class= 'prdctList ProductBody'>
									<td class = "productName">
										<a href = "mazao.php">Nyanya</a>
								    </td>

								    <td class = "prdctCost_sokon">
										<span>1000 sh/</span>
										<span><i class ="fa fa-arrow-down"></i></span>
								    </td>

								    <td class = "prdctCost_shamban">
										<div>
										   <span>400 sh/</span>
										   <span><i class ="fa fa-arrow-up"></i></span>
								        </div>  

								        <div>
										   <span class = "Mji">Mbeya</span>/
										   <span class = "kijj">Kyela</span>
								        </div> 
								    </td>
								</tr>

								<tr class= 'prdctList ProductBody'>
									<td class = "productName">
										<a href = "#"Vitunguu</a>
								    </td>

								    <td class = "prdctCost_sokon">
										<span>800 sh/</span>
										<span><i class ="fa fa-arrow-up"></i></span>
								    </td>

								    <td class = "prdctCost_shamban">
										<div>
										   <span>500 sh/</span>
										   <span><i class ="fa fa-arrow-down"></i></span>
								        </div>  

								        <div>
										   <span class = "Mji">Bukoba</span>/
										   <span class = "kijj">tizinde</span>
								        </div> 
								    </td>
								</tr>
								
								<tr class= 'prdctList ProductBody'>
									<td class = "productName">
										<a href = "#">Pilipili</a>
								    </td>

								    <td class = "prdctCost_sokon">
										<span>1500 sh/</span>
										<span><i class ="fa fa-arrow-up"></i></span>
								    </td>

								    <td class = "prdctCost_shamban">
										<div>
										   <span>1000 sh/</span>
										   <span><i class ="fa fa-arrow-up"></i></span>
								        </div>  

								        <div>
										   <span class = "Mji">Arusha</span>/
										   <span class = "kijj">Mkweza</span>
								        </div> 
								    </td>
								</tr>	
						    </table>
		                </div>
                        
                        <div class = "productWraper wrapersecproduct">
		                	<h1>UVUVI PRODUCTS</h1>

		                	<table class = "Product">
		                
								<tr class= 'prdctList ProductHeader'>
									<th class = "productName">Product</th>
									<th class = "prdctCost_sokon">Sokon cost tzs/kg</th>
									<th class =  "prdctCost_shamban" >Shambani Cost tzs/debe</th>
								</tr>
									
								<tr class= 'prdctList ProductBody'>
									<td class = "productName">
										<a href = "mazao.php">Dagaa</a>
								    </td>

								    <td class = "prdctCost_sokon">
										<span>1000 sh/</span>
										<span><i class ="fa fa-arrow-down"></i></span>
								    </td>

								    <td class = "prdctCost_shamban">
										<div>
										   <span>400 sh/</span>
										   <span><i class ="fa fa-arrow-up"></i></span>
								        </div>  

								        <div>
										   <span class = "Mji">Mbeya</span>/
										   <span class = "kijj">Kyela</span>
								        </div> 
								    </td>
								</tr>

								<tr class= 'prdctList ProductBody'>
									<td class = "productName">
										<a href = "#">Samaki Sato</a>
								    </td>

								    <td class = "prdctCost_sokon">
										<span>800 sh/</span>
										<span><i class ="fa fa-arrow-up"></i></span>
								    </td>

								    <td class = "prdctCost_shamban">
										<div>
										   <span>500 sh/</span>
										   <span><i class ="fa fa-arrow-down"></i></span>
								        </div>  

								        <div>
										   <span class = "Mji">Bukoba</span>/
										   <span class = "kijj">tizinde</span>
								        </div> 
								    </td>
								</tr>
								
								<tr class= 'prdctList ProductBody'>
									<td class = "productName">
										<a href = "#">Kambale</a>
								    </td>

								    <td class = "prdctCost_sokon">
										<span>1500 sh/</span>
										<span><i class ="fa fa-arrow-up"></i></span>
								    </td>

								    <td class = "prdctCost_shamban">
										<div>
										   <span>1000 sh/</span>
										   <span><i class ="fa fa-arrow-up"></i></span>
								        </div>  

								        <div>
										   <span class = "Mji">Arusha</span>/
										   <span class = "kijj">Mkweza</span>
								        </div> 
								    </td>
								</tr>	
						    </table>
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

			        <div class = "tenderTime">
	                    <div class = "uploadDiv">
	                        <div class = "createTender" onclick = "openAbsolute('tender');">Create Tender</div>
	                    </div>

	                    <div class = "tenderWraper">
	                    	kupokea tender
	                    	kutuma tenda
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
        

        <div id = "ExpireanceShare" class = "ExpireanceShare"> 
         
            <div class = "expirienceHistory">
           
	            <div id = 'close' onclick = "closeDiv('ExpireanceShare');">
	                <i class = 'fa fa-close'></i>
	            </div>

	            <div class = "wraper">
	               <div class = "xoverflow">

		            	<div class = "Expirence_prof">
		            	    <div class = 'profImg'>
								<img title = 'Patent Profile' src = 'img/profiles/p8.jpg' id = parent_img/>
							</div>	

							<div class = "detai">
								<span class = "name">NEHEMIA MWANSASU</span>
								<span class = "period">6 YEARS </span>
								<span class = "exp"> OF EXPIRENCE</span>

							</div>	            	
						</div>

						<div class = "busnesPofExpieance">
							<div class = "dateOfstatBznes">
							    <span>Date Of start Buzness</span>
							    <span><input type="text" class = "dat_inpt startBznesDate"></span>
							</div>

							<div class = "MtajiwaKwanza">
							    <span>Mtaji wa kwanza </span>
							    <span class = "MtajAns"><input type="text" class = "dat_inpt Bzness_firstMtaj"></span>
							</div>

						    <div class = "MtajiwaKwanza">
							    <span>Time of Expirence </span>
							    <span class = "MtajAns"><input type="text" class = "dat_inpt Bzness_firstMtaj"></span>
							</div>


                            <div class = "stepsOfBusness">
							    <h1>My Busness STEPS</h1>
							    <div class = "HatuaZaMwanzo">
							    	<h3>HATUA ZA AWALI</h3>
							    	<div>
							    		<h4>Nauli za Awali</h4>
							    		<p>
							    		    <span>Nauli ya kutoka</span>
							    		     <span><input type="text" class = "dat_inpt Bzness_firstplace" placeholder="ex:dar-ubungo station"></span> 
							    		     <span>had</span> 
							    		     <span><input type="text" class = "dat_inpt Bzness_secplace"></span> 
							    		     <span> mjin ni sh.</span> 
							    		     <span><input type="text" class = "dat_inpt Bzness_cash" placeholder="ex:4000"></span>
							    		</p>
							    		<p>
							    		    <span><input type="text" class = "dat_inpt Bzness_otherInstruction" placeholder="other Instruction"></span>
							    		    <span><input type="text" class = "dat_inpt Bzness_cash" placeholder="ex: 120,000"></span>

							    		</p>

							    	</div>

							    	<div >
							    		<h4>Makazi</h4>
							    		<p>
							    		    <span><input type="text" class = "dat_inpt Bzness_otherInstruction" placeholder="ex:Guest Mbeya sh."></span>
							    		    <span><input type="text" class = "dat_inpt Bzness_cash" placeholder="ex: 10,000tzs"></span>
							    		</p>
							    	</div>

							    	<div >
							    		<h4>Chakula</h4>
							    		<p>inategemea ila consta menu katika usafiri ni sh. 10000</p>
							    		<p>gharama za chakula znategemea na uwezo wak wa kula na silu utakazo kaa</p>

							    		<p>
							    		    <span><input type="text" class = "dat_inpt Bzness_otherInstruction" placeholder="Chakula safarin isizidi"></span>
							    		    <span><input type="text" class = "dat_inpt Bzness_cash" placeholder="ex: 12,000tzs"></span>

							    		</p>
							    	</div>
							    </div>


							    <div class = "HatuaZaKati">
							    	<h3>HATUA ZA KATI</h3>

							    	<div >
							    		<h4>AINA ZA MCHELE</h4>
							    	   <p>
							    		    <span><input type="text" class = "dat_inpt Bzness_otherInstruction" placeholder="Eg:Kitumbo ni sh."></span>
							    		    <span><input type="text" class = "dat_inpt Bzness_cash" placeholder="ex: 800tzs"></span>

							    		</p>

							    		<p>
							    		    <span><input type="text" class = "dat_inpt Bzness_otherInstruction" placeholder="Eg:Mchele Mshale ni sh."></span>
							    		    <span><input type="text" class = "dat_inpt Bzness_cash" placeholder="ex: 1200tzs"></span>

							    		</p>

							    		<p>
							    		    <span><input type="text" class = "dat_inpt Bzness_otherInstruction" placeholder="Eg:Mchele wa Mbeya ni sh."></span>
							    		    <span><input type="text" class = "dat_inpt Bzness_cash" placeholder="ex: 1500tzs"></span>

							    		</p>
							    	</div>

							    	<div>
							    		<h4>KUPATA MZIGO</h4>
							    		<p>Naonana na supplier wangu sokon tunaelewana na bei</p>
							    		<p>Mbeya kyela adi tunduma ni sh. 2000</p>

							    		<p>
							    		    <span><input type="text" class = "dat_inpt Bzness_otherInstruction" placeholder="Eg:Debe Moja la mchele sh."></span>
							    		    <span><input type="text" class = "dat_inpt Bzness_cash" placeholder="ex: 1,000tzs"></span>

							    		</p>
							    	</div>


							    	<div >
							    		<h4>AINA ZA USAFIRI</h4>
							    	   <p>
							    		    <span><input type="text" class = "dat_inpt Bzness_otherInstruction" placeholder="Eg:Malory ni sh."></span>
							    		    <span><input type="text" class = "dat_inpt Bzness_cash" placeholder="ex: 800tzs"></span>

							    		</p>

							    		<p>
							    		    <span><input type="text" class = "dat_inpt Bzness_otherInstruction" placeholder="Eg:Mabas ya Mkoa ni sh."></span>
							    		    <span><input type="text" class = "dat_inpt Bzness_cash" placeholder="ex: 1200tzs"></span>

							    		</p>
							    	</div>



							    	<div >
							    		<h4>WABEBAJI</h4>
							    		<p>Gharama za kupakia mzigo gunia la mchele moja kg100 ni sh.1000 inategemea</p>
							    		<p>
							    		    <span><input type="text" class = "dat_inpt Bzness_otherInstruction" placeholder="Eg:upakiaji kwa gunia 1 ni sh."></span>
							    		    <span><input type="text" class = "dat_inpt Bzness_cash" placeholder="ex: 500tzs"></span>

							    		</p>

							    	</div>

							    	<div >
							    		<h4>USAFIR/USAFIRISHAJI WA MZIGO</h4>
							    		<p>Gharama za kupakia mzigo gunia la mchele moja kg100 ni sh.1000 inategemea</p>
							    		<p>
							    		    <span><input type="text" class = "dat_inpt Bzness_otherInstruction" placeholder="Eg:Lory Linaanza kupokea 1ton na pia inategemea na umbali wa sehem  kwa gunia moja ni sh."></span>
							    		    <span><input type="text" class = "dat_inpt Bzness_cash" placeholder="ex: 1500tzs"></span>

							    		</p>
 
						    	     </div>
										    	
							    </div>


							    <div class = "HatuaZaMwisho">
							    	<h3>HATUA ZA Mwisho</h3>
							    	<div >
							    	   <h4>MASOKO YA MCHELE</h4>
							    	   <p>
							    		    <span><input type="text" class = "dat_inpt Bzness_otherInstruction" placeholder="Eg:Tandika,sokoine Street  ni sh."></span>
							    		    <span><input type="text" class = "dat_inpt Bzness_cash" placeholder="ex: 800tzs"></span>
							    		</p>

							    		<p>
							    		    <span><input type="text" class = "dat_inpt Bzness_otherInstruction" placeholder="Eg:Mchele Mshale ni sh."></span>
							    		    <span><input type="text" class = "dat_inpt Bzness_cash" placeholder="ex: 1200tzs"></span>
							    		</p>

							    		<p>
							    		    <span><input type="text" class = "dat_inpt Bzness_otherInstruction" placeholder="Eg:Mchele wa Mbeya ni sh."></span>
							    		    <span><input type="text" class = "dat_inpt Bzness_cash" placeholder="ex: 1500tzs"></span>
							    		</p>
							    	</div>

							    	<div >
							    		<h4>Soko Langu</h4>
							    		<p>
							    		    <span><input type="text" class = "dat_inpt Bzness_otherInstruction" placeholder="Eg:Tandika gunia ni sh."></span>
							    		    <span><input type="text" class = "dat_inpt Bzness_cash" placeholder="ex: 1100tzs"></span>
							    		</p>
							    	</div>



							    	<div>
							    		<h4>Gharama Za kushusha Mzigo</h4>
							    		<p>
							    		    <span><input type="text" class = "dat_inpt Bzness_otherInstruction" placeholder="Eg:Kushusha gunia 1 ni sh."></span>
							    		    <span><input type="text" class = "dat_inpt Bzness_cash" placeholder="ex: 100tzs"></span>
							    		</p>

									</div>



							    
							    	<div >
							    		<h4> jinsi ya kufanya Biashara</h4>
							    		<p>Mzigo wa ukifika  wanaangalia ubora na aina ya mchele</p>
							    		<p>Mnaelewana bei</p>
							    		<p>Unapewa advance ya kwenda kuchukulia mzigo mwingine</p>

							    		<p class = "answHist"><textarea></textarea></p>

							    	</div>
							    </div>
							</div>
							<div class = "sponserdiv">
								<div>KILIMO KWANZA CO</div>
								<div> KOMESHA NJAA LMTD</div>
							</div>

                            <div class = "shortStory">
                             	
                             	<div class = "">
                             		<h4>My Business History</h4>
                             		<div>
                             		   <i><u>Hints</u></i>
                             		   <div>
	                             		   	<p>1.short story ya Maisha yak</p>
	                             		   	<p>2.Lini ulianza Kupata wazo La Biashara</p>
	                             		   	<p>3.Kitu gan Kilikufanya/shawishi uanze busness</p>
	                             		   	<p>4.Ulianza na Mtaji wa kiasi gan</p>
	                             		   	<p>4.1 Mtaji uliupataje Pataje</p>
	                             		   	<p>5.faida/hasara yake ilkuwa ni kiasi gan</p>
	                             		   	<p>6.Nini kilikuwezesha upate faida/au hasara hyo</p>
	                             		   	<p>7.katika 1-10 unahis mtaji wako umeongeza kiasi gani </p>
	                             		   	<p>8.Vikwazo vp ulivipitia na unavyovptia ambavyo unahis unaweza kueacha biashara</p>
	                             		   	<p>9.Ushauri wako kwa vijana wanaotaka kuiunga na busness</p>
                             		   </div>
                             		</div>
                             	</div>

	                            <div class = "BusnessStoryQstn">
			             		    <div>	

			             		       <p class = "qustion">1.short story ya Maisha yak</p>
			             		       <p class = "answHist"><textarea></textarea></p>
			             		   </div>

			             		   <div>	
			             		       <p class = "qustion">2.Lini ulianza Kupata wazo La Biashara</p>
			             		       <p class = "answHist"><textarea></textarea></p>
			             		   </div>
			             		   		
			             		   	<div>	
			             		       	<p class = "qustion">3.Kitu gan Kilikufanya/shawishi uanze busness</p>	                          
			             		       	<p class = "answHist"><textarea></textarea></p>
			             		   </div>
			         		   

			         		     	<div>	
			             		       	<p class = "qustion">4.Ulianza na Mtaji wa kiasi gan</p>
			                            <p class = "answHist"><textarea></textarea></p>
			             		    </div>

			             		    <div>	
			             		       	<p class = "qustion">4.1 Mtaji uliupataje Pataje</p>
			                            <p class = "answHist"><textarea></textarea></p>
			             		    </div>

			             		    <div>	
			             		       	<p class = "qustion">5.faida/hasara yake ilkuwa ni kiasi gan</p>	                                         
			             		       	<p class = "answHist"><textarea></textarea></p>
			             		    </div>

			                        
			                        <div>	
			             		       	<p class = "qustion">6.Nini kilikuwezesha upate faida/au hasara hyo</p>
			                            <p class = "answHist"><textarea></textarea></p>
			             		    </div>

			                        <div>	
			             		       	<p class = "qustion">7.katika 1-10 unahis mtaji wako umeongeza kiasi gani </p>
			                            <p class = "answHist"><textarea></textarea></p>
			             		    </div>


			                        <div>	
			             		       <p class = "qustion" >8.Vikwazo vp ulivipitia na unavyovptia ambavyo unahis unaweza kueacha biashara</p>
			                           <p class = "answHist"><textarea></textarea></p>
			             		    </div>

			             		  	<div>	
			             		       	<p class = "qustion">9.ushauri wako kwa vijana</p>	                            
			             		       	<p class = "answHist"><textarea></textarea></p>
			             		    </div>
	       		   	            </div>  
	       		   	        </div>
                        </div>
					</div>


	               </div>
                </div>

            </div>
		</div>


        <div id = "tender" class = "tenderUpload"> 
         
            <div class = "uploadBox">
	            <div id = 'close' onclick = "closeDiv('tender');">
	                <i class = 'fa fa-close'></i>
	            </div>

	            <div class = "post_place">
	                <header>
	                    <span>TENDA YA</span><span>
	                    <input type = "text" placeholder="MCHELE GUNIA 100"></span> 
	                </header>
            	    <textarea></textarea>
                </div>

                <div class = "uploadbottons">

                    <div class = "postTime" onclick="swicthVisibility('photosdive');">
                        <i class = "fa fa-camera"></i>
                    </div>

                    <div class = "postTime sendButon">
                        <i class = "fa fa-send"></i>
                    </div>
                </div>

            </div>
            
            <div id = "photosdive" class = "photosdive">
             	<div class = "photoDive photowalldivec">
             	    <div class = "xoverflow">
             		    <div class = "displphoto"><img src ='img/profiles/p4.jpg' ></div>
                    </div>
             	</div>
             	<div class = "diviceupload"> 
                     <div class = "divecform">
                     	<form action="#" method="post" enctype="multipart/form-data">
						    <input type="file" name="fileToUpload" id="fileToUpload">
						   	<input type="submit"  value="Upload file" name="submit">
						</form>
                     </div>
                     <div class = "divcphotoUploaded photowalldivec">
                     	<div class = "xoverflow">
             		    <div class = "displphoto"><img src ='img/profiles/p4.jpg' ></div>
                </div>

                     </div>
             	</div>

            </div>
        </div>



    </div>
</div>
    
</div>

<?php include 'include/SkelotonBottom_login.php'; ?>

