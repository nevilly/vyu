<?php
/**
 * Created by PhpStorm.
 * User: reddeath
 * Date: 7/7/2018
 * Time: 4:49 PM
 */
error_reporting(E_ALL);

require_once ('core/init.php');


class post{

    public $db;

    public function __construct(){
        $this->db = DB::getInstance();

        if(isset($_POST['action']) && !empty($_POST['action'])){
            $action = $_POST['action'];
            if(method_exists($this,$action)){

                $this->$action();
            }else{
                $this->response($this->error('Error method is not allowed!'));
            }
        }else{
            $this->response($this->error('Error method is not allowed!'));
        }
    }

    private function post_data(){
        if(isset($_POST['user']) &&
            !empty($_POST['user']) &&
            isset($_POST['post']) &&
            !empty($_POST['frompage'])) {
            $user = preg_replace("#[^0-9]#",'',$_POST['user']);
            $post = $this->db->test_input($_POST['post']);
            $priv = preg_replace("#[^0-9]#",'',$_POST['privilege']);
            $frompage = $_POST['frompage'];


            $insert = $this->db->insert('post',array('user_id'=>$user,
                'post'=>$post,
                'media'=>'',
                'time_posted'=>date('Y-m-d H:i:s'),
                'priviledge' => $priv,
                'section' => $frompage
            ));

            if($insert){
                $this->response($this->success(true));
            }else{
                $this->response($this->error('An error occurred while processing your request, Please try again'.$this->db->error()));
            }
        }else{
            $this->response($this->error(' post data is required'));
        }
    }

    private function post_reply(){
        if(isset($_POST['user']) &&
            !empty($_POST['user']) &&
            isset($_POST['post'])) {
            $user = preg_replace("#[^0-9]#",'',$_POST['user']);
            $pid = preg_replace("#[^0-9]#",'',$_POST['pid']);
            $post = $this->db->test_input($_POST['post']);
            $sender = $this->db->test_input($_POST['sender']);


            $insert = $this->db->insert('vy_reply',array(
                'msg_id'=>$pid,
                'send_id'=>$sender,
                'replier_id'=>$user,
                'msg'=>$post,
                'date'=>date('Y-m-d H:i:s')
            ));

            if($insert){
                $this->response($this->success(true));
            }else{
                $this->response($this->error('An error occurred while processing your request, Please try again'.$this->db->error()));
            }
        }else{
            $this->response($this->error(' reply data is required'));
        }
    }

    private function post_qstn(){
        if(isset($_POST['user']) &&
            !empty($_POST['user']) &&
            isset($_POST['q_body']) &&
            !empty($_POST['q_sculname'])) {
                // query: 'action=post_qstn&user=' + user.user_id + 
                    //  '&section=' + q_section.value() +
                    //  '&q_donedate=' + q_donedate.value() +
                    //  '&q_sculname=' + q_sculname.value() +
                    //  '&subjectName=' + subjectName.value() +
                    //  '&q_topicname=' + q_topicname.value() +
                    //  '&q_subtopic=' + q_subtopic.value() +
                    //  '&q_no=' + q_no.value() +
                    //  '&q_nocolum=' + q_nocolum.value() +
                    //  '&q_body=' + q_body.value() +
                    //  '&matchItem_a=' + matchItem_a.value() +
                    //  '&matchItem_b=' + matchItem_b.value() +
                    //  '&matchItem_c=' + matchItem_c.value() +
                    //  '&subjName=' + user.subjectName + 
                    //  '&subject_id=' + user.subject_id +
                //  '&status=' + user.status ,

            $user         =  preg_replace("#[^0-9]#",'',$_POST['user']);
            $section      =  $this->db->test_input($_POST['section']);
            $q_donedate   =  $this->db->test_input($_POST['q_donedate']);
            $q_sculname   =  $this->db->test_input($_POST['q_sculname']);
            $subjectName  =  $this->db->test_input($_POST['subjectName']);
            $q_topicname  =  $this->db->test_input($_POST['q_topicname']);
            $q_subtopic   =  $this->db->test_input($_POST['q_subtopic']);
            $q_no         =  $this->db->test_input($_POST['q_no']);
            $q_nocolum    =  $this->db->test_input($_POST['q_nocolum']);
            $q_body       =  $this->db->test_input($_POST['q_body']);
            $matchItem_a  =  $this->db->test_input($_POST['matchItem_a']);
            $matchItem_b  =  $this->db->test_input($_POST['matchItem_b']);
            $matchItem_c  =  $this->db->test_input($_POST['matchItem_c']);
            $subjName     =  $this->db->test_input($_POST['subjName']);
            $subject_id   =  $this->db->test_input($_POST['subject_id']);
            $status       =  $this->db->test_input($_POST['status']);
            
            
            if($status == 'b'){
               $insert = $this->db->insert('vy_wallsubject',array( 
                                            'user_id'      =>  $user,
                                            'section'      =>  $section,
                                            'qstnNo'       =>  $q_no,
                                            'columNo'      =>  $q_nocolum,
                                            'topics_title' =>  $q_topicname,
                                            'sub_topic'    =>  $q_subtopic,
                                            'ideaOrQstn'   =>  $q_topicname,
                                            'subject_id'   =>  $subject_id,
                                            'subject_name' =>  $subjName,
                                            'ideaOrQstn'   =>  $q_body,
                                            'schoolnam'    =>  $q_sculname,
                                            'examdate'     =>  $q_donedate,
                                            'date'         =>  date("Y-m-d H:i:s"),
                                            'match_a'      =>  $matchItem_a,
                                            'match_b'      =>  $matchItem_b,
                                            'match_c'      =>  $matchItem_c,
                                            'status'       =>  'b'));
           }

            if($insert){
                $this->response($this->success(true));
            }else{
                $this->response($this->error('An error occurred while processing your request, Please try again'.$this->db->error()));
            }
        }else{
            $this->response($this->error(' post data is required'));
        }
    }

    private function reply_qstn(){
        if(isset($_POST['user']) &&
            !empty($_POST['user']) &&
            isset($_POST['post'])) {
            $user = preg_replace("#[^0-9]#",'',$_POST['user']);
            $q_rplyid = preg_replace("#[^0-9]#",'',$_POST['q_rplyid']);
            $post = $this->db->test_input($_POST['post']);
            $sender = $this->db->test_input($_POST['sender']);


            $insert = $this->db->insert('vy_wallsubjectreply',array(
                'wallsubject_id'=>$q_rplyid,
                'sender_id'=>$sender,
                'replier_id'=>$user,
                'msg'=>$post,
                'date'=>date('Y-m-d H:i:s')
            ));

            if($insert){
                $this->response($this->success(true));
            }else{
                $this->response($this->error('An error occurred while processing your request, Please try again'.$this->db->error()));
            }
        }else{
            $this->response($this->error(' reply data is required'));
        }
    }

    /////////////////////TeacherWall All

    private function teacherAndparentChat(){
        if(isset($_POST['user']) &&
            !empty($_POST['user']) &&
            isset($_POST['post']) ) {
                   
            $teach_id     = preg_replace("#[^0-9]#",'',$_POST['teach_id']);
            $user         = preg_replace("#[^0-9]#",'',$_POST['user']);
            $subj_id      = preg_replace("#[^0-9]#",'',$_POST['subject_id']);
            $post         = $this->db->test_input($_POST['post']);
            $schoolname   = $this->db->test_input($_POST['schoolname']);
            $leveldrd     = $this->db->test_input($_POST['levelOrStandard']);
            $mkondo       = $this->db->test_input($_POST['mkondo']);
            $region       = $this->db->test_input($_POST['region']);
            $level_identify       = $this->db->test_input($_POST['level_identify']);

            $insert = $this->db->insert('post_teachandparent',array('sender_id'=>$user,
                'subject_id'  => $subj_id,
                'msg'         => $post,
                'photo'       => '',
                'date'        => date('Y-m-d H:i:s'),
                't_id'        => $teach_id,
                'schoolname'  => $schoolname,
                'levelOrStandard'    => $leveldrd,
                'mkondo'      => $mkondo,
                'region'      => $region,
                'level_identify' => $level_identify

            ));

            if($insert){
                $this->response($this->success(true));
            }else{
                $this->response($this->error('An error occurred while processing your request(parent Chember, Allchats), Please try again'.$this->db->error()));
            }
        }else{
            $this->response($this->error(' post data in teacher and parent chat wall is required'));
        }
    }

    private function teacherAndparentChat_reply(){
        if(isset($_POST['user']) &&
            !empty($_POST['user']) &&
            isset($_POST['post'])) {
            $user = preg_replace("#[^0-9]#",'',$_POST['user']);
            $pid = preg_replace("#[^0-9]#",'',$_POST['pid']);
            $post = $this->db->test_input($_POST['post']);
           

            $insert = $this->db->insert('post_teachandprntreply',array(
                'post_id'=>$pid,
                'sender_id'=>'',
                'replier_id'=>$user,
                'msg'=>$post,
                'date'=>date('Y-m-d H:i:s')
            ));

            if($insert){
                $this->response($this->success(true));
            }else{
                $this->response($this->error('An error occurred while processing your request, Please try again'.$this->db->error()));
            }
        }else{
            $this->response($this->error(' reply data is required'));
        }
    }

    private function teacherAndparentChat_priveteChat(){
        if(isset($_POST['user']) &&
            !empty($_POST['user']) &&
            isset($_POST['post'])) {
            $user = preg_replace("#[^0-9]#",'',$_POST['user']);
            $u_two = preg_replace("#[^0-9]#",'',$_POST['u_two']);
            $post = $this->db->test_input($_POST['post']);
           

            $insert = $this->db->insert('vy_themsg',array(
                'u_one'=>$user,
                'u_two'=>$u_two,
                'msj'=>$post,
                'date'=>date('Y-m-d H:i:s')
            ));

            if($insert){
                $this->response($this->success(true));
            }else{
                $this->response($this->error('An error occurred Single Parent Chat while processing your request, Please try again'.$this->db->error()));
            }
        }else{
            $this->response($this->error(' reply data is required'));
        }
    }



    public function postExam(){
        
        if(isset($_POST['user']) &&
                !empty($_POST['user']) &&
                isset($_POST['dateforExam']) ) {
                $user         = preg_replace("#[^0-9]#",'',$_POST['user']);
                $subj_id      = preg_replace("#[^0-9]#",'',$_POST['subject_id']);
                $schoolname   = $this->db->test_input($_POST['schoolname']);
                $leveldrd     = $this->db->test_input($_POST['levelOrStandard']);
                $mkondo       = $this->db->test_input($_POST['mkondo']);
                $region       = $this->db->test_input($_POST['region']);
                $level_identify       = $this->db->test_input($_POST['level_identify']);


                $Exam_name       = $this->db->test_input($_POST['Exam_name']);
                $qtnType         = $this->db->test_input($_POST['qtnType']);
                $dateforExam     = $this->db->test_input($_POST['dateforExam']);
                $strtExampTime   = $this->db->test_input($_POST['strtExampTime']);
                $EndExamTime     = $this->db->test_input($_POST['EndExamTime']);
                $TimeexamInstr   = $this->db->test_input($_POST['TimeexamInstr']);



                $insert = $this->db->insert('vy_exmCompoz',array('user_id'=>$user,
                    'subj_id'         => $subj_id,
                    'exam_name'       => $Exam_name,
                    'exam_type'       => $qtnType,
                    'strt_time'       => $strtExampTime,
                    'end_time'        => $EndExamTime,
                    'exam_date'       => $dateforExam,
                    'exam_instr'      => $TimeexamInstr,
                    'schoolname'      => $schoolname,
                    'levelOrStandard' => $leveldrd,
                    'mkondo'          => $mkondo,
                    'region'          => $region,
                    'level_identify'  => $level_identify,
                    'date'            => date('Y-m-d H:i:s')

                ));

                 #I need last id  dont get yet......

                // $id = $insert->lastInsertId();


                if($insert){
                    $this->response(array('id'=> 1));
                }else{
                    $this->response($this->error('An error occurred while processing your request, Please try again'.$this->db->error()));
                }
        }else{
            $this->response($this->error(' post data in teacher and parent chat wall is required'));
        }
    }


    public function postComposeQstn(){
        if(isset($_POST['user']) &&
            !empty($_POST['user']) &&
            isset($_POST['qc_qstn']) ) {
            $user         = preg_replace("#[^0-9]#",'',$_POST['user']);
            $qc_id        = preg_replace("#[^0-9]#",'',$_POST['qc_lastId']);   // question compose id 
            $qc_section   = $this->db->test_input($_POST['qc_section']);
            $qc_tpcQstn   = $this->db->test_input($_POST['qc_sName']);         //  question Compose Name
            $mkondo       = $this->db->test_input($_POST['qc_tpcQstn']);       //  question Compose Topc
            $mkondo       = $this->db->test_input($_POST['qc_tpcQstn']);       //  question Compose Topc
            $qc_no        = $this->db->test_input($_POST['qc_no']);            //  question Compose No
            $qc_ctgry     = $this->db->test_input($_POST['qc_ctgry']);         //  question Compose Colum
            $qc_ansDsply  = $this->db->test_input($_POST['qc_ansDsply']);      //  question Display or not


            $qc_qstn      = $this->db->test_input($_POST['qc_qstn']);        // question 
            $qc_gessA     = $this->db->test_input($_POST['qc_gessA']);       //  match A
            $qc_gessB     = $this->db->test_input($_POST['qc_gessB']);       //  match B
            $qc_gessC     = $this->db->test_input($_POST['qc_gessC']);       //  match C
            //$qc_gessD   = $this->db->test_input($_POST['$qc_gessD']);      //  match D
            $qc_Ans       = $this->db->test_input($_POST['qc_Ans']);         //  question compose Answer

            $insert = $this->db->insert('vy_qustion',array(
                'qstnCompz_id'    => $qc_id,
                'section'         => $qc_section,
                'qNo'             => $qc_no,
                'qColum'          => $qc_ctgry,
                'topic_title'     => $qc_tpcQstn,
                'qstn'            => $qc_qstn,
                'match_a'         => $qc_gessA,
                'match_b'         => $qc_gessB,
                'match_c'         => $qc_gessC,
                'tch_ans'         => $qc_Ans

            ));

            if($insert){
                $this->response($this->success(true));
            }else{
                $this->response($this->error('An error occurred while processing your request, Please try again'.$this->db->error()));
            }
        }else{
            $this->response($this->error(' post data in Compose Questions chat wall is required'));
        }
    } 

    public function idOnly(){
        if(isset($_POST['real_user']) &&
            !empty($_POST['real_user']) &&
            isset($_POST['u_two']) ) {

            $user         = preg_replace("#[^0-9]#",'',$_POST['real_user']);
            $u_tw        = preg_replace("#[^0-9]#",'',$_POST['u_two']);   



            $qry =  "SELECT 
                        m.id          as mid,
                        m.u_one       as mone, 
                        m.u_two       as mtwo, 
                        m.msj         as m_msj,
                        m.status      as m_status,

                        v.id          as vid,
                        v.username    as vu,
                        v.profile     as vpr
                        FROM vy_themsg m 

                        LEFT JOIN vy_users as v ON(m.u_two = v.id) 
                        
                        WHERE u_one = ?  AND
                              u_two = ? 
                "
            ;

            $sql = $this->db->query($qry,array($user,$u_tw));

            if($sql->count() > 0){
                $holder       = '';
                $status       =  true;
                $class        =  '';
                $width        =  '';
                $height       =  '';
                $st_profile   =  '';
                $mkondo       =  '';

                foreach ($sql->results() as $r) {
                    $width      =  100;
                    $height     =  100;

                    #Parent  Details
                    $p_id       =  $r->mid;           // parent  id
                    //$pid       +=  $p_id;             // parent  id
                    $u_one      =  $r->uone;         // teacher id
                    $p_two      =  $r->utwo;         // parent  id
                    $msg        =  $r->m_msj;         // teacher id

                    $p_uname    =  $r->vu;             // parent username
                    $p_prof     =  $r->vpr;           // parent profile
                    $p_class    =  'p_profile';
                    $p_prof     =  $this->db->prfl_pctwithClass($p_prof, $width, $height, $class);    // parent profile 
                
                   
                    $data .= " <div class='chatholder'>
                                        <div class='divcirlce'>
                                            <div class = 'cicle'>$p_prof</div>
                                        </div>
                                        
                                        <div class ='textChat'>
                                        
                                            <p>
                                                $msg
                                            </p>
                                                    
                                                        
                                        </div>
                                        <div class = 'clear'></div>
                                </div>";
                
                 


                }



                
                $this->response(array('status'=>$status,'data' => $data));

            }else{
                $this->response($this->error('An error occurred while processing your request, vy_themsg'.$this->db->error()));
            }


            
        }else{
            $this->response($this->error(' post data in Compose Questions chat wall is required'));
        }
    } 

    


  
    /////////////////////END TeacherWall All


    /////////////////////Student All
        private function summaryPost(){
            if(isset($_POST['user']) &&
                !empty($_POST['user']) &&
                isset($_POST['s_summarybody']) ) {
                $user     = preg_replace("#[^0-9]#",'',$_POST['user']);
                $subj_id  = preg_replace("#[^0-9]#",'',$_POST['subject_id']);


                $tpc_tle  = $this->db->test_input($_POST['s_topicName']);
                $subtpc   = $this->db->test_input($_POST['s_subtopicName']);
                $body     = $this->db->test_input($_POST['s_summarybody']);


                $insert   = $this->db->insert('vy_summaries',array('subject_id'=>$subj_id,
                    'student_id'=>$user,
                    'topic_title'=>$tpc_tle,
                    'subtpc_list'=>$subtpc,
                    'body'=>$body,
                    'photo'=>'',
                    'datePosted'=>date('Y-m-d H:i:s')
                ));

                if($insert){
                    $this->response($this->success(true));
                }else{
                    $this->response($this->error('An error occurred while processing your Summary request, Please try again'.$this->db->error()));
                }
            }else{
                $this->response($this->error(' post data is required'));
            }
        }

        private function planningPost(){
           
            if(isset($_POST['user']) &&
                !empty($_POST['user']) &&
                isset($_POST['dream_id'])) {

                $user        = preg_replace("#[^0-9]#",'',$_POST['user']);
                $subject_id  = preg_replace("#[^0-9]#",'',$_POST['subject_id']);
                $dream_id    = preg_replace("#[^0-9]#",'',$_POST['dream_id']);
                $p_examNo    = preg_replace("#[^0-9]#",'',$_POST['p_examNo']);
                $p           = preg_replace("#[^0-9]#",'',$_POST['p_maxAv']);
                
                $p_name      = $this->db->test_input($_POST['p_name']);
              //  $p_maxA      = $_POST['p_maxAv'];
                $p_startDate = $this->db->test_input($_POST['p_startDate']);
                $p_fnshDate  = $this->db->test_input($_POST['p_fnshDate']);
                $p_weekNo    = $this->db->test_input($_POST['p_weekNo']);
                $p_period    = $this->db->test_input($_POST['p_period']);
                $p_mnyAsum   = $this->db->test_input($_POST['p_mnyAsum']);
               

                $insert = $this->db->insert('vy_dreamhussle',array(
                    'user_id'          => $user,
                    'subj_id'          => $subject_id,
                    'dream_id'         => $dream_id,
                    'planName'         => $p_name,
                    'planAvgMax'       => $p,
                    'start_date'       => $p_startDate,   //Start Exams Date
                    'doneDream'        => $p_fnshDate,    //End Exam Date
                    'sumOfExam'        => $p_examNo,
                    'periodNo'         => $p_weekNo,
                    'period'           => $p_period,
                    'money_assumption' => $p_mnyAsum,
                    'date'             => date('Y-m-d H:i:s')
                ));

                if($insert){
                    $this->response($this->success(true));
                }else{
                    $this->response($this->error('An error occurred in teacher and parent wall Chat while processing your request, Please try again'.$this->db->error()));
                }
            }else{
                $this->response($this->error(' post data in teacher and parent wall Chat is required'));
            }
        }

   ////////////////// END Student All

   /////////////////  Exam Result  

    function ExamResult(){
        if(isset($_POST['user']) &&
                !empty($_POST['rdata']) &&
                isset($_POST['rdata'])) {

               $nn = '';
 
                $user            = preg_replace("#[^0-9]#",'',$_POST['user']);
                $subj_id         = preg_replace("#[^0-9]#",'',$_POST['subject_id']);

                // echo  $subj_id  ;
                
                $r_examName      = $this->db->test_input($_POST['examname']);
                $r_examType      = $this->db->test_input($_POST['examType']);
                $r_DateExamDone  = $_POST['rDate'];

                $schoolname      = $this->db->test_input($_POST['schoolname']);
                $leveldrd        = $this->db->test_input($_POST['levelOrStandard']);
                $mkondo          = $this->db->test_input($_POST['mkondo']);
                $region          = $this->db->test_input($_POST['region']);
                $level_identify  = $this->db->test_input($_POST['level_identify']);

           
                $dd = $_POST['rdata'];
                $hh = chop($dd, ',');
                $dataa =  explode(',' ,$hh);

                foreach ($dataa as $k){
                    # code...
                    $R = explode('-',$k);

                    $value   = $R[0];
                    $s_id    = $R[1];

                  $insert = $this->db->insert('vy_results',array(
                    't_id'             => $user,
                    's_id'             => $s_id ,
                    'subj_id'          => $subj_id,
                    'exm_name'         => $r_examName,
                    'exmType'          => $r_examType,
                    'dateDone'         => $r_DateExamDone,
                    'result'           => $value,
                    'schoolName'       => $schoolname,
                    'levelOrStandard'  => $leveldrd,
                    'mkondo'           => $mkondo,
                    'region'           => $region,
                    'level_identify'   => $level_identify,
                    'date'             => date('Y-m-d H:i:s')
                ));

                  // if($insert){
                  //     $nn .=  'gone';
                  // }else {
                  //     $nn .= 'not gone';
                  // }

                }

                 
                $this->response($this->success(true));
            }else{
                $this->response($this->error(' post data in teacher and parent wall Chat is required'));
            } 
    } 
   /////////////////  ENDExam Result     
    public function error($msg){
        return array('error' => $msg);
    }

    public function success($msg){
        return array('data'=>$msg);
    }

    public function response($data){
        echo json_encode($data);
    }




}

new post();