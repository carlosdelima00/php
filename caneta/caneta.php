<?php 
    class Caneta{
        private $cor;
        private $preco;
        public function  __construct($cor,$preco)
        {   
            $this->cor = $cor;
            $this->preco = $preco;
            


        }
        public function getCor()
        {
            return $this->cor;
        }
        public function setCor($c)
        {
            $this->cor=$c;
        }
        public function setPreco($p)
        {
            $this->preco = $p;
        }
        public function getPreco()
        {
            return $this->preco;
        }
        public function Comprar($d)
        {   
            $dinheiro = $d;
            print("dinheiro: $dinheiro");
            if($dinheiro < 2)
            {
                $comprado = false;
                echo"<br>não possui dinheiro";
                
            }
            else
            {
                $comprado = true;
                echo $comprado ?"<br>você comprou":"";
            }


        }

        
    };
    
?>