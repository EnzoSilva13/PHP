<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if e else</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
            $idade = $_POST['num'] ?? 0;

            if ($idade >= 18) {
                echo "maior de idade";
            } else {
                echo "menor de idade";
            }
        ?>
        <input type="button" value="voltar" onclick="javascript:history.go(-1)">
    </main>
    
</body>
</html>