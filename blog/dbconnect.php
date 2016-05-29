<?php

@mysql_connect("localhost", "root", "student") OR
die("DB server kättesaamatu");

@mysql_select_db("php2016_tom") OR
die("DB kättesaamatu");

?>
