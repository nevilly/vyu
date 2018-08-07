


  (function($,s){
    var t_wallChat = $('.postToAllteacher');

    t_wallChat.on('click', function () {
     	var post       = $('#t_To_p_wall'),
		post_holder    = $('#teacherToParentHolder'),
		post_data      = post_holder.html(),
		//previledge     = $('#Nav_everyone').value(),



			temp = "<div class='profileSender'>\n" +
					"\t\t\t\t 					<div class='profDisng'>\n" +
					"\t\t\t\t 						<div class='barName'>\n" +
					"\t\t\t\t 							<a href='#' class='Parimg'><img src='img/profiles/p8.jpg'></a>\n" +
					"\t\t\t\t 							<a href= '#' class='ParName'>\n" 
					"\t\t\t\t 								<span class='nam'>Angelina</span>\n" +
					"\t\t\t\t 								<span class='is'> s,</span>\n" +
					"\t\t\t\t 								<span class='title'>Parents</span>\n" +
					"\t\t\t\t 							</a>\n" +
					"\t\t\t\t 							\n" +
					"\t\t\t\t 							<!-- i will acitivate later\n" +
					"\t\t\t\t 							<a href ='#' class = 'Stname'>\n" +
					"\t\t\t\t 								<span class = 'nam'>Angelina</span>\n" +
					"\t\t\t\t 							</a>-->\n" +
					"\t\t\t\t 							<a href='#' class='stdProf'><img src='img/profiles/p8.jpg'></a>\n" +
					"\t\t\t\t 						\n" +
					"\t\t\t\t 						</div>\n" +
											
					"\t\t\t\t 					</div>\n" +
					"\t\t\t\t 					\n" +
					"\t\t\t\t 				    <div class='msg'>Mbona mwanagu daftari lake xilielewi kunashida gan anafeli sana somo lako</div>\n" +
					"\t\t\t\t 					<div class='icon_time'>\n" +
					"\t\t\t\t 						<div class='icons'>\n" +
					"\t\t\t\t 							<span id='reply' onclick=\"swicthVisibility('textSender');\" class='ico reply'><i class="fa fa-reply"></i></span>\n" +
					"\t\t\t\t 							<span id='thumb_up' class='ico reply'><i class='fa fa-thumbs-up'></i></span>\n" +
					"\t\t\t\t 							<span id='delete' class='ico reply'><i class='fa fa-remove'></i></span>\n" +
					"\t\t\t\t 							<span id='spam' class='ico reply'>spam</span>\n" +
					"\t\t\t\t 							<span id='delete'class='ico reply'><i class='fa fa-unlock-alt'></i></span>\n" +
					"\t\t\t\t                        </div>\n" +
					"\t\t\t\t 						<div class='sendTime'>2days</div>\n" +
					"\t\t\t\t 					</div>\n" +
					"\t\t\t\t 					\n" +
									
					"\t\t\t\t 				</div>";

     	if(!post.empty()){

     		//sasha
			s.response({
				url:'post.php',
				meth:'post',
                query: 'action=pTeachearAndParentsChat&user=' + user.user_id + '&post=' + post.value() + '&privilege=' + previledge + '&frompage=' + user.frompage,
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

   


 })(Exile,sasha);








 