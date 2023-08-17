<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula-03</title>
</head>
<body>
    <?php 
        $numero1 = 2;
        $numero2 = 8;
        $soma = $numero1 + $numero2; 
        $sub = - $numero1 + $numero2; // subtração
        $mult = $numero1 * $numero2; // multiplicação
        $div = $numero2 / $numero1; // divisão
        $potencia1 = 5 ** 2; // 5 x 5 = 25 potencia
        $potencia2 = pow(4,2); // usando um metodo "pow(number)"
        $raiz_quadrada = sqrt($potencia2);
        $media = 5.3;
        $media_ceil = ceil($media);
        $media_floor = floor($media);
        echo "<h3>$soma </h3> <br>"; 
        echo "<h3>$sub </h3> <br>";
        echo "<h3>$mult </h3> <br>";  
        echo "<h3>$div </h3> <br>"; 
        echo "<h3>$potencia2 </h3> <br>";
        echo "<h3>$raiz_quadrada </h3> <br>" ;
        echo "<h3>$media_floor</h3> <br>"

    ?>
</body>
</html>