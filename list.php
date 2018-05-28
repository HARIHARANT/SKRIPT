<style>
  #msg{
	  color:green;
  }   
</style>   

<?php
    include "dbfile.php";
?>

<?php
	   $sql="SELECT name,unused FROM counter WHERE user_count='0'";
	   $result=$conn->query($sql);
	   if($result->num_rows>0){
		   echo "<h2 id='msg'>User not visited site list</h2>";	   
	   while($row=$result->fetch_assoc()){	
           
		   echo $row['name']." ".$row['unused'];
	   }
	   }
	   else{
		   echo"<h2 id='msg'>All pages are visited.</h2>";
	   }
?>