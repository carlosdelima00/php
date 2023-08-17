<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula-2(varaivel)</title>
</head>
<body>
    <p> Nome e sobrenome: </p>
    <?php 
        
        const ANODENASCIMENTO = 2005;
        $anoAtual = 2023;
        $IDADE = $anoAtual - ANODENASCIMENTO;
        $nome = "Carlos";
        $sobrenome = "de Lima";
        echo "<h1>$nome $sobrenome</h1>";
        echo "<h2> você terá em $anoAtual essa idade: $IDADE <i>anos</i> </h2>";
    ?>
</body>
</html>