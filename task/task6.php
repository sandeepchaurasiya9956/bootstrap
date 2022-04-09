<?php

$input=readline('enter a number:');

for($x=1;$x<input;$x++)
{
   if($input%$x==0)
   {
   $count++;
   }
   }
   if($count<3)
   {
   echo "prime";
   }else{
   echo "not a prime";
   }

?>