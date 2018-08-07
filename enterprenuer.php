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

				<h2 class = "worrldWraper">ENTERPRENUER WORD</h2>

                <?php $frompage = 5; //entarprenuers page ?>
				<?php include "include/chats.php";?>
			</div>
			
			<?php include 'include/infosectionTwo.php'; ?>
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

