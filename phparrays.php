<!doctype html>
<html>
<head>
<title> PHP Arrays </title>

 </head>
 
 <body>
 <?php
 
   $city = array("Islamabad in Pakistan","Mumbai is in India","London is in UK","Tokyo is in Japan");
   
   echo "<b> Where is Islamabad </b> <br>" . $city[0];
   echo "<b> Where is Mumbai ? </b> <br>" . $city[1];
   echo "<b> Where is London? </b> <br>". $city[2];
   
   $l = count($city);
  
   echo "<br>";
   echo "The Array through loops <br>";
  
   for($i=0;$i<$l;$i++)
   {
     echo $city[$i];
     echo "<br>"; 	 
   }   
   
 
 ?>
 
 </body>
 </html>