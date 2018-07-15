<!DOCTYPE html>
<html lang="en">
    <head>
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

     <script type="text/javascript">
      // Load google charts
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      // Draw the chart and set the chart values
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
        ['Task', 'Hours per Day'],
        ['Work', 8],
        ['Eat', 2],
        ['TV', 4],
        ['Gym', 2],
        ['Sleep', 8]
      ]);

        // Optional; add a title and set the width and height of the chart
        var options = {'title':'My Average Day', 'width':550, 'height':400};

        // Display the chart inside the <div> element with id="piechart"
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
      }
      </script>

    </head>
 <body>

     <div id="piechart"></div>

 </body>
 </html>













































 <!DOCTYPE html>
<html lang="en">
    <head>

    
    </head>
 <body>
  <script>
     
     // function red(){
     //   var  arg = arguments.length;
     //   alert(arg);

     //   var tost = arguments[3].valueOf();
     //   alert(tost);
     // }
  // red('a','b','c','d');
  //push & pop push=> is like to add last element in array; pop is to remove last element in array
 //  var stack = new Array;
 //  stack.push('nehemia');
 //  stack.push('jam');
 //  stack.push('nehemia');
 //  var item = stack.pop();
 //  alert(item);
 // document.write(stack.toString());

//shift() & ushift() it  shift it remov first itm in array and return as function value;unshift it add item in first elemnt of array;

// var aNum = ["red","green","Yellw"];
//   var item = aNum.shift();
//   document.write(item);   // out put red; return as the fucntio value
//   item.toString();        //   "green,Yellw";


//   aNum.unshift('tree');
//   aNum.toString();        //  "tree,green,Yellw"

//   aNum.reverse();//// used to rverse array
//   aNum.toString()    // out put  "Yellw,green,tree";

//   anamba = [4,3,1,2,8,6,9,7];
//   anamba.sort() ////// used to arrange array in ascending order
//   anamba.toString()    // out put  "1,2,3,4,6,7,8,9"

//   anamba = [4,3,1,2,8,6,9,7];
//   anamba.spite() ////// used to remov and replace
//   anamba.toString()    // out put  "1,2,3,4,6,7,8,9"




//object

   // var myObj = {
   //     "foo" :"value",
   //     'gender' : 'male',
   //      'street' : 'buguru',
   //      "viungo ":{
   //          "cha1":"kichwa",
   //          "cha2":"shingo",
   //          "ch3":"timbo"
   //      }

   // };
   // console.log(myObj);
 

//  var empl1 ={};
//   empl1.firsNm = "Nehemia";
//   empl1.lastsNm = "Mwansau";
//   empl1.pos = "CEo";


// var empl2 ={};
//   empl2.firsNm = "Nehe";
//   empl2.lastsNm = "Mwan";
//   empl2.pos = "CEop";



// function employee(firsNm,lastsNm,pos){
//     var empl ={};
//     empl.firsNm = firsNm;
//     empl.lastsNm = lastsNm;
//     empl.pos = pos;
//     return empl;

// }

// var  emp3 =employee("ff",'ll',"Maeger");
 
// var bicyle1 = creatBycicle(50,20,4);   
// var bicyle3 = creatBycicle(5,0,4);   

// function creatBycicle(cadence,speed,gear){
//      var newBicyle = {};
//      newBicyle.cadence = cadence;
//      newBicyle.gear = gear;
//      newBicyle.speed = speed;

//      return newBicyle;
// }

// function Bicob(cadence,gear,speed){
//      // var this = {};
//      this.cadence = cadence;
//      this.gear = gear;
//      this.speed = speed;

//      // return this;

// }


// bycle = new Bicob(2,4,9);


//  function Bicycle( cadence,speed,gear,tirePressure){
//       this.cadence = cadence;
//       this.speed = speed;
//       this.gear  = gear;
//       this.tirePressure = tirePressure;

//       this.inflateTires = function(){
//            this.tirePressure += 3;
//       }
//  }

//  function fundi(name){
//       this.name = name;
//  }

//  var bicyle = new Bicycle(34,2,5,45);
//  bicyle.inflateTires();

// var neh  = new fundi("Nehemia");

// neh.Bicycle.call();
//   </script>

<!-- //  <button onclick = "howmanyarg('a', 'e', 6,);
;">click</button>
 -->  








 </body>
 </html>

