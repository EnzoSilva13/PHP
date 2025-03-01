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
            $converdollar = $dinheiro / 5.89;
            $aproximando = round("$converdollar");
            echo "<p>Seu valor aproximado é $aproximando";


        ?>
        
        
        
        
    </section>


    
</body>
</html>