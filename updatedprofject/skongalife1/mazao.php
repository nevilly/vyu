<?php include 'include/skeletonTop.php'; ?>
   
<div id = 'Pagewraper'>
    <?php include 'include/sidenavigation.php'; ?>
    <div id = 'side_two' >	
		<!--/***********header after login*********/-->
		<?php include 'include/topheader.php'; ?>
		
		<div id='mainWraper'>
			<div class = 'section'>
		        <?php include 'include/profileheader.php'; ?>
		        <h1 class = 'producttitl'>MCHELE</h1>
		        <div class = "headerproduct">
		        	<div class= "frstDiv" onclick = "dispVisibility('bisahara','kilimo');" >Kulima Productma</div>
		        	<div class= "scDiv"   onclick = "dispVisibility('kilimo','bisahara');"  >Mfanya Biashara ProductNmae</div>
		        </div>

		        <div  id = "kilimo">
		        	<div class = "Mtaji">
                       <div><span class = "explan">Mtaji wa kulima cha Mpuga</span> <span class = "ans"> 2,000,000</span></div>       
                       <div ><span class = "explan">MtajiEstatemete faid</span>  <span class = "ans"> 1,000,000 </span> </div>         
		        	</div>

		        	 <div class = "Duration">
		        	    <h3>Duration</h3>
                        <div class = "totalDuration">
                            <span class = "explan">Muda wa Kilimo</span><span class = "Ans">3month-7month</span>
                             <span class = "explan">Total Monthes</span><span class = "Ans">4month</span>

                        </div>

                        <div class = "periodDuratoin">
                            <h4 class = "">PERIOD CLASS</h4>
                            <span class = "explan"> Kulima </span><span class = "Ans">first 10day  in month per ecka</span>

                            <span class = "explan"> kupanda </span><span class = "Ans">10day per ecka</span>
                            
                            <span class = "explan"> kumwagilia </span><span class = "Ans"> everyday day per ecka</span>

                            <span class = "explan"> dawa </span><span class = "Ans">every 10day  in month per ecka</span>

                            <span class = "explan"> kuvuna </span><span class = "Ans">last 10day  in last month </span>
                        </div>
		        	</div>

		        	<div class = "rowMaterials">
		        		<h3>Row Materials</h3>
		        		<table class = "rowMaterialTable">
		        			<tbody>
		        			    <tr>
		        				    <th>Row Material</th>
		        				    <th>Cost</th>
		        				</tr>

		        				<tr>
		        				    <td>Shamba kukod</td>
		        				    <td>1000tz per Ecka</td>
		        				</tr>

		        				<tr>
		        				    <td>kukodi trecta</td>
		        				    <td>20,000 per day</td>
		        				</tr>

		        				<tr>
		        				    <td>Mbolea</td>
		        				    <td>3000tzs per kg ecka 1</td>
		        				</tr>
                                
                                <tr>
		        				    <td>vislafulet vya mavuno</td>
		        				    <td>1000tzs per kg </td>
		        				</tr>


		        			</tbody>
		        		</table>
		        	</div>
                     
                    <div class = "MkoaArdhi">
                        <h4>ARDHI/MKOA</h4>   

                        <table class = "ardhi_header">
                        	<tbody>
                        		<tr>
                        			<td class = "mkoa" onclick = "hideshow_mkoa('wilayaOne');">MBEYA</td>
                        			<td class = "mkoa" onclick = "hideshow_mkoa('wilayaTwo');">MOROGORO</td>
                        			<td class = "mkoa" onclick = "hideshow_mkoa('wilayaThree');" >TABORA</td>
                        		</tr>
                        	</tbody>
                        </table>

                		<div id = "wilayaOne" class = "wilaya">
                			<span>Kyela</span>
                			<span >Tukuyu</span>
                			<span>mbozi</span>
                		</div> 

                		<div id = "wilayaTwo" class = "wilaya">
                			<span>moro3</span>
                			<span >moro2</span>
                			<span>mor1</span>
                		</div> 

                		<div  id = "wilayaThree" class = "wilaya">
                			<span>Kyela</span>
                			<span >Tukuyu</span>
                			<span>mbozi</span>
                		</div>   
                    </div>

                    <div class = "yalimoMkoan">
                    	
                    	<div class = "famaersExpirience">
	                    	<h4>Famars Expirience</h4>
	                    	<div class = "overflowY">
		                    	<div class = "pofile" onclick="openAbsolute('ExpireanceShare');">
		                    		<div class = 'profImg'>
										<img title = 'Patent Profile' src = 'img/profiles/p8.jpg' id = parent_img/>
									</div>
		                            
		                            <div class = "detai">
										<div class = "name">Farid Mustafa</div>
										<div class = "exp">3yrs Expireance</div>
									</div>
		                    	</div>

		                    	<div class = "pofile">
		                    		<div class = 'profImg'>
										<img title = 'Patent Profile' src = 'img/profiles/p8.jpg' id = parent_img/>
									</div>
		                            
		                            <div class = "detai">
										<div class = "name">Mwakatumbula Rweghoshorwa</div>
										<div class = "exp">3yrs Expireance</div>
									</div>
		                    	</div>
	                            
	                            <div class = "pofile">
		                    		<div class = 'profImg'>
										<img title = 'Patent Profile' src = 'img/profiles/p8.jpg' id = parent_img/>
									</div>
		                            
		                            <div class = "detai">
										<div class = "name">Nehemia Mwansasu</div>
										<div class = "exp">6yrs Expireance</div>
									</div>
		                    	</div>

	                    	</div>
	                    </div>
                    	
                    	<div id = "sifaArdh" class = "sifaArdh">
                    		<h4>Ubora Wa ardhi ya <span>Kyela</span></h4>
                    		<div>
                    			<p>Inarutuba nying ila inategemea imerimwa mara ngap</p>
                    			<p>Mbolea ya mavi ya kuku inakolea sana katka ardhi ya kyela</p>
                    			<p>N nzuri kwa kilomo cha mpunga</p>
                    			<p>
                    				<div class = "photoArdh">
                    					Picha ya Ardh au udongo
                    				</div>
                    			</p>
                    		</div>
                            
                            <div >
                    		    <h4>Udhaifu wa Ardhi </h4>
                    			<p>Inarutuba nying ila inategemea imerimwa mara ngap</p>
                    			<p>Mbolea ya mavi ya kuku inakolea sana katka ardhi ya kyela</p>
                    			<p>N nzuri kwa kilomo cha mpunga</p>
                    		</div>


                    		<div>
                    		    <h4>Hatua za Kuzingatia Kukod Shamba/eneo La kulimia</h4>
                    		    <div class = "famaersExpirience">
	                    	<h4>Wenye Mashamba Ya kukod</h4>
	                    	<div class = "overflowY">
		                    	<div class = "pofile">
		                    		<div class = 'profImg'>
										<img title = 'Patent Profile' src = 'img/profiles/p8.jpg' id = parent_img/>
									</div>
		                            
		                            <div class = "detai">
										<div class = "name">Farid Mustafa</div>
										<div class = "exp">Contact: 06541994</div>
									</div>
		                    	</div>

		                    	<div class = "pofile">
		                    		<div class = 'profImg'>
										<img title = 'Patent Profile' src = 'img/profiles/p8.jpg' id = parent_img/>
									</div>
		                            
		                            <div class = "detai">
										<div class = "name">Mwakatumbula Rweghoshorwa</div>
										<div class = "exp">Contact: 06541994</div>
									</div>
		                    	</div>
	                            
	                            <div class = "pofile">
		                    		<div class = 'profImg'>
										<img title = 'Patent Profile' src = 'img/profiles/p8.jpg' id = parent_img/>
									</div>
		                            
		                            <div class = "detai">
										<div class = "name">Nehemia Mwansasu</div>
										<div class = "exp">Contact: 06541994</div>
									</div>
		                    	</div>
	                    	</div>
	                       
	                        </div>
                    	

                    			<p>Inarutuba nying ila inategemea imerimwa mara ngap</p>
                    			<p>Mbolea ya mavi ya kuku inakolea sana katka ardhi ya kyela</p>
                    			<p>N nzuri kwa kilomo cha mpunga</p>
                    		</div>

                    		<div>
                    		    <h4>kukod Wafanyakazi Kyela</h4>
                    		    <div class = "famaersExpirience">
	                    	<h4>Wakulima Wa Kulipwa Expirience</h4>
	                    	<div class = "overflowY">
		                    	<div class = "pofile">
		                    		<div class = 'profImg'>
										<img title = 'Patent Profile' src = 'img/profiles/p8.jpg' id = parent_img/>
									</div>
		                            
		                            <div class = "detai">
										<div class = "name">Farid Mustafa</div>
										<div class = "exp">3yrs Expireance</div>
									</div>
		                    	</div>

		                    	<div class = "pofile">
		                    		<div class = 'profImg'>
										<img title = 'Patent Profile' src = 'img/profiles/p8.jpg' id = parent_img/>
									</div>
		                            
		                            <div class = "detai">
										<div class = "name">Mwakatumbula Rweghoshorwa</div>
										<div class = "exp">3yrs Expireance</div>
									</div>
		                    	</div>
	                            
	                            <div class = "pofile">
		                    		<div class = 'profImg'>
										<img title = 'Patent Profile' src = 'img/profiles/p8.jpg' id = parent_img/>
									</div>
		                            
		                            <div class = "detai">
										<div class = "name">Nehemia Mwansasu</div>
										<div class = "exp">6yrs Expireance</div>
									</div>
		                    	</div>
	                    	</div>
	                        
	                        </div>
                    			<p>Inarutuba nying ila inategemea imerimwa mara ngap</p>
                    			<p>Mbolea ya mavi ya kuku inakolea sana katka ardhi ya kyela</p>
                    			<p>N nzuri kwa kilomo cha mpunga</p>
                    		</div>

                    		<div>
                    		    <h4>Aina za Mpunga bora /Photo</h4>
                    			<p>Inarutuba nying ila inategemea imerimwa mara ngap</p>
                    			<p>Mbolea ya mavi ya kuku inakolea sana katka ardhi ya kyela</p>
                    			<p>N nzuri kwa kilomo cha mpunga</p>
                    		</div>

                    		<div class = "sponserdiv">
							   <h4><u style = "color:white;">Agriculture Sponsers</u></h4>
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
                    	</div>

                    </div>

		        </div>
		       


		        <div  id = "bisahara">
		        	gdgdgd
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

		  <!--          <  	<div>tarehe ya kuanza Biashara hiyo</div>
		            	<div>Kiasi cha Mtaji alichoa anza nacho</div>
		            	<div>Faida aliyo pata kutokana na mtaji huo</div>

		            	<div>Mtaji alipata pata je(kwa ajili ya kusaidia wengien)</div>
		            	<div>Challanges alixo zpata</div>
		            	<div>Nini kilichosababisha /mnyenyua ajiusishe na biashara(history kabla ya biashara)</div>

		            	<div>Jinsi gani anavyo ifanya biashara yake (step by step)</div>
		            	    <div>Mwanzo ukoje</div>
		            	    <div>kati pakoje</div>
		            	    <div>Mwisho ukoje</div>
		            	tarehe ya kuanza Biashara hiyo -->
 

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

                 </div>

	               </div>
                </div>

            </div>
		</div>
</div>
    
</div>

<?php include 'include/SkelotonBottom_login.php'; ?>

