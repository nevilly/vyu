   <div id = 'side_One' >
		<div id = navOne>
			<div id = 'logo' class = 'logo'> Songoka  </div>
			<div class = 'Home nav'><a href = 'page.php' >    <i    class="fa fa-home" ></i> <span class = 'name'> Home</span>     </a> </div>
			<hr/>
            <div class = 'setting nav'><a href = 'subjectLecture.php?user=<?php echo escape($user->data()->username);?>' >    <i    class="icofont icofont-teacher" aria-hidden="true"></i> <span class = 'name'> Subject Lectures</span> </a></div>
		    <hr/>
        	<div class = 'blog nav' id = 'subjects_books'>  <a href = 'subjectbooks.php?user=<?php echo escape($user->data()->username);?>' >  <i    class="fa fa-book" aria-hidden="true" ></i> <span class = 'name'> Subject Books</span> </a></div>
			<hr/>
			<div class = 'Member nav' id = 'Subject_Pepars'><a href = 'subjectexams.php?user=<?php echo escape($user->data()->username);?>' >    <i    class="icofont icofont-paper" aria-hidden="true" ></i> <span class = 'name'> Subject Exams</span>     </a> </div>
			<hr/>
			<div class = 'Other nav' id = 'Subject_Q_ans'> <a href = 'qstnAndAns.php?user=<?php echo escape($user->data()->username);?> ''>    <i     class="fa fa-question-circle-o" aria-hidden="true"></i> <span class = 'name'> Questions & Answer</span>     </a></div>
		   <hr/>
			<div class = 'friend nav' id = 'Subject_freinds'><a href = 'subjectFriends.php?user=<?php echo escape($user->data()->username);?>' >    <i    class="fa fa-users" aria-hidden="true"></i> <span class = 'name'> Subjestic</span> </a></div>
		   <hr/>
			<div class = 'Message nav'><a href = 'message.php?user=<?php echo escape($user->data()->username);?>' >    <i    class="fa fa-envelope" aria-hidden="true"></i> <span class = 'name'> Messages</span></a></div>
		   <hr/>
			<div class = 'Notfication nav'><a href = 'notification.php?user=<?php echo escape($user->data()->username);?>' >  <i  class="fa fa-bell-o" aria-hidden="true"></i> <span class = 'name'> Notfication</span>     </a></div>
		   <hr/>
			<div class = 'forum nav'><a href = 'enterprenuer.php' >  <i  class="icofont icofont-wallet" aria-hidden="true"></i> <span class = 'name'> Entarprenur</span>     </a></div>
		  <hr/>
			<div class = 'setting nav'><a href = '' >    <i    class="icofont icofont-teacher" aria-hidden="true"></i> <span class = 'name'> Teacher Helps</span> </a></div>
		  <hr/>
         
	    </div>
		
		
		<div id = navtwo>
			<div id = 'logo'  class = 'logo'> S </div>
			<div class = 'Home nav'>  <i   id= 'n_ico'  onmouseover = "mouse_enter('nav_home','nav_hova');" onmouseout ='mouse_leave("nav_home","nav_hova");'class="fa fa-home" ></i> Home</div><hr/>
			<div class = 'blog nav'>  <i   id= 'n_ico'  onmouseover = "mouse_enter('nav_rBook','nav_hova');" onmouseout ='mouse_leave("nav_rBook","nav_hova");' class="fa fa-book" aria-hidden="true"></i> ReadBooks</div><hr/>
			<div class = 'Member nav'> <i  id= 'n_ico'  onmouseover = "mouse_enter('nav_paper','nav_hova');" onmouseout ='mouse_leave("nav_paper","nav_hova");'class="icofont icofont-paper" aria-hidden="true"></i>Pepars</div><hr/>
			<div class = 'Other nav'><i    id= 'n_ico'  onmouseover = "mouse_enter('nav_QndAn','nav_hova');" onmouseout ='mouse_leave("nav_QndAn","nav_hova");'class="fa fa-question-circle-o" aria-hidden="true"></i>Questions & Answer</div><hr/>
			<div class = 'friend nav'><i   id= 'n_ico'  onmouseover = "mouse_enter('nav_frnd','nav_hova');" onmouseout ='mouse_leave("nav_frnd","nav_hova");'class="fa fa-users" aria-hidden="true"></i>Friends</div><hr/>
			<div class = 'Message nav'><i  id= 'n_ico'  onmouseover = "mouse_enter('nav_msg','nav_hova');" onmouseout ='mouse_leave("nav_msg","nav_hova");'class="fa fa-envelope" aria-hidden="true"></i>Messages</div><hr/>
			<div class = 'Notfication nav'><i id= 'n_ico' onmouseover = "mouse_enter('nav_noty','nav_hova');" onmouseout ='mouse_leave("nav_noty","nav_hova");' class="fa fa-bell-o" aria-hidden="true"></i>Notfication</div><hr/>
			<div class = 'forum nav'><i    id= 'n_ico'  onmouseover = "mouse_enter('nav_enterpr','nav_hova');" onmouseout ='mouse_leave("nav_enterpr","nav_hova");'class="icofont icofont-wallet" aria-hidden="true"></i>Entarprenur</div><hr/>
			<div class = 'setting nav'><i  id= 'n_ico'  onmouseover = "mouse_enter('nav_tHelp','nav_hova');" onmouseout ='mouse_leave("nav_tHelp","nav_hova");'class="icofont icofont-teacher" aria-hidden="true"></i>Teacher Helps</div><hr/>
        </div>

	
    </div>