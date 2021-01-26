<?php   

    function realToFloat($valor){
        $valor = str_replace(',','.',str_replace('.', '', $valor));
        return($valor);    
    }

    function notacaoCientifica($valor){
            $valor = (string) $valor;
            $valor = str_replace('E+','',$valor);
            $valor = str_replace('E-','',$valor);
            $valor = number_format($valor,2,'.','');           
            return($valor);
    } 

    function valorEmReal($valor){
        $valor =  number_format($valor, 2,',','.');
        return($valor);
    }

    function floatTwoDecimals($valor){
        $valor = number_format($valor,2,'.',''); 
        return($valor);
    }
   

     

?>