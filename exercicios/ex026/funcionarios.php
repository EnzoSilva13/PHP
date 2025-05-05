<?php 

class Funcionario {
    private $nome;
    private $registroPonto = [];

    public function __construct($nome) {
        $this ->nome = $nome;
    }
    public function registrarEntrada() {
        $this ->registroPonto[] = ['tipo' => 'Entrada', 'hora' => $entrada];
        echo "{$this->nome} registrou entrada às ".$entrada."horas.";
    }
        
    }




?>