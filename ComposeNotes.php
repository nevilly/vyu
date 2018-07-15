
<?php  
    require_once 'Core/Init.php';
    $user = new User();
    //echo $user->data()->username;
    if ($user->isLoggedIn()) {
      # code...
      // echo 'logged In';
      // echo escape($user->data()->username);
?>



<?php include 'include/skeletonTop.php'; ?>
<div id = 'notesCompos'>
   <!-- <div id = 'close' onclick = "closeDiv('notesCompos');"><i class = 'fa fa-close'></i></div>-->
    <div class = 'searchBar'>
        <input type = 'text' placeholder = 'search definition qustion topics' name = 'noteCompose_search' id = 'notes_compose_search'>
    </div>
    <div class = 'NCompose_wraper'>
        <div class = 'wizwigNotes_Editor'>
            <h3>BlackBoard</h3>
            <i class ='fa fa-print'></i>
            <div class = 'input_editor'>
                <div class = 'topicName'>
                    <label for = 'topicName'></label>
                     <input type = 'text' id='notesCompose_topic' placeholder = 'Topic Name'>
                </div>
                
                <div class = 'topicName'>
                   <!--/ switch botton Next topic off Next Topic oN/-->
                    <label for = 'topicName'></label>
                     <input type = 'text' id='notesCompose_topic' placeholder = 'Dates Notes Composede'>
                </div>
                
                <div class = 'subTopic'>
                    <!--/ switch botton Next topic off Next Topic oN/-->
                    <label for = 'subTopic'></label>
                     <input type = 'text' id='notesCompose_dateTimeTable' placeholder = 'SubTopic'> <span class = 'addSubTopic'>+</span>
                </div>
                
                
                <div class = 'dateTimeTable'>
                   <!--/ switch botton Next topic off Next Topic oN/-->
                    <label for = 'topicName'></label>
                     <input type = 'text' id='notesCompose_dateTimeTable' placeholder = 'time Table date'>
                </div>
                
                
            </div>
            
            <div class = 'textEditor'>
                <textarea>
                    
                    
                </textarea>
                
            </div>
            <div class = 'topic_shirtList'>
                <div class = 'overflow'>
                    <h3>NOTES SKETCH</h3>
                   
                    <div class= 'Topic'>Fasihi</div>
                </div>
                <div class = 'saveANdUPoload'>
                    <div class = 'saveNOtes'>SAVE</div>
                    <div class = 'uploadNOtes'>UPLOAD</div>
                </div>
            </div>
        </div>
        <div class = 'side_wraper'>
            <div class = 'ssearch'>
                <input type = 'text' id='search_books' placeholder = 'Search books And Teachers' class ='xsearch'>
            </div>
            <div class = 'xoverflow'>
                <div class = 'choseBook'>
                    <div class = 'book'>
                        <img onclick = "openAbsolute('book_buy');" class = 'booksImge' src = 'img/books_cover/kiswahili/form1.jpg'>
                    </div>
                    <div class = 'detailsBookx'>
                        <span class ='title name'>Title:</span><span class ='ans'>KIELELEZI CHA KISWAHILI</span>
                        <span class ='title name'>Level:</span><span class ='ans'>form 3</span>
                        <span class ='Writer name'>Writer:</span><span class ='ans'>Edwin Semzaba</span>
                        <span class ='Page name'>Page:</span><span class ='ans'>50 sh/=</span>
                        <span class ='Books name'>Books:</span><span class ='ans'>10000 sh/=</span>
                   
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 	<?php include 'include/skelotonBottom_login.php'; ?>




<?php
   }else{
       echo '<p>You need <a href = "login.php">Login</a> or <a href = "registration.php">Register</a></p>';
    }
?>
