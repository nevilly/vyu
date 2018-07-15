<?php

try {

    $database = new PDO("mysql:host=localhost;dbname=vyu",'root','');
  

} catch (Exception $e) {
  echo "mot";
}


if (isset($_POST['unvname'])){
    # Unversity_collage_insitute account
    $unvName   =  $_POST['unvname'];
    $CourseUnv =  $_POST['CourseUnv'];
    $unvLevel  =  $_POST['unvLevel'];
    $MkoaUnv   =  $_POST['MkoaUnv'];




    $query = $database->prepare('SELECT * FROM student_acc,vy_users WHERE vy_users.id = student_acc.user_id AND schoolname LIKE ? AND facultOrComb_taken LIKE ? AND levelOrStandard LIKE ? AND region LIKE ? AND level_identify = ?');
    $query->bindValue(1, "$unvName%", PDO::PARAM_STR);
    $query->bindValue(2, "$CourseUnv%", PDO::PARAM_STR);
    $query->bindValue(3, "$unvLevel%", PDO::PARAM_STR);
    $query->bindValue(4, "$MkoaUnv%", PDO::PARAM_STR);
    $query->bindValue(5, "h");
    $query->execute();

    if (!$query->rowCount() == 0){
        while ($results = $query->fetch()){

          echo '<div class = "profpanel">
                <div class = "veryImg"><img src= "img/p2.jpg"/></div>
                <div class = "verifedSymbol">v</div>
                <div class = "prof_cont">
                    <div class = "panel_title t_name">
                        <span class = "t_title">Student:</span>
                        <span class = "t_nym">'.$results["username"].'</span>
                        <span class = "t_nym">'.$results["schoolname"] .'</span>
                        <span class = "t_nym">'.$results["facultOrComb_taken"].'</span>
                        <span class = "t_nym">'.$results["region"].'</span>
                        <span class = "t_nym">'.$results["levelOrStandard"].'</span>
                    </div>
                </div>  

                
                <div class = "nextbotton verfyme" name="{$id}">
                <input type = "checkbox"  name = "Un_verify" value = '.$results["user_id"].'> <span>Verify Me</span>
                </div>
            </div>';
        }       
    }else{
        echo 'Nothing found';
    }
}

if (isset($_POST['schoolname'])){
    # Unversity_collage_insitute account
    // htmlentities
    $schoolname   =  htmlentities($_POST['schoolname']);
    $schoolcomb =  htmlentities($_POST['schoolcomb']);
    $schoolLevel  =  htmlentities($_POST['schoolLevel']);
    $schoolregion   =  htmlentities($_POST['schoolregion']);




    $query = $database->prepare('SELECT * FROM student_acc,vy_users WHERE vy_users.id = student_acc.user_id AND schoolname LIKE ? AND facultOrComb_taken LIKE ? AND levelOrStandard LIKE ? AND region LIKE ? AND NOT level_identify = ?');
    $query->bindValue(1, "$schoolname%", PDO::PARAM_STR);
    $query->bindValue(2, "$schoolcomb%", PDO::PARAM_STR);
    $query->bindValue(3, "$schoolLevel%", PDO::PARAM_STR);
    $query->bindValue(4, "$schoolregion%", PDO::PARAM_STR);
    $query->bindValue(5, "h");
    $query->execute();

    if (!$query->rowCount() == 0){
        while ($results = $query->fetch()){

          echo '<div class = "profpanel">
                <div class = "veryImg"><img src= "img/p2.jpg"/></div>
                <div class = "verifedSymbol">v</div>
                <div class = "prof_cont">
                    <div class = "panel_title t_name">
                        <span class = "t_title">Student:</span>
                        <span class = "t_nym">'.$results["username"].'</span>
                        <span class = "t_nym">'.$results["schoolname"] .'</span>
                        <span class = "t_nym">'.$results["facultOrComb_taken"].'</span>
                        <span class = "t_nym">'.$results["region"].'</span>
                        <span class = "t_nym">'.$results["levelOrStandard"].'</span>
                    </div>
                </div>  

                
                <div class = "nextbotton verfyme" name="{$id}">
                <input type = "checkbox"  name = "school_verify" value = '.$results["user_id"].'> <span>Verify Me</span>
                </div>
            </div>';
        }       
    }else{
        echo 'Nothing found';
    }
}

//lecture ajax result
if (isset($_POST['Unvnamelecture'])){
    
    $Unvnamelecture   =  htmlentities($_POST['Unvnamelecture']);
    $Courselecture =  htmlentities($_POST['Courselecture']);
    $unvlevel_lecture  =  htmlentities($_POST['unvlevel_lecture']);
    $regionunv_lecture   =  htmlentities($_POST['region_unv_lecture']);




    $query = $database->prepare('SELECT * FROM teacher_acc,vy_users WHERE vy_users.id = teacher_acc.user_id AND schoolname LIKE ? AND facultOrComb_taken LIKE ? AND levelOrStandard LIKE ? AND region LIKE ? AND level_identify = ?');
    $query->bindValue(1, "$Unvnamelecture%", PDO::PARAM_STR);
    $query->bindValue(2, "$Courselecture%", PDO::PARAM_STR);
    $query->bindValue(3, "$unvlevel_lecture%", PDO::PARAM_STR);
    $query->bindValue(4, "$regionunv_lecture%", PDO::PARAM_STR);
    $query->bindValue(5, "h");
    $query->execute();

    if (!$query->rowCount() == 0){
        while ($results = $query->fetch()){

          echo '<div class = "profpanel">
                <div class = "veryImg"><img src= "img/p2.jpg"/></div>
                <div class = "verifedSymbol">v</div>
                <div class = "prof_cont">
                    <div class = "panel_title t_name">
                        <span class = "t_title">Lectures:</span>
                        <span class = "t_nym">'.$results["username"].'</span>
                        <span class = "t_nym">'.$results["schoolname"] .'</span>
                        <span class = "t_nym">'.$results["facultOrComb_taken"].'</span>
                        <span class = "t_nym">'.$results["region"].'</span>
                        <span class = "t_nym">'.$results["levelOrStandard"].'</span>
                    </div>
                </div>  

                
                <div class = "nextbotton verfyme" name="{$id}">
                <input type = "checkbox"  name = "lecture_verify" value = '.$results["user_id"].'> <span>Verify Me</span>
                </div>
            </div>';
        }       
    }else{
        echo 'Nothing found';
    }
}

//teacher ajax result
if (isset($_POST['shoolteach'])){
    $shoolteach   =  htmlentities($_POST['shoolteach']);
    $combteach =  htmlentities($_POST['combteach']);
    $levelteach  =  htmlentities($_POST['levelteach']);
    $regionteach   =  htmlentities($_POST['regionschoolteach']);

    $query = $database->prepare('SELECT * FROM teacher_acc,vy_users WHERE vy_users.id = teacher_acc.user_id AND schoolname LIKE ? AND facultOrComb_taken LIKE ? AND levelOrStandard LIKE ? AND region LIKE ? AND NOT level_identify = ?');
    $query->bindValue(1, "$shoolteach%", PDO::PARAM_STR);
    $query->bindValue(2, "$combteach%", PDO::PARAM_STR);
    $query->bindValue(3, "$levelteach%", PDO::PARAM_STR);
    $query->bindValue(4, "$regionteach%", PDO::PARAM_STR);
    $query->bindValue(5, "h");
    $query->execute();

    if (!$query->rowCount() == 0){
        while ($results = $query->fetch()){

          echo '<div class = "profpanel">
                <div class = "veryImg"><img src= "img/p2.jpg"/></div>
                <div class = "verifedSymbol">v</div>
                <div class = "prof_cont">
                    <div class = "panel_title t_name">
                        <span class = "t_title">Teachers:</span>
                        <span class = "t_nym">'.$results["username"].'</span>
                        <span class = "t_nym">'.$results["schoolname"] .'</span>
                        <span class = "t_nym">'.$results["facultOrComb_taken"].'</span>
                        <span class = "t_nym">'.$results["region"].'</span>
                        <span class = "t_nym">'.$results["levelOrStandard"].'</span>
                    </div>
                </div>  

                
                <div class = "nextbotton verfyme" name="{$id}">
                <input type = "checkbox"  name = "teacher_verify" value = '.$results["user_id"].'> <span>Verify Me</span>
                </div>
            </div>';
        }       
    }else{
        echo 'Nothing found';
    }
}

//parents watcher O ajax result          
if (isset($_POST['shool'])){
    $shoolteach   =  htmlentities($_POST['shool']);
    $combteach =  htmlentities($_POST['comb']);
    $levelteach  =  htmlentities($_POST['level']);
    $regionteach   =  htmlentities($_POST['region']);

    $query = $database->prepare('SELECT * FROM teacher_acc,vy_users WHERE vy_users.id = teacher_acc.user_id AND schoolname LIKE ? AND facultOrComb_taken LIKE ? AND levelOrStandard LIKE ? AND region LIKE ? AND NOT level_identify = ?');
    $query->bindValue(1, "$shoolteach%", PDO::PARAM_STR);
    $query->bindValue(2, "$combteach%", PDO::PARAM_STR);
    $query->bindValue(3, "$levelteach%", PDO::PARAM_STR);
    $query->bindValue(4, "$regionteach%", PDO::PARAM_STR);
    $query->bindValue(5, "h");
    $query->execute();

    if (!$query->rowCount() == 0){
        while ($results = $query->fetch()){

          echo '<div class = "profpanel">
                <div class = "veryImg"><img src= "img/p2.jpg"/></div>
                <div class = "verifedSymbol">v</div>
                <div class = "prof_cont">
                    <div class = "panel_title t_name">
                        <span class = "t_title">Teachers:</span>
                        <span class = "t_nym">'.$results["username"].'</span>
                        <span class = "t_nym">'.$results["schoolname"] .'</span>
                        <span class = "t_nym">'.$results["facultOrComb_taken"].'</span>
                        <span class = "t_nym">'.$results["region"].'</span>
                        <span class = "t_nym">'.$results["levelOrStandard"].'</span>
                    </div>
                </div>  

                
                <div class = "nextbotton verfyme" name="{$id}">
                <input type = "checkbox"  name = "p_pr_st_verify" value = '.$results["user_id"].'> <span>Verify Me</span>
                </div>
            </div>';
        }       
    }else{
        echo 'Nothing found';
    }
}

//parent wacher H ajax result
if (isset($_POST['pshool'])){
    $shoolteach   =  htmlentities($_POST['pshool']);
    $combteach =  htmlentities($_POST['comb']);
    $levelteach  =  htmlentities($_POST['level']);
    $regionteach   =  htmlentities($_POST['region']);

    $query = $database->prepare('SELECT * FROM teacher_acc,vy_users WHERE vy_users.id = teacher_acc.user_id AND schoolname LIKE ? AND facultOrComb_taken LIKE ? AND levelOrStandard LIKE ? AND region LIKE ? AND  level_identify = ?');
    $query->bindValue(1, "$shoolteach%", PDO::PARAM_STR);
    $query->bindValue(2, "$combteach%", PDO::PARAM_STR);
    $query->bindValue(3, "$levelteach%", PDO::PARAM_STR);
    $query->bindValue(4, "$regionteach%", PDO::PARAM_STR);
    $query->bindValue(5, "h");
    $query->execute();

    if (!$query->rowCount() == 0){
        while ($results = $query->fetch()){

          echo '<div class = "profpanel">
                <div class = "veryImg"><img src= "img/p2.jpg"/></div>
                <div class = "verifedSymbol">v</div>
                <div class = "prof_cont">
                    <div class = "panel_title t_name">
                        <span class = "t_title">Teachers:</span>
                        <span class = "t_nym">'.$results["username"].'</span>
                        <span class = "t_nym">'.$results["schoolname"] .'</span>
                        <span class = "t_nym">'.$results["facultOrComb_taken"].'</span>
                        <span class = "t_nym">'.$results["region"].'</span>
                        <span class = "t_nym">'.$results["levelOrStandard"].'</span>
                    </div>
                </div>  

                
                <div class = "nextbotton verfyme" name="{$id}">
                <input type = "checkbox"  name = "p_verify" value = '.$results["user_id"].'> <span>Verify Me</span>
                </div>
            </div>';
        }       
    }else{
        echo 'Nothing found';
    }
}

//parent ajax result
if (isset($_POST['sunvname'])){
    # Unversity_collage_insitute account
       //query ioneshe mwanafunzi wa mzazi na mwalimu wa darasa

    // $Fullstudent_name   =  htmlentities($_POST['Fullstudent_name']);
    // $uname_student   =  htmlentities($_POST['uname_student']);

    // parameter = 'sunvname='+punvname+'&&studentcz_level='+studentcz_level+"&&student_course="+student_course+"&&region="+Unversity_collage_region;
            
     $sunvname   =  htmlentities($_POST['sunvname']);
    $student_course =  htmlentities($_POST['student_course']);
    $studentcz_level  =  htmlentities($_POST['studentcz_level']);
    $region   =  htmlentities($_POST['region']);




     $query = $database->prepare('SELECT * FROM teacher_acc,vy_users WHERE vy_users.id = teacher_acc.user_id AND schoolname LIKE ? AND facultOrComb_taken LIKE ? AND levelOrStandard LIKE ? AND region LIKE ?');
      $query->bindValue(1, "$sunvname%", PDO::PARAM_STR);
    $query->bindValue(2, "$student_course%", PDO::PARAM_STR);
    $query->bindValue(3, "$studentcz_level%", PDO::PARAM_STR);
    $query->bindValue(4, "$region%", PDO::PARAM_STR);
  //  $query->bindValue(5, "h");

 

    if (!$query->rowCount() == 0){
        while ($results = $query->fetch()){

          echo '<div class = "profpanel">
                <div class = "veryImg"><img src= "img/p2.jpg"/></div>
                <div class = "verifedSymbol">v</div>
                <div class = "prof_cont">
                    <div class = "panel_title t_name">
                        <span class = "t_title">Student:</span>
                        <span class = "t_nym">'.$results["username"].'</span>
                        <span class = "t_nym">'.$results["schoolname"] .'</span>
                        <span class = "t_nym">'.$results["facultOrComb_taken"].'</span>
                        <span class = "t_nym">'.$results["region"].'</span>
                        <span class = "t_nym">'.$results["levelOrStandard"].'</span>
                    </div>
                </div>  

                
                <div class = "nextbotton verfyme" name="{$id}">
                <input type = "checkbox"  name = "p_Un_verify" value = '.$results["user_id"].'> <span>Verify Me</span>
                </div>
            </div>';
        }       


           // $query = $database->prepare('SELECT * FROM  teacher_acc,vy_users WHERE vy_users.id = student_acc.user_id AND schoolname LIKE ? AND st_fname = ? AND st_uname = ? AND facultOrComb_taken LIKE ? AND levelOrStandard LIKE ? AND region LIKE ? AND level_identify = ?');
    // $query->bindValue(1, "$sunvname%", PDO::PARAM_STR);
    // $query->bindValue(2, "$Fullstudent_name%", PDO::PARAM_STR);
    // $query->bindValue(3, "$uname_student%", PDO::PARAM_STR);
    // $query->bindValue(4, "$student_course%", PDO::PARAM_STR);
    // $query->bindValue(5, "$studentcz_level%", PDO::PARAM_STR);
    // $query->bindValue(5, "$region%", PDO::PARAM_STR);
    // $query->bindValue(7, "h");
    // $query->execute();
    }else{
        echo 'Nothing found';
    }
}




  


