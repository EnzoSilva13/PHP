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
            $num = $_GET ["num"] ?? "sem numero";
            $antecessor = $_GET ["num"] - 1;
            $sucessor = $_GET ["num"] + 1;

            echo "<ul>
                    <li> seu numero é $num<li>
                    <li> o <strong>antecessor</strong> é $antecessor<li>
                    <li> seu <strong>sucessor</strong> é $sucessor<li>";
            
        ?>
        <br>
        <a href="javascript:history.go (-1)">Voltar</a>
    </section>
    
</body>
</html>