<?php

   function CalcularArea($num){
     $quadrados = 1;
     for($i = 1 ;$i < $num;$i++ ){
         $quadrados += $i *  4; 
     }
     if($num === 0) echo 0;
     else echo $quadrado
   };
   CalcularArea(3);

?>