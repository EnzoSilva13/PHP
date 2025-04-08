<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Classes e Objetos</h1>
    </header>
        <?php 
            //dados coletados
            $p = $_POST['produtos'];
            $v = $_POST['valores'];  
        ?>
    <main>
    <h2>Seja bem vindo a loja de materiais</h2>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label for="produtos">digite abaixo o produto</label>
        <input type="text" name="produtos" id="" value="<?=$p?>">
        <label for="valores">digite abaixo o valor</label>
        <input type="number" name="valores" id="" value="<?=$v?>">

        <input type="submit" value="enviar">
    </form>
    </main>
        <?php 
        //area do objeto
        
        class Produto {
            private $nome;
            private $valor;

            private function __construct($nome, $valor)
            {
                $this -> nome = $nome;
                $this -> valor = $valor;
            }

        }

        $novoproduto = new Produto("$nome");
        $novoproduto -> 
        ?>
    
</body>
</html>
