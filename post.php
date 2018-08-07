<?php
/**
 * Created by PhpStorm.
 * User: reddeath
 * Date: 7/7/2018
 * Time: 4:49 PM
 */
error_reporting(E_ALL);

require_once ('core/init.php');


class post
{

    public $db;

    public function __construct()
    {
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


    private function pTeachearAndParentsChat(){
        if(isset($_POST['user']) &&
            !empty($_POST['user']) &&
            isset($_POST['post'])) {
            $user = preg_replace("#[^0-9]#",'',$_POST['user']);
            $post = $this->db->test_input($_POST['post']);
            $priv = preg_replace("#[^0-9]#",'',$_POST['privilege']);
            $frompage = 6; //teacher and parent chat


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
                $this->response($this->error('An error occurred in teacher and parent wall Chat while processing your request, Please try again'.$this->db->error()));
            }
        }else{
            $this->response($this->error(' post data in teacher and parent wall Chat is required'));
        }
    }

//    private function post_reply(){
//        if(isset($_POST['user']) &&
//            !empty($_POST['user']) &&
//            isset($_POST['post'])) {
//            $user = preg_replace("#[^0-9]#",'',$_POST['user']);
//            $pid = preg_replace("#[^0-9]#",'',$_POST['pid']);
//            $post = $this->db->test_input($_POST['post']);
//            $sender = $this->db->test_input($_POST['sender']);
//
//
//            $insert = $this->db->insert('vy_reply',array(
//                'msg_id'=>$pid,
//                'send_id'=>$sender,
//                'replier_id'=>$user,
//                'msg'=>$post,
//                'date'=>date('Y-m-d H:i:s')
//            ));
//
//            if($insert){
//                $this->response($this->success(true));
//            }else{
//                $this->response($this->error('An error occurred while processing your request, Please try again'.$this->db->error()));
//            }
//        }else{
//            $this->response($this->error(' reply data is required'));
//        }
//    }

    /////////////////////TeacherWall All
     



    /////////////////////END TeacherWall All

    public function error($msg)
    {
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