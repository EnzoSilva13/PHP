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
            $reais = $_GET["numero"];
            $dollar = 5.88;
            $converdollar = $reais / $dollar;
            $aproximando = round("$converdollar");
            
            $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
            
            echo "<p>o seu valor é ". numfmt_format_currency($padrao, $reais,"BRL"). " Seu valor aproximado é US\$" . $aproximando ."dolares.<br><br>";

            


        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
        
        
        
        
    </section>


    
</body>
</html>