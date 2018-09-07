
var lastEventId      = '';
let lastdrmSliderId  = '';

(function($,s){

	st_Qsend = $('#sendQstn_student');
	st_Qsend.on('click',function(){
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
        

        st_holder = $('#studentSubj'),
        post_data = st_holder.html(),
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
                       
                        if (r.data === true) {

                            st_holder.html(temp+post_data);
                            studentLiv();
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


    //summary post .....
    su  = $('#postSummary');
    su.on('click',function(){
     
    	let s_topicName     = $('#s_topicName'),
            s_subtopicName  = $('#s_subtopicName'),
            s_sumaryNo      = $('#s_sumaryNo'),
            s_summarybody   = $('#summarybody'),
         // s_smmrybdy      = $('summarybody'),

            s_holder = $('#mySummary_holder'),
            s_post = s_holder.html(),

           bb =  s_summarybody.value();
        s_tmp = "<div class='AllpostestesSummaries'>\n" +
			    "\t\t\t\t\t\t        		<div class = 'divSenderDetels'>\n" +
			    "\t\t\t\t\t\t     		    <a href = '#'>\n" +
				"\t\t\t\t\t\t        			<div class = 'profImg'>\n" +
				"\t\t\t\t\t\t \n" +
				"\t\t\t\t\t\t 					    <img src ='img/profiles/p4.jpg' >\n" +
				"\t\t\t\t\t\t 			        </div>\n" +

				"\t\t\t\t\t\t 			        <div class ='name_time'>\n" +
				"\t\t\t\t\t\t 					    <span class = 'name'>"+user.username+"</span>\n" +
				"\t\t\t\t\t\t 					    <span class = 'time_ago'>1mn</span>\n" +
				"\t\t\t\t\t\t 					</div>\n" +
				"\t\t\t\t\t\t 				</a>\n" +
			    "\t\t\t\t\t\t     		</div>\n" +

				"\t\t\t\t\t\t            <div class = 'summaryPanel'>\n" +
	            "\t\t\t\t\t\t                <div class = 'sumaruHeader'>\n" +
	            "\t\t\t\t\t\t                	<div class = 'title'>\n" +
	            "\t\t\t\t\t\t                	   <span class = 'SumaryTopic'>Topic:</span>\n" +
	            "\t\t\t\t\t\t                 	   <span class = 'SumaryTopicName'>"+s_topicName.value()+"</span>\n" +
	            "\t\t\t\t\t\t                    </div>\n" +

	            "\t\t\t\t\t\t                    <div class = 'summaryNo'>\n" +
	            "\t\t\t\t\t\t                 	   <span class = 'SumaryTopic'>Summery No</span>\n" +
	            "\t\t\t\t\t\t                 	   <span class = 'SumaryNo'>"+s_sumaryNo.value()+"</span>\n" +
	            "\t\t\t\t\t\t                    </div>\n" +

	            "\t\t\t\t\t\t                    <div class = 'subtitle'>\n" +
	            "\t\t\t\t\t\t                 	   <span class = 'SumaryTopic'>Sub Topic</span>\n" +
	            "\t\t\t\t\t\t                 	   <span class = 'SumaryTopicName'>"+s_subtopicName.value()+"</span>\n" +
	            "\t\t\t\t\t\t                    </div>\n" +
	            "\t\t\t\t\t\t                </div>\n" +

	            "\t\t\t\t\t\t                <div class = 'summarybody'>\n" +
	            "\t\t\t\t\t\t                    <div class = 'MainBodySummaary'>"+s_summarybody.value()+"</div>\n" +
	                             	
	            "\t\t\t\t\t\t                 	<footer>\n" +
	            "\t\t\t\t\t\t                 	 	<div class = 'writenBy'>\n" +
	            "\t\t\t\t\t\t                 	 	    <a href = '#'>\n" +
		        "\t\t\t\t\t\t                     	 		<span class = 'writenTitle' >Written By</span>\n" +
		        "\t\t\t\t\t\t                     	 		<span class = 'writenname' >"+user.username+"</span>\n" +
	            "\t\t\t\t\t\t                 	 		</a>\n" +
	            "\t\t\t\t\t\t                 	 	</div>\n" +
	            "\t\t\t\t\t\t                 	</footer>\n" +
	            "\t\t\t\t\t\t                </div>\n" +

	            "\t\t\t\t\t\t                <div class = 'iconGroup summaryIcon'>\n" +
	            "\t\t\t\t\t\t               	<div class = 'firstIcon'><span><i class = 'fa fa-thumbs-o-up'></i></span><span>125</span></div>\n" +
	            "\t\t\t\t\t\t                	<div class = 'sectIcon' onclick = \"openAbsolute('shareTo');\"><span ><i class = 'fa fa-share-square'></i></span><span>45</span></div>\n" +
	            "\t\t\t\t\t\t                	<div class = 'thirdIcon'><span><i class = 'readed'>readed</i></span><span>425</span></div>\n" +
	            "\t\t\t\t\t\t                </div>\n" +
				"\t\t\t\t\t\t            </div>\n" +
				"\t\t\t\t\t\t        </div>"
		;

       // ckpost  = CKEDITOR.instances[s_smmrybdy].getData();
        //bdy     = encodeURIComponent(ckpost);

         console.log(s_summarybody);
         console.log(bb);

		if(!s_topicName.empty() && !s_summarybody.empty()){
            //sasha
           
            s.response({
                url:'post.php',
                meth:'post',
                query: 'action=summaryPost&user='+user.user_id+
                       '&s_topicName='+s_topicName.value()+
                       '&s_subtopicName='+s_subtopicName.value()+
                       '&s_sumaryNo='+s_sumaryNo.value()+
                       '&s_summarybody='+s_summarybody.value()+
                       '&subjName='+user.subjectName+
                       '&subject_id='+user.subject_id,
                    success:function(data){  

                    if(s.state(this)){
                        var r = s.jsonResponse(this);
                       
                        if (r.data === true) {
                            s_holder.html(s_tmp+s_post);
                            studentLiv();
                        }else{
                            alert(r.error);
                        }
                    }
                }
            });
             
            
        }else{
            alert('Please type something to proceed!');
        }

         closeDiv('summarysHare');
        
        // absolut_id.style.display = 'none';
    });
  
})(Exile,sasha);


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

function timetable_review(arg,sid){
	var absolut_id = _(arg);
		absolut_id.style.display = 'block';	
	studentLiv(sid);   //not working problem: Id dectation and transfer to another div
}

function planningGameSave(){
	let dream_id = '';
	let p_startDate  = $$('#plan_startDate')  ,    
	    p_fnshDate  = $$('#plan_fnshDate')  ,    
	    p_name       = $$('#plan_name')  ,    
	    p_examNo     = $$('#plan_examNo')  ,    
	    p_weekNo     = $$('.plan_weekNo')  ,    
	    p_period     = $$('.plan_period')  ,       // either ,month or day or week or year
	    p_maxAv      = $$('#plan_maxAvrg')  ,      // plan user maxing average
	    p_mnyAsum    = $$('#plan_moneyAsume')  ,   // plan user money assuming
	    p_chuzSubj   = tag('chuseSubj')  ,         // Choosi different sucject
	    p_chuzDream  = tag('planning_Dream')  ;    // Choosi different sucject

	  
        for (let pn = 0, length = p_chuzDream.length; pn < length; pn++){
            if(p_chuzDream[pn].checked){
	    	    dream_id +=  p_chuzDream[pn].value;
		    }
		}
        
	    if(!p_examNo.empty() && !p_name.empty() && !dream_id !== null){
            //sasha

            console.log(p_maxAv.value());
            console.log('start'+p_startDate.value());
            console.log('dnsh'+p_fnshDate.value());
            sasha.response({
                url:'post.php',
                meth:'post',
                query: 'action=planningPost&user='+user.user_id+
                       '&p_name='+p_name.value()+
                       '&p_startDate='+p_startDate.value()+
                       '&p_fnshDate='+p_fnshDate.value()+
                       '&p_maxAv='+p_maxAv.value()+
                       '&p_examNo='+p_examNo.value()+
                       '&p_weekNo='+p_weekNo.value()+
                       '&p_period='+p_period.value()+
                       '&p_mnyAsum='+p_mnyAsum.value()+
                       '&p_mnyAsum='+p_mnyAsum.value()+
                       '&subject_id='+user.subject_id+
                       '&dream_id='+dream_id,
                    success:function(data){  

                    if(sasha.state(this)){
                        var r = sasha.jsonResponse(this);
                       
                        if (r.data === true) {
                            // s_holder.html(s_tmp+s_post);
                            // studentLiv();
                        }else{
                            alert(r.error);
                        }
                    }
                }
            });
            openOth("AcomplshedDream","composePlanAnDrea");
        }else{
            alert('Please choose Dream to proceed and Fill all the gaps!');
        }
}

function PlanInfo(a,b){

        //code
		var absolut_id = _(a);
		absolut_id.style.display = 'block';
}

function openOth(parOn,parTw) {
    _(parOn).style.display = "block";
	_(parTw).style.display = "none";
}

function ExamDoneList(a,b){
    //   let tmp_exmHolder = _(a);    // temprate holder ;
    //   let examId        =  b;      // Exam choosen Id ;

    //  adiv = 'needId';
    //  url = 'insidefunc.php';
    //  parameter ="Action=simpleGetId&exmId="+examId;
     
    // findVerif(adiv,url,parameter);

    // tmp_exmHolder.style.display = 'block';
}

function studentLiv(a) {

    var the_qry  =  'action=studentLive&sect_tfeed=b&subjectId='+user.subject_id+
                     '&real_user='+ user.user_id+
                     '&sesion_id='+ user.sesion_id+
                     '&user_id='+ user.user_id+
                     '&subjectName='+ user.subjectName+
                     '&teacherUname='+ user.teacherUname+
                     '&teacher_id='+user.teacher_id+
                     '&schoolname='+user.schoolname+
                     '&region='+user.region+
                     '&levelOrStandard='+user.levelOrStandard+
                     '&level_identify='+user.level_identify+
                     '&mkondo='+user.mkondo
                     ;
    
    if(typeof a !== 'undefined' &&  a !== null){ 
       //for day time table query....;
       the_qry  +=  '&tymtableId='+a;
    }  


    let st_holder               = $$('#studentSubj');               // student subject wall
    let todayPeriods_holder     = $$('#todayPeriods');              // day period container
    let tmr_pHolder             = $$('#tommorowPeriods');           // tommorow period container
    let timetable_temprate      = $$('#timetable_temprate');        // timetable riview notes
    let Summary_holder          = $$('#mySummary_holder');          // Summary review riview notes
    let wallSummary_holder      = $$('#wallSummary');               // Summary review riview notes
    let acomplish_DreamPlan     = $$('#AcomplshedDream');           // Planning Dream review 
  
    
    return {
        get:() => {
            sasha.onMessage({
                meth:'post',
                url:'Livestudent.php',
                query: the_qry,
                success:function (d){
                    var r             =  sasha.data(d),
                    id                =  r.id;
                    hdata             =  r.dayPeriod;
                    tmrprd            =  r.tommorowPeriod;
                    tpcrvw            =  r.tpcrvw;
                    mysmry            =  r.summary ;
                    wallsmry          =  r.summaryWall ;   //summary shared at the summary wall
                    dreamAcc          =  r.dreamSlider ;   //Dream to accomplish 
                    drmSldrId         =  r.dreamSldrId ;   //Dream to accomplish 

                 
                    if(r.status && lastEventId !== id){
                        st_holder.html(r.data);
                    }

                    todayPeriods_holder.html(hdata); 

                    tmr_pHolder.html(tmrprd);      

                    timetable_temprate.html(tpcrvw);     

                    Summary_holder. html(mysmry)  ;               // summaries 

                    wallSummary_holder. html(mysmry)  ;           // wall summaries   

                    if(lastdrmSliderId !== drmSldrId){
                        acomplish_DreamPlan. html(dreamAcc)  ;    // wall summaries           
                    }



                    lastEventId = id;
                    lastdrmSliderId = drmSldrId;
                }
            });
        },
        
        set:(arg) => {
            nametimes = arg;
        }  
    }
}

function print_f(a){
   
    let restorePage = document.body.innerHTML;
    let printRestore = _(a).innerHTML;
    document.body.innerHTML = printRestore;
    window.print();
    document.body.innerHTML = restorePage;
}

let sv  = studentLiv();
          sv.get();
