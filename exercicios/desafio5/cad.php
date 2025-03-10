<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisador de numeros</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Analisador de Numeros</h1>
    </header>
    <main>
        <?php 
            $num = $_POST["num"] ?? 0;
            echo "<p> Analisando o numero <strong>".number_format($num, 3, ",", ".")."</strong> informado pelo usuario:";

            $int = (int)$num;
            $fra = $num - $int;

            echo "<ul><li> A parte inteira deste numero é <strong>".number_format($int, 0)."</strong>";
            echo "<li> A parte fracionaria é <strong>".number_format($fra, 3, ",", ".")."</strong>";

        ?>    
        <button onclick="javascript:history.go(-1)">voltar</button>
    </main>
    
</body>
</html>