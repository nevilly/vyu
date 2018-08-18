function _(x) {
  return  document.getElementById(x);
}
	

function findVerify(){
    if(window.XMLHttpRequest){
        xmlhttp = new XMLHttpRequest();
    }else{
        xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
    }

    xmlhttp.onreadystatechange = function(){
        if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
            document.getElementById('resurt').innerHTML = xmlhttp.responseText;
        }
    }

    parameters = 'uname='+document.getElementById('uname').value;

    xmlhttp.open('POST','function.php',true ); 
    xmlhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
    xmlhttp.send(parameters);

}

function findVerif(adiv,url,parameter){
        if(window.XMLHttpRequest){
            xmlhttp = new XMLHttpRequest();
        }else{
            xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
        }

        xmlhttp.onreadystatechange = function(){
            if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
              document.getElementById(adiv).innerHTML = xmlhttp.responseText;
            }
        }
  
    parameters = parameter ;
      
    
     xmlhttp.open('POST',url,true ); 
     xmlhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
     xmlhttp.send(parameters);

}


function st_collage(){

    uname = _('uname').value;
    unversity_level = _('unversity_level').value;
    Course_Name_unversit = _('Course_Name_unversit').value;
    select_Mkoa_unversity = _('select_Mkoa_unversity').value;

    if(uname){
        adiv = 'resurt';
        url = 'function.php';

        parameter = 'unvname='+uname+'&&unvLevel='+unversity_level+"&&CourseUnv="+Course_Name_unversit+"&&MkoaUnv="+select_Mkoa_unversity;
        findVerif(adiv,url,parameter);
        }
}

function pr_sec_collage(){

    Sec_pri_shool = _('Secondary_primary_shool').value;
    school_level = _('standard_form_level').value;
    school_comb = _('school_combination').value;
    region_school = _('region_of_primary_school').value;

    if(Sec_pri_shool){
        adiv = 'result_pre_sec';
        url = 'function.php';

        parameter = 'schoolname='+Sec_pri_shool+'&&schoolLevel='+school_level+"&&schoolcomb="+school_comb+"&&schoolregion="+region_school;
        findVerif(adiv,url,parameter);
        }
} 


function Lecture(){

    Unvname_lecture = _('Unversity_or_Collage_name_you_lecture').value;
    unvlevel_lecture = _('unversity_level_lecture').value;
    CourseName_lecture = _('Course_Name_lecture').value;
    Mkoa_unversity_lecture = _('select_Mkoa_unversity_lecture').value;

    if(Unvname_lecture){
        adiv = 'Lectere_result';
        url = 'function.php';

        parameter = 'Unvnamelecture='+Unvname_lecture+'&&unvlevel_lecture='+unvlevel_lecture+"&&Courselecture="+CourseName_lecture+"&&region_unv_lecture="+Mkoa_unversity_lecture;
        findVerif(adiv,url,parameter);
        }

    
}


function teacher(){
    Sec_pr_shool_teach = _('Secondary_primary_shool_teach').value;
    level_teach = _('standard_form_level_teach').value;
    comb_teach = _('school_combination_teach').value;
    regionschool_teach = _('region_of_primary_school_teach').value;

    if(Sec_pr_shool_teach){
        adiv = 'teacher_result';
        url = 'function.php';

        parameter = 'shoolteach='+Sec_pr_shool_teach+'&&levelteach='+level_teach+"&&combteach="+comb_teach+"&&regionschoolteach="+regionschool_teach;
        findVerif(adiv,url,parameter);
        }
}



function parant(){
    p_unname = _('unversity_collage_name').value;
    student_Level = _('student_course_level').value;
    student_combination = _('student_coursename').value; 
    region = _('Unversity_collage_region').value;
    
    if(p_unname){
        adiv = 'p_acc_h_result';
        url = 'function.php';

        parameter = 'pshool='+p_unname+'&&level='+student_Level+"&&comb="+student_combination+"&&region="+region;
        
        //parameter = 'sunvname='+punvname+'&&studentcz_level='+studentcz_level+"&&student_course="+student_course+"&&region="+Unversity_collage_region;
        findVerif(adiv,url,parameter);
    }
}

function pr_parant(){

    p_shoolename = _('Secondary_primary_schoolname').value;
    student_Level = _('student_Level').value;
    student_combination = _('student_combination').value;
    region = _('Secondary_primary_region').value;
    

    if(p_shoolename){
        adiv = 'p_acc_o_result';
        url = 'function.php';

        parameter = 'shool='+p_shoolename+'&&level='+student_Level+"&&comb="+student_combination+"&&region="+region;
        
        
        //parameter = 'sunvname='+punvname+'&&studentcz_level='+studentcz_level+"&&student_course="+student_course+"&&region="+Unversity_collage_region;
        findVerif(adiv,url,parameter);
    }
}