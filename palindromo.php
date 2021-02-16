<?php

   function Palindromo($palavra){
      $compararLetras = substr_compare($palavra[0],$palavra[-1],0,1,true);
      if(!$compararLetras || strlen($palavra) === 1) echo 'sim'; //true
      else echo 'não'; 
   };
   Palindromo('amanda');

?>