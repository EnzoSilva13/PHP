<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculadora de tempo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Calculadora de Tempo</h1>
    </header>
        <?php 
        //dados coletados
        $tempo = $_GET['tempo'];
        ?>
    <main>
        <p>digite um valor abaixo:</p>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <input type="number" name="tempo" id="" value="<?=$tempo?>">
        <input type="submit" value="calcular">
    </form>    
    </main>
    <section>
        <h2>resultado:</h2>
        <?php 
           //contas e resultado
           $semana = intdiv($tempo , 604800);
           $semana_resto = $tempo % 604800; 

           $dia = intdiv($semana_resto , 86400);
           $dia_resto = $semana_resto % 86400;

           $hora = intdiv($dia_resto, 3600);
           $hora_resto = $dia_resto % 3600;

           $minuto = intdiv($hora_resto, 60);
           $segundos= $hora_resto % 60;

            echo "o resultado baseado em <strong>".number_format($tempo, 0, ",", ".")."</strong> é:";
            echo "<ul>
                  <li> <strong>$semana</strong>  semanas </li>
                  <li> <strong>$dia</strong>  dias </li>
                  <li> <strong>$hora</strong>  horas </li>
                  <li> <strong>$minuto</strong>  minutos </li> 
                  <li> <strong>$segundos</strong> segundos </li> 
                  </ul>  "
                  
        ?>
    </section>
</body>
</html>
