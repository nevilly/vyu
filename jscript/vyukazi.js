function v(){}

// (function(factory){

// 	if(typeof define === 'function' && define.amd){
// 		define(['vyukazi'],factory);

// 	}else if(typeof module === 'object' && typeof module.exports === 'object'){
// 		factory(require('vyukazi'));
// 	}else{
// 		factory(vyukazi);
// 	}

// })(function(v){

//   v.prototype.showValues = function(){

//   	 alert('chochote');
//   }




// });


v.prototype.showValues = function(){
	var idContent = document.querySelectorAll('.textinstr');
	var ids = [].map.call(idContent, function(elem){
	  return elem.id;  
	});
	  
    console.log(ids);
	text = "";
	for(i = 0;  i < ids.length; i++){
	 	 // text += ids[i];
	 	dd = ids[i];
	 	 console.log(dd);
	}
}



v = new v();
v.showValues();