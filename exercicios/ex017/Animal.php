<?php 

class Animal{

    public $nome;
    public $cor;
    public $raça;


    public function __construct($_nome)
    {
        $this->nome = $_nome;    
    }
    public function come($_comida)
    {
        echo $this->nome. " está comendo " . $_comida ."<br />";
    }

    public function dorme()
    {
        echo $this->nome. " está dormindo ";
    }
}

?>