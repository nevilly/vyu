<?php 
      $query_post = $db->query('SELECT * FROM vy_post WHERE');
?>

<div id="divuser_id" style="visibility:hidden">
    <?php echo $user_id;
    echo "<script>var user= {user_id:'$user_id',username:'$username',profile:'$profile',frompage:'$frompage',section:1};</script>" ?></div>
	<div id = 'postArea'>
					<span class ='wha_NEW'>What's new,Nehemia</span>
					<textarea id = 'post_text' onclick = "swicthVisibility('post_option');"></textarea>
					
					<div id = 'post_option'>
						 
						<select id = 'Nav_everyone' class = 'categry wal'>
							<option class = 'wall navWall' value="0">login user</option>
							<option class = 'wall navprof' value="1" id= "onlyme">Only me</option>
							<option class = 'wall navSc' value="2" id= "Myfrnd">My friends</option>
							<option class = 'wall navBusn' value="3" id= "tchers">teachers</option>
							<option class = 'wall navBusn' value="4" id= "Stdent">Student</option>
							<option class = 'wall navBusn' value="5">Enterprenur</option>
				        </select>
						

						<input class = 'p' type='submit' id='submit_post' onclick = "chatVar('post_text',' <?php echo $user_id; ?>');" value = 'Post Update'>
						
					
						<div class ='p' id = 'everyone' onclick = "swicthVisibility('Nav_everyone');">EVERYONE<i class="fa fa-angle-down" aria-hidden="true"></i></div>
					
						<div id = 'upload_photo'><i class="fa fa-camera" id= 'cover_camera_prof'></i></div>
					</div>
				</div>

<div id="msgBody" class="msgBody">


    <!--
            <div id = 'reply_posted'>
                <div class = 'posted_profile'>
                    <div class = 'posted_cicle'>
                        <img src ='img/profiles/p1.jpg' >
                   </div>
                </div>
                <div class ='name_time'><span class = 'name'>Challo</span><span class = 'time_ago'>8hrs Ago</span></div>
                <div class ='msg'>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi</div>
                <div class ='icons'>
                    <span id='reply' class = 'ico reply'><i class = 'fa fa-reply'></i></span>
                    <span id='love' class = 'ico reply'><i class = 'fa fa-heart-o'></i></span>
                    <span id='thumb_up' class = 'ico reply'><i class = 'fa fa-thumbs-up'></i></span>
                    <span id='delete' class = 'ico reply'><i class= 'fa fa-remove'></i></span>
                    <span id='spam' class = 'ico reply'>spam</span>
                    <span id='delete' class = 'ico reply'><i class= 'fa fa-unlock-alt'></i></span>
                </div>
            </div> -->
				</div>
			
				
				