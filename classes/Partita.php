<?php
    class Collettivita implements jsonSerializable{
        private $id;
        private $squadra1;
        private $squadra2;
        private $goal1;
        private $goal2;

        function __construct($id, $squadra1, $squadra2, $goal1, $goal2){
            $this->id = $id;
            $this->squadra1 = $squadra1;
            $this->squadra2 = $squadra2;
            $this->goal1 = $goal1;
            $this->goal2 = $goal2;
        }

        function jsonSerialize(){
            return [
                "id"=>$this->id,
                "squadra1"=>$this->squadra1,
                "squadra2"=>$this->squadra2,
                "goal1"=>$this->goal1,
                "goal2"=>$this->goal2
            ];
        }
    }
?>