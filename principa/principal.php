<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once('/xampp/htdocs/PHP/poo/caneta/caneta.php');
    function caneta1()
    {
        $c1 = new Caneta("","");
        //criei para facilitar o manuseamento dos metodos getters e setters
        $c1cor = $c1->setCor("azul");
        $c1gc = $c1->getCor();
        $c1sp = $c1->setPreco(2.0); 
        $c1gp = $c1->getPreco();
        $msgdecor =  print("<h1>cor da caneta $c1gc</h1> <br>");
        $msgdepreco = print("<h1>preço: $c1gp</h1>");
        echo"você irá comprar a caneta?";
        $es = "n";
        echo "<p>$es</p>";
            if($es=="s")
            {
                $c1c = $c1->Comprar(2);
            }
            else
            {
                echo "continue navegando";
            }
    }
    function caneta2(){
        $c2 = new Caneta("roxo",3);
        print_r($c2);
    }
    caneta2();
    ?>
</body>
</html>