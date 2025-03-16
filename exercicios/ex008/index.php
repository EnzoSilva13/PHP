<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If e Else</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $server = $_SERVER['PHP_SELF'];
    ?>
    <main>
    <form action="<?php echo "$server";?>" method="get">
        <label for="num">Digite sua idade:</label>
        <input type="number" name="num" id="">
        <input type="submit" value="enviar">
    </form>
    </main>
    <section>
        <?php 
            $num = $_GET['num'] ?? 0;

            if ($num = 0) {
                echo "digite uma idade ";
            } else if ($num >= 18){
                echo "maior de idade";
            } else if ($num < 18){
                echo "menor de idade";  
            } else {
                echo "digite um numero";
            }
        ?>
    </section>
    
</body>
</html>