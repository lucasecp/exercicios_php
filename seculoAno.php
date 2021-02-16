<?php

   function seculoAno($ano){
       $ultimosDigitos = substr($ano,-2,2);
       $primeirosDigitos = substr($ano,0,2);
       if($ultimosDigitos == 00) echo $primeirosDigitos ;
       else echo $primeirosDigitos + 1;
   };
   seculoAno(2000);

?>