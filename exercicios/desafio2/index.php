<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteador</title>
    <link rel="stylesheet" href="style.css">
   
</head>
<body>
    <header>
        <h1>Sorteador de Numeros</h1>
    </header>
    <section>
        <p>vamos sortear um numero entre 0 e 100</p>
        <form action="index.php" method="post"><input type="submit" value="sortear"></form>

        <?php 
            
            define("MINIMO", 0);
            define("MAXIMO", 100);
            $num = rand(MINIMO, MAXIMO);
            echo " o numero escolhido é $num";
        ?>
    </section>
    
</body>
</html>