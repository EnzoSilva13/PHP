<?php

$horario = date("G:i:s T");
$horario = 18;

function boasVindas()
{
    

    if ($horario >=5 && $horario <= 12)
    {
        echo "bom dia!";
    } 
    else if ($horario >= 12 && $horario <= 18)
    {
       echo "boa tarde!";
    } 
    else if($horario >= 18 && $horario <= 24)
    {
       echo "boa noite!";
    }
    
}
    

?>