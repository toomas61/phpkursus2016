<?php  

  @mysql_connect("localhost", "root", "student") OR 
  die("andmebaasi server k�ttesaamatu");

  @mysql_select_db("php2016_tom") OR
  die("andmebaas k�ttesaamatu");

?>
