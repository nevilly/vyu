
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Skonga life.com</title>
           <script type="text/javascript">
            // function load(adiv,url){
            //       if(window.XMLHttpRequest){
            //          xmlhttp = new XMLHttpRequest();
            //        }else{
            //          xmlhttp = ActiveXObject('Microsoft.XMLHTTP');
            //        }


            //       xmlhttp =onreadystatechange = function(){
            //         if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
            //           document.getElementById(adiv).innerHTML =  xmlhttp.responseText;
            //         }
            //       }

            //       xmlhttp.open('GET',url, true);
            //       xmlhttp.send();
            //      }
          
              function findmatch(){

                if(window.XMLHttpRequest){
                  xmlhttp = new XMLHttpRequest();
                }else{
                  xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
                }
                
                xmlhttp.onreadystatechange = function(){
                   if(xmlhttp.readyState == 4 && xmlhttp.Status == 200){
                    document.getElementById('results').innerHTML = xmlhttp.responseText;
                   }
                }
 
                xmlhttp.open('POST','all.php?search_text='+document.search.search_text.value,true);
                xmlhttp.send();           

              }

           </script>

           <style>

              #results{
              color:green;
              border:1px solid red;
               width:50px;
               height: 100px;
            }
           </style>
    </head>
<body>
     
<!--    <div class = "wraper">
      <div class="header">
         <h3>REGISTRATION</h3>
      </div>

      <form action=""    method="POST">
        <input type="tex" name = "username" id = "username"  placeholder="Username">
        <input type="tex" name = "kakaname" id = "k_name"   placeholder="Username"><div id='k_Msg'></div>
        <input type="tex" name = "dadaname" id = "d_name" maxlength="15"  placeholder="Username"><div id='d_Msg'></div>

      


     </form>
        </div>
   </div> -->


        <form id="search" name="search">
          
          <input type = "text" name="search_text" onkeyup="findmatch();">


        </form>
   

          <div id='results'></div>

         <!--  <input type = "submit" onclick ="load('u_Msg','all.php')"> -->

  

</body>
</html>


<?php  

 function (new_accout){
  accounts = $db->query("SELECT student_acc,parent_acc,enterprenuer_acc,teacher_acc FROM vy_users WHERE user_id = ?",array($user_id));


  if ($accounts->first()->new_accout == 1) {
      # code...
  //   $acc = $db->query("SELECT * FROM new_accout WHERE user_id = ?" ,array($user_id));
        return "presssent";
     // if(
     //      !empty($acc->first()->schoolname) &&
     //      !empty($acc->first()->facultOrComb_taken) &&
     //      !empty($acc->first()->levelOrStandard) &&
     //      !empty($acc->first()->region) &&
     //      !empty($acc->first()->schoolname) &&
     //       $acc->first()->verify_person_id != 0
     //      )
     //      {
     //            return $type = 'display:none';
     //            #display anoter account if exists

          
     //      }else{
     //         // if ($acc->first()->schoolname == Null){
     //         //                    # code...
     //         //                    $st_HigherEdname    =   "<input type='text' name = 'Schoolname' placeholder='Your Unversity/collage/institute name'>";
     //         //                    $st_O_ASchoolname   =   "<input type='text' name = 'Schoolname' placeholder='Your Secondary/Primary name'>";
     //         //                  }

     //         //  if($acc->first()->region == Null){
     //         //    $st_region = '<div class="Level Mkoa">
     //         //                  <label for="SECTION">Mkoa</label>
     //         //                  <select id="SECTION" > 
     //         //                      <option selected="selected">Dar-es-Salaam</option>
     //         //                      <option>Mbeya</option>
     //         //                      <option>Iringa</option>
     //         //                      <option>Arusha</option>
     //         //                      <option>Morogoro</option>
     //         //                      <option>Moshi</option>
     //         //                      <option>Dodoma</option>
     //         //                  </select>
     //         //          </div>';
     //         //  } 

     //         //  if($acc->first()->levelOrStandard == Null){
     //         //        $st_HigherEd_levelOrStandard = '<div class="Level Mkoa">
     //         //                        <label for="SECTION">Level</label>
     //         //                        <select id="SECTION"> 
     //         //                            <option selected="selected">Certifiate</option>
     //         //                            <option>Diploma 1year</option>
     //         //                            <option>Diploma 2year</option>
     //         //                            <option>Diploma 3year</option>
     //         //                            <option>Degree 1year</option>
     //         //                            <option>Degree 2year</option>
     //         //                            <option>Degree 3year</option>
     //         //                            <option>Masters 1year</option>
     //         //                            <option>Masters 2year</option>
     //         //                            <option>PHD </option>
     //         //                        </select>
     //         //                  </div>';

     //         //            $st_O_AlevelOrStandard  ='<div class="Level Section">
     //         //                          <label for="SECTION">Level</label>
     //         //                          <select id="SECTION"> 
     //         //                              <option selected="selected">Form 1</option>
     //         //                              <option>Form 2</option>
     //         //                              <option >Form 3</option>
     //         //                              <option >Form 4</option>
     //         //                              <option >Form 5</option>
     //         //                              <option >Form 6</option>
     //         //                              <option>Standard 1</option>
     //         //                              <option>Standard 2</option>
     //         //                              <option>Standard 3</option>
     //         //                              <option>Standard 4</option>
     //         //                              <option>Standard 5</option>
     //         //                              <option>Standard 6</option>
     //         //                              <option>Standard 7</option>
     //         //                              <option>Standard 1</option>
     //         //                              <option>KindGarten</option>
     //         //                          </select>
     //         //                     </div>';
     //         //  }

     //         //  if($acc->first()->facultOrComb_taken == Null){
     //         //        $st_facultOrComb = '<input type="text" name = "courseName" placeholder="Course Name">';

     //         //          $st_Comb  ='<div id = "SubjectCombination" class="Combination Section">
     //         //                    <label for="SECTION">Combination</label>
     //         //                    <select id="SECTION"> 
     //         //                        <option selected="selected">None</option>
     //         //                        <option>PCM</option>
     //         //                        <option>PCB</option>
     //         //                        <option>PGM</option>
     //         //                        <option>CBG</option>
     //         //                        <option>EGM</option>
     //         //                        <option>ECA</option>
     //         //                        <option>HGM</option>
     //         //                        <option>HKL</option>
     //         //                        <option>HGK</option>
     //         //                        <option>PHD </option>
     //         //                    </select>
     //         //             </div>';
     //         //  }

     //         //  if($acc->first()->verify_person_id == 0){
     //         //        $st_verifyperson_id= '<div class = "profpanel">
     //         //                       <div class = "veryImg"><img src= "img/p2.jpg"/></div>
     //         //                       <div class = "verifedSymbol">v</div>
     //         //                        <div class = "prof_cont">
     //         //                            <div class = "panel_title t_name">
     //         //                              <span class = "t_title">Lecture:</span>
     //         //                              <span class = "t_nym">Nehemia MwansasuS</span>
     //         //                            </div>
     //         //                        </div>  
     //         //                        <div class = "nextbotton verfyme">
     //         //                            Verify Me
     //         //                        </div>
     //         //                    </div>';
     //         //  }

     //      }
                   
  }else{
    return "bsent";
  }
               

 }


?>