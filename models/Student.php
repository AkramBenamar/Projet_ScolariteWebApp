<?php
class Student {


    private $_ids;
    private $_emp;
    private $_noms;
    private $_prenoms;
    private $_daten;
    private $_activit;
    private $_notes;

    public function __construct($ids,$noms,$prenoms,Emp $emp,array $notes,$daten,$activit){
    

        
        $this->_ids=$ids;
        $this->_emp=$emp;
        $this->_noms=$noms;
        $this->_prenoms=$prenoms;
        $this->_daten=$daten;
        $this->_activit=$activit;
        $this->_notes=$notes;
       
    }
    public function ids(){return $this->_ids;}
    public function emp(){return $this->_emp;}
    public function noms(){return $this->_noms;}
    public function prenoms(){return $this->_prenoms;}
    public function daten(){return $this->_daten;}
    public function activit(){
        return $this->_activit;
    }
    public function notes(){return $this->_notes;}
   
    
}

?>