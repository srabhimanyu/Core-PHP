<!doctype html>
<html>
<head>
<title> PHP If & Else </title>
  </head>
<body>
<?php

$value1=123;
$value2= 1235;

if($value1==$value2) {
	 echo "The condition is true <br/>";
}

else {
	echo "The condition is not true <br/>";
	
} 

// second example

  $city = "Syedney";
  
    if($city=="Syedney"){
     echo $city. "Is in Australia<br/>";	
	 
	}	
    
	else {
		echo $city. "Is not in Australia<br/>";
		
	}
  $person ="xubair";
  $weight = 80;

   if($person <=80){
	     echo $person . "Is not very fat!";
   }
   
   else {
     echo $person. "Is Very fat";

   }
	   
	   

?>

</body>
</html>