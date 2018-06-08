$(function(){ 
     var navMain = $("#bs-example-navbar-collapse-1");

     navMain.on("click", "a", null, function () {
         navMain.collapse('hide');
     });
 });