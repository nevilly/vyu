

var lastEventId = '';

function livliv() {
    var post_holder = $$('#sid');
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
			
			 query:'action=tSliderLive&status=teacher&subjectId='+user.subject_id+'&user_id='+ user.user_id+'&schoolname='+user.schoolname+'&region='+user.region+'&levelOrStandard='+user.levelOrStandard,
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

livliv();