<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Skonga life.com</title>
  <script type="text/javascript">
  </script>
 </head>

<body>
  <form id = "form1" onsubmit="return false">
    <input type= "text" id = "lecture_schul_tich" value = "">
    <input type= "text" id = "Lect_coz_tich">
    <input type= "text" id = "SECTION_levels_lect">

    <input type="submit" id= "submit" value = "submit">
  </form>






<script>
  


var dataecho = function(){};

dataecho.prototype.getdata = function(data1,data2){

  var data = {}
  data.data1  = document.getElementById(data1);
  data.data2 = document.getElementById(data2);

  data.echoMethod = function(){
    console.log(this.data1+', '+this.data2);
  }
}


var datae = new dataecho();

datae.echoMethod('user','pass');


</script>

<script type = "text/javascript">
      //to select id/class
      //function ya kuvalidate
//     function wey(){}

//     wey.prototype.getid = function(selector){
//       vy_el = {}
//       vy_el.el = selector;
//       console.log(selector);
//     }

//   wey = new wey();

// var dod    = document.getElementById('lecture_schul_tich').value;

// console.log(dod);


// var clickx = document.getElementById('submit');

// clickx.onclick = function(){
//   wey.getid(dod);


  // var login = function(){

  //   this.login = function(){
  //     var b = document.getElentById();

  //     b.onclick function(){
  //        var user = document.getElentById("");
  //        var pass = document.getElentById("");

  //        var l = new login();

  //        if(l.validate(user,pass)){
  //           l.send(user,pass);
  //        }
  //     };
  //   };


  //   this.checkUser = function(){

  //   };
    
  //   this.validate = function(){
  //     return true;
  //   };

  //   this.message = function(){
  //     this.print(msg);
  //   };

  //   this.print = function(msg){
  //       return console.log(msg);
  //   };

  //   this.send = function(u,p){
  //     this.message(u.value+", "+p.value);
  //   };

  //   return this.login();
  // }


   

}
</script>

</body> -->




















<?php


  //lif in teacher Account

                                   if( $accounts->first()->teacher_acc = 1){

                                            $teacher_acc = $db->query("SELECT * FROM student_acc WHERE user_id = ?" ,array($user_id));
                                        if($teacher_acc->count()){

                                        }else{
                                          
                                        }



                                   } else{
                                    echo "not present te cc";
                                   }










               if($accounts->first()->student_acc == 1){
                    $student_acc = $db->query("SELECT * FROM student_acc WHERE user_id = ?" ,array($user_id));
                        if($student_acc->count()){
                          #user_id exit;

                          $st_HigherEdname     = '';
                          $st_O_ASchoolname    = '';
                          $st_region           = '';
                          $st_levelOrStandard  = '';
                          $st_O_AlevelOrStandard  = '';
                          $st_HigherEd_levelOrStandard  = '';
                          $st_facultOrComb     = '';
                          $st_Comb                  = '';
                          $st_verifyperson_id  = '';
                          
                          
                           echo $schoolname = $student_acc->first()->user_id."<br/>";
                           // $schoolnam = $student_acc->first()->schoolname."<br/>";
                             // $region     = $student_acc->first()->region."<br/>";
                             // $region     = $student_acc->first()->facultOrComb_taken."<br/>";
                             // $region     = $student_acc->first()->levelOrStandard."<br/>";


                          if(
                            !empty($student_acc->first()->schoolname) &&
                            !empty($student_acc->first()->facultOrComb_taken) &&
                            !empty($student_acc->first()->levelOrStandard) &&
                            !empty($student_acc->first()->region) &&
                            !empty($student_acc->first()->schoolname) &&
                            $student_acc->first()->verify_person_id != 0
                            )
                            {
                                  $type = 'display:none';
                                  #display anoter account if exists

                            
                            }else{

                              if ($student_acc->first()->schoolname == Null){
                                # code...
                                $st_HigherEdname    =   "<input type='text' name = 'Schoolname' placeholder='Your Unversity/collage/institute name'>";
                                $st_O_ASchoolname   =   "<input type='text' name = 'Schoolname' placeholder='Your Secondary/Primary name'>";
                              }

                              if($student_acc->first()->region == Null){
                                $st_region = '<div class="Level Mkoa">
                                              <label for="SECTION">Mkoa</label>
                                              <select id="SECTION" > 
                                                  <option selected="selected">Dar-es-Salaam</option>
                                                  <option>Mbeya</option>
                                                  <option>Iringa</option>
                                                  <option>Arusha</option>
                                                  <option>Morogoro</option>
                                                  <option>Moshi</option>
                                                  <option>Dodoma</option>
                                              </select>
                                      </div>';
                              } 

                              if($student_acc->first()->levelOrStandard == Null){
                                    $st_HigherEd_levelOrStandard = '<div class="Level Mkoa">
                                                    <label for="SECTION">Level</label>
                                                    <select id="SECTION"> 
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
                                              </div>';

                          $st_O_AlevelOrStandard  ='<div class="Level Section">
                                                      <label for="SECTION">Level</label>
                                                      <select id="SECTION"> 
                                                          <option selected="selected">Form 1</option>
                                                          <option>Form 2</option>
                                                          <option >Form 3</option>
                                                          <option >Form 4</option>
                                                          <option >Form 5</option>
                                                          <option >Form 6</option>
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
                                                 </div>';
                              }

                              if($student_acc->first()->facultOrComb_taken == Null){
                                    $st_facultOrComb = '<input type="text" name = "courseName" placeholder="Course Name">';

                                      $st_Comb  ='<div id = "SubjectCombination" class="Combination Section">
                                                <label for="SECTION">Combination</label>
                                                <select id="SECTION"> 
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
                                         </div>';
                              }

                              if($student_acc->first()->verify_person_id == 0){
                                    $st_verifyperson_id= '<div class = "profpanel">
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
                                                </div>';
                              }

                              }

                        }else{
                          $insert_idAcc= $student_acc->insert('student_acc', array('user_id' => $user_id));
                              $student_acc = $db->query("SELECT * FROM student_acc WHERE user_id = ?" ,array($user_id));
                                if ($student_acc->first()->schoolname == Null){
                                # code...
                                $st_HigherEdname    =   "<input type='text' name = 'Schoolname' placeholder='Your Unversity/collage/institute name'>";
                                $st_O_ASchoolname   =   "<input type='text' name = 'Schoolname' placeholder='Your Secondary/Primary name'>";
                              }

                              if($student_acc->first()->region == Null){
                                $st_region = '<div class="Level Mkoa">
                                              <label for="SECTION">Mkoa</label>
                                              <select id="SECTION" > 
                                                  <option selected="selected">Dar-es-Salaam</option>
                                                  <option>Mbeya</option>
                                                  <option>Iringa</option>
                                                  <option>Arusha</option>
                                                  <option>Morogoro</option>
                                                  <option>Moshi</option>
                                                  <option>Dodoma</option>
                                              </select>
                                      </div>';
                              } 

                              if($student_acc->first()->levelOrStandard == Null){
                                    $st_HigherEd_levelOrStandard = '<div class="Level Mkoa">
                                                    <label for="SECTION">Level</label>
                                                    <select id="SECTION"> 
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
                                              </div>';

                          $st_O_AlevelOrStandard  ='<div class="Level Section">
                                                      <label for="SECTION">Level</label>
                                                      <select id="SECTION"> 
                                                          <option selected="selected">Form 1</option>
                                                          <option>Form 2</option>
                                                          <option >Form 3</option>
                                                          <option >Form 4</option>
                                                          <option >Form 5</option>
                                                          <option >Form 6</option>
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
                                                 </div>';
                              }

                              if($student_acc->first()->facultOrComb_taken == Null){
                                    $st_facultOrComb = '<input type="text" name = "courseName" placeholder="Course Name">';

                                      $st_Comb  ='<div id = "SubjectCombination" class="Combination Section">
                                                <label for="SECTION">Combination</label>
                                                <select id="SECTION"> 
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
                                         </div>';
                              }

                              if($student_acc->first()->verify_person_id == 0){
                                    $st_verifyperson_id= '<div class = "profpanel">
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
                                                </div>';
                              }
                        }


                        $info_first    .=  $st_HigherEdname.$st_region  ;
                        $info_first_B  .=  $st_O_ASchoolname .$st_region;
                        $info_sec      .=  $st_facultOrComb.$st_HigherEd_levelOrStandard ;
                        $info_sec_B    .=  $st_O_AlevelOrStandard . $st_Comb ;
                        $info_third    .=  $st_verifyperson_id ;
                        $info_display  .=  $type; 
                }









$acc = $db->query('SELECT * FROM vy_users WHERE id =?',array($user_id));


 if($acc->first()->student_acc == 1){
   $acc = $db->get('student_acc',array('user_id', '=' ,$user_id));
   if($acc->count()){
    echo "present";
   }else{
    echo "Not present";
   }
 }else if($acc->first()->parent_acc == 1){
  
 }




 echo  <div class = "fillAcount">
        <div class = "xoverflow">
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
          </div>
        </div>  












special Code registration

