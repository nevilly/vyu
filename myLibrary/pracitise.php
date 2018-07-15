<!DOCTYPE html>
<html lang="en">
<head>
   <script type = "text/javascript">
    //     function findmatch(thediv,thefile){
    //         if (window.XMLHttpRequest){
    //             xmlhttp = new XMLHttpRequest();
    //         }else{
    //             xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
    //     }

    //     xmlhttp.onreadystatechange = function(){
    //         if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
    //           document.getElementById(thediv).innerHTML = xmlhttp.responseText;
    //         }
    //     }

    //  xmlhttp.open('GET',thefile+document.getElementById('search').value,true ); 
    //  xmlhttp.send();
    // }



          function insert(){
            if (window.XMLHttpRequest){
                xmlhttp = new XMLHttpRequest();
            }else{
                xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
        }

        xmlhttp.onreadystatechange = function(){
            if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
              document.getElementById(thediv).innerHTML = xmlhttp.responseText;
            }
        }
  
     parameters = 'text=hellow';

     xmlhttp.open('POST',thefile,true ); 

     xmlhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
     xmlhttp.send(parameters);

     alert("ooukey");
    }
       

   </script>
</head>
<body>
    <form >
        
       <!--  <input type="text" name="search" id ="search" onkeyup ="findmatch('results','include.inc.php?search=');" autocomplete="off"> -->
        <input type="text" id ="text" />
        <button onclick="insert();" >Submit</button>
    </form>
 
    <div id="results"></div>

</body>
</html>