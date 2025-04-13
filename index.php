<?php
$x= $_POST["list"];
for($i=1; $i<=10;$i++)
{
   
   $p=$i*$x;
   echo "$i x $x = $p";
};
?>