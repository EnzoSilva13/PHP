<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>troque seu dinheiro</title>
    <link rel="stylesheet" href="style.css">
   
</head>
<body>
    <header>
        <h1>Conversor de moedas</h1>
    </header>
    <section>
        <?php 
            $dinheiro = $_GET["numero"];
            $dollar = 5.88;
            $converdollar = $dinheiro / $dollar;
            $aproximando = round("$converdollar");
            echo "<p>O dolar esta valendo $dollar,
            Seu valor aproximado é $aproximando dolares.";


        ?>
        
        
        
        
    </section>


    
</body>
</html>