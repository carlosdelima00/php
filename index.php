<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    class Pessoa{
        public $nome;
        public $idade;
        function __construct($nome,$idade)
        {
            $this->nome = $nome;
            $this->idade = $idade;
            
        }
        function mostras(){
            echo "$this->nome e $this->idade";
        }
        function andar(){
            $andando = true;
            if($andando)
            {
                print("está andando");
            }
            else
            {
                $andando = false;

            }
        }

    };

    class Aluno extends Pessoa{
        public $escola;
        function __construct($nomescola)
        {
            $this->escola = $nomescola;
            
        }
        function mostraescola()
        {
            echo"$this->escola";

        }
    }

    $pessoa1 = new Pessoa("carlos",17);
    $pessoa1 = new Aluno("liceu");
    
    $pessoa2 = new Pessoa("léo",25);
    
    echo"<br>";
    $pessoa1->mostraescola();
    echo"<br>";
    $pessoa1->mostras();
    echo"<br>";
    $pessoa1->andar();
    echo"<br>";
    $pessoa2->mostras();
    echo"<br>";
    $pessoa2->andar();
    ?>
    
</body>
</html>