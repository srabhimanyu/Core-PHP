<!doctype html>
<?php

$expire = time()+ 60*60*24*30;
setcookie("user","www.waheedacademy.com",$expire);

?>
<html>
     <head>
	     <title> PHP Sessions </title>
		</head>
</body>
<?php

 print_r($_COOKIE);

?>
</body>
</html> 
   
