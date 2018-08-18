<?php
require_once ('core/init.php');
$db = DB::getInstance();
$section = 1;

$status = false;
$result = array('status'=>$status,'data'=>null);

header("Content-type: text/event-stream");
header("Connection: Keep-alive");
header("Cache-Control: no-cache");


if(isset($_GET['action']) && $_GET['action'] == 'studentLive' ){
    $data         =  "";
    $dataz        =  "";
    $sect_tfeed   =  $_GET['sect_tfeed'];
    $subjectId    =  preg_replace("#[^0-9]#",'',$_GET['subjectId']);
    $real_user    =  preg_replace("#[^0-9]#",'',$_GET['real_user']);

    if ($sect_tfeed == 'b') {
        $sql  = $db->query("SELECT 
		                        p.*,
								u.*,
								p.id as lid
								FROM vy_wallsubject as p 
								LEFT JOIN vy_users as u ON p.user_id  = u.id 
								WHERE subject_id = ?  
								ORDER BY p.date DESC ", array($subjectId));

    }


    if($sql->count() > 0){
        $status                  = true;
        $lid                     = '';
        $s_lid                   = '';
        $inreplies               = "";
        $classIncss_theanswer    = "";
        $matchItemsAns_html      = "";
        $AboutSendRply           = "";
        $AboutEditRply           = "";

        foreach ($sql->results() as $r) {
         	// 'user_id'      =>  $user,
		        // 'section'      =>  $section,
		        // 'qstnNo'       =>  $q_no,
		        // 'columNo'      =>  $q_nocolum,
		        // 'topics_title' =>  $q_topicname,
		        // 'sub_topic'    =>  $q_subtopic,
		        // 'subject_id'   =>  $subject_id,
		        // 'subject_name' =>  $subjName,
		        // 'ideaOrQstn'   =>  $q_body,
		        // 'schoolnam'    =>  $q_sculname,
		        // 'examdate'     =>  $q_donedate,
		        // 'date'         =>  date("Y-m-d H:i:s"),
		        // 'match_a'      =>  $matchItem_a,
		        // 'match_b'      =>  $matchItem_b,
		        // 'match_c'      =>  $matchItem_c,
		    // 'status'       =>  'b')
	        
        	$msg_id  =  $r->lid;
            $id      =  $r->user_id;
            $lid    .=  $r->lid;

            $username     =  $r->username;
            $section      =  $r->section;
            $subject_name =  $r->subject_name;
            $qstnNo       =  $r->qstnNo;
            $columNo      =  $r->columNo;
            $topics_title =  $r->topics_title;
            $sub_topic    =  $r->sub_topic;
            $q_body       =  $r->ideaOrQstn;
            $schoolnam    =  $r->schoolnam;
            $examdate     =  $r->examdate;
            $match_a      =  $r->match_a;
            $match_b      =  $r->match_b;
            $match_c      =  $r->match_c;
            $status       =  $r->status;
              

            if(!empty($match_a) && !empty($match_b) && !empty($match_c)){
            	#set class  "theanswer"  in answer block for font reason

            	$classIncss_theanswer  =  "theanswer";

            	$matchItemsAns_html    = "<div class='matchitem'>
                                            <div class='matchs'>
                                                <div class='qstnNo'>
                                                    <span class='ColomNo'>A: </span>
                                                </div>
                                                <div class='matchAns'>$match_a</div>
                                            </div>      
     
                                            <div class='matchs'>
                                                <div class='qstnNo'>
                                                    <span class='ColomNo'>B: </span>
                                              </div>       
                                               <div class='matchAns'>$match_b</div>
                                            </div>        

                                            <div class='matchs'>
                                                <div class='qstnNo'>
                                                    <span class='ColomNo'>C: </span>
                                                </div>
                                                <div class='matchAns'>$match_c</div>
                                            </div>
                                        </div>";

            }else{
                $classIncss_theanswer    =  "forExplainAnswer";
            }


            $box          =  '';
               
            $prof_chanel = $r->profile;
            $width   = 100;
            $height  = 100;
            $class   =  '';
            $prof     = $db->prfl_pctwithClass($prof_chanel, $width, $height, $class);
			
			#Get ur answer function;
            $r            = get_replies($msg_id,$db,$classIncss_theanswer,$real_user);
            $replies      = $r[0];
            $rid          = $r[1];
            $r            = $r[2];
            $lid         .= $rid;
			
			#View others replies function;
            $s            = get_replies2($msg_id,$db,$classIncss_theanswer,$real_user);
            $s_replies    = $s[0];
            $s_rid        = $s[1];
            $s_r          = $s[2];

            // $s_lid       .= $s_rid;
            // $s_count_lid  = count($s_rid);
         

            if($replies == ""){
				#if replies Is empty return textarea input for answer;
            	$inreplies      =  " <textarea placeholder='Anser Here' id = 'wallquestionAnswer$msg_id'></textarea>";
            	$AboutSendRply  =  "<span class='clickedBoton sendHer'  id = 'sendReplying$msg_id' 
            	                    onclick = \"sendAnswer('$msg_id','$id')\">SEND ANSWER</span>";
            	$AboutEditRply  =   "";

            }else{
                #if replies not empty return div of editing;
            	$inreplies      = $replies;
                $AboutEditRply  = "<span class = 'editReply' id = 'editReply$msg_id' 
                                  onclick = \"editAnswer('$msg_id','$id','$r')\">change your answer</span>";

                $AboutSendRply  =  "<span class = 'clickedBoton sendHer'  id = 'sendReplying$msg_id' 
            	                    onclick = \"updateAnwser('$msg_id','$id')\">Send upadate</span>";
            }


            $data .=  "<div class = 'qstnAndAnsBody'>
                       <div class='anseQstnDiv'>
                            <div class='despl'>
	                            <div class='searchprof'>
	                            <div class='profImg'>
	                                $prof 
	                            </div> 
                            </div>

                            <div class='detdispl'>
                                <div class='firsdeta'>
                                    <span class='name'>$username</span>
                                    <span class='school'>$schoolnam</span>
                                    <span class='pozision'>$subject_name</span>
                                </div>
                                <div class='qstntype'>$subject_name Question</div>
                            </div>
                        
                            <div class='qastbody'>
                                <div class='qstn'>
                                    <div class='qstnNo'>
                                        <span class='No'>$qstnNo</span>
                                        <span class='ColomNo'>$columNo</span>
                                    </div>
   
                                    <div class='qstnBody'>$q_body</div>

                                    $matchItemsAns_html

                                    <div id='yourAnse$msg_id' class='yourAnse'>
                                        <h3>Answer</h3>
                                        <p>36</p>
                                    </div>
                                            
                                           <div class='AnswerHer'>
                                               <span class='neckedBoton viewAnswer' onclick=\"swicthVisibility('yourAnse$msg_id');\">View Answer </span> 
                                                
                                     <span class='neckedBoton viewComment' onclick=\"swicthVisibility('viewAnsComment$msg_id');\">View comments   $s_rid</span>
                                          </div>
                                   </div>
                                </div>
                            </div>

							<div class='herToAns'>
								<div class='ansHeader'>ANSWER</div>
								<div class='answi' id = 'answerHolder$msg_id'>
									$inreplies
								</div>

								$AboutEditRply
								$AboutSendRply
							</div>
						</div>
						</div>



                        <div id = 'viewAnsComment$msg_id' class = 'ExpireanceShare qstnAndAnsViewr'> 

						    <div class ='expirienceHistory viewAnswerCommentBody'>
						   
						        <div id = 'close' onclick = \"closeDiv('viewAnsComment$msg_id');\">
						             <i class = 'fa fa-close'></i>
						        </div>

						        <div class ='wraper'>
						              
						        <div class = 'placeOne'>
						          <div class ='despl'>
						            <div class = 'searchprof'> 
						              <div class = 'profImg'>
						                $prof 
						              </div>  
						            </div>

						            <div class = 'detdispl'>
						              <div class = 'firsdeta'>
						                <span class = 'name'>$username</span>
						                <span class = 'school'>$schoolnam</span>
						                <span class = 'pozision'>$subject_name</span>
						              </div>
						            </div>
						          </div>

						          <div class ='xoverflow'>
						            <div class = 'qastbody'>
						              <div class = 'qstn'>
						                  <div class = 'qstnNo'>
						                     <span class = 'No'>$qstnNo</span><span class = 'ColomNo'>$columNo</span>
						                  </div>

						                  <div class = 'qstnBody'>
						                    $q_body
						                  </div>

						                  $matchItemsAns_html 
						                  
						                   
						                  <h3>Answer
						             
						                  </h3>
						                  

						                  <div id= 'AReply' class = 'yourAnse replyBox'>
						                       
						                          <div class = 'profImg'>
						                            <img title = 'Patent Profile' src = 'img/profiles/p8.jpg' id = 'parent_img'/>
						                          </div> 
						                       <div class = 'replybady'><span>Nehemia Mwansasu</span
						                       ><p>No Anser Now</p></div>
						                  </div>
						                  
						            </div>
						          </div>
						          </div>

						          <div  class = 'AnswerHer'>
						              <textarea id = 'BReply' class = 'Areply'></textarea>
						              <div class = 'slidTone'>
						              
						                <div>
						                    <div class = 'searchprof'> 
						                      <div class = 'profImg'>
						                      <img title = 'Patent Profile' src = 'img/profiles/p8.jpg' id = 'parent_img'/>
						                      </div> 
						                    </div> 

						                    <div class ='searchprof'> 
						                      <div class = 'profImg'>
						                      <img title = 'Patent Profile' src = 'img/profiles/p8.jpg' id = 'parent_img'/>
						                      </div> 
						                    </div> 
						                  
						                    <div class = 'searchprof'> 
						                      <div class = 'profImg'>
						                      <img title = 'Patent Profile' src = 'img/profiles/p8.jpg' id = 'parent_img'/>
						                      </div> 
						                    </div> 
						                </div>


						              </div>
						              <span class = 'clickedBoton' onclick=\'swicthVisibility('BReply');\'>AReply</span> 
						          </div>
						        </div>
						        
						        <div class = 'placeTwo'>
						            <div class = 'xoverflow'>
                                       $s_replies
						            </div>
						        </div>

						       </div>
						    </div>
						</div>
				";                            
		}

        $result = array('data'=> $data,'status'=> $status,'id'=> $lid)
        ;
    }else{
        $result = array('data'=>'Nooo data found','status'=>$status);
    }

        #parent and their student profiles slide show on Parents Chember
        
        $user_id     =  preg_replace("#[^0-9]#",'',$_GET['user_id']);
        $sesion_id   =  preg_replace("#[^0-9]#",'',$_GET['sesion_id']);       // login session id

        $teach_id    =  preg_replace("#[^0-9]#",'',$_GET['teacher_id']);      // teacher id
        $teach_Uname =  preg_replace("#[^0-9]#",'',$_GET['teacherUname']);    // teacher username

        #School Info
        $subjectName =  $_GET['subjectName'];
        $schoolname  =  $_GET['schoolname'];
        $region      =  $_GET['region'];
        $lvl_Std     =  $_GET['levelOrStandard'];
        $mkondo      =  $_GET['mkondo'];
        $lvl_id      =  $_GET['level_identify'];

        
        #student Period subject function
        $dayPeridiod =  todayPereod($db,$user_id,$sesion_id,$teach_id,$teach_Uname,$subjectName,$subjectId,$schoolname,$region,$lvl_Std,$mkondo);
        $dayPeriod   =  $dayPeridiod[0];
        $tmrwPeriod  =  $dayPeridiod[1];

        $result['dayPeriod']      = $dayPeriod;
        $result['tommorowPeriod'] = $tmrwPeriod;

        #
        if(isset($_GET['tymtableId'])){
            $tymtid      =  $_GET['tymtableId'];
            $timetable   = tymtable_reviewNotes($db,$tymtid);    //time tableee
            $tpcrvw      = $timetable[0];
            $result['tpcrvw'] = $tpcrvw;  //not working function
        }
}


#general wall functions (teacher And Student)
function get_replies($pid,$db,$classCss,$real_user){
    $data   = '';
    $reply  = '';
    $class  = '';
    $id     = 0;
    $sql = $db->query("SELECT r.*,u.profile,u.username FROM vy_wallsubjectreply as r 
	LEFT JOIN vy_wallsubject as p ON(r.wallsubject_id  = p.id) 
	LEFT JOIN vy_users as u ON(r.replier_id = u.id) 
	WHERE r.wallsubject_id = '$pid' ORDER by p.id DESC");

    if($sql->count() > 0) {

        //foreach
        foreach ($sql->results() as $r) {
            $user     = $r->username;
            $profile  = $r->profile;
            $user_id  = $r->sender_id;
            $rep_id   = $r->replier_id;
            $id       = $r->id;
            $reply    = $r->msg;
            $date     = $r->date;

            $width    = 100;
            $height   = 100;
            $profile  = $db->prfl_pctwithClass($profile, $width, $height, $class);

            $divclass = 'theanswer'.$pid;

            if($rep_id == $real_user ){ 

	            $data .=  "<div id = '$divclass' class = '$classCss'>
					         <div class = ''> $reply</div>
					       </div>";  
			}


        }
      
    }
    
    return [$data,$id,$reply];
}

function get_replies2($pid,$db,$classCss,$real_user){
    $data   = '';
    $dataz   = '';
    $reply   = '';
    $class  = '';
    $id     = 0;
    $sql = $db->query("SELECT r.*,u.profile,u.username FROM vy_wallsubjectreply as r 
	LEFT JOIN vy_wallsubject as p ON(r.wallsubject_id  = p.id) 
	LEFT JOIN vy_users as u ON(r.replier_id = u.id) 
	WHERE r.wallsubject_id = '$pid' ORDER by p.id DESC");
    $id = $sql->count();
	

    if($sql->count() > 0) {

        //View others Comments Details
        foreach ($sql->results() as $r) {
            $user     = $r->username;
            $profile  = $r->profile;
            $user_id  = $r->sender_id;
            $rep_id   = $r->replier_id;
            $id       = $r->id;
            $reply    = $r->msg;
            $date     = $r->date;

            $width    = 100;
            $height   = 100;
            $profile  = $db->prfl_pctwithClass($profile, $width, $height, $class);

            $divclass = 'theanswer'.$pid;

			$dataz .=  "<div id ='AReply' class = 'yourAnse replyBox'>
							<div class='profImg'>
								$profile
							</div> 
								<div class='replybady'><span>$user</span><p>$reply</p></div>
						</div>";   


        }
      
    }
    
    return [$dataz,$id,$reply];
}


#subject functions (students)....
function todayPereod($db,$user_id,$sesion_id,$teach_id,$teach_Uname,$subjectName,$subjectId,$schoolname,$region,$lvl_Std,$mkondo) {

    $Period      = "";
    $tommor_time = "";
  
    #Day info
    $daydat = date('Y-m-d');
    $tomorrow = date("Y-m-d", strtotime("+1 day"));
    $tomorrow;


    
    
    $qry = "SELECT t.*,v.profile,v.username FROM vy_timtable t LEFT JOIN vy_users as v ON (t.user_id = v.id)
            WHERE date_period = ? AND 
                  user_id     = ? AND 
                  subject_id  = ? AND 
                  school_name = ? AND
                  level       = ? AND
                  category    = ? AND
                  region      = ?
            "
    ;



    $tym_tables =  $db->query($qry,array($daydat,$teach_id,$subjectId,$schoolname,$lvl_Std,$mkondo,$region));

    if($teach_id > 0) {
        if($tym_tables->count()){
            $status       =  true;
            foreach ($tym_tables->results() as $tym_table) {
                # code...
                $tymtabl_id         =  $tym_table->id;
                $tymtable_Tuser_id  =  $tym_table->user_id;
                $tymtable_Tuname    =  $tym_table->username;
                $start_period       =  $tym_table->start_period;
                $dayTopic           =  $tym_table->dayTopic;
                $daySubtpc          =  $tym_table->daySubtpc;
                $end_period         =  $tym_table->end_period;
                $tprofile           =  $tym_table->profile;
                

                $width=50;$height=50;$class = '';                          // profile Info
                $pf = $db->prfl_pctwithClass($tprofile, $width, $height, $class);
                

                if ($user_id == $sesion_id) {

                    $Period .=  "<div class = 'instructionTm'>
                                  <div class = 'notyfcation'>
                                     <div class = 'paidSchoolFees'>
                                        <span class = 'Wrdfst'>Your</span>
                                        <span class = 'Wrdsc'>WELCOM</span>
                                        <span class = 'reviewboto' onclick = \"timetable_review('timetable_temprate',$tymtabl_id); \">
                                                Review Notes
                                        </span>
                                     </div>
                                      
                                     <div class = 'paidSchoolFees unpaidShoolFees'>
                                         <span class = 'Wrdfst'>Not</span>
                                         <span class = 'Wrdsc'>Alloweed</span>
                                         <span class = 'Wrdfst'>Reason:Shool Fees</span>
                                     </div>
                                  </div>
                                </div>
                            <div class = 'emergencyChary'>My Emergency Sir</div>
                        ";
                }


                $Period .= "<div class = 'todayTmTableBody'>

                                <div class = 'showsubject'>
                                    <span class = 'subject'>$subjectName</span>
                                    
                                    <span class = 'teachProf'>
                                        <a href = '#'>
                                            <div class = 'profImg'>
                                                $pf
                                            </div>

                                            <div class = 'Tmdetails'>
                                                <span class = 'titletm'>By teacher</span>
                                                <span class = 'Nametm'>$tymtable_Tuname</span>
                                            </div>
                                        </a>
                                    </span>
                                </div>

                                <div class = 'tmMidlewraper'>
                                    <span class = 'theTime'>$start_period</span>
                                    <span class = 'theTimeremain'>
                                        <span>End:</span>
                                        <span>$end_period</span>
                                    </span>
                                </div>   </div>  ";
            }

        }else{
            $Period .= 'Free Day';
        }



         $tumorow = "SELECT * FROM vy_timtable,vy_users 
                WHERE vy_timtable.user_id = vy_users.id AND 
                      date_period = ? AND 
                      user_id     = ? AND 
                      school_name = ? AND
                      level       = ? AND
                      category    = ? AND
                      region      = ?
                "
        ;

        $tables_tomorows =  $db->query($tumorow,array($tomorrow,$teach_id,$schoolname,$lvl_Std,$mkondo,$region));
     


        if($tables_tomorows->count()){
            $status       =  true;
            foreach ($tables_tomorows->results() as $tables_tomorow) {
                # code...
                $tmr_tymtable_Tuname = $tables_tomorow->username;
                $tmr_start_period    = $tables_tomorow->start_period;
                $tmr_dayTopic        = $tables_tomorow->dayTopic;
                $tmr_end_period      = $tables_tomorow->end_period;
                $tmr_tprofile        = $tables_tomorow->profile;
            
                
                $tmr_pf       = $db->prfl_pct($tmr_tprofile,$width=50,$height=50);
                

                $tommor_time .=     "<div class = 'tymorow'>
                                    <div class = 'showsubject'>
                                        <span class = 'subject'>$subjectName</span>

                                        <div class = 'tmMidlewraper tymorotyme'>
                                            <span class = 'theTime'>$tmr_start_period</span>
                                            
                                        </div>
                                        
                                        <span class = 'teachProf'>
                                            <a href = '#'>
                                                <div class = 'profImg'>
                                                    '.$tmr_pf.'
                                                </div>

                                                <div class = 'Tmdetails'>
                                                    <span class = 'titletm'>By teacher</span>
                                                    <span class = 'Nametm'>$tmr_tymtable_Tuname</span>
                                                </div>
                                            </a>
                                        </span>
                                    </div>
                               </div>";

            }
        }else{
            $tommor_time     .= "<div class = 'alert_box'><span>Tommorow : </span><span>Free DAy</span></div>";
        }

    }else{

        $tommor_time .= '<div class = "NotymTableT diverroMsg"> 
                                             Tell YOur Teacher To Create School TimeTable 
                                             <span> TimeTsble Req</span> 
                                             <span> 
                                                <span>Send Invate Msg</span>
                                                <span><input type ="text" placeholder ="Enter Your Teacher No"></span>

                                             </span> 
                                            </div>';
        $Period     .= '<div class = "NotymTableT diverroMsg"> 
                                             Tell YOur Teacher To Create School TimeTable 
                                             <span> TimeTsble Req</span> 
                                             <span> 
                                                <span>Send Invate Msg</span>
                                                <span><input type ="text" placeholder ="Enter Your Teacher No"></span>

                                             </span> 
                                            </div>';
    }
    return [$Period,$tommor_time];
}



function tymtable_reviewNotes($db,$tymtid){
    $rvw = '';

    $qry = "SELECT * FROM  vy_timtable ";
    
    $qry_subjectopic = $db->query($qry);

    if($qry_subjectopic->count() > 0){
        
        foreach($qry_subjectopic->result() as $r){
            $dayTopic      =   $r->dayTopic;
            $daySubtpc     =   $r->daySubtpc;
            $subject_id    =   $r->subject_id;
            $start_period  =   $r->start_period;



        $rvw .= " <div id = 'close' onclick = \"closeDiv('timetable_temprate');\"><i class = 'fa fa-close'></i></div>
   
                    <div id = t_profile>
                        <div class ='t_profile'>".$tymtid."</div>
                        <div class ='text_question'>
                            <div class = 'semcicle'></div>
                        <textarea id='ask_mada' onclick=\"askteachmQstn('ask_mada','allaskedtimetable');\" placeholder = 'Ask your teacher'></textarea>
                        <div id= 'searchOnv'><input type = 'text' id ='search' name ='search_v' placeholder='search pepars qustion,teachers,students etc'></div>
                        </div>
                       
                       
                        <div  class = 'allasked' id = 'allaskedtimetable'>
                            <div class = 'closet' onclick = \"closeDiv('allaskedtimetable');\"><span >hide</span></div>
                            <div id = 'overlowOfQuestion'>
                                <div id = 'knewknolgde'>
                                    <div id = 'bief_question' onclick =\"switchVisbltyQ('chev_on_book_a','chev_se_book_a','mainKnolagd_book_a');\">
                                        <i id = 'chev_on_book_a'class ='fa fa-chevron-right'></i>
                                        <i id = 'chev_se_book_a' class ='fa fa-chevron-down'></i>
                                       <span id = knw_title> Wha is real mean by the difination ....</span>
                                    </div>
                                    
                                  <div id = 'mainKnolagd_book_a' class = 'mainKnolagde'>  
                                    <div id = 'qustion'>Wha is real mean by the difination bilogy and si biology different to botanist</div>
                                    <div id = 'q_reply'>
                                        <div id ='t_ans_prof'>
                                            <img src ='img/profiles/p2.jpg' width ='100px' height ='100px;'>
                                        </div>
                                        <div id = 'ans'>Biology is study of living organism andther envorment
                                           and botany is branch of of bilogy which deals with plants
                                        </div>
                                    </div>
                                </div>
                                </div>
                                
                                
                                 <div id = 'knewknolgde'>
                                    <div id = 'bief_question' onclick =\"switchVisbltyQ('chev_on_book_b','chev_se_book_b','mainKnolagd_book_b');\">
                                        <i id = 'chev_on_book_b'class ='fa fa-chevron-right'></i>
                                        <i id = 'chev_se_book_b' class ='fa fa-chevron-down'></i>
                                        <span id = knw_title> Wha is real mean by the difination .... </span>
                                    </div>
                                    
                                  <div id = 'mainKnolagd_book_b'  class = 'mainKnolagde'>  
                                    <div id = 'qustion'>Wha is real mean by the difination bilogy and si biology different to botanist</div>
                                    <div id = 'q_reply'>
                                        <div id ='t_ans_prof'>
                                            <img src ='img/profiles/p2.jpg' width ='100px' height ='100px;'>
                                        </div>
                                        <div id = 'ans'>Biology is study of living organism andther envorment
                                           and botany is branch of of bilogy which deals with plants
                                        </div>
                                    </div>
                                </div>
                                </div>
                                
                                <div id = 'knewknolgde'>
                                    <div id = 'bief_question' onclick =\"switchVisbltyQ('chev_on_book_c','chev_se_book_c','mainKnolagd_book_c');\">
                                        <i id = 'chev_on_book_c'class ='fa fa-chevron-right'></i>
                                        <i id = 'chev_se_book_c' class ='fa fa-chevron-down'></i>
                                       <span id = knw_title> how genetics work wen a pragnancy ....</span>
                                    </div>
                                        
                                    <div id = 'mainKnolagd_book_c' class = 'mainKnolagde'>  
                                        <div id = 'qustion'>how genetics work wen a pragnancy woman want to delivar twins beby</div>
                                        <div id = 'q_reply'>
                                            <div id ='t_ans_prof'>
                                                <img src ='img/profiles/p2.jpg' width ='100px' height ='100px;'>
                                            </div>
                                            <div id = 'ans'>geneitcs is formation of human bodywhisch result of shape and or=ther succemsta for restance Y meet with x is formed a boy and this is like it depend on the day you have sex
                                            </div>
                                        </div>
                                        
                                        <div id = 'q_reply'>
                                            <div id ='t_ans_prof'>
                                                <img src ='img/profiles/img1.jpg'>
                                            </div>
                                           
                                            <div id = 'ans'>Biology is study 
                                            </div>
                                        </div>
                                        
                                         <div id = 'q_reply'>
                                    <div id ='t_ans_prof'>
                                        <img src ='img/profiles/img1.jpg'>
                                    </div>
                                    <div id = 'ans'>i wish to know the best day to have sex becouse ilove boyzbeby
                                    </div>
                               
                                         </div>
                                    </div>
                                </div>
                            </div>
                            <div id ='q_text'>
                                <textarea id = 'q_textarea'></textarea>
                            </div>
                        </div>
                    </div>


                    <div id = 'v_list'>
                        <div class = 'v_overflow'>
                           <div id = 'dayTopicDate' class = 'dayTopicDate'>
                                <div id = 'dateTopic'  onclick = \"swicthVisibility('subtopic');\">
                                    <span id = 'datePeriod'>27/3/2018</span>
                                    <span id = 'topicName'>FAsihi</span>
                                </div>
                                
                                <div id = 'subtopic' class = 'subtopic'>
                                    <div class = 'major_subTopic' onclick = \"swicthVisibility('sub_of_subtopic');\">
                                        <span id = 'sub_topic'>Maana ya fasihi</span>
                                        <span id = 'datetopictought'>23/3/2016</span>
                                        <span id = 'teacher_present'><i  class='icofont icofont-check' aria-hidden='true'></i></span>
                                        
                                    </div>
                                    
                                    <div id = 'sub_of_subtopic' class = 'sub_of_subtopic'>
                                        <span class = 'sub_1_1'>fasihi Andishi</span>
                                        <span class = 'sub_1_2'>fasihi Simulizi</span>
                                    </div>
                                </div>
                                
                           </div>
                           
                           <div id = 'dayTopicDate' class = 'dayTopicDate'>
                                <div id = 'dateTopic'  onclick = \"swicthVisibility('subtopic_1');\">
                                    <span id = 'datePeriod'>27/3/2018</span>
                                    <span id = 'topicName'>Uchambuzi wa vitabu</span>
                                </div>
                                
                                <div id = 'subtopic_1' class = 'subtopic'>
                                    <div class = 'major_subTopic' onclick = \"swicthVisibility('sub_of_subtopic_1_1');\">
                                        <span id = 'sub_topic'>Maana ya Maudhui</span>
                                        <span id = 'datetopictought'>23/3/2016</span>
                                        <span id = 'teacher_present'><i  class='icofont icofont-check' aria-hidden='true'></i></span>
                                        
                                    </div>
                                    
                                    <div id = 'sub_of_subtopic_1_1' class = 'sub_of_subtopic'>
                                        <span class = 'sub_1_1'>Watoto wa Mama Ntilie</span>
                                        <span class = 'sub_1_2'>Ngosw Penzi Kitovu Cha uzembe</span>
                                    </div>
                                </div>
                                
                           </div>
                           
                           
                          
                        
                        
                            <div id = 'dayTopicDate' class = 'Teacher_shiftiz'>
                                New Teacher Last Teacher Shifted
                           </div>
                        
                            <div id = 'dayTopicDate' class = 'dayTopicDate'>
                                <div id = 'dateTopic'  onclick = \"swicthVisibility('subtopic');\">
                                    <span id = 'datePeriod'>27/3/2018</span>
                                    <span id = 'topicName'>Nomino</span>
                                </div>
                                
                                <div id = 'subtopic' class = 'subtopic'>
                                    <div class = 'major_subTopic' onclick = \"swicthVisibility('sub_of_subtopic');\">
                                        <span id = 'sub_topic'>Maana ya Nomino</span>
                                        <span id = 'datetopictought'>23/3/2016</span>
                                        <span id = 'teacher_present'><i  class='icofont icofont-check' aria-hidden='true'></i></span>
                                        
                                    </div>
                                    
                                    <div id = 'sub_of_subtopic' class = 'sub_of_subtopic'>
                                        <span class = 'sub_1_1'>Aina za Nomino</span>
                                        <span class = 'sub_1_2'>fasihi Simulizi</span>
                                    </div>
                                </div>
                                
                           </div>
                           
                           <div id = 'dayTopicDate' class = 'dayTopicDate'>
                                <div id = 'dateTopic'  onclick = \"swicthVisibility('subtopic_3');\">
                                    <span id = 'datePeriod'>27/4/2017</span>
                                    <span id = 'topicName'>Uchambuzi wa vitabu</span>
                                </div>
                                
                                <div id = 'subtopic_3' class = 'subtopic'>
                                    <div class = 'major_subTopic' onclick =\"swicthVisibility('sub_of_subtopic_2_1');\">
                                        <span id = 'sub_topic'>Maana ya Maudhui</span>
                                        <span id = 'datetopictought'>23/5/2017</span>
                                        <span id = 'teacher_present'><i  class='icofont icofont-check' aria-hidden='true'></i></span>
                                    </div>
                                    
                                    <div id = 'sub_of_subtopic_2_1' class = 'sub_of_subtopic'>
                                        <span class = 'sub_1_1'>Watoto wa Mama Ntilie</span>
                                        <span class = 'sub_1_2'>Ngosw Penzi Kitovu Cha uzembe</span>
                                    </div>
                                </div>
                                
                           </div>
                        </div>
                    </div>

                    <div id = 'v_lecture' class ='centerPlace notes'>
                       <div class = 'notesView'>
                            <div class = 'printersLikeItemz'></div>
                            <div class = 'TimeTabletpc_title'>
                              ".$tymtabletopc_titl."
                            </div>

                            <div class = 'TimTabletpc_body'>
                              ".escape($titleContent)."
                            </div>

                             <div class = 'TimeTablesubtpc_title'>
                              ndo mm usijali".$tymtid ."
                            </div>

                            <div class = 'TimTabletpc_body'>
                              ".escape($tymt_subtpc_contct)."
                            </div>
                               
                       </div>

                          
                            
                        <div class = 'Quiznotes'>Quiz Notes</div>
                        <div class = 'editnotes'>Edit Notes</div>
                    </div>
                    
                    <div id = 'v_chart'>
                        <div id='post_v_chart' onclick= \"swicthVisibility('text_vchart');\">Post Now</div>
                        <div id = 'text_vchart'><textarea></textarea>
                            <div id = 'send_vchart'>
                                <div id = 'post_v'><input class = 'p' type='submit' id='submit_post' value = 'Post Update'></div>
                                <div id = 'upload_photo'><i class='fa fa-camera' id= 'cover_camera_prof'></i></div>
                            </div>
                        </div>
                        <div class = 'overflow'>
                             <div id = 'posted_vchart'>
                                    <div class = 'posted_profile'>
                                        <div class = 'posted_cicle'>
                                            <img src ='img/profiles/p4.jpg' >
                                       </div>
                                        
                                        <div class ='name_time'>
                                            <span class = 'name'>Jessica Sanders</span>
                                            <span class = 'time_ago'>5hrs Ago</span>
                                        </div>
                                    
                                    </div>
                                    <div class ='msg'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
                                    <div class ='icons'>
                                        <span id='reply' class = 'ico reply'><i class = 'fa fa-reply'></i></span>
                                        <span id='love' class = 'ico reply'><i class = 'fa fa-heart-o'></i></span>
                                        <span id='thumb_up' class = 'ico reply'><i class = 'fa fa-thumbs-up'></i></span>
                                        <span id='delete' class = 'ico reply'><i class= 'fa fa-remove'></i></span>
                                        <span id='spam' class = 'ico reply'>spam</span>
                                        <span id='delete' class = 'ico reply'><i class= 'fa fa-unlock-alt'></i></span>
                                    </div>
                                    
                                </div>
                             
                             
                             <div id = 'reply_vchart'>
                                    <div class = 'posted_profile'>
                                        <div class = 'posted_cicle'>
                                            <img src ='img/profiles/p1.jpg' >
                                       </div>
                                        
                                         <div class ='name_time'>
                                            <span class = 'name'>Challo</span>
                                            <span class = 'time_ago'>8hrs Ago</span>
                                        </div>
                                    </div>
                                    
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
                             
                             
                               <div id = 'posted_vchart'>
                                    <div class = 'posted_profile'>
                                        <div class = 'posted_cicle'>
                                            <img src ='img/profiles/p4.jpg' >
                                       </div>
                                        
                                        <div class ='name_time'>
                                            <span class = 'name'>Jessica Sanders</span>
                                            <span class = 'time_ago'>5hrs Ago</span>
                                        </div>
                                    
                                    </div>
                                    <div class ='msg'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
                                    <div class ='icons'>
                                        <span id='reply' class = 'ico reply'><i class = 'fa fa-reply'></i></span>
                                        <span id='love' class = 'ico reply'><i class = 'fa fa-heart-o'></i></span>
                                        <span id='thumb_up' class = 'ico reply'><i class = 'fa fa-thumbs-up'></i></span>
                                        <span id='delete' class = 'ico reply'><i class= 'fa fa-remove'></i></span>
                                        <span id='spam' class = 'ico reply'>spam</span>
                                        <span id='delete' class = 'ico reply'><i class= 'fa fa-unlock-alt'></i></span>
                                    </div>
                                    
                                </div>
                               
                               
                               <div id = 'posted_vchart'>
                                    <div class = 'posted_profile'>
                                        <div class = 'posted_cicle'>
                                            <img src ='img/profiles/p4.jpg' >
                                       </div>
                                        
                                        <div class ='name_time'>
                                            <span class = 'name'>Jessica Sanders</span>
                                            <span class = 'time_ago'>5hrs Ago</span>
                                        </div>
                                    
                                    </div>
                                    <div class ='msg'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
                                    <div class ='icons'>
                                        <span id='reply' class = 'ico reply'><i class = 'fa fa-reply'></i></span>
                                        <span id='love' class = 'ico reply'><i class = 'fa fa-heart-o'></i></span>
                                        <span id='thumb_up' class = 'ico reply'><i class = 'fa fa-thumbs-up'></i></span>
                                        <span id='delete' class = 'ico reply'><i class= 'fa fa-remove'></i></span>
                                        <span id='spam' class = 'ico reply'>spam</span>
                                        <span id='delete' class = 'ico reply'><i class= 'fa fa-unlock-alt'></i></span>
                                    </div>
                                    
                                </div>
                               
                               
                               <div id = 'posted_vchart'>
                                    <div class = 'posted_profile'>
                                        <div class = 'posted_cicle'>
                                            <img src ='img/profiles/p4.jpg' >
                                       </div>
                                        
                                        <div class ='name_time'>
                                            <span class = 'name'>Jessica Sanders</span>
                                            <span class = 'time_ago'>5hrs Ago</span>
                                        </div>
                                    
                                    </div>
                                    <div class ='msg'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
                                        <div class ='icons'>
                                            <span id='reply' class = 'ico reply'><i class = 'fa fa-reply'></i></span>
                                            <span id='love' class = 'ico reply'><i class = 'fa fa-heart-o'></i></span>
                                            <span id='thumb_up' class = 'ico reply'><i class = 'fa fa-thumbs-up'></i></span>
                                            <span id='delete' class = 'ico reply'><i class= 'fa fa-remove'></i></span>
                                            <span id='spam' class = 'ico reply'>spam</span>
                                            <span id='delete' class = 'ico reply'><i class= 'fa fa-unlock-alt'></i></span>
                                        </div>
                                        
                                    </div>
                               
                               
                                <div id = 'posted_vchart'>
                                    <div class = 'posted_profile'>
                                        <div class = 'posted_cicle'>
                                            <img src ='img/profiles/p4.jpg' >
                                       </div>
                                        
                                        <div class ='name_time'>
                                            <span class = 'name'>Jessica Sanders</span>
                                            <span class = 'time_ago'>5hrs Ago</span>
                                        </div>
                                    
                                    </div>
                                    <div class ='msg'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
                                    <div class ='icons'>
                                        <span id='reply' class = 'ico reply'><i class = 'fa fa-reply'></i></span>
                                        <span id='love' class = 'ico reply'><i class = 'fa fa-heart-o'></i></span>
                                        <span id='thumb_up' class = 'ico reply'><i class = 'fa fa-thumbs-up'></i></span>
                                        <span id='delete' class = 'ico reply'><i class= 'fa fa-remove'></i></span>
                                        <span id='spam' class = 'ico reply'>spam</span>
                                        <span id='delete' class = 'ico reply'><i class= 'fa fa-unlock-alt'></i></span>
                                    </div>
                                    
                                </div>
                             
                             
                            <div id = 'reply_vchart'>
                                    <div class = 'posted_profile'>
                                        <div class = 'posted_cicle'>
                                            <img src ='img/profiles/p1.jpg' >
                                       </div>
                                        
                                         <div class ='name_time'>
                                            <span class = 'name'>Challo</span>
                                            <span class = 'time_ago'>8hrs Ago</span>
                                        </div>
                                    </div>
                                    
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
                             
                             
                            <div id = 'posted_vchart'>
                                    <div class = 'posted_profile'>
                                        <div class = 'posted_cicle'>
                                            <img src ='img/profiles/p4.jpg' >
                                       </div>
                                        
                                        <div class ='name_time'>
                                            <span class = 'name'>Jessica Sanders</span>
                                            <span class = 'time_ago'>5hrs Ago</span>
                                        </div>
                                    
                                    </div>
                                    <div class ='msg'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
                                    <div class ='icons'>
                                        <span id='reply' class = 'ico reply'><i class = 'fa fa-reply'></i></span>
                                        <span id='love' class = 'ico reply'><i class = 'fa fa-heart-o'></i></span>
                                        <span id='thumb_up' class = 'ico reply'><i class = 'fa fa-thumbs-up'></i></span>
                                        <span id='delete' class = 'ico reply'><i class= 'fa fa-remove'></i></span>
                                        <span id='spam' class = 'ico reply'>spam</span>
                                        <span id='delete' class = 'ico reply'><i class= 'fa fa-unlock-alt'></i></span>
                                    </div>
                                    
                            </div>
                             
                             
                            <div id = 'reply_vchart'>
                                    <div class = 'posted_profile'>
                                        <div class = 'posted_cicle'>
                                            <img src ='img/profiles/p1.jpg' >
                                       </div>
                                        
                                         <div class ='name_time'>
                                            <span class = 'name'>Challo</span>
                                            <span class = 'time_ago'>8hrs Ago</span>
                                        </div>
                                    </div>
                                    
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
                "
            ;
        }
    }else{
        $rvw .= "<div style = 'background:red'>not". $tymtid ."2 found </div";
    }


    return [$rvw];
}


echo "data:".json_encode($result)."\n\n";


