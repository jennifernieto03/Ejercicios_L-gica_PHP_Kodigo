<?php

function sumPar($ar){
    $acumulador=0;
    for($i=0;$i<count($ar);$i++){
        if($ar[$i]%2==0){
            $acumulador+=$ar[$i];
        }
    }return $acumulador;

}
echo sumPar([1,2,3,4,5,6,7,8]);