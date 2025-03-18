<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>continue</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header></header>
    <main>
        <?php 
         while($i++ < 10){
            if($i == 6) continue;
            echo $i . "\n";
        }
        ?>
    </main>
</body>
</html>