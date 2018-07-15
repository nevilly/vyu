



	self = {}

	
   


    self.html = function(){
        console.log(self.element);
    }

    self.getid = function(arg){

    	self.selector = selector,
	self.element = document.querySelector(self.selector),
	self.id = document.getElementsById(self.selector),

    	// self.selector =  arg;
    	// self.id =  document.getElementsById(arg);
    	alert('work')
    }

    self.err = function(msg){

    	if(typeof msg === 'object'){
    		console.log('is object ');
    	}else(
            console.log('is not')
        )

        console.log(msg)
    	
    }



 








// var data = [],childs = '',subs = [];

// function saveTimeTable(){

// 	var h = document.querySelectorAll('.tholder');

// 	for(var i = 0; i <= h.length -1; i++){
// 		var pid = h[i].id.replace(new RegExp(/[^0-9]/,'g'),'');
// 		console.log(pid+"id::"+i)
// 		if(pid == i){

// 			var form = document.querySelector('#holddiv'+pid+' > .darasa > .whichClass > .WhichClas'),
// 			cat = document.querySelector('#holddiv'+pid+' > .darasa > .whichCategor > .WhichCategor'),
// 			date = document.querySelector('#holddiv'+pid+' > .showwlpanel > .daterecord > .datefortymtable'),
// 			time_start = document.querySelector('#holddiv'+pid+' > .showtime > .timeFortimeTable >  .start_tmtable > .startclassperiod'),
// 			time_end = document.querySelector('#holddiv'+pid+' > .showtime > .timeFortimeTable > .Endtime > .Endclassperiod'),
// 			subj = document.querySelector('#holddiv'+pid+' > .showsubject > .child3Wraper > .choose_topics > .topics > .tymtable_selectTopic'),
// 			subtop = document.querySelector('#holddiv'+pid+' > .showsubject > .child3Wraper > .choose_topics > .selectSub > .subtopicttle > .subtopic_list');

// 			// if(typeof form != 'undefined' && form != null && typeof cat != 'undefined' && cat != null){

// 			// }

// 			form = form.value;
// 			cat = cat.value;
// 			date = date.value;
// 			time_start = time_start.value;
// 			time_end = time_end.value;
// 			subj = subj.value;



// 			var datas = {form:[form,cat,date,time_start,time_end,subj,{subtopic:subs}],parent_id:pid}

// 			data.push(datas);
// 			var parent_id = '';


// 			if(subtop != null){
// 				var ch = subtop.children,x = 0;
// 				while(ch[x]){
// 					var cc = document.querySelector('.subst'+x+' > .chooseSubtopic > .subtoptc_checkbox');
// 					console.log(cc)
// 					if(cc != null){

// 						console.log(data)

// 					parent_id = cc.id.replace(new RegExp(/[^0-9]/,'g'),''); //child class parent id
// 					}


// 					if(cc != null && cc.checked && data[x].parent_id == parent_id){
// 						cc = cc.value;
						
// 					console.log(data[x].parent_id)
// 						data[x].subtopic.push(cc);
// 					}

// 					x++;
// 				}
			
// 			}



// 		}else{
// 			subs = '';
// 		}
// 	}

//     console.log(data)

//     url       = 'insidefunc.php';
// 	adiv      = divResult;
// 	parameter = 'Selectvalue='+Selectvalue+'&&subject_id='+data;
// 	findAcc(adiv,url,parameter);
// }

