function vyu(){}

vyu.prototype.getId = function(selector){
	var el={}
	el.init = selector;

	if(typeof el.init == "object"){
              el.init = selector;
	}else {
        el.init = document.querySelector(el.init);
	};

	el.class = function(){
		return this.init.className;
	};

	return el;
};

var vyu =  new vyu();

$ = function(selector){
	return vyu.getId(selector);
}

$$ = function(){
	return vyu;
}






