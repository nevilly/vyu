<!DOCTYPE html>
<html lang="en">
    <head>

        <style>
            
        </style>
        <script type="text/javascript">
            var images = ['img/63.jpg',"img/p2.jpg","img/p3.jpg","img/p4.jpg","img/img1.jpg"];
            var timer;
            var counter = 0;

            function showStart(){
                if(counter < img.length){
                    document.images["myImg"].src = images[counter];
                    counter++;
                }else{
                    counter = 0;
                }

                timer = setTimeout("showStart",1000);
            }

            function showStop(){
             clearTimeout(timer);
            }

        </script>

    </head>
    <body>
       
                <img id = "myImg" src="img/63.jpg" width="400px" height="400px">

                <button onclick="showStart();">Start</button>
                <button onclick="showStop();">Stop</button>
               
           
       </div>
    </body>
</html>