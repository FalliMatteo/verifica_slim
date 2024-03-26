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

        function getCodice(){
            return $this->codice;
        }

        function getPartite(){
            return $this->partite;
        }

        function getPartita($id){
            var_dump($this->partite);
            foreach($this->partite as $partita){
                if($partita::getId() == $id){
                    return $partita;
                }
            }
            return null;
        }

        function getDisputate(){
            $partite = array();
            foreach($this->partite as $partita){
                if($partita::isDisputata()){
                    array_push($partite, $partita);
                }
            }
            return $partite;
        }

        function getNonDisputate(){
            $partite = array();
            foreach($this->partite as $partita){
                if(!$partita::isDisputata()){
                    array_push($partite, $partita);
                }
            }
            return $partite;
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