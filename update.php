<?php 
   
   require_once "core/init.php";

   $user = new User();

   if(!$user->isLoggedIn()){
   	Redirect::to('indexs.php');
   }

   if (Input::exists()) {
   	# code...
   	  if(Token::check(Input::get('token'))){
   	  	$validate = new Validate();
   	  	$validation = $validate->check($_POST, array(
            'name' => array(
                  'required' => true,
                  'min' => 2,
                  'max' => 50
            	),
   	  		));

   	  	if ($validation->passed()) {
   	  		# code...
   	  		try{
               $user->update(array('fullname' =>Input::get('name') ));
               Session::flash('home','Your Details Has been Updated');
               Redirect::to('page.php');
   	  		}catch(Exception $e){
               die($e->getmessage());
   	  		}

   	  	}else{
   	  		foreach ($validation->errors() as $error) {
   	  			# code...
   	  			echo $error, '<br>';
   	  		}
   	  	}
   	  }
   }
   
?>


<form action = "" method = "post">
	<div class = "field">
		<label for = 'name'>Name</label> 
		<input type = "text" name = "name" value ="<?php echo escape($user->data()->fullname);?>"  >


		<input type = "submit"  value ="update"  >
		<input type = "hidden"  name ="token" value = "<?php echo Token::generate()?>" >
	</div>
</form>