  _ = (x) => document.getElementById(x); 


(function($,s){

    //post Wall...
    var q = $('#sendQstn');
    q.on('click', function () {
        var q_section = $('#SECTION_qstnwall'),
        q_donedate  = $('#dateqstnDonewal'),
        q_sculname  = $('#qstnFromSchoolname'),
        subjectName = $('#subjectnameQstnWall'),
        q_topicname = $('#topicnameQstnwal'),
        q_subtopic  = $('#subtopicQstnwall'),
        q_no        = $('#Qn_selectNoQstnwall'),
        q_nocolum   = $('#Qn_selectNoColomQstnwall'),
        q_body      = $('#mainqstnwall'),
        matchItem_a = $('#match_a'),
        matchItem_b = $('#match_b'),
        matchItem_c = $('#match_c'),
        

        post_holder = $('#subjectWallQstn'),
        post_data = post_holder.html(),
        // previledge = $('#Nav_everyone').value(),

        
        temp =      "<div class = 'qstnAndAnsBody'>\n" +
                    "<div class='anseQstnDiv'>\n" +
                    "\t\t\t\t\t\t         <div class='despl'>\n" +
                    "\t\t\t\t\t\t         <div class='searchprof'>\n" +
                    "\t\t\t\t\t\t         <div class='profImg'>\n" +
                    "\t\t\t\t\t\t                <img title='Patent Profile' src='"+user.profile+"'>\n" +
                    "\t\t\t\t\t\t                                  </div>  \n" +
                    "\t\t\t\t\t\t                           </div>\n" +
                    "\t\t\t\t\t\t                            <div class='detdispl'>\n" +
                    "\t\t\t\t\t\t                                <div class='firsdeta'>\n" +
                    "\t\t\t\t\t\t                                  <span class='name'>"+user.username+"</span>\n" +
                    "\t\t\t\t\t\t                                  <span class='school'>"+user.schoolname+"</span>\n"+
                    "\t\t\t\t\t\t                                  <span class='pozision'>"+user.basedsubject+"</span>\n" +
                    "\t\t\t\t\t\t                                </div>\n" +
                    "\t\t\t\t\t\t                              <div class='qstntype'>kiswahiliQuestion</div>\n" +
                    "\t\t\t\t\t\t                            </div>\n" +
                    "\t\t\t\t\t\t\n" +
                    "\t\t\t\t\t\t                             <div class='qastbody'>\n" +
                    "\t\t\t\t\t\t                                <div class='qstn'>\n" +
                    "\t\t\t\t\t\t                                        <div class='qstnNo'>\n" +
                    "\t\t\t\t\t\t                                           <span class='No'>"+q_no.value()+"</span><span class='ColomNo'>"+q_nocolum.value()+"</span>\n"+
                    "\t\t\t\t\t\t                                        </div>\n" +
                    "\t\t\t\t\t\t\n" +
                    "\t\t\t\t\t\t                                        <div class='qstnBody'>"+q_body.value()+" +</div>\n" +
                    "\t\t\t\t\t\t\n" +
                    "\t\t\t\t\t\t                                      <div class='matchitem'>\n" +
                    "\t\t\t\t\t\t                                            <div class='matchs'>\n" +
                    "\t\t\t\t\t\t                                                <div class='qstnNo'>\n" +
                    "\t\t\t\t\t\t                        <span class='ColomNo'>A: </span>\n"+
                    "\t\t\t\t\t\t                        </div>\n"+
                    "\t\t\t\t\t\t                        <div class='matchAns'>"+matchItem_a.value()+"</div>\n" +
                    "\t\t\t\t\t\t                                            </div>         \n" +
                        
                    "\t\t\t\t\t\t                                           <div class='matchs'>\n" +
                    "\t\t\t\t\t\t                                                <div class='qstnNo'>\n" +
                    "\t\t\t\t\t\t                            <span class='ColomNo'>B: </span>\n" +
                    "\t\t\t\t\t\t                                            </div>         \n" +
                    "\t\t\t\t\t\t                        <div class='matchAns'>"+matchItem_b.value()+"</div>\n" +
                    "\t\t\t\t\t\t                                            </div>         \n" +

                    "\t\t\t\t\t\t                                            <div class='matchs'>\n" +
                    "\t\t\t\t\t\t                                                <div class='qstnNo'>\n" +
                    "\t\t\t\t\t\t                          <span class='ColomNo'>C: </span>\n" +
                    "\t\t\t\t\t\t                         </div>\n" +
                    "\t\t\t\t\t\t                        <div class='matchAns'>"+matchItem_c.value()+"</div>\n" +
                    "\t\t\t\t\t\t                                            </div>\n" +
                    "\t\t\t\t\t\t                                        </div>\n" +
                    "\t\t\t\t\t\t                                        <div id='yourAnse' class='yourAnse'>\n" +
                    "\t\t\t\t\t\t                                             <h3>Answer</h3>\n" +
                    "\t\t\t\t\t\t                                             <p>36</p>\n" +
                    "\t\t\t\t\t\t                                        </div>\n" +
                                                            
                    "\t\t\t\t\t\t                                        <div class='AnswerHer'>\n" +
                    "\t\t\t\t\t\t                                             <span class='neckedBoton viewAnswer' onclick=\"swicthVisibility('yourAnse.$wallsubjectid.');\">View Answer</span> \n" +
                                                                
                    "\t\t\t\t\t\t                                            <span class='neckedBoton viewComment' onclick=\"swicthVisibility('viewAnsComment wallsubjectid');\">View comments</span>\n" +
                    "\t\t\t\t\t\t                                        </div>\n" +
                    "\t\t\t\t\t\t                                </div>\n" +
                    "\t\t\t\t\t\t                             </div>\n" +
                    "\t\t\t\t\t\t                        </div>\n" +
                    "\t\t\t\t\t\t                      <div class='herToAns'>\n" +
                    "\t\t\t\t\t\t                          <div class='ansHeader'>ANSWER</div>\n" +
                    "\t\t\t\t\t\t                         <div class='answi'>\n" +
                    "\t\t\t\t\t\t                            <textarea placeholder='Anser Here'></textarea>\n" +
                    "\t\t\t\t\t\t                         </div>\n" +
                    "\t\t\t\t\t\t                       <span class='clickedBoton sendHer'>SEND ANSWER</span>\n" +
                    "\t\t\t\t\t\t                    </div>\n" +
                    "\t\t\t\t\t\t                    </div>\n" +
                    "\t\t\t\t\t\t                </div>"
        ;
            
        if(!q_body.empty()){
            //sasha
            s.response({
                url:'post.php',
                meth:'post',
                // query: 'action=post_qstn&user=' + user.user_id + '&section=' + q_section.value() + '&q_donedate=' + q_donedate.value() + '&q_sculname=' + q_sculname.value() + '&subjectName=' + subjectName.value() + '&q_topicname=' + q_topicname.value() + '&q_subtopic=' + q_subtopic.value() + '&q_no=' + q_no.value() + '&q_nocolum=' + q_nocolum.value() + '&q_body=' + q_body.value() + '&matchItem_a=' + matchItem_a.value() + '&matchItem_b=' + matchItem_b.value() + '&matchItem_c=' + matchItem_c.value() + '&subjName=' + user.subjectName + '&subject_id=' + user.subject_id + '&status=' + user.status ,
                query: 'action=post_qstn&user='+user.user_id+'&section='+q_section.value()+'&q_donedate='+q_donedate.value()+'&q_sculname='+q_sculname.value()+'&subjectName='+subjectName.value()+'&q_topicname='+q_topicname.value()+'&q_subtopic='+q_subtopic.value()+'&q_no='+q_no.value()+'&q_nocolum='+ q_nocolum.value()+'&q_body='+q_body.value()+'&matchItem_a='+matchItem_a.value()+'&matchItem_b='+matchItem_b.value()+'&matchItem_c='+matchItem_c.value()+'&subjName='+user.subjectName+'&subject_id='+user.subject_id+'&status='+user.status,
                    success:function(data){  

                    if(s.state(this)){
                        var r = s.jsonResponse(this);
                        console.log(r);
                        q_body.value('');
                        if (r.data === true) {

                            post_holder.html(temp+post_data);
                            livee();
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

    //parents and teacher discussion...
    r = $('#p_Vs_T_chat');
    r.on('click',function(){
        let t_post         =  $('#t_To_p_wall'),
            t_postHolder   =  $('#teacherToParentHolder'),
            t_postData     =   t_postHolder.html(),
           // previledge     =

           
				
            t_temp = "<div class='profileSender'>\n" +
                        "\t\t\t\t\t\t    <div class='profDisng'>\n" +
                        "\t\t\t\t\t\t    <div class='barName'>\n" +
                        "\t\t\t\t\t\t        <a href='#' class='Parimg'>"+user.profile+"</a>\n" +
                        "\t\t\t\t\t\t        <a href='#' class='ParName'>\n" +
                        "\t\t\t\t\t\t            <span class='nam'>"+user.username+"</span>\n" +
                        "\t\t\t\t\t\t            <span class='is'>'s,</span>\n" +
                        "\t\t\t\t\t\t            <span class='title'>Parents</span>\n" +
                        "\t\t\t\t\t\t        </a>\n" +
                        "\t\t\t\t\t\t        <a href='#' class='stdProf'><img src='img/profiles/p8.jpg'></a>\n" +
                        "\t\t\t\t\t\t         </div>\n" +
                        "\t\t\t\t\t\t           </div>\n" +
                        "\t\t\t\t\t\t <div class='msg'>"+t_post.value()+"</div>\n" +
                        "\t\t\t\t\t\t <div class='icon_time'>\n" +
                        "\t\t\t\t\t\t    <div class='icons'>\n" +
                        "\t\t\t\t\t\t        <span id='reply' onclick=\"swicthVisibility('textSender');\" class='ico reply'><i class='fa fa-reply'></i></span>\n" +
                        "\t\t\t\t\t\t        <span id='thumb_up' class='ico reply'><i class='fa fa-thumbs-up'></i></span>\n" +
                        "\t\t\t\t\t\t        <span id='delete' class='ico reply'><i class='fa fa-remove'></i></span>\n" +
                        "\t\t\t\t\t\t        <span id='spam' class='ico reply'>spam</span>\n" +
                        "\t\t\t\t\t\t        <span id='delete' class='ico reply'><i class='fa fa-unlock-alt'></i></span>\n" +
                        "\t\t\t\t\t\t    </div>\n" +
                        "\t\t\t\t\t\t    <div class='sendTime'>2days</div>\n" +
                        "\t\t\t\t\t\t</div>\n" +
                    "\t\t\t\t\t\t </div>"
                ;

            if(!t_post.empty()){

				//sasha
				s.response({
					url:'post.php',
					meth:'post',
                    query: 'action=teacherAndparentChat&teach_id='+user.id+'&user='+user.user_id +'&post=' + t_post.value()+'&subject_id='+user.subject_id +'&schoolname='+user.schoolname+'&mkondo='+user.mkondo +'&levelOrStandard='+user.levelOrStandard+'&region='+user.region+'&level_identify='+user.level_identify,
                      success:function(data){
						if(s.state(this)){
							var r = s.jsonResponse(this);
							
							if (r.data === true) {

								t_postHolder.html(t_temp+t_postData);
								// live();
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

    // Exams Compose

    let exm_compz = $('#Exam_cont');
    exm_compz.on('click',function(){ 

    	var Exam_name = $('#Exam_name'),
        qtnType       = $('#qtnType'),
        dateforExam   = $('#dateforExam'),
        strtExampTime = $('#startExampTime'),
        EndExamTime   = $('#EndExamTime'),
        examInstr     = $('#examInstruction'),
        QuizNmeHolder = $('#QuizNme'),
        post_QuizNmeHolder = QuizNmeHolder.html()

       
    	
    	
    	

    	HomekComp('insideCoverfirst','insideCoverSecond');

        if(!Exam_name.empty()){
			//sasha
			s.response({
				url:'post.php',
				meth:'post',
                query: 'action=postExam&user='+user.user_id+'&subject_id='+user.subject_id +'&schoolname='+user.schoolname+'&mkondo='+user.mkondo+'&levelOrStandard='+user.levelOrStandard+'&region='+user.region+'&level_identify='+user.level_identify+'&Exam_name='+Exam_name.value()+'&qtnType='+qtnType.value()+'&dateforExam='+dateforExam.value()+'&strtExampTime='+strtExampTime.value()+'&EndExamTime='+EndExamTime.value()+'&TimeexamInstr='+examInstr.value(),


                  success:function(data){
					if(s.state(this)){
						var r = s.jsonResponse(this);
						
						
						if (r.data === 'Nehemia') {
                             console.log(r.data);
							// t_postHolder.html(t_temp+t_postData);
							// live();
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

})(Exile,sasha);


//parent Box chat
function switch_parentChat(a,b,c,d,e,f){
    p_wrap = a;
    p_chat = b;
    parebt = c;
    p_id   = d;    //parent id
    p_allp = e;
    p_uId  = f;    // parent user_id

    divId = document.getElementById(p_chat+d);

     livee(p_id,p_uId);
      console.log(p_chat+d);
   
    if (getComputedStyle(divId).display == 'none') {
        _(p_wrap).style.display = 'none';
        divId.style.display = 'block';
        // _(this.parebt).style.display = 'block';
            
    }else if (getComputedStyle(_(divId)).display == 'block') {
        _(p_wrap).style.display = 'block';
        divId.style.display = 'none';
        // _(tmp.parebt).style.display = 'none';
    }
}


 
function livee(a,b) {

    var the_qry  =  'action=teacherLive&sect_tfeed=b&subjectId='+user.subject_id+'&real_user='+ user.user_id+'&user_id='+ user.user_id+'&schoolname='+user.schoolname+'&region='+user.region+'&levelOrStandard='+user.levelOrStandard+'&mkondo='+user.mkondo+'&level_identify='+user.level_identify;
                
    
    if(typeof a !== 'undefined' && typeof a !== 'undefined' &&  a != null && b != null){ 
    	the_qry = 'action=teacherLive&sect_tfeed=b&subjectId='+user.subject_id+'&real_user='+ user.user_id+'&user_id='+ user.user_id+'&schoolname='+user.schoolname+'&region='+user.region+'&levelOrStandard='+user.levelOrStandard+'&mkondo='+user.mkondo+'&level_identify='+user.level_identify+'&action=singleParentChat&p_accId='+a+'&p_accuserId='+b;
    }

    if(user.user !== '' && post_holder.element !== null ){var post_data = post_holder.html();} 
    // var post_data = post_holder.html();
    var post_holder       = $$('#subjectWallQstn');         // teacher subject wall
    var pSlider_holder    = $$('#sid');                     // parent chember slider
    var t_postHolder      = $$('#teacherToParentHolder');   // parent chember all teacher and parent convarsation
    var parentChatSingle  = $$('#parentChatSingle');
    
    return {
        gett:() => {
            sasha.onMessage({
                meth:'post',
                url:'Liveteacher.php',
                query: the_qry,
                success:function (d){
                    var r             =  sasha.data(d),
                    id                =  r.id;
                    pch_slider        =  r.PrntSlider_pch;  // parent chember on teacher slider
                    pch_AllChat       =  r.AllCaht_pCh;     // parent Chember All teacher and parents Discussion
                    prt_ChatSingle    =  r.pdata;
    
                    if(r.status && lastEventId !== id){
                        post_holder.html(r.data);
                    }
   
                    pSlider_holder.html(pch_slider);    // parent chember on teacher slider
                    
                    t_postHolder.html(pch_AllChat);     // parent Chember All t and p Discussion

                    parentChatSingle.html(prt_ChatSingle);
                    
                    // console.log(lastEventId);
                    lastEventId = id;
                }
            });
        },
        
        sett:(arg) => {
            nametimes = arg;
        }  
    }
}

var lastEventId = '';
var teachLive  = livee();
teachLive.gett();


function sendAnswer(msj_id,sender_id){
    q_rplyid = msj_id; 
 	answerHolder = 'answerHolder'+msj_id;
    textId = 'wallquestionAnswer'+msj_id;
    theans =  'theanswer'+msj_id;

    
    document.getElementById(textId).style.display = "none";
    var post = Exile('#'+textId),
        post_holder = Exile('#'+answerHolder),
        post_data = post_holder.html(),

        classIncss_theanswer = '';
      



    temp = "<div id = '"+theans+"' class = '"+classIncss_theanswer+"'>\n" +
         "<div class = ''>"+post.value()+"</div>\n" +
         " </div>";
                



       // document.getElementById(theans).style.display = "block";

    if(!post.empty()){
        
        postlength  = post.value().match(/\S/g).length;

	    if(postlength > 0){
	       classIncss_theanswer = 'theanswer';
	    }else{
	     	classIncss_theanswer = 'forExplainAnswer';
        }
        
        sasha.response({
	        url:'post.php',
	        meth:'post',
	        query: 'action=reply_qstn&user=' + user.user_id + '&post=' + post.value()+'&q_rplyid='+q_rplyid+'&sender='+sender_id,
	        success:function(data){
	            if(sasha.state(this)){
	                var r = sasha.jsonResponse(this);
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
            document.getElementById(textId).style.display = "block";
		}
}

function updateAnwser(msj_id,sender_id){

    q_rplyid     = msj_id; 
 	answerHolder = 'answerHolder'+msj_id;  
    textId       = 'wallquestionAnswer'+msj_id;  //textarea id to get answer
    theans       =  'theanswer'+msj_id;

	if(document.getElementById(textId)){
	    
	    document.getElementById(textId).style.display = "none"; // textarea id to display none after get ans
	    var post = Exile('#'+textId),
	        post_holder = Exile('#'+answerHolder),
	        post_data = post_holder.html(),

	        classIncss_theanswer = '';
	      



	    temp = "<div id = '"+theans+"' class = '"+classIncss_theanswer+"'>\n" +
	         "<div class = ''>"+post.value()+"</div>\n" +
	    " </div>";
	                



	    // document.getElementById(theans).style.display = "block";

	    if(!post.empty()){
	        
	        postlength  = post.value().match(/\S/g).length;

		    if(postlength > 0){
		       classIncss_theanswer = 'theanswer';
		    }else{
		     	classIncss_theanswer = 'forExplainAnswer';
		    }


	        sasha.response({
		        url:'xupdating.php',
		        meth:'post',
		        query: 'action=update_reply_qstn&user=' + user.user_id + '&post=' + post.value()+'&q_rplyid='+q_rplyid+'&sender='+sender_id,
		        success:function(data){
		            if(sasha.state(this)){
		                var r = sasha.jsonResponse(this);
		                post.value('');
		                if (r.data === true) {
                            console.log(r.data);
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
            document.getElementById(textId).style.display = "block";
		}
 }
}

function editAnswer(msg_id,id,msg){
    theans             =  'theanswer'+msg_id;
    wallquestionAnswer =  'wallquestionAnswer'+msg_id;
    answerHolder       =  'answerHolder34'+msg_id;


    // console.log(theans);
    console.log(msg);
    editedreply = "<div class='answi' id='"+answerHolder+"'><textarea placeholder='Anser Here' id='"+wallquestionAnswer+"' >"+msg+"</textarea></div>";

    document.getElementById(theans).innerHTML =  editedreply;
}

//parent chember all Disccusion..

function teachAndParentChat(txtSndr,p_id,RplyDiv){
    var textSenderHolder = txtSndr+p_id;
    var par =  _(textSenderHolder);
    var  textid = 'allChemb_pt'+p_id;

    var  All_chembText = "<textarea id = '"+textid+"' >post this</textarea><div onclick =\"allChembar('"+textid+"','"+p_id+"','"+RplyDiv+"')\" class = 'sendPlan'><i class ='fa fa-send'></i></div>";
  

    if(par.style.display === 'block'){
        par.style.display = 'none';
    }else{
        par.style.display = 'block';
    }

    par.innerHTML = All_chembText;
}

function allChembar(txtid,post_id,RplyDiv){
    
    var  txtValue =  _(txtid).value;
    var rplDiv  = RplyDiv+post_id;
     console.log(rplDiv);
        var rply_post   = Exile('#'+txtid),
        allChat_holder  = Exile('#'+rplDiv),
        post_data       = allChat_holder.html(),


        trply_temp = "<div class='profileReply'>\n" +
        "\t\t\t\t\t\t<div class='profDisng'>\n" +
        "\t\t\t\t\t\t    <div class='barName'>\n" +
        "\t\t\t\t\t\t        <a href='#' class='Parimg'>"+user.profile+"</a>\n" +
        "\t\t\t\t\t\t        <a href='#' class='ParName'>\n" +
        "\t\t\t\t\t\t            <span class='nam'>"+user.username+"</span>\n" +
        "\t\t\t\t\t\t        </a>\n" +
        "\t\t\t\t\t\t        \n" +
        "\t\t\t\t\t\t        <!-- i will acitivate later\n" +
        "\t\t\t\t\t\t        <a href ='#' class = 'Stname'>\n" +
        "\t\t\t\t\t\t            <span class = 'nam'>Angelina</span>\n" +
        "\t\t\t\t\t\t        </a>-->\n" +
        "\t\t\t\t\t\t        <a href='#' class='stdProf'><img src='img/profiles/p8.jpg'></a>\n" +
            
        "\t\t\t\t\t\t    </div>\n" +
            
        "\t\t\t\t\t\t</div>\n" +
        
        "\t\t\t\t\t\t<div class='msg'>"+rply_post.value()+"</div>\n" +
        "\t\t\t\t\t\t<div class='icon_time'>\n" +
        "\t\t\t\t\t\t    <div class='icons'>\n" +
        "\t\t\t\t\t\t        <span id='reply' onclick=\"swicthVisibility('textreply');\" class='ico reply'><i class='fa fa-reply'></i></span>\n" +
        "\t\t\t\t\t\t        <span id='thumb_up' class='ico reply'><i class='fa fa-thumbs-up'></i></span>\n" +
        "\t\t\t\t\t\t        <span id='delete' class='ico reply'><i class='fa fa-remove'></i></span>\n" +
        "\t\t\t\t\t\t        <span id='spam' class='ico reply'>spam</span>\n" +
        "\t\t\t\t\t\t        <span id='delete' class=''><i class='fa fa-unlock-alt'></i></span>\n" +
        "\t\t\t\t\t\t   </div>\n" +
        "\t\t\t\t\t\t   <div class='sendTime'>25days</div>\n" +
        "\t\t\t\t\t\t</div>\n" +
        "\t\t\t\t\t\t</div>";


    if(!rply_post.empty()){
        sasha.response({
        url:'post.php',
        meth:'post',
        query: 'action=teacherAndparentChat_reply&user='+user.user_id+'&post=' +rply_post.value()+'&pid='+post_id,
        success:function(data){
            if(sasha.state(this)){
                var r = sasha.jsonResponse(this);
                if (r.data === true) {

                    allChat_holder.html(trply_temp+post_data);
                    live();
                }else{
                    alert(r.error);
                }
            }
        }
        }
        );
 }else{
     alert('Please type something to proceed!');
 }
}