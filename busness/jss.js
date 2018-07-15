// slideshow practise


// list = [2,4,6,9,1,3];

// function callback(list){
// 	newList = [];

// 	for(i = 0, i < list.length, i++){
// 		if(llst[i] < 4) newList.push();
// 	}

// 	return newList;
// }


// cb = callback(list);

// console.log(cb);













































// var xmlhttp = new XMLHttpRequest();

// xmlhttp.onreadystatechange = function(){
// 	if(this.readyState == 4 && this.status == 200 ){
// 		var myOb = JSON.parse(this.responseText);
// 		document.getElementsByTagName('result').innerHTML = myOb.name ;
// 	}
// }f

// xmlhttp.open("GET", "serverdat.txt", true);
// xmlhttp.send();


// window.onload = function(){
 
//   function callback(){
//   	if(http.readyState == 4 && http.status == 200){
//   		var Var_cb = JSON.parse(http.responseText);

//   		console.log(Var_cb);
//   	}
//   }



//  var http = new XMLHttpRequest();
  
//   http.onreadystatechange = callback;

//   http.open('GET','data/tweets.json',true);
//  http.send();



//  // function Var_cb(Var_cb){
//  // 	console.log("this work"+ Var_cb);
//  // }

//  // console.log(http);
// };

// window.onload = function(){
    
//     function get(url){
//        return new Promise(function(resolve,reject){
//              var xmlhttp = new XMLHttpRequest();
//              xmlhttp.open('GET', url,true);

//              xmlhttp.onload = function(){
//              	if (xmlhttp.status == 200) {
//              		resolve(JSON.parse(xmlhttp.response));
//              	}else{
//              		reject(xmlhttp.statusText);
//              	}
//              };

//              xmlhttp.onerror = function(){
//              	reject(xmlhttp.statusText);
//              };

//              xmlhttp.send();

//        });
//     }   

//     var promise = get('data/tweets.json');

//     promise.then(function(weets){
//     	console.log(weets);
//     }).catch(function(error){

//     	console.log(error);
//     });
// };


//


