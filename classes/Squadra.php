<?php
    class Squadra implements jsonSerializable{
        private $nome;
        private $colore;

        function __construct($nome, $colore){
            $this->nome = $nome;
            $this->colore = $colore;
        }

        function getNome(){
            return $this->nome;
        }

        function getColore(){
            return $this->colore;
        }

        function jsonSerialize(){
            return [
                "nome"=>$this->nome,
                "colore"=>$this->colore
            ];
        }
    }
?>