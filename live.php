<?php
/**
 * Created by PhpStorm.
 * User: reddeath
 * Date: 7/7/2018
 * Time: 7:12 PM
 */
require_once ('core/init.php');
$db = DB::getInstance();
$section = 1;

$status = false;
$result = array('status'=>$status,'data'=>null);

header("Content-type: text/event-stream");
header("Connection: Keep-alive");
header("Cache-Control: no-cache");

if(isset($_GET['action']) && $_GET['action'] === 'get_post'){
    $sql = null;
    $data = '';
    $section = preg_replace('#[^0-9]#','',$_GET['section']);

    if ($section == 1) {
        $page = 'main page';

        $sql = $db->query("SELECT p.*,u.*,p.id as lid FROM post as p LEFT JOIN vy_users as u ON p.user_id  = u.id  ORDER BY p.time_posted DESC ");

    }
    if ($section == 2) {
        $page = 'science page';
    }
    if ($section == 3) {
        $page = "art's page";
    }
    if ($section == 4) {
        $page = 'Busness page';
    }
    if ($section == 5) {
        $page = 'Enterpenuer page';
    }


    if($sql->count() > 0){
        $status = true;
        $lid = '';

        //foreach
        foreach ($sql->results() as $r) {
            $msg_id = $r->lid;
            $id = $r->user_id;
            $lid .= $r->lid;
            $username = $r->username;
            $post = $r->post;
            $section = $r->section;
            $post_time = $r->time_posted;

            $prof_chanel = $r->profile;
            $width = 100;
            $height = 100;
            $prof = $db->prfl_pctwithClass($prof_chanel, $width, $height, $class);

            $r = get_replies($msg_id,$db);
            $replies = $r[0];
            $rid = $r[1];
            $lid .= $rid;


            $data .= "<div id = 'posted'>
              <div class = 'pageIdentifer'><span>" . $page . "</span></div>
						<div class = 'posted_profile'>

							<div class = 'posted_cicle'>
								" . $prof . "
						   </div>
						</div>

						<div class ='name_time'><span class = 'name'>" . $username . "</span><span class = 'time_ago'>" . $post_timed . "</span></div>

						<div class ='msg'>" . $post . "</div>
						<div class ='icons'>
							<span id='reply' class = 'ico reply" . $msg_id . "' onclick = \"onreply('$msg_id','replyDive$msg_id')\"><i class = 'fa fa-reply'></i>" . $i . "</span>
							<span id='love' class = 'ico reply'><i class = 'fa fa-heart-o'></i></span>
							<span id='thumb_up' class = 'ico reply'><i class = 'fa fa-thumbs-up'></i></span>
							<span id='delete' class = 'ico reply'><i class= 'fa fa-remove'></i></span>
							<span id='spam' class = 'ico reply'>spam</span>
							<span id='delete' class = 'ico reply'><i class= 'fa fa-unlock-alt'></i></span>
						</div>

                    <div id = 'replyDive" . $msg_id . "' class = 'replyDive'>  </div>
				    </div>
            
            
				    <!-- replies -->
				    
				   $replies
				    
				    </div>";
        }


       

        $result = array('data'=>$data,'status'=>$status,'id'=>$lid);
    }else{
        $result = array('data'=>'No data found','status'=>$status);
    }


}
else if($_GET['action'] && $_GET['action'] === 'get_reply'){

}else{
    $result = array('data'=>'Error method is not allowed!!');
}

echo "data:".json_encode($result)."\n\n";



function get_replies($pid,$db){
    $data = '';
    $class = '';
    $id = 0;
    $sql = $db->query("SELECT r.*,u.profile,u.username FROM vy_reply as r 
LEFT JOIN post as p ON(r.msg_id  = p.id) 
LEFT JOIN vy_users as u ON(r.send_id = u.id) 
WHERE r.msg_id = '$pid' ORDER by p.id DESC");

    if($sql->count() > 0) {

        //foreach
        foreach ($sql->results() as $r) {
            $user = $r->username;
            $profile = $r->profile;
            $user_id = $r->send_id;
            $id = $r->id;
            $reply = $r->msg;
            $date = $r->date;

            $width = 100;
            $height = 100;
            $profile = $db->prfl_pctwithClass($profile, $width, $height, $class);

            $data .= "<div id = 'reply_posted'>
                <div class = 'posted_profile'>
                    <div class = 'posted_cicle'>
                        $profile
                   </div>
                </div>
                <div class ='name_time'><span class = 'name'>$user</span><span class = 'time_ago'>$date</span></div>
                <div class ='msg'>$reply</div>
                <div class ='icons'>
                    <span id='reply' class = 'ico reply'><i class = 'fa fa-reply'></i></span>
                    <span id='love' class = 'ico reply'><i class = 'fa fa-heart-o'></i></span>
                    <span id='thumb_up' class = 'ico reply'><i class = 'fa fa-thumbs-up'></i></span>
                    <span id='delete' class = 'ico reply'><i class= 'fa fa-remove'></i></span>
                    <span id='spam' class = 'ico reply'>spam</span>
                    <span id='delete' class = 'ico reply'><i class= 'fa fa-unlock-alt'></i></span>
                </div>
            </div> ";
        }

    }
    
    return [$data,$id];
}


//
//class live
//{
//    private $db;
//
//    private function __construct()
//    {
//        $this->db = $db;
//
//        if(isset($_POST['action']) && !empty($_POST['action'])){
//            $action = $_POST['action'];
//
//            if(method_exists($this,$action)){
//                $this->$action();
//            }else{
//                $this->response($this->error('Error method is not allowed!'));
//            }
//
//        }else{
//            $this->response($this->error('Error method is not allowed!'));
//        }
//    }
//
//    public function get_post(){
//        echo "data:".json_encode(array('hshhdshdsd'))."\n\n";
//        $sql = $this->db->query("SELECT * FROM post");
//
//        if($sql->count() > 0){
//            $this->response($this->success('hahahahaha'));
//        }else{
//            $this->response($this->error('No data found!'));
//        }
//    }
//
//    public function error($msg)
//    {
//        return array('error' => $msg);
//    }
//
//    public function success($msg){
//        return array('data'=>$msg);
//    }
//
//    public function response($data){
//
//    }
//
//
//}