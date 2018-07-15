<html>
<head>
<script type="text/javascript">
    if (document.addEventListener) { // IE >= 9; other browsers
       
     function _(x){
        return  document.getElementById('x');
     }

        document.addEventListener('contextmenu', function(e) {
           // here you draw your own menu
           

            // var div = document.createElement('div'); div.setAttribute("id", "mymenu");

            // var tmenu = document.createTextNode('<div #bodyWraper'); 

            // var menu = div.appendChild(tmenu);
            // document.body. appendChild(div);



            var div = document.createElement('div'); div.setAttribute("id", "mymenu");
            var c_div = document.createElement('div'); c_div.setAttribute("id", "creatDiv");

            var tmenu = _('creatDiv').createTextNode('Create Div'); 

            var menu = div.appendChild(c_div);
            document.body. appendChild(div);

            // var tab = document.createElement("showm");
            // var tmen = document.createTextNode("div .Nehemia");

            // document.getElementById('one').appendChild(tab);
             




            //style
             mymenu = _('mymenu');
             mymenu.style.background = 'silver';
              mymenu.style.width = '200px';
             mymenu.style.height = '400px';
             mymenu.style.border =  '1px solid red';
             mymenu.style.borderRadius =  '1px';
             mymenu.style.boxShadow = '1px 6px 3px 3px #ccc';

            // mymenu[0].style.WebkitFilter = 'blur(4px)';

            //ctxMenu.style.display = "block";
        //     mymenu.style.left = (event.pageX - 10)+"px";
        //     mymenu.style.top = (event.pageY - 10)+"px";

        //     mymenu.style.display = "";
        // mymenu.style.left = "";
        // mymenu.style.top = "";
            

            e.preventDefault();
        }, false);
    } else { // IE < 9
        document.attachEvent('oncontextmenu', function() {
            alert("You've tried to open context menu");
            window.event.returnValue = false;
        });
    }
</script>
</head>
<body>
<div id = "one">mamma</div>
<div id = "two">sdfsdfs</div>
<div id = "three">sdfsfs</div>
<div id = "one">mamma</div>
<div id = "two">sdfsdfs</div>
<div id = "three">sdfsfs</div>
<div id = "one">mamma</div>
<div id = "two">sdfsdfs</div>
<div id = "three">sdfsfs</div>
</body>
</html>

<!-- <html>
<head>

    <style>
        
        #ctxMenu{
    display:none;
    z-index:100;
}
div {
    position:absolute;
    display:block;
    left:0px;
    top:0px;
    height:20px;
    width:20px;
    padding:0;
    margin:0;
    border:1px solid;
    background-color:white;
    font-weight:normal;
    white-space:nowrap;
}
div:hover{
    background-color:#eef;
    font-weight:bold;
}
div:hover > div{
    display:block;
}
div > div{
    display:none;
    position:relative;
    top:-20px;
    left:100%;
    width:55px;
}

div[title]:before{
    content:attr(title);
}
div:not([title]):before{
    content:"\2630";
}
</style>

<script type="text/javascript">
       var notepad = document.getElementById("notepad");
    notepad.addEventListener("contextmenu",function(event){
        event.preventDefault();
        var ctxMenu = document.getElementById("ctxMenu");
        ctxMenu.style.display = "block";
        ctxMenu.style.left = (event.pageX - 10)+"px";
        ctxMenu.style.top = (event.pageY - 10)+"px";
    },false);
    notepad.addEventListener("click",function(event){
        var ctxMenu = document.getElementById("ctxMenu");
        ctxMenu.style.display = "";
        ctxMenu.style.left = "";
        ctxMenu.style.top = "";
    },false);
</script>
</head>
<body>

<div id="ctxMenu">
    <div title="File">
        <div title="Save"></div>
        <div title="Save As"></div>
        <div title="Open"></div>
    </div>
    <div title="Edit">
        <div title="Cut"></div>
        <div title="Copy"></div>
        <div title="Paste"></div>
    </div>
</div>


</body>
</html> -->