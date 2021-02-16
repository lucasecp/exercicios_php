<?php

   function SequenciaCrescente($array){

      for($i = 0; $i < sizeof($array);$i++){
       $qtdNumRemovido = 0;
       if($qtdNumRemovido > 0 ) {$resposta = false;};
       if($array[$i] < $array[$i + 1] || count($array) === 1) {
           $resposta = true;
        }
          else{ 
              $qtdNumRemovido = 1;
            }
      }
     echo $resposta ? 'TRUE': 'FALSE';
   }
   SequenciaCrescente([9,10,11,3,2]);

?>