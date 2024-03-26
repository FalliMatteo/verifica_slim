<?php
    class SquadraFemminile extends Squadra implements jsonSerializable{
        private $categoria;

        function __construct($nome, $colore, $categoria){
            parent::__construct($nome, $colore);
            $this->categoria = $categoria;
        }

        function jsonSerialize(){
            return [
                "nome"=>parent->getNome(),
                "colore"=>parent->getColore(),
                "categoria"=>$this->categoria
            ];
        }
    }
?>