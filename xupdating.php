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

 

    private function update_reply_qstn(){
        if(isset($_POST['user']) &&
            !empty($_POST['user']) &&
            isset($_POST['post'])) {
            $user = preg_replace("#[^0-9]#",'',$_POST['user']);
            $q_rplyid = preg_replace("#[^0-9]#",'',$_POST['q_rplyid']);
            $post = $this->db->test_input($_POST['post']);
            $sender = $this->db->test_input($_POST['sender']);


            $sql = "UPDATE vy_wallsubjectreply SET msg = ? WHERE wallsubject_id = ? AND replier_id = ? ";


            $update = $this->db->query($sql,array($post,$q_rplyid,$user));


            // $insert = $this->db->insert('vy_wallsubjectreply',array(
            //     'wallsubject_id'=>$q_rplyid,
            //     'sender_id'=>$sender,
            //     'replier_id'=>$user,
            //     'msg'=>$post,
            //     'date'=>date('Y-m-d H:i:s')
            // ));

            if($update){
                $this->response($this->success(true));
            }else{
                $this->response($this->error('An error occurred while processing your request, Please try again'.$this->db->error()));
            }
        }else{
            $this->response($this->error(' Update data is required'));
        }
    }

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