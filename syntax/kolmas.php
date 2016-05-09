<?php 

$h = date("H");
echo "Kell on $h<br>";

if (
    ($h > 4 AND $h < 10) OR 
    ($h > 21 AND $h < 23)
   )
{
  echo "Mine kohe kalale!<br>";
}
else
{
  echo "Mine magama. Veel pole kalapüügi aeg käes.<br>";
} 

 ?>