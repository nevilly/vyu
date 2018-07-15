<?php 
   
   require_once "core/init.php";

   $user = new User();

   if(!$user->isLoggedIn()){
   	Redirect::to('page.php');
   }

   
   
?>
<?php include 'include/skeletonTop.php';?>


    <div id = 'Pagewraper'>
      <?php include 'include/pageProfileNavigation.php'; ?>
        <div id = 'side_two' >
		<!--/***********header after login*********/-->
			<?php include 'include/topheader.php'; ?>
			
			<div id='mainWraper'>
				<div class = 'section'>
					<?php include 'include/profileheader.php'; ?>
					
					

	                <div class = "ChangeWraper">
	                   
	                 
	                    <div class = "changePasswraper">
		                   <h3>Change Password</h3>	
		                    <form method="post" action="">
                               <?php 
                                    if (Input::exists()) {
								   	# code...
								   	  if(Token::check(Input::get('token'))){
								   	  	$validate = new Validate();
								   	  	$validation = $validate->check($_POST, array(
								            'Password_current' => array(
								                  'required' => true,
								                  'min' => 6
								            	),
								                
								                'Password_new' => array(
								                  'required' => true,
								                  'min' => 6
								            	),

								            'Password_new_again' => array(
								                  'required' => true,
								                  'min' => 6,
								                  'matches' => 'Password_new'
								            	)
								   	  		));

								   	  	if ($validation->passed()) {
								   	  		# code...

								   	  		if (Hash::make(Input::get('Password_current'),$user->data()->salt) !== $user->data()->password) {
								   	  			# code...
								   	  			echo "Your curernt Password is Wrong";
								   	  		}else{
								   	  			$salt = Hash::salt(32);
								   	  			$user->update(array(
								   	  				'password' => Hash::make(Input::get('Password_new'),$salt), 
								   	  				'salt' => $salt 
								   	  				));
                                                echo "DONE";
								   	  			// Session::flash('Home', 'Your password Has been change'); 
								   	  			// Redirect::to('profile.php');
								   	  		}
								   	  		// try{
								        //        $user->update(array('fullname' =>Input::get('name') ));
								        //        Session::flash('home','Your Details Has been Updated');
								        //        Redirect::to('page.php');
								   	  		// }catch(Exception $e){
								        //        die($e->getmessage());
								   	  		// }

								   	  	}else{
								   	  		foreach ($validation->errors() as $error) {
								   	  			# code...
								   	  			echo $error, '<br>';
								   	  		}
								   	  	}
								   	  }
								   }


                               ?>
		                  	    <div>
			                  	  	<label class = "enter">*Passoword</label>
			                  	  	<input type = "password" name = "Password_current" id="Password_current">
		                  	    </div>

		                  	    <div>
			                  	  	<label class = "enter">*New Passoword</label>
			                  	  	<input type = "Password" name = "Password_new" placeholder = "New Password">
		                  	    </div>

		                  	  <div>
		                  	  	<label class = "enter">*Re-write Passoword</label>
		                  	  	<input type = "Password" name = "Password_new_again" placeholder = "Repeat Password">
		                  	  </div>
                              <input type ="hidden" value="<?php echo Token::generate();?>" name = "token">
		                  	  <div> <input type = "submit" Value = "Change Password" class = "submit" ></div>
		                    </form>

	                    </div>
	               
	                </div>
	 





					
				</div>
				
				
				
				
				
				
				
				
			    <div class = 'infoSection'>
					<span class = 'membars'>MEMBARS</span>
					<div id ='info_list'>
						<div class = 'newst memba'>Newest</div>
						<div class = 'Active memba'>Active</div>
						<div class = 'Popular memba'>Popular</div >
					</div>
					<div id ='newst' class = 'info_memba'>
						<div id = 'newstProfile'>
							<div id ='profilecycle'><img src = 'img/profiles/p3.jpg' width='70px' height ='60px;'/></div>
						<div class = 'name'>Big Boss</div>
							<div class = 'standardClass'>Collage</div>
							<div class = 'learn_from_him'>Learn From Him</div>
						</div>
						
						<div id = 'newstProfile'>
							<div id ='profilecycle'><img src = 'img/profiles/p3.jpg' width='70px' height ='60px;'/></div>
							<div class = 'name'>Barack</div>
							<div class = 'standardClass'>Collage</div>
							<div class = 'learn_from_him'>Learn From Him</div>
						</div>
						
						<div id = 'newstProfile'>
							<div id ='profilecycle'><img src = 'img/profiles/p9.jpg' width='70px' height ='60px;'/></div>
							<div class = 'name'>Jery</div>
							<div class = 'standardClass'>Collage</div>
							<div class = 'learn_from_him'>Learn From Him</div>
						</div>
						
						
							<div id = 'newstProfile'>
							<div id ='profilecycle'><img src = 'img/profiles/p9.jpg' width='70px' height ='60px;'/></div>
							<div class = 'name'>Jery</div>
							<div class = 'standardClass'>Collage</div>
							<div class = 'learn_from_him'>Learn From Him</div>
						</div>
							<div id = 'newstProfile'>
							<div id ='profilecycle'><img src = 'img/profiles/p9.jpg' width='70px' height ='60px;'/></div>
							<div class = 'name'>Jery</div>
							<div class = 'standardClass'>Collage</div>
							<div class = 'learn_from_him'>Learn From Him</div>
						</div>
						
							<div id = 'newstProfile'>
							<div id ='profilecycle'><img src = 'img/profiles/p9.jpg' width='70px' height ='60px;'/></div>
							<div class = 'name'>Jery</div>
							<div class = 'standardClass'>Collage</div>
							<div class = 'learn_from_him'>Learn From Him</div>
						</div>
						
						<div id = 'newstProfile'>
							<div id ='profilecycle'><img src = 'img/profiles/p2.png' width='70px' height ='60px;'/></div>
							<div class = 'name'>Neema</div>
							<div class = 'standardClass'>Collage</div>
							<div class = 'learn_from_him'>Learn From Him</div>
						</div>
						
						<div id = 'newstProfile'>
							<div id ='profilecycle'><img src = 'img/profiles/p7.jpg' width='70px' height ='60px;'/></div>
							<div class = 'name'>Enjoy</div>
							<div class = 'standardClass'>Collage</div>
							<div class = 'learn_from_him'>Learn From Him</div>
						</div>
						
					</div>
					<div id ='Active' class = 'info_memba'></div>
					<div id ='Popular' class = 'info_memba'></div>
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
			</div>
		</div>
    </div>
    
</div>
<script type="text/javascript" src="jscript/jscript.js">
	
</script>
 <?php include 'include/positonAbsolute.php'; ?> 
</body>
</html>

<!--//materials sehem ya kuifadhi materials ya maomo yako kama vile summaries
-->changepassword


