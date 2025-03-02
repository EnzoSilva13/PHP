<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Antecessor e Sucessor</h1>
    </header>
    <section>
        <p>aqui esta o resultado:</p>
        <?php 
            $num = $_REQUEST ["num"] ?? "sem numero";
            $antecessor = $_REQUEST ["num"] - 1;
            $sucessor = $_REQUEST ["num"] + 1;

            echo "<ul>
                    <li> seu numero é $num <br><br>
                    <li> o <strong>antecessor</strong> é $antecessor<br><br>
                    <li> seu <strong>sucessor</strong> é ". ($num + 1) . "\n <br>";
            //aqui estao 2 jeitos que podem ser feito
            
        ?>
        <br>
        <button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>
        
    </section>
    
</body>
</html>