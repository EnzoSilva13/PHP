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
        <form action="index.php" method="get">
        <?php 
            echo"<p> utilizando constantes e rand()
            um algoritimo de 1951 - Linear Confretial Gererator <br><br>";
            
            define("MINIMO", 0);
            define("MAXIMO", 100);
            


            $num = rand(MINIMO, MAXIMO);
            echo " o numero escolhido é $num";
            //esse é o jeito definindo constantes com define
        ?>
        
        <form action="index.php" method="post">
        <?php 
            echo"<p> nesse utiliza-se o mt_rand() de 1997 - Mersenne Twister que é 4x melhor que o outro <br><br>";

            $min= 0;
            $max =100;
            


            $num = mt_rand($min,$max);
            echo " o numero escolhido é $num <br>";

            
        ?>
        <?php 
            echo"<p> nesse utilizamos a funçao random_int() que gera numeros criptograficamente seguros, esse é lento.";

            const MINIMO2= 0;
            const MAXIMO3= 100;
            


            $num = mt_rand(MINIMO2, MAXIMO3);
            echo " o numero escolhido é $num <br>";

            $page = $_SERVER['PHP_SELF'];
            $sec = 1;
            header("Refresh: $sec;url=$page");

        ?>
        <input type="submit" value="sortear"></form>
    </section>
    
</body>
</html>