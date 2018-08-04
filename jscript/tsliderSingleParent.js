
// /////////////////sliding Content////////////////////

// function switchVisblty_parentChember(pa_one,pa_two,pa_three,parent_id,'allParents'){
// 	('ParentsWrap','parentChat','parebt','$p_id')
   

//     var chev_one =  _(pa_one);
// 		var chev_sec =  _(pa_two+parent_id);
// 		var mainKnolagde =  _(pa_three);
// 		var  parentId =  parent_id;
  


//     if (getComputedStyle(chev_sec).display == 'none') {
// 			chev_one.style.display = 'none';
// 			chev_sec.style.display = 'block';
// 			mainKnolagde.style.display = 'block';
			
// 	}else if (getComputedStyle(chev_sec).display == 'block') {
// 		    chev_one.style.display = 'block';
// 			chev_sec.style.display = 'none';
// 			mainKnolagde.style.display = 'none';
//     }

//     q_rplyid = msj_id; 
//  	answerHolder = 'answerHolder'+msj_id;
//     textId = 'wallquestionAnswer'+msj_id;
//     theans =  'theanswer'+msj_id;

    
//     document.getElementById(textId).style.display = "none";
//     var post = Exile('#'+textId),
//         post_holder = Exile('#'+answerHolder),
//         post_data = post_holder.html(),

//         classIncss_theanswer = '';
      



//     temp = "<div class ='ParentsWrap' id = 'parentChat' >\n" +
// 			"\t\t\t\t\t\t <div class = 'MsgContainer chatBox'>\n" +
// 			"\t\t\t\t\t\t   <div class = 'back' onclick=\"switchVisbltyQ('ParentsWrap','parentChat','parebt')\">Go Back </div>\n" +
// 			"\t\t\t\t\t\t 			    <div class='chatContainer'>\n" +
// 		    "\t\t\t\t\t\t 				        <div class = 'chatheader divdivision' >\n" +
// 			"\t\t\t\t\t\t 			            <div class='introHeader'>\n" +
// 			"\t\t\t\t\t\t 			                <span class='parentTitle'>Parent</span><span class='pname'>Nehemia Daud Mwansasu</span>\n" +
// 			"\t\t\t\t\t\t 			                <div ><a href = ''><span>Moses Mwakatobe :</span><span style='font-style:italic;'>Form 1 B ,</span></a></div>\n" +
// 			"\t\t\t\t\t\t 			                <div ><a href = ''><span>Moses Mwakatobe Mwansasu :</span><span style='font-style:italic; '>Form 1 B ,</span></a></div>\n" +
// 			"\t\t\t\t\t\t 			                <div ><a href = ''><span>Moses Mwakatobe :</span><span style='font-style:italic;'>Form 1 B ,</span></a></div>\n" +
// 			"\t\t\t\t\t\t 			            </div>\n" +
// 			"\t\t\t\t\t\t 			        </div>\n" +
//             "\t\t\t\t\t\t \n" +
// 			"\t\t\t\t\t\t 			        <div class = 'ContainerChat'>\n" +
// 			"\t\t\t\t\t\t \n" +

// 			"\t\t\t\t\t\t 			            <div class=xoverflow>\n" +
//             "\t\t\t\t\t\t \n" +
// 			"\t\t\t\t\t\t 			                <div class='chatholder'>\n" +
// 			"\t\t\t\t\t\t 			                    <div class='divcirlce'>\n" +
//             "\t\t\t\t\t\t \n" +
// 			"\t\t\t\t\t\t 			                        <div class = 'cicle'></div>\n" +
// 			"\t\t\t\t\t\t 			                    </div>\n" +
// 			"\t\t\t\t\t\t 			                    \n" +
// 			"\t\t\t\t\t\t 			                    <div class ='textChat'>\n" +
// 			"\t\t\t\t\t\t 			                    \n" +
// 			"\t\t\t\t\t\t 			                        <p> hellow teacher</p>\n" +
// 			"\t\t\t\t\t\t 			                    </div>\n" +
// 			"\t\t\t\t\t\t 			                    <div class = 'clear'></div>\n" +
// 			"\t\t\t\t\t\t 			                </div>\n" +
//             "\t\t\t\t\t\t \n" +
// 			"\t\t\t\t\t\t 			                <div class='chatholder'>\n" +
// 			"\t\t\t\t\t\t 			                    \n" +
// 			"\t\t\t\t\t\t 		                        <div class='divcirlce rightdiv' style ='float:right'>\n" +
// 			"\t\t\t\t\t\t 		                            <div class = 'cicle'></div>\n" +
// 			"\t\t\t\t\t\t 		                        </div>\n" +
// 			"\t\t\t\t\t\t 		                        \n" +
// 			"\t\t\t\t\t\t 		                        <div class = 'textChat' style ='float:right'>\n" +
// 			"\t\t\t\t\t\t 		                            <p>asdfsafafjkalfaf akjsfakljfafa fkaljfak fakj fka</p> \n" +        
// 			"\t\t\t\t\t\t 		                        </div>\n" +
// 			"\t\t\t\t\t\t 		                    \n" +
// 			"\t\t\t\t\t\t 		                        <div class ='clear'></div>\n" +
// 			"\t\t\t\t\t\t 			                </div>\n" +
//             "\t\t\t\t\t\t \n" +
// 			"\t\t\t\t\t\t 			                <div class='chatholder'>\n" +
// 			"\t\t\t\t\t\t 		                        <div class='divcirlce'>\n" +
// 			"\t\t\t\t\t\t 		                            <div class = 'cicle'></div>\n" +
// 			"\t\t\t\t\t\t 		                        </div>\n" +
// 			"\t\t\t\t\t\t 		                        \n" +
// 			"\t\t\t\t\t\t 		                        <div class ='textChat'>\n" +
// 			"\t\t\t\t\t\t 		                            <p>hellow teacher</p>\n" +                
// 			"\t\t\t\t\t\t 		                        </div>\n" +
// 			"\t\t\t\t\t\t 		                        <div class = 'clear'></div>\n" +
// 			"\t\t\t\t\t\t 			                </div>\n" +
// 			"\t\t\t\t\t\t 			           </div>\n" +
// 			"\t\t\t\t\t\t 			        </div>\n" +
// 			"\t\t\t\t\t\t 			        \n" +
// 			"\t\t\t\t\t\t 			        <div class='textEditor'>\n" +
// 			"\t\t\t\t\t\t 				        <div class = 'down_Document' id = 'textDownload'>\n" +
// 			"\t\t\t\t\t\t 				            <div  class ='potea' onclick = \"closeDiv('textDownload');\">X</div>\n" +
//             "\t\t\t\t\t\t \n" +
// 			"\t\t\t\t\t\t 				            <div class= 'thedoc'  onclick =\"docchoosen('doc_slideBox','textDownload')\">Test.txt</div>\n" +
// 			"\t\t\t\t\t\t 				            <div class='thedoc' onclick =\"docchoosen('doc_slideBox','textDownload')\">Assiment</div>\n" +
// 			"\t\t\t\t\t\t 				            <div class='thedoc' onclick =\"docchoosen('doc_slideBox','textDownload')\">Photo</div>\n" +
// 			"\t\t\t\t\t\t 				        </div>\n" +
//             "\t\t\t\t\t\t                         \n" +
// 			"\t\t\t\t\t\t 				        <div id ='doc_slideBox' class ='doc_slideBox'>\n" +
// 			"\t\t\t\t\t\t 				         <div id = 'slideDown' class = 'openAndClose'  onclick = \"changeHeightslideDown('slideDown','slideUp','doc_slideBox')\">  <i class = 'fa fa-angle-down'></i></div>\n" +
//             "\t\t\t\t\t\t \n" +
//             "\t\t\t\t\t\t \n" +
// 			"\t\t\t\t\t\t 				         <div id = 'slideUp' class = 'openAndClose'   onclick = \"changeHeightslideUp('slideUp','slideDown','doc_slideBox')\"> <i class = 'fa fa-angle-up'></i></div>\n" +
//             "\t\t\t\t\t\t \n" +
//             "\t\t\t\t\t\t \n" +
// 			"\t\t\t\t\t\t 				        	<div  id = 'doc_title' class = 'doc_title'>\n" +
//             "\t\t\t\t\t\t \n" +
// 			"\t\t\t\t\t\t 				        	    <div class='doc_discr'>\n" +
// 			"\t\t\t\t\t\t 				        	     	<span>Test Name</span>\n" +
// 			"\t\t\t\t\t\t 				        	     	<span>Form 3 B</span>\n" +
// 			"\t\t\t\t\t\t 				        	     	<span>created: 27/2/2008</span>\n" +
// 			"\t\t\t\t\t\t 				        	    </div>\n" +
// 			"\t\t\t\t\t\t 				            </div>\n" +
//             "\t\t\t\t\t\t \n" +
// 			"\t\t\t\t\t\t 				            <div  id = 'doc_title' class = 'doc_title'>\n" +
//             "\t\t\t\t\t\t \n" +
// 			"\t\t\t\t\t\t 				        	    <div class='doc_discr'>\n" +
// 			"\t\t\t\t\t\t 				        	     	<span>Test Name</span>\n" +
// 			"\t\t\t\t\t\t 				        	     	<span>Form 3 B</span>\n" +
// 			"\t\t\t\t\t\t 				        	     	<span>created: 27/2/2008</span>\n" +
// 			"\t\t\t\t\t\t 				        	    </div>  \n" +
// 			"\t\t\t\t\t\t 				        	</div>\n" +
//             "\t\t\t\t\t\t                               \n" +
// 			"\t\t\t\t\t\t 				        </div>\n" +
//             "\t\t\t\t\t\t \n" +
// 			"\t\t\t\t\t\t 	                    <div class='chatholder'>\n" +
// 			"\t\t\t\t\t\t 	                            <div class='divcirlce'>\n" +
// 			"\t\t\t\t\t\t 	                                <div class = 'cicle' id = 'chehh' onclick= \"plusdoc('textDownload','doc_slideBox');\">+</div>\n" +
// 			"\t\t\t\t\t\t 	                            </div>\n" +
// 			"\t\t\t\t\t\t 	                            \n" +
// 			"\t\t\t\t\t\t 	                            <div class = 'textChat'>\n" +
// 			"\t\t\t\t\t\t 	                                <textarea  autofocus='none'   placeholder = 'write something' name='' id='' cols=''rows=''></textarea>      \n" +
// 			"\t\t\t\t\t\t 	                            </div>\n" +
// 			"\t\t\t\t\t\t 	                            <div class = 'clear'></div>\n" +
// 			"\t\t\t\t\t\t 	                    </div>\n" +
// 			"\t\t\t\t\t\t 			        </div>\n" +
// 			"\t\t\t\t\t\t 			    </div>\n" +
// 			"\t\t\t\t\t\t 			</div>\n" +
// 			"\t\t\t\t\t\t 		</div>";

//        // document.getElementById(theans).style.display = "block";


//       SingleParentlLive()
   
// }






// var lastEventId = '';

// function SingleParentlLive() {
  
//  SingleParentlLive();

//(pa_one,pa_two,pa_three,parent_id,'allParents')



function _(elem){
    return  document.getElementById(elem);
}

let switch_parentChat = function(a,b,c,d,e,f){
    let  tmp = {};
         tmp.p_wrap = a;
         tmp.p_chat = b;
         tmp.parebt = c;
         tmp.p_id   = d;
         tmp.p_allp = e;
         tmp.p_uId  = f;


    
  tmp.test = function(){


  	console.log(this.p_chat+tmp.p_id);

  	if(_(this.p_chat+tmp.p_id)){
        console.log('it ther '+this.p_chat+tmp.p_id);
    }else{
    	console.log('upsernt');
    }
  }

    tmp.switchDivs = function(){
        //switch to different div on paarent
          
          
         

        console.log()
    	if (getComputedStyle(_(this.p_chat)).display == 'none') {
			_(this.p_wrap).style.display = 'none';
			_(this.p_chat).style.display = 'block';
			// _(this.parebt).style.display = 'block';
			
		}else if (getComputedStyle(_(tmp.p_chat)).display == 'block') {
		    _(tmp.p_wrap).style.display = 'block';
			_(tmp.p_chat+tmp.p_id).style.display = 'none';
			// _(tmp.parebt).style.display = 'none';
	    }
    }



    tmp.parentLivChat =  function(){
        
        var post_holder = $$(tmp.p_allp);
	    if(user.user !== '' &&
			post_holder.element !== null){

	         var post_data = post_holder.html();
	         sasha.onMessage({
				 meth:'post',
				 url:'teacherLive.php',

	            // user_id:'$user_id',
	            // username:'$username',
	            // profile:'$profile',
	            // frompage:'$frompage',
	            // status:'b',
	            // subjectName:'$subj',
	            // subject_id:'$subject_id',
	            // basedSubj:'$basedSubj',
	            // schoolname:'$schoolname', 
	            // region:'$teacher_rname', 
	            // levelOrStandard:'$teacher_lev'
				
				 query:'action=SingleParentChat&status=teacher&subjectId='+user.subject_id+'&user_id='+ user.user_id+'&schoolname='+user.schoolname+'&region='+user.region+'&levelOrStandard='+user.levelOrStandard+'&p_accId='+tmp.p_id+'&p_rcvId='+tmp.p_uId ,
				 success:function (d) {
	                 // console.log(d);
	                var r = sasha.data(d),
	                id = r.id;

	                if(r.status && lastEventId !== id){
	                	post_holder.html(r.data);
					}

					// console.log(lastEventId);

	                lastEventId = id;

	            }
			});
	     }

    }




    tmp.all =  function(){
      	  tmp.switchDivs()
      	  +tmp.parentLivChat();
      	   //alert("all")
    }

    return tmp;
}

//let parentChat = switch_parentChat('ParentsWrap','parentChat','parebt','$p_id','allParents','$p_uId');
    
   // parentChat.parentLivChat();