<?php

class Pessoa {
    public $nome = null;
    
    function __construct($nome) {
        echo 'Objeto iniciado';
        $this->nome = $nome;
    }

    function __get($atributo){
        return $this->$atributo;
    }
}

$pessoa = new Pessoa('Joao f');
echo '<br />Nome:' . $pessoa->__get('nome');


?>