 function _(x) {
     return document.getElementById(x);
 }

(function($,s){

    var q = $('#sendQstn');
        // console.log(q);
    q.on('click', function () {
        
            var q_section   = $('#SECTION_qstnwall'),
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
                        "\t\t\t\t\t\t                </div>";
              
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

 


 })(Exile,sasha);


var lastEventId = '';

function live() {
    var post_holder = $$('#subjectWallQstn');
    var post_holder2 = $$('#sid');
   
   
    
    if(user.user !== '' && post_holder.element !== null && post_holder.element['attributes'][0]['nodeValue'] == "subjectWallQstn"){
    	// wall Subject chat live display
    	console.log(post_holder.element);
         var post_data = post_holder.html();
         sasha.onMessage({
			 meth:'post',
			 url:'teacherLive.php',
			

			 query:'action=teacherLive&status=b&subjectId='+user.subject_id+'&real_user='+ user.user_id,
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

   
    if(user.user !== '' && post_holder2.element !== null && post_holder2.element['attributes'][0]['nodeValue'] == "sid"){

          // slider live display
           var post_data = post_holder2.html();
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
			
			 query:'action=tSliderLive&status=teacher&subjectId='+user.subject_id+'&user_id='+ user.user_id+'&schoolname='+user.schoolname+'&region='+user.region+'&levelOrStandard='+user.levelOrStandard,
			 success:function (d) {
                 // console.log(d);
                var r = sasha.data(d);
               
                if(r.status){
                	post_holder2.html(r.data);
				}

				// console.log(lastEventId);

                // lastEventId = id;

            }
		});
	}
}

live();

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



