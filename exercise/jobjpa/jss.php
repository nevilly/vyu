

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Skonga life.com</title>
<!-- 
<script type="text/javascript" >
   // function validateform(){
   // 	 var x = document.getElementById('fname').value;

   // 	 if(x === ""){
   // 	 	alert("empty");
   // 	 	return x
   // 	 }
   // }

   // function peoplefactory(){
   //     temp = {};

   //     temp.age = age;
   //     temp.name = name;

   //     temp.method = function (){
   //     	console.log(this.name+' and '+this.age);
   //     };

   //     return temp;

   // }

   // age = 21;
   // name = "nehemia";
   // var p =  new peoplefactory();
   // p.method();


   // function inputfactory(){
   //     this.age = age;
   //     this.name = name;

   //     this.method = function(){
   //     	  console.log("method");
   //     }
   // }

	// function validate(){
	    
	// 	this.inputa = document.getElementById('fname');
		
	// 	this.msg = function(){
	// 		if(this.inputa == ""){
	// 		   alert("empty filled");
			   
	// 	    }
	// 	};

	// 	// if(document.getElementById('fname').value == ""){
	// 	// 	console.log("empty filled");
	// 	// 	valid = false
	// 	// }
	   
	//  //   if(document.getElementById('fname').value == ""){
	// 	// 	console.log("empty filled");
	// 	// 	valid = false
	// 	// }

	// 	// return valid;

	// 	// console.log("chekde");
	// }

	// var v_one = new validate();

	// v_one.msg();




	// function peplefactory(){
	//  this.age = age;
	//  this.name = name;

	//  this.msg = function(name,age){
	//       console.log(this.name +','+this.age);
	//  }

	// }

	// var p1 = new peplefactory(21,'nehemia');
	   
   
    // function inputId (btn){
    //     this.clickbot = document.getElementById(btn);
    // }

    // inputId.prototype.getId = function(){

    // 	this.clickbot= function(){
    //            console.log('cricked');
    // 	}

    // }


    // ne = new inputId('submit');
    // ne.getId();


   // function person (name){
   // 	 this.name = name;
   // }

   // person.prototype.getid = function(){
   	  
   // 	  return this.checkif(this.name);
   // }

   // person.prototype.checkif = function(){
   // 	  if(this.name != 'ejej'){
   // 	  	 return this.errors(this.name);
   // 	  }
   //     return this.validate(this.name);
   // 	 }


   // person.prototype.validate = function(){
   // 	  console.log(name);
   // } 

   // person.prototype.errors = function(){
   // 	  console.log('not macth my dia');
   // }

   // nehe = new person('hejej');
   // nehe.getid();
</script> -->

<script type="text/javascript">

  function inputCheck(inputy){
     var myinput = document.getElementById(inputy).value;
     
  
		if ( myinput === "")
			{
			  //The element was found and the value is empty.
			  console.log(" empty");
			}else{
				console.log("not empty");
			}
  }

  // function errormsg(myinput,error){
  //   
  //       

  // }

</script>
   </head>
<body>
    


  
<	name :<input type="text" id="fname"  keydown="writed(fname);" >
<div id = "errormsg" ></div>
	name :<input type="submit" id="submit" onclick="inputCheck('fname');">


 




</body>
</html>

