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
    $section      =  $_GET['status'];
    $subjectId    =  preg_replace("#[^0-9]#",'',$_GET['subjectId']);
    $real_user    =  preg_replace("#[^0-9]#",'',$_GET['real_user']);

    if ($section == 'b') {

        $sql  = $db->query("SELECT p.*,u.*,p.id as lid FROM vy_wallsubject as p LEFT JOIN vy_users as u ON p.user_id  = u.id WHERE subject_id = ?  ORDER BY p.date DESC ", array($subjectId));

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

               
            $prof_chanel = $r->profile;
            $width   = 100;
            $height  = 100;
            $class   =  '';
            $prof     = $db->prfl_pctwithClass($prof_chanel, $width, $height, $class);

            $r            = get_replies($msg_id,$db,$classIncss_theanswer,$real_user);
            $replies      = $r[0];
            $rid          = $r[1];
            $r            = $r[2];
            $lid         .= $rid;

            $s            = get_replies2($msg_id,$db,$classIncss_theanswer,$real_user);
            $s_replies    = $s[0];
            $s_rid        = $s[1];
            $s_r          = $s[2];

            // $s_lid       .= $s_rid;
            // $s_count_lid  = count($s_rid);
         

            if($replies == ""){
            	$inreplies      =  " <textarea placeholder='Anser Here' id = 'wallquestionAnswer$msg_id'></textarea>";
            	$AboutSendRply  =  "<span class='clickedBoton sendHer'  id = 'sendReplying$msg_id' 
            	                    onclick = \"sendAnswer('$msg_id','$id')\">SEND ANSWER</span>";
            	$AboutEditRply  =   "";

            }else{

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


        //

        $result = array('data'=>$data,'status'=>$status,'id'=>$lid,'teachers'=>'');
    }else{
        $result = array('data'=>'No data found','status'=>$status);
    }
}



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
	// $db->query("SELECT p.*,u.*,p.id as lid FROM vy_wallsubjectreply as p LEFT JOIN vy_users as u ON p.replier_id  = u.id
 //     LEFT JOIN vy_wallsubject as p ON(r.wallsubject_id  = p.id)
	//   ORDER BY p.date DESC";

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









if(isset($_GET['action']) && $_GET['action'] === 'tSliderLive'){
    $sql        =  null;
    $data       =  'No Slider found';
    $user_id    =  preg_replace("#[^0-9]#",'',$_GET['user_id']);
    $schoolname =  $_GET['schoolname'];
    $region     =  $_GET['region'];
    $region     =  $_GET['region'];
    $lvl_Std    =  $_GET['levelOrStandard'];



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
        $data         =  '';
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

           


                $data .= "<div class='box'>
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

			    	";
			}else{
            	$mkondo       = " <span class='info2 parentNames'> $p_lev / $p_mkondo </span>";


            	 $data .= "<div class='box'>
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
			    	</div>";
            }
           


        }
        
    $result = array('data'=>$data,'status'=>$status);


	}else{
	    $result = array('data'=>'Error method is not allowed!!');
	}
}








if(isset($_GET['action']) && $_GET['action'] === 'SingleParentChat'){
    $sql        =  null;
    $data       =  'No Slider found';
    $user_id    =  preg_replace("#[^0-9]#",'',$_GET['user_id']);
    $schoolname =  $_GET['schoolname'];
    $region     =  $_GET['region'];
    $region     =  $_GET['region'];
    $lvl_Std    =  $_GET['levelOrStandard'];
    $p_accId    =  $_GET['p_accId'];
    $u_two      =  $_GET['p_rcvId'];



    $qry =  "SELECT 
                    m.id          as mid,
                    m.u_one       as m_one, 
                    m.u_two       as m_two, 
                    m.msj         as m_msj,
                    m.status      as m_status,

                    v.id          as vid,
                    v.username    as vu,
 	                v.profile     as vpr
                    FROM vy_themsg m 

                    LEFT JOIN vy_users as v ON(m.two = v.id) 
                    
                    WHERE u_one = ?  AND
                          u_two = ? 
            "
    ;



    $sql = $db->query($qry,array($user_id,$u_two));


    if($sql->count() > 0){
        $status       =  true;
        $lid          =  '';
        $data         =  '';
        $class        =  '';
        $width        =  '';
        $height       =  '';
        $st_profile   =  '';
        $mkondo       =  '';

        foreach ($sql->results() as $r) {
        	$width      =  100;
            $height     =  100;

        	#Parent  Details
            $p_id       =  $r->id;           // parent id
            $u_one      =  $r->u_one;         // teacher id
            $p_uname    =  $r->u_two;         // parent id

            $p_prof     =  $r->vpr;           // parent profile
            $p_class    =  'p_profile';
            $p_prof     =  $db->prfl_pctwithClass($p_prof, $width, $height, $class);    // parent profile   

            
    


            // #student Details
                // $st_id       =  $r->sid;           // student id
	            // $st_uId      =  $r->suid;          // student user id
	            // $st_uname    =  $r->xu;            // student username
	            // $st_prof     =  $r->xpr;           // student profile
	            // $st_lev      =  $r->s_sl;          // student level or stanbdard eg form 1 or certificate
	            // $st_mkond    =  $r->s_mkondo;      // student level or stanbdard eg form 1 or certificate
	            // $st_prof     =  $db->prfl_pctwithClass($st_prof, $width, $height, $p_class);    // Student profile  
	   	         //  $mkondo       = " <span class='info2 parentNames'> $p_lev / $p_mkondo </span>";
	            
	            
            	// $st_profile   = "<a href='' class='studentProfile'>$st_prof</a>";
            // $mkondo       =  "<span class='info2 parentNames'> $p_lev / $p_mkondo </span>";

           


            $data .= "

                <div class ='ParentsWrap' id = 'parentChat$p_accId' >
					<div class = 'MsgContainer chatBox'>
					

				
					   
					     <div class = 'back' onclick=\"switchVisbltyQ('ParentsWrap','parentChat$p_accId','parebt')\">Go Back </div>
					    <div class='chatContainer'>
					        <div class = 'chatheader divdivision' >
					            <div class='introHeader'>
					                <span class='parentTitle'>Parent</span><span class='pname'>Nehemia Daud Mwansasu</span>
					                <div ><a href = ''><span>Moses Mwakatobe :</span><span style='font-style:italic;'>Form 1 B ,</span></a></div>
					                <div ><a href = ''><span>Moses Mwakatobe Mwansasu :</span><span style='font-style:italic; '>Form 1 B ,</span></a></div>
					                <div ><a href = ''><span>Moses Mwakatobe :</span><span style='font-style:italic;'>Form 1 B ,</span></a></div>
					            </div>
					        </div>

					        <div class = 'ContainerChat'>
		

					            <div class=xoverflow>

					                <div class='chatholder'>
					                    <div class='divcirlce'>

					                        <div class = 'cicle'></div>
					                    </div>
					                    
					                    <div class ='textChat'>
					                    
					                        <p>
					                                hellow teacher Yam Rsdasdasd
					                    
					                        </p>
					                                
					                                    
					                    </div>
					                    <div class = 'clear'></div>
					                </div>

					                <div class='chatholder'>
					                    
				                        <div class='divcirlce rightdiv' style ='float:right'>
				                            <div class = 'cicle'></div>
				                        </div>
				                        
				                        <div class = 'textChat' style ='float:right'>
				                            <p>
				                                    asdfsafafjkalfaf akjsfakljfafa fkaljfak fakj fka
				                            </p>         
				                        </div>
				                    
				                        <div class ='clear'></div>
					                </div>

					                <div class='chatholder'>
				                        <div class='divcirlce'>
				                            <div class = 'cicle'></div>
				                        </div>
				                        
				                        <div class ='textChat'>
				                            <p>
				                                hellow teacher
				                            </p>                
				                        </div>
				                        <div class = 'clear'></div>
					                </div>
					           </div>
					        </div>
					        
					        <div class='textEditor'>
						        <div class = 'down_Document' id = 'textDownload'>
						            <div  class ='potea' onclick = \"closeDiv('textDownload');\">X</div>

						            <div class= 'thedoc'  onclick =\"docchoosen('doc_slideBox','textDownload')\">Test.txt</div>
						            <div class='thedoc' onclick =\"docchoosen('doc_slideBox','textDownload')\">Assiment</div>
						            <div class='thedoc' onclick =\"docchoosen('doc_slideBox','textDownload')\">Photo</div>
						        </div>
                                
						        <div id ='doc_slideBox' class ='doc_slideBox'>
						         <div id = 'slideDown' class = 'openAndClose'  onclick = \"changeHeightslideDown('slideDown','slideUp','doc_slideBox')\">  <i class = 'fa fa-angle-down'></i></div>


						         <div id = 'slideUp' class = 'openAndClose'   onclick = \"changeHeightslideUp('slideUp','slideDown','doc_slideBox')\"> <i class = 'fa fa-angle-up'></i></div>


						        	<div  id = 'doc_title' class = 'doc_title'>

						        	    <div class='doc_discr'>
						        	     	<span>Test Name</span>
						        	     	<span>Form 3 B</span>
						        	     	<span>created: 27/2/2008</span>
						        	    </div>
						            </div>

						            <div  id = 'doc_title' class = 'doc_title'>

						        	    <div class='doc_discr'>
						        	     	<span>Test Name</span>
						        	     	<span>Form 3 B</span>
						        	     	<span>created: 27/2/2008</span>
						        	    </div>  
						        	</div>
                                      
						        </div>

			                    <div class='chatholder'>
			                            <div class='divcirlce'>
			                                <div class = 'cicle' id = 'chehh' onclick= \"plusdoc('textDownload','doc_slideBox');\">+</div>
			                            </div>
			                            
			                            <div class = 'textChat'>
			                                <textarea  autofocus='none'   placeholder = 'write something' name='' id='' cols=''rows=''></textarea>      
			                            </div>
			                            <div class = 'clear'></div>
			                    </div>
					        </div>
					    </div>
					</div>
				</div>
		    	";
			
        }
        
    $result = array('data'=>$data,'status'=>$status);


	}else{
	    $result = array('data'=>'Error teacher Chat Error !!');
	}
}

echo "data:".json_encode($result)."\n\n";


