<?php
    include "dbfile.php";
?>
<?php
         
	      $lastcount=$_POST['user_count'];
	      $column_name=$_POST['name'];
				$add=$conn->query("UPDATE counter SET user_count='$lastcount' WHERE name='$column_name'");
?>
<?php
         
	            $expiry=$_POST['exp'];
				if($expiry==24){
					$add=$conn->query("UPDATE counter SET user_count='0'");
					$count=0;
					$count=$count+1;
					$notused=$conn->query("UPDATE counter SET unused='$count' WHERE user_count='0'");
							}
				
?>