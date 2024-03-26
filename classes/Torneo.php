<?php
    class Torneo implements jsonSerializable{
        private $codice;
        private $sede;
        private $data;
        private $partite;

        function __construct($codice, $sede, $data){
            $this->codice = $codice;
            $this->sede = $sede;
            $this->data = $data;
        }

        function getPersona($codice){
            foreach($this->persone as $persona){
                if($persona->getCodiceFiscale() === $codice){
                    return $persona;
                }
            }
            return null;
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