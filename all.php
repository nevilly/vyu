<?php

   if(@mysql_connect('localhost','root','')){
   	   if(mysql_select_db('vyu')){
   	   	 echo "ok";
   	   }
   }
if(isset($_POST['search_text'])){
	echo $search_text = $_POST['search_text'];
}
?>