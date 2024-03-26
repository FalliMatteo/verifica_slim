<?php
    class Torneo implements jsonSerializable{
        private $codice;
        private $sede;
        private $data;
        private $partite;

        function __construct($codice, $sede, $data, $partite){
            $this->codice = $codice;
            $this->sede = $sede;
            $this->data = $data;
            $this->partite = $partite;
        }

        function addPartita($partita){
            array_push($this->partite, $partita);
        }

        function jsonSerialize(){
            return [
                "codice"=>$this->codice,
                "sede"=>$this->sede,
                "data"=>$this->data,
                "partite"=>$this->partite
            ];
        }
    }
?>