<?php 
   
   // require_once "/core/init.php";

   // $user = new User();

   // if(!$user->isLoggedIn()){
   // 	Redirect::to('indexs.php');
   // }
   
?> 
    <div class = 'infoSection'>
			<?php  
    //require_once 'Core/Init.php';
    // $profile = '';
    // $user = new User();
    // //echo $user->data()->username;
    // if ($user->isLoggedIn()) {
    //   # code...
    //   // echo 'logged In';
    //   // echo escape($user->data()->username);

    // $db = DB::getInstance();
    // if(!$username = Input::get('user')){
    //    Redirect::to('page.php');
    // }else{
    // 	 $user = new User($username);
    // 	 if(!$user ->exists()){
    //         Redirect::to(404);
    // 	 }else{
    // 	 	$user_id = $user->data()->id;
    // 	 	$user_uname = $user->data()->username;

    	
    // 	 }
    // }

?>

				<span class = 'membars'>MEMBARS</span>
				<div id ='info_list'>
					<div class = 'newst memba' onclick = "memba_hidshow('newst');">Newest</div>
					<div class = 'Active memba' onclick = "memba_hidshow('Active');">Active</div>
					<div class = 'Popular memba'onclick = "memba_hidshow('Popular');"> Popular</div >
				</div>
				<div id ='newst' class = 'info_memba newst' >   
					<?php 
                      $new_membas = $db->query('SELECT * FROM vy_users');
                      if($new_membas->count()){

                      	 foreach($new_membas->results() as $new_memba){
                      	 	# code...
                                   $p = ($new_memba->profile) ? 
                                   '<div id ="profilecycle">
                                        <img src = userdata/'.$new_memba->profile.' width="70px" height ="60px">
                                    </div>' 
                                    :
                                   '<div id ="profilecycle">
                                        <img src ="userdata/profile/pro3.png" width ="70px" height ="60px;">
                                   </div>';
                            

                      	  echo  "<div id = 'newstProfile'>".$p."
								    <div class = 'name'><a href ='profile.php?user=$new_memba->username'>".$new_memba->username."</a></div>
									<div class = 'standardClass'><a href=''>Collage</a></div>
									<div class = 'learn_from_him'>Learn From Him</div>
								</div>";
					
                      	 }
                      }else{
                      	echo "No Memba";
                      }
					?>
				<!-- 	
				 	<div id = 'newstProfile'>
						<div id ='profilecycle'><img src = 'img/profiles/p3.jpg' width='70px' height ='60px;'/></div>
					    <div class = 'name'><a href = "">Big Boss</a></div>
						<div class = 'standardClass'>Collage</div>
						<div class = 'learn_from_him'>Learn From Him</div>
					</div>  -->
					
					
				</div>
				<div id ='Active' class = 'info_memba Active'></div>
				<div id ='Popular' class = 'info_memba Popular'></div>
			
			
			<div id='Ideas'>
				<h3>IQ INlARAGMENTS</h3>	
				<div class = 'p_idea'>
					<div class = 'header'>
						<div class= 'h_img'><img src = 'img/profiles/life.jpg'/></div>
						<h2>JINSI YA KUPATA MTAJI WA KUFUGA KUKU</h2>
					    <h4>enterprenuar</h4>
					</div>
					
					<div class ='soln'>
						Smart phon n kfaa chenye pesa nying sana
					</div>
				</div>
				
				<div class = 'p_idea'>
					<div class = 'header'>
						<div class= 'h_img'><img src = 'img/profiles/life.jpg'/></div>
						<h2>JINSI YA KUPATA MTAJI WA KUFUGA KUKU</h2>
					    <h4>enterprenuar</h4>
					</div>
					
					<div class ='soln'>
						Smart phon n kfaa chenye pesa nying sana
					</div>
				</div>
				
				<div class = 'p_idea'>
					<h2>How To Solve Quandrant Equestion</h2>
					<div class ='soln'>
						2x /  3x = 2f - 2f  find y <br/>
						how to solv this equestion helps please .....
						
					</div>
				</div>
				
				<div class = 'p_idea'>
					<div class = 'header'>
						<div class= 'h_img'><img src = 'img/profiles/life.jpg'/></div>
						<h2>JINSI YA KUPATA MTAJI WA KUFUGA KUKU</h2>
					    <h4>enterprenuar</h4>
					</div>
					
					<div class ='soln'>
						Smart phon n kfaa chenye pesa nying sana
					</div>
				</div>
				
				<div class = 'p_idea'>
					<div class = 'header'>
						<div class= 'h_img'><img src = 'img/profiles/life.jpg'/></div>
						<h2>JINSI YA KUPATA MTAJI WA KUFUGA KUKU</h2>
					    <h4>enterprenuar</h4>
					</div>
					
					<div class ='soln'>
						Smart phon n kfaa chenye pesa nying sana
					</div>
				</div>
				
				<div class = 'p_idea'>
					<div class = 'header'>
						<div class= 'h_img'><img src = 'img/profiles/life.jpg'/></div>
						<h2>JINSI YA KUPATA MTAJI WA KUFUGA KUKU</h2>
					    <h4>enterprenuar</h4>
					</div>
					
					<div class ='soln'>
						Smart phon n kfaa chenye pesa nying sana
					</div>
				</div>
				
				<div class = 'p_idea'>
					<div class = 'header'>
						<div class= 'h_img'><img src = 'img/profiles/life.jpg'/></div>
						<h2>JINSI YA KUPATA MTAJI WA KUFUGA KUKU</h2>
					    <h4>enterprenuar</h4>
					</div>
					
					<div class ='soln'>
						Smart phon n kfaa chenye pesa nying sana
					</div>
				</div>
				
				<div class = 'p_idea'>
					<div class = 'header'>
						<div class= 'h_img'><img src = 'img/profiles/life.jpg'/></div>
						<h2>JINSI YA KUPATA MTAJI WA KUFUGA KUKU</h2>
					    <h4>enterprenuar</h4>
					</div>
					
					<div class ='soln'>
						Smart phon n kfaa chenye pesa nying sana
					</div>
				</div>
				
				<div class = 'p_idea'>
					<div class = 'header'>
						<div class= 'h_img'><img src = 'img/profiles/life.jpg'/></div>
						<h2>JINSI YA KUPATA MTAJI WA KUFUGA KUKU</h2>
					    <h4>enterprenuar</h4>
					</div>
					
					<div class ='soln'>
						Smart phon n kfaa chenye pesa nying sana
					</div>
				</div>
				
				<div class = 'p_idea'>
					<div class = 'header'>
						<div class= 'h_img'><img src = 'img/profiles/life.jpg'/></div>
						<h2>JINSI YA KUPATA MTAJI WA KUFUGA KUKU</h2>
					    <h4>enterprenuar</h4>
					</div>
					
					<div class ='soln'>
						Smart phon n kfaa chenye pesa nying sana
					</div>
				</div>
				
				<div class = 'p_idea'>
					<div class = 'header'>
						<div class= 'h_img'><img src = 'img/profiles/life.jpg'/></div>
						<h2>JINSI YA KUPATA MTAJI WA KUFUGA KUKU</h2>
					    <h4>enterprenuar</h4>
					</div>
					
					<div class ='soln'>
						Smart phon n kfaa chenye pesa nying sana
					</div>
				</div>
				
				
				
			
			</div>
			
			
			
			</div>