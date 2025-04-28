<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas</title>
    <link rel="stylesheet" href="style.css">
</head>
    <?php 
    //dados coletados
    $nota_um = $_POST['nota1'];
    $nota_dois = $_POST['nota2'];
    $nota_tres = $_POST['nota3'];
    $nota_quatro = $_POST['nota4'];

    //contas

    function CalcularMedia($n1, $n2, $n3, $n4){
        return ($n1 + $n2 + $n3 + $n4) / 4;
        
    }

    $media =CalcularMedia($nota_um, $nota_dois, $nota_tres, $nota_quatro);

    function NivelMedia($media) {
        if ($media >= 0 && $media <= 4 ) {
            return "sua media é $media, voce esta abaixo.";
        } else if ($media > 4 && $media <= 7) {
            return "sua media é $media, voce esta na media.";
        } else if ($media > 7 && $media <=10) {
            return"sua media é $media, parabens voce esta excelente!";
        }
    
    }
    ?>
<body>
    <header>
        <h1>Sistema de desempenho</h1>
    </header>
    <main>
        <p> digite abaixo suas notas para fazermos a media</p>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <input type="number" name="nota1" value="<?=$nota_um?>">
            <input type="number" name="nota2" value="<?=$nota_dois?>">
            <input type="number" name="nota3" value="<?=$nota_tres?>">
            <input type="number" name="nota4" value="<?=$nota_quatro?>">

            <input type="submit" value="calcular">
        </form>
    </main>
    <?php 
    // contas finais
    
   
    $frase = NivelMedia($media);

    echo "<section><p>$frase</p></section>";
    ?>
</body>
</html>