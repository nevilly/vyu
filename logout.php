<?php  
     require_once 'Core/Init.php';

	 $user = new User();
	 $user->logout();
	// if ($user->isLoggedIn()) {
     Redirect::to('indexs.php');
?>
