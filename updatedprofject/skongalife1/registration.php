<?php
   include_once "function.php";
   
   $user = new LoginRegistration();
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Skonga life.com</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
    <body>
        <?php
            if($_SERVER['REQUEST_METHOD']==  'POST'){
                $username  = $_POST['username'];
                $name      = $_POST['name'];
                $pass      = $_POST['pass'];
                @$schul    = $_POST['schoolname'];
                
                if(!empty($username) && !empty($pass) && !empty($schul) && !empty($name)){
                     $pass_m  = md5($pass);
                 echo  $register =$user -> registerUser($username,$name,$pass_m,$schul);
                    //if($register){
                    //    echo "Register done <a href='login.php'>click here</a> for login";
                    //}else{
                    //    echo "somthing wrong";
                    //}
                
                }else{
                    echo "field must be filled";
                }
            }
                  
//                  $titles = array($sec,$pri,$collag);
//							if(count($titles)){
//                              
//							  
//							  foreach($titles as $title){
//								  if(!empty($title)){
//                                    $date =date("Y-m-d");
//									$register = $user->registerUser($username,$pass,$schul,$email,$title,$date);
//									
//								  }
//								}
//							  }
//							}
//            /*   if(!empty($sec) || !empty($pri)){
//                    $rigister = $user->registerUser($username,$pass,$schul,$email,$pri,$sec); 
//                  }*/
//                    
//                  
//                else{
//                    echo "fill the gap Biiiiiiitch";
//                }
//            }
        
        ?>
        
        
    <div>
        <div id="wraper">
            <div class ="header">
                <h3>Registration</h3>
            </div>
            
            <!-- <div class ="mainmenu">-->
            <!--    <ul>-->
            <!--        <li><a href="">Home</a></li>-->
            <!--        <li><a href="">Papers</a></li>-->
            <!--        <li><a href="">Qustion</a></li>-->
            <!--        <li><a href="">Max</a></li>-->
            <!--        <li><a href="">Books</a></li>-->
            <!--        <li><a href="">Details</a></li>-->
            <!--        <li><a href="">Contact</a></li>-->
            <!--    </ul>-->
            <!--</div>-->
             
             <div class ="mainmenu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="profile.php"> Show Profile</a></li>
                    <li><a href="changePassword.php">Change Password</a></li>
                    <li><a href="logout.php">Logout</a></li>
                    <li><a href="register.php">register</a></li>
                    
                </ul>
            </div>
             
            <div class ="content">
                <form ation="" method="POST">
                    <div>
                        <label for="username">name</label>
                        <input type="type" name="name" placeholder="Your name">
                    </div>
                    <div>
                        <label for="username">Username</label>
                        <input type="type" name="username" placeholder="Your username">
                    </div>
                     
                    <div>
                        <label for="password">Password</label>
                        <input type="password" name="pass" placeholder="Your password">
                    </div>
                    
                    <div>
                        <label for="shoolname">School Name  </label>
                        <input type="text" name="schoolname" placeholder="Your School Name"><br/>
                    </div>  
                    <input type="submit" name="submit"  value="Registration">
                </form>
            </div>
            
        </div>
                   
           
    
    </div>
    </body>
</html>