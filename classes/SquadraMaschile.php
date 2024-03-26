<?php
    class SquadraMaschile extends Squadra implements jsonSerializable{
        private $codice_csen;
        private $p_iva;

        function __construct($nome, $colore, $codice_csen, $p_iva){
            parent::__construct($nome, $colore);
            $this->codice_csen = $codice_csen;
            $this->p_iva = $p_iva;
        }

        function jsonSerialize(){
            return [
                "nome"=>parent::getNome(),
                "colore"=>parent::getColore(),
                "codice_csen"=>$this->codice_csen,
                "p_iva"=>$this->p_iva
            ];
        }
    }
?>