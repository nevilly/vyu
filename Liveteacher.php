<?php
require_once ('core/init.php');
$db = DB::getInstance();
$section = 1;

$status = false;
$result = array('status'=>$status,'data'=>null);

header("Content-type: text/event-stream");
header("Connection: Keep-alive");
header("Cache-Control: no-cache");


if(isset($_GET['action']) && $_GET['action'] == 'teacherLive' ){
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
  

    $p_accId     = '';
    $p_accuserId =  '';

    if(isset($_GET['p_accId']) && isset($_GET['p_accuserId'])){
        $p_accId     = $_GET['p_accId'];          // parent Account Id;
        $p_accuserId =  $_GET['p_accuserId'];     // parent user Id;
       
        $result['check1'] = $p_accuserId;
    }

    $result['check'] = $p_accuserId;
    
    $p_ChmbrSl   = ParentsChember_slide($db,$user_id,$schoolname,$region,$lvl_Std);
    $p_slider    =  $p_ChmbrSl[0];
    $result['PrntSlider_pch'] = $p_slider;

     
    $sngPChat    = singleParentChat($db,$user_id,$p_accId,$p_accuserId);
    $result['parent_SingleChat']  = $sngPChat[0];
    $result['parent_SingleChatId'] = $sngPChat[1];
    
    $p_Chmbrall  = '';
    $p_ChmbrAll  = ParentChember_AllChatWall($db,$user_id,$schoolname,$region,$lvl_Std,$mkondo,$lvl_id);

    $result['AllCaht_pCh'] = $p_ChmbrAll[0];
    $result['AllChat_Id']  = $p_ChmbrAll[1];

    $t_Result = result_box($db,$schoolname,$region,$lvl_Std,$mkondo);
    $result['resultInfo'] =  $t_Result[0];
    $result['resultdate'] =  $t_Result[1];
}
 

#teacher functions
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

function ParentsChember_slide($db,$user_id,$schoolname,$region,$lvl_Std){
	#slide on parent chember;
	$sql        =  null;
	$box        =  'No Slider found';

	$qry =  "SELECT  
					p.id                  as pid,
					p.user_id             as puid, 
					p.st_fname            as p_stId, 
					p.schoolname          as p_schul,
					p.region              as p_region,
					p.levelOrStandard     as p_ls, 
					p.mkondo              as p_mkondo, 
					p.facultOrComb_taken  as s_facault, 
					p.level_identify      as p_lIdent,
					
					s.id                  as sid,
					s.user_id             as suid,
					s.st_fname            as s_pId,
					s.schoolname          as s_schul,
					s.region              as s_region,
					s.levelOrStandard     as s_sl,
					s.mkondo              as s_mkondo,
					s.facultOrComb_taken  as s_facault,
					s.level_identify      as s_lIdenty,

					v.id          as vid,
					v.username    as vu,
					v.profile     as vpr,
					x.id          as xid,
					x.username    as xu,
					x.profile     as xpr 
					FROM p_acc  p ,vy_users  v ,vy_users  x ,student_acc s 
					
					WHERE p.user_id = v.id  AND
						s.user_id = x.id  AND
						p.schoolname = ?  AND
						s.schoolname = ? 
			"
	;

	$sql = $db->query($qry,array('filbety By','filbety By'));

	if($sql->count() > 0){
		$status       =  true;
		$lid          =  '';
		$box          =  '';
		$class        =  '';
		$width        =  '';
		$height       =  '';
		$st_profile   =  '';
		$mkondo       =  '';

		foreach ($sql->results() as $r) {
			$width      =  100;
			$height     =  100;

			#Parent  Details
			$p_id       =  $r->pid;           // parent id
			$p_uId      =  $r->puid;          // parent user id
			$p_uname    =  $r->vu;            // parent username
			$p_prof     =  $r->vpr;           // parent profile
			$p_stuId    =  $r->p_stId;        // parent Student Id
			$p_lev      =  $r->p_ls;          // parent Student level
			$p_mkondo   =  $r->p_mkondo;      // parent Student Mkondo
			$p_class    =  'p_profile';
			$p_prof     =  $db->prfl_pctwithClass($p_prof, $width, $height, $class);    // parent profile   


			#student Details
			$st_id       =  $r->sid;           // student id
			$st_uId      =  $r->suid;          // student user id
			$st_uname    =  $r->xu;            // student username
			$st_prof     =  $r->xpr;           // student profile
			$st_lev      =  $r->s_sl;          // student level or stanbdard eg form 1 or certificate
			$st_mkond    =  $r->s_mkondo;      // student level or stanbdard eg form 1 or certificate
			$st_prof     =  $db->prfl_pctwithClass($st_prof, $width, $height, $p_class);    // Student profile  

			
			if($p_stuId  == $st_uId ){
				$st_profile   = "<a href='' class='studentProfile'>$st_prof</a>";
				$mkondo       =  "<span class='info2 parentNames'> $p_lev / $p_mkondo </span>";


				$box .= "<div class='box'>
							<div class='parentSlider'>
								<div class='slideContainer'>
									<div class='topcontainer'>
										$st_profile 
									</div>

									<div class='another'>
										<div class='ParentPicture'>
											$p_prof
										</div>

										<div class='profileDetails'>
											<div class='info'>
												<div class='infoDiv'>
													<span class='infod parentNames' title=''>Parent:</span>
													<span class='info2 parentNames'><a href=''>$p_uname</a></span>
												</div>
											
												<div class='infoDiv'>
													<span class='infod classLevel'>reader:</span>
													<span class='info2 parentNames'>$st_uname</span>
												</div>

												<div class='infoDiv'>
													<span class='infod classLevel'>Level:</span>
													$mkondo
												</div>

												<div class='last' onclick=\"switch_parentChat('ParentsWrap','parentChat','parebt','$p_id','allParents','$p_uId')\">
													<i class='fa fa-angle-double-down'>$p_id </i>
												</div>
											
											</div>
										</div>
									</div>
								</div>
							</div>
					    </div>
					"
				;
			}else{
				#kama hamna mwanafunzi au mtt;

				$mkondo = " <span class='info2 parentNames'> $p_lev / $p_mkondo </span>";
				$box .= "<div class='box'>
							<div class='parentSlider'>
								<div class='slideContainer'>
									<div class='topcontainer'>
									</div>
									<div class='another'>
										<div class='ParentPicture'>
											$p_prof
										</div>

										<div class='profileDetails'>
											<div class='info'>
												<div class='infoDiv'>
													<span class='infod parentNames' title=''>Parent:</span>
													<span class='info2 parentNames'><a href=''>$p_uname</a></span>
												</div>
											
												<div class='infoDiv'>
													<span class='infod classLevel'>reader:</span>
													<span class='info2 parentNames'>$st_uname</span>
												</div>

												<div class='infoDiv'>
													<span class='infod classLevel'>Level:</span>
													$mkondo
												</div>

												<div class='last' onclick=\"switchVisblty_parentChember()\">
													<i class='fa fa-angle-double-down'></i>
												</div>
											
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					"
				;
			}

		}
	}

	return [$box];
}

function ParentChember_AllChatWall($db,$user_id,$schoolname,$region,$lvl_Std,$mkondo,$lvl_id){

	$qry =  "SELECT p.id                as pid ,
	                p.sender_id         as p_sId,
					p.msg               as p_Msg,
					p.date              as p_date,
					p.schoolname ,
                    p.levelOrStandard ,
					p.mkondo ,
					p.level_identify ,
					p.region,
					p.t_id,
					p.p_id,


					pa.user_id          as pa_usd,
					pa.st_fname         as pa_stId,

				    v.username          as vusr,
					v.profile           as vpr,

					x.username          as xusr,
					x.profile           as xpr


	          FROM post_teachandparent p  
			  LEFT JOIN vy_users         as  v   ON (p.sender_id = v.id) 
              LEFT JOIN p_acc            as  pa  ON (pa.user_id  = p.sender_id ) 
			  LEFT JOIN vy_users         as  x  ON (pa.st_fname = x.id )
			  WHERE  
			   p.schoolname       =  ?        AND
			   p.region           =  ?        AND
			   p.levelOrStandard  =  ?        AND
			   p.mkondo           =  ?        AND
			   p.level_identify   =  ?
			   ORDER BY p.id DESC 
		"
	;


	$sql = $db->query($qry,array($schoolname,$region,$lvl_Std,$mkondo,$lvl_id));

	if($sql->count() > 0){
		$status       =  true;
		$tid          =  '';
		$box          =  '';
		$class        =  '';
		$width        =  '';
		$height       =  '';
		$st_profile   =  '';
		$mkondo       =  '';
		$prnt_Son_dp  =  '';
	

		foreach ($sql->results() as $r) {
			$width      =  100;
			$height     =  100;
		   
			#DETAILS
				#Post All Charts  Details
                $p_id       =  $r->pid;           // post id
				$tid        += $p_id ;           // post id
				$p_sId      =  $r->p_sId;         // post user id
				$p_Msg      =  $r->p_Msg;         // post msg
				$p_date     =  $r->p_date;        // post  date
				$teach_id   =  $r->t_id;
				$parent_id  =  $r->p_id;
				$p_sch      =  $r->schoolname;
				$p_lv       =  $r->levelOrStandard;
				$p_mk       =  $r->mkondo;
				$p_reg      =  $r->region;
				$p_lI       =  $r->level_identify;
				
				$st_uname    =  $r->xusr;          // student username
				$st_prof     =  $r->xpr;           // student profile
				$st_prof     =  $db->prfl_pctwithClass($st_prof, $width, $height, $class);    // Student profile  
				
				#general Details
				$uname       =  $r->vusr;      // sender username
				$prof        =  $r->vpr;       // sender profile
				$p_prof      =  $db->prfl_pctwithClass($prof, $width, $height, $class);    // parent profile   
			# END DETAILS

			$chemba_reply = ParentChember_AllChatWallRply($p_id,$db);
			$chemba_rply  = $chemba_reply[0];

			if($teach_id > 0){
				#teacher Messege
				$box .="<div class='profileSender'>
							<div class='profDisng'>
								<div class='barName'>
									<a href='#' class='Parimg'>$p_prof</a>
									<a href='#' class='ParName'>
									    <span class='title'>Teacher</span>
										<span class='nam'>$uname</span>
									</a>
								</div>
							</div>
							<div class='msg'>$p_Msg </div>
							<div class='icon_time'>
								<div class='icons'>
									<span id='reply'  onclick=\"teachAndParentChat('textSender',$p_id,'chatRplyDiv');\" class='ico reply'><i class='fa fa-reply'></i></span>
									<span id='thumb_up' class='ico reply'><i class='fa fa-thumbs-up'></i></span>
									<span id='delete' class='ico reply'><i class='fa fa-remove'></i></span>
									<span id='spam' class='ico reply'>spam</span>
									<span id='delete' class='ico reply'><i class='fa fa-unlock-alt'></i></span>
								</div>
								<div class='sendTime'>2days</div>
						</div>
						</div>
						<div id ='textSender$p_id' class = textReply>	
						</div>

						<div id = 'chatRplyDiv$p_id' class = 'replyDive'>
						           $chemba_rply 
						</div>
					"
				;

			}elseif($parent_id > 0){
				#parents Messege
				 
				$box .="<div class='profileSender'>
							<div class='profDisng'>
								<div class='barName'>
									<a href='#' class='Parimg'>$p_prof</a>
									<a href='#' class='ParName'>
										<span class='nam'>$st_uname</span>
										<span class='is'>'s,</span>
										<span class='title'>Parents</span>
									</a>
									<a href='#' class='stdProf'>$st_prof</a>
								</div>
							</div>
							<div class='msg'>$p_Msg </div>
							<div class='icon_time'>
								<div class='icons'>
									<span id='reply' onclick=\"teachAndParentChat('textSender',$p_id,'chatRplyDiv');\" class='ico reply'><i class='fa fa-reply'></i></span>
									<span id='thumb_up' class='ico reply'><i class='fa fa-thumbs-up'></i></span>
									<span id='delete' class='ico reply'><i class='fa fa-remove'></i></span>
									<span id='spam' class='ico reply'>spam</span>
									<span id='delete' class='ico reply'><i class='fa fa-unlock-alt'></i></span>
								</div>
								<div class='sendTime'>2days</div>
						</div>
						</div>
						<div id ='textSender$p_id' class = 'textReply'>
							oooo
						</div>

						<div id = 'chatRplyDiv$p_id' class = 'replyDive'>
						           $chemba_rply 
						</div>
					"
				;
			}
		  
		}
	}

	return [$box,$tid];
}

function ParentChember_AllChatWallRply($pid,$db){
	$chemba    = '';
    $class     = '';
	$id        = 0;
	
    $sql = $db->query("SELECT r.*,u.profile,u.username FROM post_teachandprntreply as r 
	LEFT JOIN post_teachandparent as p ON(r.post_id  = p.id) 
	LEFT JOIN vy_users as u ON(r.replier_id = u.id) 
	WHERE r.post_id = '$pid' ORDER by p.id DESC");
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

			$chemba .=  "<div class='profileReply  chembaDiv'>
			            <div class='profDisng'>
			                <div class='barName'>
			                    <a href='#' class='Parimg'> $profile</a>
			                    <a href='#' class='ParName'>
			                        <span class='nam'> $user </span>
			                    </a>
			                    <a href='#' class='stdProf'><img src='img/profiles/p8.jpg'></a>
				
			                </div>
				
			            </div>
			
						<div class='msg'>$reply</div>
						<div class='icon_time'>
						    <div class='icons'>
						        <span id='thumb_up' class='ico reply'><i class='fa fa-thumbs-up'></i></span>
						        <span id='delete' class='ico reply'><i class='fa fa-remove'></i></span>
						        <span id='spam' class='ico reply'>spam</span>
						        <span id='delete' class=''><i class='fa fa-unlock-alt'></i></span>
					        </div>
						   <div class='sendTime'>25days</div>
						</div>
						</div>
					"
				;  


        }
      
    }
    
    return [$chemba];
}


function singleParentChat($db,$user_id,$p_accId,$p_accuserId){

    $pdata = '';
    $pid = '';
    // // if(isset($_GET['actions']) && $_GET['actions'] === 'singleParentChat'){
    //     $sql        =  null;
    //     $data       =  'No Slider found';
    //     $pid        =  '';
    //     $pdata      =  '';
    //     $p_accId    =  $p_accId;
    //     $u_two      =  31;  //$p_accuserId;



    //     $qry =  "SELECT 
    //                     m.id          as mid,
    //                     m.u_one       as m_one, 
    //                     m.u_two       as m_two, 
    //                     m.msj         as m_msj,
    //                     m.status      as m_status,

    //                     v.id          as vid,
    //                     v.username    as vu,
    //                     v.profile     as vpr
    //                     FROM vy_themsg m 

    //                     LEFT JOIN vy_users as v ON(m.u_two = v.id) 
                        
    //                     WHERE u_one = ?  AND
    //                           u_two = ? 
    //             "
    //     ;


    //     $sql = $db->query($qry,array($user_id,$u_two));


    //     if($sql->count() > 0){
    //         $status       =  true;
    //         $class        =  '';
    //         $width        =  '';
    //         $height       =  '';
    //         $st_profile   =  '';
    //         $mkondo       =  '';

    //         foreach ($sql->results() as $r) {
    //             $width      =  100;
    //             $height     =  100;

    //             #Parent  Details
    //             $p_id       =  $r->mid;           // parent  id
    //             $pid       +=  $p_id;             // parent  id
    //             $u_one      =  $r->u_one;         // teacher id
    //             $p_two      =  $r->u_two;         // parent  id
    //             $msg        =  $r->m_msj;         // teacher id

    //             $p_uname    = $r->vu;             // parent username
    //             $p_prof     =  $r->vpr;           // parent profile
    //             $p_class    =  'p_profile';
    //             $p_prof     =  $db->prfl_pctwithClass($p_prof, $width, $height, $class);    // parent profile   


             
    //             $pdata .= "
    //                      parentChat$p_accId
    //                 <div class ='ParentsWrap' id = 'parentChat' >
    //                     <div class = 'MsgContainer chatBox'>

    //                         <div class = 'back' onclick=\"switchVisbltyQ('ParentsWrap','parentChat$p_accId','parebt')\">Go Back </div>
    //                         <div class='chatContainer'>

    //                             <div class = 'chatheader divdivision' >
    //                                 <div class='introHeader'>
    //                                     <span class='parentTitle'>Parent</span>
    //                                     <span class='pname'>$p_uname</span>
                                        
    //                                     <div >
    //                                         <a href = ''>
    //                                         <span>Moses Mwakatobe (Child Name):</span>
    //                                         <span style='font-style:italic;'>Form 1 B ,</span></a>
    //                                     </div>
    //                                 </div>
    //                             </div>

    //                             <div class = 'ContainerChat'>
            

    //                                 <div class='xoverflow' id = 'prvtMsgs3'>

    //                                     <div class='chatholder'>
    //                                         <div class='divcirlce'>
    //                                             <div class = 'cicle'>$p_prof</div>
    //                                         </div>
                                            
    //                                         <div class ='textChat'>
                                            
    //                                             <p>
    //                                                 $msg
    //                                             </p>
                                                        
                                                            
    //                                         </div>
    //                                         <div class = 'clear'></div>
    //                                     </div>

    //                                </div>
    //                             </div>
                                
    //                             <div class='textEditor'>
    //                                 <div class = 'down_Document' id = 'textDownload'>
    //                                     <div  class ='potea' onclick = \"closeDiv('textDownload');\">X</div>

    //                                     <div class= 'thedoc'  onclick =\"docchoosen('doc_slideBox','textDownload')\">Test.txt</div>
    //                                     <div class='thedoc' onclick =\"docchoosen('doc_slideBox','textDownload')\">Assiment</div>
    //                                     <div class='thedoc' onclick =\"docchoosen('doc_slideBox','textDownload')\">Photo</div>
    //                                 </div>
                                    
    //                                 <div id ='doc_slideBox' class ='doc_slideBox'>
    //                                  <div id = 'slideDown' class = 'openAndClose'  onclick = \"changeHeightslideDown('slideDown','slideUp','doc_slideBox')\">  <i class = 'fa fa-angle-down'></i></div>


    //                                  <div id = 'slideUp' class = 'openAndClose'   onclick = \"changeHeightslideUp('slideUp','slideDown','doc_slideBox')\"> <i class = 'fa fa-angle-up'></i></div>


    //                                     <div  id = 'doc_title' class = 'doc_title'>

    //                                         <div class='doc_discr'>
    //                                             <span>Test Name</span>
    //                                             <span>Form 3 B</span>
    //                                             <span>created: 27/2/2008</span>
    //                                         </div>
    //                                     </div>

    //                                     <div  id = 'doc_title' class = 'doc_title'>

    //                                         <div class='doc_discr'>
    //                                             <span>Test Name</span>
    //                                             <span>Form 3 B</span>
    //                                             <span>created: 27/2/2008</span>
    //                                         </div>  
    //                                     </div>
                                          
    //                                 </div>

    //                                 <div class='chatholder'>
    //                                         <div class='divcirlce'>
    //                                             <div class = 'cicle' id = 'chehh' onclick= \"plusdoc('textDownload','doc_slideBox');\">+</div>
    //                                         </div>
                                            
    //                                         <div class = 'textChat'>
    //                                             <textarea  autofocus='none'   placeholder = 'write something' name='' id='prvtTxt_tp3' cols=''rows=''></textarea> 
    //                                               <div onclick=\"allChembar_pvtMsg('prvtTxt_tp',3,'prvtMsgs','$u_two')\" class='sendPlan'><i class='fa fa-send'></i></div>      
    //                                         </div>
    //                                         <div class = 'clear'></div>
    //                                 </div>
    //                             </div>
    //                         </div>
    //                     </div>
    //                 </div>
    //                 ";
                
    //         }
    //     }else{
    //          $pdata .= "
    //                   parentChat2$p_accId
    //                 <div class ='ParentsWrap' id = 'parentChat' >
    //                     <div class = 'MsgContainer chatBox'>

    //                         <div class = 'back' onclick=\"switchVisbltyQ('ParentsWrap','parentChat$p_accId','parebt')\">Go Back </div>
    //                         <div class='chatContainer'>
    //                             <div class = 'chatheader divdivision' >
    //                                 <div class='introHeader'>
    //                                     <span class='parentTitle'>Parent</span><span class='pname'>Nehemia Daud Mwansasu</span>
    //                                     <div ><a href = ''><span>Moses Mwakatobe :</span><span style='font-style:italic;'>Form 1 B ,</span></a></div>
    //                                     <div ><a href = ''><span>Moses Mwakatobe Mwansasu :</span><span style='font-style:italic; '>Form 1 B parentChat$p_accId ,</span></a></div>
    //                                     <div ><a href = ''><span>Moses Mwakatobe :</span><span style='font-style:italic;'>Form 1 B ,</span></a></div>
    //                                 </div>
    //                             </div>

    //                             <div class = 'ContainerChat'>
            

    //                                 <div id = 'prvtMsgs3' class='xoverflow'>

    //                                     <div class='chatholder'>
                                           
                                            
    //                                         <div class ='textChat'>
                                            
    //                                             <p>
    //                                                  NO MESSAGE
                                            
    //                                             </p>
                                                        
                                                            
    //                                         </div>
    //                                         <div class = 'clear'></div>
    //                                     </div>

                                     
    //                                </div>
    //                             </div>
                                
    //                             <div class='textEditor'>
    //                                 <div class = 'down_Document' id = 'textDownload'>
    //                                     <div  class ='potea' onclick = \"closeDiv('textDownload');\">X</div>

    //                                     <div class= 'thedoc'  onclick =\"docchoosen('doc_slideBox','textDownload')\">Test.txt</div>
    //                                     <div class='thedoc' onclick =\"docchoosen('doc_slideBox','textDownload')\">Assiment</div>
    //                                     <div class='thedoc' onclick =\"docchoosen('doc_slideBox','textDownload')\">Photo</div>
    //                                 </div>
                                    
    //                                 <div id ='doc_slideBox' class ='doc_slideBox'>
    //                                  <div id = 'slideDown' class = 'openAndClose'  onclick = \"changeHeightslideDown('slideDown','slideUp','doc_slideBox')\">  <i class = 'fa fa-angle-down'></i></div>


    //                                  <div id = 'slideUp' class = 'openAndClose'   onclick = \"changeHeightslideUp('slideUp','slideDown','doc_slideBox')\"> <i class = 'fa fa-angle-up'></i></div>


    //                                     <div  id = 'doc_title' class = 'doc_title'>

    //                                         <div class='doc_discr'>
    //                                             <span>Test Name</span>
    //                                             <span>Form 3 B</span>
    //                                             <span>created: 27/2/2008</span>
    //                                         </div>
    //                                     </div>

    //                                     <div  id = 'doc_title' class = 'doc_title'>

    //                                         <div class='doc_discr'>
    //                                             <span>Test Name</span>
    //                                             <span>Form 3 B</span>
    //                                             <span>created: 27/2/2008</span>
    //                                         </div>  
    //                                     </div>
                                          
    //                                 </div>

    //                                 <div class='chatholder'>
    //                                         <div class='divcirlce'>
    //                                             <div class = 'cicle' id = 'chehh' onclick= \"plusdoc('textDownload','doc_slideBox');\">+</div>
    //                                         </div>
                                            
    //                                         <div class = 'textChat'>
    //                                             <textarea  autofocus='none'   placeholder = 'write something' name='' id='prvtTxt_tp' cols=''rows=''>

    //                                             </textarea>   

    //                                             <div onclick=\"allChembar_pvtMsg('prvtTxt_tp',3,'prvtMsgs','$u_two')\" class='sendPlan'><i class='fa fa-send'></i></div>  
    //                                         </div>
    //                                         <div class = 'clear'></div>
    //                                 </div>
    //                             </div>
    //                         </div>
    //                     </div>
    //                 </div>
    //                 ";
                
    //     }



    return [$pdata,$pid];
}


if(isset($_GET['Actionx']) && $_GET['Actionx'] === 'qstnComoser'){
    $sql        =  null;
    $data       =  'No Questionin COmposer found';
    $user_id    =  preg_replace("#[^0-9]#",'',$_GET['user_id']);
    $schoolname =  $_GET['schoolname'];
    $region     =  $_GET['region'];
    $lvl_Std    =  $_GET['levelOrStandard'];
    $p_accId    =  $_GET['p_accId'];
    $u_two      =  $_GET['p_accuserId'];
    $last_id    =  $_GET['qstnCompose_lastId'];
    // $last_id    =  1;



    $qry =  "SELECT
                q.id             as q_Id,
                q.qstnCompz_id   as q_qCompzId,
                q.section        as q_sect,
                q.qNo            as q_no,
                q.qColum         as q_Cno,
                q.topic_title    as q_ttle,
                q.sub_tpc        as q_sttle,
                q.qstn           as q_q,
                q.match_a        as q_match_a,
                q.match_b        as q_match_b,
                q.match_c        as q_match_c,


                m.id             as mid,
                m.user_id        as m_uid, 
                m.subj_id        as m_subjId, 
                m.exam_name      as m_exName,
                m.strt_time      as m_start,
                m.end_time       as m_end,
                m.exam_date      as m_Exdate,
                m.exam_instr     as m_Instr,
                m.schoolname     as m_status,
                m.levelOrStandard     as m_lv,
                m.mkondo         as m_mk,
                m.region         as m_reg,

                v.id          as vid,
                v.username    as vu,
                v.profile     as vpr

                FROM vy_qustion q

                LEFT JOIN vy_exmcompoz as m ON(q.qstnCompz_id = m.id) 
                LEFT JOIN vy_users as v ON(m.user_id = v.id) 
                
                WHERE q.qstnCompz_id = ?
            "
    ;



    $sql = $db->query($qry,array($last_id));


    if($sql->count() > 0){
        $status       =  true;
        $lid          =  '';
        $qdata        =  '';
        $class        =  '';
        $width        =  '';
        $height       =  '';
        $matchIt      =  '';
        $mkondo       =  '';

        foreach ($sql->results() as $r) {
        	$width      =  100;
            $height     =  100;
            $matchIt    =  '';
            $$sectionA  =  '';

        	#  Question Table

            $q_id       =  $r->q_Id;          // qustion Id
            $q_id       =  $r->q_qCompzId;    // qustion compose Id
            $q_sect     =  $r->q_sect;        // qustion section
            $q_no       =  $r->q_no;          // qustion number
            $q_Cno      =  $r->q_Cno;         // qustion colum number
            $q_topic    =  $r->q_ttle;        // qustion topic
            $q_subtopic =  $r->q_sttle;       // qustion sub topic
            $q_q        =  $r->q_q;           // qustion the question
            $match_a    =  $r->q_match_a;     // qustion match_a
            $match_b    =  $r->q_match_b;     // qustion match_b
            $match_c    =  $r->q_match_c;     // qustion match_c

            #profile Info
            $p_prof     =  $r->vu;            // username
            $p_prof     =  $r->vpr;           // profile
            $p_class    =  '';
            $p_prof     =  $db->prfl_pctwithClass($p_prof, $width, $height, $class);  


            if(!empty($match_a) && !empty($match_b) && !empty($match_c)){
                $matchIt .= "
                            <div class='matchz'>
                                <div>
                                    <div class='chois marchCOnsA'>A.</div>
                                    <div class='ges gasessAnswA'>$match_a</div>
                                    <div class='radioMatched'>
                                        <input type='radio' name='match'>
                                    </div>
                                </div>

                                <div>
                                    <div class='chois marchCOnsB'>B.</div>
                                    <div class='ges gasessAnswB'>$match_b</div>
                                    <div class='radioMatched'>
                                        <input type='radio' name='match'>
                                    </div>
                                </div>

                                <div>
                                    <div class='chois marchCOnsC'>C.</div>
                                    <div class='ges gasessAnswC'>$match_c</div>
                                    <div class='radioMatched'>
                                        <input type='radio' name='match'>
                                    </div>
                                </div>
                                
                            </div>
                        "
                ;
            }  

           
           if($q_sect  == "SECTION A" ){
             
               $sectionA .=  "<div class='qc_QuizQust QuizQust'>
                                <div class='QstNo'> $q_no .</div>
                                <div class='question'>
                                    $q_q <br/>

                                    $matchIt
                                </div>
                                <div class='soln'>
                                    <span class='solnMsg'> Sorry Answer is hidden...</span>
                                    <span class='showSoln'>Unhide</span>
                                    <span class='showSoln'>Edit</span>
                                </div>
                            </div>";
           }
          
            $qstn .= "
                    <div class='sectionWrap' id='sectionA'>
                        <div class='testSection'>  SECTION A </div>
                        $sectionA
                    </div>
		    	";
			
        }
        
    $result['qdata'] = $qstn ; $result['status'] = $status;


	}else{
	    $result['qdata'] = 'Error No  teacher Chat Error !!';
	}
}


function result_box($db,$schoolname,$region,$lvl_Std,$mkondo){
    #slide on parent chember;
    $sql        =  null;
    $box        =  'No Slider found';
    $rslt       = array();

    $qry =  "SELECT  
                    r.id                  as pid,
                    r.t_id                as r_tid, 
                    r.s_id                as r_sid,  
                    r.subj_id             as r_subjId,
                    r.exm_name            as r_exmname,
                    r.exmType             as r_exmtyp, 
                    r.dateDone            as r_dtDone, 
                    r.result              as r_rst, 
                    r.date                as r_date, 
                    
                    r.schoolname          as r_schul,
                    r.region              as r_region,
                    r.levelOrStandard     as r_sl,
                    r.mkondo              as r_mkondo,
                    r.level_identify      as r_lIdenty,

                    x.username    as xu,
                    x.profile     as xpr 
                    
                    FROM vy_results  r 
                    LEFT JOIN vy_users as x  ON (r.s_id = x.id) 
                    
                    WHERE 
                       schoolName = ? AND
                       levelOrStandard = ? AND
                       mkondo  = ? AND 
                       region = ?
                    
                    ORDER BY date DESC
                  
            "
    ;

    $sql = $db->query($qry,array($schoolname,$lvl_Std,$mkondo,$region));

    if($sql->count() > 0){
        $status       =  true;
        $Unic_date    =  '';
        $box          =  '';
        $class        =  '';
        $width        =  '';
        $height       =  '';
        $st_profile   =  '';
        $mkondo       =  '';
        $f_student    =  '';
        $s_student    =  '';
        $t_student    =  '';


        foreach ($sql->results() as $r) {
            $width      =  100;
            $height     =  100;

            #teacher  Details
                $p_id       =  $r->pid;           //  id;
                $p_uId      =  $r->r_tid;         // teacher id;
                $st_id      =  $r->r_sid;         // student id;
           

            #Details
                $examType   =  $r->r_exmname;      // Exam name;
                $dateDone   =  $r->r_dtDone;       // Exam daate Done;
                $result     =  $r->r_rst;          // Exam Results;
                $subject    =  $r->r_subjId;       // Subject Id;
                $Unic_date  =  $r->r_date;         // Subject Id;

            #profile
                $class       =  '';
                $st_uname    =  $r->xu;            //  username;
                $profile     =  $r->xpr;           //  profile;
                $prof        =  $db->prfl_pctwithClass($profile, $width, $height, $class);    // profile ;
             

            #School Deatails
                $s_name      =  $r->r_schul;       //  School name;
                $s_lev       =  $r->r_sl;          //  Standard Level
                $mkondo      =  $r->r_mkondo;      //  Mkondo
                $region      =  $r->r_region;      //  region


            #class Inayo onnoza Kwa wastan


            #Student Anaye Ongoza
                // echo $result;
                //$h = $rslt[]          = $result;
            // print_r($h);
         

            // @$firstStudent    = $h[0];
            // @$firstSecond     = $h[1];
            // @$firstThird      = $h[2];

            // if($firstStudent == $result){
            //    $f_student   = $prof;
            // }

            // if($firstSecond  == $result){
            //   $s_student   = $prof;
            // }

            // if($firstThird   == $result){
            //     $t_student   = $prof;
            // }
          
          
           $top3Sdnt = '<div class="divBr Top3Student">
                           <div class="barOne ">
                               <span class="classWin"> 
                                    <a href="#">
                                     '.$f_student .'
                                    </a>
                                </span>
                           </div>
                           <div class="barTwo">
                                <span class="classWin">   
                                     <a href="#">
                                       '.$s_student.'
                                    </a>

                                </span>
                           </div>

                           <div class="barThree">
                                <span class="classWin">   
                                    <a href="#">
                                       '. $t_student .'
                                    </a>

                                </span>
                           </div>
                        </div>
                    '
                ;


            $top10 ='<div class="studentLevel">
                                        <span class="no">1.</span>
                                        <div class="profImg">                       
                                            <img title="Patent Profile" src="img/profiles/p8.jpg" id="parent_img/">
                                        </div>  

                                        <div class="jina">                      
                                            <a href="#">Nehemia Mwansasu</a>
                                        </div>
                                       
                                        <div class="Winningmedal">
                                            <i>m</i>
                                         </div>
                                       
                                        <div class="max">                       
                                            92%
                                        </div>
                    </div>
                      
            ';
          



            $box = '<div class="championShow">
                           <div class="ExamNAmeanDexame">
                                <h4>Safari Examination</h4><div class="donedate">'.$dateDone.'</div>
                                <div>
                                    <i class="icofont icofont-paper"></i>
                                    <span class="examprevw" onclick=\'swicthVisibility("exam_temprate");\'>preview</span>
                                    <span class="emDwn">Exam Download</span>
                                </div>
                           </div>

                            <div class="winnersBar">
                               
                               <div class="divBr">
                                   <div class="barOne">
                                       <span class="classWin">Form 4 A</span>
                                       <!-- <div class = "posNo posTwo">2</div>  -->
                                   </div>
                                   <div class="barTwo">
                                       <span class="classWin">Form 4 B</span>
                                       <!-- <div class = "posNo posFirst">1</div>  -->
                                   </div>

                                   <div class="barThree">
                                       <span class="classWin">Form 4 C</span>
                                    <!--   <div class = "posNo postHREE">3</div>  -->
                                   </div>
                               </div>
                               <header>Winner Class</header>
                            </div>

                            <div class="winnersBar ">

                               '. $top3Sdnt .'

                                <header>Super Student</header>
                            </div>

                            <div class="top10Student">
                                <header>Top 10</header>

                                <div class="topTEnList">
                                    <div class="xoverflow">
                                        '.$top10.'
                                        <div class="studentLevel">
                                            <span class="no">2.</span>
                                            <div class="profImg">                       
                                                <img title="Patent Profile" src="img/profiles/p8.jpg" id="parent_img/">
                                            </div>  

                                            <div class="jina">                      
                                                <a href="#">Johm Mkeleketwa</a>
                                            </div>

                                            <div class="max">                       
                                                82%
                                            </div>
                                        </div>

                                        <div class="studentLevel">
                                            <span class="no">3.</span>
                                            <div class="profImg">                       
                                                <img title="Patent Profile" src="img/profiles/p8.jpg" id="parent_img/">
                                            </div>  

                                            <div class="jina">                      
                                                <a href="#">Nanji oska</a>
                                            </div>

                                            <div class="max">                       
                                                72%
                                            </div>
                                        </div>

                                        <div class="studentLevel">
                                            <span class="no">4.</span>
                                            <div class="profImg">                       
                                                <img title="Patent Profile" src="img/profiles/p8.jpg" id="parent_img/">
                                            </div>  

                                            <div class="jina">                      
                                                <a href="#">Ney wakuta</a>
                                            </div>

                                            <div class="max">                       
                                                62%
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="viewResults_Charts" onclick=\'swicthVisibility("wallRsult");\'>View results and Charts</div>
                        
                        
                        <div id="wallRsult" >
                            <h4><span class="classNamw">FORM 4 A</span> RESULTS</h4>
                            
                            <table>
                                <tbody><tr class="tableList heda">
                                   <td class="checkf">No</td>   
                                   <td>Profile</td> 
                                   <td>student Name</td>
                                    <td class="T_opnion">Opnion</td>    
                                   <td>Max</td>
                                   <td class="static">Statistic</td>        
                                </tr>

                                <tr class="tableList">
                                   <td class="no">
                                         1
                                    </td>
                                   <td class="prfile">
                                       <div class="profImg">
                                            <img src="img/profiles/p4.jpg">
                                        </div>
                                    </td>
                                   <td class="name"><a href="#">fasdfaf</a></td>
                                   <td class="T_opnion">
                                        <span class="viw_opt">Very GOod</span>
                                        <span class="viw_opt_date">2/2/2016</span>
                                   </td>

                                   <td class="max">
                                     <span class="r_max">64</span>
                                       <span class="Maxparc">%</span>
                                    </td>
                                   <td class="static"><a href="statics.php">
                                      <i class="icofont icofont-chart-line" aria-hidden="true"></i>
                                   </a></td>
                                </tr>

                                <tr class="tableList">
                                   <td class="no">
                                        2
                                   </td>

                                   <td class="prfile">
                                       <div class="profImg">
                                            <img src="img/profiles/p4.jpg">
                                        </div>
                                   </td>

                                   <td class="name"><a href="#">fasdfaf</a></td>
                                    <td class="T_opnion">
                                        <span class="viw_opt">Parfect</span>
                                        <span class="viw_opt_date"></span>

                                    </td>
                                   <td class="max">
                                         <span class="r_max">89</span>
                                       <span class="Maxparc">%</span>
                                   </td>

                                  <td class="static"><a href="statics.php">
                                      <i class="icofont icofont-chart-line" aria-hidden="true"></i>
                                   </a></td>
                                </tr>

                                <tr class="tableList">
                                   <td class="no">3</td>
                                   <td class="prfile">
                                       <div class="profImg">
                                            <img src="img/profiles/p4.jpg">
                                        </div>
                                    </td>
                                   <td class="name"><a href="#">Nehemia Mwansasu</a></td>

                                   <td class="T_opnion">
                                        <span class="viw_opt">see me</span>
                                        <span class="viw_opt_date">2/2/2016</span>

                                    </td>
                                   <td class="max">
                                       <span class="r_max">44</span>
                                       <span class="Maxparc">%</span>
                                   </td>
                                   <td class="static"><a href="statics.php">
                                      <i class="icofont icofont-chart-line" aria-hidden="true"></i>
                                   </a></td>
                                </tr>

                                   <tr class="tableList">
                                    <td class="no">
                                       4
                                    </td>
                                    
                                    <td class="prfile">
                                       <div class="profImg">
                                                    <img src="img/profiles/p4.jpg">
                                                </div>
                                         </td>
                                    
                                    <td class="name">
                                       <a href="#">Neema Mwansasu</a>
                                    </td>
                                    
                                    <td class="T_opnion">
                                        <span class="viw_opt">Very GOod</span>
                                        <span class="viw_opt_date"></span>

                                    </td>
                                    <td class="max">
                                        <span class="r_max">94</span>
                                       <span class="Maxparc">%</span>

                                    </td>

                                    <td class="static"><a href="statics.php">
                                       <i class="icofont icofont-chart-line" aria-hidden="true"></i>
                                    </a></td>

                                   </tr>
                            </tbody></table>
                          
                            <div class="teacha_advc">
                                <div class="teacha_advc_header">
                                    <div class="blckA">
                                        <span>T</span>
                                        <span>e</span>
                                        <span>a</span> 
                                        <span>c</span>
                                        <span>h</span>
                                        <span>e</span>
                                        <span>r</span>
                                    </div>

                                    <div class="blckB">
                                        <span> A</span>
                                        <span>d</span>
                                        <span>i</span>
                                        <span>v</span>
                                        <span> e</span>
                                    </div>
                                </div>
                                <div class="Advx">
                                    Matokeo xo mazuri kabsa kwa sababu watu hawasomi haiwezekan wa kwanza ana 90 wa pili ana sabini kwan mm nafundisha mtu mmja darasana kummazenu watoto machoko kweli
                                </div>
                            </div>

                                <div class="chart">
                                        
                                    <div class="whatsOnurmid">
                                        <textarea class="Onurmind"></textarea>
                                        <div id="send_vchart">
                                            <div id="post_v" class="post_post"><input class="p" type="submit" id="submit_post" value="Post Update"></div>
                                            <div id="upload_photo" class="psot_post post_photo"><i class="fa fa-camera" id="cover_camera_prof"></i></div>
                                        </div>
                                    </div>
                                    <div class="xoverflow">
                                       
                                        <div id="posted" class="chartUserOne">
                                            <div class="posted_profile">
                                                <div class="profImg">
                                                    <img src="img/profiles/p4.jpg">
                                               </div>
                                            </div>
                                            
                                            <div class="name_time">
                                                <span class="name">Jessica Sanders</span>
                                                <span class="time_ago">5hrs Ago</span>
                                            </div>
                                            
                                            <div class="msg">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                            </div>

                                            <div class="icons">
                                                <span id="reply" class="ico reply"><i class="fa fa-reply"></i></span>
                                                <span id="love" class="ico reply"><i class="fa fa-heart-o"></i></span>
                                                <span id="thumb_up" class="ico reply"><i class="fa fa-thumbs-up"></i></span>
                                                <span id="delete" class="ico reply"><i class="fa fa-remove"></i></span>
                                                <span id="spam" class="ico reply">spam</span>
                                                <span id="delete" class="ico reply"><i class="fa fa-unlock-alt"></i></span>
                                            </div>
                                        </div>


                                        <div id="reply_posted">
                                            <div class="posted_profile">
                                                <div class="posted_cicle">
                                                    <img src="img/profiles/p1.jpg">
                                               </div>
                                            </div>
                                            <div class="name_time">
                                            <span class="name">Challo</span><span class="time_ago">8hrs Ago</span></div>
                                            <div class="msg">Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi</div>
                                            <div class="icons">
                                                <span id="reply" class="ico reply"><i class="fa fa-reply"></i></span>
                                                <span id="love" class="ico reply"><i class="fa fa-heart-o"></i></span>
                                                <span id="thumb_up" class="ico reply"><i class="fa fa-thumbs-up"></i></span>
                                                <span id="delete" class="ico reply"><i class="fa fa-remove"></i></span>
                                                <span id="spam" class="ico reply">spam</span>
                                                <span id="delete" class="ico reply"><i class="fa fa-unlock-alt"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                        
                                </div>
                        </div>



           ';
         

        }
    }

    return [$box,$Unic_date];
}



// function qstnComoser($db,$d){

    //     // if(isset($_GET['action']) && $_GET['action'] === 'qstnComoser'){
    //     $sql        =  null;
    //     $data       =  'No Questionin COmposer found';
       

    //     $qry =  "SELECT
    //                 q.id             as q_Id,
    //                 q.qstnCompz_id   as q_qCompzId,
    //                 q.section        as q_sect,
    //                 q.qNo            as q_no,
    //                 q.qColum         as q_Cno,
    //                 q.topic_title    as q_ttle,
    //                 q.sub_tpc        as q_sttle,
    //                 q.qstn           as q_q,
    //                 q.match_a        as q_match_a,
    //                 q.match_b        as q_match_b,
    //                 q.match_c        as q_match_c,


    //                 m.id             as mid,
    //                 m.user_id        as m_uid, 
    //                 m.subj_id        as m_subjId, 
    //                 m.exam_name      as m_exName,
    //                 m.strt_time      as m_start,
    //                 m.end_time       as m_end,
    //                 m.exam_date      as m_Exdate,
    //                 m.exam_instr     as m_Instr,
    //                 m.schoolname     as m_status,
    //                 m.levelOrStandard     as m_lv,
    //                 m.mkondo         as m_mk,
    //                 m.region         as m_reg,

    //                 v.id          as vid,
    //                 v.username    as vu,
    //                 v.profile     as vpr

    //                 FROM vy_qustion q

    //                 LEFT JOIN vy_exmcompoz as m ON(q.qstnCompz_id = m.id) 
    //                 LEFT JOIN vy_users as v ON(m.user_id = v.id) 
                    
    //                 WHERE q.qstnCompz_id = ?
    //             "
    //     ;



    //     $sql = $db->query($qry,array($d));


    //     if($sql->count() > 0){
    //         $status       =  true;
    //         $lid          =  '';
    //         $qdata        =  '';
    //         $class        =  '';
    //         $width        =  '';
    //         $height       =  '';
    //         $matchIt      =  '';
    //         $mkondo       =  '';

    //         foreach ($sql->results() as $r) {
    //             $width      =  100;
    //             $height     =  100;
    //             $matchIt    =  '';
    //             $$sectionA  =  '';

    //             #  Question Table

    //             $q_id       =  $r->q_Id;          // qustion Id
    //             $q_id       =  $r->q_qCompzId;    // qustion compose Id
    //             $q_sect     =  $r->q_sect;        // qustion section
    //             $q_no       =  $r->q_no;          // qustion number
    //             $q_Cno      =  $r->q_Cno;         // qustion colum number
    //             $q_topic    =  $r->q_ttle;        // qustion topic
    //             $q_subtopic =  $r->q_sttle;       // qustion sub topic
    //             $q_q        =  $r->q_q;           // qustion the question
    //             $match_a    =  $r->q_match_a;     // qustion match_a
    //             $match_b    =  $r->q_match_b;     // qustion match_b
    //             $match_c    =  $r->q_match_c;     // qustion match_c

    //             #profile Info
    //             $p_prof     =  $r->vu;            // username
    //             $p_prof     =  $r->vpr;           // profile
    //             $p_class    =  '';
    //             $p_prof     =  $db->prfl_pctwithClass($p_prof, $width, $height, $class);  


    //             if(!empty($match_a) && !empty($match_b) && !empty($match_c)){
    //                 $matchIt .= "
    //                             <div class='matchz'>
    //                                 <div>
    //                                     <div class='chois marchCOnsA'>A.</div>
    //                                     <div class='ges gasessAnswA'>$match_a</div>
    //                                     <div class='radioMatched'>
    //                                         <input type='radio' name='match'>
    //                                     </div>
    //                                 </div>

    //                                 <div>
    //                                     <div class='chois marchCOnsB'>B.</div>
    //                                     <div class='ges gasessAnswB'>$match_b</div>
    //                                     <div class='radioMatched'>
    //                                         <input type='radio' name='match'>
    //                                     </div>
    //                                 </div>

    //                                 <div>
    //                                     <div class='chois marchCOnsC'>C.</div>
    //                                     <div class='ges gasessAnswC'>$match_c</div>
    //                                     <div class='radioMatched'>
    //                                         <input type='radio' name='match'>
    //                                     </div>
    //                                 </div>
                                    
    //                             </div>
    //                         "
    //                 ;
    //             }  

               
    //            if($q_sect  == "SECTION A" ){
                 
    //                $sectionA .=  "<div class='qc_QuizQust QuizQust'>
    //                                 <div class='QstNo'> $q_no .</div>
    //                                 <div class='question'>
    //                                     $q_q <br/>

    //                                     $matchIt
    //                                 </div>
    //                                 <div class='soln'>
    //                                     <span class='solnMsg'> Sorry Answer is hidden...</span>
    //                                     <span class='showSoln'>Unhide</span>
    //                                     <span class='showSoln'>Edit</span>
    //                                 </div>
    //                             </div>";
    //            }
              
    //             $qstn .= "
    //                     <div class='sectionWrap' id='sectionA'>
    //                         <div class='testSection'>  SECTION A </div>
    //                         $sectionA
    //                     </div>
    //                 ";
                
    //         }
            
       
    //     }

    //     return [$qstn];
// }


echo "data:".json_encode($result)."\n\n";


