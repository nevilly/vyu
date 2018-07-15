 // window.setInterval("refreshDiv()", 500);
 //    function refreshDiv(){
 //        counter = counter + 1;
 //        document.getElementById("nehemiasdf").innerHTML = "nis";
 //    }


 function _(x) {
     return document.getElementById(x);
 }


 function tag(x) {
     return document.getElementsByName(x);
 }

 function n(x) {
     //code
     return document.getElementsByClassName(x);
 }

 function id_Qselector(x) {
     var y = [].map.call(x, function (elem) {
         return elem.id;
     });
     return y;
 }

 function value_Qselectors(x) {
     var y = [].map.call(x, function (elem) {
         return elem.value;
     });
     return y;
 }

 (function($,s){
     var b = $('#submit_post');

     b.on('click', function () {
     	var post = $('#post_text'),
		post_holder = $('#msgBody'),
		post_data = post_holder.html(),
			previledge = $('#Nav_everyone').value(),


            temp = "<div id = 'posted'>\n" +
            "\t\t\t\t\t\t<div class = 'posted_profile'>\n" +
            "\t\t\t\t\t\t\t<div class = 'posted_cicle'>\n" +
            "\t\t\t\t\t\t\t\t<img src ='"+user.profile+"' >\n" +
            "\t\t\t\t\t\t   </div>\n" +
            "\t\t\t\t\t\t</div>\n" +
            "\t\t\t\t\t\t<div class ='name_time'><span class = 'name'>"+user.username+"</span><span class = 'time_ago'>now</span></div>\n" +
            "\t\t\t\t\t\t<div class ='msg'>"+post.value()+"</div>\n" +
            "\t\t\t\t    </div>" +
			"</div>";

     	if(!post.empty()){

     		//sasha
			s.response({
				url:'post.php',
				meth:'post',
                query: 'action=post_data&user=' + user.user_id + '&post=' + post.value() + '&privilege=' + previledge + '&frompage=' + user.frompage,
				success:function(data){
					if(s.state(this)){
						var r = s.jsonResponse(this);
                        post.value('');
                        if (r.data === true) {

                            post_holder.html(temp+post_data);
                            live();
						}else{
							alert(r.error);
						}
            		}
				}
			});
		}else{
            alert('Please type something to proceed!');
		}
	 });


     // b.on('click',function(){
     //     	var post = $(#msgBody),
     //     	postholder = $('#msgBody').html(),
     //     });


    
    


 })(Exile,sasha);


 function onreply(post_id, replyid) {
     texttemplate = "<textarea></textarea>";


     replyid.innerHTML = texttemplate;
     _(replyid).style.display = "none";
     // Exile('#'+replyid).html(texttemplate);
 }

var lastEventId = '';

 function live() {
     var post_holder = $$('#msgBody');
     if(user.user !== '' &&
		 post_holder.element !== null){

         var post_data = post_holder.html();
         sasha.onMessage({
			 meth:'post',
			 url:'live.php',
			 query:'action=get_post&section='+user.section,
			 success:function (d) {
                 console.log(d);
                var r = sasha.data(d),
                id = r.id;

                if(r.status && lastEventId !== id){
                	post_holder.html(r.data);
				}

				console.log(lastEventId);

                 lastEventId = id;

             }
		 });
     }
 }

 live();

 //////////////////////////////////////////////////////////////////////////////////////


// ///////////////////Ajax function  block
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
        };
	  
	    parameters = parameter ;
	    xmlhttp.open('POST',url,true ); 
	    xmlhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
	    xmlhttp.send(parameters);
	}


	function findAcc(adiv,url,parameter){
	    if(window.XMLHttpRequest){
	        xmlhttp = new XMLHttpRequest();
	    }else{
	        xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
	    }

	    xmlhttp.onreadystatechange = function(){
	        if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
	           document.getElementById(adiv).innerHTML = xmlhttp.responseText; 
	           // location.reload(true);
	        }
        };
	  
	    parameters = parameter;
	    xmlhttp.open('POST',url,true ); 
	    xmlhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
	    xmlhttp.send(parameters);
	}
// ///////////////////Ajax function  block

function chatVar(par_1,par_2,par_3){
    var textValue   = _(par_1).value;
    var user_id = _(par_2);
    var msg_id = par_2;
    var status = par_3;
    
    if( status == 'a'){
    	if(textValue){
	       url = 'insidefunc.php';
	       adiv = 'posted';
	       parameter= 'userd='+user_id+'&&subjecWallMsg='+textValue+'&&status='+status;

	       findAcc(adiv,url,parameter);
	    } 
    }  

    if(status == 'reply'){
    	if(textValue){
	       url = 'insidefunc.php';
	       adiv = 'posted';
	       parameter= 'subjectWallId='+msg_id+'&&replysubjecWallMsg='+textValue+'&&status='+status;

	       findAcc(adiv,url,parameter);
	    } 
    }  
}




// onclick="QstnchatVar('dateqstnDonewall','qstnFromSchoolname','subjectnameQstnWall','topicnameQstnwal','subtopicQstnwall','Qn_selectNoQstnwall',
//                                          'Qn_selectNoColomQstnwall','mainqstnwall','match_a','match_b','match_c','b'

function QstnchatVar(arg,arg_1,arg_2,arg_3,arg_4,arg_5,arg_6,arg_7,arg_8,arg_9,arg_10,arg_11,arg_12,arg_13,arg_14){
    var SECTION_qstnwall     =   _(arg).value;
    var dateqstnDonewall     =   _(arg_1).value;
    var qstnFromSchoolname   =   _(arg_2).value;
    var subjectnameQstnWall  =   _(arg_3).value;
    var topicnameQstnwal     =   _(arg_4).value;
    var subtopicQstnwall     =   _(arg_5).value;
    var Qn_selectNoQstnwall  =   _(arg_6).value;
    var Qn_selectNoColomQstnwall  =  _(arg_7).value;
    var mainqstnwall         =   _(arg_8).value;
    var match_a              =   _(arg_9).value;
    var match_b              =   _(arg_10).value;
    var match_c              =   _(arg_11).value;
    var status               =     arg_12;
    var subject_name         =   arg_13;
    var subject_id           =   arg_14;


    if(status == 'b'){
    	if(mainqstnwall){
	       url       = 'insidefunc.php';
	       adiv      = 'gog';
	      

	      parameter = 'mainqstnwall='+mainqstnwall+'&&SECTION_qstnwall='+SECTION_qstnwall+'&&dateqstnDonewall='+dateqstnDonewall+'&&qstnFromSchoolname='+qstnFromSchoolname+'&&subjectnameQstnWall='+subjectnameQstnWall+'&&topicnameQstnwal='+topicnameQstnwal+'&&subtopicQstnwall='+subtopicQstnwall+'&&Qn_selectNoQstnwall='+Qn_selectNoQstnwall+'&&Qn_selectNoColomQstnwall='+Qn_selectNoColomQstnwall+'&&match_a='+match_a+'&&match_b='+match_b+'&&match_c='+match_c+'&&status='+status+'&&subject_name='+subject_name+'&&subject_id='+subject_id;
	      findAcc(adiv,url,parameter);
        }else{
       	 alert('emty');
       }
    } 
}


// replyQuestion function

function replyQstn(arg,arg_one,arg_3){
    var wallsubject = arg;
    var textAnswe = _(arg_one).value;
    var subject_id = arg_one;

    // alert(textAnswe);

   
	if(textAnswe){
       url = 'insidefunc.php';
       adiv = 'gether';
       parameter= 'textAnswe='+textAnswe+'&&wallsubject='+wallsubject+'&&subject_id='+subject_id;

       findAcc(adiv,url,parameter);
    } 
}



function chats(){
    var adiv= 'msgBody';
    parameter= 'wallmsg=mainMsg';
    url = 'insidefunc.php';
    findVerif(adiv,url,parameter);
}


function sendRqst(user_id,status,dirUrl){
    user_d = user_id;
    stat = status;

   
    url = 'insidefunc.php';
    adiv = '';
    dirUrl = dirUrl;
    parameter= 'reqfrnd_userid='+user_id+'&&dirUrl='+dirUrl;

    findVerif(adiv,url,parameter);

    //botton = _('friendReq').innerHTML
}


function funcRqst(an_id,status,action){
	user_d = an_id;
	stat = status;

	   
    url = 'insidefunc.php';
    adiv = 'resz';
    parameter= 'reqfrnd_userid='+user_id+'&&statusReq='+stat+"&&action="+action;

    findVerif(adiv,url,parameter);
}

//setInterval(function(){chats()},1000);


function reply(par_one ,par_two,par_th,par_f){
   var sender = par_one;
   var sender_i= par_two;
   var sender_= par_th;
   var sender_= par_f;


    iid = _(sender).value;
   
 
   // alert(iid);
}


function radioSystem(var_one,var_two,var_three){
    var radios = tag(var_one), closetab =  _(var_three);

	for (var i = 0, length = radios.length; i < length; i++){
		if (radios[i].checked){
		    // do whatever you want with the checked radio
		    // alert(radios[i].value);
            
            ///////////////////////////////function for choose Main Account....
			if(var_two == 'chooseMainAcc'){
		        var obj_valu = radios[i].value;
			    chooseMainAcc(obj_valu);
			}
		  
		    // only one radio can be logically checked, don't check the rest
		    break;
		}
	}
     
    closetab.style.display = "none";

}

function chooseMainAcc(obj){
    var radio_obje_vlue =  obj;
    url = 'insidefunc.php';
    adiv = '';
    parameter= 'MainAccvalue='+radio_obje_vlue;

    findAcc(adiv,url,parameter);
}

function topicSlide(arg){
   var contentDiv = _(arg);

   //contentDiv.style.marginTop = '1px';
   contentDiv.style.display = 'block';
}

function myFunction(arg){
    var newItem = document.createElement("DIV");
    var textnode = document.createTextNode("Water");
    //newItem.appendChild(textnode);

    var list = document.getElementById(arg),
    child = list.children,

    store = null,id = null;
    
    // alert(child.id);
    
    for(var i = 0; i <= child.length -1; i++){
    	id = i+1;
   		store = child[i];

   		console.log(child[i]);
    } 
    
    
    if(store != null){
    	list.insertBefore(newItem, list.childNodes[store]);
    }
    
    if(id != null){
   	 newItem.setAttribute('id','holder'+id);
    }
    //newItem.innerHTML = '<div class="child1">sds</div><div class="child2"><textArea></textArea></div>';
    newItem.innerHTML = '<div class="child1"><input type = "text" id ="topicInput'+id+'" class = "topicInput" placeholder="Write subtopic"></div><div class="child2"><textArea  id ="textinstr'+id+'" class = "textinstr" placeholder="Write Your subTopic Body"></textArea></div>';
}

 
function showValues(subject_id,shulname,region,lev){
    
    var tpcttle       = "";
    var tpcinstractn  = "";

    var tpcva         = "";
	var topicbdy      = "";
	
	var subject_id    = subject_id;
 

    //...... get topic 
		var topictitle     =  document.querySelectorAll('.topictitle');
		var tpcinstr       =  document.querySelectorAll('.tpcinstr');
	 
		let tpctitle       = id_Qselector(topictitle);
		let tpcinstraction = id_Qselector(tpcinstr);

	    for(i = 0;  i < tpctitle.length; i++){
		 	tpcttle += _(tpctitle[i]).value;
		}

		for(i = 0;  i < tpcinstraction.length; i++){
		 	tpcinstractn += _(tpcinstraction[i]).value;
		}
    //...... get topic 
	
    //...... get subtop 
		var idtpcvalue   = document.querySelectorAll('.topicInput');
		var idbodyvalue  = document.querySelectorAll('.textinstr');
		
		let tpcvalue     = id_Qselector(idtpcvalue);
		let tpcbdy       = id_Qselector(idbodyvalue);
	    
		for(i = 0;  i < tpcvalue.length; i++){
		 	tpcva += _(tpcvalue[i]).value+',';
		}

		for(i = 0;  i < tpcbdy.length; i++){
		 	topicbdy += _(tpcbdy[i]).value+',';
		}
    //...... get subtop 

    //...... validating topic And Subtopc
		if(tpcva != ""){
	        tpcva;
		}

		if(topicbdy != ""){
	        topicbdy;
		}

	    if(tpcttle != ""){
	       tpcttle;
		}

		if(tpcinstractn != ""){
	        tpcinstractn;
		}
    //...... validating topic And Subtopc

    //...... Send to Ajax
	    url = 'insidefunc.php';
		adiv = 'needResult';
		parameter= 'topicname='+tpcva+'&&topicbody='+topicbdy+'&&subject_id='+subject_id+'&&buktopictitle='+tpcttle+'&&buktitleCont='+tpcinstractn+'&&schulname='+shulname+'&&region='+region+'&&lev='+lev;

		findAcc(adiv,url,parameter);
	//...... Send to Ajax
}

//------------------------------------Teacher Time Table------------------------//

    function getselectedValue(arg,args,argss){
        var Selectvalue = _(arg).value;
        var divResult = argss;
        var subject_id = args;

        url       = 'insidefunc.php';
		adiv      = divResult;
		parameter = 'Selectvalue='+Selectvalue+'&&subject_id='+subject_id;
	    findAcc(adiv,url,parameter);
    }

    


	function CreateTimeTableIncr(arg,teacherId,subject_id){
	    var newItem = document.createElement("DIV");
	    var textnode = document.createTextNode("Water");

	    var teacherId = teacherId;
	    var subject_id = subject_id;
	    //newItem.appendChild(textnode);

	    var list = document.getElementById(arg),
	    child = list.children,

	    store = null,id = 0;
	    
	    // alert(child.id);

	    
	    for(var i = 0; i <= child.length -1; i++){
	    	id = i;
	   		store = child[i];

	   		console.log(child[i]);
	    } 
	    
	    
	    if(store != null){
	    	list.insertBefore(newItem, list.childNodes[store]);
	    }
	    
	    if(id != null){
	   	 newItem.setAttribute('id','holddiv'+id);
	   	 newItem.setAttribute('class','tholder');
	    }
        
       // AJax for reuturn all topic of users Teacher
        url       = 'insidefunc.php';
		adiv      = "";
		parameter = 'selectedTopic='+'selectedTopic'+'&&teacherId='+teacherId+'&&subject_id='+subject_id;
	    
	    jsonresult(parameter,result);

	    function jsonresult(parameter,cb){
		    if(window.XMLHttpRequest){
		        xmlhttp = new XMLHttpRequest();
		    }else{
		        xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
		    }
		   
		 
		    xmlhttp.onreadystatechange = function(){
		        if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
		            returned_data = xmlhttp.responseText;
		            cb(returned_data);
		        }
            };
		  

		    parameters = parameter;
		    xmlhttp.open('POST',url,true ); 
		    xmlhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
		    xmlhttp.send(parameters);
		}

	    function result(mydata){
	        select_subtopc =  mydata;
            tymtable_subjectId = _('tymtable_subjectId').value;
            // console.log(tymtable_subjectId);
            // console.log(select_subtopc);
	        newItem.innerHTML = "<div class='darasa'> <span class = 'whichClass'> <label for=''>Class</label> <select id='whichClass"+id+"' class = 'WhichClas'> <option selected='selected'>FORM 1</option> <option>FORM 2</option> <option>FORM 3</option> <option>FORM 4</option> <option>FORM 5</option> <option>FORM 6</option> </select> </span> <span class = 'whichCategor'> <label for='qstty'>Category</label> <select id='whichCategor"+id+"' class = 'WhichCategor'> <option>A</option> <option>B</option> <option>C</option> <option>E</option> <option>F</option> <option>G</option> </select> </span> </div> <div class='child1 showwlpanel'> <div class = 'tmtbable daterecord'> <h4>Date</h4> <input type = 'date'  id = 'datefortymtable"+id+"' class = 'datefortymtable'> </div> </div> <div class='child2 showtime'> <div class = 'timeFortimeTable'> <div class = 'tmtbable start_tmtable'> <h4>Start Period</h4> <input type = 'time' id = 'startclassperiod"+id+"' class ='startclassperiod'> </div> <div class = 'tmtbable Endtime'> <h4>End Period</h4> <input type = 'time' id = 'Endclassperiod"+id+"' class ='Endclassperiod'> </div> </div> </div> <div class='child3 showsubject'> <div class = 'child3Wraper'> <div class = 'tmtbable choose_topics'> <h4> choose topic</h4> <div class = 'topics'> <select id = 'tymtable_selectTopic"+id+"' class = 'tymtable_selectTopic' onchange=\"getselectedValue('tymtable_selectTopic"+id+"','"+tymtable_subjectId+"','chooseSelectedTpc"+id+"')\"> <option disabled selected value> -- select topic to teach -- </option> "+ select_subtopc +"</select> </div> </div> <div class = 'selectSub'> <h4> <span id =   'plusSubtopic_chuzen"+id+"' class   =   'disSubtpc' onclick =  \" switchVisbltyQ ('plusSubtopic_chuzen"+id+"', 'minusSubtopic_chuzen"+id+"', 'chooseSelectedTpc"+id+"');\"> + </span> <span id  =  'minusSubtopic_chuzen"+id+"' class  =   'disSubtpc minus' onclick =  \"switchVisbltyQ ( 'plusSubtopic_chuzen"+id+"', 'minusSubtopic_chuzen"+id+"', 'chooseSelectedTpc"+id+"') \"> - </span> <span>Select Subtopic</span> </h4> <div class = 'subtopicttle' id = 'chooseSelectedTpc"+id+"'> </div> </div> </div> </div> </div> ";
        }
    }


 
	function showValuesTimtable(par_1,par_2,par_3){
	   subject_id = par_1;
	   t_schulname = par_2;
	   t_rname = par_3;

	    
	    //class class Level ex form1 
	      classLevel = '';
		   var WhichClas = document.querySelectorAll('.WhichClas');

		    var clas = [].map.call(WhichClas, function(elem){
			  return elem.id;  
			});



			for (var i = 0; i < clas.length; i++) {
				 classLevel +=  _(clas[i]).value+',';
			}
		    
		     
		     //console.log( classLevel);


		    if(classLevel != ""){
		        classLevel;
			}
		//END class class Level ex form1

	 

	    //class categories ex form1 A 
		   classcategory = '';
		   var WhichCategor = document.querySelectorAll('.WhichCategor');

		    var Ca = [].map.call(WhichCategor, function(elem){
			  return elem.id;  
			});



			for (var i = 0; i < Ca.length; i++) {
				 classcategory +=  _(Ca[i]).value+',';
			}
		     
		     // console.log(classcategory);

		    if(classcategory != ""){
		        classcategory;
			}
	    //END class categories ex form1 A



	    //class dateformat 
		    date_timetable = '';
		    var datefortymtable = document.querySelectorAll('.datefortymtable');

		    var date_timtable = [].map.call(datefortymtable, function(elem){
			  return elem.id;  
			});



			for (var i = 0; i < date_timtable.length; i++) {
				date_timetable +=  _(date_timtable[i]).value+',';
			}
		     
		    // console.log(date_timetable);
	        
		    if(date_timetable != ""){
		        date_timetable;
			}
	    //END  dateformat



	    //class startperiod 
		    start_classprd = '';
		    var startclassperiod = document.querySelectorAll('.startclassperiod');

		    var start_clasperiod = [].map.call(startclassperiod, function(elem){
			  return elem.id;  
			});


			for (var i = 0; i < start_clasperiod.length; i++) {
				start_classprd +=  _(start_clasperiod[i]).value+',';
			}
		     
		    // console.log(start_classprd);

		    if(start_classprd != ""){
		        start_classprd;
			}
	    //END  dateformat


	    //class end Period 
		    End_classprd = '';
		    var Endclassperiod = document.querySelectorAll('.Endclassperiod');

		    var end_classperiod = [].map.call(Endclassperiod, function(elem){
			  return elem.id;  
			});



			for (var i = 0; i < end_classperiod.length; i++) {
				End_classprd +=  _(end_classperiod[i]).value+',';
			}
		     
		   // console.log(End_classprd);

		    if(End_classprd != ""){
		        End_classprd;
			}
	    //END  dateformat


        //class subject choose 
            tym_selectTopic = '';
            var tymtable_selectTopic = document.querySelectorAll('.tymtable_selectTopic');

            var tymselectTopic = [].map.call(tymtable_selectTopic, function(elem){
              return elem.id;  
            });



            for (var i = 0; i < tymselectTopic.length; i++) {
                tym_selectTopic +=  _(tymselectTopic[i]).value+',';
            }
             
           console.log(tym_selectTopic);

            if(tym_selectTopic != ""){
                tym_selectTopic;
            }
        //END  subject choose 




        //   //class subtopicchoose   ***  SCRIPT! WORK
            //          tym_selectsubTopic_ID = '';
		    //    lasthash              = '';

		    var subtoptc_checkbox = document.querySelectorAll('.subtoptc_checkbox');
           

            for (var i = 0; i < subtoptc_checkbox.length; i++) {

            	console.log(subtoptc_checkbox[i])

                // if (subtoptc_checkbox[i].checked){
                //     lasthash +=  subtoptc_checkbox[i].value+'_';
                    

                // }
            }


			   //          //new idea
			   //             // 1. select all parent div of subtopic
			   //             // 2. count subtopic of parent div
			   //             // 3. chek how many sub topic selected each parent div 
			   //             // 4. at each parent div of put coma
			   //             // 5. conguraturation
			   //             // MISSION COMPLETED



			   //             // subtopicttle -> parenTclass ;

			   //             var subtopicttle = document.querySelectorAll('.subtopicttle');
			                    
			   //              selectorx = '';
			   //              var subtpc_id = [].map.call(subtopicttle, function(elem){
			   //                  return elem.id;  
			   //              });
			               
			   //              console.log('this is id '+subtpc_id);
			                
			   //              // subtpc_id.forEach(function(parent_id,index){
			   //              //     chidren_arr = _(parent_id).children;
			                     
			   //              //     chidren_arr.forEach(function(children_id){
			   //              //         chidren_id2 = _(children_id).children;
			   //              //         console.log(chidren_id2);
			   //              //      });
			   //              // });

			           
			   //               vv = '';
			   //               elem = [];
			   //              for (var i = 0; i < subtpc_id.length; i++) {
			                    
			   //                  arr = _(subtpc_id[i]).children;
			                   
			   //                 chi_arr =  _(arr[i]).children;
			   //                  // var selectorx = [].slice.call(arr);
			   //                  // vv = elem.push(arr)
			   //                  //chidle =  document.querySelectorAll(_());
			   //                   console.log(chi_arr);
			   //              }


			   //              console.log(vv);

			               
			   //              // for (var z = 0; z < selectorx.length; z++) {
			   //                  //    console.log(selectorx[z]);
			   //                  // }


			   //              // for (var i = 0; i <subtpc_id.length; i++) {
			   //              //    subtpc_id[i].
			   //              // }


			   //             // for (var i = 0; i < subtopicttle.length; i++) {
			   //             //     subtopicttle[i]
			   //             // }


			           
                // //         tym_selectsubTopic_ID = lasthash.slice(0,-1)+'.';

		         // //    if(tym_selectsubTopic_ID != ""){
		        // //        console.log(tym_selectsubTopic_ID);
		 	    // // }
	    //   //END  subtopic choose 

      
	    url       = 'insidefunc.php';
		adiv      = 'neResult';
		
        // Check On 'TimeTable Composer' insidefunc.php
        parameter = 'subject_id='+subject_id+'&&t_schulname='+t_schulname+'&&t_rname='+t_rname+'&&classLevel='+classLevel+'&&classcategory='+classcategory+'&&date_timetable='+date_timetable+'&&start_classprd='+start_classprd+'&&End_classprd='+End_classprd+'&&tym_selectTopic='+tym_selectTopic;
	    findAcc(adiv,url,parameter);
    }
//---------------------------------END: Teacher Time Table------------------------//




// Syylubass Subtopic Cover
	function tick_coveredTopic(arg,arg_1,arg_3){
		var id_value  =  _(arg).value;
		var id_disp    =  _(arg);
		var id_dis    =  arg_1;
		var coverd    =  _(arg_3);


		id_disp.style.display= "none";
		coverd.innerHTML = "<i class = 'fa fa-check'></i>";

		url   =   'insidefunc.php';
		adiv  =  'coco';
		parameter= 'id_value='+id_value+'&&id_dis='+id_dis;

		findAcc(adiv,url,parameter);
	}
//END: Syylubass Subtopic Cover

	
//navigation side navigation/
var kaz = _('kaz');
var nav_hover    =   _('nav_hover');
var nav_open     =   _('sid_nav_open');
var navtwo       =   _('navtwo');
var navOne       =   _('navOne');
var nav_close    =   _('sid_nav_close');
var sid_One      =   _('side_One');
var sid_two      =   _('side_two');
var n_ico        =   _('n_ico');
var logo         =   _('logo');
var input_Top_header =  _('input_Top_header');
var itemMore      =  _('itemMore');    // itemtwo sideNavigation page.php line 75
var itemBoxed     =  _('itemBoxed'); 

var itemChangeDot  =  _('itemChangeDot');
var top_header     =  _('top_header');
var H_triangle     =  _('H_triangle');
var mainWraper     =  _('mainWraper');
   
// var for  profile upload cover & close page.hp line 188
var cover_camera_prof    = _('cover_camera_prof');
var clos_cover_prof      = _('clos_cover_prof');
var cover_uploads        = _('cover_uploads');	
var bellNotification     = _('bellNotification');
var displaySeachresult   = _('displaySeachresult');
var bellNotification     = _('bellNotification');


var lecture_schul_tich = _('lecture_schul_tich');
   
  

// var b = $('#tmywall');
// console.log(b);

	

	

// var value = b('#techer_schulname').value;

// b('#nextclick').onclick = function(){
//    alert('value');
// }

// b.init.onclick = function(){
// 	alert($(this).class());
// }

//  $$().prototype.simplealert = function(){
//  	$()
//  }


// $$().register().submit;




cover_camera_prof.onmouseover = function(){
    cover_uploads.style.width = '17.6%';
    cover_uploads.style.display = 'block';
};

cover_camera_prof.onmouseout =function(){
    cover_uploads.style.width = '10%';
    cover_uploads.style.display = 'none';
};

    if(clos_cover_prof != null){

        clos_cover_prof.onmouseover = function(){
            cover_close.style.width = '17.6%';
            cover_close.style.display = 'block';
        };

        clos_cover_prof.onmouseout =function(){
            cover_close.style.width = '10%';
            cover_close.style.display = 'none';}
	}

// open div navigation
nav_close.onclick = function (){
    sid_One.style.width      =  "4%";
    sid_two.style.width      =  "96%";
	top_header.style.width   =  "96%";
	H_triangle.style.marginTop = "-27%";
    nav_open.style.display   =  "block";
    nav_close.style.display  =  'none';
    navtwo.style.display     =  'block';
	navOne.style.display     =  'none';
	itemMore.style.display     =  'block';
	itemBoxed.style.display     =  'block';
	itemChangeDot.style.display     =  'none';
	mainWraper.style.marginTop    = '5.3%';
	bellNotification.style.marginTop    = '5.1%';
	shopcartBell.style.marginTop    = '5.1%';
    displaySeachresult.style.marginTop = '4%';
};

// close div navigation
nav_open.onclick = function (){
    sid_One.style.width      =  "16%";
    sid_two.style.width      =  "84%";
    nav_open.style.display   =  "none";
	top_header.style.width   =  "84%";
    nav_close.style.display  =  'block';
    navtwo.style.display     =  'none';
	navOne.style.display     =  'block';
    itemMore.style.display     =  'none';
	itemBoxed.style.display     =  'none';
	itemChangeDot.style.display     =  'block';
	mainWraper.style.marginTop    = '6.0%';
	bellNotification.style.marginTop    = '6%';
	shopcartBell.style.marginTop    = '6%';
	displaySeachresult.style.marginTop    = '5.5%';
};

	
function mouse_enter(args,argz){
	var arg = _(args);
	var nav_hova= _(argz);
	arg.style.display = "block";
	nav_hova.style.display = "block";
}

function mouse_leave(args,argz){
	var arg = _(args);
	var nav_hova= _(argz);
	arg.style.display = "none";
	nav_hova.style.display = "none";
}
	
//subject lecture
function swictVisibility(){
    //code
	var topic_checkBox =  _('topic_checkBox');
	
	if (getComputedStyle(topic_checkBox).display == 'none') {
            topic_checkBox.style.display = 'block';
    }else if(getComputedStyle(topic_checkBox).display == 'block'){
         topic_checkBox.style.display = 'none';
	}
}

function swicthVisibility(arg) {
	var par =  _(arg);

	if (getComputedStyle(par).display == 'none') {
            par.style.display = 'block';
    }else if(getComputedStyle(par).display == 'block'){
         par.style.display = 'none';
	}

	// var c = $$('#'+arg);
	// $$().log(arg);

	// if (c.element != null) {
	// 	var cn = c.class();
	// 	*
	// 	hide element args are time/millseconds
		
	// 	$$('.'+cn).hide();
	// 	if(c.element.display === 'none'){
	// 		c.show(200);
	// 	}
	// }
}
	
	function blurChar(args) {
	    //code
		
		var par =  _(arg);
		
		par.style.opacity = '';
		par.style.cssText="opacity:3."+opacityPercent;
	}
	
	function hideshow(d) {
	    //code
	    var divx = _(d);
		var divs = ['upload_photo_qstn_exam',
					'upload_photo_answ',
					'upload_photo_A',
					'upload_photo_B',
					'upload_photo_C',
					'upload_photo_D',
					'mywall',
					'check_covered_topic_teacher',
					'parentsChember',
					'Result',
					'timetable',
					'Stictix',
					'cv',
					'use_info',
					'examscompose',
					'teachersProfile',
					'development',
					'extrathing',
					'noticsBoard'					
				];
	   
		    for (var i = 0; i < divs.length; i++) {
	           //code
	       		if (divx  != _(divs[i])){
				  _(divs[i]).style.display = 'none';
	            }
	        }
			divx.style.display = 'block';    
	}


	function top_headerhideshow(d) {
        //code
        var divx = _(d);
		var divs = ['displaySeachresult',
					'shopcartBell',
					'bellNotification',
					'topHeaderMor',
					'topHeaderMore'					
				];
       
	    for (var i = 0; i < divs.length; i++) {
           //code
       		if (divx  != _(divs[i])){
			  _(divs[i]).style.display = 'none';
            }
        }
		divx.style.display = 'block';    
    }

    
	var idContent = document.querySelectorAll("div.ContentDiv");
	   var ids = [].map.call(idContent, function(elem) {
	   return elem.id;  
	});

	

	function display(d){
	    var divx = _(d);
	    var divs = ids;

	    for(var i = 0; i < divs.length; i++){
    	  	if(divs != _(divs[i])){
    	  		_(divs[i]).style.display = "None";
    	  	}
	    }
	    divx.style.display = 'block'; 
	}

    function changeHeader(TopicHeader,subject_title,ContentHeader){

    	var topicHeader  =  _(TopicHeader);
	    var subject_title  =  subject_title;
	    var ContentHeader  =  ContentHeader;

    	if(TopicHeader == 'TopicHeader'){
	        topicHeader.innerHTML = subject_title;
	        display(ContentHeader);
        }

        if(TopicHeader == 'tTopicHeader' ){
	        topicHeader.innerHTML = subject_title;
	        display(ContentHeader);
        }

        if(TopicHeader == 'TopicHeader_ab'){
          console.log(TopicHeader);

          topictitle = _('topictitle');
          tpcinstr = _('tpcinstr');

          topictitle.value = subject_title;
          tpcinstr.value = ContentHeader;
        }

    }

    function topicContent(TopicHeader,subject_title,ContentDiv){
    	var TopicHeader  =  _(TopicHeader);
    	var subject_title  =  subject_title;
    	var ContentHeader  =  ContentHeader;
        TopicHeader.innerHTML = subject_title ;
        swicthVisibility(ContentDiv);
    }

	function panel_hideshow(d) {
        //code
        var divx = _(d);
		var divs = ['panel1',
					'panel2',
					'panel3',
					'panel4',
					'panel5'					
				];
       
	    for (var i = 0; i < divs.length; i++) {
            //code
       		if (divx  != _(divs[i])){
			  _(divs[i]).style.display = 'none';
            }
        }
		divx.style.display = 'block';    
    }

    function tp_hideshow(d) {
        //code
        var divx = _(d);
		var divs = ['tmywall',
					'check_covered_topic_teacher',
					'parentsChember',
					'Result',
					'timetable',
					'Stictix',
					'cv',
					'use_info',
					'examscompose'
					];
       
	   for (var i = 0; i < divs.length; i++) {
        //code
        
		if (divx  != _(divs[i])){

			_(divs[i]).style.display = 'none';
            }
        }
		divx.style.display = 'block';    
    }
    
    function Ent_hideshow(d) {
        //code
        var divx = _(d);
		var divs = ['myBusness',
                    'tmywall',
					'check_covered_topic_teacher',
					'parentsChember',
					'Result',
					'timetable',
					'Stictix',
					'cv',
					'use_info',
					'examscompose'
					];
       
	   for (var i = 0; i < divs.length; i++) {
        //code
        
		if (divx  != _(divs[i])){

			_(divs[i]).style.display = 'none';
            }
        }
		divx.style.display = 'block';    
    }

	function hideshow_mkoa(d) {
        //code
        var divx = _(d);
		var divs = ['wilayaOne',
		            'wilayaTwo',
		            'wilayaThree'
		        ];
       
	    for (var i = 0; i < divs.length; i++) {
           //code
       		if (divx  != _(divs[i])){
			  _(divs[i]).style.display = 'none';
            }
        }
		divx.style.display = 'block';    
    }

    function hideshow_profileUploder(d) {
        //code
        var divx = _(d);
		var divs = ['upload_photo_qstn_exam',
					'upload_photo_answ',
					'upload_photo_A',
					'upload_photo_B',
					'upload_photo_C',
					'upload_photo_D',
		        ];
       
	    for (var i = 0; i < divs.length; i++) {
           //code
       		if (divx  != _(divs[i])){
			  _(divs[i]).style.display = 'none';
            }
        }
		divx.style.display = 'block';    
    }

    function finshng_hideShow(){

	    for (var i = 0; i < divs.length; i++) {
           //code
       		if (divx  != _(divs[i])){
			  _(divs[i]).style.display = 'none';
            }
        }
		divx.style.display = 'block';  
    }
    
    function new_hideshow(d) {
        //code
        var divx = _(d);
		var divs = ['tmywall'];
       
	    for (var i = 0; i < divs.length; i++) {
            //code
        
		    if (divx  != _(divs[i])){
			    _(divs[i]).style.display = 'none';
            }
        }
		divx.style.display = 'block';    
    }

    
    function panelText_hidshow(d) {
        //code
        var divx = _(d);
		var divs = [
		        'panelTex_one',
		        'panelTex_two',
		        'panelTex_three',
		        'panelTex_four'
					];
       
	   for (var i = 0; i < divs.length; i++) {
        //code
        
		if (divx  != _(divs[i])){

			_(divs[i]).style.display = 'none';
            }
        }
		divx.style.display = 'block';    
    }


    function checkbox_register(parone,partwo){
	     first_par = (parone);
	     sec_par = (partwo).value;

	     if(sec_par == ""){
	     	alert("empty");
	     }else if(sec_par == true){
	     	alert("yes");
	     }
    }

	function dispVisibility(par_one,per_tw){
	    //code
		var first_panel =  _(par_one);
		var sec_panel   =  _(per_tw);
		
		first_panel.style.display = "none";
		sec_panel.style.display = "block";
	}

	function membaa_hidshow(d) {
	    //code
	    var divx = _(d);
		var divs = [
		        'news',
		        'Activ',
		        'Popula'
		    ];
	   
	   for (var i = 0; i < divs.length; i++) {
	    //code
	    
		if (divx  != _(divs[i])){

			_(divs[i]).style.display = 'none';
	        }
	    }
		divx.style.display = 'block';    
	}

		
	function memba_hidshow(d) {
	    //code
	    var divx = _(d);
		var divs = [
		        'newst',
		        'Active',
		        'Popular'
		    ];
	   
	   for (var i = 0; i < divs.length; i++) {
	    //code
	    
		if (divx  != _(divs[i])){

			_(divs[i]).style.display = 'none';
	        }
	    }
		divx.style.display = 'block';    
	}

		
	function cheikinput(d,dd){

		var pOne = _(d);
		var ptwo = _(dd);
		
		if(pOne.value == true){
			ptwo.style.display = 'block';
		}
	}

	function openAbsolute(args){
        //code
		var absolut_id = _(args);
		absolut_id.style.display = 'block';
		
    }


	function plusdoc(args,arg2){
	let par_one = _(arg2);

	var absolut_id = _(args);
		absolut_id.style.display = 'block';
		

		if(getComputedStyle(absolut_id).getPropertyValue("height") == '0px'){
			absolut_id.style.height = "80px";
			alert("height 0")
		}
    
   if(getComputedStyle(par_one).display == 'block' ){
     
       par_one.style.display = "none";
     
   }

}
	function openAndvalue(arg,user_id,tcpId,sbtpcId,subject){
	    
		var absolut_id = _(arg);
		absolut_id.style.display = 'block';	

		url = 'insidefunc.php';
        adiv = 'timetable_temprate';
        parameter= 'tcpId='+tcpId+'&&tuser_id='+user_id+'&&sbtpcId='+sbtpcId+'&&tsubject='+subject;
        findVerif(adiv,url,parameter);

        // var reviewNotes =  vyu_ajax( adiv,url, parameter);
        // reviewNotes.ajaxfunction();
	}

	function onlyBigsearch(args,arg,ar){

		var absolut_one = _(args);
		var absolut_tu = _(arg);
		var absolut_thre = _(ar);
		
		absolut_one.style.display = 'block';	
		absolut_tu.style.width = '180%';	
		absolut_thre.style.display = 'none';	
	}

	function quizStart(par_one,per_tw){
	    //code
		var cover_q =  _(par_one);
		var real_quiz =  _(per_tw);
		
		cover_q.style.display = "none";
		real_quiz.style.display = "block";
	}


	function dispVisibility(par_one,per_tw){
	    //code
		var first_panel =  _(par_one);
		var sec_panel   =  _(per_tw);

		first_panel.style.display = "none";
		sec_panel.style.display = "block";
	}

	function closeDiv(args) {
	  var absolut_id = _(args);
	  absolut_id.style.display = 'none';
	}

	function closeDi(args,arg,ar) {
	  var absolut_id = _(args);
	  var abs = _(arg);
	  var ab_tr = _(ar);

	  absolut_id.style.display = 'none';
	  abs.style.display = 'block';	
	  ab_tr.style.width = '70%';	
	}

	function changeHeightslideDown(id,id2,div_ocur){
		let idname = _(id) ;
		   idname2 = _(id2);
		   divEevnt = _(div_ocur);
		  idname.style.display = 'none';
		  idname2.style.display = 'block';
		  divEevnt.style.height = '0px';
		
	}

	function changeHeightslideUp(id,id2,div_ocur){
		let idname = _(id) ;
		   idname2 = _(id2);
		   divEevnt = _(div_ocur);
		  idname.style.display = 'none';
		  idname2.style.display = 'block';
		  divEevnt.style.height = '80px';

	}

	function docchoosen(arg,arg2){
		let div = _(arg) ,div2 = _(arg2);
		div.style.display = "block";
		div2.style.display = "none";
	}


		
	function switchVisbltyQ(pa_one,pa_two,pa_three) {
		
		var chev_one =  _(pa_one);
		var chev_sec =  _(pa_two);
		var mainKnolagde =  _(pa_three);

		 
		
		if (getComputedStyle(chev_sec).display == 'none') {
			chev_one.style.display = 'none';
			chev_sec.style.display = 'block';
			mainKnolagde.style.display = 'block';
			
	    }else if (getComputedStyle(chev_sec).display == 'block') {
		    chev_one.style.display = 'block';
			chev_sec.style.display = 'none';
			mainKnolagde.style.display = 'none';
	    }

	    if(mainKnolagde == 'chooseSelectedTpc'){
	    	mainKnolagde.style.position = 'relative';
	    }
	}


		function switchVisblty_parentChember(pa_one,pa_two,pa_three,parent_id) {
		
		var chev_one =  _(pa_one);
		var chev_sec =  _(pa_two);
		var mainKnolagde =  _(pa_three);
		var  parentId =  parent_id;

		_('datagiven').innerHTML = '".'+ parentId+'."';

        alert(parentId);
		 
		
		if (getComputedStyle(chev_sec).display == 'none') {
			chev_one.style.display = 'none';
			chev_sec.style.display = 'block';
			mainKnolagde.style.display = 'block';
			
	    }else if (getComputedStyle(chev_sec).display == 'block') {
		    chev_one.style.display = 'block';
			chev_sec.style.display = 'none';
			mainKnolagde.style.display = 'none';
	    }

	    if(mainKnolagde == 'chooseSelectedTpc'){
	    	mainKnolagde.style.position = 'relative';
	    }


	    var adiv= 'msgBody';
	    parameter= 'SingleParentChember = SingleParentChember&&parentId='+parentId;
	    url = 'insidefunc.php';
	    findVerif(adiv,url,parameter);
	}


	function displayInterChange(par_one , per_tw){
		//code
		var firstPanel =  _(par_one);
		var secPanel   =  _(per_tw);

		firstPanel.style.width = "65%";
		firstPanel.style.height = "80%";
		firstPanel.style.marginTop = "5%";
	      

		secPanel.style.width = "20%";
		secPanel.style.height = "20%";
		secPanel.style.marginTop = "35%";
	}

    // timetable preview
	    function askteachmQstn(arg,args){
		   	var ask_madam = _('ask_madam');
		   	var allaskedtimetable = _(args);
	        ask_madam.style.width = '30%';
			allaskedtimetable.style.display = 'block';
	    }
	//END : timetable preview
	
	var text_vchart = _('text_vchart');
	var send_vchart = _('send_vchart');

		
	// if(text_vchart != null){
	// 	text_vchart.onmouseover = function(){
	//     send_vchart.style.display = 'block';
	//     }
	// }

	// if (text_vchart != Null){
	//     text_vchart.onmouseout =function(){
	//     send_vchart.style.display = 'none';
	//     }	
	// }


	var postQandAns = _('postQandAns');
	var send_exam = _('send_exam');
	var qstn_exam = _('qstn_exam');
	var typeQn_ans = _('typeQn_ans');
	var ans_qstn = _('ans_qstn');

	postQandAns.onmouseover = function(){
	    send_exam.style.display = 'block';
		 qstn_exam.style.height = '40px';
		 typeQn_ans.style.display = 'block';
		 ans_qstn.style.display = 'block';
    };


	postQandAns.onmouseout =function(){
	    send_exam.style.display = 'none';
		qstn_exam.style.height = '20px';
		typeQn_ans.style.display = 'none';
		ans_qstn.style.display = 'none';
    };

	// on page  
	// input_Top_header.onclick = function(){
	//     input_Top_header.style.width  = "95%";
	// }
		
	//on subject page
	var subjects_books = _('subjects_books');
	var subj_books  = _('subj_books');

	subjects_books.onclick = function(){
	     subj_books.style.display  = 'block';
    };



	// subject lecture absolute
	var ask_madam = _('ask_madam');
	var allasked_qust = _('allasked_qust');
	var searchOnvchart = _('searchOnvchart');
	 
	   
	ask_madam.onmouseover = function(){
	    ask_madam.style.width = '30%';
	    searchOnvchart.style.width = '40%';
    };
		
		
	ask_madam.onmouseout =function(){
	    ask_madam.style.width = '20%';
	    searchOnvchart.style.width = '50%';
    };
	  
	// bookx lecture absolute



	var ask_mada  = _('ask_mada');
	var allasked = _('allasked');
	var searchOnv = _('searchOnv');

	ask_mada.onclick = function(){
	 ask_mada.style.width = '30%';
	 allasked.style.display = 'block';
    };

	ask_mada.onmouseover = function(){
	    ask_mada.style.width = '30%';
	    searchOnv.style.width = '40%';
    };

	ask_mada.onmouseout =function(){
	    ask_mada.style.width = '20%';
	    searchOnv.style.width = '50%';
    };
  
 
  
	  
	//Test/homewoek absolutepage

	var searchQ       =  _('searchQ');
	var QuizDisplay   =  _('QuizDisplay');  //line 380 absolutepg
	var QuizDisplayFromlist      =  _('QuizDisplayFromlist');
	var QuizList      =  _('QuizList');
	var Listresult    =  _('Listresult');
	var searchResultOn   =  _('searchResultOn'); 
	var Goback = _('Goback');
	var Gobackog = _('Gobackog');


	function HomekComp(parOn,parTw) {
	    //code
    	var insideCoverSecond = _(parTw);
    	var insideCoverfirst  =  _(parOn);
    	
    	insideCoverfirst.style.display = 'none';
    	insideCoverSecond.style.display='block';
	}

	function closeDivHomekComp(args) {
	  var absolut_id = _(args);
	  absolut_id.style.display = 'none';
	  insideCoverfirst.style.display = 'block';
	}
	  
	searchQ.onclick= function(){
	searchQ.style.width = '101%';
	searchQ.style.background = 'white';
	//Listresult.style.display  = 'none';
	//SearQresult.style.display = 'block';
	QuizDisplay.style.display = 'none';
	QuizList.style.display = 'none';
	searchResultOn.style.display='block';

	QuizDisplayFromlist.style.display = 'none';
	//		searchResultOn.style.opacity = '1';
	//       searchResultOn.style.transition = "2s";
    };
	  
	Gobackog.onclick = function(){
		QuizDisplay.style.display    = 'block';
		QuizList.style.display       = 'block';
		QuizDisplayFromlist.style.display = 'none';
    };
	  
	Goback.onclick = function(){
		searchResultOn.style.display ='none';
		QuizDisplay.style.display    = 'block';
		QuizList.style.display       = 'block';
		searchQ.style.width = '33%';
		searchResultOn.style.opacity = 1;
	    searchResultOn.style.transition = "opacity .1s";
    };
	  
	var clickableDisable =  _('QuizDisplay'); 
		clickableDisable.onclick= function(){
        };
		  
		  
	function passthrugAbs() {
	   QuizDisplay.style.display = 'none';
	   QuizDisplayFromlist.style.display = 'block';
	}

	//Test/homewoek absolutepage
	  
	// exams lecture absolute
	 var ask_mada_exam = _('ask_mada_exam');
	 var allasked_exam = _('allasked_exam');
	 var searchOnv_exam = _('searchOnv_exam');

	ask_mada_exam.onclick = function(){
	 ask_mada_exam.style.width = '30%';
	 allasked_exam.style.display = 'block';
    };

	ask_mada_exam.onmouseover = function(){
	    ask_mada_exam.style.width = '30%';
	    searchOnv_exam.style.width = '40%';
    };

	ask_mada_exam.onmouseout =function(){
	    ask_mada_exam.style.width = '20%';
	    searchOnv_exam.style.width = '50%';
    };
// post area on pag.ph line 228
// var post_text = _('post_text');
// var post_option = _('post_option');
// var everyone = _('everyone');

// everyone.onclick =function(){
//   _(Nav_everyone).style.display = 'block';
// }
  
// post_text.onclick =function(){
//     post_option.style.display = 'block';
// }
