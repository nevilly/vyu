<?php require_once 'core/init.php';?>

<?php include 'include/skeletonTop.php'; ?>
      
        <div id = 'loginForm'>
        <p class = Regmsg>
		   <?php 

			    if(input::exists()){
			     	if(Token::check(Input::get('token'))){
			     	  	 $validate = new Validate();
			     	  	 $validation = $validate->check($_POST, array(
                              'username' => array('required' => true),
                              'password' => array('required' => true)
			     	  	 	));

			     	  	 if($validation->passed()){
                           //log userin
			     	  	 	$user = new User();
			     	  	 	$remember = (Input::get('remember') === 'on')? true : false ;

			     	  	 	$login = $user->login(Input::get('username'),input::get('password'),$remember);
                             if ($login) {
			     	  	 		Redirect::to('page.php');
			     	  	 	}else{
                                 echo "login fail";
			     	  	 	}
			     	  	 }else{
			     	  	 	foreach($validation->errors() as $error){
                                  echo $error, '<br>';
			     	  	 	}
			     	  	}
			     	}
			    }
			 ?>  
	     </p>
            <form ation="" method="POST">

			    <div class= 'headerLogin'><h2>Vyup.YYup</h2></div>
                <div class = 'f_one uname'>
                   <input type="type" name="username" class = 'username'  id= 'username' placeholder="Your username" autocomplete="off">
                </div>
                
                <div class = 'f_one password'>
                   <input type="Password" class = 'password' name="password" id = "password" placeholder="Your password">
                </div>
				
				<div class = 'f_one checkbox'>
					<input  type="checkbox" class = 'chek' name="remember" id='remember' >
     			   <label for="Remember">Remember Me</label>
                </div>

                <input type="hidden" name="token"  value="<?php echo Token::generate()?>">

                
			    <div class = 'f_one submit'>
                    <input type="submit" name="submit"  value="LOG IN">
				</div>
				  
			    <div class = 'f_one forgot_p'>
	               <a href ="#">Lost your password?</a>
				</div>
					 
				<div class = 'f_one back'>
	               <a href ="#"><i class = 'fa .fa-arrow-left'></i>Back to Skonga.life</a>
				</div>
                 
		    </form>   
        </div>
	
  <?php include 'include/skelotonBottom_login.php'; ?>