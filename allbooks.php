
<?php  

require_once 'Core/Init.php';

$user = new User();

//echo $user->data()->username;
if ($user->isLoggedIn()) {
  # code...
  // echo 'logged In';
  // echo escape($user->data()->username);
 ?>


<?php include 'include/skeletonTop.php'; ?>
   
<div id = 'Pagewraper'>
<?php include 'include/sidenavigation.php'; ?>
	
	
	
    <div id = 'side_two' >
		<!--/***********header after login*********/-->
		<?php include 'include/topheader.php'; ?>
		
		<div id='mainWraper'>
			<div class = 'section'>
		      <?php include 'include/profileheader.php'; ?>
				
				ALL BOOKS <br/>
                 story books<br/>
                 alafu ulela ulela<br/>
                 erick shigongo books<br/>
                 abunuasi<br/>
                 Kiswahil books ngoswe penz kitovu ch auzembe<br/>
                 biosi books<br/>
                 ETC
                 
				
			
			
			<?php include 'include/infosection.php'; ?>
			
		</div>
		
		</div>
    </div>
    
</div>

	<?php include 'include/skelotonBottom_login.php'; ?>

<?php	   }else{
       echo '<p>You need <a href = "login.php">Login</a> or <a href = "registration.php">Register</a></p>';
    }
?>
