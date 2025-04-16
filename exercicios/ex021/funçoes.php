<?php



function boasVindas()
{
    $zonasaopaulo = new DateTime('now', new DateTimeZone('America/Sao_Paulo'));
    $horario = $zonasaopaulo ->format('H:i');


    if ($horario >=5 && $horario <= 12)
    {
        echo " bom dia! agora são $horario";
    } 
    else if ($horario >= 12 && $horario <= 18)
    {
       echo " boa tarde! agora são $horario";
    } 
    else if($horario >= 18 && $horario <= 24)
    {
       echo " boa noite! agora são $horario";
    }
    
}
function Alistamento()
{
    $idade = $_GET['idade'];
    if ($idade <= 17 || $idade >=65 ){
        echo "<p> Alistamento não obrigatório </p>";
    } else {
        echo "<p> Alistamento obrigatório</p>";
    }
}


?>