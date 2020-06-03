<!doctype html>
<html>
<head>
   <title> PHP File Handling! </title>
   </head>
   
   <body>
   <?php
   $file=fopen("myfile.txt","w");
   $text = "Hi ,my name is abdul waheed!";
   fwrite($file,$text);
   fclose($file);
   
   ?>
   </body>
   </html>