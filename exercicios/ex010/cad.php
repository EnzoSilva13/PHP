<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do-while</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>DO-WHILE</h1>
    <main>
        <?php 
        $limite = $_POST['limite'];
        $contar = 0;
        do{
            $contar++;
            echo "$contar<br>";
        }while($contar <= $limite);
        
        
        ?>
    </main>
    
</body>
</html>