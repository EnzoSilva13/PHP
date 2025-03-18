<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Break</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Break </h1>
    </header>
    <main>
        <?php 
        $i = 0;
        while($i++ < 10) {
            if ($i == 6) break;
            echo $i . "\n";
        }
       
        ?>
    </main>
</body>
</html>