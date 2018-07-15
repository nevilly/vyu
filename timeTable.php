 
<?php  include 'include/allprofilefunc.php'; ?>
<?php include 'include/skeletonTop.php'; ?>
   
<div id = 'Pagewraper'>
    <?php include 'include/sidenavigation.php'; ?>
    <div id = 'side_two' >
		<!--/***********header after login*********/-->
		<?php include 'include/topheader.php'; ?>
		
		<div id='mainWraper'>
			<div class = 'section'>
		        <?php include 'include/profileheader.php'; ?>
                 
                <div class="resultWraperPlugin timetableplugin">
                    <h2>ALL TIMETABLES</h2>
	                
                     <div class = "todayTimeTableAlert">
                           <div class = "headerTmTable">
	                           <h3 class = "todayTm">Today TimeTable</h3>
	                           <h3 class = "TomorTm">Tommorow TimeTable</h3>
                           </div>

                           <div class = "todayTmTableBody">
                               <div class = "showsubject">
                                    <span class = "subject">BIOS</span>
                                    
                                    <span class = "teachProf">
                                       <a href = "#">
	                                    	<div class = 'profImg'>
												<img src ='img/profiles/p4.jpg'>
											</div>

											<div class = "Tmdetails">
											    <span class = "titletm">By teacher</span>
											    <span class = "Nametm">Nitike Mwansasu</span>
											</div>
										</a>
                                    </span>
                                </div>

                                <div class = "tmMidlewraper">
	                               	<span class = "theTime">8:00 am</span>
	                               	<span class = "theTimeremain">
	                               	    <span>Remain:</span>
	                               	    <span>12hrs</span>
	                               	</span>
                               </div>	

                           
	                           <div class = "instructionTm">
	                           	  <div class = "notyfcation">
	                           	     <div class = "paidSchoolFees">
		                           	  	<span class = "Wrdfst">Your</span>
		                           	  	<span class = "Wrdsc">WELCOM</span>
		                           	  	<span class = "reviewboto" onclick = "openAbsolute('timetable_temprate');">
								                Review Notes
		                           	  	</span>
	                                 </div>
                                      
	                                 <div class = "paidSchoolFees unpaidShoolFees">
		                           	  	 <span class = "Wrdfst">Not</span>
		                           	  	 <span class = "Wrdsc">Alloweed</span>
		                           	  	 <span class = "Wrdfst">Reason:Shool Fees</span>
	                                 </div>
	                           	  </div>
	                           </div>

                               <div class = "emergencyChary">My Emergency Sir</div>
                           </div>  


                           <div class = "tymorow">
                           	    <div class = "showsubject">
                                    <span class = "subject">BIOS</span>

                                    <div class = "tmMidlewraper tymorotyme">
		                               	<span class = "theTime">8:00 am</span>
		                               	
	                                </div>
                                    
                                    <span class = "teachProf">
                                        <a href = "#">
	                                    	<div class = 'profImg'>
												<img src ='img/profiles/p4.jpg'>
											</div>

											<div class = "Tmdetails">
											    <span class = "titletm">By teacher</span>
											    <span class = "Nametm">Nitike Mwansasu</span>
											</div>
										</a>
                                    </span>
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

<?php include 'include/SkelotonBottom_login.php'; ?>

