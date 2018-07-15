<!DOCTYPE html>
<html lang="en">
<head>
   <script type = "text/javascript">

    function insert(){
        if(window.XMLHttpRequest){
            xmlhttp = new XMLHttpRequest();
        }else{
            xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
        }

        xmlhttp.onreadystatechange = function(){
            if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
              document.getElementById('message').innerHTML = xmlhttp.responseText;
            }
        }
  
     parameters = 'uname='+document.getElementById('uname').value;

     xmlhttp.open('POST','include.inc.php',true ); 
     xmlhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
     xmlhttp.send(parameters);

    }
       

   </script>
</head>
<body>
    
        <input type="text" onkeyup ="findVerify();"  id ="uname" >
       <!--  <input type="text" onkeyup ="insert();"  id ="rname" > -->
        <input type="submit" >

 
    <div id="message"></div>

</body>
</html>