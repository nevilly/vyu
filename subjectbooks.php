<?php 
require_once 'Core/Init.php';

$user = new User();
$db = DB::getInstance();
if ($user->isLoggedIn()) {
  # code 'logged In';
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
		      <?php //include 'include/profileheader.php'; ?>
		      <?php include 'include/profnav.php'; ?>
				<div class="sidePanelHeader">
				<h1 class = "sidePanelHeade"><span class = 'subject_title'>SUBJECTNAME</span> BOOKS</h1>
				</div>

				<div id= 'sucject_search'>
					<input id = 'search_lectures' placeholder='search lectures Example: Nutrion by Emmanuel:school name,2017'>
				</div>
				
				
				<div class = 'Myfucults'>
					
					<h3>SUBJECT BOOKS</h3>

					
					<div id = 'sucject_lecture' onclick = "openAbsolute('book_temprate');">
						<div id ='imgCover'><img src = videos/cove.png></div>
						<div id='details'>
							<span class ='topc_lect'>Reproduction Science</span>
						    <span class ='title'>Writter:</span><span class ='ans'>Nehemia</span>
                            <span class ='title'>Edition:</span><span class ='ans'> 4</span>
						</div>
						
					</div>
					
					<div id = 'sucject_lecture' onclick = "openAbsolute('book_temprate');">
						<div id ='imgCover'><img src = videos/cove.png></div>
						<div id='details'>
							
						    				<span class ='topc_lect'>Nutrition & Respiration</span>
						    <span class ='title'>Writter:</span><span class ='ans'>Nehemia</span>
                            <span class ='title'>Edition:</span><span class ='ans'> 4</span></div>
						
					</div>
					
					
					<div id = 'sucject_lecture' onclick = "openAbsolute('book_temprate');">
						<div id ='imgCover'><img src = videos/cove.png></div>
						<div id='details'>
							<span class ='topc_lect'>Respiration</span>
						    <span class ='title'>Name:</span><span class ='ans'>Maria Masaburi</span>
							  <span class ='title'>School:</span><span class ='ans'>Private Teacher</span>
							  <span class ='title'>School:</span><span class ='ans'>Ipc Collage</span>
							  <span class ='title'>Level:</span><span class ='ans'>Certificate</span>
						</div>
						
					</div>
					
					
					<div id = 'sucject_lecture' onclick = "openAbsolute('book_temprate');">
						<div id ='imgCover'><img src = videos/cove.png></div>
						<div id='details'>
							<span class ='topc_lect'>Genetics with example</span>
						    <span class ='title'>Name:</span><span class ='ans'>Maria Masaburi</span>
							  <span class ='title'>School:</span><span class ='ans'>Private Teacher</span>
							  <span class ='title'>School:</span><span class ='ans'>Ipc Collage</span>
							  <span class ='title'>Level:</span><span class ='ans'>Certificate</span>
						</div>
						
					</div>
					
					<div id = 'sucject_lecture' onclick = "openAbsolute('book_temprate');">
						<div id ='imgCover'><img src = videos/cove.png></div>
						<div id='details'>
							<span class ='topc_lect'>Classification Lectures</span>
						    <span class ='title'>Name:</span><span class ='ans'>Maria Masaburi</span>
							  <span class ='title'>School:</span><span class ='ans'>Private Teacher</span>
							  <span class ='title'>School:</span><span class ='ans'>Ipc Collage</span>
							  <span class ='title'>Level:</span><span class ='ans'>Certificate</span>
						</div>
						
					</div>
					
					<div id = 'sucject_lecture' onclick = "openAbsolute('book_temprate');">
						<div id ='imgCover'><img src = videos/cove.png></div>
						<div id='details'>
							<span class ='topc_lect'>Classification Lectures</span>
						    <span class ='title'>Name:</span><span class ='ans'>Maria Masaburi</span>
							  <span class ='title'>School:</span><span class ='ans'>Private Teacher</span>
							  <span class ='title'>School:</span><span class ='ans'>Ipc Collage</span>
							  <span class ='title'>Level:</span><span class ='ans'>Certificate</span>
						</div>
						
					</div>
					
					<div id = 'sucject_lecture' onclick = "openAbsolute('book_temprate');">
						<div id ='imgCover'><img src = videos/cove.png></div>
						<div id='details'>
							<span class ='topc_lect'>Classification Lectures</span>
						    <span class ='title'>Name:</span><span class ='ans'>Maria Masaburi</span>
							  <span class ='title'>School:</span><span class ='ans'>Private Teacher</span>
							  <span class ='title'>School:</span><span class ='ans'>Ipc Collage</span>
							  <span class ='title'>Level:</span><span class ='ans'>Certificate</span>
						</div>
						
					</div>
					
					<div id = 'sucject_lecture' onclick = "openAbsolute('book_temprate');">
						<div id ='imgCover'><img src = videos/cove.png></div>
						<div id='details'>
							<span class ='topc_lect'>Classification Lectures</span>
						    <span class ='title'>Name:</span><span class ='ans'>Maria Masaburi</span>
							  <span class ='title'>School:</span><span class ='ans'>Private Teacher</span>
							  <span class ='title'>School:</span><span class ='ans'>Ipc Collage</span>
							  <span class ='title'>Level:</span><span class ='ans'>Certificate</span>
						</div>
						
					</div>
					
				</div>
				
				
				
			</div>
			
			
			
			<?php include 'include/infosection.php'; ?>
			
		</div>
		
		</div>
    </div>
    
</div>

	<?php include 'include/skelotonBottom_login.php'; ?>
	<?php
   }else{
       echo '<p>You need <a href = "login.php">Login</a> or <a href = "registration.php">Register</a></p>';
	}
?>


