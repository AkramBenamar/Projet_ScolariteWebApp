<?php

class Article {


    private $_ida;
    private $_titrea;
    private $_imagea;
    private $_descriptiona;
    private $_liena;
    private $_contenua;
    private $_interess;
    
    public function __construct(array $data){
        $this->hydrate($data);

    }
    public function hydrate(array $data){
        foreach ($data as $key => $value){
            $method='set'.ucfirst($key);
            if (method_exists($this,$method)){
                $this->$method($value);
            }
        }
    }
    //stters
    public function setIda($ida)
    {
        $ida=(int)$ida;
        if($ida>0){
            $this->_ida=$ida;
        }

    }

    public function setTitrea($titrea)
    {
        
        if(is_string($titrea)){
            $this->_titrea=$titrea;
        }

    }
    public function setImagea($imagea)
    {
        
        if(is_string($imagea)){
            $this->_imagea=$imagea;
        }

    }
    public function setDescriptiona($descriptiona)
    {
        
        if(is_string($descriptiona)){
            $this->_descriptiona=$descriptiona;
        }

    }
    
    public function setLiena($liena)
    {
        
        if(is_string($liena)){
            $this->_liena=$liena;
        }

    }
    public function setContenua($contenua)
    {
        
       
            $this->_contenua=$contenua;
      

    }
    public function setInteress($interess)
    {
        
        if(is_string($interess)){
            $this->_interess=$interess;
        }

    }
    
    public function ida(){
        return $this->_ida;

    }
    public function titrea(){
        return $this->_titrea;

    }
    public function imagea(){
        return $this->_imagea;

    }

    
    public function descriptiona(){
        return $this->_descriptiona;

    }
    public function liena(){
        return $this->_liena;

    }
    public function contenua(){
        return $this->_contenua;

    }
    public function interessa(){
        return $this->_interess;

    }
  

        
    }







?>