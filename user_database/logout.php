<?php  

session_start();

include "dbconnect.php";
include "functions.php";
include "header.php";

?>

<html>

<head>
<title>Kasutajate andmebaas</title>
</head>

<body bgcolor=AliceBlue text=DarkGoldenRod link=DarkSlateGray></body>

<h3>Kasutaja v�lja logimine</h3>

<?php  

echo $_SESSION['login_user']['name'] . " s�steemist v�lja logitud.";

session_destroy();

?>