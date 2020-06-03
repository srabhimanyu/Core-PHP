<!doctype html>
<html>
<head>
    <title> PHP Loops </title>
   </head>

<body>
<?php
 // 1 while loop in php
 
  $num =0;
  
  while($num<30){
	  
	  $num++;
	  
	  echo  "Day Number:". $num . "<br/>";
	  
  }

 // 2 for loop in php
 
  for($year = 1940 ; $year <=2018; $year++) {
      echo "Year  Number" . $year . "<br/>"; 
  }
   
   $friend = array("Ehsan","Xubair","Hakeem");
   $l = count($friend);
   
   foreach($friend as $f){
	   echo $f."<br>";
   }
  

?>

</body>
</html> 




   
	
 