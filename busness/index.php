<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<script>
			var image = new array("img1.png","img2.png","p2.jpg");
			var img_no = 0;
			var img_length = image.length - 1;

			function change_img(num){
               img_no = img_no + num;

               if(img_no > img_length){

                   img_no = 0;
               }

               if(img_no < 0){
                   img_no = img_length;
               }

               document.slidshow.src = image[img_no]; 

               return false;
			}
		</script>
	    
	    <img src="img/img1.jpg " name = "slidshow">

	    <table>
	    	<tr>
	    		<td align="left"><a href="javascript.html" onclick="return change_img(-1)">Prev</a></td>
	    		<td align="left"><a href="javascript:change_img(1)">Next</a></td>
	    	</tr>
	    </table>

	    <div id = 'desription'>
	    	
	    </div>
	   
<!-- 
    <script type="text/javascript" src="jss.js"></script> -->
    <body>

</html>