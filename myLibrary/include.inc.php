<?php




    try {

    	  $database = new PDO("mysql:host=localhost;dbname=vyu",'root','');
    	
    
    } catch (Exception $e) {
    	echo "mot";
    }


// Get the keyword from query string
if (isset($_POST['uname'])){
  # code...
 echo $search_text = $_POST['uname'];
}

if(!empty($search_text)){
   $query = $database->prepare('SELECT * FROM vy_users WHERE username LIKE ?');
    $query->bindValue(1, "$search_text%", PDO::PARAM_STR);
    $query->execute();

    if (!$query->rowCount() == 0) 
    {
        while ($results = $query->fetch()) 
        {
            echo $results['username'] . "<br />\n";
        }       
    } 
    else 
    {
        echo 'Nothing found';
    }

}



    
?>