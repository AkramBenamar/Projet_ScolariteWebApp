<?php

class Ensresp {


    private $_ide;
    private $_nome;
    private $_prenome;
    private $_horaire;
    
    public function __construct($ide,$nome,$prenome,array $horaire){
        //$this->hydrate($data);
        $this->_ide=$ide;
        $this->_nome=$nome;
        $this->_prenome=$prenome;
        $this->_horaire=$horaire;

    }
    
    
    
    public function ide(){
        return $this->_ide;

    }
    public function prenome(){
        return $this->_prenome;

    }
    public function nome(){
        return $this->_nome;

    }

    
    public function horaire(){
        return $this->_horaire;

    }
      

        
    }







?>