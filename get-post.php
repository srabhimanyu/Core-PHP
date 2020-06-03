<!doctype html>
<html>
<head>
   <title> PHP Get & Post Method </title>
   
   </head>
   
   <body>
   <form action="get-post.php" method="post">
   User: Name : <input type="text" name="value1" placeholder="User Name"/>
   User: Email : <input type="email" name="value2" placeholder="User Email"/>
   <input type="submit" name="submit" value="Submit Now!"/>
   </form>
   
   <?php
      echo $_POST['value1']. "<br/>";
	  echo $_POST['value2']."<br/>";
     
   ?>
   
   </body>
   </html>