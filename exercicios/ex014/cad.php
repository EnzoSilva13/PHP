<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch e CAse</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Switch e Case e Default</h1>
    </header>
    <main>
        <?php 
        $i = 3;
        switch ($i) {
            case 0:
                echo "i é igual a 0 <br>";
                
            case 1:
                echo "i é igual a 1 <br>";
                
            case 2:
                echo "i é igual a 2 <br>";
                 break;
            default :
                echo "i não é igual a 0, nem 1, nem 2";
        }
        ?>
    </main>
</body>
</html>