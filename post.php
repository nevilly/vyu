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


            $insert = $this->db->insert('post',array('user_id'=>$user,
                'msg_id'=>$pid,
                'send_id'=>$user,
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