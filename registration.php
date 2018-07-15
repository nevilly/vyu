<?php 
 require_once 'core/init.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Skonga life.com</title>
        <link rel="stylesheet" type="text/css" href="style/registrationstyle.css"/>
         <link rel="stylesheet" type="text/css" href="style/style.css"/> 
    </head>
<body>
            
           
<div class = "login_reg">
<p class="Regmsg">
  <?php 
    
     // var_dump(Token::check(Input::get('token')));

    if(Input::exists()){
        if(Token::check(Input::get('token'))){
           // echo "i run (CrossForgary Not work Am Safe)<br/>";
           // echo Input::get('fullname'); //show input
           $validate = new validate();

        
            $validation = $validate->check($_POST,array(
                //validation rule zako tutoria ya 11
                'fullname' => array(
                   'required' => true,
                   'min' => 2,
                   'max' => 50
                ),
                'username' => array(
                   'required' => true,
                   'min' => 2,
                   'max' => 20,
                   'unique' => 'vy_users'    
                ),
                'password' => array(
                    'required' => true,
                   'min' => 6
                   
                ),
                'password_again' => array(
                    'required' => true,
                   'matches' => 'password'
                ),
                
                'phoneNo' => array(
                    'required' => true,
                   'min' => 5
                ),

               // Unversity or collage info

                'Unversity_or_Collage_name' => array(
                   'min' => 2,
                   'max' => 50
                ),


                // 'select_Mkoa_unversity' => array(
                   
                //    'max' => 50
                // ),


                // 'unversity_level' => array(
                //    'min' => 2,
                //    'max' => 50
                // ),
              
              
                'Course_Name_unversit' => array(
                   'min' => 2,
                   'max' => 50
                ),

                // Unversity or collage info


                // Kindgarten or Primary or Sec info

                'Secondary_primary_shool' => array(
                   'min' => 2,
                   'max' => 50
                ),


                // 'region_of_primary_school' => array(
                //    'min' => 2,
                //    'max' => 50
                // ),
                      

                // 'standard_form_level' => array(
                //    'min' => 2,
                //    'max' => 50
                // ),
              
              
                // 'school_combination' => array(
                //    'min' => 2,
                //    'max' => 50
                // ),


                // Teacher account info
                'Unversity_or_Collage_name_you_lecture' => array(
                   'min' => 2,
                   'max' => 50
                ),


                // 'select_Mkoa_unversity_lecture' => array(
                //    'min' => 2,
                //    'max' => 50
                // ),
                      

                // 'standard_form_level' => array(
                //    'min' => 2,
                //    'max' => 50
                // ),
              
              
                // 'school_combination' => array(
                //    'min' => 2,
                //    'max' => 50
                // ),

                'Main_busness' => array(
                   'min' => 2,
                   'max' => 50
                ),

                 'Other_busness' => array(
                   'min' => 2,
                   'max' => 50
                ),

                 'mkoa_busness' => array(
                   'min' => 2,
                   'max' => 50
                )


                
            ));
            
            if($validation->passed()){
                //register user
                // Session::flash('sucess','Your Register succefuly');
                // header('Location:inde.php');
                // echo "passed";
                   
                // check Account Choosen
                  
                if(Input::get('Teacher')){
                    $studentLevel = escape(Input::get('Teacher'));
                }

                 if(Input::get('Parent')){
                    $parent = escape(Input::get('Parent'));
                 
                }
              
                

                if(Input::get('Enterprenuar')){
                    $Enterprenuar = escape(Input::get('Enterprenuar'));
                }

                if(Input::get('studentLevel')){
                    $Teacher = escape(Input::get('Teacher'));
                }
         

                if(Input::get('Un_verify')){
                     $Un_verify = escape(Input::get('Un_verify'));
                   
                }
                if(Input::get('school_verify')){
                     $school_verify = escape(Input::get('school_verify'));
                   
                }
         

                 

                 // echo Input::get('Schoolname_lecture');
                 // echo Input::get('selected_Mkoa_lect');
                 $user = new User();
                 $salt = Hash::salt(32);
                 

                 
                try{
                  //>>>>>>>>>>>>>>>>>>>>> CASUAL REGISTRATION IF all Acc are Empty >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>//
                    if (empty(Input::get('Teacher')) && 
                        empty(Input::get('Parent')) && 
                        empty(Input::get('Enterprenuar')) && 
                        empty(Input::get('studentLevel')))
                    {
                        # Casual Or Noral Account
                        $user->create(array(
                        'username'         =>  Input::get('username'),
                        'fullname'         =>  Input::get('fullname'),
                        'password'         =>  Hash::make(Input::get('password'),$salt),
                        'student_acc'      =>  escape(Input::get('studentLevel')),
                        'parent_acc'       =>  escape(Input::get('Parent')),
                        'Enterprenuer_acc' =>  escape(Input::get('Enterprenuar')),
                        'teacher_acc'      =>  escape(Input::get('Teacher')),
                        'salt'             =>  $salt,
                        'grouped'          =>  1
                        ));
                    }
                  //>>>>>>>>>>>>>>>>>>>>>END: CASUAL REGISTRATION IF all Acc are Empty >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>//
                  
                  //>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> PARENT ACC REGISTRATION >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>//
                    if(!empty(Input::get('Parent'))){
                        if (!empty(Input::get('Full_student_name')) && !empty(Input::get('fullname_of_your_son_doughter')) ) {
                            #choose One Account
                            echo "Choose One Acount Either Secondary Or Unversity...";
                        }else{
                            
                            if(!empty(Input::get('unversity_collage_name')) && !empty(Input::get('username_of_student')) ){
                                #parent
                                
                                
                                $user_exist = $user->Myfind('vy_users',Input::get('username'));
                               
                                if($user_exist){
                                  #user exits
                                  $user->create_p(array(
                                   'user_id'=> $user->idreturn(Input::get('username')),
                                   'st_uname' => Input::get('username_of_student'),
                                   'st_fname' => Input::get('Full_student_name'),
                                   'schoolname' => Input::get('unversity_collage_name'),
                                   'region' => Input::get('select_Mkoa_unversity'),
                                   'levelOrStandard' => Input::get('student_course_level'),
                                   'facultOrComb_taken' => Input::get('student_coursename'),
                                   'level_identify' =>  'h'  //unversity/collage/institute
                                  ));

                                
                                
                                  if(Input::get('p_verify')){
                                    $p_verify = escape(Input::get('p_verify'));
                                        $user->create_r(array(
                                         'user_id'=> $user->idreturn(Input::get('username')),
                                         'recv_id' =>  escape($p_verify),
                                         'state' => 'v'
                                    ));
                                  }
                                }else{
                                   
                                    # user hayup ndani database....
                                    $user->create(array(
                                        'username'         =>  Input::get('username'),
                                        'fullname'         =>  Input::get('fullname'),
                                        'password'         =>  Hash::make(Input::get('password'),$salt),
                                        'student_acc'      =>  escape(Input::get('studentLevel')),
                                        'parent_acc'       =>  escape(Input::get('Parent')),
                                        'Enterprenuer_acc' =>  escape(Input::get('Enterprenuar')),
                                        'teacher_acc'      =>  escape(Input::get('Teacher')),
                                        'salt'             =>  $salt,
                                        'grouped'          =>  1
                                    ));
                    
                                      
                                    $user->create_p(array(
                                       'user_id'=> $user->idreturn(Input::get('username')),
                                       'st_uname' => Input::get('username_of_student'),
                                       'st_fname' => Input::get('Full_student_name'),
                                       'schoolname' => Input::get('unversity_collage_name'),
                                       'region' => Input::get('select_Mkoa_unversity'),
                                       'levelOrStandard' => Input::get('student_course_level'),
                                       'facultOrComb_taken' => Input::get('student_coursename'),
                                       'level_identify' =>  'h'  //unversity/collage/institute
                                    ));

                                    
                                    if(Input::get('p_verify')){
                                         $p_verify = escape(Input::get('p_verify'));
                                          $user->create_r(array(
                                           'user_id'=> $user->idreturn(Input::get('username')),
                                           'recv_id' =>  escape($p_verify),
                                           'state' => 'v'
                                        ));
                                    }

                                }
                            }


                            if(!empty(Input::get('fullname_of_your_son_doughter')) && !empty(Input::get('username_your_son_doughter'))){
                                #SEC/PRE SCHOOL TEACHER
                                  

                                $user_exist = $user->Myfind('vy_users', Input::get('username'));
                               
                                if($user_exist){
                                  $level =  '';
                                  if($a =  Input::get('student_Level')){
                 
                                    if (strpos($a, 'KindGarten') !== false){
                                            $level =  'k';
                                        }

                                        if (strpos($a, 'Standard') !== false){
                                            $level =  'p';
                                        }

                                        if (strpos($a, 'Pre Form 1') !== false){
                                            $level =  '';
                                        }

                                        if (strpos($a, 'Form 1') !== false){
                                            $level =  'o';
                                        }
                                        if (strpos($a, 'Form 2') !== false){
                                            $level =  'o';
                                        }
                                        if (strpos($a, 'Form 3') !== false){
                                            $level =  'o';
                                        }
                                        if (strpos($a, 'Form 4') !== false){
                                            $level =  'o';
                                        }

                                        if (strpos($a, 'Form 5') !== false){
                                            $level =  'a';
                                        }

                                        if (strpos($a, 'Form 6') !== false){
                                            $level =  'a';
                                        }
                                        
                                        if (strpos($a, 'QT') !== false){
                                            $level =  'q';
                                        }
                                        
                                        if (strpos($a, 'Reciters') !== false){
                                            $level =  'r';
                                        }
                                    }
                                    

                                    $user->create_p(array(
                                       'user_id'=> $user->idreturn(Input::get('username')),
                                       'st_uname' => Input::get('username_your_son_doughter'),
                                       'st_fname' => Input::get('fullname_of_your_son_doughter'),
                                       'schoolname' => Input::get('Secondary_primary_schoolname'),
                                       'region' => Input::get('Secondary_primary_region'),
                                       'levelOrStandard' => Input::get('student_Level'),
                                       'mkondo' => Input::get('student_Level_mkondo'),
                                       'facultOrComb_taken' => Input::get('student_combination'),
                                        'level_identify' =>  $level   
                                    ));


                                    if(Input::get('p_pr_st_verify')){
                                         $p_pr_st_verify = escape(Input::get('p_pr_st_verify'));
                                          $user->create_r(array(
                                           'user_id'=> $user->idreturn(Input::get('username')),
                                           'recv_id' =>  escape($p_pr_st_verify),
                                           'state' => 'v'
                                        ));
                                    }

                                }else{
                                    $user->create(array(
                                        'username'         =>  Input::get('username'),
                                        'fullname'         =>  Input::get('fullname'),
                                        'password'         =>  Hash::make(Input::get('password'),$salt),
                                        'student_acc'      =>  escape(Input::get('studentLevel')),
                                        'parent_acc'       =>  escape(Input::get('Parent')),
                                        'Enterprenuer_acc' =>  escape(Input::get('Enterprenuar')),
                                        'teacher_acc'      =>  escape(Input::get('Teacher')),
                                        'salt'             =>  $salt,
                                        'grouped'          =>  1
                                    ));

                                   $level =  '';
                                   if($a =  Input::get('student_Level')){
                     
                                        if (strpos($a, 'KindGarten') !== false){
                                                $level =  'k';
                                            }

                                            if (strpos($a, 'Standard') !== false){
                                                $level =  'p';
                                            }

                                            if (strpos($a, 'Pre Form 1') !== false){
                                                $level =  '';
                                            }

                                            if (strpos($a, 'Form 1') !== false){
                                                $level =  'o';
                                            }
                                            if (strpos($a, 'Form 2') !== false){
                                                $level =  'o';
                                            }
                                            if (strpos($a, 'Form 3') !== false){
                                                $level =  'o';
                                            }
                                            if (strpos($a, 'Form 4') !== false){
                                                $level =  'o';
                                            }

                                            if (strpos($a, 'Form 5') !== false){
                                                $level =  'a';
                                            }

                                            if (strpos($a, 'Form 6') !== false){
                                                $level =  'a';
                                            }
                                            
                                            if (strpos($a, 'QT') !== false){
                                                $level =  'q';
                                            }
                                            
                                            if (strpos($a, 'Reciters') !== false){
                                                $level =  'r';
                                            }
                                        }
                                        

                                        $user->create_p(array(
                                           'user_id'=> $user->idreturn(Input::get('username')),
                                           'st_uname' => Input::get('username_your_son_doughter'),
                                           'st_fname' => Input::get('fullname_of_your_son_doughter'),
                                           'schoolname' => Input::get('Secondary_primary_schoolname'),
                                           'region' => Input::get('Secondary_primary_region'),
                                           'levelOrStandard' => Input::get('student_Level'),
                                           'mkondo' => Input::get('student_Level_mkondo'),
                                           'facultOrComb_taken' => Input::get('student_combination'),
                                            'level_identify' =>  $level   
                                        ));


                                        if(Input::get('p_pr_st_verify')){
                                             $p_pr_st_verify = escape(Input::get('p_pr_st_verify'));
                                              $user->create_r(array(
                                               'user_id'=> $user->idreturn(Input::get('username')),
                                               'recv_id' =>  escape($p_pr_st_verify),
                                               'state' => 'v'
                                            ));
                                        }
                                    }
                                }
                        }
                    }
                  //>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>END: PARENT ACC REGISTRATION >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>//
                
                  //>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> TEACHER ACC REGISTRATION >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>//
                    if(!empty(Input::get('Teacher'))){
                      if (!empty(Input::get('Unversity_or_Collage_name_you_lecture')) && !empty(Input::get('Secondary_primary_shool_teach')) ) {
                          #choose One Account
                          echo "Choose One Acount Either Secondary Or Unversity...";
                      }else{
                   
                        if(!empty(Input::get('Unversity_or_Collage_name_you_lecture')) && !empty(Input::get('Course_Name_lecture')) ){
                            #UNVERSITI LECTURE

                            $user_exist = $user->Myfind('vy_users',Input::get('username'));
                           
                            if($user_exist){
                               
                              # user yup ndani database....
                                $user->create_teacher(array(
                                'user_id' => $user->idreturn(Input::get('username')),
                                'schoolname' => Input::get('Unversity_or_Collage_name_you_lecture'),
                                'region' => Input::get('select_Mkoa_unversity_lecture'),
                                'levelOrStandard' => Input::get('unversity_level_lecture'),
                                'facultOrComb_taken' => Input::get('Course_Name_lecture'),
                                'prof_subject_1' => Input::get('proffesionar_on_subject_1'),
                                'prof_subject_2' => Input::get('proffesionar_on_subject_2'),
                                'level_identify' => 'h'  
                                 ));

                               #teacher
                                if(Input::get('lecture_verify')){
                                     $lecture_verify = escape(Input::get('lecture_verify'));
                                      $user->create_r(array(
                                       'user_id'=> $user->idreturn(Input::get('username')),
                                       'recv_id' =>  escape($lecture_verify),
                                       'state' => 'v'
                                    ));
                                }

                                
                                
                            }else{
                                # user hayup ndani database....

                                //tuna create user on db
                                $user->create(array(
                                    'username'         =>  Input::get('username'),
                                    'fullname'         =>  Input::get('fullname'),
                                    'password'         =>  Hash::make(Input::get('password'),$salt),
                                    'student_acc'      =>  escape(Input::get('studentLevel')),
                                    'parent_acc'       =>  escape(Input::get('Parent')),
                                    'Enterprenuer_acc' =>  escape(Input::get('Enterprenuar')),
                                    'teacher_acc'      =>  escape(Input::get('Teacher')),
                                    'salt'             =>  $salt,
                                    'grouped'          =>  1
                                ));
                                
                                //create user on teacher db
                                $user->create_teacher(array(
                                    'user_id' => $user->idreturn(Input::get('username')),
                                    'schoolname' => Input::get('Unversity_or_Collage_name_you_lecture'),
                                    'region' => Input::get('select_Mkoa_unversity_lecture'),
                                    'levelOrStandard' => Input::get('unversity_level_lecture'),
                                    'facultOrComb_taken' => Input::get('Course_Name_lecture'),
                                    'prof_subject_1' => Input::get('proffesionar_on_subject_1'),
                                    'prof_subject_2' => Input::get('proffesionar_on_subject_2'),
                                    'level_identify' => 'h'  
                                ));

                                //create request for verfy
                                if(Input::get('lecture_verify')){
                                  $lecture_verify = escape(Input::get('lecture_verify'));
                                    $user->create_r(array(
                                      'user_id'=> $user->idreturn(Input::get('username')),
                                      'recv_id' =>  escape($lecture_verify),
                                      'state' => 'v'
                                    ));
                                }
                                
                            }
                        }

                        if(!empty(Input::get('Secondary_primary_shool_teach'))){
                            #SEC/PRE SCHOOL TEACHER

                            $user_exist = $user->Myfind('vy_users',Input::get('username'));
                           
                            if($user_exist){
                                #user exist kwenye database
                                $a =  Input::get('standard_form_level_teach');

                                if (strpos($a, 'KindGarten') !== false){
                                    $level =  'k';
                                }

                                if (strpos($a, 'Standard') !== false){
                                    $level =  'p';
                                }

                                if (strpos($a, 'Pre Form 1') !== false){
                                    $level =  '';
                                }

                                if (strpos($a, 'Form 1') !== false){
                                    $level =  'o';
                                }
                                if (strpos($a, 'Form 2') !== false){
                                    $level =  'o';
                                }
                                if (strpos($a, 'Form 3') !== false){
                                    $level =  'o';
                                }
                                if (strpos($a, 'Form 4') !== false){
                                    $level =  'o';
                                }

                                if (strpos($a, 'Form 5') !== false){
                                    $level =  'a';
                                }

                                if (strpos($a, 'Form 6') !== false){
                                    $level =  'a';
                                }
                                
                                if (strpos($a, 'QT') !== false){
                                    $level =  'q';
                                }
                                
                                if (strpos($a, 'Reciters') !== false){
                                    $level =  'r';
                                }
                                
                                #insert user on teacher db
                                $user->create_teacher(array(
                                    'user_id' => $user->idreturn(Input::get('username')),
                                    'schoolname' => Input::get('Secondary_primary_shool_teach'),
                                    'region' => Input::get('region_of_primary_school_teach'),
                                    'levelOrStandard' => Input::get('standard_form_level_teach'),
                                    'mkondo' => Input::get('standard_form_level_teach_mkondo'),
                                    'facultOrComb_taken' => Input::get('school_combination_teach'),
                                    'prof_subject_1' => Input::get('proffesionar_subject_1'),
                                    'prof_subject_2' => Input::get('proffesionar_subject_2'),
                                    'level_identify' =>  $level  
                                ));
                                
                                #insert user on verification db
                                if(Input::get('teacher_verify')){
                                     $teacher_verify = escape(Input::get('teacher_verify'));
                                      $user->create_r(array(
                                       'user_id'=> $user->idreturn(Input::get('username')),
                                       'recv_id' =>  escape($teacher_verify),
                                       'state' => 'v'
                                    ));
                                }

                            }else{

                                #user not exost on db
                                $user->create(array(
                                    'username'         =>  Input::get('username'),
                                    'fullname'         =>  Input::get('fullname'),
                                    'password'         =>  Hash::make(Input::get('password'),$salt),
                                    'student_acc'      =>  escape(Input::get('studentLevel')),
                                    'parent_acc'       =>  escape(Input::get('Parent')),
                                    'Enterprenuer_acc' =>  escape(Input::get('Enterprenuar')),
                                    'teacher_acc'      =>  escape(Input::get('Teacher')),
                                    'salt'             =>  $salt,
                                    'grouped'          =>  1
                                ));


                                $a =  Input::get('standard_form_level_teach');

                                if (strpos($a, 'KindGarten') !== false){
                                    $level =  'k';
                                }

                                if (strpos($a, 'Standard') !== false){
                                    $level =  'p';
                                }

                                if (strpos($a, 'Pre Form 1') !== false){
                                    $level =  '';
                                }

                                if (strpos($a, 'Form 1') !== false){
                                    $level =  'o';
                                }
                                if (strpos($a, 'Form 2') !== false){
                                    $level =  'o';
                                }
                                if (strpos($a, 'Form 3') !== false){
                                    $level =  'o';
                                }
                                if (strpos($a, 'Form 4') !== false){
                                    $level =  'o';
                                }

                                if (strpos($a, 'Form 5') !== false){
                                    $level =  'a';
                                }

                                if (strpos($a, 'Form 6') !== false){
                                    $level =  'a';
                                }
                                
                                if (strpos($a, 'QT') !== false){
                                    $level =  'q';
                                }
                                
                                if (strpos($a, 'Reciters') !== false){
                                    $level =  'r';
                                }
                                

                                $user->create_teacher(array(
                                    'user_id' => $user->idreturn(Input::get('username')),
                                    'schoolname' => Input::get('Secondary_primary_shool_teach'),
                                    'region' => Input::get('region_of_primary_school_teach'),
                                    'levelOrStandard' => Input::get('standard_form_level_teach'),
                                    'mkondo' => Input::get('standard_form_level_teach_mkondo'),
                                    'facultOrComb_taken' => Input::get('school_combination_teach'),
                                    'prof_subject_1' => Input::get('proffesionar_subject_1'),
                                    'prof_subject_2' => Input::get('proffesionar_subject_2'),
                                    'level_identify' =>  $level  
                                ));

                                if(Input::get('teacher_verify')){
                                     $teacher_verify = escape(Input::get('teacher_verify'));
                                      $user->create_r(array(
                                       'user_id'=> $user->idreturn(Input::get('username')),
                                       'recv_id' =>  escape($teacher_verify),
                                       'state' => 'v'
                                    ));
                                }
                            }
                        }
                      }
                    }
                  //>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>END: TEACHER ACC REGISTRATION >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>//
                  
                  //>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> STUDENT ACC REGISTRATION >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>//
                    if(!empty(Input::get('studentLevel'))){

                        if (!empty(Input::get('Unversity_or_Collage_name')) && !empty(Input::get('Secondary_primary_shool')) ) {
                            #choose One Account
                            echo "Choose One Acount Either Secondary Or Unversity...";
                        }else{
                                
                            if(!empty(Input::get('Unversity_or_Collage_name')) && !empty(Input::get('Course_Name_unversit')) ){
                                #student


                                $user_exist = $user->Myfind('vy_users',Input::get('username'));
                               
                                if($user_exist){
                                    #user exist on db..
                                    $user->create_student(array(
                                    'user_id'=> $user->idreturn(Input::get('username')),
                                    'schoolname' => @escape(Input::get('Unversity_or_Collage_name')),
                                    'region' => @Input::get('select_Mkoa_unversity'),
                                    'levelOrStandard' => escape(Input::get('unversity_level')),
                                    'facultOrComb_taken' => escape(Input::get('Course_Name_unversit')),
                                    'level_identify' =>  'h'  //unversity/collage/institute
                                    ));

                                
                                    if(Input::get('Un_verify')){
                                         $Un_verify = escape(Input::get('Un_verify'));
                                          $user->create_r(array(
                                           'user_id'=> $user->idreturn(Input::get('username')),
                                           'recv_id' =>  escape($Un_verify),
                                           'state' => 'v'
                                        ));
                                    }
                                }else{

                                    # higlevel student user not exist on db....
                                    $user->create(array(
                                        'username'         =>  Input::get('username'),
                                        'fullname'         =>  Input::get('fullname'),
                                        'password'         =>  Hash::make(Input::get('password'),$salt),
                                        'student_acc'      =>  escape(Input::get('studentLevel')),
                                        'parent_acc'       =>  escape(Input::get('Parent')),
                                        'Enterprenuer_acc' =>  escape(Input::get('Enterprenuar')),
                                        'teacher_acc'      =>  escape(Input::get('Teacher')),
                                        'salt'             =>  $salt,
                                        'grouped'          =>  1
                                    ));
                    

                                    $user->create_student(array(
                                       'user_id'=> $user->idreturn(Input::get('username')),
                                       'schoolname' => @escape(Input::get('Unversity_or_Collage_name')),
                                       'region' => @Input::get('select_Mkoa_unversity'),
                                       'levelOrStandard' => escape(Input::get('unversity_level')),
                                       'facultOrComb_taken' => escape(Input::get('Course_Name_unversit')),
                                      'level_identify' =>  'h'  //unversity/collage/institute
                                    ));

                                    
                                    if(Input::get('Un_verify')){
                                         $Un_verify = escape(Input::get('Un_verify'));
                                          $user->create_r(array(
                                           'user_id'=> $user->idreturn(Input::get('username')),
                                           'recv_id' =>  escape($Un_verify),
                                           'state' => 'v'
                                      ));
                                    }
                               
                                }
                            }


                            if(!empty(Input::get('Secondary_primary_shool'))){
                                #SEC/PRE SCHOOL TEACHER

                                $user_exist = $user->Myfind('vy_users',Input::get('username'));
                               
                                if($user_exist){
                                    #user exist on db..
                                    $a =  Input::get('standard_form_level');
                 
                                if (strpos($a, 'KindGarten') !== false){
                                    $level =  'k';
                                }

                                if (strpos($a, 'Standard') !== false){
                                    $level =  'p';
                                }

                                if (strpos($a, 'Pre Form 1') !== false){
                                    $level =  '';
                                }

                                if (strpos($a, 'Form 1') !== false){
                                    $level =  'o';
                                }
                                if (strpos($a, 'Form 2') !== false){
                                    $level =  'o';
                                }
                                if (strpos($a, 'Form 3') !== false){
                                    $level =  'o';
                                }
                                if (strpos($a, 'Form 4') !== false){
                                    $level =  'o';
                                }

                                if (strpos($a, 'Form 5') !== false){
                                    $level =  'a';
                                }

                                if (strpos($a, 'Form 6') !== false){
                                  $level =  'a';
                                }
                                
                                if (strpos($a, 'QT') !== false){
                                  $level =  'q';
                                }
                                
                                if (strpos($a, 'Reciters') !== false){
                                  $level =  'r';
                                }
                                

                         
                              
                                $user->create_student(array(
                                   'user_id'=> $user->idreturn(Input::get('username')),
                                   'schoolname' => Input::get('Secondary_primary_shool'),
                                   'region' => Input::get('region_of_primary_school'),
                                   'levelOrStandard' => Input::get('standard_form_level'),
                                   'mkondo' => Input::get('standard_form_mkondo'),
                                   'facultOrComb_taken' => Input::get('school_combination'),
                                  'level_identify' =>  $level  
                                ));
                                
                                if(Input::get('school_verify')){
                                        $school_verify = escape(Input::get('school_verify'));
                                        $user->create_r(array(
                                       'user_id'=> $user->idreturn(Input::get('username')),
                                       'recv_id' =>  escape($school_verify),
                                       'state' => 'v'
                                    ));
                                }

                                }else{
                                    #student user not exist on db...
                                    $user->create(array(
                                        'username'         =>  Input::get('username'),
                                        'fullname'         =>  Input::get('fullname'),
                                        'password'         =>  Hash::make(Input::get('password'),$salt),
                                        'student_acc'      =>  escape(Input::get('studentLevel')),
                                        'parent_acc'       =>  escape(Input::get('Parent')),
                                        'Enterprenuer_acc' =>  escape(Input::get('Enterprenuar')),
                                        'teacher_acc'      =>  escape(Input::get('Teacher')),
                                        'salt'             =>  $salt,
                                        'grouped'          =>  1
                                    ));


                                    $a =  Input::get('standard_form_level');
                     
                                    if (strpos($a, 'KindGarten') !== false){
                                        $level =  'k';
                                    }

                                    if (strpos($a, 'Standard') !== false){
                                        $level =  'p';
                                    }

                                    if (strpos($a, 'Pre Form 1') !== false){
                                        $level =  '';
                                    }

                                    if (strpos($a, 'Form 1') !== false){
                                        $level =  'o';
                                    }
                                    if (strpos($a, 'Form 2') !== false){
                                        $level =  'o';
                                    }
                                    if (strpos($a, 'Form 3') !== false){
                                        $level =  'o';
                                    }
                                    if (strpos($a, 'Form 4') !== false){
                                        $level =  'o';
                                    }

                                    if (strpos($a, 'Form 5') !== false){
                                        $level =  'a';
                                    }

                                    if (strpos($a, 'Form 6') !== false){
                                        $level =  'a';
                                    }
                                    
                                    if (strpos($a, 'QT') !== false){
                                        $level =  'q';
                                    }
                                    
                                    if (strpos($a, 'Reciters') !== false){
                                        $level =  'r';
                                    }
                                    

                                    $user->create_student(array(
                                       'user_id'=> $user->idreturn(Input::get('username')),
                                       'schoolname' => Input::get('Secondary_primary_shool'),
                                       'region' => Input::get('region_of_primary_school'),
                                       'levelOrStandard' => Input::get('standard_form_level'),
                                       'mkondo' => Input::get('standard_form_mkondo'),
                                       'facultOrComb_taken' => Input::get('school_combination'),
                                      'level_identify' =>  $level  
                                    ));
                                    
                                    if(Input::get('school_verify')){
                                            $school_verify = escape(Input::get('school_verify'));
                                            $user->create_r(array(
                                           'user_id'=> $user->idreturn(Input::get('username')),
                                           'recv_id' =>  escape($school_verify),
                                           'state' => 'v'
                                        ));
                                    }

                                }
                            }
                        }
                    }
                  //>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>END: STUDENT ACC REGISTRATION >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>//
                    
                  //>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> ENTERPRENUAR ACC REGISTRATION >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>//
                    if(!empty(Input::get('Enterprenuar'))){
                                
                        if(!empty(Input::get('Main_busness')) && !empty(Input::get('Other_busness')) ){
                            #Enterprenuer ... 

                            $user_exist = $user->Myfind('vy_users',Input::get('username'));
                               
                            if($user_exist){
                                #user exist on db..
                                  $user->create_e(array(
                                   'user_id'=> $user->idreturn(Input::get('username')),
                                   'main_busnes' => Input::get('Main_busness'),
                                   'other_busness' => Input::get('Other_busness'),
                                   'region' => Input::get('mkoa_busness')
                                ));

                            }else{
                        
                                $user->create(array(
                                    'username'         =>  Input::get('username'),
                                    'fullname'         =>  Input::get('fullname'),
                                    'password'         =>  Hash::make(Input::get('password'),$salt),
                                    'student_acc'      =>  escape(Input::get('studentLevel')),
                                    'parent_acc'       =>  escape(Input::get('Parent')),
                                    'Enterprenuer_acc' =>  escape(Input::get('Enterprenuar')),
                                    'teacher_acc'      =>  escape(Input::get('Teacher')),
                                    'salt'             =>  $salt,
                                    'grouped'          =>  1
                                ));
                

                                $user->create_e(array(
                                   'user_id'=> $user->idreturn(Input::get('username')),
                                   'main_busnes' => Input::get('Main_busness'),
                                   'other_busness' => Input::get('Other_busness'),
                                   'region' => Input::get('mkoa_busness')
                                ));
                            }    
                        }    
                    }
                  //>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>END: ENTERPRENUAR ACC REGISTRATION >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>//


                  // echo Session::flash('home','You have been registered ,You can Now Login...' );
                  // header('Location:inde.php');

                  Redirect::to('indexs.php');  
                }catch(Exception $e){
                  die($e->getMessage());
                }
            }else{
              //out errors
              // print_r($validation->errors());
              foreach($validation->errors() as $error){
                    echo $error,'<br/>';
              }
            } 
        }
    }
?>
</p>
               <form action="" id="signupform"   method="post" >

                    <div class = "casual_info reg_info">
                        <div class = "headerReg">VYU.COM</div>
                       
                        <div class="reg fullname">
                            <input type="text" name = "fullname"  value="<?php echo escape(Input::get('fullname')); ?>" placeholder="Full Name" >
                            <p class="ajaxmsg"></p>
                        </div>
                            
                        <div class="reg username">
                            <input type="text" name = "username" id = "username" 
                             maxlength="15"    value="<?php echo escape(Input::get('username')); ?>" placeholder="Username" autocomplete="off" >
                            <p class="unamestatus"></p>
                        </div>


                        <div class="reg phoneNo">
                            <input type="text" name = "phoneNo" value="<?php echo escape(Input::get('phoneNo')); ?>" placeholder="phoneNo" id = "phoneNo"  placeholder="Phone No" >
                            <p class="ajaxmsg"></p>
                        </div>

                        <div class="reg Password">
                            <input type="Password" name = "password" id = "password"  placeholder="Choose Password">
                            <p class="ajaxmsg"></p>
                        </div>

                        <div class="reg Password">
                            <input type="Password" name = "password_again" id = "password_id" placeholder="Repeat password">
                        </div>

                        <div class="reg account">
                            <h3>Choose Account</h3>
                            <div>
                              <input type="checkbox" onclick="showMe('st_info', this);" id = "stuedentInfo" name = "studentLevel" value ='1' ><span class="Student"> Student (Unversity, Collage, A-level, O-level, Primary, kindagetern )</span>
                            </div>
                           
                            <div >
                              <input type="checkbox" onclick="showMe('teach_info', this);" name = "Teacher" value ='1' id = 'chekbox_students_info' onclick = "checkbox_register('student_info','chekbox_students_info');"><span class="Teacher">Teacher</span>
                            </div> 
                            <div ><input type="checkbox" onclick="showMe('P_info', this);" name = "Parent" value ='1'><span class="Parent">Parent</span></div>
                            <div ><input type="checkbox" onclick="showMe('e_info', this);" name = "Enterprenuar" value ='1'><span class="Enterprenuar">Enterprenuar</span></div>
                        </div>
                        
                        <div id = "st_info" class = "all_info">
                            <div class = "info_wraper">
                                <h3>STUDENT INFO</h3>

                                <!-- student Header Account -->
                                <div class="reg gradInfo">
                                    <h3>Choose Your Grade</h3>
                                    <div onclick = "dispVisibility('Unversity_collageInfo','Primary_secondInfo');" class = "secVspr Pr_sec_level">Primary/Secondary</div>
                                    
                                    <div onclick = "dispVisibility('Primary_secondInfo','Unversity_collageInfo');" class = "collVsunv Pr_sec_level">Collage/inversity</div>
                                </div>
                                       
                                     
                                <div id = "Unversity_collageInfo" class = "Unversity_collageInfo educationLevelInfo">
                                    <h3>Collage & Unversity Info</h3>
                                    <div class="reg Schoolname">
                                        <input type="text" name = "Unversity_or_Collage_name"  onKeyup ="st_collage();" placeholder="Your Unversity/collage Name" id="uname">

                                        <div class="Level Mkoa">
                                              <label for='SECTION'></label>
                                              <select id = "select_Mkoa_unversity" class='SECTION' name="select_Mkoa_unversity" onChange ="st_collage();"> 
                                                 <option disabled selected value> -- select Region -- </option>
                                                   <option>Dar es Salaam</option>
                                                    <option>Mbeya</option>
                                                    <option>Dodoma</option>
                                                    <option>Arusha</option>
                                                    <option>Kilimanjaro</option>
                                                    <option>Morogoro</option>
                                                    <option>Geita</option>
                                                    <option>Iringa</option>
                                                    <option>Kagera</option>
                                                    <option>Katavi</option>
                                                    <option>Kigoma</option>
                                                    <option>Lindi</option>
                                                    <option>Manyara</option>
                                                    <option>Mara</option>
                                                    <option>Mtwara</option>
                                                    <option>Mwanza</option>
                                                    <option>Njombe</option>
                                                    <option>Pwani</option>
                                                    <option>Rukwa</option>
                                                    <option>Ruvuma</option>
                                                    <option>Shinyanga</option>
                                                    <option>Simiyu</option>
                                                    <option>Singida</option>
                                                    <option>Tabora</option>
                                                    <option>Tanga</option>
                                                    <option>Unguja Kaskazini</option>
                                                    <option>Unguja Kusini</option>
                                                    <option>Unguja Mjini Magharibi</option>
                                                    <option>Pemba Kaskazini</option>
                                                    <option>Pemba Kusini</option>
                                              </select>
                                        </div>
                                    </div>

                                    <div class="reg Schoolname">
                                      <input type="text" id = "Course_Name_unversit" name = "Course_Name_unversit" onKeyup ="st_collage();" placeholder="Course Name">

                                      <div class="Level Mkoa">
                                          <label for='SECTION'></label>
                                          <select class='SECTION' id ="unversity_level" name = "unversity_level" onChange ="st_collage();"> 
                                              <option disabled selected value> -- select Level -- </option>
                                              <option>Certifiate</option>
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
                                        <div id = "resurt" class="slideVerify">
                                        </div>
                                    </div>
                                </div>

                                <div id = "Primary_secondInfo" class = "Primary_secondInfo educationLevelInfo">
                                    <h3>Primary & Secondary Info</h3>
                                    <div class="reg Schoolname">
                                       <input type="text" id="Secondary_primary_shool" name = "Secondary_primary_shool" onKeyup ="pr_sec_collage();" placeholder="Primary/Secondary school Name">
                                       <div class="Level Mkoa">
                                            <label for='SECTION'></label>
                                            <select class='SECTION' id="region_of_primary_school" name="region_of_primary_school"  onChange ="pr_sec_collage();" > 
                                                <option disabled selected value> -- select Region -- </option>
                                                <option>Dar es Salaam</option>
                                                    <option>Mbeya</option>
                                                    <option>Dodoma</option>
                                                    <option>Arusha</option>
                                                    <option>Kilimanjaro</option>
                                                    <option>Morogoro</option>
                                                    <option>Geita</option>
                                                    <option>Iringa</option>
                                                    <option>Kagera</option>
                                                    <option>Katavi</option>
                                                    <option>Kigoma</option>
                                                    <option>Lindi</option>
                                                    <option>Manyara</option>
                                                    <option>Mara</option>
                                                    <option>Mtwara</option>
                                                    <option>Mwanza</option>
                                                    <option>Njombe</option>
                                                    <option>Pwani</option>
                                                    <option>Rukwa</option>
                                                    <option>Ruvuma</option>
                                                    <option>Shinyanga</option>
                                                    <option>Simiyu</option>
                                                    <option>Singida</option>
                                                    <option>Tabora</option>
                                                    <option>Tanga</option>
                                                    <option>Unguja Kaskazini</option>
                                                    <option>Unguja Kusini</option>
                                                    <option>Unguja Mjini Magharibi</option>
                                                    <option>Pemba Kaskazini</option>
                                                    <option>Pemba Kusini</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="reg Leve">
                                      
                                       <!-- <input type="text" name = "Schoolname" placeholder="Your Shool/collage Name"> -->
                                      
                                        <div class="Level Section">
                                              <label for='SECTION'></label>
                                              <select class='SECTION' id = "standard_form_level" name = "standard_form_level" onChange ="pr_sec_collage();"> 
                                                <option disabled selected value> -- select Level -- </option>
                                                  <option >Pre Form 1</option>
                                                  <option>Form 1</option>
                                                  <option>Form 2</option>
                                                  <option >Form 3</option>
                                                  <option >Form 4</option>
                                                  <option >Form 5</option>
                                                  <option >Form 6</option>
                                                  <option >Reciters</option>
                                                  <option >QT</option>
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

                                              <select class='SECTION' id = "standard_form_level" name = "standard_form_mkondo" onChange ="pr_sec_collage();"> 
                                                <option disabled selected value> -- select Mkondo -- </option>
                                                  <option >A</option>
                                                  <option>B</option>
                                                  <option>C</option>
                                                  <option >D</option>
                                                  <option >E</option>
                                                  <option >F</option>
                                                  <option >G</option>
                                                  <option >H</option>
                                             
                                              </select>
                                         </div>

                                        <div id = "SubjectCombination" class="Combination Section">
                                          <label for='SECTION'></label>
                                          <select class='SECTION' id = "school_combination" name = "school_combination"  onChange ="pr_sec_collage();"> 
                                                <option disabled selected value> -- select Combination -- </option>
                                                <option>PCM</option>
                                                <option>PCB</option>
                                                <option>PGM</option>
                                                <option>EGM</option>
                                                <option>CBG</option>
                                                <option>CBA</option>
                                                <option>CBN</option>
                                                <option>HGL</option>
                                                <option>HGK</option>
                                                <option>HKL</option>
                                                <option>KLF</option>
                                                <option>ECA</option>
                                                <option>HGE</option>
                                          </select>
                                       </div>

                                       <div class = "verifyProfiles">
                                            <h2>Find Teacher To verify You</h2>
                                           <div id = "result_pre_sec" class="slideVerify">
                                           </div> 
                                       </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div id = "teach_info" class = "all_info">

                            <div class = "info_wraper">

                                <h3>TEACHER/LECTURE INFO</h3> 
                                <div class="reg gradInfo">
                                    <h3>Choose Your Grade</h3>
                                    <div onclick = "dispVisibility('Unversity_collage_lectInfo','Primary_secondtechInfo');" class = "secVspr Pr_sec_level">Primary/Secondary Teacher
                                    </div>
                                  
                                    <div onclick = "dispVisibility('Primary_secondtechInfo','Unversity_collage_lectInfo');" class = "collVsunv Pr_sec_level">Unversity/Collage Lecture
                                    </div>
                                </div>
                                
                       
                                <div id = "Unversity_collage_lectInfo" class = "Unversity_collageInfo educationLevelInfo">
                                    
                                    <h3>Collage & Unversity Info</h3>
                                    <div class="reg Schoolname">
                                        <input type="text" id ="Unversity_or_Collage_name_you_lecture" name = "Unversity_or_Collage_name_you_lecture" onKeyup ="Lecture();" placeholder="Unversity/collage Name">
                                        <div class="Level Mkoa">
                                            <label for='SECTION'></label>
                                            <select class='SECTION' id ="select_Mkoa_unversity_lecture" name ="select_Mkoa_unversity_lecture" onChange="Lecture();" > 
                                                <option disabled selected value> -- select Region -- </option>
                                                <option>Dar es Salaam</option>
                                                <option>Mbeya</option>
                                                <option>Dodoma</option>
                                                <option>Arusha</option>
                                                <option>Kilimanjaro</option>
                                                <option>Morogoro</option>
                                                <option>Geita</option>
                                                <option>Iringa</option>
                                                <option>Kagera</option>
                                                <option>Katavi</option>
                                                <option>Kigoma</option>
                                                <option>Lindi</option>
                                                <option>Manyara</option>
                                                <option>Mara</option>
                                                <option>Mtwara</option>
                                                <option>Mwanza</option>
                                                <option>Njombe</option>
                                                <option>Pwani</option>
                                                <option>Rukwa</option>
                                                <option>Ruvuma</option>
                                                <option>Shinyanga</option>
                                                <option>Simiyu</option>
                                                <option>Singida</option>
                                                <option>Tabora</option>
                                                <option>Tanga</option>
                                                <option>Unguja Kaskazini</option>
                                                <option>Unguja Kusini</option>
                                                <option>Unguja Mjini Magharibi</option>
                                                <option>Pemba Kaskazini</option>
                                                <option>Pemba Kusini</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="reg Schoolname">
                                        <input type="text" id = "Course_Name_lecture" name = "Course_Name_lecture" onKeyup ="Lecture();" placeholder="Course Name">

                                        <div class="Level Mkoa">
                                            <label for='SECTION'></label>
                                            <select class='SECTION' id = "unversity_level_lecture" name = "unversity_level_lecture" onChange="Lecture();"> 
                                                <option disabled selected value> -- select Level -- </option>
                                                <option >Certifiate</option>
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

                                        <input type="text" name = "proffesionar_on_subject_1"  class = "lecturesubject" placeholder="subject one">
                                        <input type="text" name = "proffesionar_on_subject_2" class = "lecturesubject"  placeholder=" subject 1 you Lecture">
                                        <input type="text" name = "Schoolname" class = "lecturesubject"  placeholder="subject 2 you Lecture">
                                  </div>

                                   <div class = "verifyProfiles">
                                        <h2>Find Teacher To verify You</h2>
                                        <div id = "Lectere_result" class="slideVerify">
                                        </div>
                                 </div>
                                </div>
                            
                                 
                                <div id = "Primary_secondtechInfo" class = "Primary_secondInfo educationLevelInfo">
                                    <h3>Primary & Secondary Info</h3>
                                    <div class="reg Schoolname">
                                        <input type="text" id = "Secondary_primary_shool_teach" name = "Secondary_primary_shool_teach" placeholder=" Primary/Secondary school Name" onKeyup ="teacher();">
                                        <div class="Level Mkoa">
                                            <label for='SECTION' name></label>
                                            <select class ='SECTION' id =  "region_of_primary_school_teach" name = "region_of_primary_school_teach"  onChange="teacher();"> 
                                                <option disabled selected value> -- select Region -- </option>
                                                <option>Dar es Salaam</option>
                                                <option>Mbeya</option>
                                                <option>Dodoma</option>
                                                <option>Arusha</option>
                                                <option>Kilimanjaro</option>
                                                <option>Morogoro</option>
                                                <option>Geita</option>
                                                <option>Iringa</option>
                                                <option>Kagera</option>
                                                <option>Katavi</option>
                                                <option>Kigoma</option>
                                                <option>Lindi</option>
                                                <option>Manyara</option>
                                                <option>Mara</option>
                                                <option>Mtwara</option>
                                                <option>Mwanza</option>
                                                <option>Njombe</option>
                                                <option>Pwani</option>
                                                <option>Rukwa</option>
                                                <option>Ruvuma</option>
                                                <option>Shinyanga</option>
                                                <option>Simiyu</option>
                                                <option>Singida</option>
                                                <option>Tabora</option>
                                                <option>Tanga</option>
                                                <option>Unguja Kaskazini</option>
                                                <option>Unguja Kusini</option>
                                                <option>Unguja Mjini Magharibi</option>
                                                <option>Pemba Kaskazini</option>
                                                <option>Pemba Kusini</option>
                                            </select>
                                        </div>
                                    </div>
                                     
                                    <div class="reg Leve">
                                        
                                        <!-- <input type="text" name = "Schoolname" placeholder="Your Shool/collage Name"> -->

                                        
                                       <div class="Level Section">
                                            <label for='SECTION'></label>
                                            <select class='SECTION' id ="standard_form_level_teach" name ="standard_form_level_teach" onChange="teacher();"> 
                                                <option disabled selected value> -- select Level -- </option>
                                                <option>Form 1</option>
                                                <option>Form 2</option>
                                                <option>Form 3</option>
                                                <option>Form 4</option>
                                                <option>Form 5</option>
                                                <option>Form 6</option>
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

                                             <select class='SECTION' id = "standard_form_level" name = "standard_form_level_teach_mkondo" > 
                                                <option disabled selected value> -- select Mkondo -- </option>
                                                  <option >A</option>
                                                  <option>B</option>
                                                  <option>C</option>
                                                  <option >D</option>
                                                  <option >E</option>
                                                  <option >F</option>
                                                  <option >G</option>
                                                  <option >H</option>
                                             
                                              </select>
                                       </div>

                                       <div id = "SubjectCombination" class="Combination Section">
                                            <label for='SECTION'></label>
                                            <select class='SECTION' id = "school_combination_teach" name = "school_combination_teach" onChange="teacher();"> 
                                                <option disabled selected value> -- select Combination -- </option>
                                                <option>PCM</option>
                                                <option>PCB</option>
                                                <option>PGM</option>
                                                <option>EGM</option>
                                                <option>CBG</option>
                                                <option>CBA</option>
                                                <option>CBN</option>
                                                <option>HGL</option>
                                                <option>HGK</option>
                                                <option>HKL</option>
                                                <option>KLF</option>
                                                <option>ECA</option>
                                                <option>HGE</option>

                                            </select>
                                       </div>

                                        <h3 class = "subjectLectureHead">Your SPecialized Subject To teach</h3>
                                        <input type="text" name = "proffesionar_subject_1" class = "lecturesubject"  placeholder="proffesionar on subject 1 try">
                                        <input type="text" name = "proffesionar_subject_2" class = "lecturesubject"  placeholder="proffesionar on subject 2">
                                        <div class = "verifyProfiles">
                                            <h2>Find Teacher To verify You</h2>
                                            <div id = "teacher_result" class="slideVerify">
                                            </div>
                                        </div>
                                        
                                 </div>
                                </div>
                            </div> 
                        </div>

                        <div id = "P_info" class = "all_info">
                            <div class = "info_wraper">
                                <h3>PARENT INFO</h3>
                                <div class="reg gradInfo">
                                    <h3>Choose Your Grade</h3>
                                    <div onclick = "dispVisibility('Unversity_collage_parentInfo','Primary_secondparentInfo');" class = "secVspr Pr_sec_level"> Primary/Secondary Son/Doughter</div>
                                  
                                    <div onclick = "dispVisibility('Primary_secondparentInfo','Unversity_collage_parentInfo');" class = "collVsunv Pr_sec_level"> Collage/inversity Son/Doughter</div>
                                 </div>
                     
                               

                                 <div id = "Unversity_collage_parentInfo" class = "Unversity_collageInfo educationLevelInfo">
                                     <h3>Collage & Unversity Info</h3>
                                      <div class="reg Schoolname">
                                            <input type="text" id = "unversity_collage_name" name = "unversity_collage_name" class = "p_info" placeholder="Your Unversity/collage Name" onkeyup="parant();" >
                                            <input type="text" id = "Fullstudent_name" name = "Full_student_name" class = "p_info" placeholder="full student name" >
                                            <input type="text" id = "username_of_student" name = "username_of_student" class = "p_info" placeholder="username of student name" >
                                            
                                            <div class="Level Mkoa">
                                                <label for='SECTION'></label>
                                                <select class='SECTION' id ="Unversity_collage_region" name ="Unversity_collage_region" onchange ="parent();"> 
                                                    <option disabled selected value> -- select Region -- </option>
                                                    <option>Dar es Salaam</option>
                                                    <option>Mbeya</option>
                                                    <option>Dodoma</option>
                                                    <option>Arusha</option>
                                                    <option>Kilimanjaro</option>
                                                    <option>Morogoro</option>
                                                    <option>Geita</option>
                                                    <option>Iringa</option>
                                                    <option>Kagera</option>
                                                    <option>Katavi</option>
                                                    <option>Kigoma</option>
                                                    <option>Lindi</option>
                                                    <option>Manyara</option>
                                                    <option>Mara</option>
                                                    <option>Mtwara</option>
                                                    <option>Mwanza</option>
                                                    <option>Njombe</option>
                                                    <option>Pwani</option>
                                                    <option>Rukwa</option>
                                                    <option>Ruvuma</option>
                                                    <option>Shinyanga</option>
                                                    <option>Simiyu</option>
                                                    <option>Singida</option>
                                                    <option>Tabora</option>
                                                    <option>Tanga</option>
                                                    <option>Unguja Kaskazini</option>
                                                    <option>Unguja Kusini</option>
                                                    <option>Unguja Mjini Magharibi</option>
                                                    <option>Pemba Kaskazini</option>
                                                    <option>Pemba Kusini</option>
                                                </select>
                                            </div>
                                      </div>

                                      <div class="reg Schoolname">
                                        

                                         <input type="text" id = "student_coursename" name = "student_coursename" placeholder="Course Name" onkeyup="parant();">

                                            <div class="Level Mkoa">
                                                <label class = "label" for='SECTION'></label>
                                                <select class='SECTION' id = "student_course_level" name = "student_course_level" onchange="parent();"> 
                                                    <option disabled selected value>-- select level --</option>
                                                    <option >Certifiate</option>
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
                                            <div id = "p_acc_h_result" class="slideVerify">
                                            </div>
                                        </div>

                                 </div>

                                 <div id = "Primary_secondparentInfo" class = "Primary_secondInfo educationLevelInfo">
                                      <h3>Parents Info</h3>
                                      <div class="reg Schoolname">
                                         <input type="text" name = "fullname_of_your_son_doughter" class = "p_info" placeholder="Name your Of son/doughter">
                                         <input type="text" name = "username_your_son_doughter" class = "p_info" placeholder="Name your Of son/doughter">
                                         <input type="text" id = "Secondary_primary_schoolname" name = "Secondary_primary_schoolname" class = "p_info" placeholder="Your  Primary/Secondary school Name" onkeyup="pr_parant();">
                                         <div class="Level Mkoa">
                                                <label for='SECTION'></label>
                                                <select class='SECTION' id ="Secondary_primary_region" name ="Secondary_primary_region" onchange="pr_parant()"> 
                                                    <option disabled selected value>-- select Region --</option>
                                                    <option>Dar es Salaam</option>
                                                    <option>Mbeya</option>
                                                    <option>Dodoma</option>
                                                    <option>Arusha</option>
                                                    <option>Kilimanjaro</option>
                                                    <option>Morogoro</option>
                                                    <option>Geita</option>
                                                    <option>Iringa</option>
                                                    <option>Kagera</option>
                                                    <option>Katavi</option>
                                                    <option>Kigoma</option>
                                                    <option>Lindi</option>
                                                    <option>Manyara</option>
                                                    <option>Mara</option>
                                                    <option>Mtwara</option>
                                                    <option>Mwanza</option>
                                                    <option>Njombe</option>
                                                    <option>Pwani</option>
                                                    <option>Rukwa</option>
                                                    <option>Ruvuma</option>
                                                    <option>Shinyanga</option>
                                                    <option>Simiyu</option>
                                                    <option>Singida</option>
                                                    <option>Tabora</option>
                                                    <option>Tanga</option>
                                                    <option>Unguja Kaskazini</option>
                                                    <option>Unguja Kusini</option>
                                                    <option>Unguja Mjini Magharibi</option>
                                                    <option>Pemba Kaskazini</option>
                                                    <option>Pemba Kusini</option>
                                                </select>
                                            </div>
                                      </div>

                                      <div class="reg Leve">
                                        
                                         <!-- <input type="text" name = "Schoolname" placeholder="Your Shool/collage Name"> -->

                                        
                                          <div class="Level Section">
                                                <label for='SECTION'></label>
                                                <select class='SECTION' id ="student_Level" name ="student_Level" onchange="pr_parant()">
                                                    <option disabled selected value>-- select level --</option> 
                                                    <option>Form 1</option>
                                                    <option>Form 2</option>
                                                    <option>Form 3</option>
                                                    <option>Form 4</option>
                                                    <option>Form 5</option>
                                                    <option>Form 6</option>
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

                                                <select class='SECTION' id = "standard_form_level" name = "student_Level_mkondo" > 
                                                <option disabled selected value> -- select Mkondo -- </option>
                                                  <option >A</option>
                                                  <option>B</option>
                                                  <option>C</option>
                                                  <option >D</option>
                                                  <option >E</option>
                                                  <option >F</option>
                                                  <option >G</option>
                                                  <option >H</option>
                                             
                                              </select>
                                           </div>

                                          <div id = "SubjectCombination" class="Combination Section">
                                                <label for='SECTION'></label>
                                                <select class='SECTION' id = "student_combination" name = "student_combination" onchange="pr_parant()"> 
                                                    <option disabled selected value>-- select combination --</option> 
                                                    <option>PCM</option>
                                                    <option>PCB</option>
                                                    <option>PGM</option>
                                                    <option>EGM</option>
                                                    <option>CBG</option>
                                                    <option>CBA</option>
                                                    <option>CBN</option>
                                                    <option>HGL</option>
                                                    <option>HGK</option>
                                                    <option>HKL</option>
                                                    <option>KLF</option>
                                                    <option>ECA</option>
                                                    <option>HGE</option>

                                                </select>
                                         </div>

                                         <!-- <h3 class = "subjectLectureHead">Your SPecialized Subject To teach</h3>
                                           <input type="text" name = "Schoolname" class = "lecturesubject"  placeholder="Your subject you can Teach">
                                            <input type="text" name = "Schoolname" class = "lecturesubject"  placeholder="Your subject you can Teach">
                                            <input type="text" name = "Schoolname" class = "lecturesubject"  placeholder="Your subject you can Teach"> -->
                                         
                                           <div class = "verifyProfiles">
                                            <h2>Find Teacher To verify You</h2>
                                            <div id = "p_acc_o_result" class="slideVerify">
                                            </div>
                                        </div>
                                      </div>
                                 </div>
                            </div>
                        </div>

                        <div id = "e_info" class = "all_info">
                           <div class = "info_wraper">
                                 <h3>ENTERPRENUAR INFO</h3>
                                 <div id = "Unversity_collage_parentInfo" class = "Enterprenuar_inf">
                                     <h3>Collage & Unversity Info</h3>
                                      <div class="reg Schoolname">
                                            <input type="text" name = "Main_busness" class = "p_info" placeholder="Main Busness">
                                            <input type="text" name = "Other_busness" class = "p_info" placeholder="Other BUsness">
                                            <div class="Level Mkoa">
                                                <label for='SECTION'>Mkoa</label>
                                                <select class='SECTION' name = "mkoa_busness"> 
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
                        </div>
                        <input type ="hidden" value="<?php echo Token::generate();?>" name = "token">
                     <input type = "submit" class = "register_Submit"value = "Register">
               </form>
        </div>
   

   <script type="text/javascript"  src ="jscript/ajax.js"></script>
   <script type="text/javascript"  src ="jscript/registration.js"></script>

</body>
</html>