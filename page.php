<?php  


require_once 'Core/Init.php';

$user = new User();
$db = DB::getInstance();
if ($user->isLoggedIn()) {
  # code...
  // echo 'logged In';
  $username = escape($user->data()->username);
  $user_id = escape($user->data()->id);

  /////////////////////////////////////////////////////////////////////////////////////
  ///>>>>>>>>>>>>>> MainCount Check
    $checkMainTable = $db->query("SELECT Main_account,student_acc,parent_acc,enterprenuer_acc,teacher_acc FROM vy_users  WHERE id =?", array($user_id));

    $checkMainTable->first()->Main_account;


    $student = '<div class ="MainCount std_acc">
                  <input type="radio" name = "acc" value = "student_acc" id = "student_ac"><span>Student Account</span>
                  </div>';

    $parent = '<div class ="MainCount par_acc">
                 <input type="radio" name = "acc" value = "p_acc" id = "p_ac"><span>Parent Account</span>
                 </div>';

    $Enter  = '<div class ="MainCount std_acc">
                 <input type="radio" name = "acc" value = "enterpr_acc" id = "enterpr_ac"><span>Enterprenuer Account</span>
                 </div>';
    $Teacher = '<div class ="MainCount std_acc">
                 <input type="radio" name = "acc" value = "teacher_acc" id = "teacher_ac" onclick = "" ><span>Teacher Account</span>
                 </div>';
          
    $stAcc = ($checkMainTable->first()->student_acc == 1)      ?  $student  : '' ;
    $paAcc = ($checkMainTable->first()->parent_acc == 1)       ?  $parent   : '' ;
    $enAcc = ($checkMainTable->first()->enterprenuer_acc == 1) ?  $Enter    : '' ;
    $tcAcc = ($checkMainTable->first()->teacher_acc == 1)      ?  $Teacher  : '' ;

    //>>>>>>>>>>>>>>>>>>>>>>>>>IF MAINCOUNT FOUND >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>//
      if($checkMainTable->first()->Main_account == NULL){
          # code...
          echo '<div id = "uploadprofile_cover" class = "ChooseAcc donation">
                <div class = "absoluteWraper uploadWraper">
                      <div id = "close" onclick = \'closeDiv("uploadprofile_cover");\'>
                          <i class = "fa fa-close"></i>
                      </div>

                      <div class = "absoluteBody uploadBody">
                        <h3>CHOOSE YOUR MAIN ACCOUNT</h3>
                         <div class = "donate">
                            <div class = "uploadform">
                              <div id = "resultAcc"></div>
                                <br/>
                                '.$stAcc.$paAcc.$enAcc.$tcAcc.'<br/>
                                <div class= "MainCount acc_submit" >
                                    <input type="submit" name = "submitee" onclick =\'radioSystem("acc","chooseMainAcc","uploadprofile_cover")\'>
                                     </div>
                            </div>
                      </div>
                         
                      </div>
                </div>
              </div>';
      }          
    //>>>>>>>>>>>>>>>>>>>>>>>>> ACCOUNT FOUND student Account >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>//
      if($checkMainTable->first()->student_acc == 1){
        $checksubject = $db->get('student_acc',array('user_id','=',$user_id))  ;
        if($checksubject->count() > 0){
        $subjects       =  $checksubject->first()->subjects;
        $comb           =  $checksubject->first()->facultOrComb_taken;
        $darasa         =  $checksubject->first()->levelOrStandard; 
        $level_identify =  $checksubject->first()->level_identify;
        //>>>>>>>>>>>>>>>>>>>>>>>>>CHECK SUBJECT TABLE >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>//
          if ($subjects == "" ){

            //*******************UNVESRSITY || COLLAGE || INSTITUTE*****************//
              if($level_identify == 'h') {
                # Facult for Unversity OR Collage OR Institute
               
                $l = $levelOrStandard ;
                if($comb == 'Computer Sceince'){
                  // $q = $subjectx;
                }
              }
            //*******************UNVESRSITY || COLLAGE || INSTITUTE*****************//

            //*************************A LEVEL AND O LEVEL*****************//
              if( $level_identify == 'a' || $level_identify == 'o'){
                # Secondary 

                if($darasa == 'Form 6'){
                  # code.
                  $l = 6;
                  
                  if($comb == 'PCB'){
                    $q = 'physics,chemistry,biology';
                    $sub = explode(',' ,$q);
                  }

                  if($comb == 'PCM'){
                    $q = 'physics,chemistry,mathematics';
                    $sub = explode(',' ,$q);
                  }
                 
                  if($comb == 'PGM'){
                    $q = 'physics,geography,mathematics';
                    $sub = explode(',' ,$q);
                  }

                  if($comb == 'EGM'){
                    $q = 'economics,geography,mathematics';
                    $sub = explode(',' ,$q);
                  }

                  if($comb == 'ECA'){
                    $q = 'economics,commerce,accounts';
                    $sub = explode(',' ,$q);
                  }

                  if($comb == 'CBG'){
                    $q = 'chemistry,biology,geography';
                    $sub = explode(',' ,$q);
                  }

                  if($comb == 'CBN'){
                    $q = 'chemistry,biology,nutrition';
                    $sub = explode(',' ,$q);
                  }

                  if($comb == 'HGE'){
                    $q = 'history,geography,economics';
                    $sub = explode(',' ,$q);
                  }
                  
                  if($comb == 'HGL'){
                    $q = 'history,geography,literature';
                    $sub = explode(',' ,$q);
                  }

                  if($comb == 'HKL'){
                    $q = 'history,kiswahili,literature';
                    $sub = explode(',' ,$q);
                  }

                  if($comb == 'KLF'){
                    $q = 'kiswahili,literature,french';
                    $sub = explode(',' ,$q);
                  }
                }

                if($darasa == 'Form 5'){
                  # code.
                  $l = 5;
                  
                  if($comb == 'PCB'){
                    $q = 'physics,chemistry,biology';
                    $sub = explode(',' ,$q);
                  }

                  if($comb == 'PCM'){
                    $q = 'physics,chemistry,mathematics';
                    $sub = explode(',' ,$q);
                  }
                 
                  if($comb == 'PGM'){
                    $q = 'physics,geography,mathematics';
                    $sub = explode(',' ,$q);
                  }

                  if($comb == 'EGM'){
                    $q = 'economics,geography,mathematics';
                    $sub = explode(',' ,$q);
                  }

                  if($comb == 'ECA'){
                    $q = 'economics,commerce,accounts';
                    $sub = explode(',' ,$q);
                  }

                  if($comb == 'CBG'){
                    $q = 'chemistry,biology,geography';
                    $sub = explode(',' ,$q);
                  }

                  if($comb == 'CBN'){
                    $q = 'chemistry,biology,nutrition';
                    $sub = explode(',' ,$q);
                  }

                  if($comb == 'HGE'){
                    $q = 'history,geography,economics';
                    $sub = explode(',' ,$q);
                  }
                  
                  if($comb == 'HGL'){
                    $q = 'history,geography,literature';
                    $sub = explode(',' ,$q);
                  }

                  if($comb == 'HKL'){
                    $q = 'history,kiswahili,literature';
                    $sub = explode(',' ,$q);
                  }

                  if($comb == 'KLF'){
                    $q = 'kiswahili,literature,french';
                    $sub = explode(',' ,$q);
                  }
                }

                if($darasa == 'Form 4'){
                  # code.
                  $l = 4;
                  
                  if($comb == 'PCB'){
                    $q = 'physics,chemistry,biology';
                    $sub = explode(',' ,$q);
                  }

                  if($comb == 'PCM'){
                    $q = 'physics,chemistry,mathematics';
                    $sub = explode(',' ,$q);
                  }
                 
                  if($comb == 'PGM'){
                    $q = 'physics,geography,mathematics';
                    $sub = explode(',' ,$q);
                  }

                  if($comb == 'EGM'){
                    $q = 'economics,geography,mathematics';
                    $sub = explode(',' ,$q);
                  }

                  if($comb == 'ECA'){
                    $q = 'economics,commerce,accounts';
                    $sub = explode(',' ,$q);
                  }

                  if($comb == 'CBG'){
                    $q = 'chemistry,biology,geography';
                    $sub = explode(',' ,$q);
                  }

                  if($comb == 'CBN'){
                    $q = 'chemistry,biology,nutrition';
                    $sub = explode(',' ,$q);
                  }

                  if($comb == 'HGE'){
                    $q = 'history,geography,economics';
                    $sub = explode(',' ,$q);
                  }
                  
                  if($comb == 'HGL'){
                    $q = 'history,geography,literature';
                    $sub = explode(',' ,$q);
                  }

                  if($comb == 'HKL'){
                    $q = 'history,kiswahili,literature';
                    $sub = explode(',' ,$q);
                  }

                  if($comb == 'KLF'){
                    $q = 'kiswahili,literature,french';
                    $sub = explode(',' ,$q);
                  }
                }

                if($darasa == 'Form 3'){
                  # code.
                  $l = 3;
                  
                  if($comb == 'PCB'){
                    $q = 'physics,chemistry,biology';
                    $sub = explode(',' ,$q);
                  }

                  if($comb == 'PCM'){
                    $q = 'physics,chemistry,mathematics';
                    $sub = explode(',' ,$q);
                  }
                 
                  if($comb == 'PGM'){
                    $q = 'physics,geography,mathematics';
                    $sub = explode(',' ,$q);
                  }

                  if($comb == 'EGM'){
                    $q = 'economics,geography,mathematics';
                    $sub = explode(',' ,$q);
                  }

                  if($comb == 'ECA'){
                    $q = 'economics,commerce,accounts';
                    $sub = explode(',' ,$q);
                  }

                  if($comb == 'CBG'){
                    $q = 'chemistry,biology,geography';
                    $sub = explode(',' ,$q);
                  }

                  if($comb == 'CBN'){
                    $q = 'chemistry,biology,nutrition';
                    $sub = explode(',' ,$q);
                  }

                  if($comb == 'HGE'){
                    $q = 'history,geography,economics';
                    $sub = explode(',' ,$q);
                  }
                  
                  if($comb == 'HGL'){
                    $q = 'history,geography,literature';
                    $sub = explode(',' ,$q);
                  }

                  if($comb == 'HKL'){
                    $q = 'history,kiswahili,literature';
                    $sub = explode(',' ,$q);
                  }

                  if($comb == 'KLF'){
                    $q = 'kiswahili,literature,french';
                    $sub = explode(',' ,$q);
                  }
                }

                if($darasa == 'Form 2'){
                  # code.
                  $l = 2;   
                    $q = 'civics,history,geography,kiswahili,english,literature,chinise,french,mathematics,physics,chemistry,biology,Bookkeeping,Commerce,accounts';
                    $sub = explode(',' ,$q);
                }

                if($darasa == 'Form 1'){
                  # code.
                  $l = 1;   
                    $q = 'civics,history,geography,kiswahili,english,literature,chinise,french,mathematics,physics,chemistry,biology,Bookkeeping,Commerce,accounts';
                    $sub = explode(',' ,$q);
                }
              }
            //*************************A LEVEL AND O LEVEL*****************//
            

            //************************* PRIMARY*****************//
              if($level_identify == 'p'){
                # code....
                // echo 'Primary';
                 $q = '
                  kiswahili,
                  english,
                  sayansi,
                  maarifa ya jamii,
                  hisabati';
                  $sub = explode(',' ,$q);

              }
            //************************* PRIMARY*****************//

            //*********************** SUBJECT CONVERSION TO ID INSERT*******************************//
              $value = "";

              if(count(@$sub) > 0){

                foreach ($sub as $k => $subject_value){
                  # code...

                  $checkSubjects = $db->query("SELECT id FROM vy_subjects WHERE suubject_name =? AND  level =?", array($subject_value,$l));
                  @$subject_id = $checksubject->first()->id.',';
                
                  $value .= $subject_id;
                }

                $sql = "UPDATE student_acc SET subjects = ? WHERE user_id = ?";
                $updatesubjectId = $db->query($sql,array($value ,$user_id));
                
                if(!$updatesubjectId){
                  echo "System Error.. Subject id Sender Function";
                }
              }
            //*********************** END :SUBJECT CONVERSION TO ID INSERT**************************//
          }
        //>>>>>>>>>>>>>>>>>>>>>>>>>END: CHECK SUBJECT TABLE >>>>>>>>>>>>>>>>>>>>>>>>>>//
        }
      }
    //>>>>>>>>>>>>>>>>>>>>>>>>>END: IF MAINCOUNT FOUND >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>//

  $checkMainTableteach = $db->query("SELECT Main_account,student_acc,parent_acc,enterprenuer_acc,teacher_acc FROM vy_users  WHERE id =?", array($user_id));

    //>>>>>>>>>>>>>>>>>>>>>>>>> ACCOUNT FOUND teacher Account >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>//
      if($checkMainTableteach->first()->teacher_acc == 1){
        $checksubject = $db->get('teacher_acc',array('user_id','=',$user_id))  ;
        if($checksubject->count() > 0){
        $subjects       =  $checksubject->first()->subjects;
        $comb           =  $checksubject->first()->facultOrComb_taken;
        $darasa         =  $checksubject->first()->levelOrStandard; 
        $level_identify =  $checksubject->first()->level_identify;
        $prof_subj_1 =  $checksubject->first()->prof_subject_1;
        $prof_subj_2 =  $checksubject->first()->prof_subject_2;
        //>>>>>>>>>>>>>>>>>>>>>>>>>CHECK SUBJECT TABLE >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>//
          if ($subjects == "" ){

            //*******************UNVESRSITY || COLLAGE || INSTITUTE*****************//
              if($level_identify == 'h') {
                # Facult for Unversity OR Collage OR Institute
               
                $l = $levelOrStandard ;
                if($comb == 'Computer Sceince'){
                   $q = $subjectx;
                }
              }
            //*******************UNVESRSITY || COLLAGE || INSTITUTE*****************//

            //*************************A LEVEL AND O LEVEL*****************//
              if( $level_identify == 'a' || $level_identify == 'o'){
                # Secondary 

                if($darasa == 'Form 6'){
                  # code.
                  $l = 6;
                  
                  if($comb == 'PCB'){
                    $q = 'physics,chemistry,biology';
                    $sub = explode(',' ,$q);
                  }

                  if($comb == 'PCM'){
                    $q = 'physics,chemistry,mathematics';
                    $sub = explode(',' ,$q);
                  }
                 
                  if($comb == 'PGM'){
                    $q = 'physics,geography,mathematics';
                    $sub = explode(',' ,$q);
                  }

                  if($comb == 'EGM'){
                    $q = 'economics,geography,mathematics';
                    $sub = explode(',' ,$q);
                  }

                  if($comb == 'ECA'){
                    $q = 'economics,commerce,accounts';
                    $sub = explode(',' ,$q);
                  }

                  if($comb == 'CBG'){
                    $q = 'chemistry,biology,geography';
                    $sub = explode(',' ,$q);
                  }

                  if($comb == 'CBN'){
                    $q = 'chemistry,biology,nutrition';
                    $sub = explode(',' ,$q);
                  }

                  if($comb == 'HGE'){
                    $q = 'history,geography,economics';
                    $sub = explode(',' ,$q);
                  }
                  
                  if($comb == 'HGL'){
                    $q = 'history,geography,literature';
                    $sub = explode(',' ,$q);
                  }

                  if($comb == 'HKL'){
                    $q = 'history,kiswahili,literature';
                    $sub = explode(',' ,$q);
                  }

                  if($comb == 'KLF'){
                    $q = 'kiswahili,literature,french';
                    $sub = explode(',' ,$q);
                  }
                }

                if($darasa == 'Form 5'){
                  # code.
                  $l = 5;
                  
                  if($comb == 'PCB'){
                    $q = 'physics,chemistry,biology';
                    $sub = explode(',' ,$q);
                  }

                  if($comb == 'PCM'){
                    $q = 'physics,chemistry,mathematics';
                    $sub = explode(',' ,$q);
                  }
                 
                  if($comb == 'PGM'){
                    $q = 'physics,geography,mathematics';
                    $sub = explode(',' ,$q);
                  }

                  if($comb == 'EGM'){
                    $q = 'economics,geography,mathematics';
                    $sub = explode(',' ,$q);
                  }

                  if($comb == 'ECA'){
                    $q = 'economics,commerce,accounts';
                    $sub = explode(',' ,$q);
                  }

                  if($comb == 'CBG'){
                    $q = 'chemistry,biology,geography';
                    $sub = explode(',' ,$q);
                  }

                  if($comb == 'CBN'){
                    $q = 'chemistry,biology,nutrition';
                    $sub = explode(',' ,$q);
                  }

                  if($comb == 'HGE'){
                    $q = 'history,geography,economics';
                    $sub = explode(',' ,$q);
                  }
                  
                  if($comb == 'HGL'){
                    $q = 'history,geography,literature';
                    $sub = explode(',' ,$q);
                  }

                  if($comb == 'HKL'){
                    $q = 'history,kiswahili,literature';
                    $sub = explode(',' ,$q);
                  }

                  if($comb == 'KLF'){
                    $q = 'kiswahili,literature,french';
                    $sub = explode(',' ,$q);
                  }
                }

                if($darasa == 'Form 4'){
                  # code.
                  $l = 4;
                  
                  if($comb == 'PCB'){
                    $q = 'physics,chemistry,biology';
                    $sub = explode(',' ,$q);
                  }

                  if($comb == 'PCM'){
                    $q = 'physics,chemistry,mathematics';
                    $sub = explode(',' ,$q);
                  }
                 
                  if($comb == 'PGM'){
                    $q = 'physics,geography,mathematics';
                    $sub = explode(',' ,$q);
                  }

                  if($comb == 'EGM'){
                    $q = 'economics,geography,mathematics';
                    $sub = explode(',' ,$q);
                  }

                  if($comb == 'ECA'){
                    $q = 'economics,commerce,accounts';
                    $sub = explode(',' ,$q);
                  }

                  if($comb == 'CBG'){
                    $q = 'chemistry,biology,geography';
                    $sub = explode(',' ,$q);
                  }

                  if($comb == 'CBN'){
                    $q = 'chemistry,biology,nutrition';
                    $sub = explode(',' ,$q);
                  }

                  if($comb == 'HGE'){
                    $q = 'history,geography,economics';
                    $sub = explode(',' ,$q);
                  }
                  
                  if($comb == 'HGL'){
                    $q = 'history,geography,literature';
                    $sub = explode(',' ,$q);
                  }

                  if($comb == 'HKL'){
                    $q = 'history,kiswahili,literature';
                    $sub = explode(',' ,$q);
                  }

                  if($comb == 'KLF'){
                    $q = 'kiswahili,literature,french';
                    $sub = explode(',' ,$q);
                  }
                }

                if($darasa == 'Form 3'){
                  # code.
                  $l = 3;
                  
                  if($comb == 'PCB'){
                    $q = 'physics,chemistry,biology';
                    $sub = explode(',' ,$q);
                  }

                  if($comb == 'PCM'){
                    $q = 'physics,chemistry,mathematics';
                    $sub = explode(',' ,$q);
                  }
                 
                  if($comb == 'PGM'){
                    $q = 'physics,geography,mathematics';
                    $sub = explode(',' ,$q);
                  }

                  if($comb == 'EGM'){
                    $q = 'economics,geography,mathematics';
                    $sub = explode(',' ,$q);
                  }

                  if($comb == 'ECA'){
                    $q = 'economics,commerce,accounts';
                    $sub = explode(',' ,$q);
                  }

                  if($comb == 'CBG'){
                    $q = 'chemistry,biology,geography';
                    $sub = explode(',' ,$q);
                  }

                  if($comb == 'CBN'){
                    $q = 'chemistry,biology,nutrition';
                    $sub = explode(',' ,$q);
                  }

                  if($comb == 'HGE'){
                    $q = 'history,geography,economics';
                    $sub = explode(',' ,$q);
                  }
                  
                  if($comb == 'HGL'){
                    $q = 'history,geography,literature';
                    $sub = explode(',' ,$q);
                  }

                  if($comb == 'HKL'){
                    $q = 'history,kiswahili,literature';
                    $sub = explode(',' ,$q);
                  }

                  if($comb == 'KLF'){
                    $q = 'kiswahili,literature,french';
                    $sub = explode(',' ,$q);
                  }
                }

                if($darasa == 'Form 2'){
                  # code.
                  $l = 2;   
                    $q = $prof_subj_1.','.$prof_subj_2;
                    $sub = explode(',' ,$q);
                }

                if($darasa == 'Form 1'){
                  # code.
                  $l = 1;   
                    echo $prof_subj_1;
                    echo $prof_subj_2;
                    $q = $prof_subj_1 .','. $prof_subj_2;
                    $sub = explode(',' ,$q);
                }
              }
            //*************************A LEVEL AND O LEVEL*****************//
            

            //************************* PRIMARY*****************//
              if($level_identify == 'p'){
                # code....
                // echo 'Primary';
                $q = $prof_subj_1.','.$prof_subj_2;
                  $sub = explode(',' ,$q);
              }
            //************************* PRIMARY*****************//

            //*********************** SUBJECT CONVERSION TO ID INSERT*******************************//
              $value = "";

              if(count(@$sub) > 0){
                // print_r($sub);
                foreach ($sub as $k => $subject_value){
                  # code...
                  //echo $subject_value;
                  $checkSubjects = $db->query("SELECT id FROM vy_subjects WHERE suubject_name =? AND  level =?", array($subject_value,$l));
                  @$subject_id = $checksubject->first()->id.',';
                
                  $value .= $subject_id;
                }

                $sql = "UPDATE teacher_acc SET subjects = ? WHERE user_id = ?";
                $updatesubjectId = $db->query($sql,array($value ,$user_id));
                
                if(!$updatesubjectId){
                  echo "System Error.. Subject id Sender Function";
                }
              }
            //*********************** END :SUBJECT CONVERSION TO ID INSERT**************************//
          }
        //>>>>>>>>>>>>>>>>>>>>>>>>>END: CHECK SUBJECT TABLE >>>>>>>>>>>>>>>>>>>>>>>>>>//
        }
      }
    //>>>>>>>>>>>>>>>>>>>>>>>>>END: IF MAINCOUNT FOUND >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>//
  


  ///>>>>>>>>>>>>>> END MainCount Check
  /////////////////////////////////////////////////////////////////////////////////////
?>

<?php include 'include/skeletonTop.php'; ?>
   
<div id = 'Pagewraper'>
  <?php include 'include/sidenavigation.php'; ?>
  <div id = 'side_two' >
      <!--/***********header after login*********/-->
      <!--/***********header after login*********/-->
      <?php include 'include/topheader.php'; ?>

      <div id='mainWraper'>

          <div class='section'>
              <?php include "include/profnav.php"; ?>
              <?php $frompage = 1; //  from page  ?>
              <?php include "include/chats.php"; ?>
          </div>

          <?php include 'include/infoSection.php'; ?>
      </div>

  </div>
    </div>
    
</div>

 <?php include 'include/positonAbsolute.php'; ?>
<?php include 'include/skelotonBottom_login.php'; ?>

<?php
   }else{
       echo '<p>You need <a href = "login.php">Login</a> or <a href = "registration.php">Register</a></p>';
}
?>
