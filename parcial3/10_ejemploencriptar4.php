<!DOCTYPE html>
<html>
<body>
<?php
$str = "Fernanda";
$str2=md5($str);
 echo "<br>".$str;
 echo "<br>".$str2;
 
 if(md5($str)==$str2)
  {
  echo "<br>Hello world!";
  exit;
  }
?>
</body>
<html>