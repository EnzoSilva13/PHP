<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
        $idade = $_GET['idade'];

        for($aposentar = 64; $idade < $aposentar; $idade++){
            echo"$idade <br>";
        }
        
        
        ?>
    </main>
    
</body>
</html>