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
		       <span class = 'subject_title'>ALL NOTIFICATION</span>
				
                 <div class ='gD Warper'>
                 	<div class = "despl">
						        <div class = "searchprof"> 
						          <div class = 'profImg'>
						            <img title = 'Patent Profile' src = 'img/profiles/p8.jpg' id = parent_img/>
						          </div>  
						        </div>

						        <div class = "detdispl belldetail">
						          <span class = "name">Nehemia Mwansasu</span>
						          <span class = "jibu">Answered your qustion</span>
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


        <div id = "tender" class = "absoluteDiv tenderUpload"> 
         
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
             	    <h4>PRODUCT FOR SELL</h4>
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
             		    <div class = "displphoto"><img src ='img/profiles/p4.jpg'></div>
                </div>

                     </div>
             	</div>
            </div>
        </div>
    </div>
</div>
    
</div>

<?php include 'include/SkelotonBottom_login.php'; ?>

