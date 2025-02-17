<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tipos primitivos em PHP</title>
</head>
<body>
    <h1>teste de tipos primitivos</h1>
    <?php   
        $nome = "Enzo"; //essa é uma variavel do tipo string
        echo "seu nome é $nome <br>";
        
        $int = 17; //essa é uma variavel do tipo int/integer
        echo "sua idade é $int <br>";
        
        $num = 72.5 ; //essa é uma variavel do tipo float/double
        echo "o seu peso é $num <br>";

        /* se um numero começar com:
        0x - hexadecimal / 0b - binario/ 0 - octal

        nesse exemplo de baixo sera um octal, octal de 010 =8
        */
        $num2 = 010; //essa é uma variavel do tipo float/double
        echo "esse numero é $num2 <br>";

        
        
        $num3 = 3e2;  
        var_dump($num3); //esse comando mostra os dados da variavel!!

        /* potencias geralmente sao float/double em php, nao importa se ela tem . ou nao. para trocarmos entao para integer nesse casos podemos utilizar de um recurso chamado:
        coersao

     */
        $num4 = (int) 3e2;
        var_dump($num4)
    



    
    ?>
    
</body>
</html>