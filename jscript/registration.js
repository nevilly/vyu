// function restrict(elem){
//    var tf =  _(elem);
//    var rx = new RegExp;

//    if(elem == 'username'){
//    	rx = /[' "]/gi;
//    }else if(elem == 'phoneNo'){
//     rx = /[+0-9]/gi;
//    }

//    tf.value = tf.value.replace(rx, "");
// }

// function checkusername(){
// 	var u = _(username).value;
// 	if(u != "")

// 	_('unamestatus').innerHTML = 'Checking ...';
//     var ajax = ajaxObj("POST","extraFunction.php");
//     ajax.onreadystatechange = function(){
//        if (ajaxReturn(ajax)== true) {
//        	_('unamestatus').innerHTML = ajax.responseText;
//        }
// 	}

// 	ajax.send("usernamecheck="+u);
// }
// }


// var id_clicked = document.geElementById('stuedentInfo');
// var id_info = document.geElementById('st_info');

  
function showMe(it, box) {
  var vis = (box.checked) ? "block" : "none";
  document.getElementById(it).style.display = vis;
}


  function dispVisibility(par_one,per_tw){
        //code
    var first_panel =  _(par_one);
    var sec_panel   =  _(per_tw);
    
    first_panel.style.display = "none";
    sec_panel.style.display = "block";
  }
