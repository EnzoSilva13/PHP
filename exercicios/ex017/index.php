<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes e Objetos</title>
</head>
<body>
    <header>
        <h1>Classes e Objetos</h1>
    </header>
    <main>
        <?php 
        
        include 'Animal.php';

        $cachorra = new Animal("July");
        $cachorra -> come("carne");
        $cachorra -> dorme();
        
        ?>
    </main>
</body>
</html>