function _(x) {
  return  document.getElementById(x);
}


// function regscholAcc_hideshow(d) {
//         //code
//         var divx = _(d);
// 		var divs = ['Primary_secondInfo',
// 					'Unversity_collageInfo'					
// 				];
       
// 	    for (var i = 0; i < divs.length; i++) {
//            //code
//        		if (divx  != _(divs[i])){
// 			  _(divs[i]).style.display = 'none';
//             }
//         }
// 		divx.style.display = 'block';    
//     }

// function regscholAcchideshow(d) {
//         //code
//         var divx = _(d);
// 		var divs = ['displaySeachresult',
// 					'shopcartBell',
// 					'bellNotification',
// 					'topHeaderMor',
// 					'topHeaderMore'					
// 				];
       
// 	    for (var i = 0; i < divs.length; i++) {
//            //code
//        		if (divx  != _(divs[i])){
// 			  _(divs[i]).style.display = 'none';
//             }
//         }
// 		divx.style.display = 'block';    
//     }





function checkbox_register(parone,partwo){
     first_par = (parone);
     sec_par = (partwo).value;

     if(sec_par == ""){
     	alert("empty ");
     }else if(sec_par == true){
     	alert("yes");
     }

}








	function dispVisibility(par_one,per_tw){
        //code
		var first_panel =  _(par_one);
		var sec_panel   =  _(per_tw);
		
		first_panel.style.display = "none";
		sec_panel.style.display = "block";
	}