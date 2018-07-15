<?php 
  include ('functions.php');
  $users= new LoginRegistration();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Skonga life.com</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
<body>
     
   <div class = "wraper">
      <div class="header">
         <h3>REGISTRATION</h3>
      </div>

      <div class = "mainMenu">
        <span><a href="index.php">Home  </a></span>
        <span><a href="profile.php">Show Profile  </a></span>
        <span><a href="changepassword.php">change Password </a></span>
        <span><a href="logout.php">Logout </a></span>
        <span><a href="login.php">Login </a></span>
        <span><a href="register.php">Logout </a></span>

      </div>


     <div class = "content">
          <div class="header">
               <h3>REGISTRATION</h3>
          </div>

         
         <p class="msg">
           
            <?php 
                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    $fname = $_POST['fullname'];
                    $uname = $_POST['username'];
                    $pass = $_POST['password'];
                    $phoneNo = $_POST['phoneNo'];
                    // $male = $_POST['male'];
                    // $female = $_POST['female'];

                    if(empty($fname) || empty($uname) || empty($pass) || empty($phoneNo) ){
                        echo"<span style = 'color:red'>Error... Field Must be Empyt </span>";
                    }else{
                        $pass = md5($pass);
                       $register = $users->registerUser($fname,$uname,$pass,$phoneNo);
                       if($register){
                        echo "Registration Complite <a href '#''>Login</a>";
                       }else{
                        echo "username Alred used";
                       }
                    }
                }
             ?>
         </p>

          <div class = "login_reg">
               <form action=""    method="POST">
                    <div class = "casual_info reg_info">
                        <div class="reg fullname">
                            <input type="tex" name = "fullname" placeholder="Full Name">
                            <p class="ajaxmsg"></p>
                        </div>
                            
                        <div class="reg username">
                            <input type="tex" name = "username" id = "username" 
                             maxlength="15"  placeholder="Username">
                            <p class="ajaxmsg"></p>
                        </div>


                        <div class="reg phoneNo">
                            <input type="tex" name = "phoneNo" placeholder="Phone No">
                            <p class="ajaxmsg"></p>
                        </div>

                        <div class="reg Password">
                            <input type="Password" name = "password" placeholder="Password">
                            <p class="ajaxmsg"></p>
                        </div>

                        <div class="reg gender">
                            <h3>Gender</h3>
                            <div class = "divradio genderMl"><input type="radio" name = "male"><span class="male">Male</span></div>
                            <div class = "divradio genderFm"><input type="radio" name = "female"><span class="female">Female</span></div>
                        </div>

                        <div class="reg account">
                            <h3>Choose Account</h3>
                            <div>
                              <input type="checkbox"><span class="Student">Student(Unversity,Collage,A-level,O-level,Primary,kindagetern)</span>
                            </div>
                           
                            <div >
                              <input type="checkbox" id = 'chekbox_students_info' onclick = "checkbox_register('student_info','chekbox_students_info');"><span class="Teacher">Teacher</span>
                            </div>
                            <div ><input type="checkbox"><span class="Parent">Parent</span></div>
                            <div ><input type="checkbox"><span class="Enterprenuar">Enterprenuar</span></div>
                        </div>
                    </div>

                    <div class="reg next_back_panel">
                     <div class="nextbotton">NEXT</div>
                    </div>

                    <div id = "student_info" class = "student_info reg_info">
                        <h3>STUDENT INFO</h3>
                          
                        <div class="reg gradInfo">
                            <h3>Choose Your Grade</h3>
                            <div onclick = "dispVisibility('Unversity_collageInfo','Primary_secondInfo');" class = "secVspr Pr_sec_level">Primary/Secondary</div>
                          
                            <div onclick = "dispVisibility('Primary_secondInfo','Unversity_collageInfo');" class = "collVsunv Pr_sec_level">Collage/inversity</div>
                         </div>
                         
                       
                        <div id = "Unversity_collageInfo" class = "Unversity_collageInfo educationLevelInfo">
                            <h3>Collage & Unversity Info</h3>
                            <div class="reg Schoolname">
                                <input type="text" name = "Schoolname" placeholder="Your Unversity/collage Name">
                                <div class="Level Mkoa">
                                    <label for='SECTION'>Mkoa</label>
                                    <select id='SECTION' > 
                                        <option selected="selected">Dar-es-Salaam</option>
                                        <option>Mbeya</option>
                                        <option>Iringa</option>
                                        <option>Arusha</option>
                                        <option>Morogoro</option>
                                        <option>Moshi</option>
                                        <option>Dodoma</option>
                                    </select>
                                </div>
                            </div>

                            <div class="reg Schoolname">
                                <input type="text" name = "Schoolname" placeholder="Course Name">

                                <div class="Level Mkoa">
                                    <label for='SECTION'>Level</label>
                                    <select id='SECTION'> 
                                        <option selected="selected">Certifiate</option>
                                        <option>Diploma 1year</option>
                                        <option>Diploma 2year</option>
                                        <option>Diploma 3year</option>
                                        <option>Degree 1year</option>
                                        <option>Degree 2year</option>
                                        <option>Degree 3year</option>
                                        <option>Masters 1year</option>
                                        <option>Masters 2year</option>
                                        <option>PHD </option>
                                    </select>
                                </div>
                            </div>

                            <div class = "verifyProfiles">
                                  <h2>Find Teacher To verify You</h2>
                                  <div class="slideVerify">
                                    <div class = "profpanel">
                                       <div class = "veryImg"><img src= "img/p2.jpg"/></div>
                                       <div class = "verifedSymbol">v</div>
                                        <div class = "prof_cont">
                                            <div class = "panel_title t_name">
                                              <span class = "t_title">Lecture:</span>
                                              <span class = "t_nym">Nehemia MwansasuS</span>
                                            </div>
                                        </div>  
                                        <div class = "nextbotton verfyme">
                                            Verify Me
                                        </div>
                                    </div>
                                    <div class = "profpanel">
                                       <div class = "veryImg"><img src= "img/p2.jpg"/></div>
                                       <div class = "verifedSymbol">v</div>
                                        <div class = "prof_cont">
                                            <div class = "panel_title t_name">
                                               <span class = "t_title">Lecture:</span>
                                              <span class = "t_nym">James Opole</span>
                                            </div>
                                        </div>  
                                        <div class = "nextbotton verfyme">
                                            Verify Me
                                        </div>
                                    </div>
                                    <div class = "profpanel">
                                       <div class = "veryImg"><img src= "img/p2.jpg"/></div>
                                       <div class = "verifedSymbol">v</div>
                                        <div class = "prof_cont">
                                            <div class = "panel_title t_name">
                                               <span class = "t_title">Lecture:</span>
                                              <span class = "t_nym">James Opole</span>
                                            </div>
                                        </div>  

                                    
                                            <div class = "nextbotton verfyme">
                                                Verify Me
                                            </div>
                                    </div>
                                  </div> 
                            </div>
                         </div>

                        <div id = "Primary_secondInfo" class = "Primary_secondInfo educationLevelInfo">
                          <h3>Primary & Secondary Info</h3>
                          <div class="reg Schoolname">
                             <input type="text" name = "Schoolname" placeholder="Your  Primary/Secondary school Name">
                             <div class="Level Mkoa">
                                    <label for='SECTION'>Mkoa</label>
                                    <select id='SECTION'> 
                                        <option selected="selected">Dar-es-Salaam</option>
                                        <option>Mbeya</option>
                                        <option>Iringa</option>
                                        <option>Arusha</option>
                                        <option>Morogoro</option>
                                        <option>Moshi</option>
                                        <option>Dodoma</option>
                                    </select>
                                </div>
                          </div>

                          <div class="reg Leve">
                            
                             <!-- <input type="text" name = "Schoolname" placeholder="Your Shool/collage Name"> -->

                            
                              <div class="Level Section">
                                    <label for='SECTION'>Level</label>
                                    <select id='SECTION'> 
                                        <option selected="selected">Form 1</option>
                                        <option>Form 2</option>
                                        <option onclick="openCombination('SubjectCombination');" >Form 3</option>
                                        <option onclick="openCombination('SubjectCombination');">Form 4</option>
                                        <option onclick="openCombination('SubjectCombination');">Form 5</option>
                                        <option onclick="openCombination('SubjectCombination');">Form 6</option>
                                        <option>Standard 1</option>
                                        <option>Standard 2</option>
                                        <option>Standard 3</option>
                                        <option>Standard 4</option>
                                        <option>Standard 5</option>
                                        <option>Standard 6</option>
                                        <option>Standard 7</option>
                                        <option>Standard 1</option>
                                        <option>KindGarten</option>
                                    </select>
                               </div>

                              <div id = "SubjectCombination" class="Combination Section">
                                    <label for='SECTION'>Combination</label>
                                    <select id='SECTION'> 
                                        <option selected="selected">None</option>
                                        <option>PCM</option>
                                        <option>PCB</option>
                                        <option>PGM</option>
                                        <option>CBG</option>
                                        <option>EGM</option>
                                        <option>ECA</option>
                                        <option>HGM</option>
                                        <option>HKL</option>
                                        <option>HGK</option>
                                        <option>PHD </option>
                                    </select>
                             </div>

                             <div class = "verifyProfiles">
                                  <h2>Find Teacher To verify You</h2>
                                  <div class="slideVerify">
                                    <div class = "profpanel">
                                       <div class = "veryImg"><img src= "img/p2.jpg"/></div>
                                       <div class = "verifedSymbol">v</div>
                                        <div class = "prof_cont">
                                            <div class = "panel_title t_name">
                                              <span class = "t_title">Teacher:</span>
                                              <span class = "t_nym">James Opole</span>
                                            </div>
                                        </div>  

                                    
                                            <div class = "nextbotton verfyme">
                                                Verify Me
                                            </div>
                                    </div>
                                  </div> 
                             </div>
                          </div>
                        </div>

                        <div class="reg next_back_panel">
                            <div class="nextbotton">NEXT</div>
                        </div>
                    </div>

                    <div id = "student_info" class = "student_info reg_info">
                        <h3>TEACHER/LeCTURE INFO</h3> 
                        <div class="reg gradInfo">
                            <h3>Choose Your Grade</h3>
                            <div onclick = "dispVisibility('Unversity_collage_lectInfo','Primary_secondtechInfo');" class = "secVspr Pr_sec_level">Primary/Secondary Teacher</div>
                          
                            <div onclick = "dispVisibility('Primary_secondtechInfo','Unversity_collage_lectInfo');" class = "collVsunv Pr_sec_level">Collage/inversity Lecture</div>
                         </div>
                         
                       
                         <div id = "Unversity_collage_lectInfo" class = "Unversity_collageInfo educationLevelInfo">
                             <h3>Collage & Unversity Info</h3>
                              <div class="reg Schoolname">
                                    <input type="text" name = "Schoolname" placeholder="Your Unversity/collage Name">
                                    <div class="Level Mkoa">
                                        <label for='SECTION'>Mkoa</label>
                                        <select id='SECTION' > 
                                            <option selected="selected">Dar-es-Salaam</option>
                                            <option>Mbeya</option>
                                            <option>Iringa</option>
                                            <option>Arusha</option>
                                            <option>Morogoro</option>
                                            <option>Moshi</option>
                                            <option>Dodoma</option>
                                        </select>
                                    </div>
                              </div>

                              <div class="reg Schoolname">
                                

                                    <input type="text" name = "Schoolname" placeholder="Course Name">

                                    <div class="Level Mkoa">
                                        <label for='SECTION'>Level</label>
                                        <select id='SECTION'> 
                                            <option selected="selected">Certifiate</option>
                                            <option>Diploma 1year</option>
                                            <option>Diploma 2year</option>
                                            <option>Diploma 3year</option>
                                            <option>Degree 1year</option>
                                            <option>Degree 2year</option>
                                            <option>Degree 3year</option>
                                            <option>Masters 1year</option>
                                            <option>Masters 2year</option>
                                            <option>PHD </option>
                                        </select>
                                    </div>
                                    <h3 class = "subjectLectureHead">Your Lecture Subject Name</h3>
                                    <input type="text" name = "Schoolname"  class = "lecturesubject" placeholder="subject one">
                                    <input type="text" name = "Schoolname" class = "lecturesubject"  placeholder="Your subject you Lecture">
                                    <input type="text" name = "Schoolname" class = "lecturesubject"  placeholder="Your subject you Lecture">
                                    <input type="text" name = "Schoolname" class = "lecturesubject"  placeholder="Your subject you Lecture">

                              </div>

                               <div class = "verifyProfiles">
                                      <h2>Find Teacher To verify You</h2>
                                      <div class="slideVerify">
                                        <div class = "profpanel">
                                           <div class = "veryImg"><img src= "img/p2.jpg"/></div>
                                           <div class = "verifedSymbol">v</div>
                                            <div class = "prof_cont">
                                                <div class = "panel_title t_name">
                                                  <span class = "t_title">Lecture:</span>
                                                  <span class = "t_nym">Nehemia MwansasuS</span>
                                                </div>
                                            </div>  
                                            <div class = "nextbotton verfyme">
                                                Verify Me
                                            </div>
                                        </div>
                                        <div class = "profpanel">
                                           <div class = "veryImg"><img src= "img/p2.jpg"/></div>
                                           <div class = "verifedSymbol">v</div>
                                            <div class = "prof_cont">
                                                <div class = "panel_title t_name">
                                                   <span class = "t_title">Lecture:</span>
                                                  <span class = "t_nym">James Opole</span>
                                                </div>
                                            </div>  

                                        
                                                <div class = "nextbotton verfyme">
                                                    Verify Me
                                                </div>
                                        </div>
                                        <div class = "profpanel">
                                           <div class = "veryImg"><img src= "img/p2.jpg"/></div>
                                           <div class = "verifedSymbol">v</div>
                                            <div class = "prof_cont">
                                                <div class = "panel_title t_name">
                                                   <span class = "t_title">Lecture:</span>
                                                  <span class = "t_nym">James Opole</span>
                                                </div>
                                            </div>  

                                        
                                                <div class = "nextbotton verfyme">
                                                    Verify Me
                                                </div>
                                        </div>
                                      </div> 
                                 </div>
                         </div>

                         <div id = "Primary_secondtechInfo" class = "Primary_secondInfo educationLevelInfo">
                              <h3>Primary & Secondary Info</h3>
                              <div class="reg Schoolname">
                                 <input type="text" name = "Schoolname" placeholder="Your  Primary/Secondary school Name">
                                 <div class="Level Mkoa">
                                        <label for='SECTION'>Mkoa</label>
                                        <select id='SECTION'> 
                                            <option selected="selected">Dar-es-Salaam</option>
                                            <option>Mbeya</option>
                                            <option>Iringa</option>
                                            <option>Arusha</option>
                                            <option>Morogoro</option>
                                            <option>Moshi</option>
                                            <option>Dodoma</option>
                                        </select>
                                    </div>
                              </div>

                              <div class="reg Leve">
                                
                                 <!-- <input type="text" name = "Schoolname" placeholder="Your Shool/collage Name"> -->

                                
                                  <div class="Level Section">
                                        <label for='SECTION'>Level</label>
                                        <select id='SECTION'> 
                                            <option selected="selected">Form 1</option>
                                            <option>Form 2</option>
                                            <option onclick="openCombination('SubjectCombination');" >Form 3</option>
                                            <option onclick="openCombination('SubjectCombination');">Form 4</option>
                                            <option onclick="openCombination('SubjectCombination');">Form 5</option>
                                            <option onclick="openCombination('SubjectCombination');">Form 6</option>
                                            <option>Standard 1</option>
                                            <option>Standard 2</option>
                                            <option>Standard 3</option>
                                            <option>Standard 4</option>
                                            <option>Standard 5</option>
                                            <option>Standard 6</option>
                                            <option>Standard 7</option>
                                            <option>Standard 1</option>
                                            <option>KindGarten</option>
                                        </select>
                                   </div>

                                  <div id = "SubjectCombination" class="Combination Section">
                                        <label for='SECTION'>Combination</label>
                                        <select id='SECTION'> 
                                            <option selected="selected">None</option>
                                            <option>PCM</option>
                                            <option>PCB</option>
                                            <option>PGM</option>
                                            <option>CBG</option>
                                            <option>EGM</option>
                                            <option>ECA</option>
                                            <option>HGM</option>
                                            <option>HKL</option>
                                            <option>HGK</option>
                                            <option>PHD </option>
                                        </select>
                                 </div>

                                 <h3 class = "subjectLectureHead">Your SPecialized Subject To teach</h3>
                                   <input type="text" name = "Schoolname" class = "lecturesubject"  placeholder="Your subject you can Teach">
                                    <input type="text" name = "Schoolname" class = "lecturesubject"  placeholder="Your subject you can Teach">
                                    <input type="text" name = "Schoolname" class = "lecturesubject"  placeholder="Your subject you can Teach">
                                 <div class = "verifyProfiles">
                                      <h2>Find Teacher To verify You</h2>
                                      <div class="slideVerify">
                                        <div class = "profpanel">
                                           <div class = "veryImg"><img src= "img/p2.jpg"/></div>
                                           <div class = "verifedSymbol">v</div>
                                            <div class = "prof_cont">
                                                <div class = "panel_title t_name">
                                                  <span class = "t_title">Teacher:</span>
                                                  <span class = "t_nym">James Opole</span>
                                                </div>
                                            </div>  

                                        
                                                <div class = "nextbotton verfyme">
                                                    Verify Me
                                                </div>
                                        </div>
                                      </div> 
                                 </div>
                              </div>
                         </div>
                        
                        
                    </div>


                    <div id = "student_info" class = "student_info reg_info">
                        <h3>PARENT INFO</h3>
                        <div class="reg gradInfo">
                            <h3>Choose Your Grade</h3>
                            <div onclick = "dispVisibility('Unversity_collage_parentInfo','Primary_secondparentInfo');" class = "secVspr Pr_sec_level"> Primary/Secondary Son/Doughter</div>
                          
                            <div onclick = "dispVisibility('Primary_secondparentInfo','Unversity_collage_parentInfo');" class = "collVsunv Pr_sec_level"> Collage/inversity Son/Doughter</div>
                         </div>
                         
                       
                         <div id = "Unversity_collage_parentInfo" class = "Unversity_collageInfo educationLevelInfo">
                             <h3>Collage & Unversity Info</h3>
                              <div class="reg Schoolname">
                                    <input type="text" name = "Schoolname" class = "p_info" placeholder="full student name">
                                    <input type="text" name = "Schoolname" class = "p_info" placeholder="username of student name">
                                    <input type="text" name = "Schoolname" class = "p_info" placeholder="Your Unversity/collage Name">
                                    <div class="Level Mkoa">
                                        <label for='SECTION'>Mkoa</label>
                                        <select id='SECTION' > 
                                            <option selected="selected">Dar-es-Salaam</option>
                                            <option>Mbeya</option>
                                            <option>Iringa</option>
                                            <option>Arusha</option>
                                            <option>Morogoro</option>
                                            <option>Moshi</option>
                                            <option>Dodoma</option>
                                        </select>
                                    </div>
                              </div>

                              <div class="reg Schoolname">
                                

                                    <input type="text" name = "Schoolname" placeholder="Course Name">

                                    <div class="Level Mkoa">
                                        <label for='SECTION'>Level</label>
                                        <select id='SECTION'> 
                                            <option selected="selected">Certifiate</option>
                                            <option>Diploma 1year</option>
                                            <option>Diploma 2year</option>
                                            <option>Diploma 3year</option>
                                            <option>Degree 1year</option>
                                            <option>Degree 2year</option>
                                            <option>Degree 3year</option>
                                            <option>Masters 1year</option>
                                            <option>Masters 2year</option>
                                            <option>PHD </option>
                                        </select>
                                    </div>
                                    

                              </div>

                               <div class = "verifyProfiles">
                                      <h2>Find Teacher To verify You</h2>
                                      <div class="slideVerify">
                                        <div class = "profpanel">
                                           <div class = "veryImg"><img src= "img/p2.jpg"/></div>
                                           <div class = "verifedSymbol">v</div>
                                            <div class = "prof_cont">
                                                <div class = "panel_title t_name">
                                                  <span class = "t_title">Lecture:</span>
                                                  <span class = "t_nym">Nehemia MwansasuS</span>
                                                </div>
                                            </div>  
                                            <div class = "nextbotton verfyme">
                                                Verify Me
                                            </div>
                                        </div>
                                        <div class = "profpanel">
                                           <div class = "veryImg"><img src= "img/p2.jpg"/></div>
                                           <div class = "verifedSymbol">v</div>
                                            <div class = "prof_cont">
                                                <div class = "panel_title t_name">
                                                   <span class = "t_title">Lecture:</span>
                                                  <span class = "t_nym">James Opole</span>
                                                </div>
                                            </div>  

                                        
                                                <div class = "nextbotton verfyme">
                                                    Verify Me
                                                </div>
                                        </div>
                                        <div class = "profpanel">
                                           <div class = "veryImg"><img src= "img/p2.jpg"/></div>
                                           <div class = "verifedSymbol">v</div>
                                            <div class = "prof_cont">
                                                <div class = "panel_title t_name">
                                                   <span class = "t_title">Lecture:</span>
                                                  <span class = "t_nym">James Opole</span>
                                                </div>
                                            </div>  

                                        
                                                <div class = "nextbotton verfyme">
                                                    Verify Me
                                                </div>
                                        </div>
                                      </div> 
                                 </div>
                         </div>

                         <div id = "Primary_secondparentInfo" class = "Primary_secondInfo educationLevelInfo">
                              <h3>Parents Info</h3>
                              <div class="reg Schoolname">
                                 <input type="text" name = "Schoolname" class = "p_info" placeholder="Name your Of son/doughter">
                                 <input type="text" name = "Schoolname" class = "p_info" placeholder="Your  Primary/Secondary school Name">
                                 <div class="Level Mkoa">
                                        <label for='SECTION'>Mkoa</label>
                                        <select id='SECTION'> 
                                            <option selected="selected">Dar-es-Salaam</option>
                                            <option>Mbeya</option>
                                            <option>Iringa</option>
                                            <option>Arusha</option>
                                            <option>Morogoro</option>
                                            <option>Moshi</option>
                                            <option>Dodoma</option>
                                        </select>
                                    </div>
                              </div>

                              <div class="reg Leve">
                                
                                 <!-- <input type="text" name = "Schoolname" placeholder="Your Shool/collage Name"> -->

                                
                                  <div class="Level Section">
                                        <label for='SECTION'>Level</label>
                                        <select id='SECTION'> 
                                            <option selected="selected">Form 1</option>
                                            <option>Form 2</option>
                                            <option onclick="openCombination('SubjectCombination');" >Form 3</option>
                                            <option onclick="openCombination('SubjectCombination');">Form 4</option>
                                            <option onclick="openCombination('SubjectCombination');">Form 5</option>
                                            <option onclick="openCombination('SubjectCombination');">Form 6</option>
                                            <option>Standard 1</option>
                                            <option>Standard 2</option>
                                            <option>Standard 3</option>
                                            <option>Standard 4</option>
                                            <option>Standard 5</option>
                                            <option>Standard 6</option>
                                            <option>Standard 7</option>
                                            <option>Standard 1</option>
                                            <option>KindGarten</option>
                                        </select>
                                   </div>

                                  <div id = "SubjectCombination" class="Combination Section">
                                        <label for='SECTION'>Combination</label>
                                        <select id='SECTION'> 
                                            <option selected="selected">None</option>
                                            <option>PCM</option>
                                            <option>PCB</option>
                                            <option>PGM</option>
                                            <option>CBG</option>
                                            <option>EGM</option>
                                            <option>ECA</option>
                                            <option>HGM</option>
                                            <option>HKL</option>
                                            <option>HGK</option>
                                            <option>PHD </option>
                                        </select>
                                 </div>

                                 <!-- <h3 class = "subjectLectureHead">Your SPecialized Subject To teach</h3>
                                   <input type="text" name = "Schoolname" class = "lecturesubject"  placeholder="Your subject you can Teach">
                                    <input type="text" name = "Schoolname" class = "lecturesubject"  placeholder="Your subject you can Teach">
                                    <input type="text" name = "Schoolname" class = "lecturesubject"  placeholder="Your subject you can Teach"> -->
                                 
                                 <div class = "verifyProfiles">
                                      <h2>Find Teacher To verify You</h2>
                                      <div class="slideVerify">
                                        <div class = "profpanel">
                                           <div class = "veryImg"><img src= "img/p2.jpg"/></div>
                                           <div class = "verifedSymbol">v</div>
                                            <div class = "prof_cont">
                                                <div class = "panel_title t_name">
                                                  <span class = "t_title">Teacher:</span>
                                                  <span class = "t_nym">James Opole</span>
                                                </div>
                                            </div>  

                                        
                                                <div class = "nextbotton verfyme">
                                                    Verify Me
                                                </div>
                                        </div>

                                        <div class = "profpanel">
                                           <div class = "veryImg"><img src= "img/p2.jpg"/></div>
                                           <div class = "verifedSymbol">v</div>
                                            <div class = "prof_cont">
                                                <div class = "panel_title t_name">
                                                  <span class = "t_title">Student:</span>
                                                  <span class = "t_nym">Nehemia Mwansasu</span>
                                                </div>
                                            </div>  

                                        
                                                <div class = "nextbotton verfyme">
                                                    Verify Me
                                                </div>
                                        </div>

                                        <div class = "profpanel">
                                           <div class = "veryImg"><img src= "img/p2.jpg"/></div>
                                           <div class = "verifedSymbol">v</div>
                                            <div class = "prof_cont">
                                                <div class = "panel_title t_name">
                                                  <span class = "t_title">teacher:</span>
                                                  <span class = "t_nym">Neema Mwansasu</span>
                                                </div>
                                            </div>  

                                        
                                                <div class = "nextbotton verfyme">
                                                    Verify Me
                                                </div>
                                        </div>
                                      </div> 
                                 </div>
                              </div>
                         </div>
                        <div class="reg next_back_panel">
                            <div class="nextbotton">NEXT</div>
                        </div>  
                    </div>


                    <div id = "Enterprenuer_info" class = "Enterprenuar_info reg_info">
                         <h3>ENTERPRENUAR INFO</h3>
                      
                         
                           
                             <div id = "Unversity_collage_parentInfo" class = "Enterprenuar_inf">
                                 <h3>Collage & Unversity Info</h3>
                                  <div class="reg Schoolname">
                                        <input type="text" name = "Schoolname" class = "p_info" placeholder="Main Busness">
                                        <input type="text" name = "Schoolname" class = "p_info" placeholder="Other BUsness">
                                        <div class="Level Mkoa">
                                            <label for='SECTION'>Mkoa</label>
                                            <select id='SECTION' > 
                                                <option selected="selected">Dar-es-Salaam</option>
                                                <option>Mbeya</option>
                                                <option>Iringa</option>
                                                <option>Arusha</option>
                                                <option>Morogoro</option>
                                                <option>Moshi</option>
                                                <option>Dodoma</option>
                                            </select>
                                        </div>
                                  </div>

                             </div>

                            <div class="reg next_back_panel">
                                <div class="nextbotton">NEXT</div>
                            </div>
                    </div>

                     <input type = "submit">
               </form>
        </div>
   </div>

   <script type="text/javascript"  src ="jsa.js"></script>

</body>
</html>




<?php  



                  

                    $user->create_student(array(
                           'user_id' => $user->idreturn(Input::get('username')),
                           // 'schoolname' => Input::get('select_Mkoa_unversity'), //$chuo_shulename,
                           // 'region' =>  Input::get('select_Mkoa_unversity'),    //  $mkoa,
                           // 'levelOrStandard' => Input::get('unversity_level'),   // $kiwango,
                           // 'facultOrComb_taken' => Input::get('Course_Name'), // $namecoz,
                           // 'level_identify' =>  'h'  //unversity/collage/institute
                          ));

                // if(Input::get('studentLevel')){
                //      if(empty(Input::get('Unversity_or_Collage_name')) &&
                //         empty(Input::get('Course_Name')) 
                //         ){
                //          # code...

                //          echo "Enter Data ";
                //     }else{
                //          $chuo_shulename = Input::get('Unversity_or_Collage_name');
                //          $mkoa = Input::get('select_Mkoa_unversity');
                //           $kiwango = Input::get('unversity_level');
                //           $namecoz = Input::get('Course_Name');
                //           $level = 'h';

                          

                //     }
                  



               // }
           



        
                
                // if(Input::get('studentLevel')){
                //     $studentLevel = escape(Input::get('studentLevel'));
                     
                      

                //       // !empty(Input::get('Unversity_or_Collage_name')) &&
                //       //   !empty(Input::get('select_Mkoa_unversity')) && 
                //       //   !empty(Input::get('unversity_level')) &&
                //       //   !empty(Input::get('Course_Name')) && 
                //       //   !empty(Input::get('Secondary_primary_shool')) && 
                //       //   !empty(Input::get('region_of_primary_school')) && 
                //       //   !empty(Input::get('standard_form_level')) && 
                //       //   !empty(Input::get('school_combination'))
                    
                //     if (!empty(Input::get('Unversity_or_Collage_name')) &&
                //         !empty(Input::get('Course_Name')) && 
                //         !empty(Input::get('Secondary_primary_shool')) 
                //         ){
                //         # code...


                //         echo "Choose one Account please Premary/secondary or Unversity/collage/instutitue ";

                //     }

                //     if( !empty(Input::get('Unversity_or_Collage_name')) &&  
                //          !empty(Input::get('Course_Name'))   
                //     ){
                //          $chuo_shulename = Input::get('Unversity_or_Collage_name');
                //          $mkoa = Input::get('select_Mkoa_unversity');
                //          $kiwango = Input::get('unversity_level');
                //          $namecoz = Input::get('Course_Name');
                //          $level = 'h';

                //           echo $user->idreturn(Input::get('username'));

                //           $user->create_student(array(
                //           'user_id'=> $user->idreturn(Input::get('username')),
                //           'schoolname' => $chuo_shulename,
                //           'region' => $mkoa,
                //           'levelOrStandard' => $kiwango,
                //           'facultOrComb_taken' => $namecoz,
                //           'level_identify' =>  $level  //unversity/collage/institute
                //          ));

                      
                       
                //     }else if( !empty(Input::get('Secondary_primary_shool'))){
                //         // check ni darasa la ngapi
                //         echo $a =  Input::get('standard_form_level');

                //         if (strpos($a, 'Standard') !== false){
                //             $level =  'p';
                //         }

                //         if (strpos($a, 'Form 5') || strpos($a, 'Form 6') !== false){
                //             $level  =  'a';
                //         }


                //         if (strpos($a, 'Form 3') || strpos($a, 'Form 4') || strpos($a, 'Form 2') || strpos($a, 'Form 1') || strpos($a, 'Pre Form 1') !== false){
                //             $level  =  'o';
                //         }
                //         echo "all in secondary level are not emppty";
                //         $chuo_shulename_o = Input::get('Secondary_primary_shool');
                //         $mkoa_o = Input::get('region_of_primary_school');
                //         $kiwango_o = Input::get('standard_form_level');
                //         $namecoz_o = Input::get('school_combination');

                //          $user->create_student(array(
                //         'user_id'=> $user->idreturn(Input::get('username')),
                //         'schoolname' => $chuo_shulename_o,
                //         'region' => $mkoa_o,
                //         'levelOrStandard' => $kiwango_o,
                //         'facultOrComb_taken' => $namecoz_o,
                //         'level_identify' =>  $level  //unversity/collage/institute
                //     ));
                //   }


                   
               // }


                // if(Input::get('Teacher')){
                //     $studentLevel = escape(Input::get('Teacher'));
                //       $level="";
                    
                //     if (
                //         !empty(Input::get('Unversity_or_Collage_name_you_lecture')) &&
                //         !empty(Input::get('select_Mkoa_unversity_lecture')) && 
                //         !empty(Input::get('unversity_level_lecture')) &&
                //         !empty(Input::get('proffesionar_on_subject_1')) && 
                //         !empty(Input::get('proffesionar_on_subject_2')) &&
                //         !empty(Input::get('Course_Name_lecture')) && 
                //         !empty(Input::get('Secondary_primary_shool_teach')) && 
                //         !empty(Input::get('region_of_primary_school_teach')) && 
                //         !empty(Input::get('standard_form_level_teach')) &&
                //         !empty(Input::get('school_combination_teach')) &&
                //         !empty(Input::get('proffesionar_subject_1')) && 
                //         !empty(Input::get('proffesionar_subject_2')) 
                //         )
                //     {
                //         # code...
                //         echo "Choose one Account please Premary/secondary or Unversity/collage/instutitue ";
                //     }else if( !empty(Input::get('Unversity_or_Collage_name_you_lecture')) && 
                //               !empty(Input::get('select_Mkoa_unversity_lecture')) && 
                //               !empty(Input::get('unversity_level_lecture')) &&  
                //               !empty(Input::get('Course_Name_lecture')) &&  
                //               !empty(Input::get('proffesionar_on_subject_1')) &&  
                //               !empty(Input::get('proffesionar_on_subject_2'))  
                //     ){
                //         $chuo_shulename_trainer = Input::get('Unversity_or_Collage_name_you_lecture');
                //         $mkoa_trainer = Input::get('select_Mkoa_unversity_lecture');
                //         $kiwango_trainer = Input::get('unversity_level_lecture');
                //         $namecoz_trainer = Input::get('Course_Name_lecture');
                //         $subject1_trainer = Input::get('proffesionar_on_subject_1');
                //         $subject2_trainer = Input::get('proffesionar_on_subject_2');
                //         $level = 'h';
                       
                //     }else if( !empty(Input::get('Secondary_primary_shool_teach')) && 
                //               !empty(Input::get('region_of_primary_school')) && 
                //               !empty(Input::get('standard_form_level_teach')) &&  
                //               !empty(Input::get('school_combination_teach')) &&
                //               !empty(Input::get('proffesionar_subject_1')) && 
                //               !empty(Input::get('proffesionar_subject_2')) 

                //               ){
                //         // check ni darasa la ngapi
                //         echo $a =  Input::get('standard_form_level_teach');

                //         if (strpos($a, 'Standard') !== false){
                //             $level =  'p';
                //         }

                //         if (strpos($a, 'Form 5') || strpos($a, 'Form 6') !== false){
                //             $level  =  'a';
                //         }


                //         if (strpos($a, 'Form 3') || strpos($a, 'Form 4') || strpos($a, 'Form 2') || strpos($a, 'Form 1') || strpos($a, 'Pre Form 1') !== false){
                //             $level  =  'o';
                //         }
  
                //         @$chuo_shulename_trainer = Input::get('Secondary_primary_shool_teach');
                //         @$mkoa_trainer = Input::get('region_of_primary_school');
                //         @$kiwango_trainer = Input::get('standard_form_level_teach');
                //         @$namecoz_trainer = Input::get('school_combination_teach');
                //         @$subject1_trainer = Input::get('proffesionar_subject_1');
                //         @$subject2_trainer = Input::get('proffesionar_subject_2');
                //     }


                //     $user->create_teacher(array(
                //         'user_id' => $user->idreturn(Input::get('username')),
                //         'schoolname' => $chuo_shulename_trainer,
                //         'region' => $mkoa_trainer,
                //         'levelOrStandard' => $kiwango_trainer,
                //         'facultOrComb_taken' => $namecoz_trainer,
                //         'prof_subject_1' => $subject1_trainer,
                //         'prof_subject_2' => $subject2_trainer,
                //         'level_identify' => $level  //unversity/collage/institute
                //     ));
                // }

                   //  $user->create_primarySecLevel(array(
                   //        'user_id' => $user->idreturn(Input::get('username')),
                   //        'schoolname' => Input::get('Secondary_primary_shool'),
                   //        'region' => Input::get('region_of_primary_school'),
                   //        'levelOrStandard' => Input::get('standard_form_level'),
                   //        'facultOrComb_taken' => Input::get('school_combination'),
                   //        'level_identify' => $level  //unversity/collage/institute
                   //      ));
                   // }





?>