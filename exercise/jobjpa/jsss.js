var divfactory = function(name,age){

	var temp = {};

	temp.age = age;
	temp.name = name;

	 temp.displayinf = function(){
	 	document.write(this.name);
	 };

	 return temp;
};



// var person1 = divfactory('nehemia',25);

// person1.displayinf();



// var divs = function(){
// 	var temp ={};
// 	 temp.divOne = divOne;

	 
// };