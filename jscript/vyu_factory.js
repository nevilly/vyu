function _(x){
  return  document.getElementById(x);
}


// var vyu_ajax = function(adiv,url,parameters){

// 	ajaxtemp = {};
    
//     ajaxtemp.parameter = parameters;
//     ajaxtemp.adiv      = adiv ;
//     ajaxtemp.url       =  url;


//     ajaxtemp.ajaxfunction = function(){


// 	    xmlhttp = new XMLHttpRequest();

// 	    if(xmlhttp.XMLHttpRequest){
// 	        xmlhttp = new XMLHttpRequest();
// 	    }else{
// 	        xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
// 	    }

// 	    xmlhttp.onreadystatechange = function(){
// 	        if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
// 	          document.getElementById(this.adiv).innerHTML = xmlhttp.responseText;
// 	        }
// 	    }
	  
// 	    parameters = parameter ;
// 	    xmlhttp.open('POST',this.url,true ); 
// 	    xmlhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
// 	    xmlhttp.send(this.parameter);
//     };

   
//    return ajaxtemp;
    
// };




