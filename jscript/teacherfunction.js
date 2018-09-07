  _ = (x) => document.getElementById(x); 

  let alvar  = [];
  latsti = 0;

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
						    qstnId = r.id;

                       
                        latsti += r.id;
					    
                        

						if (r.data === true) {
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



function qstncomposer(){
    alert('work');
    let qc_section  =   Exile('.qstnCmpz_section'),
        qc_date     =   Exile('.qstnCmpz_date'),
        qc_sName    =   Exile('.qstnCmpz_sculName'),
        qc_tpcQstn  =   Exile('.qstnCmpz_topicQstn'),
        qc_no       =   Exile('.qstnCmpz_No'),
        qc_ctgry    =   Exile('.qstnCmpz_ctgry'),
        qc_qstn     =   Exile('.qstnCmpz_qstn'),
        qc_gessA    =   Exile('.qstnCmpz_gess_a'),
        qc_gessB    =   Exile('.qstnCmpz_gess_b'),
        qc_gessC    =   Exile('.qstnCmpz_gess_c'),
        qc_gessD    =   Exile('.qstnCmpz_gess_d'),
        qc_Ans      =   Exile('.qstnCmpz_answer'),

        qc_vns      =   Exile('.qc_viewansw');          // view anser check or un check
        qs_lastId   =   latsti;                         // returned lust id from  Exams Compose response function;
        
        
        if(qc_vns.value == true){
            qc_ansDsply = 1;
            console.log(qc_ansDsply);
        }else{
            qc_ansDsply = 0;
        }

    
    if(!qc_qstn.empty()){
            //sasha

            alert('work1')
            sasha.response({
                url:'post.php',
                meth:'post',
                query:'action=postComposeQstn&user='+user.user_id+
                    '&level_identify='+user.level_identify+
                    '&qc_section='+qc_section.value()+
                    '&qc_date='+qc_date.value()+
                    '&qc_sName='+qc_sName.value()+
                    '&qc_tpcQstn='+qc_tpcQstn.value()+
                    '&qc_no='+qc_no.value()+
                    '&qc_ctgry='+qc_ctgry.value()+
                    '&qc_qstn='+qc_qstn.value()+
                    '&qc_gessA='+qc_gessA.value()+
                    '&qc_gessB='+qc_gessB.value()+
                    '&qc_gessC='+qc_gessC.value()+
                    '&qc_gessD='+qc_gessD.value()+
                    '&qc_Ans='+qc_Ans.value()+
                    '&qc_lastId='+qs_lastId+
                    '&qc_ansDsply='+qc_ansDsply,

                  success:function(data){
                    if(sasha.state(this)){
                        var r = sasha.jsonResponse(this);
                            alert('work2');
                        if (r.data === true) {
                            // console.log(r.data);
                            // t_postHolder.html(t_temp+t_postData);
                          alert('work3' +qs_lastId);
                            livee(qs_lastId,'','composeQstn');
                        }else{
                            alert(r.error);
                        }
                    }
                }
            });
    }else{
        alert('Please type something In your Composer to proceed!');
    }


    //function mtupio(ar,url,qry);
}
 

//parent Box chat
function switch_parentChat(a,b,c,d,e,f){
    p_wrap = a;
    p_chat = b;
    parebt = c;
    p_id   = d;    //parent id
    p_allp = e;
    p_uId  = f;    // parent user_id

    //divId = p_chat+''+p_id;
    
    divId = p_chat;

    let id_w = _(divId);


    // livee(p_id,p_uId,'parentChat');
      
    // console.log('this =>'+divId);

    // if(id_w){
    //     // console.log("prencence"+ id_w);
    // }else{
    //      console.log("Not prencence"+ id_w);
    // }
   
    if (getComputedStyle(id_w).display == 'none') {
        _(p_wrap).style.display = 'none';
        id_w.style.display = 'block';
        // _(this.parebt).style.display = 'block';
            
    }else if (getComputedStyle(id_w).display == 'block') {
        _(p_wrap).style.display = 'block';
        id_w.style.display = 'none';
        // _(tmp.parebt).style.display = 'none';
    }
    
     sasha.response({
                url:'post.php',
                meth:'post',
                query:'action=idOnly&pid='+p_id+'&u_two='+p_uId+'&real_user='+user.user_id,

                  success:function(data){
                    
                    if(sasha.state(this)){
                        var r = sasha.jsonResponse(this);
                       

                        if (r.status === true) {
                            r.data
                            //console.log(r.data);
                        //t_postHolder.html(t_temp+t_postData);
                          // alert('work3' +qs_lastId);
                          //   livee(qs_lastId,'','composeQstn');
                        }else{
                            alert(r.error);
                        }
                    }
                }
            });
}

 
lastpch_AllChatId      = 0;
last_prt_ChatSingleId  = 0;
lastunc_date           = 0;

function livee(a,b,c) {
    
   
    var the_qry  =  'action=teacherLive&sect_tfeed=b&subjectId='+user.subject_id+
                    '&real_user='+ user.user_id+
                    '&sesion_id='+ user.sesion_id+
                    '&user_id='+ user.user_id+
                    '&subjectName='+ user.subjectName+
                    '&teacher_id='+user.teacher_id+
                    '&teacherUname='+ user.teacherUname+
                    '&schoolname='+user.schoolname+
                    '&region='+user.region+
                    '&levelOrStandard='+user.levelOrStandard+
                    '&mkondo='+user.mkondo+
                    '&level_identify='+user.level_identify;
                
    if(typeof c !== 'undefined'&& c == 'parentChat'){
        console.log('gitting Her NOw');
        if(typeof a !== 'undefined' && typeof b !== 'undefined' &&  a != null && b != null){ 
            the_qry += '&p_accId='+a+'&p_accuserId='+b;
        }
    }
    

    if(typeof c !== 'undefined' && c == 'composeQstn'){
        if(typeof a !== 'undefined' &&  a != null ){ 
            the_qry += '&Actionx=qstnComoser&qstnCompose_lastId='+a;
             alert("Nehemia  x work"+ a);
            
        }
    }

    //console.log(the_qry);

 
    //if(user.user !== '' && post_holder.element !== null ){var post_data = post_holder.html();} 
    // var post_data = post_holder.html();
    var post_holder       = $$('#subjectWallQstn');         // teacher subject wall
    var pSlider_holder    = $$('#sid');                     // parent chember slider
    var t_postHolder      = $$('#teacherToParentHolder');   // parent chember all teacher and parent convarsation
    var parentChatSingle  = $$('#parentChatSingle');
    var qstn_compsrHolder = $$('#qc_dsply');
    let resultWrap        = $$('#resultWraper');            // result id to return ;
    
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
                    pch_AllChatId     =  r.AllChat_Id;      // Id for parent All teacher and Student
                    pch_AllChat       =  r.AllCaht_pCh;     // parent Chember All teacher and parents Discussion
                       
                    prt_ChatSingleId  =  r.parent_SingleChatId;
                    prt_ChatSingle    =  r.parent_SingleChat;
                    qstn_compsed      =  r.qdata;
                   
                    result_info       =  r.resultInfo;
                    undate            =  r.resultdate;


                    // console.log(result_info);

                    // issetOn = r.check1;
                    // issetOf = r.check;
                    

                  //  console.log('issetOn => '+issetOn);
                  //  console.log('issetOf => '+issetOf);


                    //  if(typeof r.qdata !== 'undefined' && r.data !== ''){
                    //     qstn_compsed =  r.qdata;
                    //     console.log(qstn_compsed);
                    //     qstn_compsrHolder.html(qstn_compsed);
                    // }
                  

                    // console.log(qstn_compsed)
    
                    if(r.status && lastEventId !== id){
                        post_holder.html(r.data);
                    }
                    
                    pSlider_holder.html(pch_slider);    // parent chember on teacher slider

                    if(lastpch_AllChatId !== pch_AllChatId){
                        t_postHolder.html(pch_AllChat);     // parent Chember All t and p Discussion
                    }
                    
                    if(last_prt_ChatSingleId !== prt_ChatSingleId){
                        parentChatSingle.html(prt_ChatSingle);
                    }

                    qstn_compsrHolder.html(qstn_compsed);

                   
                    
                    // if(lastunc_date !== undate){
                       resultWrap.html(result_info);
                    // }

                    
                    // console.log(lastEventId);
                    lastEventId = id;

                    lastpch_AllChatId    = pch_AllChatId;
                    last_prt_ChatSingleId = prt_ChatSingleId

                    lastunc_date = undate;
                }
            });
        },
        
        sett:(arg) => {
            nametimes = arg;
        }  
    }
}


function mtupio(ar,url,qry){
    if(!ar.empty()){
            //sasha
            sasha.response({
                url:url,
                meth:'post',
                query: qry,

                  success:function(data){
                    if(sasha.state(this)){
                        var r = sasha.jsonResponse(this);
                            
                        if (r.data === true) {
                             // console.log(r.data);
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
     // console.log(rplDiv);
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

function allChembar_pvtMsg(prvtTxt_tp,id,prvtMsgs,u_two){
    let idtext_pt    =  prvtTxt_tp+''+id;
    let idWall_pt    =  prvtMsgs+id;

   var   textV_pt    = Exile('#'+idtext_pt),
         prv_holder  = Exile('#'+idWall_pt),
      
         post_holder =  prv_holder.html();
      
       console.log("chek Id=> "+u_two);
      // console.log(textV_pt);
     // console.log(idtext_pt+ ' '+ textV_pt +' '+textV_pt.value());

   let spt_tmp = " <div class='chatholder'>\n" +
                "\t\t\t\t\t\t        <div class='divcirlce'>\n" +
                "\t\t\t\t\t\t                            <div class = 'cicle'></div>\n" +
                "\t\t\t\t\t\t         </div>\n" +
                "\t\t\t\t\t\t        <div class ='textChat'>\n" +
                "\t\t\t\t\t\t            <p>"+textV_pt.value()+"</p>\n" +
                "\t\t\t\t\t\t        </div>\n" +
                "\t\t\t\t\t\t          <div class = 'clear'></div>\n" +
                "\t\t\t\t\t\t   </div>" ;

   if(!textV_pt.empty()){
        sasha.response({
        url:'post.php',
        meth:'post',
        query: 'action=teacherAndparentChat_priveteChat&user='+user.user_id+'&post=' +textV_pt.value()+'&u_two='+u_two,
        success:function(data){
            if(sasha.state(this)){
                var r = sasha.jsonResponse(this);
                if (r.data === true) {

                    prv_holder.html(spt_tmp+post_holder);
                    // live();
                }else{
                    alert(r.error);
                }
            }
        }
    })
    }
}

function post_ExamResult(a,b,c,d,e,f,g){
    // a  => Result max ;
    // b  => DatetoSeeTeacher ;
    // c  => teacher_option ;
    // d  => r_fesReason ;
    // e  => r_examName ;
    // f  => r_qtnType ;
    // g  => r_resultDate ;

   // post_ExamResult('max_r','DatetoSeeTeacher','teacher_option','r_fesReason');"
  

    let  itm_data = '';
    let  itm = '';

    let  r_examName =  _(e);
    let  r_qtnType  =  _(f);
    let  r_rsltDate =  _(g);

    $$().each('.'+a,function(item,index){

        console.log(item);

        let item_v = item.value;
        let item_id = $$(item).Id();
         
         itm_data += item_v+'-'+ item_id+',';
        
    });

    // if(!post.empty()){
        
       // console.log( user.subject_id );
        
        sasha.response({
            url:'post.php',
            meth:'post',
            query: 'action=ExamResult&user=' + user.user_id +'&rdata=' +itm_data+'&subject_id='+user.subject_id+'&examname='+r_examName.value+'&examType='+r_qtnType.value+'&rDate='+r_rsltDate.value+'&schoolname='+user.schoolname +'&mkondo='+user.mkondo + '&levelOrStandard='+user.levelOrStandard +'&region='+user.region +'&level_identify='+user.level_identify, 
            success:function(data){
                if(sasha.state(this)){
                    var r = sasha.jsonResponse(this);
                    
                    if (r.data == true){

                        console.log('this => worrk');
                    }else{
                        alert(r.error);
                    }
                }
            }
        });
    // }else{
    //     alert('Please type something to proceed!');
    //     document.getElementById(textId).style.display = "block";
    // }   
}