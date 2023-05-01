<?php 

    function pagamento_conversor($input){
        if ($input==0 or $input == null){
           $estado = "Pendente";
           return $estado;
        }else{
            $estado = "Finalizado";
            return $estado;
        }

    }

?>