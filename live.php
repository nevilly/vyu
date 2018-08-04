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
    $sql        =  null;
    $data       =  'No records found';
    $nots       =  '';
    $nots_count =  0;
    $user_id    =  preg_replace("#[^0-9]#",'',$_GET['user_id']);
    $section    =  preg_replace('#[^0-9]#','',$_GET['section']);


    $sql = $db->query("SELECT n.*,u.*,n.id as lid FROM vyu_notf as n LEFT JOIN vy_users as u ON n.user  = u.id WHERE n.user = ? ORDER BY n.id DESC ",array($user_id));

    $nots_count = $sql->count();

    if($sql->count() > 0){
        $status =  true;
        $lid    =  '';
        $data   =  '';
        $class  =  "";

        //foreach
        foreach ($sql->results() as $r) {
            $msg_id      = $r->lid;
            $id          = $r->user;
            $lid        .= $r->lid;
            $username    = $r->username;
            $note        = $r->note;
            $post_tim    = $r->date_time;
            $time_ago    = strtotime($post_tim);
            $post_time   = $db->timeAgo($time_ago);
            $prof_chanel = $r->profile;
            $width       = "";
            $height      = "";

            $prof = $db->prfl_pctwithClass($prof_chanel, $width, $height, $class);


            $nots .= "<div class = 'despl'>
                        <div class = 'searchprof'> 
                          <div class = 'profImg'>
                            $prof 
                          </div>  
                        </div>

                        <div class = 'detdispl belldetail'>
                          <span class = 'name'>$username</span>
                          <span class = 'jibu'>Answered your qustion</span>
                        </div>
            </div>";
        }
    }

    if ($section == 1) {
        $page = 'main page';

        $sql = $db->query("SELECT p.*,u.*,p.id as lid FROM post as p LEFT JOIN vy_users as u ON p.user_id  = u.id  ORDER BY p.time_posted DESC ");

    }
    if ($section == 2) {
        $page = 'science page';
            $sql = $db->query("SELECT p.*,u.*,p.id as lid FROM post as p LEFT JOIN vy_users as u ON p.user_id  = u.id WHERE section = ? ORDER BY p.time_posted DESC ", array($section));
    }
    if ($section == 3) {
        $page = "art's page";
        $sql = $db->query("SELECT p.*,u.*,p.id as lid FROM post as p LEFT JOIN vy_users as u ON p.user_id  = u.id WHERE section = ? ORDER BY p.time_posted DESC ", array($section));
    }
    if ($section == 4) {
        $page = 'Busness page';
        $sql = $db->query("SELECT p.*,u.*,p.id as lid FROM post as p LEFT JOIN vy_users as u ON p.user_id  = u.id WHERE section = ? ORDER BY p.time_posted DESC ", array($section));
    }

    if ($section == 5) {
        $page = 'Enterpenuer page';
        $sql = $db->query("SELECT p.*,u.*,p.id as lid FROM post as p LEFT JOIN vy_users as u ON p.user_id  = u.id WHERE section = ? ORDER BY p.time_posted DESC ", array($section));
    }

    if($sql->count() > 0){
        $status  =  true;
        $lid     =  '';
        $class   =  "";

        //foreach
        foreach ($sql->results() as $r) {
            $msg_id     =  $r->lid;
            $id         =  $r->user_id;
            $lid       .=  $r->lid;
            $username   =  $r->username;
            $post       =  $r->post;
            $section    =  $r->section;
            $post_tim   =  $r->time_posted;
            $time_ago    = strtotime($post_tim);
            $post_time   = $db->timeAgo($time_ago);

            if ($section == 1) {$page = 'main page';        } 
            if ($section == 2) {$page = 'science page';     } 
            if ($section == 3) {$page = "art's page";       } 
            if ($section == 4) {$page = 'Busness page';     } 
            if ($section == 5) {$page = 'Enterpenuer page'; }

            $prof_chanel  = $r->profile;
            $width        = 100;
            $height       = 100;
            $prof = $db->prfl_pctwithClass($prof_chanel, $width, $height, $class);

            $r            = get_replies($msg_id,$db);
            $replies      = $r[0];
            $rid          = $r[1];
            $lid         .= $rid;


            $data .= "<div id = 'posted'>
                <div class = 'pageIdentifer'><span>" . $page . "</span></div>
					<div class = 'posted_profile'>
						<div class = 'posted_cicle'>
							" . $prof . "
					   </div>
					</div>

					<div class ='name_time'><span class = 'name'>" . $username . "</span><span class = 'time_ago'>".$post_time."</span></div>

					<div class ='msg'>" . $post . "</div>
					<div class ='icons'>
						<span id='reply' class = 'ico reply" . $msg_id . "' onclick = \"onreply('$msg_id','replyDive$msg_id','$id ')\"><i class = 'fa fa-reply'></i></span>
						<span id='love' class = 'ico reply'><i class = 'fa fa-heart-o'></i></span>
						<span id='thumb_up' class = 'ico reply'><i class = 'fa fa-thumbs-up'></i></span>
						<span id='delete' class = 'ico reply'><i class= 'fa fa-remove'></i></span>
						<span id='spam' class = 'ico reply'>spam</span>
						<span id='delete' class = 'ico reply'><i class= 'fa fa-unlock-alt'></i></span>
					</div>
				</div>
            
            
				<!-- replies -->
				<div id = 'replyDive" . $msg_id . "' class = 'replyDive'>
				   $replies
                </div>
		   </div>";
        }
    }



    $result = array('data'=>$data,'status'=>$status,'id'=>$lid,'nots'=>$nots,'n_counts'=>$nots_count);


}else{
    $result = array('data'=>'Error method is not allowed!!');
}






echo  "retry: 1000\n\n";
echo "data:".json_encode($result)."\n\n";



function get_replies($pid,$db){
    $data = '';
    $class = '';
    $id = 0;
    $sql = $db->query("SELECT r.*,u.profile,u.username FROM vy_reply as r 
    LEFT JOIN post as p ON(r.msg_id  = p.id) 
    LEFT JOIN vy_users as u ON(r.replier_id = u.id) 
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

            $time_ago    = strtotime($date);
            $post_time   = $db->timeAgo($time_ago);

            $width = 100;
            $height = 100;
            $profile = $db->prfl_pctwithClass($profile, $width, $height, $class);

            $data .= "<div id = 'reply_posted'>
                <div class = 'posted_profile'>
                    <div class = 'posted_cicle'>
                        $profile
                   </div>
                </div>
                <div class ='name_time'><span class = 'name'>$user</span><span class = 'time_ago'>$post_time</span></div>
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

