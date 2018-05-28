<?php
 include "dbfile.php";
?>
<!DOCTYPE>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head> 
<body onload="setTimeout(startTime(),200)">

    <button  onclick="load('facebook');" ><a href="https://www.facebook.com/" target="_blank">Facebook</a></button>
    <button  onclick="load('twitter');" > <a href="https://www.twitter.com" target="_blank">Twitter</a></button>
    <button  onclick="load('linkedin');" ><a href="https://www.linkedin.com" target="_blank">LinkedIn</a></button>
    <button  onclick="load('google');" ><a href="https://www.google.com" target="_blank">Google</a></button>
    <button><a href="list.php" target="_blank">Not Used Page</a></button>
	
	<div id="result"></div>
	  <script>
	       
           function startTime() {
               var today = new Date();
               var h = today.getHours();
               var t = setTimeout(startTime, 500);
			   if(h==24){
				   $.post('store.php',{exp:h},function(data){});
			   }
           }
           function checkTime(i) {
               if (i < 10) {i = "0" + i}; 
               return i;
           }
		   
      </script>
     <script>
	      var click=0;
	      var click2=0;
	      var click3=0;
	      var click4=0;
		  var page1="facebook";
		  var page2="twitter";
		  var page3="linkedin";
		  var page4="google";
	     function load(a){
			 if(a==page1){
			    click=click+1;
			//document.write($total);
	        	var count=click;
				alert(count);
				$.post('store.php',{user_count:count,name:a},function(data){});
			 }
			  if(a==page2){
			    click2=click2+1;
			//document.write($total);
	        	var count=click2;
				alert(count);
				$.post('store.php',{user_count:count,name:a},function(data){});
			 }
			  if(a==page3){
			    click3=click3+1;
			//document.write($total);
	        	var count=click2;
				alert(count);
				$.post('store.php',{user_count:count,name:a},function(data){});
			 }
			 if(a==page4){
			    click4=click4+1;
			//document.write($total);
	        	var count=click4;
				alert(count);
				$.post('store.php',{user_count:count,name:a},function(data){});
			 }
		 }
		 
     </script>
	
	
</body>
</html>