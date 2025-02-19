<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heredoc</title>
</head>
<body>
    <h1>Heredoc</h1>
    <?php 
    $curso = "ciencias da computação";
    $ano = "3ª ano";
    echo <<< FRASE 
        Ola eu estudo $curso e estou no $ano

    FRASE;

    
    ?>
    
</body>
</html>