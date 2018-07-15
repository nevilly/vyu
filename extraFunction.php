<?php 
  require_once 'core/Init.php';

	# code...
	$user_check = 'kakas';

	$user_che = DB::getInstance()->query('SELECT id FROM vy_user WHERE username = ? LIMIT ?',array($user_check,1));

	if(!$user_che->error()){
		echo "Scrript fail";
	}else{
		echo "succed";
	}






?>