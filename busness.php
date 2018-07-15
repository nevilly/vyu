<?php  


require_once 'Core/Init.php';

$user = new User();
$db = DB::getInstance();
if ($user->isLoggedIn()) {
  # code...
  // echo 'logged In';
  $username = escape($user->data()->username);
  $user_id = escape($user->data()->id);

   // $user = $db->query('SELECT * FROM vy_users');
   // if(!$user->count()){
   // 	  echo 'fail';
   // }else{
   //  	  foreach($user->results() as $user){
   //           echo $user-> username;
   //  	  }
   //  }
 
 ?>

    <?php include 'include/skeletonTop.php'; ?>


   
<div id = 'Pagewraper'>
   <?php include 'include/sidenavigation.php'; ?>
	
	
    <div id = 'side_two' >
		<!--/***********header after login*********/-->
		<?php include 'include/topheader.php'; ?>	
		<div id='mainWraper'>
			<div class = 'section'>
				<?php include "include/profnav.php";?>

				<h2 class = "worrldWraper">BUSNESS WORD</h2>
                <?php $frompage = 4; //busness page ?>
				<?php include "include/chats.php";?>
			</div>
			
			
		    <div class = 'infoSection'>
				<span class = 'membars'>MEMBARS</span>
				<div id ='info_list'>
					<div class = 'newst memba'>Newest</div>
					<div class = 'Active memba'>Active</div>
					<div class = 'Popular memba'>Popular</div >
				</div>
				<div id ='newst' class = 'info_memba subjectMemba'>
					<div class ='membasubject'>
					    <a href = "profile.php">
							<div class = 'profImg'>
								<img src ='img/profiles/p4.jpg' >
							</div>

                            <div class ="membaD">
								<div>Nehemia Mwansasu</div>
								<div class = "subject">Ecologist</div>
							</div>
						</a>
						<div class ="membaD">
							<div>
								<span>Folow</span>
								<span>Add</span>
							</div>
						</div>
					</div>

					<div class ='membasubject'>
					    <a href = "#">
							<div class = 'profImg'>
								<img src ='img/profiles/p4.jpg' >
							</div>

                            <div class ="membaD">
								<div>Nehemia Mwansasu</div>
								<div class = "subject">PCB</div>
							</div>
						</a>
						<div class ="membaD">
							<div>
								<span>Folow</span>
								<span>Add</span>
							</div>
						</div>
					</div>

					<div class ='membasubject'>
					    <a href = "#">
							<div class = 'profImg'>
								<img src ='img/profiles/p4.jpg' >
							</div>

                            <div class ="membaD">
								<div>Barack Kinsanvu</div>
								<div class = "subject">Computer SCience</div>
							</div>
						</a>
						<div class ="membaD">
							<div>
								<span>unFolow</span>
								<span>Message</span>
							</div>
						</div>
					</div>
				</div>

				<div id ='newst' class = 'info_memba subjectMemba'>
				    <h3 class = "">ENTERPRENUERS</h3>
					<div class ='membasubject'>
					    <a href = "profile.php">
							<div class = 'profImg'>
								<img src ='img/profiles/p4.jpg' >
							</div>

                            <div class ="membaD">
								<div>Nehemia Mwansasu</div>
								<div class = "subject">Ecologist</div>
							</div>
						</a>
						<div class ="membaD">
							<div>
								<span>Folow</span>
								<span>Add</span>
							</div>
						</div>
					</div>

					<div class ='membasubject'>
					    <a href = "#">
							<div class = 'profImg'>
								<img src ='img/profiles/p4.jpg' >
							</div>

                            <div class ="membaD">
								<div>Nehemia Mwansasu</div>
								<div class = "subject">PCB</div>
							</div>
						</a>
						<div class ="membaD">
							<div>
								<span>Folow</span>
								<span>Add</span>
							</div>
						</div>
					</div>

					<div class ='membasubject'>
					    <a href = "#">
							<div class = 'profImg'>
								<img src ='img/profiles/p4.jpg' >
							</div>

                            <div class ="membaD">
								<div>Barack Kinsanvu</div>
								<div class = "subject">Computer SCience</div>
							</div>
						</a>
						<div class ="membaD">
							<div>
								<span>unFolow</span>
								<span>Message</span>
							</div>
						</div>
					</div>
				</div>


				<div id ='newst' class = 'info_memba subjectMemba'>
				    <h3 class = "">BUSNESS THEORY AND QUOTES</h3>
					<div class ='membasubject theoryis' onclick = "">
					
							<div class = 'theory'>
							  <h3>Archmedence Pricnipal</h3>
							  <div>KL:K:KL:KL:Kkkljdfkgdsfgmdkl<br/>sgkdgdgfsdgdsgdsfgsdgdfs</div>
							  
							</div>
					
					</div>	

					<div class ='membasubject theoryis' onclick = "">
					
						<div class = 'theory'>
						  <h3>Brain Principal</h3>
						  <div>Khhhshvssgs fvcncgdnshssbvdjmd<br/>sgkdgdgfsdgdsgdsfgsdgdfs</div>
						  
						</div>
					
					</div>
				</div>
				
			
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
    

<?php include 'include/SkelotonBottom_login.php'; ?>
<?php
   }else{
       echo '<p>You need <a href = "login.php">Login</a> or <a href = "registration.php">Register</a></p>';
	}
?>
