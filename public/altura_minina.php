<?php
    $n_brinquedos = readline("Digite a quantidade de brinquedos: ");
    $altura_carlitos = readline("Digite a altura de Carlitos: ");
    $altura_minina = array();
    $brinquedos_acessiveis = 0 ;

        for($i=0; $i<$n_brinquedos; $i++){
            $altura_minina[$i] = readline("Digite a altura do proximo brinquedo: ");
                if($altura_minina[$i] <= $altura_carlitos){
                    $brinquedos_acessiveis++;
                }
        }

    echo $brinquedos_acessiveis;
