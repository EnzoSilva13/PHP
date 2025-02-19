<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>strings</title>
</head>
<body>
    <h1> ASPAS SIMPLES E DUPLAS</h1>

    <?php 
    $nome = 'Enzo';
    $emoji = "\u{1f596}";

    echo  "ola meu nome é $nome $emoji <br>";

// constantes:
    const ESTADO = "SP";
    
    echo "moro em " . ESTADO ;
    
    echo "<br> estamos no ano de ".date('y');
    ?>
    
</body>
</html>
